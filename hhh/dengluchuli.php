<?php
session_start();
$uid=$_POST["uid"];
$pwd=$_POST["pwd"];
$conn=mysqli_connect('localhost','root','root','table');
$sql="select * from login where name='{$uid}' and password='{$pwd}'";
$stmt=$conn->query($sql);
if($row = mysqli_fetch_assoc($stmt)){
	$_SESSION['user']=$row['name'];
	echo "登录成功";
	header("location:loginsucc.php");
}
else{
	echo "登陆失败！";
}