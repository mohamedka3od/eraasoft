<?php
//Write a PHP function that checks whether a string is all lower case.

$text="mohamed yasser";

function islower(string $string):bool{
    foreach(str_split($string)  as $char){
    if($char>='A' && $char <='Z'){
        return false;
    }
    }
    return true;
}

var_dump(islower($text));