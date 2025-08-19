<?php
session_start();
if (empty($_SESSION['csrf'])) $_SESSION['csrf'] = bin2hex(random_bytes(16));
?>
<!doctype html>
<form method="post" action="10_handle.php">
    <input type="hidden" name="csrf" value="<?= $_SESSION['csrf'] ?>">
    <input name="email" type="email" required>
    <input name="password" type="password" required>
    <button>Login</button>
</form>