<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    die("Please login first.");
}
echo "<h1>Welcome User</h1>";
echo "<a href='../auth/logout.php'>Logout</a>";
