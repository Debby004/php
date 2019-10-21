<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>登录页</title>
</head>
<body>
    <form action="" method="get">
        <p>
          用户名：  <input type="text" class="username">
        </p>
        <p>
          密码  <input type="password" class="password" id="password">
        </p>
        <p>
            <input type="submit">
        </p>
    </form>
    <table>
    <?php

    $db = new  MySQLi("localhost","root","root","bysj");
    $sql = "select * from user";
    $result = $db->query($sql);
    if($result){
        while($attr = $result->fetch_row()){

            echo "
            <tr>
                <td>{$attr[0]}</td>
                <td>{$attr[1]}</td>
                <td>{$attr[2]}</td>
                <td>{$attr[3]}</td>
                <td>{$attr[4]}</td>
                <td>{$attr[5]}</td> 
            </tr>            
            ";

        }
    }

    ?>
    
        
    </table>
</body>
</html>