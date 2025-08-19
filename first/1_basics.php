<?php
// Single line comment
/* Multi-line
   comment */

echo "Hello, PHP!\n";           // Output
print "Print also works\n";      // Similar to echo

$name = "Akhilesh";               // Variable
$age  = 22;                        // Integer
$pi   = 3.14;                      // Float
$isDev = true;                     // Boolean

const COMPANY = 'Starfly';         // Constant

echo "I am $name, $age years old at " . COMPANY . "\n";

echo gettype($age), "\n";        // integer
var_dump($pi);                     // float(3.14)