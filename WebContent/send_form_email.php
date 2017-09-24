<?php
if(isset($_POST['submit'])) {

    // EDIT THE 2 LINES BELOW AS REQUIRED
    $email_to = "eugeniachen123@gmail.com";
    $email_subject = "Movie Pool message";


    $name = $_POST['name']; // required
    $email = $_POST['email']; // required
    $message = $_POST['message']; // required

    $email_message = "Form details below.\n\n";


    function clean_string($string) {
      $bad = array("content-type","bcc:","to:","cc:","href");
      return str_replace($bad,"",$string);
    }



    $email_message .= "Name: ".clean_string($name)."\n";
    $email_message .= "Email: ".clean_string($email)."\n";
    $email_message .= "Message: ".clean_string($message)."\n";

// create email headers
$headers = 'From: '.$email."\r\n".
'Reply-To: '.$email."\r\n" .
'X-Mailer: PHP/' . phpversion();
mail($email_to, $email_subject, $email_message, $headers);
?>
