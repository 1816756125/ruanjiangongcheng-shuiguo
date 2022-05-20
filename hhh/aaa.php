<?php
$name=$_GET['content'];
header("Content-type:text/html;charset=utf-8");
$conn=mysqli_connect('localhost','root','root');
$selectdb=mysqli_select_db($conn,'user');
$sql="SELECT * FROM fruit where title like '%$name%'";
$rs=mysqli_query($conn,$sql);
if(!$name){
	echo "搜索内容为空，请填写搜索内容";
}else{
	while($myrow=mysqli_fetch_assoc($rs)){
		echo $myrow['name'].'---'.$myrow['price'].'---'.$myrow['reseve'];
		echo '<br />';
}
}

echo "<a href=index.php>返回</a>";