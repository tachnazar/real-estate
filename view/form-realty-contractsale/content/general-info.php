<div class="row">
	<div class="col-md-12 mt-3">
		<h5 class="text-info"><b>ข้อมูลทั่วไป</b></h5>
		<hr class="bg-dark-50">
	</div>
</div>

<div class="row mt-2">
	<div class="col-md-6">
		<label for="topic_th"><b>หัวข้อประกาศ</b> (ภาษาไทย) <span class="text-danger">*</span></label>
		<input id="topic_th" name="name_th" type="text" class="form-control border-2  rounded" placeholder="ชื่อ">
	</div>
	<div class="col-md-6">
		<label for="topic_en"><b>หัวข้อประกาศ</b> (ภาษาอังกฤษ)</label>
		<input id="topic_en" name="name_th" type="text" class="form-control border-2  rounded" placeholder="ชื่อ">
	</div>
</div>

<div class="row mt-3">
	<div class="col-md-8 align-self-end">
		<span><b>อ้างอิงหอพัก </b></span><span class="smaller-90"> หากอ้างอิงหอพัก ระบบแสดงลิงค์หอพัก
			ในใบประกาศของท่านเพื่อเพิ่มโอกาสในการขายหรือปล่อยเช่า</span>
		<select class="custom-select border-2 form-control" name="dormitory_name" id="">
			<option value="">ค้นหาชื่อหอพัก</option>
		</select>
	</div>
	<div class="col-md-4 align-self-end">
		<label for="area_to_use"><b>พื้นที่ใช้สอย (ตร.ม)</b></label>
		<input id="area_to_use" name="area_to_use" type="text" class="form-control border-2 rounded" placeholder="พื้นที่ใช้สอย (ตร.ม)">
	</div>
</div>

