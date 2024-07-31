<?php
function factorial($num)  
{  
  if($num <= 1) {  
	return 1;  
  }  
  else{  
	return $num * factorial($num - 1);  
  }  
}  


$num = 11;  
echo "Factorial of $num is " .factorial($num);
?>