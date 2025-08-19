<?php
session_start();
if (empty($_SESSION['user'])) {
    header('Location: 7_login.php');
    exit;
}

echo "Welcome, " . htmlspecialchars($_SESSION['user']);

echo '<br><a href="7_logout.php">Logout</a>';
