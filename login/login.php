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
 






