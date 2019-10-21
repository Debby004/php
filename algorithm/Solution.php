<?php
class solution{
    public function isPalindrome($str){
        $tr = preg_replace('/[^a-zA-Z0-9]/','',$str); 
        $newstr = strrev($tr); 
        if(strcasecmp($newstr,$tr)){
            return true; 
        } else{
            return false;
        }
      
    }
}
$str = "555699894 1gfdgdfg dfsdf";
$result = new solution(); 
$aa = $result->isPalindrome($str);
var_dump($aa);