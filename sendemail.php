<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    // Your email address
    $to = "obothrichardgyver@gmail.com";
    
    // Get form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    
    // Email subject
    $email_subject = "New Contact Form Message: $subject";
    
    // Email body
    $email_body = "You have received a new message from your website.\n\n";
    $email_body .= "Name: $name\n";
    $email_body .= "Email: $email\n";
    $email_body .= "Subject: $subject\n\n";
    $email_body .= "Message:\n$message\n";
    
    // Email headers
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";
    
    // Send email
    if (mail($to, $email_subject, $email_body, $headers)) {
        // Success - redirect back with success message
        header("Location: index.html?status=success#contact");
    } else {
        // Error - redirect back with error message
        header("Location: index.html?status=error#contact");
    }
}
?>
