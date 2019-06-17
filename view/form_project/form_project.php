<div id="index-page" class="container">

  <?php include_once 'view/header-form/header-form.php'; ?>

  <div class="row mt-3">
    <div class="col-12">
      <h5 class="text-info font-weight-bold">ข้อมูลทั่วไป</h5>
      <hr class="bg-dark-50">
    </div>
    <?php include_once 'view/form_project/content/general-info.php'; ?>
  </div>

  <div class="row mt-3">
    <div class="col-12">
      <div class="row">
        <div class="col-6">
          <h5 class="text-info font-weight-bold">แบบบ้าน</h5>
        </div>
      </div>
      <hr class="bg-dark-50">
    </div>
    <?php include_once 'view/form_project/content/home-design.php'; ?>
    <div class="col-12 mt-3 design-home-container">
      <a class="btn btn-outline-secondary dash btn-block btn-add-design mt-3">+ เพิ่มแบบบ้าน</a>
    </div>
  </div>

  <div id="home-extend" class="z-template">
    <div class="row mt-3 design-home-parents">
      <div class="col-12">
        <div class="row">
          <div class="col-6">
            <h5 class="text-info font-weight-bold">แบบบ้าน</h5>
          </div>
          <div class="col-6 text-right">
            <a class="btn text-danger btn-remove-design-home">ลบแบบบ้าน</a>
          </div>
        </div>
        <hr class="bg-dark-50">
      </div>
      <div class="col-md-6">
        <label for="name_room" class="bold">ชื่อแบบห้อง <span class="text-danger">*</span></label>
        <input type="text" name="name_room" id="name_room" class="form-control" placeholder="ชื่อห้อง">
      </div>
      <div class="col-md-6">
        <label class="bold">เลือกประเภทอสังหา <span class="text-danger">*</span></label>
        <select name="realty_type" class="form-control custom-select">
          <option value="">คอนโด</option>
        </select>
      </div>
      <div class="col-md-6">
        <label for="room_price" class="bold">ราคา (บาท) <span class="text-danger">*</span></label>
        <input type="number" name="room_price" id="room_price" class="form-control" placeholder="กรุณาใส่เฉพาะตัวเลข">
      </div>
      <div class="col-md-6">
        <label class="bold">จำนวนห้องนอน <span class="text-danger">*</span></label>
        <div class="form-group row-expand justify-content-between radio-container">
          <label class="btn btn-select radius-custom value-select">
            <input type="radio" name="amount_bed_room" class="hidden radio-select" value="unknown" required>
            ไม่ระบุ
          </label>
          <label class="btn btn-select radius-custom value-select">
            <input type="radio" name="amount_bed_room" class="hidden radio-select" value="studio">
            สตูดิโอ
          </label>
          <label class="btn btn-select radius-custom-circle value-select">
            <input type="radio" name="amount_bed_room" class="hidden radio-select" value="one">
            1
          </label>
          <label class="btn btn-select radius-custom-circle value-select">
            <input type="radio" name="amount_bed_room" class="hidden radio-select" value="two">
            2
          </label>
          <label class="btn btn-select radius-custom-circle value-select">
            <input type="radio" name="amount_bed_room" class="hidden radio-select" value="three">
            3
          </label>
          <label class="btn btn-select radius-custom value-select">
            <input type="radio" name="amount_bed_room" class="hidden radio-select" value="more_than_three">
            มากกว่า 3
          </label>
        </div>
      </div>
      <div class="col-md-6">
        <label class="bold">จำนวนห้องน้ำ <span class="text-danger">*</span></label>
        <div class="form-group row-expand justify-content-between radio-container">
          <label class="btn btn-select radius-custom value-select">
            <input type="radio" name="amount_bathroom" class="hidden radio-select" value="unknown" required>
            ไม่ระบุ
          </label>
          <label class="btn btn-select radius-custom-circle value-select">
            <input type="radio" name="amount_bathroom" class="hidden radio-select" value="one">
            1
          </label>
          <label class="btn btn-select radius-custom-circle value-select">
            <input type="radio" name="amount_bathroom" class="hidden radio-select" value="two">
            2
          </label>
          <label class="btn btn-select radius-custom-circle value-select">
            <input type="radio" name="amount_bathroom" class="hidden radio-select" value="three">
            3
          </label>
          <label class="btn btn-select radius-custom-circle value-select">
            <input type="radio" name="amount_bathroom" class="hidden radio-select" value="four">
            4
          </label>
          <label class="btn btn-select radius-custom value-select">
            <input type="radio" name="amount_bathroom" class="hidden radio-select" value="more_than_four">
            มากกว่า 4
          </label>
        </div>
      </div>
      <div class="col-md-6">
        <label class="bold">%ที่จอดรถ<span class="text-danger">*</span></label>
        <div class="form-group row-expand justify-content-between radio-container">
          <label class="btn btn-select radius-custom value-select">
            <input type="radio" name="amount_parking" class="hidden radio-select" value="unknown" required>
            ไม่ระบุ
          </label>
          <label class="btn btn-select radius-custom-circle value-select">
            <input type="radio" name="amount_parking" class="hidden radio-select" value="one">
            1
          </label>
          <label class="btn btn-select radius-custom-circle value-select">
            <input type="radio" name="amount_parking" class="hidden radio-select" value="two">
            2
          </label>
          <label class="btn btn-select radius-custom-circle value-select">
            <input type="radio" name="amount_parking" class="hidden radio-select" value="three">
            3
          </label>
          <label class="btn btn-select radius-custom-circle value-select">
            <input type="radio" name="amount_parking" class="hidden radio-select" value="four">
            4
          </label>
          <label class="btn btn-select radius-custom value-select">
            <input type="radio" name="amount_parking" class="hidden radio-select" value="more_than_four">
            มากกว่า 4
          </label>
        </div>
      </div>
      <div class="col-md-6">
        <label class="bold">ห้องแม่บ้าน <span class="text-danger">*</span></label>
        <div class="form-group row-expand justify-content-between radio-container">
          <label class="btn btn-select radius-custom value-select">
            <input type="radio" name="amount_housemade" class="hidden radio-select" value="unknown" required>
            ไม่ระบุ
          </label>
          <label class="btn btn-select radius-custom-circle value-select">
            <input type="radio" name="amount_housemade" class="hidden radio-select" value="one">
            1
          </label>
          <label class="btn btn-select radius-custom-circle value-select">
            <input type="radio" name="amount_housemade" class="hidden radio-select" value="two">
            2
          </label>
          <label class="btn btn-select radius-custom-circle value-select">
            <input type="radio" name="amount_housemade" class="hidden radio-select" value="three">
            3
          </label>
          <label class="btn btn-select radius-custom-circle value-select">
            <input type="radio" name="amount_housemade" class="hidden radio-select" value="four">
            4
          </label>
          <label class="btn btn-select radius-custom value-select">
            <input type="radio" name="amount_housemade" class="hidden radio-select" value="more_than_four">
            มากกว่า 4
          </label>
        </div>
      </div>
      <div class="col-md-6">
        <label class="bold">จำนวนชั้นของบ้าน <span class="text-danger">*</span></label>
        <div class="form-group row-expand justify-content-between radio-container">
          <label class="btn btn-select radius-custom value-select">
            <input type="radio" name="amount_home_floor" class="hidden radio-select" value="unknown" required>
            ไม่ระบุ
          </label>
          <label class="btn btn-select radius-custom-circle value-select">
            <input type="radio" name="amount_home_floor" class="hidden radio-select" value="one">
            1
          </label>
          <label class="btn btn-select radius-custom-circle value-select">
            <input type="radio" name="amount_home_floor" class="hidden radio-select" value="two">
            2
          </label>
          <label class="btn btn-select radius-custom-circle value-select">
            <input type="radio" name="amount_home_floor" class="hidden radio-select" value="three">
            3
          </label>
          <label class="btn btn-select radius-custom-circle value-select">
            <input type="radio" name="amount_home_floor" class="hidden radio-select" value="four">
            4
          </label>
          <label class="btn btn-select radius-custom value-select">
            <input type="radio" name="amount_home_floor" class="hidden radio-select" value="more_than_four">
            มากกว่า 4
          </label>
        </div>
      </div>
      <div class="col-md-6">
        <label for="area_size" class="bold">ขนาดที่ดิน (ตร.วา.) <span class="text-danger">*</span></label>
        <input type="text" name="area_size" id="area_size" class="form-control" placeholder="กรุณาใส่เฉพาะตัวเลข">
      </div>
      <div class="col-md-6">
        <label for="area_to_use" class="bold">พื้นที่ใช้สอย (ตร.ม.) <span class="text-danger">*</span></label>
        <input type="text" name="area_to_use" id="area_to_use" class="form-control" placeholder="กรุณาใส่เฉพาะตัวเลข">
      </div>
      <div class="col-md-6">
        <label for="featured" class="bold">จุดเด่น</label>
        <textarea name="featured" id="featured" class="form-control" style="resize:none;" rows="5"></textarea>
      </div>
      <div class="col-12">
        <h5 class="bold">รูปในแต่ละห้อง</h5>
      </div>
      <div class="col-md-4">
        <h6 class="font-weight-bold">รูปภาพโปรไฟล์<span class="text-danger"> *</span></h6>
        <div class="image-upload">
          <i class="fa fa-times close btn-remove-image d-none" aria-hidden="true"></i>
          <div class="img-4by3 holder btn-change-image highlight-hover">
            <img src="" class="img-responsive image-preview">
            <input type="hidden" name="image" class="image-base64">
          </div>
          <input type="file" class="form-control img-upload-file" accept="image/*">
        </div>
      </div>
      <div class="col-md-8">
        <h6 class="font-weight-bold">รูปภาพประกอบ</h6>
        <div class="row">
          <div class="col-12">
            <div class="row">
              <div class="col-custom my-2">
                <div class="image-upload">
                  <i class="fa fa-times close btn-remove-image d-none" aria-hidden="true"></i>
                  <div class="img-4by3 holder btn-change-image highlight-hover">
                    <img src="" class="img-responsive image-preview">
                    <input type="hidden" name="image" class="image-base64">
                  </div>
                  <input type="file" class="form-control img-upload-file putfile" accept="image/*">
                </div>
                <input type="text" class="form-control form-control-sm my-1" placeholder="รายละเอียดรูปภาพ">
              </div>
              <div class="col-custom my-2">
                <div class="image-upload">
                  <i class="fa fa-times close btn-remove-image d-none" aria-hidden="true"></i>
                  <div class="img-4by3 holder btn-change-image highlight-hover">
                    <img src="" class="img-responsive image-preview">
                    <input type="hidden" name="image" class="image-base64">
                  </div>
                  <input type="file" class="form-control img-upload-file putfile" accept="image/*">
                </div>
                <input type="text" class="form-control form-control-sm my-1" placeholder="รายละเอียดรูปภาพ">
              </div>
              <div class="col-custom my-2">
                <div class="image-upload">
                  <i class="fa fa-times close btn-remove-image d-none" aria-hidden="true"></i>
                  <div class="img-4by3 holder btn-change-image highlight-hover">
                    <img src="" class="img-responsive image-preview">
                    <input type="hidden" name="image" class="image-base64">
                  </div>
                  <input type="file" class="form-control img-upload-file putfile" accept="image/*">
                </div>
                <input type="text" class="form-control form-control-sm my-1" placeholder="รายละเอียดรูปภาพ">
              </div>
              <div class="col-custom my-2">
                <div class="image-upload">
                  <i class="fa fa-times close btn-remove-image d-none" aria-hidden="true"></i>
                  <div class="img-4by3 holder btn-change-image highlight-hover">
                    <img src="" class="img-responsive image-preview">
                    <input type="hidden" name="image" class="image-base64">
                  </div>
                  <input type="file" class="form-control img-upload-file putfile" accept="image/*">
                </div>
                <input type="text" class="form-control form-control-sm my-1" placeholder="รายละเอียดรูปภาพ">
              </div>
              <div class="col-custom my-2">
                <div class="image-upload">
                  <i class="fa fa-times close btn-remove-image d-none" aria-hidden="true"></i>
                  <div class="img-4by3 holder btn-change-image highlight-hover">
                    <img src="" class="img-responsive image-preview">
                    <input type="hidden" name="image" class="image-base64">
                  </div>
                  <input type="file" class="form-control img-upload-file putfile" accept="image/*">
                </div>
                <input type="text" class="form-control form-control-sm my-1" placeholder="รายละเอียดรูปภาพ">
              </div>
              <div class="col-custom my-2">
                <div class="image-upload">
                  <i class="fa fa-times close btn-remove-image d-none" aria-hidden="true"></i>
                  <div class="img-4by3 holder btn-change-image highlight-hover">
                    <img src="" class="img-responsive image-preview">
                    <input type="hidden" name="image" class="image-base64">
                  </div>
                  <input type="file" class="form-control img-upload-file putfile" accept="image/*">
                </div>
                <input type="text" class="form-control form-control-sm my-1" placeholder="รายละเอียดรูปภาพ">
              </div>
              <div class="col-custom my-2">
                <div class="image-upload">
                  <i class="fa fa-times close btn-remove-image d-none" aria-hidden="true"></i>
                  <div class="img-4by3 holder btn-change-image highlight-hover">
                    <img src="" class="img-responsive image-preview">
                    <input type="hidden" name="image" class="image-base64">
                  </div>
                  <input type="file" class="form-control img-upload-file putfile" accept="image/*">
                </div>
                <input type="text" class="form-control form-control-sm my-1" placeholder="รายละเอียดรูปภาพ">
              </div>
              <div class="col-custom my-2">
                <div class="image-upload">
                  <i class="fa fa-times close btn-remove-image d-none" aria-hidden="true"></i>
                  <div class="img-4by3 holder btn-change-image highlight-hover">
                    <img src="" class="img-responsive image-preview">
                    <input type="hidden" name="image" class="image-base64">
                  </div>
                  <input type="file" class="form-control img-upload-file putfile" accept="image/*">
                </div>
                <input type="text" class="form-control form-control-sm my-1" placeholder="รายละเอียดรูปภาพ">
              </div>
              <div class="col-custom my-2">
                <div class="image-upload">
                  <i class="fa fa-times close btn-remove-image d-none" aria-hidden="true"></i>
                  <div class="img-4by3 holder btn-change-image highlight-hover">
                    <img src="" class="img-responsive image-preview">
                    <input type="hidden" name="image" class="image-base64">
                  </div>
                  <input type="file" class="form-control img-upload-file putfile" accept="image/*">
                </div>
                <input type="text" class="form-control form-control-sm my-1" placeholder="รายละเอียดรูปภาพ">
              </div>
              <div class="col-custom my-2">
                <div class="image-upload">
                  <i class="fa fa-times close btn-remove-image d-none" aria-hidden="true"></i>
                  <div class="img-4by3 holder btn-change-image highlight-hover">
                    <img src="" class="img-responsive image-preview">
                    <input type="hidden" name="image" class="image-base64">
                  </div>
                  <input type="file" class="form-control img-upload-file putfile" accept="image/*">
                </div>
                <input type="text" class="form-control form-control-sm my-1" placeholder="รายละเอียดรูปภาพ">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="row mt-3">
    <div class="col-12">
      <h5 class="text-info font-weight-bold">สิ่งอำนวยความสะดวก</h5>
      <hr class="bg-dark-50">
    </div>
    <?php include_once 'view/form_project/content/facilities.php'; ?>
  </div>

  <div class="row mt-3">
    <div class="col-12 mt-3">
      <h5 class="text-info bold">โปรโมชั่น</h5>
      <hr class="bg-dark-50">
    </div>
    <?php include_once 'view/form_project/content/promotion.php'; ?>
  </div>

  <div class="row mt-3">
    <div class="col-12">
      <h5 class="text-info bold">รายละเอียดเพิ่มเติม <span class="text-danger smaller-80 font-weight-normal">(ห้ามกรอก
          ชื่อ เบอร์โทร อีเมล ข้อมูลติดต่อในช่องข้างล่างนี้ กรุณาระบุในพื้นที่ที่จัดให้เท่านั้น)</span>
      </h5>
      <hr class="bg-dark-50">
    </div>
    <div class="col-md-6">
      <label class="bold" for="promotion_nayoo_th">รายละเอียดเพิ่มเติม (ภาษาไทย) <span class="text-danger"> *</span></label>
      <textarea class="form-control" style="resize:none" name="promotion_nayoo_th" id="promotion_nayoo_th" rows="5"></textarea>
    </div>
    <div class="col-md-6">
      <label class="bold" for="promotion_nayoo_en">รายละเอียดเพิ่มเติม (ภาษาอังกฤษ)</label>
      <textarea class="form-control" style="resize:none" name="promotion_nayoo_en" id="promotion_nayoo_en" rows="5"></textarea>
    </div>
  </div>

  <div class="row mt-3">
    <div class="col-12 mt-3">
      <h5 class="text-info font-weight-bold ">วีดีโอและรูปภาพ</h5>
      <hr class="bg-dark-50">
    </div>
    <?php include_once 'view/form_project/content/img-video.php'; ?>
  </div>

  <div class="row mt-3">
    <div class="col-12">
      <h5 class="text-info font-weight-bold "></h5>
      <hr>
      <h5 class="text-info font-weight-bold ">ที่อยู่</h5>
      <hr class="bg-dark-50">

    </div>
    <?php include_once 'view/form_project/content/address.php'; ?>
  </div>

  <div class="row">
    <div class="col-12 mt-3">
      <h5 class="text-info font-weight-bold ">ข้อมูลติดต่อ</h5>
      <hr class="bg-dark-50">
    </div>
    <?php include_once 'view/form_project/content/contact.php'; ?>
  </div>
