<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $to = "your-email@example.com"; // Change this to your email address
    $subject = "New Contact Form Submission";
    $message = "Name: $name\nEmail: $email";
    mail($to, $subject, $message);
    echo "Thank you for your submission!";
} else {
    echo "Error: Method not allowed";
}
?>
