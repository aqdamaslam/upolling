<?php 

	require_once('auth/rightclick.php');
	require_once('auth/values.php');


// Escape user inputs for security
$ip = $mysqli->real_escape_string($_REQUEST['ip']);
$bjp = $mysqli->real_escape_string($_REQUEST['bjp']);
$congress = $mysqli->real_escape_string($_REQUEST['congress']);
$ncp= $mysqli->real_escape_string($_REQUEST['ncp']);
$cpim= $mysqli->real_escape_string($_REQUEST['cpim']);
$aitcp= $mysqli->real_escape_string($_REQUEST['aitcp']);
$cpi= $mysqli->real_escape_string($_REQUEST['cpi']);
$bsp= $mysqli->real_escape_string($_REQUEST['bsp']);
$others = $mysqli->real_escape_string($_REQUEST['others']);
$username = $mysqli->real_escape_string(strtoupper($_REQUEST['username']));
$age = $mysqli->real_escape_string($_REQUEST['age']);
$state= $mysqli->real_escape_string($_REQUEST['state']);
 
// attempt insert query execution
$sql = "INSERT INTO grand (ip, bjp, congress, ncp, cpim, aitcp, cpi, bsp, others, username, age, state) 
VALUES 
('$ip', '$bjp', '$congress', '$ncp', '$cpim', '$aitcp', '$cpi', '$bsp', '$others', '$username', '$age', '$state')";


if($mysqli->query($sql) === true){
	header("Location: done_country.php"); /* Redirect browser */
} else{
    echo "ERROR: Could not able to execute $sql. " . $mysqli->error;
}
 
// Close connection
$mysqli->close();

?>

