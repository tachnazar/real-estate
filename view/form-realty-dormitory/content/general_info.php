<div class="col-md-6 mt-md-0 mt-3">
  <label id="name_th" class="bold">ชื่อหอพัก (ภาษาไทย)<span class="text-danger"> *</span></label>
  <input type="text" name="name_th" id="name_th" class="form-control" placeholder="ชื่อหอพัก (ภาษาไทย)">
</div>
<div class="col-md-6 mt-md-0 mt-3">
  <label id="name_en" class="bold">ชื่อหอพัก (ภาษาอังกฤษ)<span class="text-danger"> *</span></label>
  <input type="text" name="name_en" id="name_en" class="form-control" placeholder="ชื่อหอพัก (ภาษาอังกฤษ)">
</div>

<div class="col-md-3 align-self-md-end mt-3">
  <label for="area_size" class="bold">ขนาดที่ดิน</label>
  <div class="form-inline">
    <input type="text" name="area_size_1" class="form-control w-75" placeholder="กรุณาใส่เฉพาะตัวเลข"><span class="ml-2">ไร่</span>
  </div>
</div>
<div class="col-md-3 align-self-md-end mt-3">
  <div class="form-inline">
    <input type="text" name="area_size_2" class="form-control w-75" placeholder="กรุณาใส่เฉพาะตัวเลข"><span class="ml-2">งาน</span>
  </div>
</div>
<div class="col-md-3 align-self-md-end mt-3">
  <div class="form-inline">
    <input type="text" name="area_size_3" class="form-control w-75" placeholder="กรุณาใส่เฉพาะตัวเลข"><span class="ml-2">ตารางวา</span>
  </div>
</div>

<div class="col-md-6 mt-3">
  <label class="bold">จำนวนชั้น</label>
  <div class="form-group row-expand justify-content-between">
    <button class="btn btn-select radius-custom active">ไม่ระบุ</button>
    <button class="btn btn-select radius-custom-circle">1</button>
    <button class="btn btn-select radius-custom-circle">2</button>
    <button class="btn btn-select radius-custom-circle">3</button>
    <button class="btn btn-select radius-custom-circle">4</button>
    <button class="btn btn-select radius-custom">มากกว่า 4</button>
  </div>
</div>
<div class="col-md-6 mt-3">
  <label class="bold">จำนวนลิฟท์</label>
  <div class="form-group row-expand justify-content-between">
    <button class="btn btn-select radius-custom">ไม่ระบุ</button>
    <button class="btn btn-select radius-custom-circle active">1</button>
    <button class="btn btn-select radius-custom-circle">2</button>
    <button class="btn btn-select radius-custom-circle">3</button>
    <button class="btn btn-select radius-custom-circle">4</button>
    <button class="btn btn-select radius-custom">มากกว่า 4</button>
  </div>
</div>

<div class="col-md-4 mt-3">
  <label class="bold" for="parking">ที่จอดรถ</label>
  <input id="parking" name="parking" type="text" class="form-control border rounded" placeholder="หัวข้อประกาศ">
</div>
<div class="col-md-4 mt-3">
  <label class="bold" for="year_builded">ปีที่สร้างเสร็จ (ค.ศ.)</label>
  <input id="year_builded" name="year_builded" type="text" class="form-control border rounded" placeholder="หัวข้อประกาศ">
</div>
<div class="col-md-4 mt-3">
  <label class="bold" for="room_amount">จำนวนห้องทั้งหมด</label>
  <input id="room_amount" name="room_amount" type="text" class="form-control border rounded" placeholder="หัวข้อประกาศ">
</div>

<div class="col-md-4 mt-3 align-self-end">
  <label class="bold" for="download_speed">ความเร็วอินเตอร์เน็ตที่เลือกใช้กับผู้ให้บริการ(Mbps)</label>
  <input id="download_speed" name="download_speed" type="text" class="form-control border rounded" placeholder="Download / Mbsp">
</div>
<div class="col-md-4 mt-3 align-self-end">
  <label class="bold" for="upload_speed">&nbsp;</label>
  <input id="upload_speed" name="upload_speed" type="text" class="form-control border rounded" placeholder="Upload / Mbsp">
</div>
<div class="col-md-4 mt-3 align-self-end">
  <label class="bold" for="internet_owner">ผู้ให้บริการอินเตอร์เน็ต</label>
  <select name="internet_owner" id="internet_owner" class="form-control form-control-select">
    <option value="ais">AIS</option>
    <option value="true">TRUE</option>
    <option value="3bb">3BB</option>
  </select>
</div>
<div class="col-12 mt-3">
  <span>*เรามีแจ้งให้ผู้อ่านทราบว่า เป็นความเร็วที่เลือกใช้กับผู้บิรการอาจไม่เท่ากับการใช้งานจริง</span>
</div>