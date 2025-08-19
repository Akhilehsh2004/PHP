<?php
if (isset($_GET['a']) && isset($_GET['b'])) {
    $a = (int)$_GET['a'];
    $b = (int)$_GET['b'];
    $sum = $a + $b;

    echo "The sum of $a and $b is: $sum";
} else {
    echo "Please pass values in the URL, like this: ?a=5&b=7";
}
