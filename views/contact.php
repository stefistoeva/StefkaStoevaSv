<?php
$myEmail = "stefitstoeva@gmail.com";
$from = $_POST['email'];
$firstName = $_POST['first_name'];
$lastName = $_POST['last_name'];
$subject = $_POST['subject'];
$message = $_POST['message']; 

if(isset($_POST['submit']) && $from && $firstName && $lastName && $subject && $message) {
    $headers = "From:" . $from;
    // Always set content-type when sending HTML email
    // $headers = "MIME-Version: 1.0" . "\r\n";
    // $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    // // More headers
    // $headers .= 'From: Admin <admin@websapex.com>' . "\r\n"; // Give an email id on which you want get a reply. User will get a mail from this email id
    // $headers .= 'Cc: info@websapex.com' . "\r\n"; // If you want add cc
    // $headers .= 'Bcc: boss@websapex.com' . "\r\n"; // If you want add Bcc

    mail($myEmail, $subject, $message, $headers);

    // Please specify your Mail Server - Example: mail.example.com.
    ini_set("SMTP","mail.example.com");

    // Please specify an SMTP Number 25 and 8889 are valid SMTP Ports.
    ini_set("smtp_port","25");

    // Please specify the return address to use
    ini_set('sendmail_from', 'example@YourDomain.com');

    // mail($to,$subject,$message,$headers)
    if(mail($to,$subject,$message,$headers)){
        echo "<script>
                alert('Mail has been sent Successfully.');
            </script>";
    } else{
        echo "<script>
                alert('EMAIL FAILED');
            </script>";
    }
}
?>