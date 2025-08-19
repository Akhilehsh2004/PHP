<?php
require __DIR__ . '/9_db.php';
$page = max(1, (int)($_GET['page'] ?? 1));
$limit = 5;
$offset = ($page - 1) * $limit;
$total = (int)$pdo->query('SELECT COUNT(*) FROM users')->fetchColumn();
$stmt = $pdo->prepare('SELECT id,name,email,created_at FROM users ORDER BY id DESC LIMIT :l OFFSET :o');
$stmt->bindValue(':l', $limit, PDO::PARAM_INT);
$stmt->bindValue(':o', $offset, PDO::PARAM_INT);
$stmt->execute();
$rows = $stmt->fetchAll();
?>
<!doctype html>
<table border="1" cellpadding="6">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Created</th>
    </tr>
    <?php foreach ($rows as $r): ?>
        <tr>
            <td><?= htmlspecialchars((string)$r['id']) ?></td>
            <td><?= htmlspecialchars($r['name']) ?></td>
            <td><?= htmlspecialchars($r['email']) ?></td>
            <td><?= htmlspecialchars($r['created_at']) ?></td>
        </tr>
    <?php endforeach; ?>
</table>
<?php
$pages = max(1, (int)ceil($total / $limit));
for ($p = 1; $p <= $pages; $p++) {
    echo '<a href="?page=' . $p . '">' . $p . '</a> ';
}
