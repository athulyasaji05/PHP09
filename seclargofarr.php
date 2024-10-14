<?php
function seclarg($array){
    sort($array);
    return $array[count($array)-2];
}
$array=[1,3,2,5];
echo seclarg($array);  
?>
