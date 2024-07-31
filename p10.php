<?php
$string = "Where did the big Elephant go?";
$words  = explode(' ', $string);

$longestWordLength = 0;
$longestWord = '';

foreach ($words as $word) {
   if (strlen($word) > $longestWordLength) {
      $longestWordLength = strlen($word);
      $longestWord = $word;
   }
}

echo $longestWord;
// Outputs: "Elephant"
?>