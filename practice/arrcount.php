<?php
// Write a PHP function to count the total number of times a specific value appears in
// an array

$arr =[9,1,5,6,4,2,7,5,6,7,5,3,2,8,7,6,6,5,4,4,2,6,7,7,4,5,5,1,9];

function arrcount(array $arr,$element):int{
    $count=0;
    foreach($arr as $e){
        if($e == $element){
            $count ++;
        }
    }
    return $count;
}

echo arrcount($arr,9);