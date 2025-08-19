<?php
$a = 10;
$b = 3;
echo $a + $b, " ", $a - $b, " ", $a * $b, " ", $a / $b, " ", $a % $b, "\n"; // 13 7 30 3.333... 1
var_dump($a == "10");   // true (loose)
var_dump($a === $b);     // false (strict)
var_dump($a > 5 && $b < 5);// true