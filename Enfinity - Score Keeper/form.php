<?php

$team = $_POST["team"];
$prod = $_POST["product"];

$lc = $_POST["logoCreativity"];
$lu = $_POST["logoUniqueness"];
$lr = $_POST["logoRelevence"];
$sum1 = $lc+$lu+$lr;
$sum1 = $_POST["logototal"];

$bc = $_POST["brandCreativity"];
$bu = $_POST["brandUniqueness"];
$br = $_POST["brandRelevence"];
$sum2 = $bc+$bu+$br;
$sum2 = $_POST["brandtotal"];

$tlc = $_POST["tagCreativity"];
$tlu = $_POST["tagUniqueness"];
$tlr = $_POST["tagRelevence"];
$sum3 = $tlc+$tlu+$tlr;
$sum3 = $_POST["tltotal"];

$ac = $_POST["adCreativity"];
$au = $_POST["adUniqueness"];
$ar = $_POST["adRelevence"];
$sum4 = $ac+$au+$ar;
$sum4 = $_POST["adtotal"];


$username = "ecell";
$password = "123321";
$database = "enfinity";
$host = "localhost";

mysql_connect($host, $username, $password);
mysql_select_db($database);
$query = 'INSERT INTO scores(team,product,logoCreativity,logoUniqueness,logoRelevence,brandCreativity,brandUniqueness,brandRelevence,tagCreativity,tagUniqueness,tagRelevence,adCreativity,adUniqueness,adRelevence,logototal,brandtotal,tltotal,adtotal) VALUES("'.$team.'","'.$prod.'","'.$lc.'","'.$lu.'","'.$lr.'","'.$bc.'","'.$bu.'","'.$br.'","'.$tlc.'","'.$tlu.'","'.$tlr.'","'.$ac.'","'.$au.'","'.$ar.'","'.$sum1.'","'.$sum2.'","'.$sum3.'","'.$sum4.'")';
mysql_query($query);



?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="refresh" content="0; url=teams.html" />
<title>Saved</title>
<link href="style.css" rel="stylesheet" type="text/css" />
</head>

<body>
<a href="teams.html">go back</a>
</body>
</html>