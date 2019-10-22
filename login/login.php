<<<<<<< HEAD
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
          用户名：  <input type="text" class="username" style="color:#999"  value="请输入用户名" 
          onblur="if(this.value==''){this.value='请输入用户名';this.style.color='#999'; }" 
          onfocus="if(this.value=='请输入用户名'){this.value='';this.color='#424242'}"
         >
        </p>
        <p>
          密码：  <input type="password" class="password" id="password" placeholder="请输入密码">
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

=======
<?php
header('Content-type:text/html;charset=utf-8;');
class base{
    public $data = array();      
    public $key;
    public $value;
    public function index(){        
        $con = new MySQLi("localhost","root","root","bysj");
        if(!$con){
            die("数据库连接失败!");            
>>>>>>> dev
        }
        $sql = "select a.name,b.name as faculty_name from user a, faculty b where a.faculty_id = b.id";
        $result = $con->query($sql);
        if(!$result){    
            die("数据查询失败!");
        } 
        foreach($result as $k => $v){
            echo "<br>".$v['name'];
            var_dump($v);
        } 
  
        while($row = $result->fetch_row()){
            foreach($row as $k){
                echo "<br>".$k;    
            }
        } 
    }

    public function mysql(){
        $conn = mysql_connect("localhost","root","root");
        if(!$conn){
            echo "数据库连接失败".mysql_error();
            die();            
        }
        mysql_set_charset('utf-8');
        mysql_select_db('bysj');
        $sql = "select account,name  from user";
        $result = mysql_query($sql);
        while($row = mysql_fetch_array($result)){
            echo "<br>".$row['account']."--".$row['name'];
        }
    }
}

$index = new base();
$index->index();
$index->mysql();
 






