<?php
function greet($name='Developer'){ 
    return "Hello, $name"; 
}

echo greet('Akhilesh'), "\n";      // Hello, Akhilesh

// Global variable
$a = 10;
function incGlobal(){
    global $a;   // bring $a from global scope
    $a++;        // alters global
}
incGlobal();

echo $a, "\n"; // 11

// By reference
function addOne(&$x){ 
    $x++; 
}
$v=5; 
addOne($v); 
echo $v, "\n";  // 6

// Variadic function
function sumAll(...$nums){
    $s = 0; 
    foreach($nums as $n) $s += $n; 
    return $s;
}
echo sumAll(1,2,3,4), "\n";       // 10
?>
