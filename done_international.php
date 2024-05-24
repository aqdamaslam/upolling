<?php

	require_once('auth/rightclick.php');
	
$ipaddress = $_SERVER['REMOTE_ADDR']; 
$page = "http://{$_SERVER['HTTP_HOST']}{$_SERVER['PHP_SELF']}";
$date = date_default_timezone_set('Asia/Kolkata');
//If you want Day,Date with time AM/PM
$time =  $today = date("j-F-Y -- g:i a T -- l");
$useragent = $_SERVER['HTTP_USER_AGENT']; 
$remotehost = @getHostByAddr($ipaddress);
	
	require_once('auth/log.php');
	require_once('auth/db_connect.php');
	

$sql="SELECT SUM(yes+no+may_be+not_interested) FROM international";
$records=mysql_query($sql);

?>


<!DOCTYPE php>
<html lang="en">
<head>
  <title>Janta Ka Rujhaan | Home</title>
<!-- Favicon -->
<link rel="icon" href="img/logo.ico">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

<!-- Favicon -->
<link rel="icon" href="img/favicon.png">
	
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.3/css/bootstrapValidator.min.css"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.3/js/bootstrapValidator.min.js"> </script>


<script language="JavaScript" src="js/exer_1.js"></script>
<script language="JavaScript" src="js/exer_2.js"></script>

<link rel="stylesheet" href="css/exer_1.css"/>
<link rel="stylesheet" href="css/exer_2.css"/>

<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="HandheldFriendly" content="true">



<div class="icon-bar">
  <a href="https://twitter.com/JRujhaan" class="twitter" target="_blank"><i class="fa fa-twitter"></i></a> 
  <a href="https://www.youtube.com/channel/UC0mX_vGr0xEG6U2hBXiuljQ" class="youtube" target="_blank"><i class="fa fa-youtube"></i></a> 
</div>
</head>
<body></br>

<div class="navbar" align="center">
  <img src="img/grand/sat.png" alt="Avatar" style="width:70px">
</div> 
<p id="poll"></p>

<script language="JavaScript" src="js/exer_3.js"></script>

<script type="text/javascript">
$(document).ready(function () {
    // Handler for .ready() called.
    window.setTimeout(function () {
        location.href = "international.php";
    }, 5000);
});
</script>

</br>
<p style="color:LIGHTCORAL;">Thank You For Voting Your Voting Number Is</p>
<p style="color:crimson;"> <b><?php while($poll=mysql_fetch_assoc($records)){ echo $poll['SUM(yes+no+may_be+not_interested)']; } ?></b></p>

<h2 align="center">Page Will Be Redirect to Previous Page itself in 5 Seconds, If It will not Then <a href="international.php">click here</a></h2></br>
  <p>Local Time</p>
<p id="demo1"></p>

<script>
var myVar = setInterval(myTimer ,1000);
function myTimer() {
    var d = new Date();
    document.getElementById("demo1").innerHTML = d.toLocaleTimeString();
}
</script>

</body>
</html> 
