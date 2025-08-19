<?php
session_start(); require __DIR__.'/9_db.php';

if(!hash_equals($_SESSION['csrf'] ?? '', $_POST['csrf'] ?? '')){
  http_response_code(403); exit('CSRF');
}

$email = filter_input(INPUT_POST,'email', FILTER_VALIDATE_EMAIL);
$pass  = $_POST['password'] ?? '';
if(!$email || !$pass) exit('Bad input');

$stmt=$pdo->prepare('SELECT id,email,pass_hash FROM users WHERE email=?');
$stmt->execute([$email]);
$user=$stmt-