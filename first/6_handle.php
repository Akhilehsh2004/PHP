<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
    $pass  = $_POST['password'] ?? '';

    if (!$email) {
        echo "Invalid email";
    } elseif (strlen($pass) < 6) {
        echo "Password too short";
    } else {
        echo "Login success (demo only)";
    }
} else {
    echo "No data submitted";
}
