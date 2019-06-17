<?php
$status = '';
if(isset($_POST['submit_forgot'])) {
  $receive_user = User::getbyusername($_POST['email']);

  if(! is_null($receive_user)) {
    $link = ROOT_URL.'/confirmreset.php?token='.$receive_user->password.'&user_id=' . $receive_user->user_id;
    $title = 'เรียนผู้ใช้งาน '.$receive_user->name.' '.$receive_user->surname;
    $description = 'ท่านสามารถตั้งรหัสผ่านใหม่โดยเข้าไปที่ <br>';
    $description .= '<a href="'.$link.'" target="_blank">'.$link.'</a>';
    
    $data = array(
      'title' => $title,
      'description' => $description,
      'site_url' => ROOT_URL
    );
  
    $send_message = System::compile_email('template/email.html', $data);
  
    $send_to = $receive_user->username;
    $send_title = 'Panta - การตั้งค่ารหัสผ่านใหม่';
    
    $res = System::sendmail($send_to, $send_title, $send_message);
    
    System::session('submitresult', 'success');
  } else {
    System::session('submitresult', 'error');
  }
  System::redirect();
}
?>