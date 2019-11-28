<?php

$user=$_POST['user'];
$email=$_POST['email'];
$pass=$_POST['pass'];
$date=$_POST['date'];
$gender=$_POST['gender'];

$conn=new mysqli("localhost","root","","register");
if($conn->connect_error){
	echo "failed";
}else
{
	$stmt=$conn->prepare("insert into log(user,email,pass,date,gender) values(?,?,?,?,?)");
	$stmt->bind_param("sssss",$user,$email,$pass,$date,$gender);
	$stmt->execute();
  header('Location: welcome.php');
	$stmt->close();
	$conn->close();}
	?>