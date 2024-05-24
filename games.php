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
	
$sql="SELECT SUM(yes) FROM games";
$records=mysql_query($sql);

$sql="SELECT SUM(no) FROM games";
$records1=mysql_query($sql);

$sql="SELECT SUM(may_be) FROM games";
$records2=mysql_query($sql);

$sql="SELECT SUM(not_interested) FROM games";
$records3=mysql_query($sql);

?>


<!DOCTYPE html>
<html lang="en">
<head>
	<title>Janta Ka Rujhaan | Online Voting</title>
<!-- Favicon -->
	<link rel="icon" href="img/logo.ico">
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
<script language="JavaScript" src="js/technology.js"></script>

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
      <li><a href="country.php">Country Poll</a></li>
      <li><a href="technology.php">Technology Poll</a></li>
      <li class="active"><a href="games.php">Games Poll</a></li>
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
  <img src="img/games/games.png" alt="Sat" class="responsive" style="width:70px"></br>
</div> 
<h3>Is Hockey Need More Attention?</h3>
<h3>Poll Ends On 31 August, 2018</h3>
<h3 id="poll"></h3>


<script language="JavaScript" src="js/exer_4.js"></script>

<label class="container">
<form class="form-horizontal" name="form1" action="games_in.php" onsubmit="return validate()" method="post"> 
    

