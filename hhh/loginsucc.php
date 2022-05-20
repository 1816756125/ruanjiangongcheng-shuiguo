<!DOCTYPE html>
<html>
<head>
<title>登录成功</title>
<meta charset="UTF-8">
</head>
<body> 
<div> 
<?php
// $Id:$ //开启session
session_start(); //声明变量
$name = isset($_SESSION['user']) ? $_SESSION['user'] : ''; //判断session是否为空
if ($name!=null) { ?> 
<h1>水果商铺</h1> 欢迎您！
<?php
    echo $name; ?> 
<br/> <!--<a href="login.php">退出</a> -->
 <a href="index.php">查看水果</a>
 <a href="add.php"> 添加品种</a>

<!--<form action="aaa.php" method="get">
搜索相关水果：<input type="text" name="content" />
<input type="submit" value="搜索" />
</form>-->

<?php
} else { //未登录，无权访问
     ?>
 <h1>你无权访问！！！</h1>
<?php
} ?> </div>
</body>
</html>