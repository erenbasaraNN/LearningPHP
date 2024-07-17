<!doctype html>
<html>
<head>
<meta charset = 'utf-8'>
<title>Sample 3</title>
</head>
<body>
<?php

$metin="php de neler yapILABILiR?";
echo $metin."<br>";
$kucuk=strtolower($metin);

echo $kucuk."<br>";
$kucukMutasyon=mb_strtolower($metin, "UTF-8");
echo $kucukMutasyon."<br>";
$buyuk=strtoupper($metin);

echo $buyuk."<br>";
$buyukharf=ucwords($metin);

echo $buyukharf."<br>";
$paragraf=ucfirst($metin);

echo $paragraf;

?>
</body>
</html>