<div class="row mt-3">
	<div class="col-md-6 border-right">
		<div class="row ">
			<div class="col-12">
				<label class="bold">ห้องนอน</label>
				<div class="form-group row-expand justify-content-between radio-container">
					<label class="btn btn-select radius-custom value-select">
						<input type="radio" name="bedroom" class="hidden radio-select" value="unknown">
						ไม่ระบุ
					</label>
					<label class="btn btn-select radius-custom value-select">
						<input type="radio" name="bedroom" class="hidden radio-select" value="studio">
						สตูดิโอ
					</label>
					<label class="btn btn-select radius-custom-circle value-select">
						<input type="radio" name="bedroom" class="hidden radio-select" value="one">
						1
					</label>
					<label class="btn btn-select radius-custom-circle value-select">
						<input type="radio" name="bedroom" class="hidden radio-select" value="two">
						2
					</label>
					<label class="btn btn-select radius-custom-circle value-select">
						<input type="radio" name="bedroom" class="hidden radio-select" value="three">
						3
					</label>
					<label class="btn btn-select radius-custom value-select">
						<input type="radio" name="bedroom" class="hidden radio-select" value="more_than_three">
						มากกว่า 3
					</label>
				</div>
			</div>
			<hr class="bg-dark-50">
		</div>

		<div class="row mt-3">
			<div class="col-12">
				<h6><b>ห้องนอนที่ 1</b></h6>
			</div>
			<div class="col align-self-md-center">
				<span><b class="text-muted smaller-90"> 0 เตียง</b></span>
			</div>
			<div class="col">
				<button class="btn btn-success btn-sm radius-custom px-3">เพิ่มเตียง</button>
			</div>
		</div>
		<hr class="bg-dark-50">
		<div class="row mt-3">
			<div class="col-12">
				<h6><b>ห้องนอนที่ 2</b></h6>
			</div>
			<div class="col-12">
				<div class="row">
					<div class="col">
						<span><b class="text-muted smaller-90"> 2 เตียง</b></span>
					</div>
					<div class="col align-self-md-center">
						<button class="btn btn-success btn-sm radius-custom">แก้ไขเตียง</button>
					</div>
					<div class="col-12">
						<span class="text-muted smaller-90"><b>เตียง 3 ฟุต 1 เตียง</b></span>
					</div>
					<div class="col-12">
						<span class="text-muted smaller-90"><b>เตียง 5 ฟุต 1 เตียง</b></span>
					</div>
				</div>
				<hr class="bg-dark-50">
			</div>
		</div>
		<div class="row mt-3">
			<div class="col-12">
				<h6><b>ห้องนอนที่ 3</b></h6>
			</div>
			<div class="col-12">
				<div class="row">
					<div class="col-md-4">
						<span><b class="text-muted smaller-90"> 2 เตียง</b></span>
					</div>
					<div class="col-md-8 align-self-md-center text-center">
						<button class="btn btn-success px-4 btn-sm radius-custom">ยืนยัน</button>
					</div>
				</div>

				<div class="row mt-2">
					<div class="col-md-4">
						<span class="text-muted smaller-90"><b>เตียง 3 ฟุต</b></span>
					</div>
					<div class="col-md-8 text-center">
						<button class="btn btn-sm radius-custom text-success"><i class="fas fa-minus"></i></button>
						<span class="mx-3">1</span>
						<button class="btn btn-sm radius-custom text-success"><i class="fas fa-plus"></i></button>
					</div>
				</div>
				<div class="row mt-2">
					<div class="col-md-4">
						<span class="text-muted smaller-90"><b>เตียง 4 ฟุต</b></span>
					</div>
					<div class="col-md-8 text-center">
						<button class="btn btn-sm radius-custom text-success"><i class="fas fa-minus"></i></button>
						<span class="mx-3">1</span>
						<button class="btn btn-sm radius-custom text-success"><i class="fas fa-plus"></i></button>
					</div>
				</div>
				<div class="row mt-2">
					<div class="col-md-4">
						<span class="text-muted smaller-90"><b>เตียง 5 ฟุต</b></span>
					</div>
					<div class="col-md-8 text-center">
						<button class="btn btn-sm radius-custom text-success"><i class="fas fa-minus"></i></button>
						<span class="mx-3">1</span>
						<button class="btn btn-sm radius-custom text-success"><i class="fas fa-plus"></i></button>
					</div>
				</div>
			</div>

		</div>
		<hr class="bg-dark-50">
	</div>

	<div class="col-md-6">
		<div class="row">
			<div class="col-12">
				<label class="bold">จำนวนห้องน้ำ<span class="text-danger"> *</span></label>
				<div class="form-group row-expand justify-content-between radio-container">
					<label class="btn btn-select radius-custom value-select">
						<input type="radio" name="amount_bathroom" class="hidden radio-select" value="unknown">
						ไม่ระบุ
					</label>
					<label class="btn btn-select radius-custom value-select">
						<input type="radio" name="amount_bathroom" class="hidden radio-select" value="studio">
						สตูดิโอ
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
			<div class="col-12 mt-2">
				<h6><b>ระบบความเย็น</b></h6>
				<select class="form-control border-2 custom-select" name="" id="">
					<option value=""></option>
					<option value=""></option>
					<option value=""></option>
				</select>
			</div>
			<div class="col-12 mt-2">
				<h6><b>ชั้นที่อยู่</b></h6>
				<input class="form-control border-2" type="text" placeholder="">
			</div>
			<div class="col-10 mt-2">
				<h6><b>วันที่สามารถเข้าอยู่</b><span class="text-danger"> *</span></h6>
				<div class="input-group">
					<div class="input-group-prepend">
						<div class="input-group-text"><i class="far fa-calendar"></i></div>
					</div>
					<input type="date" class="form-control" id="" placeholder="">
				</div>
			</div>
			<div class="col-10 mt-2">
				<h6><b>วันที่หมดสัญญา</b><span class="text-danger"> *</span></h6>
				<div class="input-group">
					<div class="input-group-prepend">
						<div class="input-group-text"><i class="far fa-calendar"></i></div>
					</div>
					<input type="date" class="form-control" id="" placeholder="">
				</div>
			</div>
		</div>
	</div>
</div>
<script>
$(document).ready(function () {
	$(document).on('change', '.radio-select', function () {
		var $this = $(this);
		var $scope = $this.parents('.radio-container');
		var $button = $this.parents('.value-select');
		var value = $this.val();
		$scope.find('.value-select').removeClass('active');
		$button.addClass('active');
	});
});
</script>