<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $to = 'momosaaidi32@gmail.com';
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $subject = 'New message from ' . $name;
    $body = "Name: $name\nEmail: $email\nMessage: $message";
    if (mail($to, $subject, $body)) {
        echo 'Your message has been sent.';
    } else {
        echo 'There was a problem sending your message. Please try again.';
    }
}
?>