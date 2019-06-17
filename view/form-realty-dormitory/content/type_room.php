<div class="col-md-6">
  <label for="name_room" class="bold">ชื่อห้อง</label>
  <input type="text" name="name_room" id="name_room" class="form-control" placeholder="ชื่อห้อง">
</div>
<div class=" mt-3 col-md-6">
</div>
<div class=" mt-3 col-md-6">
  <label class="bold">ห้องนอน</label>
  <div class="form-group row-expand justify-content-between">
    <button class="btn btn-select radius-custom">ไม่ระบุ</button>
    <button class="btn btn-select radius-custom">สตูดิโอ</button>
    <button class="btn btn-select radius-custom-circle">1</button>
    <button class="btn btn-select radius-custom-circle">2</button>
    <button class="btn btn-select radius-custom-circle">3</button>
    <div class="btn btn-select radius-custom inline" style="width:100px;">
      <input type="number" name="" id="" class="text-center form-control-custom">
    </div>
  </div>
  <?php 
          $count = 0;
          if($count > 1){
        ?>
  <label class="bold">ห้องนอนที่ 1</label>
  <div class="form-group">
    <div class="row">
      <div class=" mt-3 col-6">
        <span class="bold">0 เตียง</span>
      </div>
      <div class=" mt-3 col-6 text-right">
        <button class="btn btn-select radius-custom active">เพิ่มเตียง</button>
      </div>
    </div>
    <hr class="bg-dark-50">
  </div>
  <label class="bold">ห้องนอนที่ 2</label>
  <div class="form-group">
    <div class="row">
      <div class=" mt-3 col-6">
        <span class="bold">2 เตียง</span>
      </div>
      <div class=" mt-3 col-6 text-right">
        <button class="btn btn-select radius-custom active">แก้ไข้เตียง</button>
      </div>
      <div class=" mt-3 col-12">
        <p>เตียง 3 ฟุต 1 เตียง</p>
        <p>เตียง 5 ฟุต 1 เตียง</p>
      </div>
    </div>
    <hr class="bg-dark-50">
  </div>
  <label class="bold">ห้องนอนที่ 3</label>
  <div class="form-group">
    <div class="row">
      <div class=" mt-3 col-6">
        <span class="bold">0 เตียง</span>
      </div>
      <div class=" mt-3 col-6 text-right">
        <button class="btn btn-select radius-custom active">ยืนยัน</button>
      </div>
      <div class=" mt-3 col-12">
        <p>เตียง 3 ฟุต 1 เตียง</p>
        <p>เตียง 5 ฟุต 1 เตียง</p>
      </div>
    </div>
    <hr class="bg-dark-50">
  </div>
  <div class="row">
    <div class=" mt-3 col-12 text-center">
      <a href="#" class="smaller-90 text-secondary">ห้องนอนต่อไป <i class="fa fa-angle-down"></i></a>
    </div>
  </div>
  <?php }else{ ?>
  <div class="row">
    <div class=" mt-3 col-12">
      <div class="img-4by3 holder border dash pos-rel">
        <span class="text-abs-position text-center">กรุณาระบุจำนวนห้องนอนก่อน ถึงจะสามารถเลือกจำนวนเตียงได้</span>
      </div>
    </div>
  </div>
  <?php } ?>
