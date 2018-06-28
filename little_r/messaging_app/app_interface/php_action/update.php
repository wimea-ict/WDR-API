<?php
require_once 'db_connect.php';
	
	$id=$_POST['member_id'];
	//if form is submitted
	if($_POST){
		$validator = array('success'=>false,'messages'=> array());
		$name=$_POST['editName'];
		$email=$_POST['editEmail'];
		$contact=$_POST['editPhoneNumber'];
		
		
		$sql="UPDATE users SET 
							name='$name',
							email='$email',
							PhoneNumber='$contact'
							WHERE id= $id
							";
		$query=$connect->query($sql);
		if($query===TRUE){
			$validator['success']= true;
			$validator['messages']= "Successfully Added";
			
		}else{
			$validator['success']= false;
			$validator['messages']= "Error while adding the member information";
		}
		$connect->close();
		echo json_encode($validator);
	}
	


?>