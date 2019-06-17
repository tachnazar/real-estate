<?php
require_once 'defImport.php';

if(isset($_POST['login_tester'])) {
  $api_result = System::callAPIOrigin(System::API_CODE['USER'], 'login', array(
    'username' => $_POST['username'],
    'password' => $_POST['password']
  ), false);

  if($api_result->response_status) {
    System::session('tester_debug', true);
    $user_data = $api_result->response_data[0];
    System::save_success('Hi!, '.$user_data->username);
  } else {
    System::save_error($api_result->response_message);
  }
  echo '<script>';
  echo 'window.location.reload();';
  echo '</script>';
}
else if(isset($_POST['logout_tester'])) {
  System::remove_session('tester_debug');
  System::save_success('Goodbye.');
  echo '<script>';
  echo 'window.location.reload();';
  echo '</script>';
}
?>