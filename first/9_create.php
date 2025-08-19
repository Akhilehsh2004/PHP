<?php
require __DIR__ . '/9_db.php';

$name = $_POST['name'] ?? null;
$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
$pass = $_POST['password'] ?? null;
if (!$name || !$email || strlen($pass) < 6) exit('Bad input');

$stmt = $pdo->prepare('INSERT INTO users(name,email,pass_hash) VALUES (?,?,?)');
$stmt->execute([$name, $email, password_hash($pass, PASSWORD_DEFAULT)]);
echo 'User created';
