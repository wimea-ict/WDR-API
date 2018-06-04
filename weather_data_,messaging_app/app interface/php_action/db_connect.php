<?php
//create connection
$connect = new mysqli("localhost","root","","admin");
//check connection
if($connect->connect_error){
	die("Connection Failed : ".$connect->connect_error);
}
?>