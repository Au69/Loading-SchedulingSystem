<?php

declare(strict_types=1);

// Function to check if user exists and validate the password
function get_user(object $pdo, string $username) {
    

    // Prepare a SQL statement to select the user data
    $query = "SELECT * FROM users WHERE username = :username";
    $stmt = $pdo->prepare($query);

    // Bind the parameters
    $stmt->bindParam(':username', $username);

    // Execute the statement
    $stmt->execute();

    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    return $result;
}
