<?php
session_start();
//error_reporting(0);
require_once('../database.php');

if (isset($_POST['token'])) {

    $dates = array();
    $air = array();
    $road = array();
    $train = array();
    $sea = array();

    $sql = "SELECT tbl_courier.pick_date AS pdate,SUM(case when tbl_courier.mode ='Air' then 1 end) AS air ,SUM(case when tbl_courier.mode='Train' then 1 end) AS train ,SUM(case when tbl_courier.mode='Sea' then 1 end) AS sea ,SUM(case when tbl_courier.mode='Road' then 1 end) AS road FROM `tbl_courier` GROUP BY pick_date";

    $result = dbQuery($sql);

    if ($result->num_rows > 0) {
        // output data of each row
        while ($row = $result->fetch_assoc()) {
            array_push($dates, $row['pdate']);
            array_push($air, $row['air'] != null ? (int)$row['air']:0);
            array_push($road, $row['road'] != null ? (int)$row['road']:0);
            array_push($sea, $row['sea'] != null ? (int)$row['sea']:0);
            array_push($train, $row['train'] != null ? (int)$row['train']:0);
        }
    } else {
        echo "0 results";
    }
    draw_graph(array_unique($dates), $air, $road, $sea, $train, "Shipping Modes", "Total", "column");
}

function draw_graph($dates, $air, $road, $sea, $train, $title, $yaxis, $graph_type)
{
    $data = get_column_graph($dates, $air, $road, $sea, $train, $title, $yaxis, $graph_type);
    deliver_response(200, 1, $data);
}

function get_column_graph($dates, $air, $road, $sea, $train, $title, $yaxis, $graph_type)
{
    $json['credits'] = array('enabled' => 1);

    $json['exporting'] = array('enabled' => true);

    $json['chart'] = array('type' => $graph_type);

    $json['title'] = array('text' => $title);
    $json['yAxis'] = array('pointFormat' => array("Value" => "{point.y:.8f}"), "title" => array("text" => $yaxis));

    $json['tooltip'] = array("headerFormat" =>
        '<span style="font-size:10px">{point.key}</span><table>',
        "pointFormat" => '<tr><td style="color:{series.color};padding:0">{series.name}: </td><td style="padding:0"><b>{point.y:.8f}</b></td></tr>',
        "footerFormat" => '</table>', "shared" => true,
        "useHTML" => true);

    $json['plotOptions'] = array(
        "column" => array(
            "pointPadding" => 0.2,
            'borderWidth' => 0
        ));
    $json['xAxis'] = array('categories' => $dates, 'crosshair' => false);

    $json['series'] =
        array(array('name' => 'Air', 'data' => $air),
        array('name' => 'Road', 'data' => $road),
        array('name' => 'Sea', 'data' => $sea),
        array('name' => 'Train', 'data' => $train)
    );
    return $json;
}

function deliver_response($status, $status_message, $data)
{
    header("HTTP/1.1 $status $status_message");
    if ($data != null) {
        $response = $data;
    } else {
        $response['status'] = $status;
        $response['status_message'] = $status_message;
    }
    $json_response = json_encode($response);
    echo $json_response;
}

?>