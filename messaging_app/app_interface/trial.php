<?php
$servername = "localhost";
$username = "jmutesasira";
$password = "12121212.";
$dbname = "admin";


	$email = $_POST['email']; 
	$usernames = $_POST['username'];
	$emailstatus=$_POST['email_status'];
	$contact_status=$_POST['contact_status'];
	$contact=$_POST['contact'];
	

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
     $sql = "INSERT INTO users (email,name,EmailStatus,PhoneNumberStatus,PhoneNumber)
    VALUES ('$email','$usernames','$emailstatus','$contact_status','$contact')";
    // use exec() because no results are returned
    $conn->exec($sql);
    //echo "New record created successfully";
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

$conn = null;

?> 

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">

<title></title>
<link rel="stylesheet" href="css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script type="text/javascript">
</script>
</head>
<body>
	<a href="index.php"> <button type="submit" class="btn btn-primary">back</button></a>
</body>
