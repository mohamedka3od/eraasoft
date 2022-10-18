<?php
declare(strict_types=1);
//write a php function to get mimimum number in array
$array =[5,6,9, 8, 2, 5, 6,3, 1,4,7, 8,9,0, 6, -2, 21, 3];
// echo min($array);

function getMinNum(array $array)
{
    if(empty($array)){
        return false;
    }else{
        $min = INF;
    foreach($array as $e){
        if($e < $min){
            $min = $e;
        }
    }
    return $min;
    }
}
    
echo getMinNum($array);