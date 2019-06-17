<div class="col-12">
  <div id="design_template_html" class="row"></div>
</div>

<div id="home-design" class="z-template">
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
        <input type="hidden" name="main_image" class="image-base64">
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
                <input type="hidden" name="more_image_1" class="image-base64">
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
                <input type="hidden" name="more_image_2" class="image-base64">
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
                <input type="hidden" name="more_image_3" class="image-base64">
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
                <input type="hidden" name="more_image_4" class="image-base64">
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
                <input type="hidden" name="more_image_5" class="image-base64">
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
                <input type="hidden" name="more_image_6" class="image-base64">
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
                <input type="hidden" name="more_image_7" class="image-base64">
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
                <input type="hidden" name="more_image_8" class="image-base64">
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
                <input type="hidden" name="more_image_9" class="image-base64">
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
                <input type="hidden" name="more_image_10" class="image-base64">
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
<div id="condo-design" class="z-template">
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