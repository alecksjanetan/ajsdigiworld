<?php
// action_page.php

// Check if form data was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = htmlspecialchars($_POST["name"]);
    $email = htmlspecialchars($_POST["email"]);

    // Basic output as an example
    echo "<h2>Form Submission Received</h2>";
    echo "<p>Name: $name</p>";
    echo "<p>Email: $email</p>";
    
    // Here, you could also save the data to a database, send an email, etc.
} else {
    echo "Invalid request.";
}
?>
