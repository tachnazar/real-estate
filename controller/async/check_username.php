<?php
require_once '../../import/defImport.php';

System::repHeader();
System::login_require(null);

if(isset($_POST['username'])) {
  $status = User::check_username($_POST['username']);
  System::repSuccess($status);
} else {
  System::repError('Missing Parameter: [username]');
}
?>