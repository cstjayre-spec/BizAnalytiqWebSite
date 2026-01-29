<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $subject = htmlspecialchars($_POST['subject']);
    $message = htmlspecialchars($_POST['message']);

    $to = "cstjayre@gmail.com"; // replace with your email
    $headers = "From: noreply@bizanalytiq.com\r\n";
    $headers .= "Reply-To: $name\r\n";

    $body = "Name: $name\nSubject: $subject\nMessage:\n$message";

    if (mail($to, $subject, $body, $headers)) {
        echo "Message sent successfully!";
    } else {
        echo "Sorry, there was a problem sending your message.";
    }
}
?>
