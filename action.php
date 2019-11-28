<?php

$user=$_POST['user'];
$email=$_POST['email'];
$pass=$_POST['pass'];
$date=$_POST['date'];
$gender=$_POST['gender'];

$conn=new mysqli('localhost','root','','register');
if($conn->connect_error){
	die('Connection Failed  :'.$conn->connect_error);
}else{
	$stmt=$conn->prepare("insert into log(user,email,pass,date,gender) values(?,?,?,?,?)");
	$stmt->bind_param("sssss",$user,$email,$pass,$date,$gender);
	$stmt->execute();
	echo "Success!!";
	$stmt->close();
	$conn->close();
}


?>