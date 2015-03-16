

<?php

$pName = $_POST["name"];
$pCollege = $_POST["college"];
$pEmail = $_POST["email"];
$pPhone = $_POST["phone"];
$eventName = $_POST["event"];



$username = "manthan";
$password = "123321";
$database = "Manthan2014";
$host = "localhost";
$hash = substr(md5($pName.$pCollege.$pEmail.$pPhone.$eventName), 0, 8);

mysql_connect($host, $username, $password);
mysql_select_db($database);
$query = 'INSERT INTO PARTICIPANTS_LIST(Name,College,Email,Phone,Event,confirm) VALUES("'.$pName.'","'.$pCollege.'","'.$pEmail.'","'.$pPhone.'","'.$eventName.'","'.$hash.'")';
mysql_query($query);


//email

$subject = 'Manthan : Confirmation Mail';
$Header = "From : admin@bit-manthan.com";
$message = "Greetings $pName,\r\n\r\nWe are happy to inform you that your participation in the event $eventName has been confirmed.\r\nPlease note down the following confirmation code : $hash . \r\n\r\nWe would like to thank you again for taking part in our fest.\r\n\r\n-Team Manthan";
$from = 'Team-Manthan@bit-manthan.com';

mail($pEmail,$subject,$message,"From: $from\n");
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">


<title>Registration Success</title>

<!-- Bootstrap core CSS -->
<link href="./bootstrap.min.css" rel="stylesheet">

<!-- Just for debugging purposes. Don't actually copy this line! -->
<!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body role="document" style = "background:url('./Tartarus.jpg'); background-attachment: fixed; background-size : cover; background-repeat: no-repeat;">

<!-- Fixed navbar -->


<div class="container theme-showcase" role="main">

<!-- Main jumbotron for a primary marketing message or call to action -->
<div class="jumbotron" style = "background-color : transparent; color : white;">
<h1>You have registered successfully !</h1>
<p>Event : <?php echo $eventName;?></p><br>
<p>Please check your mail for the confirmation email<br> Thank you for registering.</p>
<p><a href="http://www.bit-manthan.com/" class="btn btn-success btn-lg" role="button">Go Back &raquo;</a></p>
</div>






</div> <!-- /container -->


<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="./bootstrap.min.js"></script>
</body>
</html>






