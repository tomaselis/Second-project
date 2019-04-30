<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>php</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<h3>PHP lydes ir <?php print date('Y-m-d', strtotime('+' . rand(0, 10) . 'years'));?></h3>
<h1> Tomas - galbut turesiu <?php print rand(2, 5) . ' vaikus';?></h1>
<p>D. Trumpas nebebus prezidentu <?php print rand(2021, 2031) . date('-m-d');?></p>
</body>
</html>