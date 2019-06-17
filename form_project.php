<?php
  require_once 'import/defImport.php';
?>
  <!DOCTYPE html>
  <html lang="en">

  <head>
    <title><?php echo System::SITE_TITLE; ?> : ลงประกาศโครงการ</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <?php
    require_once 'import/defaultMeta.php';
    require_once 'import/loadCSS.php';
    ?>
  </head>

  <body>
    <?php
    define('PAGE_NAME', 'project');
    require_once 'layout/header.php';
    include_once 'view/form_project/form_project.php';
    require_once 'layout/footer.php';
    require_once 'import/loadJS.php';
    ?>
  </body>

  </html>