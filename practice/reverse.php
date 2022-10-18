<?php
//to prevent convert number to string 1 != '1' when pass to function
declare (strict_types=1);
// reverce this string ithout any built in function in php
$text = "esraasoft";
function revstr(string &$string){
    $slen = strlen($string);
    for ($i = 0; $i <= (int)($slen / 2); $i++) {
        $temp = $string[$i];
        $string[$i] = $string[$slen - $i - 1];
        $string[$slen - $i - 1] = $temp;
    }
    return $string;
}

revstr($text);
echo $text;