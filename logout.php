<?php
  require_once 'import/defImport.php';
  if(User::is_login()) {
    User::logout();
  }
  System::redirect('login.php');
?>