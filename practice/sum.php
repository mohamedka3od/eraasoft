<?php

// write a script to add all the integers between 2 random numbers and display the sum
// if the numbers is not odd.

$start = rand(1,10);
$end =rand(20,30);
$sum=0;
for($i=$start ; $i<=$end;$i++){
    if($i %2 ==0)
        $sum+=$i;
}
echo $start."\n";
echo $end."\n";
echo $sum."\n";

?>
<!-- smae code in html -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $start = rand(1,10);
        $end =rand(20,30);
        $sum=0;
    ?>
    <?php 
    for($i=$start ; $i<=$end;$i++):
        if($i %2 ==0):
            $sum+=$i;?>
            <p><?=$i;?></p>
    <?php 
        endif;
    endfor;?>
    <h1>Sum: <?php echo $sum;?></h1>
    
</body>
</html>