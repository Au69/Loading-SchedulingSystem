<?php
$password = '12345678'; // Change to the password you want to hash
$hashedPassword = password_hash($password, PASSWORD_DEFAULT);
echo $hashedPassword;
?>
