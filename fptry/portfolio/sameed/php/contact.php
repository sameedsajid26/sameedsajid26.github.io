<?php
    $name = $_POST['name'];
    $visitor_email = $_POST['email'];
    $message = $_POST['message'];

    $email_from = 'sameedsajid26@gmail.com';

    $email_subject = "New form submission";

    $email_body = "User Name: $name.\n".
                    "User Email: $visitor_email.\n".
                        "User Message: $message.\n";

    $to = "sameed.sajid@nixorcollege.edu.pk";

    $headers = "From: $email_from \r\n";

    $headers = "Reply to: $visitor_email \r\n";

    mail($to,$email_subject,$email_body,$headers);

    header("Location: index.html");

?>
