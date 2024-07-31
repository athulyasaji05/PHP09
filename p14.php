<?php 

function countChars($str) { 
    $chars = str_split($str); 
    $count = array_count_values($chars); 

    foreach ($count as $char => $occurrences) { 
        echo "'$char' occurs $occurrences times.\n"; 
    } 
} 

// Driver code 
$str = "Welcome to Ootty"; 

countChars($str); 

?>