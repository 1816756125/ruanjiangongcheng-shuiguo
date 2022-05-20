<html>
<head>
    <title></title>
</head>
<body background="7.jpg">
<center>
    <h3>增加水果信息</h3>
    <form method="post" action="add_cl.php">

        <table>
            <tr>
                <td>名称</td>
                <td><input type="text" name="name"/></td>

            </tr>
            <tr>
                <td>价格</td>
                <td><input type="text" name="price" /></td>
            </tr>
			<tr>
                <td>库存</td>
                <td><input type="text" name="reseve" /></td>
            </tr>
            <tr>
			<td></td>
                <td><input type="submit" value="增加"/>  
                    <input type="reset" value="重置"/>
                </td>
            </tr>
        </table>

    </form>
</center>
</body>
</html>