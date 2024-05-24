<?php 

	require_once('auth/rightclick.php');
	require_once('auth/values.php');


// Escape user inputs for security
$ip = $mysqli->real_escape_string($_REQUEST['ip']);
$yes = $mysqli->real_escape_string($_REQUEST['yes']);
$no = $mysqli->real_escape_string($_REQUEST['no']);
$may_be= $mysqli->real_escape_string($_REQUEST['may_be']);
$not_interested= $mysqli->real_escape_string($_REQUEST['not_interested']);
$username = $mysqli->real_escape_string(strtoupper($_REQUEST['username']));
$age = $mysqli->real_escape_string($_REQUEST['age']);
$country= $mysqli->real_escape_string($_REQUEST['country']);
 
// attempt insert query execution
$sql = "INSERT INTO technology (ip, yes, no, may_be, not_interested, username, age, country) 
VALUES 
('$ip', '$yes', '$no', '$may_be', '$not_interested', '$username', '$age', '$country')";


if($mysqli->query($sql) === true){
	header("Location: done_technology.php"); /* Redirect browser */
} else{
    echo "ERROR: Could not able to execute $sql. " . $mysqli->error;
}
 
// Close connection
$mysqli->close();

?>

