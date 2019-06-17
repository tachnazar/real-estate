<div class="bg-white">
  <div id="index-page" class="container">
    <?php 
      include_once 'view/header-form/header-form.php';
    ?>
    <div class="row mt-3">
      <div class="col-12">
        <h5 class="text-info bold">ข้อมูลทั่วไป</h5>
        <hr class="bg-dark-50">
      </div>
      <?php 
      include_once 'view/form-entrepreneur/content/general_info.php';
       ?>
    </div>

    <div class="row mt-3">
      <div class="col-md-12">
        <h5 class="text-info"><b>ผลงานที่ผ่านมา</b><span class="smaller-80 text-muted"> (เพิ่มได้มากสุด 12
            ผลงาน)</span>
        </h5>
        <hr class="bg-dark-50">
      </div>
      <?php 
        include_once 'view/form-entrepreneur/content/portfolio.php';
       ?>
    </div>

    <div class="row mt-3">
      <div class="col-md-12">
        <h5 class="text-info bold">โปรโมชั่น</h5>
        <hr class="bg-dark-50">
      </div>
      <?php 
        include_once 'view/form-entrepreneur/content/promotion.php';
       ?>
    </div>

    <div class="row mt-3">
      <div class="col-md-12">
        <h5 class="text-info bold">รูปภาพ</h5>
        <hr class="bg-dark-50">
      </div>
      <?php 
        include_once 'view/form-entrepreneur/content/img_upload.php';
       ?>
    </div>

    <div class="row mt-3">
      <div class="col-md-12">
        <h5 class="text-info bold">ที่ตั้งกิจการ</h5>
        <hr class="bg-dark-50">
      </div>
      <?php 
        include_once 'view/form-entrepreneur/content/location_businese.php';
       ?>
    </div>

    <div class="row mt-3">
      <div class="col-md-12">
        <h5 class="text-info bold">พื้นที่บริการ</h5>
        <hr class="bg-dark-50">
      </div>
      <?php 
        include_once 'view/form-entrepreneur/content/service_aria.php';
       ?>
    </div>

    <div class="row mt-3">
      <div class="col-md-12">
        <h5 class="text-info bold">ข้อมูลติดต่อ</h5>
        <hr class="bg-dark-50">
      </div>
      <?php 
        include_once 'view/form-entrepreneur/content/contact_info.php';
       ?>
    </div>

    <div class="row">
      <div class="col-md-12 mt-3 mb-5 align-center">
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