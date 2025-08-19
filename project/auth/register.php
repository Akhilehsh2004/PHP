<?php
include("../config/db.php");
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $username = $_POST['username'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $stmt = $conn->prepare("INSERT INTO users(username, password, role) VALUES (?, ?, 'user')");
    $stmt->bind_param("ss", $username, $password);
    if ($stmt->execute()) {
        echo "Registration Successful. <a href='login.php'>Login Now</a>";
    } else {
        echo "Error: " . $stmt->error;
    }
}
?>
<form method="POST">
    <input type="text" name="username" placeholder="Username" required><br>
    <input type="password" name="password" placeholder="Password" required><br>
    <button type="submit">Register</button>
</form>