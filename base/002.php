<?php
 header('Content-type:text/html;charset=utf-8');
class forea{
    public $a = 123;
    private $b = 256;
    protected $c = 2565;
    public function index()
    {        
        $conn = mysqli_connect("localhost","root","root","bysj");
        if(!$conn){
            echo "数据库连接失败".mysqli_error_id."：".mysqli_error;
            die();
        }
        $sql = "select id,name,count(faculty_id) as sum from user group by name"  ;
        $relult = mysqli_query($conn,$sql); 
        if($relult){ 
            //第一种 使用foreach遍历对象
              foreach($relult as $k => $v){
                  echo "<br>".$v['name']."-->".$v['sum'];
              } 
            //第二种 用mysqli_fetch_all() 函数从结果集中取得所有行作为关联数组，或数字数组，或二者兼有。
            //再将数组循环遍历出来(两种foreach)
            $array = mysqli_fetch_all($relult); 
            foreach($array as $k => $v ){
                echo "<br>".$k."-->"; 
                echo "id：".$v[0]."\n";
                echo "姓名：".$v[1]."\n";
                echo "总数：".$v[2]."\n";  
            }
            foreach($array as $v){
                echo "<br>"; 
                echo "id：".$v[0]."\n";
                echo "姓名：".$v[1]."\n";
                echo "总数：".$v[2]."\n";  
            }
 
        }else{
            echo "数据搜索失败";
        }
        
    }

    function arrayFor(){

    }
}

$aa = new forea();
//遍历对象中的值
foreach($aa as $k => $v){
    echo "$k==>$v<br>";
}
$aa->index();


