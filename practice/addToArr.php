<?php
//Write a PHP function that inserts a new item in an array in any position.

$arr = array(1,2,3,4,5,7,8,9);

function addElement(&$array,$element,$indx){

    $newArr=array();
    foreach($array as $key => $val){
        if($key == $indx){
            $newArr[]=$element;
        }
        $newArr[]=$val;
    }
    $array = $newArr;

}
addElement($arr,6,5);
addElement($arr,10,5);
print_r($arr);
