<?php
session_start();
if ($_SESSION['role'] !== 'admin') {
    die("Access Denied!");
}
echo "<h1>Welcome Admin</h1>";
echo "<a href='../auth/logout.php'>Logout</a>";
