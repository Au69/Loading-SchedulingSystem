<?php
session_start();

require_once 'includes/config_session.inc.php';
require_once 'includes/login_view.inc.php';

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/loginstyle.css">
    <title>Login</title>
</head>

      
<body>
<div class="logo">
    <img src="css/images/ITE-removebg.png" alt="Institute of Technical Education Logo">
</div>
    <div class="login-container">
        <h2>Login Account</h2>
        <form action="includes/login.inc.php" method="post">
            <div class="input-group">
                <label for="username">Username:</label>
                <input type="text" id="username" name="username">
            </div>
            <div class="input-group">
                <label for="password">Password:</label>
                <input type="password" id="password" name="pass">
            </div>
            <button type="submit" class="login-btn">Login</button>
        </form>

        <?php
     check_login_errors();
      ?>
    </div>

</body>
</html>
