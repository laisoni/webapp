<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    // TODO: Validate and sanitize data, perform any additional processing

    // Example: Sending an email
    $to = "recipient@example.com";
    $subject = "New Contact Form Submission";
    $messageBody = "Name: $name\nEmail: $email\nMessage:\n$message";
    $headers = "From: sender@example.com";

    if (mail($to, $subject, $messageBody, $headers)) {
        echo "Thank you for your message!";
    } else {
        echo "There was an error sending the message.";
    }
}
?>

</body>
</html>