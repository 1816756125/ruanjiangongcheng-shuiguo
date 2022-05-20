<?php
$conn=mysqli_connect('localhost','root','root','table');
if(isset($_GET['id'])){
	$id=$_GET['id'];
}
//根据id删除指定数据
$sql = "delete FROM fruit where id={$id}";
$rw = $conn->query($sql);
if($rw){
	echo "<script>alert('删除成功');window.location='index.php'</script>";
}