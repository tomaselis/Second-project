<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP lydes ir <?php print 'ryt' . date('Y-m-d', strtotime('+1 days'));?></title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<h1> Tomas - PHP su manim buvo ir  <?php print date('H', strtotime('-1 hours')) . ' valanda';?></h1>
<p><?php print date('Y', strtotime('+ 1 years'))  . ' uz kalnu';?></p>
</body>
</html>