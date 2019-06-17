<?php
  if(isset($_POST['form_token'])) {
    if(! System::check_token($_POST['form_token'])) {
      unset($_POST);
    }
  }
?>