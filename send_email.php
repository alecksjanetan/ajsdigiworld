<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data and sanitize it
    $name = htmlspecialchars($_POST["name"]);
    $email = htmlspecialchars($_POST["email"]);
    $message = htmlspecialchars($_POST["message"]);

    // Email configuration
    $to = "contact-me@ajsdigiworld.com"; // Replace with your email address
    $subject = "New Contact Form Submission from $name";
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

    // Construct the email content
    $emailBody = "You have received a new message from the contact form:\n\n";
    $emailBody .= "Name: $name\n";
    $emailBody .= "Email: $email\n\n";
    $emailBody .= "Message:\n$message\n";

    // Send the email
    if (mail($to, $subject, $emailBody, $headers)) {
        echo "<h3 style=font-family: 'Lexique'; font-size: 30px; color: #f0737f;>Thank you! Your message has been sent.</h3>";
    } else {
        echo "<h3>Sorry, there was an issue sending your message. Please try again later.</h3>";
    }
} else {
    echo "Invalid request.";
}
?>