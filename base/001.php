<?php

header('Content-type:text/html;charset=utf-8;'); 

//连接数据库
//001
$con = mysql_connect("localhost","root","root");

if($con){ 
    // 选择表
    mysql_select_db('bysj',$con);
    //执行SQL语句
    $sql = "select * from user";
    $result =mysql_query($sql);
    //输出数据
    $row = mysql_fetch_row($result) ;
    var_dump($row); 
}else{
	die("无法连接数据库".mysql_error());
} 
//002

$con =  new MySQLi("localhost","root","root","bysj");
if($con->connect_error){
   die("连接数据库失败!".$con->connect_error);
}
echo "连接数据库成功！";

//003

$con = mysqli_connect("localhost","root","root");
if(!$con){
    die( "连接数据库失败！".mysqli_connect_error);
}

 echo "连接数据库成功！";

//004
$con = new PDO("mysql:host=localhost;dbname=bysj;","root","root");

try{
    $sql = "select * from user";
    $result = $con->query($sql);
    foreach($result as $k ){
        print_r($k);
        echo "<br>";
    }

}catch(PDOException $e){
    echo $e->getMessage();

}

 