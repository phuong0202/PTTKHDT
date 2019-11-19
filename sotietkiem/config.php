<?php
function connect(){
$hostname     = "localhost";
$username     = "root";
$password     = "";
$databasename = "sotietkiem";

$user = "";
$email    = "";
$visitorTimeout = 900; //=15 * 60

$MAXPAGE = 10;
$multiLanguage = 1;//0 : single  ;  1 : multi


$db = new mysqli($hostname,$username,$password,$databasename);
mysqli_set_charset($db,'UTF8');
if($db->connect_error){
	die("Connection failed");
}
return $db;
}
?>

