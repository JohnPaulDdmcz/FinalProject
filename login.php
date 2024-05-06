<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!-- fontawesome cdn -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- bootstrap css -->
    <link rel = "stylesheet" href = "bootstrap-5.0.2-dist/css/bootstrap.css">
    <!-- custom css -->
    <link rel = "stylesheet" href = "login.css">
</head>
<body>
<header id="header" style="padding-top: 104px;">
    <div class="text-center">
        <h1 class="text-capitalize text-black mx-auto"></h1>
    </div>
</header>

<div class="container" id="signIn">
    <h1 class="form-title">ADMIN ONLY</h1>
    <form method="post" action="login.php">
        <div class="input-group">
            <i class="fas fa-envelope"></i>
            <input type="text" name="username" id="username" placeholder="" required>
            <label for="username">Username</label>
        </div>
        <div class="input-group">
            <i class="fas fa-lock"></i>
            <input type="password" name="password" id="password" placeholder="" required>
            <label for="password">Password</label>
        </div>
        <input type="submit" class="btn" value="Sign In" name="signIn">
    </form>
</div>

<div class="sign-out-container">
    <a href="index1.php" class="btn btn-danger">
        <i class="fas fa-sign-out-alt"></i> 
    </a>
</div>




<script src="login.js"></script>

<style>
    .sign-out-container {
        position: fixed;
        top: 20px;
        right: 20px;
        z-index: 9999; /* Ensure it appears above other content */
    }
</style>

</html>

<?php
session_start();

// Hardcoded usernames and passwords
$admins = array(
    "francel" => "zamora",
    "john" => "paul",
    "gill" => "cass",
    "darrell" => "masa"
);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Check if the entered username and password match the hardcoded values
    if (isset($admins[$username]) && $admins[$username] == $password) {
        // Successful login, redirect to admin panel
        $_SESSION["username"] = $username;
        header("Location: admin.php");
        exit();
    } else {
        // Invalid login, display error message
        echo "<script>alert('Invalid username or password. Please try again.');</script>";
    }
}
?>
