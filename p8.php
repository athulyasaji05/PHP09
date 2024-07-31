<?php
  
   // function to calculate sum of digits
    function sumDigits($number) {
        $sum = 0;
        // converting number to string to access digits easily
        $numberStr = (string)$number;
        for ($i = 0; $i < strlen($numberStr); $i++) {
            $digit = (int)$numberStr[$i];
            $sum += $digit;
        }
        return $sum;
    }

    $number = 12345;
    echo "Sum of digits: " . sumDigits($number);

?>