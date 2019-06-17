<?php
  if(User::is_login()) {
    System::redirect('index.php');
  }

  if(isset($_POST['submit_login'])) {
  $login_result = User::login($_POST['username'], $_POST['password']);

  if($login_result->response_status) {
    System::redirect('index.php');
  } else {
    System::notification($login_result->response_message, 'error');
  }
  System::redirect();
}
else if(isset($_POST['login_facebook'])) {
  if(trim($_POST['facebook_id']) != '') {
    $login_result = User::login_facebook($_POST['facebook_id']);

    if($login_result->response_status) {
      System::redirect('index.php');
    } else {
      System::notification($login_result->response_message, 'error');
    }
    System::redirect();
  }
}
?>