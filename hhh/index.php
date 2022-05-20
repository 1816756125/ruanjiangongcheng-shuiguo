<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <title></title>
    <script>
        function del(id) {
            if (confirm("确定要删除么？")) {
                window.location = "delete.php?id=" +id;
            }
        }
    </script>
</head>
<body  background="7.jpg">
<center>
    <h3>水果列表</h3>
    <table border="1" cellpadding="0" cellspacing="0" width="70%">
        <tr>
            <th>代号</th>
			<th>名称</th>
            <th>价格</th>
            <th>库存</th>
            <th>操作</th>
        </tr>
        <?php
        //连接数据库
       $conn=mysqli_connect('localhost','root','root','table');
        //执行sql语句，并实现解析和遍历
        $sql = "SELECT * FROM fruit ";
        foreach ($conn->query($sql) as $row) {
            echo "<tr>";
            echo "<td>{$row['id']}</td>";
            echo "<td>{$row['name']}</td>";
			echo "<td>{$row['price']}</td>";
            echo "<td>{$row['reseve']}</td>";
            echo "<td>
                    <a href='javascript:del({$row['id']})'>删除</a>
                    <a href='update.php?id=({$row['id']})'>修改</ a>
                  </td>";
            echo "</tr>";
        }
              
        ?>
    </table>
	<a href="add.php"> 添加水果品种</a>
</center>

</body>
</html>