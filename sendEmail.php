<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the form data
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);
    
    // Email address to receive the message
    $to = "contact@pradeepn.in"; // Replace with your email address
    $subject = "Contact Us Message from $name";
    
    // Message content
    $body = "Name: $name\nEmail: $email\nMessage:\n$message";
    
    // Headers
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";
    
    // Send email
    if (mail($to, $subject, $body, $headers)) {
        echo "Thank you for contacting us, we will get back to you shortly.";
    } else {
        echo "Sorry, something went wrong. Please try again later.";
    }
}
?>
