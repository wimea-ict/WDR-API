<?php
require_once 'db_connect.php';
$userId = $_POST['user_id'];
$sql="SELECT * FROM users WHERE id = $userId ";
$query= $connect->query($sql);
$result=$query->fetch_assoc();
$connect->close();
echo json_encode($result);
?>