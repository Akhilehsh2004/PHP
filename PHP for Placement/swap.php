<?php

$a = 5;
$b = 4;

$temp = $a;  // store $a in temporary variable
$a = $b;     // put $b into $a
$b = $temp;  // put $temp (old $a) into $b

echo "a = $a, b = $b";  // Output: a = 4, b = 5
