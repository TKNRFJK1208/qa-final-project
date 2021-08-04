<?php
  session_start();
  $mode = 'input';
  $errmessage = array();
  if( isset($_POST['back']) && $_POST['back'] ){
    // Empty
  } else if( isset($_POST['confirm']) && $_POST['confirm'] ){
      // Confirm Screen
    if( !$_POST['fullname'] ) {
        $errmessage[] = "Type your fullname.";
    } else if( mb_strlen($_POST['fullname']) > 100 ){
        $errmessage[] = "Please tyoe your name within 100 characters.";
    }
      $_SESSION['fullname'] = htmlspecialchars($_POST['fullname'], ENT_QUOTES);

      if( !$_POST['email'] ) {
          $errmessage[] = "Type your email address.";
      } else if( mb_strlen($_POST['email']) > 200 ){
          $errmessage[] = "Please tyoe your email within 200 characters.";
    } else if( !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) ){
        $errmessage[] = "Invalid email address.";
      }
      $_SESSION['email'] = htmlspecialchars($_POST['email'], ENT_QUOTES);

      if( !$_POST['message'] ){
          $errmessage[] = "Type your message.";
      } else if( mb_strlen($_POST['message']) > 500 ){
          $errmessage[] = "Please tyoe your message within 500 characters.";
      }
      $_SESSION['message'] = htmlspecialchars($_POST['message'], ENT_QUOTES);

      if( $errmessage ){
        $mode = 'input';
    } else {
        $mode = 'confirm';
    }
  } else if( isset($_POST['send']) && $_POST['send'] ){
    $message  = "Accepted your message. \r\n"
              . "Name: " . $_SESSION['fullname'] . "\r\n"
              . "Email: " . $_SESSION['email'] . "\r\n"
              . "Message:\r\n"
              . preg_replace("/\r\n|\r|\n/", "\r\n", $_SESSION['message']);
      mail($_SESSION['email'],'Thank you for your message.',$message);
    mail('tfujiki2@my.bcit.ca','Thank you for your message.',$message);
    $_SESSION = array();
    $mode = 'send';
  } else {
    $_SESSION['fullname'] = "";
    $_SESSION['email']    = "";
    $_SESSION['message']  = "";
  }
?>