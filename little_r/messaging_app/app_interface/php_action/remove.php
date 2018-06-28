<?php
require_once 'db_connect.php';

	$output=array('success'=>false,'messages'=>array());
	$userId = $_POST['user_id'];
	
	$sql="DELETE FROM users WHERE id = {$userId}";
	
	$query= $connect->query($sql);
	if($query===TRUE){
		$output['success']= true;
		$output['messages']= 'Successfully removed';
	}else{
		$output['success']= false;
		$output['messages']= 'Error while removing the member information';
		
	}
	//close database connection
	$connect->close();
	echo json_encode($output);
?>