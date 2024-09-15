<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form input values
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $subject = htmlspecialchars($_POST['subject']);
    $message = htmlspecialchars($_POST['message']);

    // Set recipient email address
    $to = 'official.abdullah300@gmail.com'; // Replace with your email address

    // Set email subject
    $email_subject = "New message from: $name";

    // Create email body
    $email_body = "Name: $name\n";
    $email_body .= "Email: $email\n";
    $email_body .= "Subject: $subject\n";
    $email_body .= "Message:\n$message\n";

    // Set email headers
    $headers = "From: $email\n";
    $headers .= "Reply-To: $email\n";

    // Send email
    if (mail($to, $email_subject, $email_body, $headers)) {
        echo "success";
    } else {
        echo "failure";
    }
}
?>