</div>

<script>
  $(document).ready(function () {

    $(document).on('click', '.btn-add-design', function (e) {
      var $this = $(this);
      $design_home_container = $('.design-home-container');
      var html = System.compileTemplate('home-extend');
      $design_home_container.prepend(html);
    });

    $(document).on('click', '.btn-remove-design-home', function (e) {
      var $this = $(this);
      var $container = $this.parents('.design-home-parents');
      $container.remove();
    });

    $('input[name="business_type"]').change(function () {
      var value = $(this).val();
      if (value == 'home') {
        var html = System.compileTemplate('home-template');
        var html_design = System.compileTemplate('home-design');
        $('#business_type_html').html(html);
        $('#design_template_html').html(html_design);
      } else if (value == 'townhome') {
        var html = System.compileTemplate('home-template');
        var html_design = System.compileTemplate('home-design');
        $('#business_type_html').html(html);
        $('#design_template_html').html(html_design);
      } else if (value == 'condo') {
        var html = System.compileTemplate('condo-template');
        var html_design = System.compileTemplate('condo-design');
        $('#business_type_html').html(html);
        $('#design_template_html').html(html_design);
      }
    });
    $(document).on('change', '.radio-select', function () {
      var $this = $(this);
      var $scope = $this.parents('.radio-container');
      var $button = $this.parents('.value-select');
      var value = $this.val();
      $scope.find('.value-select').removeClass('active');
      $button.addClass('active');
    });
    $('input[name="business_type"]:checked').trigger('change');

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
  });
</script>