<?php
if (isset($_GET['username']) && isset($_GET['password'])) {
    $username = $_GET['username'];
    $password = $_GET['password'];

    // Perform login validation or processing here
    // This is just a basic example and not secure - for demonstration purposes only
    // You should hash and securely validate the password, and use prepared statements to prevent SQL injection
    if ($username === 'admin' && $password === 'password') {
        echo "Login successful!";
    } else {
        echo "Login failed. Please try again.";
    }
} else {
    echo "Invalid request.";
}
?>
