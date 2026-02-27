<?php
session_start();
 
// If already logged in, redirect to index
if (isset($_SESSION['username'])) {
    header("Location: index.php");
    exit();
}
 
$error = "";
 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
 
    $username = $_POST['username'];
    $password = $_POST['password'];
 
    // Static admin login
    if ($username === "admin" && $password === "admin") {
 
        $_SESSION['username'] = "ADMIN";
        header("Location: index.php");
        exit();
 
    } else {
        $error = "Invalid username or password!";
    }
}
?>
 
<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
     <link rel="stylesheet" href="/pageStyle.css">
     <link rel="stylesheet" href="../style.css">
    <title>Login</title>

</head>
<body>
 
<h2>Login Form</h2>
 
<?php if ($error != ""): ?>
    <p style="color:red;"><?php echo $error; ?></p>
<?php endif; ?>
 
<form method="POST">
    <label>Username:</label><br>
    <input type="text" name="username" required><br><br>
 
    <label>Password:</label><br>
    <input type="password" name="password" required><br><br>
 
    <button type="submit">Login</button>
</form>
 
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../script.js"></script>

</body>
</html>