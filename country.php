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
	
$sql="SELECT SUM(bjp) FROM grand";
$records=mysql_query($sql);

$sql="SELECT SUM(congress) FROM grand";
$records1=mysql_query($sql);

$sql="SELECT SUM(ncp) FROM grand";
$records2=mysql_query($sql);

$sql="SELECT SUM(cpim) FROM grand";
$records3=mysql_query($sql);

$sql="SELECT SUM(aitcp) FROM grand";
$records4=mysql_query($sql);

$sql="SELECT SUM(cpi) FROM grand";
$records5=mysql_query($sql);

$sql="SELECT SUM(bsp) FROM grand";
$records6=mysql_query($sql);

$sql="SELECT SUM(others) FROM grand";
$records7=mysql_query($sql);

$sql="SELECT SUM(bjp+congress+ncp+cpim+aitcp+cpi+bsp+others) FROM grand";
$records8=mysql_query($sql);

?>


<!DOCTYPE html>
<html lang="en">
<head>
	<title>Janta Ka Rujhaan | Online Voting</title>
<!-- Favicon -->
	<link rel="icon" href="img/Icon.ico">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Janta Ka Rujhaan,Janta Ka Faisala,Abki Baar Kiski Sarkarkar,Lok Sabha Election 2019">
  <meta name="keywords" content="Lok Sabha 2019">
  <meta name="author" content="Janta Ka Rujhaan">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  
  <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

	
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

<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="HandheldFriendly" content="true">

</head>


<body>


<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
    </div>
    </div>
        <p align="center">
			<a rel="home" href="index.php" title="Upolling.com">
				<img style="max-width:100px; margin-top: 0.5px;"  src="img/upolling.png">
			</a>
		</p>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
      <li><a href="index.php">Grand Poll</a></li>
      <li><a href="exclusive.php">Exclusive Poll</a></li>
      <li><a href="international.php">International Poll</a></li>
      <li class="active"><a href="country.php">Country Poll</a></li>
      <li><a href="technology.php">Technology Poll</a></li>
      <li><a href="games.php">Games Poll</a></li>
      <li><a href="enviromental.php">Enviromental Poll</a></li>
      <li><a href="human.php">Human Rights Poll</a></li>
      <li><a href="political.php">Political Poll</a></li>
    </ul>
      <ul class="nav navbar-nav navbar-right">
        <li>
    <!---<form class="navbar-form navbar" action="/action_page.php">
      <div class="input-group">
        <input type="text" class="form-control" placeholder="Search Poll" name="search">
        <div class="input-group-btn">
          <button class="btn btn-default" type="submit">
            <i class="glyphicon glyphicon-search"></i>
          </button>
        </div>
      </div>
    </form>--->
		</li>
      </ul>
    </div>
  </div>
</nav>


  
<div class="container-fluid text-center">    
  <div class="row content">
    <div class="col-sm-2 sidenav">
      <div class="well">
        <h1>Recent Poll</h1>
      </div>
      <div class="well">
        <p><a href="international.php">Urbanization Is The Cause For Deforestation</a></p><br>
        <p><a href="exclusive.php">Is Death Penalty Law Will Help To Reduce Rape Case</a></p><br>
        <p><a href="enviromental.php">Is Melting Glaciers Causes Sea Level To Rise</a></p><br>
        <p><a href="technology.php">Is Robots Kill Human Employement</a></p><br>
        <p><a href="games.php">Is Hockey Need More Attention</a></p><br>
        <p><a href="human.php">Is War Is The Solution For Global Peace</a></p><br>
        <p><a href="index.php">Indian general election, 2019 Seventeenth Lok Sabha</a></p><br>
      </div>
      <div class="well">
      </div>
      <div class="well">
      </div>
      <div class="well">
      </div>
      <div class="well">
      </div>
    </div>
    <div class="col-sm-8 text-left">   
<div id="nav">	
<!---<img src="img/grand/grand_banner.PNG" alt="Banner" class="responsive" width="600" height="400">--->
</div>
<div class="navbar" align="center">
  <img src="img/grand/sat.png" alt="Sat" class="responsive" style="width:70px"></br>
