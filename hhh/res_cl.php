<meta charset='ust-8'>
<?php
$username=$_POST["name"];
$password=$_POST["password"];
$qrpassword=$_POST["qrpassword"];
$conn=mysqli_connect('localhost','root','root','table');
$sql="select * from login where name='{$username}'";
$stmt=$conn->query($sql);
$result=mysqli_fetch_array($stmt);
if($username==''&&$password==''&&$qrpassword==''){
	echo "请确认信息的完整性！";
}else{
	if($password!=$qrpassword){
		echo "密码不一致！";
	}
	else{
		if($result){
			echo "用户已经存在";
		}
		else{
			$sql_insert="insert into login value('$username','$password')";
			$result_insert=$conn->query($sql_insert);
			if($result_insert){
				echo "<script>alert('注册成功');window.location='loginpage.php'</script>";
			}
			else{
				echo "<script>alert('注册失败');window.location='loginpage.php'</script>";
			}
		}
	}
}
?>