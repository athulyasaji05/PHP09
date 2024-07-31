<?php
function findSecondLargest($arr)
{
    $size = count($arr);

    if ($size < 2) {
        return "Array should have at least two elements.";
    }
    rsort($arr);
    return $arr[1];
}

$numbers = [10, 5, 8, 12, 6, 3, 9];
$secondLargest = findSecondLargest($numbers);

echo "Original array: " . implode(", ", $numbers) . "\n";
echo "Second largest element: " . $secondLargest;