</div>
<div class=" mt-3 col-md-6 border-left">
  <label for="size_room" class="bold">ขนาดห้อง (ตร.ม.) <span class="text-danger">*</span></label>
  <input type="text" name="size_room" id="size_room" class="form-control" placeholder="กรุณาใส่เฉพาะตัวเลข">
  <label class="bold">รายเดือน (บาท/เดือน) <span class="text-danger">*</span></label>
  <div class="justify-content-around row">
    <input type="number" name="min_rent_price_per_month" id="rent_price_per_month" class="form-control w-45 d-inline"
      placeholder="ราคาเริ่มต้น">
    <input type="number" name="max_rent_price_per_month" id="rent_price_per_month" class="form-control w-45 d-inline"
      placeholder="ราคาสูงสุด">
  </div>
  <label class="bold">รายเดือน (บาท/วัน) <span class="text-danger">*</span></label>
  <div class="justify-content-around row">
    <input type="number" name="min_rent_price_per_date" id="rent_price_per_date" class="form-control w-45 d-inline"
      placeholder="ราคาเริ่มต้น">
    <input type="number" name="max_rent_price_per_date" id="rent_price_per_date" class="form-control w-45 d-inline"
      placeholder="ราคาสูงสุด">
  </div>
  <label class="bold">จำนวนคนสูงสุด</label>
  <div class="form-group">
    <button class="btn btn-select radius-custom">ไม่ระบุ</button>
    <button class="btn btn-select radius-custom-circle ">1</button>
    <button class="btn btn-select radius-custom-circle">2</button>
    <button class="btn btn-select radius-custom-circle">3</button>
    <button class="btn btn-select radius-custom-circle">4</button>
    <button class="btn btn-select radius-custom">+</button>
  </div>
  <label class="bold">จำนวนห้องน้ำ</label>
  <div class="form-group">
    <button class="btn btn-select radius-custom">ไม่ระบุ</button>
    <button class="btn btn-select radius-custom-circle ">1</button>
    <button class="btn btn-select radius-custom-circle">2</button>
    <button class="btn btn-select radius-custom-circle">3</button>
    <button class="btn btn-select radius-custom-circle">4</button>
    <button class="btn btn-select radius-custom">+</button>
  </div>
  <label for="cooling_system" class="bold">ระบบความเย็น <span class="text-danger">*</span></label>
  <select name="cooling_system" id="cooling_system" class="form-control">
    <option value="">เลือกข้อมูล</option>
  </select>
  <label for="featured" class="bold">จุดเด่น <span class="text-danger">*</span></label>
  <input type="text" name="featured" id="featured" class="form-control" placeholder="short text">
  <span class="bold">สถานะห้อง</span><span>(อัพเดทครั้งต่อไปก่อน 30/05/2019)</span>
  <div class="row">
    <div class=" mt-3 col-md-4">
      <div class="custom-control custom-radio">
        <input type="radio" class="custom-control-input" name="room_status" id="avalible" checked required>
        <label class="custom-control-label" for="avalible">ว่าง</label>
      </div>
    </div>
    <div class=" mt-3 col-md-4">
      <div class="custom-control custom-radio">
        <input type="radio" class="custom-control-input" name="room_status" id="unavalible">
        <label class="custom-control-label" for="unavalible">ไม่ว่าง</label>
      </div>
    </div>
    <div class=" mt-3 col-md-4">
      <div class="custom-control custom-radio">
        <input type="radio" class="custom-control-input" name="room_status" id="callback">
        <label class="custom-control-label" for="callback">โทรติดต่อ</label>
      </div>
    </div>
  </div>
  <span class="smaller-90">* เมื่อคุณเลือก "ว่าง"
    ข้อมูลหอพักของคุณจะถูกส่งให้กับคนหาหอพักที่ใช้งานแจ้งความต้องการอัตโนมัติฟรี!
    โดยคุณต้องเข้ามาอัพเดทอย่างน้อยทุก 15 วัน ถ้าเกินกำหนดจะเปลี่ยนเป็น "โทรติดต่อ" และไม่ได้สิทธิส่งข้อมูล</span>
</div>

<div class="row mt-3">
  <div class="col-md-4">
    <h6 class="font-weight-bold">รูปในห้องพัก</h6>
    <div class="image-upload">
      <i class="fa fa-times close btn-remove-image d-none" aria-hidden="true"></i>
      <div class="img-4by3 holder btn-change-image highlight-hover">
        <img src="" class="img-responsive image-preview">
        <input type="hidden" name="image" class="image-base64">
      </div>
      <input type="file" class="form-control img-upload-file" accept="image/*">
    </div>
  </div>
  <!-- name ของ input รูป เป็น image ทุกอันเลย
สอนไปแล้วว่า name ห้ามซ้ำกัน -->
  <div class="col-md-8">
    <h6 class="font-weight-bold">รูปในห้องพัก</h6>
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

