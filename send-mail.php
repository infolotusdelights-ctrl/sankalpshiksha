<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name    = htmlspecialchars($_POST['name']);
    $phone   = htmlspecialchars($_POST['phone']);
    $email   = htmlspecialchars($_POST['email']);
    $course  = htmlspecialchars($_POST['course']);
    $message = htmlspecialchars($_POST['message']);

    $to = "sankalpsiksha@gmail.com";  // 🔴 CHANGE THIS
    $subject = "New Inquiry – Sankalp Siksha";

    $body = "
    New Inquiry Received\n\n
    Name: $name\n
    Phone: $phone\n
    Email: $email\n
    Course: $course\n
    Message:\n$message
    ";

    $headers = "From: Sankalp Siksha <no-reply@sankalpsiksha.com>";

    if (mail($to, $subject, $body, $headers)) {
        echo "<h2>Thank you! We will contact you soon.</h2>";
    } else {
        echo "<h2>Something went wrong. Please try again later.</h2>";
    }
}
?>
