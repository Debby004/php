<html lang="en">
<head>
    <meta charset="utf-8">
    <title>注册</title>
</head>
<body>
<table>
    <tr>
        <td> 编号</td>
        <td> 姓名</td>
        <td> 性别</td>
        <td> 生日</td>
        <td> 职位</td>
        <td> 学系</td>
    </tr>
    <?php
    //造连接对象：造一个mysql对象
    $db = new MySQLi("localhost", "root", "root", "bysj");
    //准备一条SQL语句
    $sql = "select * from user";
    //执行sql语句，如果是查询语句，成功返回结果集对象；如果不是，成功执行为true，执行失败为false
    $reslut = $db->query($sql);
    //判断返回是否执行成功
    if ($reslut) {
        while ($attr = $reslut->fetch_row()) {
            echo " <tr>
                        <td>{$attr[0]}</td>
                        <td>{$attr[1]}</td>
                        <td>{$attr[2]}</td>
                        <td>{$attr[3]}</td>
                        <td>{$attr[4]}</td>
                        <td>{$attr[5]}</td>
                    </tr>";
        }
    }
    ?>
</table>
</body>
</html>