<?php
include_once('pdo.php');

//Select de users
$stmt = $pdo->query("SELECT * FROM `sensors`.`data_sensors`");
$data_sensors = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
       <meta charset="UTF-8">
       <title Dashboard> </title>
</head>
<body>
      <?php
            foreach ($data_sensors as $usuarios){
                echo $usuarios['id']."<br>",
                $usuarios['sensorID']."<br>",
                $usuarios['measure_label']."<br>",
                $usuarios['measure_value']."<br>",
                $usuarios['latitude']."<br>",
                $usuarios['longitude']."<br>";
            }

      ?>
</body>
</html>



