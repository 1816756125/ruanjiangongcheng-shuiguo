<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>登录页面</title>
</head>
<style>
.title{
	margin-left:750px;
	margin-top:150px;
}
.quanju{
	margin-left:650px;
	margin-top:-460px;
}
.name,.pwd{
	max-width:120px;
}
.yangshi1{
	margin-top:200px;
}
.header{
	width:100%;
	height:80px;
	background:#e0e0e0;
}
.ps{
	margin-left:100px;
	margin-top:-100px;
}
</style>
<body>
<form class="form-horizontal" role="form" action="dengluchuli.php" method="post">
<div class="header">
<img src="logo.png" width="200" height="80"/>
</div>
<h3 class="title">用户登录</h3>
<img src="果蔬专场.jpg" width="500" height="400" class="ps"/>
<div class="quanju">
<div class="form-group yangshi1">
<label for="firstname" class="col-sm-2 control-lable">用户名:</label>
<div class="col-sm-10">
<input type="text" class="form-control name" name="uid" placeholder="请输入用户名">
</div>
</div>
<div class="form-group yangshi2">
<label for="lastname" class="col-sm-2 control-lable">密码:</label>
<div class="col-sm-10">
<input type="text" class="form-control pwd" name="pwd" placeholder="请输入密码">
</div>
</div>
<div class="form-group">
<div class="col-sm-offset-2 col-sm-10">
<button type="submit" class="btn btn-warning" value="登录" onclick="return login()">登录</button>
<a href="res.php">注册</a>
</div>
</div>
</div>
</form>
</body>
<script>
function login(){
	var uid=document.getElementsByTagName("input")[0].value;
	if(uid==" "){
		alert("请输入用户名!");
		return false;
	}
	var pwd=document.getElementsByTagName("input")[1].value;
	if(pwd==" "){
		alert("请输入密码!");
		return false;
	}
}
</script>
</html>