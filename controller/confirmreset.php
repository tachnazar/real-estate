<?php
  if(isset($_GET['token']) && isset($_GET['user_id'])) {
    $user = User::getbyid($_GET['user_id']);
    if(! is_null($user)) {
      if($user->password == $_GET['token']) {
        // do nothing
      } else {
        System::save_error('Token Expired');
        System::redirect('index.php');
      }
    } else {
      System::redirect('index.php');
    }
  } else { 
    System::redirect('index.php');
  }

  if(isset($_POST['submit_reset'])) {
    $api_result = User::reset_password($_POST['user_id'], $_POST['password'], $_POST['token']);

    if($api_result->response_status) {
      System::save_success();
      System::redirect('login.php');
    } else {
      System::save_error($result->response_message);
      System::redirect();
    }
  }
?>