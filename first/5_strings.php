<?php
$s = " Hello, PHP! ";
echo trim($s), "\n";             // Hello, PHP!

echo strtoupper('abc'), "\n";       // ABC

echo strpos('placement', 'ace'), "\n"; // 2

echo str_replace('PHP', 'World', 'Hello, PHP'), "\n";

// JSON
$arr = ['name' => 'Akhilesh', 'age' => 22];
$j = json_encode($arr);
echo $j, "\n";                      // {"name":"Akhilesh","age":22}
print_r(json_decode($j, true));       // array