<input type="hidden" name="ip" id="ip" style="border: none; border-color: white; background-color:white; color:white;"  value="<?php echo $_SERVER['REMOTE_ADDR'];   ?>">

		<label class="form-group">
		<label class="container">	
		<label class="col-md-3 box"><h4><b>Yes = <?php while($poll=mysql_fetch_assoc($records)){ echo $poll['SUM(yes)']; } ?></b></h4><label class="btn btn-success"><img src="img/games/yes.PNG" alt="..." class="img-thumbnail img-check"><input type="radio" name="yes" id="yes" value="1" class="hidden" autocomplete="off"></label></label>
		<label class="col-md-3 box"><h4><b>No = <?php while($poll=mysql_fetch_assoc($records1)){ echo $poll['SUM(no)']; } ?></b></h4><label class="btn btn-warning"><img src="img/games/no.PNG" alt="..." class="img-thumbnail img-check"><input type="radio" name="no" id="no" value="1" class="hidden" autocomplete="off"></label></label>
		<label class="col-md-3 box"><h4><b>May Be = <?php while($poll=mysql_fetch_assoc($records2)){ echo $poll['SUM(may_be)']; } ?></b></h4><label class="btn btn-info"><img src="img/games/maybe.PNG" alt="..." class="img-thumbnail img-check"><input type="radio" name="may_be" id="may_be" value="1" class="hidden" autocomplete="off"></label></label>
		<label class="col-md-3 box"><h4><b>Not Interested = <?php while($poll=mysql_fetch_assoc($records3)){ echo $poll['SUM(not_interested)']; } ?></b></h4><label class="btn btn-danger"><img src="img/games/not_interested.PNG" alt="..." class="img-thumbnail img-check"><input type="radio" name="not_interested" id="not_interested" value="1" class="hidden" autocomplete="off"></label></label>
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
      <label class="control-label col-sm-2" for="country"><b>Select Country:</b></label>
      <label class="col-sm-4">
        
						<select class="form-control" id="country" name="country" title="Select Country" required>
							<option value="">--Select Country--</option>
							<option value="Afghanistan">Afghanistan</option>
							<option value="Albania">Albania</option>
							<option value="Algeria">Algeria</option>
							<option value="Andorra">Andorra</option>
							<option value="Angola">Angola</option>
							<option value="Antigua and Barbuda">Antigua and Barbuda</option>
							<option value="Argentina">Argentina</option>
							<option value="Armenia">Armenia</option>
							<option value="Aruba">Aruba</option>
							<option value="Australia">Australia</option>
							<option value="Austria">Austria</option>
							<option value="Azerbaijan">Azerbaijan</option>
							<option value="Bahamas, The">Bahamas, The</option>
							<option value="Bahrain">Bahrain</option>
							<option value="Bangladesh">Bangladesh</option>
							<option value="Barbados">Barbados</option>
							<option value="Belarus">Belarus</option>
							<option value="Belgium">Belgium</option>
							<option value="Belize">Belize</option>
							<option value="Benin">Benin</option>
							<option value="Bhutan">Bhutan</option>
							<option value="Bolivia">Bolivia</option>
							<option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
							<option value="Botswana">Botswana</option>
							<option value="Brazil">Brazil</option>
							<option value="Brunei">Brunei</option>
							<option value="Bulgaria">Bulgaria</option>
							<option value="Burkina Faso">Burkina Faso</option>
							<option value="Burma">Burma</option>
							<option value="Burundi">Burundi</option>
							<option value="Cambodia">Cambodia</option>
							<option value="Cameroon">Cameroon</option>
							<option value="Canada">Canada</option>
							<option value="Cabo Verde">Cabo Verde</option>
							<option value="Central African Republic">Central African Republic</option>
							<option value="Chad">Chad</option>
							<option value="Chile">Chile</option>
							<option value="China">China</option>
							<option value="Colombia">Colombia</option>
							<option value="Comoros">Comoros</option>
							<option value="Congo, Democratic Republic of the">Congo, Democratic Republic of the</option>
							<option value="Congo, Republic of the">Congo, Republic of the</option>
							<option value="Costa Rica">Costa Rica</option>
							<option value="Cote d'Ivoire">Cote d'Ivoire</option>
							<option value="Croatia">Croatia</option>
							<option value="Cuba">Cuba</option>
							<option value="Curacao">Curacao</option>
							<option value="Cyprus">Cyprus</option>
							<option value="Czechia">Czechia</option>
							<option value="Denmark">Denmark</option>
							<option value="Djibouti">Djibouti</option>
							<option value="Dominica">Dominica</option>
							<option value="Dominican Republic">Dominican Republic</option>
							<option value="East Timor">East Timor</option>
							<option value="Ecuador">Ecuador</option>
							<option value="Egypt">Egypt</option>
							<option value="El Salvador">El Salvador</option>
							<option value="Equatorial Guinea">Equatorial Guinea</option>
							<option value="Eritrea">Eritrea</option>
							<option value="Estonia">Estonia</option>
							<option value="Eswatini">Eswatini</option>
							<option value="Ethiopia">Ethiopia</option>
							<option value="Fiji">Fiji</option>
							<option value="Finland">Finland</option>
							<option value="France">France</option>
							<option value="Gabon">Gabon</option>
							<option value="Gambia, The">Gambia, The</option>
							<option value="Georgia">Georgia</option>
							<option value="Germany">Germany</option>
							<option value="Ghana">Ghana</option>
							<option value="Greece">Greece</option>
							<option value="Grenada">Grenada</option>
							<option value="Guatemala">Guatemala</option>
							<option value="Guinea">Guinea</option>
							<option value="Guinea-Bissau">Guinea-Bissau</option>
							<option value="Guyana">Guyana</option>
							<option value="Haiti">Haiti</option>
							<option value="Holy See">Holy See</option>
							<option value="Honduras">Honduras</option>
							<option value="Hong Kong">Hong Kong</option>
							<option value="Hungary">Hungary</option>
							<option value="Iceland">Iceland</option>
							<option value="India">India</option>
							<option value="Indonesia">Indonesia</option>
							<option value="Iran">Iran</option>
							<option value="Iraq">Iraq</option>
							<option value="Ireland">Ireland</option>
							<option value="Israel">Israel</option>
							<option value="Italy">Italy</option>
							<option value="Jamaica">Jamaica</option>
							<option value="Japan">Japan</option>
							<option value="Jordan">Jordan</option>
							<option value="Kazakhstan">Kazakhstan</option>
							<option value="Kenya">Kenya</option>
							<option value="Kiribati">Kiribati</option>
							<option value="Korea, North">Korea, North</option>
							<option value="Korea, South">Korea, South</option>
							<option value="Kosovo">Kosovo</option>
							<option value="Kuwait">Kuwait</option>
							<option value="Kyrgyzstan">Kyrgyzstan</option>
							<option value="Laos">Laos</option>
							<option value="Latvia">Latvia</option>
							<option value="Lebanon">Lebanon</option>
							<option value="Lesotho">Lesotho</option>
							<option value="Liberia">Liberia</option>
							<option value="Libya">Libya</option>
							<option value="Liechtenstein">Liechtenstein</option>
							<option value="Lithuania">Lithuania</option>
							<option value="Luxembourg">Luxembourg</option>
							<option value="Macau">Macau</option>
							<option value="Macedonia">Macedonia</option>
							<option value="Madagascar">Madagascar</option>
							<option value="Malawi">Malawi</option>
							<option value="Malaysia">Malaysia</option>
							<option value="Maldives">Maldives</option>
							<option value="Mali">Mali</option>
							<option value="Malta">Malta</option>
							<option value="Marshall Islands">Marshall Islands</option>
							<option value="Mauritania">Mauritania</option>
							<option value="Mauritius">Mauritius</option>
							<option value="Mexico">Mexico</option>
							<option value="Micronesia">Micronesia</option>
							<option value="Moldova">Moldova</option>
							<option value="Monaco">Monaco</option>
							<option value="Mongolia">Mongolia</option>
							<option value="Montenegro">Montenegro</option>
							<option value="Morocco">Morocco</option>
							<option value="Mozambique">Mozambique</option>
							<option value="Namibia">Namibia</option>
							<option value="Nauru">Nauru</option>
							<option value="Nepal">Nepal</option>
							<option value="Netherlands">Netherlands</option>
							<option value="New Zealand">New Zealand</option>
							<option value="Nicaragua">Nicaragua</option>
							<option value="Niger">Niger</option>
							<option value="Nigeria">Nigeria</option>
							<option value="North Korea">North Korea</option>
							<option value="Norway">Norway</option>
							<option value="Oman">Oman</option>
							<option value="Pakistan">Pakistan</option>
							<option value="Palau">Palau</option>
							<option value="Palestinian Territories">Palestinian Territories</option>
							<option value="Panama">Panama</option>
							<option value="Papua New Guinea">Papua New Guinea</option>
							<option value="Paraguay">Paraguay</option>
							<option value="Peru">Peru</option>
							<option value="Philippines">Philippines</option>
							<option value="Poland">Poland</option>
							<option value="Portugal">Portugal</option>
							<option value="Qatar">Qatar</option>
							<option value="Romania">Romania</option>
							<option value="Russia">Russia</option>
							<option value="Rwanda">Rwanda</option>
							<option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
							<option value="Saint Lucia">Saint Lucia</option>
							<option value="Saint Vincent and the Grenadines">Saint Vincent and the Grenadines</option>
							<option value="Samoa">Samoa</option>
							<option value="San Marino">San Marino</option>
							<option value="Sao Tome and Principe">Sao Tome and Principe</option>
							<option value="Saudi Arabia">Saudi Arabia</option>
							<option value="Senegal">Senegal</option>
							<option value="Serbia">Serbia</option>
							<option value="Seychelles">Seychelles</option>
							<option value="Sierra Leone">Sierra Leone</option>
							<option value="Singapore">Singapore</option>
							<option value="Sint Maarten">Sint Maarten</option>
							<option value="Slovakia">Slovakia</option>
							<option value="Slovenia">Slovenia</option>
							<option value="Solomon Islands">Solomon Islands</option>
							<option value="Somalia">Somalia</option>
							<option value="South Africa">South Africa</option>
							<option value="South Korea">South Korea</option>
							<option value="South Sudan">South Sudan</option>
							<option value="Spain">Spain</option>
							<option value="Sri Lanka">Sri Lanka</option>
							<option value="Sudan">Sudan</option>
							<option value="Suriname">Suriname</option>
							<option value="Swaziland">Swaziland</option>
							<option value="Sweden">Sweden</option>
							<option value="Switzerland">Switzerland</option>
							<option value="Syria">Syria</option>
							<option value="Taiwan">Taiwan</option>
							<option value="Tajikistan">Tajikistan</option>
							<option value="Tanzania">Tanzania</option>
							<option value="Thailand">Thailand</option>
							<option value="Timor-Leste">Timor-Leste</option>
							<option value="Togo">Togo</option>
							<option value="Tonga">Tonga</option>
							<option value="Trinidad and Tobago">Trinidad and Tobago</option>
							<option value="Tunisia">Tunisia</option>
							<option value="Turkey">Turkey</option>
							<option value="Turkmenistan">Turkmenistan</option>
							<option value="Tuvalu">Tuvalu</option>
							<option value="Uganda">Uganda</option>
							<option value="Ukraine">Ukraine</option>
							<option value="United Arab Emirates">United Arab Emirates</option>
							<option value="United Kingdom">United Kingdom</option>
							<option value="Uruguay">Uruguay</option>
							<option value="Uzbekistan">Uzbekistan</option>
							<option value="Vanuatu">Vanuatu</option>
							<option value="Venezuela">Venezuela</option>
							<option value="Vietnam">Vietnam</option>
							<option value="Yemen">Yemen</option>
							<option value="Zambia">Zambia</option>
							<option value="Zimbabwe">Zimbabwe</option>
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
