<?php
session_start();

$USER = ['email' => 'admin@example.com', 'pass_hash' => password_hash('Secret123', PASSWORD_DEFAULT)];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
    $pass  = $_POST['password'] ?? '';
    if ($email === $USER['email'] && password_verify($pass, $USER['pass_hash'])) {
        $_SESSION['user'] = $email; // logged in
        header('Location: 7_dashboard.php');
        exit;
    }
    $err = 'Invalid credentials';
}
?>
<!doctype html>
<title>Login</title>
<?php if (!empty($err)) echo '<p style="color:red">' . $err . '</p>'; ?>
<form method="post">
    <input name="email" type="email" required>
    <input name="password" type="password" required>
    <button>Login</button>
</form>