</div> 
<h3>Indian general election, 2019 Seventeenth Lok Sabha</h3>
<h3>Poll Ends On 31 May, 2019</h3>
<h3 id="poll"></h3>


<script language="JavaScript" src="js/exer_3.js"></script>

<label class="container">
<form class="form-horizontal" name="form1" action="country_in.php" onsubmit="return validate()" method="post"> 
    

<input type="hidden" name="ip" id="ip" style="border: none; border-color: white; background-color:white; color:white;"  value="<?php echo $_SERVER['REMOTE_ADDR'];   ?>">

		<label class="form-group">
		<label class="container">	
		<label class="col-md-3 box"><h4><b>BJP Votes = <?php while($poll=mysql_fetch_assoc($records)){ echo $poll['SUM(bjp)']; } ?></b></h4><label class="btn btn-warning"><img src="img/grand/bjp.jpg" alt="..." class="img-thumbnail img-check"><input type="radio" name="bjp" id="bjp" value="1" class="hidden" autocomplete="off"></label></label>
		<label class="col-md-3 box"><h4><b>INC Votes = <?php while($poll=mysql_fetch_assoc($records1)){ echo $poll['SUM(congress)']; } ?></b></h4><label class="btn btn-success"><img src="img/grand/congress.jpg" alt="..." class="img-thumbnail img-check"><input type="radio" name="congress" id="congress" value="1" class="hidden" autocomplete="off"></label></label>
		<label class="col-md-3 box"><h4><b>NCP Votes = <?php while($poll=mysql_fetch_assoc($records2)){ echo $poll['SUM(ncp)']; } ?></b></h4><label class="btn btn-info"><img src="img/grand/NCP.jpg" alt="..." class="img-thumbnail img-check"><input type="radio" name="ncp" id="ncp" value="1" class="hidden" autocomplete="off"></label></label>
		<label class="col-md-3 box"><h4><b>CPIM Votes = <?php while($poll=mysql_fetch_assoc($records3)){ echo $poll['SUM(cpim)']; } ?></b></h4><label class="btn btn-danger"><img src="img/grand/CPIM.jpg" alt="..." class="img-thumbnail img-check"><input type="radio" name="cpim" id="cpim" value="1" class="hidden" autocomplete="off"></label></label>
		</label>
		
		<label class="container">
		<label class="col-md-3 box"><h4><b>AITCP Votes = <?php while($poll=mysql_fetch_assoc($records4)){ echo $poll['SUM(aitcp)']; } ?></b></h4><label class="btn btn-default"><img src="img/grand/AITCP.jpg" alt="..." class="img-thumbnail img-check"><input type="radio" name="aitcp" id="aitcp" value="1" class="hidden" autocomplete="off"></label></label>
		<label class="col-md-3 box"><h4><b>CPI Votes = <?php while($poll=mysql_fetch_assoc($records5)){ echo $poll['SUM(cpi)']; } ?></b></h4><label class="btn btn-info"><img src="img/grand/CPI.jpg" alt="..." class="img-thumbnail img-check"><input type="radio" name="cpi" id="cpi" value="1" class="hidden" autocomplete="off"></label></label>
		<label class="col-md-3 box"><h4><b>BSP Votes = <?php while($poll=mysql_fetch_assoc($records6)){ echo $poll['SUM(bsp)']; } ?></b></h4><label class="btn btn-primary"><img src="img/grand/BSP.jpg" alt="..." class="img-thumbnail img-check"><input type="radio" name="bsp" id="bsp" value="1" class="hidden" autocomplete="off"></label></label>
		<label class="col-md-3 box"><h4><b>NOTA Votes = <?php while($poll=mysql_fetch_assoc($records7)){ echo $poll['SUM(others)']; } ?></b></h4><label class="btn btn-info"><img src="img/grand/nota.jpg" alt="..." class="img-thumbnail img-check"><input type="radio" name="others" id="others" value="1" class="hidden" autocomplete="off"></label></label
		</label>
		</label>
		<label class="clearfix"></label>     

		  <h2>Voters Details</h2>
    <label class="container">
      <label class="control-label col-sm-2" for="name"><b>Name:</b></label>
      <label class="col-sm-4">
        <input type="text" class="form-control" name="username" id="username" pattern="[A-Za-z\s]{1,15}" autocomplete="off" title="Enter Valid Name" placeholder="Please Enter Your Name" required>
      </label>
    </label>
    <label class="container">
      <label class="control-label col-sm-2" for="age"><b>Age:</b></label>
      <label class="col-sm-4">
        <input class="form-control" id="age" name="age" id="age" placeholder="Age" type="text" pattern="[1-9]{1}[0-9]{1}" autocomplete="off" title="Enter Age" required>
      </label>
    </label>
    <label class="container">
      <label class="control-label col-sm-2" for="state"><b>State Or UT:</b></label>
      <label class="col-sm-4">
        
						<select class="form-control" id="state" name="state" title="Select State Or UT" required>
							<option value="">--Select State Or UT--</option>
							<option value="Andra Pradesh">Andra Pradesh</option>
							<option value="Andaman And Nicobar">Andaman And Nicobar</option>
							<option value="Arunachal Pradesh">Arunachal Pradesh</option>
							<option value="Assam">Assam</option>
							<option value="Bihar">Bihar</option>
							<option value="Chhattisgarh">Chhattisgarh</option>
							<option value="Dadar And Nadar Haveli">Dadar And Nadar Haveli</option>
							<option value="Daman And Diu">Daman And Diu</option>
							<option value="Delhi">Delhi</option>
							<option value="Goa">Goa</option>
							<option value="Gujarat">Gujarat</option>
							<option value="Haryana">Haryana</option>
							<option value="Himachal Pradesh">Himachal Pradesh</option>
							<option value="Jammu & Kashmir">Jammu & Kashmir</option>
							<option value="Jharkhand">Jharkhand</option>
							<option value="Karnataka">Karnataka</option>
							<option value="Kerala">Kerala</option>
							<option value="Lakshadweep">Lakshadweep</option>
							<option value="Madhya Pradesh">Madhya Pradesh</option>
							<option value="Maharashtra">Maharashtra</option>
							<option value="Manipur">Manipur</option>
							<option value="Meghalaya">Meghalaya</option>
							<option value="Mizoram">Mizoram</option>
							<option value="Nagaland">Nagaland</option>
							<option value="Odisha">Odisha</option>
							<option value="Punjab">Punjab</option>
							<option value="Punducherry">Punducherry</option>
							<option value="Rajasthan">Rajasthan</option>
							<option value="Sikkim">Sikkim</option>
							<option value="Tamil Nadu">Tamil Nadu</option>
							<option value="Telangana">Telangana</option>
							<option value="Tripura">Tripura</option>
							<option value="Uttarakhand">Uttarakhand</option>
							<option value="Uttar Pradesh">Uttar Pradesh</option>
							<option value="West Bengal">West Bengal</option>
						</select>
      </label>
    </label>
    <label class="form-group">
      <label class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-primary">Vote</button>
</label>
</label>
  
</form> 
  <h3>Local Time</h3>
<h3 id="localtime"></h3>

<script>
var myVar = setInterval(myTimer ,1000);
function myTimer() {
    var d = new Date();
    document.getElementById("localtime").innerHTML = d.toLocaleTimeString();
}
</script>

</div>
    <div class="col-sm-2 sidenav">
      <div class="well">
        <h1>Previous Poll</h1>
      </div>
      <div class="well">
        <p><a href="#">Result Coming Soon</a></p>
      </div>
      <div class="well">
      </div>
      <div class="well">
      </div>
      <div class="well">
      </div>
      <div class="well">
      </div>
    </div>
  </div>
</div>

<footer class="container-fluid text-center">
	<span class="glyphicon glyphicon-hand-right"></span> Join Us <a href="https://www.facebook.com/RaiseYourVoiceChooseYourChoice/" class="fa fa-facebook" target="_blank"></a>
	<h5><a href="">| &copy UPolling.com |</a></h5>
</footer>

</body>
</html>
