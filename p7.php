<?php
$a =  array (2,5,3);


for($i=0; $i < count($a); $i++) {
    
    
    for($j=0; $j < count($a)-1; $j++) {
        
        
        if($a[$j+1] < $a[$j]) {
            
            
            $temp = $a[$j+1];
            $a[$j+1] = $a[$j];
            $a[$j] = $temp;
        }
    }
}

//printing the array
print_r($a);
?>