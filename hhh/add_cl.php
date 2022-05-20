<?php
$conn=mysqli_connect('localhost','root','root','table');
//获取增加的水果
if(isset($_POST['name'])){
	$name=$_POST['name'];
}
if(isset($_POST['price'])){
	$price = $_POST['price'];
}
if(isset($_POST['reseve'])){
	$reseve = $_POST['reseve'];
}
//创建sql语句插入数据
$sql = "insert into fruit (name,price,reseve)values('$name','$price','$reseve')";
//创建一个结果集
$rw = $conn->query($sql);
if($rw){
	echo "<script>alert('添加成功');window.location='index.php'</script>";
}else{
	echo "<script>alert('添加失败');window.history.back();</script>";
}