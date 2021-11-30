<?php
include_once('pdo.php');

//Select de usuarios
$stmt = $pdo->query('select * from `sensors`.`data_sensors`');
$data_sensors = $stmt->fetchAll(PDO::FETCH_ASSOC);


$response = array();
foreach ($data_sensors as $data)
{
    $response[] = array("ID"=>$data['id'],
                        "Sensor"=>$data['sensorID'],
                       "Label"=>$data['measure_label'],
                       "Measure"=>$data['measure_value'],
                       "Latitude"=>$data['latitude'],
                       "Longitude"=>$data['longitude']);
}
header('Content-Type: application/json');
echo json_encode($response);
//print_r($response);
exit;

?>