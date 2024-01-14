<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    $to = "rahmanif799@gmail.com";  
    $subject = "New Contact Form Submission";
    $headers = "From: $email";

    $email_message = "Name: $name\n";
    $email_message .= "Email: $email\n";
    $email_message .= "Message:\n$message";

    // Check if the email is sent successfully
    if (mail($to, $subject, $email_message, $headers)) {
        // Use an absolute URL for the redirection
        echo '<script>alert("Message Sent Successfully")</script>'; 
        exit();
    }
}
?>
