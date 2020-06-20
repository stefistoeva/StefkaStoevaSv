<?php
ini_set("include_path", '/home/demcdads/php:' . ini_get("include_path") );

if(isset($_POST['email'])) {
  ini_set("include_path", '/home/demcdads/php:' . ini_get("include_path") );

  require_once "Mail.php";

  $host = "mail.bulmat-bg.com";
  $username = "contact@bulmat-bg.com";
  $password = "namekadiiski";
  $port = "587";

  $to = "stefitstoeva@gmail.com";
  $email_from = $_POST['email'] ?? 'noname'; //?$email = $_POST['email'];
  $email_subject = $_POST['subject'] ?? 'StefiCV';
  $email_body = isset($_POST['message']) ? htmlspecialchars($_POST['message']) : 'no message';
//   $email_body = wordwrap($email_body,70);
  $email_address = "stefitstoeva@gmail.com";


  //validate email
  // if(!filter_var($email_from, FILTER_VALIDATE_EMAIL)) {}


  $headers = array('From' => $email_from, 'To' => $to, 'Subject' => $email_subject, 'Reply-To' => $email_address);
  $smtp = Mail::factory('smtp', array('host' => $host, 'port' => $port, 'auth' => true, 'socket_options' => array('ssl' => array('verify_peer_name' => false, 'allow_self_signed' => true)), 'username' => $username, 'password' => $password));
  $mail = $smtp->send($to, $headers, $email_body);
}

header('Location: /?send=1');


// <?php
// $email = $_POST['email'];
// $company = $_POST['company'];
// // $subject = $_POST['subject'];
// // $message = $_POST['message']; 

//     // mail($to,$subject,$message,$headers)
//     if(mail($myEmail, $subject, $message, $headers)){
//         echo "<script>
//                 alert('Mail has been sent Successfully.');
//             </script>";
//         header('Location: /');
//     } else{
//         echo "<script>
//                 alert('EMAIL FAILED');
//             </script>";
//     }
// }
// ?>