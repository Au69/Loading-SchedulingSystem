<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $pass = $_POST['pass'];

    try {
        require_once 'dbhinc.php'; // Database connection
        require_once 'login_model.inc.php'; // Model functions
        require_once 'login_ctrl.inc.php'; // Controller logic

        $errors = [];

        // Check if input fields are empty
        if (is_input_empty($username, $pass)) {
            $errors["empty_input"] = "Fill in all fields!";
        }

        // Fetch user details
        $result = get_user($pdo, $username);

        // Check if the username is incorrect
        if (is_username_wrong($result)) {
            $errors["login_incorrect"] = "Incorrect login details!";
        }

        // If the username is valid, check the password
        if (!is_username_wrong($result) && is_password_wrong($pass, $result["pass"])) {
            $errors["login_incorrect"] = "Incorrect login details!";
        }

        // If there are errors, store them in the session and redirect back
        if (!empty($errors)) {
            $_SESSION["errors_login"] = $errors;
            header("Location: ../index.php");
            die();
        }

        // If no errors, proceed with login and session creation
        require_once 'config_session.inc.php';

        $newSessionId = session_create_id();
        $newSessionId = $newSessionId . "_" . $result["id"];
        session_id($newSessionId);

        $_SESSION["user_id"] = $result["id"];
        $_SESSION["user_username"] = htmlspecialchars($result["username"]);
        $_SESSION["last_regeneration"] = time();

        header("Location: ../dashboard.php?login=success");
        $pdo = null; // Close connection
        $stmt = null;

        die();

    } catch (PDOException $e) {
        die("Query failed: " . $e->getMessage());
    }

} else {
    header("Location: ../login.php");
    die();
}
