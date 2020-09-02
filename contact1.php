<?php
$myEmail = "stefitstoeva@gmail.com"; //contact@stefistoeva.com
$email = $_POST['email'];
$company = $_POST['company'];
$subject = $_POST['subject'];
$message = $_POST['message']; 

if(isset($_POST['submit']) && $email && $company && $subject && $message) {
    $headers = "From:" . $email;
    // $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    // $headers .= 'From: Admin <stefitstoeva@gmail.com>' . "\r\n";

    mail($myEmail, $subject, $message, $headers);

    // Please specify your Mail Server - Example: mail.example.com.
    ini_set("SMTP","mail.example.com");

    // Please specify an SMTP Number 25 and 8889 are valid SMTP Ports.
    ini_set("smtp_port","25");

    // Please specify the return address to use
    ini_set('sendmail_from', $myEmail);

    // mail($to,$subject,$message,$headers)
    if(mail($myEmail, $subject, $message, $headers)){
        echo "<script>
                alert('Mail has been sent Successfully.');
            </script>";
        header('Location: /');
    } else{
        echo "<script>
                alert('EMAIL FAILED');
            </script>";
    }
}
?>