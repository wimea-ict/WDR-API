<?php
require_once 'db_connect.php';

	
	$id=$_POST['member_id'];
	//if form is submitted
	if($_POST){
		$validator = array('success'=>false,'messages'=> array());

		$email_status=$_POST['email_status'];
		$contact_status=$_POST['contact_status'];
	
		
		$sql="UPDATE users SET 
							
							EmailStatus='$email_status',
							PhoneNumberStatus='$contact_status'
							WHERE id= $id
							";
		$query=$connect->query($sql);
		if($query===TRUE){
			$validator['success']= true;
			$validator['messages']= "Successfully updated";
			
		}else{
			$validator['success']= false;
			$validator['messages']= "Error while adding the member information";
		}
		$connect->close();
		echo json_encode($validator);
	}
	


?>