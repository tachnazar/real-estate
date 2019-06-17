<?php
  require_once 'import/defImport.php';
  require_once 'controller/login.php';
?>
  <!DOCTYPE html>
  <html lang="en">

  <head>
    <title><?php echo System::SITE_TITLE; ?> : เข้าสู่ระบบ</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <?php
    require_once 'import/defaultMeta.php';
    require_once 'import/loadCSS.php';
    ?>
  </head>

  <body class="bg-login">
    <?php
    define('PAGE_NAME', 'login');
    include_once 'view/login.php';
    require_once 'import/loadJS.php';
    ?>
  </body>

  </html>