<html>
<head>
    <meta charset="UTF-8">
    <title>水果管理</title>
</head>
<body  background="7.jpg">>
<center>
    <?php
    //连接数据库
    $conn=mysqli_connect('localhost','root','root','table');
	//获取id
	$id=$_GET['id'];
	//根据id获取当前一行的数据
    $sql = "SELECT * FROM fruit WHERE id =$id";
	//创建一个结果集
    $stmt = $conn->query($sql);//返回预处理对象
	$stu=mysqli_fetch_assoc($stmt);
    ?>
    <form method="post" action="update_cl.php">
        <table>
			<tr>
                <td>代号</td>
                <td><input type="text" name="id" id="id" value="<?php echo $stu['id'] ?>"/></td>
            </tr>
            <tr>
                <td>名称</td>
                <td><input type="text" name="name" id="name" value="<?php echo $stu['name'] ?>"/></td>

            </tr>
			<tr>
                <td>价格</td>
                <td><input type="text" name="price" id="price" value="<?php echo $stu['price'] ?>"/></td>
            </tr>
            <tr>
                <td>库存</td>
                <td><input type="text" name="reseve" id="reseve" value="<?php echo $stu['reseve'] ?>"/></td>
            </tr>
            <tr>
                <td> </td>
                <td><input type="submit" value="修改"/>  
                    <input type="reset" value="重置"/>
                </td>
            </tr>
        </table>
    </form>
</center>
</body>
</html>
    