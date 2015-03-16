<?php

$pName = $_POST["name"];
$pWork = $_POST["work"];
$pFile = $_POST["file"];
$pEmail="enn.karthik@gmail.com";
$username = "bit";
$password = "123321";
$database = "logbook";
$host = "localhost";


mysql_connect($host, $username, $password);
mysql_select_db($database);
$query = 'INSERT INTO applications(Name,Work,File) VALUES("'.$pName.'","'.$pWork.'","'.$pFile.'")';
mysql_query($query);


//email

$subject = 'BITFR Logbook';
$Header = "From : admin@bitfr.in";
$message = "Greetings Karthik,\r\n\r\n$pName has completed $pWork assigned to him on this date.";
$from = 'BITFR@bitfr.in';

mail($pEmail,$subject,$message,"From: $from\n");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Log Book</title>
<link href="style.css" rel="stylesheet" type="text/css" />
</head>

<body>
</body>
</html>