<?php
    $name = $_POST['name']; 
    $visitor_email = $_POST['email']; 
    $contact = $_POST['contact'];

    $email_from = 'Healthcare.com';

    $email_subject = "New Form Submission";

    $email_body = "User Name: $name.\n".
                   "User Email: $visitor_email.\n".
                      "User Contact: $contact.\n";


    $to = "adityaacharya1000@gmail.com";

    $headers = "From: $email_from \r\n";

    $headers .= "Reply-To: $visitor_email \r\n";

    mail($to, $email_subject, $email_body, $headers);
    header("Location: index.html");

?>