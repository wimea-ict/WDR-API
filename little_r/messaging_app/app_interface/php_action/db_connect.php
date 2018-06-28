<?php
//create connection
$connect = new mysqli("localhost","jmutesasira","12121212.","admin");
//check connection
if($connect->connect_error){
	die("Connection Failed : ".$connect->connect_error);
}
?>