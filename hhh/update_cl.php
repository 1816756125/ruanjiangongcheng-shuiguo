<?php
$conn=mysqli_connect('localhost','root','root','table');
if(isset($_POST['id'])){
	$id=$_POST['id'];
}
if(isset($_POST['name'])){
	$name=$_POST['name'];
}
if(isset($_POST['price'])){
	$price = $_POST['price'];
}
if(isset($_POST['reseve'])){
	$reseve = $_POST['reseve'];
}
//创建sql语句修改数据
$sql = "update fruit set name='$name',price='$price',reseve='$reseve' where id='$id'";
//创建一个结果集
$rw = $conn->query($sql);
if($rw){
	echo "<script>alert('修改成功');window.location='index.php'</script>";
}else{
	echo "<script>alert('修改失败');window.history.back();</script>";
}