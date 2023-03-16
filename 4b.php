<?php 
$hardware = ['Processor','Hard Disk','Motherboard','VGA Color','SSD','Monitor' ]
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 4b</title>
</head>
<body>
    <h2>Macam-macam Perangkat Keras Komputer</h2>
    <ol>
    <?php foreach($hardware as $h) { ?>
        <li><?= $h; ?></li>
        <?php } ?>
    </ol>
    <br><br>
    
    <h2>Macam-macam Perangkat keras komputer</h2>
    <?php 
    array_push($hardware, 'card Reader','Modem');
    asort($hardware);
    ?>
    <ol>
            <?php foreach($hardware as $h) { ?>
            <li><?= $h; ?></li>
            <?php } ?>
        </ol>