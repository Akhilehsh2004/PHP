<?php
$x = 15;
if ($x < 10) {
    echo "small";
} elseif ($x < 20) {
    echo "medium"; // prints medium
} else {
    echo "large";
}

echo "\n";

$day = 3;
switch ($day) {
    case 1:
        echo "Mon";
        break;
    case 2:
        echo "Tue";
        break;
    case 3:
        echo "Wed";
        break;  // prints Wed
    default:
        echo "?";
}

echo "\nFor loop: ";
for ($i = 1; $i <= 5; $i++) echo $i . ' ';

echo "\nWhile: ";
$i = 3;
while ($i > 0) {
    echo $i . ' ';
    $i--;
}

echo "\nForeach: ";
$nums = [2, 4, 6];
foreach ($nums as $n) echo $n . ' ';
