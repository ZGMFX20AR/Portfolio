<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];

    // Process the data and send email
    $to = "asriruslan@yahoo.com";  // Replace with your email address
    $headers = "From: $email";
    $messageBody = "Name: $name\nEmail: $email\nSubject: $subject\n\n$message";

    mail($to, "Contact Form Submission", $messageBody, $headers);

    // Redirect back to your portfolio or show a thank you message
    header("Location: thank_you.html"); // Create a thank_you.html file
}
?>
