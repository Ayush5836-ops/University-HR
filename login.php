<?php
session_start();

$correct_username = "21bca1535@cuchd.in";
$correct_password = "Ayush12@!";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    if ($username === $correct_username && $password === $correct_password) {
        $_SESSION["loggedin"] = true;
        header("Location: index.html");
        exit;
    } else {
        $error = "Invalid credentials. Try again.";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h2>Login Page</h2>
    <?php if (isset($error)) echo "<p style='color:red;'>$error</p>"; ?>
    <form method="POST">
        Username: <input type="text" name="username" required><br><br>
        Password: <input type="password" name="password" required><br><br>
        <input type="submit" value="Login">
    </form>
</body>
</html>