<?php
$maxSize = 2 * 1024 * 1024; // 2MB
$allowed = ['image/jpeg' => 'jpg', 'image/png' => 'png', 'image/webp' => 'webp'];

if (!isset($_FILES['file']) || $_FILES['file']['error'] !== UPLOAD_ERR_OK) {
    http_response_code(400);
    exit('Upload error');
}
$f = $_FILES['file'];
if ($f['size'] > $maxSize) exit('Too large');
$mime = mime_content_type($f['tmp_name']);
if (!isset($allowed[$mime])) exit('Invalid type');

$name = bin2hex(random_bytes(8)) . '.' . $allowed[$mime];
$dest = __DIR__ . '/uploads/' . $name;
if (!is_dir(__DIR__ . '/uploads')) mkdir(__DIR__ . '/uploads');
move_uploaded_file($f['tmp_name'], $dest);

echo 'Saved as: ' . $name;
