<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    // Set your church email here
    $to = "yourchurch@email.com";  
    $subject = "New Message from Sentinels Call Ministries Website";

    $body = "You have received a new message:\n\n";
    $body .= "Name: $name\n";
    $body .= "Email: $email\n\n";
    $body .= "Message:\n$message\n";

    $headers = "From: $email";

    // Try to send
    if (mail($to, $subject, $body, $headers)) {
        echo "✅ Message sent successfully. We will get back to you soon.";
    } else {
        echo "❌ Sorry, your message could not be sent. Please try again.";
    }
}
?>
