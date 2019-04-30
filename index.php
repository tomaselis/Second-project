<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>php</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body style="background-color: rgb(<?php print rand(0, 255) . ',' . rand(0, 255) . ',' .  rand(0, 255);?>)" >
<h3>PHP lydes ir <?php print date('Y-m-d', strtotime('+' . rand(0, 10) . 'years'));?></h3>
<h1 style="font-size: <?php print rand(20, 80) . 'px'?>"> Tomas - galbut turesiu <?php print rand(2, 5) . ' vaikus';?></h1>
<p style="color: rgb(<?php print rand(0, 255) . ',' . rand(0, 255) . ',' .  rand(0, 255);?>)">D. Trumpas nebebus prezidentu <?php print rand(2021, 2031) . date('-m-d');?></p>
</body>
</html>