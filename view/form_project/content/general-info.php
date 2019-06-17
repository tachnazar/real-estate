<div class="col-12 mt-md-1 mt-3">
  <label class="bold">รูปแบบธุรกิจ <span class="text-danger">*</span></label>
  <span class="smaller-90">(เลือกได้มากกว่า 1 ข้อ แต่ไม่สามารถเลือกคอนโดกับอย่างอื่นได้)</span>
  <div class="form-group row-expand">
    <div class="custom-control custom-radio mr-md-2">
      <input type="radio" class="custom-control-input" name="business_type" id="home" value="home" checked>
      <label class="custom-control-label" for="home">บ้าน</label>
    </div>
    <div class="custom-control custom-radio mr-md-2">
      <input type="radio" class="custom-control-input" name="business_type" id="townhome" value="townhome">
      <label class="custom-control-label" for="townhome">ทาวน์โฮม</label>
    </div>
    <div class="custom-control custom-radio">
      <input type="radio" class="custom-control-input" name="business_type" id="condo" value="condo">
      <label class="custom-control-label" for="condo">คอนโด</label>
    </div>
  </div>
</div>
<div class="col-12">
  <div id="business_type_html" class="row"></div>
</div>
<div id="home-template" class="z-template">
  <div class="col-md-6 mt-md-1 mt-3">
    <label id="name_th" class="bold">ชื่อโครงการ (ภาษาไทย)<span class="text-danger"> *</span></label>
    <input type="text" name="name_th" id="name_th" class="form-control" placeholder="ชื่อโครงการ (ภาษาไทย)">
  </div>
  <div class="col-md-6 mt-md-1 mt-3">
    <label id="name_en" class="bold">ชื่อโครงการ (ภาษาอังกฤษ)<span class="text-danger"> *</span></label>
    <input type="text" name="name_en" id="name_en" class="form-control" placeholder="ชื่อโครงการ (ภาษาอังกฤษ)">
  </div>
  <div class="col-lg-3 col-md-6 mt-md-1 mt-3">
    <label for="unit_amount" class="bold">จำนวนยูนิตทั้งหมด</label>
    <input type="text" name="unit_amount" id="unit_amount" class="form-control" placeholder="กรุณาใส่เฉพาะตัวเลข">
  </div>
  <div class="col-lg-9 col-md-6"></div>
  <div class="col-lg-3 col-md-4 align-self-md-end mt-md-1 mt-3">
    <label for="area_size" class="bold">พื้นที่โครงการ</label>
    <div class="form-inline">
      <input type="text" name="area_size_1" class="form-control w-75" placeholder="กรุณาใส่เฉพาะตัวเลข"><span class="ml-2">ไร่</span>
    </div>
  </div>
  <div class="col-lg-3 col-md-4 align-self-md-end mt-md-1 mt-3">
    <div class="form-inline">
      <input type="text" name="area_size_2" class="form-control w-75" placeholder="กรุณาใส่เฉพาะตัวเลข"><span class="ml-2">งาน</span>
    </div>
  </div>
  <div class="col-lg-3 col-md-4 align-self-md-end mt-md-1 mt-3">
    <div class="form-inline">
      <input type="text" name="area_size_3" class="form-control w-75" placeholder="กรุณาใส่เฉพาะตัวเลข"><span class="ml-2">ตารางวา</span>
    </div>
  </div>
  <div class="col-lg-4 col-md-6 mt-md-1 mt-3">
    <label for="amount_parking" class="bold">โครงการเริ่มสร้าง (ค.ศ.)</label>
    <select name="building_year" class="form-control custom-select">
      <option value="">2018</option>
    </select>
  </div>
  <div class="col-lg-4 col-md-6 mt-md-1 mt-3">
    <label for="amount_parking" class="bold">ปีสร้างเสร็จ (ค.ศ.) <span class="text-danger">*</span></label>
    <select name="builded_year" class="form-control custom-select">
      <option value="">2018</option>
    </select>
  </div>
  <div class="col-lg-4">
  </div>
  <div class="col-lg-4 col-md-6 mt-md-1 mt-3">
    <label for="min_price" class="bold">ราคาเริ่มต้น<span class="text-danger">*</span></label>
    <input type="number" name="min_price" id="min_price" class="form-control" placeholder="กรุณาใส่เฉพาะตัวเลข">
  </div>
  <div class="col-lg-4 col-md-6 mt-md-1 mt-3">
    <label for="max_price" class="bold">ราคาสูงสุด </label>
    <input type="number" name="max_price" id="max_price" class="form-control" placeholder="กรุณาใส่เฉพาะตัวเลข">
  </div>
  <div class="col-lg-4">
  </div>
  <div class="col-12 mt-md-1 mt-3">
    <label class="bold">เงื่อนไขการขาย</label>
    <div class="row condition-container">
      <div class="col-lg-4 col-md-6 mt-md-1 mt-3 align-self-center">
        <button class="btn btn-condition dash btn-block btn-add-condition">+ เพิ่มเงื่อนไข</button>
      </div>
    </div>
  </div>
  <div class="col-12 mt-md-1 mt-3">
    <label class="bold">เงื่อนไขการการรับประกัน</label>
    <div class="row condition-container">
    <div class="col-lg-4 col-md-6 mt-md-1 mt-3 align-self-center">
      <button class="btn btn-condition dash btn-block btn-add-condition">+ เพิ่มเงื่อนไข</button>
    </div>
    </div>
  </div>
