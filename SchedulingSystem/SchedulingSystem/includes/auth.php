<?php
session_start();

// Check if user_id is set in session to determine login status
if (isset($_SESSION['user_id'])) {
    header("Location: admin/dashboard.php");
    exit();
} else {
    header("Location: admin/index.php");
    exit();
}

