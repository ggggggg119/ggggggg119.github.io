<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    $subject = htmlspecialchars($_POST['subject']);
    $message = htmlspecialchars($_POST['message']);

    $to = "banyuardiansyah13@gmal.com"; // Replace with your email
    $subject_mail = "New Contact Form Submission: $subject";
    $body = "Name: $name\nEmail: $email\nPhone: $phone\n\nMessage:\n$message";

    // Headers for better mail format
    $headers = "From: $email" . "\r\n" .
               "Reply-To: $email" . "\r\n" .
               "X-Mailer: PHP/" . phpversion();

    // Send email
    if (mail($to, $subject_mail, $body, $headers)) {
        echo "Message sent successfully!";
    } else {
        echo "Failed to send message!";
    }
}
?>
