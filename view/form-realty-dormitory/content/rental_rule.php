<div class=" col-md-4">
  <label class="bold">เลี้ยงสัตว์</label>
  <div class="row">
    <div class="mt-3 col-md-6">
      <div class="custom-control custom-radio">
        <input type="radio" name="pet_allow" class="custom-control-input" id="pet_allowed" value="allowed" checked
          required>
        <label class="custom-control-label" for="pet_allowed">ไม่ได้</label>
      </div>
    </div>
    <div class="mt-3 col-md-6">
      <div class="custom-control custom-radio">
        <input type="radio" name="pet_allow" class="custom-control-input" value="not-allowed" id="pet_not_allowed">
        <label class="custom-control-label" for="pet_not_allowed">ได้</label>
      </div>
    </div>
  </div>
</div>
<div class="col-md-4">
  <label class="bold">อนุญาตให้สูบบุหรี่ในที่พัก</label>
  <div class="row">
    <div class="mt-3 col-md-6">
      <div class="custom-control custom-radio">
        <input type="radio" name="smoke_allow" class="custom-control-input" id="smoke_allowed" value="allowed" checked
          required>
        <label class="custom-control-label" for="smoke_allowed">ไม่ได้</label>
      </div>
    </div>
    <div class="mt-3 col-md-6">
      <div class="custom-control custom-radio">
        <input type="radio" name="smoke_allow" class="custom-control-input" value="not-allowed" id="smoke_not_allowed">
        <label class="custom-control-label" for="smoke_not_allowed">ได้</label>
      </div>
    </div>
  </div>
</div>
<div class="col-md-4">
  <label class="bold">อนุญาตติดตั้งอินเตอร์เน็ต</label>
  <div class="row">
    <div class="mt-3 col-md-6">
      <div class="custom-control custom-radio">
        <input type="radio" name="internet_install_allow" class="custom-control-input" id="internet_install_allowed"
          value="allowed" checked required>
        <label class="custom-control-label" for="internet_install_allowed">ไม่ได้</label>
      </div>
    </div>
    <div class="mt-3 col-md-6">
      <div class="custom-control custom-radio">
        <input type="radio" name="internet_install_allow" class="custom-control-input" value="not-allowed" id="internet_install_not_allowed">
        <label class="custom-control-label" for="internet_install_not_allowed">ได้</label>
      </div>
    </div>
  </div>
</div>

<div class="row">
	<div class="col-12 mt-3">
		<h6><b>ข้อกำหนดการเพิ่มเติม</b></h6>
		<div class="row rule-container my-3">
			<div class="col-lg-4 col-md-6 ">
				<button class="btn btn-block border-3 bg-white text-muted btn-add-rule"><i class="fas fa-plus"></i> เพิ่ม</button>
			</div>
		</div>
	</div>
</div>

<div id="rule-template" class="z-template">
	<div class="col-lg-4 col-md-6 mt-md-1  rule-parents">
		<span class="condition-contain"><i class="fa fa-circle smaller-50 align-middle"></i>
			<input type="text" name="" id="" class="form-check-inline form-control form-control-sm w-75"><a class="fa fa-trash text-danger smaller-70 align-middle delete-condition btn-remove-rule"></a></span>
	</div>
</div>

