<?php
declare(strict_types=1);
//write a php function to get maximum number in array
$array =[5,6,9, 8, 2, 5, 6,3, 1,4,7, 8,9,0, 6, -2, 21, 3];

function getMAxNum(array $array)
{
    if(empty($array)){
        return false;
    }else{
        $max = -INF;
    foreach($array as $e){
        if($e > $max){
            $max = $e;
        }
    }
    return $max;
    }
}
    
echo getMaxNum($array);