<div class="row mt-3">
  <div class="col-md-6">
    <label class="bold">สิ่งอำนวยความสะดวกในที่พัก</label>
    <div class="col-md-12">
      <div id="accordion">
        <div class="card mt-2">
          <a href="#" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
            <div class="card-header-custom" id="headingOne">
              <h5 class="mb-0">
                <span class="btn text-secondary">อุปกรณ์ตกแต่งและช่วยเหลือ</span>
              </h5>
            </div>
          </a>
          <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
            <div class="card-body">
              <div class="row">
                <div class="col-md-6 mt-2">
                  <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" name="wifi" id="wifi">
                    <label class="custom-control-label" for="wifi">อินเตอร์เน็ทไร้สาย (Wi-Fi)</label>
                  </div>
                </div>
                <div class="col-md-6 mt-2">
                  <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" name="powder" id="powder">
                    <label class="custom-control-label" for="powder">โต๊ะเครื่องแป้ง</label>
                  </div>
                </div>
                <div class="col-md-6 mt-2">
                  <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" name="LAN" id="LAN">
                    <label class="custom-control-label" for="LAN">ระบบ Lan</label>
                  </div>
                </div>
                <div class="col-md-6 mt-2">
                  <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" name="powder-1" id="powder-1">
                    <label class="custom-control-label" for="powder-1">โต๊ะเครื่องแป้ง</label>
                  </div>
                </div>
                <div class="col-md-6 mt-2">
                  <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" name="Cable-TV" id="Cable-TV">
                    <label class="custom-control-label" for="Cable-TV">เคเบิลทีวี</label>
                  </div>
                </div>
                <div class="col-md-6 mt-2">
                  <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" name="sofa" id="sofa">
                    <label class="custom-control-label" for="sofa">โซฟา</label>
                  </div>
                </div>
                <div class="col-md-6 mt-2">
                  <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" name="thief-alarm" id="thief-alarm">
                    <label class="custom-control-label" for="thief-alarm">สัญญานกันขโมย</label>
                  </div>
                </div>
                <div class="col-md-6 mt-2">
                  <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" name="balcony" id="balcony">
                    <label class="custom-control-label" for="balcony">ระเบียง</label>
                  </div>
                </div>
                <div class="col-md-6 mt-2">
                  <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" name="DDL" id="DDL">
                    <label class="custom-control-label" for="DDL">Digital Door Lock</label>
                  </div>
                </div>
                <div class="col-md-6 mt-2">
                  <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" name="kitchen" id="kitchen">
                    <label class="custom-control-label" for="kitchen">ห้องครัว</label>
                  </div>
                </div>
                <div class="col-md-6 mt-2">
                  <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" name="dinne-table" id="dinne-table">
                    <label class="custom-control-label" for="din-tabl">โต๊ะกินข้าว</label>
                  </div>
                </div>
                <div class="col-md-6 mt-2">
                  <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" name="sink" id="sink">
                    <label class="custom-control-label" for="sink">ซิ้งค์ล้างจาน</label>
                  </div>
                </div>
                <div class="col-md-6 mt-2">
                  <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" name="book-table" id="book-table">
                    <label class="custom-control-label" for="book-table">โต๊ะอ่านหนังสือ</label>
                  </div>
                </div>
                <div class="col-md-6 mt-2">
                  <input type="text" class="form-control form-control-sm" name="other-facilities" placeholder="อื่นๆ">
                </div>
                <div class="col-12 mt-2 align-right">
                  <div class="row justify-content-end">
                    <div class="col-md-6">
                      <button class="btn btn-sm btn-block btn-outline-secondary dash"><i class="fas fa-plus mr-2"></i>เพิ่ม</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="card mt-2">
          <a href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
            <div class="card-header-custom" id="headingTwo">
              <h5 class="mb-0">
                <span class="btn text-secondary">เครื่องใช้ไฟฟ้า</span>
              </h5>
            </div>
          </a>
          <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
            <div class="card-body">
              Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf
              moon
              officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3
              wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.
              Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad
              vegan
              excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth
              nesciunt
              you probably haven't heard of them accusamus labore sustainable VHS.
            </div>
          </div>
        </div>

        <div class="card mt-2">
          <a href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
            <div class="card-header-custom" id="headingTwo">
              <h5 class="mb-0">
                <span class="btn text-secondary">ที่อาบน้ำ</span>
              </h5>
            </div>
          </a>
          <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
            <div class="card-body">
              Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf
              moon
              officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3
              wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.
              Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad
              vegan
              excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth
              nesciunt
              you probably haven't heard of them accusamus labore sustainable VHS.
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="col-md-6">
    <label class="bold">สิ่งอำนวยความสะดวกส่วนกลาง</label>
    <div class="col-12">
      <div id="accordion">
        <div class="card mt-2">
          <a href="#" data-toggle="collapse" data-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
            <div class="card-header-custom" id="headingThree">
              <h5 class="mb-0">
                <span class="btn text-secondary">ส่วนกลาง</span>
              </h5>
            </div>
          </a>
          <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
            <div class="card-body">
              Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf
              moon
              officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3
              wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.
              Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad
              vegan
              excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth
              nesciunt
              you probably haven't heard of them accusamus labore sustainable VHS.
            </div>
          </div>
        </div>
        <div class="card mt-2">
          <a href="#" data-toggle="collapse" data-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
            <div class="card-header-custom" id="headingThree">
              <h5 class="mb-0">
                <span class="btn text-secondary">ความปลอดภัย</span>
              </h5>
            </div>
          </a>
          <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
            <div class="card-body">
              Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf
              moon
              officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3
              wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.
              Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad
              vegan
              excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth
              nesciunt
              you probably haven't heard of them accusamus labore sustainable VHS.
            </div>
          </div>
        </div>
        <div class="card mt-2">
          <a href="#" data-toggle="collapse" data-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
            <div class="card-header-custom" id="headingThree">
              <h5 class="mb-0">
                <span class="btn text-secondary">ออกกำลังกาย</span>
              </h5>
            </div>
          </a>
          <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
            <div class="card-body">
              Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf
              moon
              officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3
              wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.
              Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad
              vegan
              excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth
              nesciunt
              you probably haven't heard of them accusamus labore sustainable VHS.
            </div>
          </div>
        </div>
        <div class="card mt-2">
          <a href="#" data-toggle="collapse" data-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
            <div class="card-header-custom" id="headingThree">
              <h5 class="mb-0">
                <span class="btn text-secondary">ประเภทที่จอดรถ</span>
              </h5>
            </div>
          </a>
          <div id="collapseFour" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
            <div class="card-body">
              Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf
              moon
              officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3
              wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.
              Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad
              vegan
              excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth
              nesciunt
              you probably haven't heard of them accusamus labore sustainable VHS.
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


