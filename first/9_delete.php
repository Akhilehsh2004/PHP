<?php
require __DIR__ . '/9_db.php';
$id = (int)($_POST['id'] ?? 0);
if ($id <= 0) exit('Bad input');
$stmt = $pdo->prepare('DELETE FROM users WHERE id=?');
$stmt->execute([$id]);
echo 'Deleted';
