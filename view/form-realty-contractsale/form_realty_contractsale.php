<div class="bg-white">
  <div id="index-page" class="container">

    <?php
    include_once 'view/header-form/header-form.php';
    include_once 'view/form-realty-contractsale/content/general-info.php';
    include_once 'view/form-realty-contractsale/content/expenes.php';
    include_once 'view/form-realty-contractsale/content/rental_rual.php';
    include_once 'view/form-realty-contractsale/content/comfortable.php';
    include_once 'view/form-realty-contractsale/content/promotion.php';
    include_once 'view/form-realty-contractsale/content/img-addr.php';
    include_once 'view/form-realty-contractsale/content/location_business.php';
    include_once 'view/form-realty-contractsale/content/contact-info.php';
    ?>

    <div class="row">
      <div class="col-md-12 mt-3 mb-5 align-center">
        <!-- ใช้ px-3 แทน pl-3 pr-3 (มีค่าเท่ากัน)-->
        <!-- x คือแกนแนวนอน ใช้แทนซ้ายขวาได้เลย เช่น px = padding-left และ padding-right -->
        <!-- y คือแกนแนวตั้ง ใช้แทนบนล่างได้เลย เช่น py = padding-top และ padding-bttom -->
        <!-- margin ก็เช่นเดียวกัน -->
        <button class="btn btn-success px-3 radius-custom">ส่งการแก้ไข</button>
      </div>
    </div>
  </div>
</div>

<script>
  $(document).on('touchstart click', '.image-upload .btn-change-image', function (e) {
    var $container = $(this).parents('.image-upload');
    var $file_select = $container.find('.img-upload-file');
    $file_select.trigger('click');
  });

  $(document).on('change', '.image-upload .img-upload-file', function (e) {
    var $container = $(this).parents('.image-upload');
    var $btn_remove = $container.find('.btn-remove-image');
    var $img = $container.find('.image-preview');
    var $btn_change_image = $container.find('.btn-change-image');
    var $imagebase64 = $container.find('input.image-base64');
    var status = System.readImage(this, function (file_event) {
      $img.attr('src', file_event.target.result);
      $imagebase64.val(file_event.target.result);
      $btn_remove.removeClass('d-none');
      $btn_change_image.addClass('has-image');
    });
    if (status != 'success') {
      $img.attr('src', '');
      $imagebase64.val('');
      $btn_remove.addClass('d-none');
      $btn_change_image.removeClass('has-image');
    }
  });

  $(document).on('touchstart click', '.image-upload .btn-remove-image', function (e) {
    var $container = $(this).parents('.image-upload');
    var $file_select = $container.find('.img-upload-file');
    $file_select.val('');
    $file_select.trigger('change');
  });
</script>