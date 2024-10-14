<?php
function sumDigits($num)
{
    $sum=0;
    while($num){
        $d=$num%10;
        $sum=$sum+$d;
        $num=(int)($num/10);
    }
    return $sum;
}
$num=1234;
echo sumDigits($num);
?>