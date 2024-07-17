<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Sample4</title>
</head>
<body>

<?php

$trial="Merhaba PHP";
$trial2="Eren BAŞARAN";
$trial3="Merhaba CANIM";
echo $trial." ".$trial2." ".$trial3."<br><br><br>";

$array = array("php"=>"Merhaba PHP","eren"=>"Eren BAŞARAN","canim"=>"Merhaba CANIM"); /*1. yol*/
$array2[] = "Merhaba"; /*2. yol*/
echo $array["php"]." ".$array["eren"]." ".$array["canim"]."<br><br><br>";

$array[] = "Merhaba";
echo $array[0]." ".$array["eren"]." ".$array["php"]."<br><br><br>";
?>

</body>
</html>