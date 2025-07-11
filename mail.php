<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to = "bhaveshpawar1973@gmail.com";  
    $subject = "New Contact Form Submission";

    $name = htmlspecialchars($_POST["name"]);
    $email = htmlspecialchars($_POST["email"]);
    $message = htmlspecialchars($_POST["message"]);

    $body = "You have received a new message from your website contact form:\n\n";
    $body .= "Name: $name\n";
    $body .= "Email: $email\n\n";
    $body .= "Message:\n$message\n";

    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";

    if (mail($to, $subject, $body, $headers)) {
        echo "<script>
                alert('Message sent successfully!');
                window.location.href='index.html'; 
              </script>";
    } else {
        echo "<script>
                alert('Message failed to send.');
                window.history.back();
              </script>";
    }
} else {
    echo "Invalid Request.";
}
?>
