<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    $to = "zhqian@gmail.com";
    $subject = "New Contact Form Submission";
    $body = "Name: " . $name . "\n";
    $body .= "Email: " . $email . "\n";
    $body .= "Message: " . $message;

    $headers = "From: noreply@aiprogear.com";

    if (mail($to, $subject, $body, $headers)) {
        echo "Thank you for your message!";
    } else {
        echo "Something went wrong, please try again later.";
    }
}
?>