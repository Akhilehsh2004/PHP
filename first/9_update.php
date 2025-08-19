<?php
require __DIR__ . '/9_db.php';
$id = (int)($_POST['id'] ?? 0);
$name = $_POST['name'] ?? '';
if ($id <= 0 || $name === '') exit('Bad input');
$stmt = $pdo->prepare('UPDATE users SET name=? WHERE id=?');
$stmt->execute([$name, $id]);
echo 'Updated';
