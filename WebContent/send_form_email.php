<?php
if(isset($_POST['submit'])) {

    // EDIT THE 2 LINES BELOW AS REQUIRED
    $email_to = "eugeniachen123@gmail.com";
    $email_subject = "Movie Pool message";


    echo $name = $_POST['name']; // required
    echo $email = $_POST['email']; // required
    echo $message = $_POST['message']; // required

    $email_message = "Form details below.\n\n";

    $email_message .= "Name: $name\nEmail: $email\n\n$message";

mail($email_to, $email_subject, $email_message);
?>
