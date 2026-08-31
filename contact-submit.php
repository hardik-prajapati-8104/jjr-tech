<?php

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    // Get form data
    $name = trim($_POST['name'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $message = trim($_POST['message'] ?? '');

    // Validate fields
    if (empty($name) || empty($email) || empty($message)) {
        die("Please fill in all required fields.");
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        die("Please enter a valid email address.");
    }

    // Receiver email
    $to = "hello@jjrtech.io";

    // Email subject
    $subject = "New Contact Form Enquiry - JJR Tech";

    // Email content
    $email_body = "
    <html>
    <head>
        <title>New Contact Form Enquiry</title>
    </head>
    <body>
        <h2>New Contact Form Enquiry</h2>

        <p><strong>Name:</strong> " . htmlspecialchars($name) . "</p>

        <p><strong>Email:</strong> " . htmlspecialchars($email) . "</p>

        <p><strong>Message:</strong></p>

        <p>" . nl2br(htmlspecialchars($message)) . "</p>

        <hr>

        <p>
            This enquiry was submitted through the JJR Tech website contact form.
        </p>
    </body>
    </html>
    ";

    // Email headers
    $headers  = "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=UTF-8\r\n";
    $headers .= "From: JJR Tech Website <hello@jjrtech.io>\r\n";
    $headers .= "Reply-To: " . $email . "\r\n";

    // Send email
    if (mail($to, $subject, $email_body, $headers)) {

        // Redirect after successful submission
        header("Location: thank-you.php");
        exit;

    } else {

        echo "Sorry, your message could not be sent. Please try again later.";
    }

} else {

    // Prevent direct access
    header("Location: index.php");
    exit;
}
?>