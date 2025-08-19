<?php
$idx = [10, 20, 30];
$assoc = ['name' => 'Akhilesh', 'role' => 'Dev'];
$multi = [[1, 2], [3, 4]];

$idx[] = 40;                 // push
array_pop($idx);             // pop

print_r(array_merge([1, 2], [3]));
var_dump(in_array(2, [1, 2, 3]));   // true
print_r(array_map(fn($x) => $x * $x, [1, 2, 3]));

// Sorting
$nums = [5, 2, 9, 1];
sort($nums);
print_r($nums);
rsort($nums);
print_r($nums);

// Associative sort by value then key
$price = ['pen' => 10, 'book' => 50, 'gum' => 5];
asort($price);
print_r($price);
ksort($price);
print_r($price);