<div class="" id="type_room"></div>

<div class="z-template" id="type_room">
  <div class=" mt-3 col-md-6">
    <label for="name_room" class="bold">ชื่อห้อง</label>
    <input type="text" name="name_room" id="name_room" class="form-control" placeholder="ชื่อห้อง">
    <a href="" class="btn-remove-room"> <button></button></a>
  </div>
  <div class=" mt-3 col-md-6">
  </div>
  <div class=" mt-3 col-md-6">
    <label class="bold">ห้องนอน</label>
    <div class="form-group row-expand justify-content-between">
      <button class="btn btn-select radius-custom ">ไม่ระบุ</button>
      <button class="btn btn-select radius-custom">สตูดิโอ</button>
      <button class="btn btn-select radius-custom-circle">1</button>
      <button class="btn btn-select radius-custom-circle">2</button>
      <button class="btn btn-select radius-custom-circle">3</button>
      <div class="btn btn-select radius-custom inline" style="width:100px;">
        <input type="number" name="" id="" class="text-center form-control-custom">
      </div>
    </div>
    <?php 
          $count = 0;
          if($count > 1){
        ?>
    <label class="bold">ห้องนอนที่ 1</label>
    <div class="form-group">
      <div class="row">
        <div class=" mt-3 col-6">
          <span class="bold">0 เตียง</span>
        </div>
        <div class=" mt-3 col-6 text-right">
          <button class="btn btn-select radius-custom ">เพิ่มเตียง</button>
        </div>
      </div>
      <hr class="bg-dark-50">
    </div>
    <label class="bold">ห้องนอนที่ 2</label>
    <div class="form-group">
      <div class="row">
        <div class=" mt-3 col-6">
          <span class="bold">2 เตียง</span>
        </div>
        <div class=" mt-3 col-6 text-right">
          <button class="btn btn-select radius-custom ">แก้ไข้เตียง</button>
        </div>
        <div class=" mt-3 col-12">
          <p>เตียง 3 ฟุต 1 เตียง</p>
          <p>เตียง 5 ฟุต 1 เตียง</p>
        </div>
      </div>
      <hr class="bg-dark-50">
    </div>
    <label class="bold">ห้องนอนที่ 3</label>
    <div class="form-group">
      <div class="row">
        <div class=" mt-3 col-6">
          <span class="bold">0 เตียง</span>
        </div>
        <div class=" mt-3 col-6 text-right">
          <button class="btn btn-select radius-custom ">ยืนยัน</button>
        </div>
        <div class=" mt-3 col-12">
          <p>เตียง 3 ฟุต 1 เตียง</p>
          <p>เตียง 5 ฟุต 1 เตียง</p>
        </div>
      </div>
      <hr class="bg-dark-50">
    </div>
    <div class="row">
      <div class=" mt-3 col-12 text-center">
        <a href="#" class="smaller-90 text-secondary">ห้องนอนต่อไป <i class="fa fa-angle-down"></i></a>
      </div>
    </div>
    <?php }else{ ?>
    <div class="row">
      <div class=" mt-3 col-12">
        <div class="img-4by3 holder border dash pos-rel">
          <span class="text-abs-position text-center">กรุณาระบุจำนวนห้องนอนก่อน ถึงจะสามารถเลือกจำนวนเตียงได้</span>
        </div>
      </div>
    </div>
    <?php } ?>
  </div>
  <div class=" mt-3 col-md-6 border-left">
    <label for="size_room" class="bold">ขนาดห้อง (ตร.ม.) <span class="text-danger">*</span></label>
    <input type="text" name="size_room" id="size_room" class="form-control" placeholder="กรุณาใส่เฉพาะตัวเลข">
    <label class="bold">รายเดือน (บาท/เดือน) <span class="text-danger">*</span></label>
    <div class="justify-content-around row">
      <input type="number" name="min_rent_price_per_month" id="rent_price_per_month" class="form-control w-45 d-inline"
        placeholder="ราคาเริ่มต้น">
      <input type="number" name="max_rent_price_per_month" id="rent_price_per_month" class="form-control w-45 d-inline"
        placeholder="ราคาสูงสุด">
    </div>
    <label class="bold">รายเดือน (บาท/วัน) <span class="text-danger">*</span></label>
    <div class="justify-content-around row">
      <input type="number" name="min_rent_price_per_date" id="rent_price_per_date" class="form-control w-45 d-inline"
        placeholder="ราคาเริ่มต้น">
      <input type="number" name="max_rent_price_per_date" id="rent_price_per_date" class="form-control w-45 d-inline"
        placeholder="ราคาสูงสุด">
    </div>
    <label class="bold">จำนวนคนสูงสุด</label>
    <div class="form-group">
      <button class="btn btn-select radius-custom">ไม่ระบุ</button>
      <button class="btn btn-select radius-custom-circle ">1</button>
      <button class="btn btn-select radius-custom-circle">2</button>
      <button class="btn btn-select radius-custom-circle">3</button>
      <button class="btn btn-select radius-custom-circle">4</button>
      <button class="btn btn-select radius-custom">+</button>
    </div>
    <label class="bold">จำนวนห้องน้ำ</label>
    <div class="form-group">
      <button class="btn btn-select radius-custom">ไม่ระบุ</button>
      <button class="btn btn-select radius-custom-circle ">1</button>
      <button class="btn btn-select radius-custom-circle">2</button>
      <button class="btn btn-select radius-custom-circle">3</button>
      <button class="btn btn-select radius-custom-circle">4</button>
      <button class="btn btn-select radius-custom">+</button>
    </div>
    <label for="cooling_system" class="bold">ระบบความเย็น <span class="text-danger">*</span></label>
    <select name="cooling_system" id="cooling_system" class="form-control">
      <option value="">เลือกข้อมูล</option>
    </select>
    <label for="featured" class="bold">จุดเด่น <span class="text-danger">*</span></label>
    <input type="text" name="featured" id="featured" class="form-control" placeholder="short text">
    <span class="bold">สถานะห้อง</span><span>(อัพเดทครั้งต่อไปก่อน 30/05/2019)</span>
    <div class="row">
      <div class=" mt-3 col-md-4">
        <div class="custom-control custom-radio">
          <input type="radio" class="custom-control-input" name="room_status" id="avalible" checked required>
          <label class="custom-control-label" for="avalible">ว่าง</label>
        </div>
      </div>
      <div class=" mt-3 col-md-4">
        <div class="custom-control custom-radio">
          <input type="radio" class="custom-control-input" name="room_status" id="unavalible">
          <label class="custom-control-label" for="unavalible">ไม่ว่าง</label>
        </div>
      </div>
      <div class=" mt-3 col-md-4">
        <div class="custom-control custom-radio">
          <input type="radio" class="custom-control-input" name="room_status" id="callback">
          <label class="custom-control-label" for="callback">โทรติดต่อ</label>
        </div>
      </div>
    </div>
    <span class="smaller-90">* เมื่อคุณเลือก "ว่าง"
      ข้อมูลหอพักของคุณจะถูกส่งให้กับคนหาหอพักที่ใช้งานแจ้งความต้องการอัตโนมัติฟรี!
      โดยคุณต้องเข้ามาอัพเดทอย่างน้อยทุก 15 วัน ถ้าเกินกำหนดจะเปลี่ยนเป็น "โทรติดต่อ" และไม่ได้สิทธิส่งข้อมูล</span>
  </div>

  <div class="row mt-3">
    <div class="col-md-4">
      <h6 class="font-weight-bold">รูปในห้องพัก</h6>
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
      <h6 class="font-weight-bold">รูปในห้องพัก</h6>
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




  <div class="row mt-3">

    <div class="col-md-6">
      <div class="row">
        <div class="col-12">
          <h6><b>สิ่งอำนวยความสะดวกภายในที่พัก</b></h6>
        </div>
        <div class="col-12">
          <select class="form-control custom-select" name="" id="">
            <option value="">อุปกรณ์ตกแต่งและช่วยเหลือ</option>
            <option value=""></option>
            <option value=""></option>
            <option value=""></option>
          </select>
        </div>
        <div class="col-md-6 mt-2">
          <div class="custom-control custom-checkbox">
            <input type="checkbox" class="custom-control-input" id="wifi">
            <label class="custom-control-label" for="wifi">อินเตอร์เน็ทไร้สาย (Wi-Fi)</label>
          </div>
        </div>
        <div class="col-md-6 mt-2">
          <div class="custom-control custom-checkbox">
            <input type="checkbox" class="custom-control-input" id="powder">
            <label class="custom-control-label" for="powder">โต๊ะเครื่องแป้ง</label>
          </div>
        </div>
        <div class="col-md-6 mt-2">
          <div class="custom-control custom-checkbox">
            <input type="checkbox" class="custom-control-input" id="LAN">
            <label class="custom-control-label" for="LAN">ระบบ Lan</label>
          </div>
        </div>
        <div class="col-md-6 mt-2">
          <div class="custom-control custom-checkbox">
            <input type="checkbox" class="custom-control-input" id="powder-1">
            <label class="custom-control-label" for="powder-1">โต๊ะเครื่องแป้ง</label>
          </div>
        </div>
        <div class="col-md-6 mt-2">
          <div class="custom-control custom-checkbox">
            <input type="checkbox" class="custom-control-input" id="Cable-TV">
            <label class="custom-control-label" for="Cable-TV">เคเบิลทีวี</label>
          </div>
        </div>
        <div class="col-md-6 mt-2">
          <div class="custom-control custom-checkbox">
            <input type="checkbox" class="custom-control-input" id="sofa">
            <label class="custom-control-label" for="sofa">โซฟา</label>
          </div>
        </div>
        <div class="col-md-6 mt-2">
          <div class="custom-control custom-checkbox">
            <input type="checkbox" class="custom-control-input" id="sec">
            <label class="custom-control-label" for="sec">สัญญานกันขโมย</label>
          </div>
        </div>
        <div class="col-md-6 mt-2">
          <div class="custom-control custom-checkbox">
            <input type="checkbox" class="custom-control-input" id="rab">
            <label class="custom-control-label" for="rab">ระเบียง</label>
          </div>
        </div>
        <div class="col-md-6 mt-2">
          <div class="custom-control custom-checkbox">
            <input type="checkbox" class="custom-control-input" id="DDL">
            <label class="custom-control-label" for="DDL">Digital Door Lock</label>
          </div>
        </div>
        <div class="col-md-6 mt-2">
          <div class="custom-control custom-checkbox">
            <input type="checkbox" class="custom-control-input" id="kichen">
            <label class="custom-control-label" for="kichen">ห้องครัว</label>
          </div>
        </div>
        <div class="col-md-6 mt-2">
          <div class="custom-control custom-checkbox">
            <input type="checkbox" class="custom-control-input" id="din-tabl">
            <label class="custom-control-label" for="din-tabl">โต๊ะกินข้าว</label>
          </div>
        </div>
        <div class="col-md-6 mt-2">
          <div class="custom-control custom-checkbox">
            <input type="checkbox" class="custom-control-input" id="sink-di">
            <label class="custom-control-label" for="sink-di">ซิ้งค์ล้างจาน</label>
          </div>
        </div>
        <div class="col-md-6 mt-2">
          <div class="custom-control custom-checkbox">
            <input type="checkbox" class="custom-control-input" id="book-tab">
            <label class="custom-control-label" for="book-tab">โต๊ะอ่านหนังสือ</label>
          </div>
        </div>
        <div class="col-md-6 mt-2">
          <input type="text" class="form-control border-2" placeholder="อื่นๆ">
        </div>
        <div class="col-12 mt-2 align-right">
          <div class="row conf-container">
            <div class="col-md-12">
              <button class="btn border w-100 border-3 bg-white text-muted btn-add-conf"><i class="fas fa-plus mr-2"></i>เพิ่ม</button>
            </div>
          </div>
        </div>
        <div class="col-12 mt-2">
          <select class="form-control custom-select" name="" id="">
            <option value="">เครื่องใช้ไฟฟ้า</option>
            <option value=""></option>
            <option value=""></option>
            <option value=""></option>
          </select>
        </div>
        <div class="col-12 mt-2">
          <select class="form-control custom-select" name="" id="">
            <option value="">ที่อาบน้ำ</option>
            <option value=""></option>
            <option value=""></option>
            <option value=""></option>
          </select>
        </div>
      </div>
    </div>

    <div class="col-md-6">
      <div class="row">
        <div class="col-12">
          <h6><b>สิ่งอำนวยความสะดวกส่วนกลาง</b></h6>
        </div>
        <div class="col-12 mt-2">
          <select class="form-control custom-select" name="" id="">
            <option value="">ส่วนกลาง</option>
            <option value=""></option>
            <option value=""></option>
            <option value=""></option>
          </select>
        </div>
        <div class="col-12 mt-2">
          <select class="form-control custom-select" name="" id="">
            <option value="">ความปลอดภัย</option>
            <option value=""></option>
            <option value=""></option>
            <option value=""></option>
          </select>
        </div>
        <div class="col-12 mt-2">
          <select class="form-control custom-select" name="" id="">
            <option value="">ออกกำลังกาย</option>
            <option value=""></option>
            <option value=""></option>
            <option value=""></option>
          </select>
        </div>
        <div class="col-12 mt-2">
          <select class="form-control custom-select" name="" id="">
            <option value="">ประเภทที่จอดรถ</option>
            <option value=""></option>
            <option value=""></option>
            <option value=""></option>
          </select>
        </div>
      </div>
    </div>


  </div>

</div>

<div class="row mt-3">
  <div class=" mt-3 col-12">
    <a href="#" class="btn btn-outline-secondary dash btn-block btn-add-room">+ เพิ่มประเภทห้อง</a>
  </div>
</div>

<script>
  $(document).ready(function () {
    $(document).on('click', '.btn-add-room', function (e) {
      var $this = $(this);
      $design_home_container = $('.design-home-container');
      var html = System.compileTemplate('home-extend');
      $design_home_container.prepend(html);
    });

    $(document).on('click', '.btn-remove-room', function (e) {
      var $this = $(this);
      var $container = $this.parents('.design-home-parents');
      $container.remove();
    });
  });
</script>