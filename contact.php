<?php
if(isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $to = "rupeshsingh@gmail.com";
    $subject = "New Contact Form Submission";
    $body = "From: $name\nEmail: $email\n\nMessage:\n$message";
    mail($to, $subject, $body);
    echo "Thank you for your message!";
}
?>
