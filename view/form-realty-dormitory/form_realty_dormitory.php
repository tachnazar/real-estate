<div id="index-page" class="container">

  <?php include_once 'view/header-form/header-form.php'; ?>
  <div class="row mt-3">
    <div class="col-12">
      <h5 class="text-info font-weight-bold">ข้อมูลทั่วไป</h5>
      <hr class="bg-dark-50">
    </div>
    <?php include_once 'view/form-realty-dormitory/content/general_info.php'; ?>
  </div>

  <div class="row mt-3">
    <div class="col-12">
      <h5 class="text-info font-weight-bold">แบบห้องพัก</h5>
      <hr class="bg-dark-50">
    </div>
    <?php include_once 'view/form-realty-dormitory/content/type_room.php'; ?>
  </div>

  <div class="row mt-3">
    <div class="col-12">
      <h5 class="text-info font-weight-bold">ค่าใช้จ่าย</h5>
      <hr class="bg-dark-50">
    </div>
    <?php include_once 'view/form-realty-dormitory/content/expen.php'; ?>
  </div>

  <div class="row mt-3">
    <div class="col-12">
      <h5 class="text-info font-weight-bold">ข้อกำหนดการเช่า</h5>
      <hr class="bg-dark-50">
    </div>
    <?php include_once 'view/form-realty-dormitory/content/rental_rule.php'; ?>
  </div>

  <div class="row mt-3">
    <div class="col-12">
      <h5 class="text-info font-weight-bold">สิ่งอำนวยความสะดวก</h5>
      <hr class="bg-dark-50">
    </div>
    <?php include_once 'view/form-realty-dormitory/content/comfortable.php'; ?>
  </div>

  <div class="row mt-3">
    <div class="col-12">
      <h5 class="text-info font-weight-bold">โปรโมชั่น</h5>
      <hr class="bg-dark-50">
    </div>
    <?php include_once 'view/form-realty-dormitory/content/promotion.php'; ?>
  </div>

  <div class="row mt-3">
    <div class="col-12">
      <h5 class="text-info font-weight-bold">รูปภาพ</h5>
      <hr class="bg-dark-50">
    </div>
    <?php include_once 'view/form-realty-dormitory/content/img_upload.php'; ?>
  </div>

  <div class="row mt-3">
    <div class="col-12">
      <h5 class="text-info font-weight-bold"></h5>
      <hr>
      <h5 class="text-info font-weight-bold">ที่อยู่</h5>
      <hr class="bg-dark-50">
    </div>
    <?php include_once 'view/form-realty-dormitory/content/addr.php'; ?>
  </div>

  <div class="row mt-3">
    <div class="col-12">
      <h5 class="text-info font-weight-bold">ข้อมูลติดต่อ</h5>
      <hr class="bg-dark-50">
    </div>
    <?php include_once 'view/form-realty-dormitory/content/contact_info.php'; ?>
  </div>

  <div class="row">
    <div class="col-12 mt-3 mb-5 align-center">
      <button class="btn btn-success px-3 radius-custom">ส่งการแก้ไข</button>
    </div>
  </div>

</div>

<div id="rule-template" class="z-template">
  <div class="col-lg-4 col-md-6 mt-md-1  rule-parents">
    <span class="condition-contain"><i class="fa fa-circle smaller-50 align-middle"></i>
      <input type="text" name="" id="" class="form-check-inline form-control form-control-sm w-75"><a class="fa fa-trash text-danger smaller-70 align-middle delete-condition btn-remove-rule"></a></span>
  </div>
</div>

<script>
  $(document).ready(function () {
    $(document).on('click', '.btn-add-rule', function (e) {
      var $this = $(this);
      $condition_container = $this.parents('.rule-container');
      var html = System.compileTemplate('rule-template');
      $condition_container.prepend(html);
    });

    $(document).on('click', '.btn-remove-rule', function (e) {
      var $this = $(this);
      var $container = $this.parents('.rule-parents');
      $container.remove();
    });
  });

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