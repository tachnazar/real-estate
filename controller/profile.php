<?php
System::login_require('login.php');
$user = System::get_current_user();

$employee_id = $user->user_id;
$employee = Employee::getbyid($employee_id);
if(is_null($employee)) {
  System::redirect('employee.php');
}

if(isset($_POST['edit_profile'])) {
  unset($_POST['edit_profile']);
  if($_POST['image'] == '') {
    unset($_POST['image']);
  }
  $_POST['id'] = $employee_id;
  $_POST['position'] = $employee->position;
  $_POST['division'] = $employee->division;
  $_POST['primary'] = $employee->primary;
  $_POST['salary'] = $employee->salary;

  $result = Employee::edit($_POST);
  
  if($result->response_status) {
    System::save_success();
    System::redirect();
  } else {
    System::save_error($result->response_message);
    System::redirect();
  }
}
else if(isset($_POST['edit_password'])) {
  $result = User::reset_password($user->user_id, $_POST['password'], $user->password);
  
  if($result->response_status) {
    System::save_success();
    System::redirect();
  } else {
    System::save_error($result->response_message);
    System::redirect();
  }
}
?>