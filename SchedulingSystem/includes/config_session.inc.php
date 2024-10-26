<?php 

// Only set session configuration if a session has not been started
if (session_status() == PHP_SESSION_NONE) {
    ini_set('session.use_only_cookies',1);
    ini_set('session.use_strict_mode',1);

    session_set_cookie_params([
        'lifetime' => 1800,
        'domain' => 'localhost',
        'path' => '/',
        'secure' => true,
        'httponly' => true
    ]);

    session_start();
}

// Check if the user is logged in and manage session regeneration
if (isset($_SESSION["user_id"])) {    
    if (!isset($_SESSION["last_regeneration"])){ 
        regenerate_session_id_loggedin();
    } else {
        $interval = 60 * 30;
        if (time() - $_SESSION['last_regeneration'] >= $interval) {
            regenerate_session_id_loggedin();
        }
    }
} else {
    if (!isset($_SESSION["last_regeneration"])){ 
        regenerate_session_id();
    } else {
        $interval = 60 * 30;
        if (time() - $_SESSION['last_regeneration'] >= $interval) {
            regenerate_session_id();
        }
    }
}

// Function for regenerating session ID when logged in
function regenerate_session_id_loggedin() 
{
    session_regenerate_id(true);

    $userId = $_SESSION["user_id"];
    $newSessionId = session_create_id();
    $newSessionId = $newSessionId . "_" . $userId;
    session_id($newSessionId);

    $_SESSION["last_regeneration"] = time();
}

// Function for regenerating session ID when not logged in
function regenerate_session_id() {
    session_regenerate_id(true);
    $_SESSION["last_regeneration"] = time();
}