</div>
<div id="condo-template" class="z-template">
  <div class="col-md-6 mt-md-1 mt-3">
    <label id="name_th" class="bold">ชื่อโครงการ (ภาษาไทย)<span class="text-danger"> *</span></label>
    <input type="text" name="name_th" id="name_th" class="form-control" placeholder="ชื่อโครงการ (ภาษาไทย)">
  </div>
  <div class="col-md-6 mt-md-1 mt-3">
    <label id="name_en" class="bold">ชื่อโครงการ (ภาษาอังกฤษ)<span class="text-danger"> *</span></label>
    <input type="text" name="name_en" id="name_en" class="form-control" placeholder="ชื่อโครงการ (ภาษาอังกฤษ)">
  </div>
  <div class="col-md-6 mt-md-1 mt-3">
    <label class="bold">จำนวนอาคาร</label>
    <div class="form-group row-expand justify-content-between radio-container">
      <label class="btn btn-select radius-custom value-select">
        <input type="radio" name="amount_building" class="hidden radio-select" value="unknown" checked>
        ไม่ระบุ
      </label>
      <label class="btn btn-select radius-custom-circle value-select">
        <input type="radio" name="amount_building" class="hidden radio-select" value="one">
        1
      </label>
      <label class="btn btn-select radius-custom-circle value-select">
        <input type="radio" name="amount_building" class="hidden radio-select" value="two">
        2
      </label>
      <label class="btn btn-select radius-custom-circle value-select">
        <input type="radio" name="amount_building" class="hidden radio-select" value="three">
        3
      </label>
      <label class="btn btn-select radius-custom-circle value-select">
        <input type="radio" name="amount_building" class="hidden radio-select" value="four">
        4
      </label>
      <label class="btn btn-select radius-custom value-select">
        <input type="radio" name="amount_building" class="hidden radio-select" value="more_than_four">
        มากกว่า 4
      </label>
    </div>
  </div>
  <div class="col-lg-3 col-md-6 mt-md-1 mt-3">
    <label for="unit_amount" class="bold">จำนวนยูนิตทั้งหมด</label>
    <input type="text" name="unit_amount" id="unit_amount" class="form-control" placeholder="กรุณาใส่เฉพาะตัวเลข">
  </div>
  <div class="col-lg-3"></div>
  <div class="col-lg-3 col-md-4 align-self-md-end mt-md-1 mt-3">
    <label for="area_size" class="bold">พื้นที่โครงการ</label>
    <div class="form-inline">
      <input type="text" name="area_size_1" class="form-control w-75" placeholder="กรุณาใส่เฉพาะตัวเลข"><span class="ml-2">ไร่</span>
    </div>
  </div>
  <div class="col-lg-3 col-md-4 align-self-md-end mt-md-1 mt-3">
    <div class="form-inline">
      <input type="text" name="area_size_2" class="form-control w-75" placeholder="กรุณาใส่เฉพาะตัวเลข"><span class="ml-2">งาน</span>
    </div>
  </div>
  <div class="col-lg-3 col-md-4 align-self-md-end mt-md-1 mt-3">
    <div class="form-inline">
      <input type="text" name="area_size_3" class="form-control w-75" placeholder="กรุณาใส่เฉพาะตัวเลข"><span class="ml-2">ตารางวา</span>
    </div>
  </div>
  <div class="col-md-4 mt-md-1 mt-3">
    <label for="amount_floor" class="bold">จำนวนชั้น</label>
    <input type="number" name="amount_floor" id="amount_floor" class="form-control" placeholder="กรุณาใส่เฉพาะตัวเลข">
  </div>
  <div class="col-md-4 mt-md-1 mt-3">
    <label for="amount_lift" class="bold">จำนวนลิฟท์</label>
    <div class="form-group row-expand justify-content-between radio-container">
      <label class="btn btn-select radius-custom value-select">
        <input type="radio" name="amount_lift" class="hidden radio-select" value="unknown" checked>
        ไม่ระบุ
      </label>
      <label class="btn btn-select radius-custom-circle value-select">
        <input type="radio" name="amount_lift" class="hidden radio-select" value="one">
        1
      </label>
      <label class="btn btn-select radius-custom-circle value-select">
        <input type="radio" name="amount_lift" class="hidden radio-select" value="two">
        2
      </label>
      <label class="btn btn-select radius-custom-circle value-select">
        <input type="radio" name="amount_lift" class="hidden radio-select" value="three">
        3
      </label>
      <label class="btn btn-select radius-custom-circle value-select">
        <input type="radio" name="amount_lift" class="hidden radio-select" value="four">
        4
      </label>
      <label class="btn btn-select radius-custom value-select">
        <input type="radio" name="amount_lift" class="hidden radio-select" value="more_than_four">
        มากกว่า 4
      </label>
    </div>
  </div>
  <div class="col-md-4 mt-md-1 mt-3">
    <label for="amount_parking" class="bold">% ที่จอดรด</label>
    <input type="number" name="amount_parking" id="amount_parking" class="form-control" placeholder="กรุณาใส่เฉพาะตัวเลข">
  </div>
  <div class="col-lg-4 col-md-6 mt-md-1 mt-3">
    <label for="amount_parking" class="bold">โครงการเริ่มสร้าง (ค.ศ.)</label>
    <select name="building_year" class="form-control custom-select">
      <option value="">2018</option>
    </select>
  </div>
  <div class="col-lg-4 col-md-6 mt-md-1 mt-3">
    <label for="amount_parking" class="bold">ปีสร้างเสร็จ (ค.ศ.) <span class="text-danger">*</span></label>
    <select name="builded_year" class="form-control custom-select">
      <option value="">2018</option>
    </select>
  </div>
  <div class="col-lg-4">
  </div>
  <div class="col-lg-4 col-md-6 mt-md-1 mt-3">
    <label for="min_price" class="bold">ราคาเริ่มต้น<span class="text-danger">*</span></label>
    <input type="number" name="min_price" id="min_price" class="form-control" placeholder="กรุณาใส่เฉพาะตัวเลข">
  </div>
  <div class="col-lg-4 col-md-6 mt-md-1 mt-3">
    <label for="max_price" class="bold">ราคาสูงสุด </label>
    <input type="number" name="max_price" id="max_price" class="form-control" placeholder="กรุณาใส่เฉพาะตัวเลข">
  </div>
  <div class="col-lg-4">
  </div>
  <div class="col-12 mt-md-1 mt-3">
    <label class="bold">เงื่อนไขการขาย</label>
  </div>
  <div class="col-lg-4 col-md-6 mt-md-1 mt-3">
    <a href="#" class="btn btn-condition btn-block"><i class="fa fa-circle smaller-50 align-middle"></i>
      ค่าส่วนกลาง (บาท/ปี)</a>
  </div>
  <div class="col-lg-4 col-md-6 mt-md-1 mt-3">
    <a href="#" class="btn btn-condition dash btn-block">+ เพิ่มเงื่อนไข</a>
  </div>
  <div class="col-12 mt-md-1 mt-3">
    <label class="bold">เงื่อนไขการการรับประกัน</label>
  </div>
  <div class="col-lg-4 col-md-6 mt-md-1 mt-3">
    <a href="#" class="btn btn-condition btn-block"><i class="fa fa-circle smaller-50 align-middle"></i>
      รับประกันตัวบ้าน 1 ปี</a>
  </div>
  <div class="col-lg-4 col-md-6 mt-md-1 mt-3">
    <a href="#" class="btn btn-condition dash btn-block">+ เพิ่มเงื่อนไข</a>
  </div>
</div>
<div id="condition-template" class="z-template">
<div class="col-lg-4 col-md-6 mt-md-1 mt-3 condition-parents">
  <span class="condition-contain"><i class="fa fa-circle smaller-50 align-middle"></i>
    <input type="text" name="" id="" class="form-check-inline form-control form-control-sm w-75"><a class="fa fa-trash text-danger smaller-70 align-middle delete-condition btn-remove-condition"></a></span>
</div>
</div>
<script>
$(document).ready(function () {
  $(document).on('click', '.btn-add-condition', function(e) {
    var $this = $(this);
    $condition_container = $this.parents('.condition-container');
    var html = System.compileTemplate('condition-template');
    $condition_container.prepend(html);
  });

  $(document).on('click', '.btn-remove-condition', function(e) {
    var $this = $(this);
    var $container = $this.parents('.condition-parents');
    $container.remove();
  });
});
</script>