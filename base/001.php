<?php

header('Content-type:text/html;charset=utf-8;'); 

//连接数据库的四种方式
//001

echo "<h1>第1种连接方式 mysql_connect   php版本小于5.5 </h1>"; 

if(PHP_VERSION<=5.5){
    $con = mysql_connect("localhost","root","root"); 
    if($con){ 
        // 选择表
        mysql_select_db('bysj',$con);
        //执行SQL语句
        $sql = "select * from user";
        $result =mysql_query($sql);
        //输出数据
        while($row = mysql_fetch_row($result)){ 
            foreach($row as $k => $v){
                echo "\n".$v;             
            } 
            echo "<br>".$v; 
        }
    }else{
        die("无法连接数据库".mysql_error());
    } 
}else{
    echo "mysql_connect连接数据库php版本需小于5.5";
}



//002

echo "<h1>第2种连接方式 面向对象mysqli</h1>";
$con =  new MySQLi("localhost","root","root","bysj");
if($con->connect_error){
   die("连接数据库失败!".$con->connect_error);
}
echo "连接数据库成功！";
$sql = "select * from user";
$result = $con->query($sql);
foreach($result as $k => $v){
    echo "<br>".$v['id']."\n".$v['name'];
}



//003
echo "<h1>第3种连接方式 面向过程mysqli_connect</h1>";

$con3 = mysqli_connect("localhost","root","root","bysj");
if(!$con){
    die( "连接数据库失败！".mysqli_connect_error);
}
 echo "连接数据库成功！";
 
$sql3 = "select * from user";
$result3 = mysqli_query($con3,$sql3); 
    foreach($result3 as $k => $v){
        echo "<br>".$v['id']."-->".$v['name'];              
    } 



//004
 echo "<h1>第4种连接方式 PDO</h1>";
$con = new PDO("mysql:host=localhost;dbname=bysj;","root","root");
try{
    echo "连接数据库成功！";
    $sql = "select * from user";
    $result = $con->query($sql);
    foreach($result as $k => $v  ){
        echo "<br>".$v['id']."-->".$v['name'];   
    }

}catch(PDOException $e){
    echo $e->getMessage();

}

 