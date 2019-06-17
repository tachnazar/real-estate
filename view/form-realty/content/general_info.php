<div class="row">
	<div class="col-md-8">
		<label class="bold">รูปแบบธุรกิจ<span class="text-danger"> *</span></label>
		<div class="row">
			<div class="col-md">
				<div class="custom-control custom-radio">
					<input type="radio" name="rental_type" class="custom-control-input" id="sell" value="sell" checked>
					<label class="custom-control-label" for="sell">ขาย</label>
				</div>
			</div>
			<div class="col-md">
				<div class="custom-control custom-radio">
					<input type="radio" name="rental_type" class="custom-control-input" id="rent" value="rent">
					<label class="custom-control-label" for="rent">ให้เช่า</label>
				</div>
			</div>
			<div class="col-md">
				<div class="custom-control custom-radio">
					<input type="radio" name="rental_type" class="custom-control-input" id="sell_rent" value="sell_rent">
					<label class="custom-control-label" for="sell_rent">ขายหรือให้เช่า</label>
				</div>
			</div>
		</div>
	</div>
</div>

<div id="realty"> </div>

<div class="z-template" id="sell-template">
	<div class="row">
		<div class="col-md-6 mt-3">
			<b>เลือกประเภทอสังหา</b><span class="text-danger"> *</span>
			<select name="type_realty" class="form-control border-2 custom-select" name="" id="">
				<option value="">คอนโด</option>
			</select>
		</div>
	</div>

	<div class="row">
		<div class="col-md-6 mt-3">
			<label for="topic_th"><b>หัวข้อประกาศ</b> (ภาษาไทย)</label>
			<input id="topic_th" name="topic_th" type="text" class="form-control border-2 rounded" placeholder="หัวข้อประกาศ">
		</div>
		<div class="col-md-6 mt-3">
			<label for="topic_en"><b>หัวข้อประกาศ</b> (ภาษาอังกฤษ)</label>
			<input id="topic_en" name="topic_en" type="text" class="form-control border-2 rounded" placeholder="หัวข้อประกาศ">
		</div>

		<div class="col-md-4 mt-3 align-self-end">
			<label for="ass_code"><b>รหัสทรัพย์สิน</b></label>
			<input id="ass_code" name="ass_code" type="text" class="form-control border-2 rounded" placeholder="รหัสทรัพย์สิน">
		</div>
		<div class="col-md-8 mt-3 align-self-end">
			<span><b>อ้างอิงโครงการ </b></span><span class="smaller-90"> หากอ้างอิงโครงการ ระบบแสดงลิงค์โครงการ
				ในใบประกาศของท่านเพื่อเพิ่มโอกาสในการขายหรือปล่อยเช่า</span>
			<select class="custom-select border-2 form-control" name="ref_name" id="">
				<option value="">ค้นหาชื่อโครงการ</option>
			</select>
		</div>


		<div class="col-md-4">
			<span><b>ราคาประกาศขาย (บาท)</b></span><span class="text-danger"> *</span>
			<input id="pric_sell" name="pric_sell" type="text" class="form-control form-control border-2" placeholder="กรุณาใส่เฉพาะตัวเลข">
		</div>
	</div>


	<div class="row">
		<div class="col-md-4 mt-3">
			<span><b>สถานะ</b></span>
			<div class="custom-control custom-radio">
				<input type="radio" class="custom-control-input" id="rent_status" name="rent_status" required>
				<label class="custom-control-label" for="rent_status">ปัจจุบันมีผู้เช่าอยู่</label>
			</div>
		</div>
		<div class="col-md-4 mt-3">
			<span><b>ราคาเช่าปัจจุบัน</b></span><span>(บาท/เดือน)</span>
			<input type="text" class="form-control border-2" id="rent_prc" name="rent_pric" required>
		</div>
		<div class="col-md-4 mt-3">
			<span><b>วันที่หมดสัญญา</b></span>
			<div class="input-group">
				<div class="input-group-prepend">
					<div class="input-group-text"><i class="far fa-calendar"></i></div>
				</div>
				<input name="end_promiss" type="date" class="form-control" id="">
			
			</div>
		</div>
		<div class="mt-3 col-md-3 align-self-md-end">
			<span><b>ขนาดที่ดิน</b></span>
			<div class="form-inline">
				<input type="text" name="" class="form-control border-2" placeholder="กรุณาใส่เฉพาะตัวเลข"><span class="ml-2">ไร่</span>
			</div>
		</div>
		<div class="mt-3 col-md-3 align-self-md-end">
			<span><b></b></span>
			<div class="form-inline">
				<input type="text" name="" class="form-control border-2" placeholder="กรุณาใส่เฉพาะตัวเลข"><span class="ml-2">งาน</span>
			</div>
		</div>
		<div class="mt-3 col-md-3 align-self-md-end">
			<span><b></b></span>
			<div class="form-inline">
				<input type="text" name="" class="form-control border-2" placeholder="กรุณาใส่เฉพาะตัวเลข"><span class="ml-2 smaller-80">ตารางวา</span>
			</div>
		</div>
		<div class="mt-3 col-md-3 align-self-md-end">
			<span><b>พื้นที่ใช้สอย (ตร.ม)</b></span><span>(ตร.ม.)</span><span class="text-danger"> *</span>
			<div class="form-inline">
				<input type="text" name="aria" class="form-control border-2" placeholder="กรุณาใส่เฉพาะตัวเลข"><span class="ml-2">ไร่</span>
			</div>
		</div>
	</div>

	<div class="row mt-3">
		<div class="col-md-6">
			<label class="bold">ห้องนอน</label>
			<div class="form-group row-expand justify-content-between radio-container">
				<label class="btn btn-select radius-custom value-select">
					<input type="radio" name="amount_bedroom" class="hidden radio-select" value="unknown">
					ไม่ระบุ
				</label>
				<label class="btn btn-select radius-custom-circle value-select">
					<input type="radio" name="amount_bedroom" class="hidden radio-select" value="one">
					1
				</label>
				<label class="btn btn-select radius-custom-circle value-select">
					<input type="radio" name="amount_bedroom" class="hidden radio-select" value="two">
					2
				</label>
				<label class="btn btn-select radius-custom-circle value-select">
					<input type="radio" name="amount_bedroom" class="hidden radio-select" value="three">
					3
				</label>
				<label class="btn btn-select radius-custom-circle value-select">
					<input type="radio" name="amount_bedroom" class="hidden radio-select" value="four">
					4
				</label>
				<label class="btn btn-select radius-custom value-select">
					<input type="radio" name="amount_bedroom" class="hidden radio-select" value="more_than_four">
					มากกว่า 4
				</label>
			</div>

			<label class="bold">ห้องน้ำ</label>
			<div class="form-group row-expand justify-content-between radio-container">
				<label class="btn btn-select radius-custom value-select">
					<input type="radio" name="amount_bahtroom" class="hidden radio-select" value="unknown">
					ไม่ระบุ
				</label>
				<label class="btn btn-select radius-custom-circle value-select">
					<input type="radio" name="amount_bahtroom" class="hidden radio-select" value="one">
					1
				</label>
				<label class="btn btn-select radius-custom-circle value-select">
					<input type="radio" name="amount_bahtroom" class="hidden radio-select" value="two">
					2
				</label>
				<label class="btn btn-select radius-custom-circle value-select">
					<input type="radio" name="amount_bahtroom" class="hidden radio-select" value="three">
					3
				</label>
				<label class="btn btn-select radius-custom-circle value-select">
					<input type="radio" name="amount_bahtroom" class="hidden radio-select" value="four">
					4
				</label>
				<label class="btn btn-select radius-custom value-select">
					<input type="radio" name="amount_bahtroom" class="hidden radio-select" value="more_than_four">
					มากกว่า 4
				</label>
			</div>

			<label class="bold">ห้องแม่บ้าน</label>
			<div class="form-group row-expand justify-content-between radio-container">
				<label class="btn btn-select radius-custom value-select">
					<input type="radio" name="amount_mate" class="hidden radio-select" value="unknown">
					ไม่ระบุ
				</label>
				<label class="btn btn-select radius-custom-circle value-select">
					<input type="radio" name="amount_mate" class="hidden radio-select" value="one">
					1
				</label>
				<label class="btn btn-select radius-custom-circle value-select">
					<input type="radio" name="amount_mate" class="hidden radio-select" value="two">
					2
				</label>
				<label class="btn btn-select radius-custom-circle value-select">
					<input type="radio" name="amount_mate" class="hidden radio-select" value="three">
					3
				</label>
				<label class="btn btn-select radius-custom-circle value-select">
					<input type="radio" name="amount_mate" class="hidden radio-select" value="four">
					4
				</label>
				<label class="btn btn-select radius-custom value-select">
					<input type="radio" name="amount_mate" class="hidden radio-select" value="more_than_four">
					มากกว่า 4
				</label>
			</div>
		</div>
		<div class="col-md-6 border-left">
			<label class="bold">ที่จอดรถ</label>
			<div class="form-group row-expand justify-content-between radio-container">
				<label class="btn btn-select radius-custom value-select">
					<input type="radio" name="amount_parking" class="hidden radio-select" value="unknown">
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

			<label class="bold">จำนวนชั้น</label>
			<div class="form-group row-expand justify-content-between radio-container">
				<label class="btn btn-select radius-custom value-select">
					<input type="radio" name="amount_floor" class="hidden radio-select" value="unknown">
					ไม่ระบุ
				</label>
				<label class="btn btn-select radius-custom-circle value-select">
					<input type="radio" name="amount_floor" class="hidden radio-select" value="one">
					1
				</label>
				<label class="btn btn-select radius-custom-circle value-select">
					<input type="radio" name="amount_floor" class="hidden radio-select" value="two">
					2
				</label>
				<label class="btn btn-select radius-custom-circle value-select">
					<input type="radio" name="amount_floor" class="hidden radio-select" value="three">
					3
				</label>
				<label class="btn btn-select radius-custom-circle value-select">
					<input type="radio" name="amount_floor" class="hidden radio-select" value="four">
					4
				</label>
				<label class="btn btn-select radius-custom value-select">
					<input type="radio" name="amount_floor" class="hidden radio-select" value="more_than_four">
					มากกว่า 4
				</label>
			</div>

			<label class="bold">จำนวนลิฟท์</label>
			<div class="form-group row-expand justify-content-between radio-container">
				<label class="btn btn-select radius-custom value-select">
					<input type="radio" name="amount_lift" class="hidden radio-select" value="unknown">
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
	</div>

	<div class="row">
		<div class="mt-3 col-md-4">
			<h6><b>% ที่จอดรถ</b></h6>
			<input id="parking" name="parking" type="text" class="form-control border-2" placeholder="กรุณาใส่เฉพาะตัวเลข">
		</div>
		<div class="mt-3 col-md-4">
			<h6><b>ตึกที่อยู่</b></h6>
			<input id="addr_building" name="addr_building" type="text" class="form-control border-2" placeholder="ตัวอย่างเช่น A1">
		</div>
		<div class="mt-3 col-md-4">
			<h6><b>ชั้นที่อยู่</b></h6>
			
			<input id="addr_floor" name="addr_floor" type="text" class="form-control border-2" placeholder="กรุณาใส่เฉพาะตัวเลข">
		</div>

		<div class="mt-3 col-md-4">
			<h6><b>ปีสร้างเสร็จ (ค.ศ.)</b></h6>
			<select class="form-control border-2 custom-select" name="year_finish" id="year_finish">
				<option value=""></option>
			</select>
		</div>
		<div class="mt-3 col-md-4">
			<h6><b>หันหน้าไปทิศ</b></h6>
			<select class="form-control border-2 custom-select" name="TiSS" id="TiSS">
				<option value="">ทิศเหนือ</option>
				<option value="">ทิศใต้</option>
				<option value="">ทิศตะวันออก</option>
				<option value="">ทิศตะวันตก</option>
			</select>
		</div>
		<div class="mt-3 col-md-4">
			<h6><b>บ้านใหม่</b></h6>
			<div class="row">
				<div class="mt-3 col-md-6">
					<div class="custom-control custom-radio">
						<input type="radio" name="house" class="custom-control-input" id="chk-old">
						<label class="custom-control-label" for="chk-old">ไม่ใช่</label>
					</div>
				</div>
				<div class="mt-3 col-md-6">
					<div class="custom-control custom-radio">
						<input type="radio" name="house" class="custom-control-input" id="chk-new">
						<label class="custom-control-label" for="chk-new">ใช่</label>
					</div>
				</div>
			</div>
		</div>

		<div class="mt-3 col-md-4">
			<h6><b>เปิดรับตัวแทนอสังหา (นายหน้า)</b></h6>
			<div class="row">
				<div class="col-md-6">
					<div class="custom-control custom-radio">
						<input type="radio" name="agent" class="custom-control-input" id="agent-y">
						<label class="custom-control-label" for="agent-y">เปิดรับ</label>
					</div>
				</div>
				<div class="col-md-6">
					<div class="custom-control custom-radio">
						<input type="radio" name="agent" class="custom-control-input" id="agent-n">
						<label class="custom-control-label" for="agent-n">ไม่เปิดรับ</label>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="z-template" id="rent-template">
	<div class="row mt-3">
		<div class="col-md-6">
			<label class="bold" for="realty_type">เลือกประเภทอสังหา<span class="text-danger"> *</span></label>
			<select class="form-control custom-select" name="realty_type" id="realty_type">
				<option value="">บ้าน</option>
				<option value="">คอนโด</option>
				<option value="">คอนโด</option>
				<option value="">คอนโด</option>
			</select>
		</div>
	</div>

	<div class="row ">
		<div class="col-md-6 mt-3">
			<label class="bold" for="topic_th">หัวข้อประกาศ (ภาษาไทย)</label>
			<input id="topic_th" name="topic_th" type="text" class="form-control border rounded" placeholder="หัวข้อประกาศ">
		</div>
		<div class="col-md-6 mt-3">
			<label class="bold" for="topic_en">หัวข้อประกาศ (ภาษาอังกฤษ)</label>
			<input id="topic_en" name="topic_en" type="text" class="form-control border rounded" placeholder="หัวข้อประกาศ">
		</div>
	</div>

	<div class="row mt-3">
		<div class="col-md-4 align-self-end">
			<label class="bold" for="asset_code">รหัสทรัพย์สิน</label>
			<input id="asset_code" name="asset_code" type="text" class="form-control border rounded" placeholder="รหัสทรัพย์สิน(สำหรับตัวแทนอสังหา)">
		</div>
		<div class="col-md-8 align-self-end">
			<label for="project_mention" class="bold">อ้างอิงโครงการ<span class="smaller-90 font-weight-normal">
					หากอ้างอิงโครงการ ระบบแสดงลิงค์โครงการ
					ในใบประกาศของท่านเพื่อเพิ่มโอกาสในการขายหรือปล่อยเช่า</span></label>
			<select class="custom-select form-control" name="project_mention" id="project_mention">
				<option disabled>ค้นหาชื่อโครงการ</option>
				<option value="">ชื่อโครงการ</option>
				<option value="">ชื่อโครงการ</option>
			</select>
		</div>
	</div>

	<div class="row mt-3">
		<div class="col-md-4">
			<label for="price_sale_advert" class="bold">ราคาประกาศgเช่ารายเดือน (บาท)<span class="text-danger"> *</span></label>
			<input id="price_sale_advert" name="price_sale_advert" type="number" class="form-control" placeholder="กรุณาใส่เฉพาะตัวเลข">
		</div>
		<div class="col-md-4">
			<label for="price_rental_advert" class="bold">ราคาประกาศเช่ารายวัน (บาท/เดือน)<span class="text-danger"> *</span></label>
			<input id="price_rental_advert" name="price_rental_advert" type="number" class="form-control" placeholder="กรุณาใส่เฉพาะตัวเลข">
		</div>
	</div>

	<div class="row">
		<div class="col-md-4 mt-3">
			<label class="bold">สถานะ</label>
			<div class="custom-control custom-radio">
				<input type="checkbox" class="custom-control-input" id="rent_status" name="rent_status">
				<label class="custom-control-label" for="rent_status">ปัจจุบันมีผู้เช่าอยู่</label>
			</div>
		</div>
		<div class="col-md-4 mt-3">
			<label for="price_rental_now" class="bold">ราคาเช่าปัจจุบัน (บาท/เดือน)</label>
			<input type="number" class="form-control" id="price_rental_now" name="price_rental_now" required>
		</div>
		<div class="col-md-4 mt-3">
			<label for="expired_contract" class="bold">วันที่หมดสัญญา</label>
			<div class="input-group">
				<div class="input-group-prepend">
					<div class="input-group-text"><i class="far fa-calendar"></i></div>
				</div>
				<input type="date" class="form-control" id="expired_contract" name="expired_contract" required>
			</div>
		</div>
	</div>

	<div class="row">
		<div class="col-md-3 align-self-md-end mt-3">
			<label for="area_size" class="bold">ขนาดที่ดิน</label>
			<div class="form-inline ">
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
		<div class="col-md-3 align-self-md-end">
			<label for="area_to_use" class="bold">พื้นที่ใช้สอย (ตร.ม.) <span class="text-danger"> *</span></label>
			<div class="form-inline">
				<input type="text" class="form-control w-75" name="area_to_use" placeholder="กรุณาใส่เฉพาะตัวเลข"><span class="ml-2">ไร่</span>
			</div>
		</div>
	</div>

	<div class="row mt-3">
		<div class="col-md-6">
			<label class="bold">ห้องนอน</label>
			<div class="form-group row-expand justify-content-between radio-container">
				<label class="btn btn-select radius-custom value-select">
					<input type="radio" name="amount_bedroom" class="hidden radio-select" value="unknown" checked>
					ไม่ระบุ
				</label>
				<label class="btn btn-select radius-custom-circle value-select">
					<input type="radio" name="amount_bedroom" class="hidden radio-select" value="one">
					1
				</label>
				<label class="btn btn-select radius-custom-circle value-select">
					<input type="radio" name="amount_bedroom" class="hidden radio-select" value="two">
					2
				</label>
				<label class="btn btn-select radius-custom-circle value-select">
					<input type="radio" name="amount_bedroom" class="hidden radio-select" value="three">
					3
				</label>
				<div class="btn btn-select radius-custom inline" style="width:100px;">
					<input type="number" name="" id="" class="text-center form-control-custom">
				</div>
			</div>

			<label class="bold">ห้องนอนที่ 1</label>
			<div class="form-group">
				<div class="row">
					<div class="col-6">
						<span class="bold">0 เตียง</span>
					</div>
					<div class="col-6 text-right">
						<a href="#">
							<button class="btn btn-select radius-custom active">เพิ่มเตียง</button>
						</a>
					</div>
				</div>
				<hr class="bg-dark-50">
			</div>
			<label class="bold">ห้องนอนที่ 2</label>
			<div class="form-group">
				<div class="row">
					<div class="col-6">
						<span class="bold">0 เตียง</span>
					</div>
					<div class="col-6 text-right">
						<a href="#">
							<button class="btn btn-select radius-custom active">เพิ่มเตียง</button>
						</a>
					</div>
				</div>
				<hr class="bg-dark-50">
			</div>
			<label class="bold">ห้องนอนที่ 3</label>
			<div class="form-group">
				<div class="row">
					<div class="col-6">
						<span class="bold">0 เตียง</span>
					</div>
					<div class="col-6 text-right">
						<a href="#">
							<button class="btn btn-select radius-custom active">เพิ่มเตียง</button>
						</a>
					</div>
				</div>
				<hr class="bg-dark-50">
			</div>
			<div class="row">
				<div class="col-12 text-center">
					<a href="#" class="smaller-90 text-secondary">ห้องนอนต่อไป <i class="fa fa-angle-down"></i></a>
				</div>
			</div>
		</div>
		<div class="col-md-6 border-left">
			<label class="bold">ห้องน้ำ</label>
			<div class="form-group row-expand justify-content-between radio-container">
				<label class="btn btn-select radius-custom value-select">
					<input type="radio" name="amount_bahtroom" class="hidden radio-select" value="unknown" checked>
					ไม่ระบุ
				</label>
				<label class="btn btn-select radius-custom-circle value-select">
					<input type="radio" name="amount_bahtroom" class="hidden radio-select" value="one">
					1
				</label>
				<label class="btn btn-select radius-custom-circle value-select">
					<input type="radio" name="amount_bahtroom" class="hidden radio-select" value="two">
					2
				</label>
				<label class="btn btn-select radius-custom-circle value-select">
					<input type="radio" name="amount_bahtroom" class="hidden radio-select" value="three">
					3
				</label>
				<label class="btn btn-select radius-custom-circle value-select">
					<input type="radio" name="amount_bahtroom" class="hidden radio-select" value="four">
					4
				</label>
				<label class="btn btn-select radius-custom value-select">
					<input type="radio" name="amount_bahtroom" class="hidden radio-select" value="more_than_four">
					มากกว่า 4
				</label>
			</div>

			<label class="bold">ห้องแม่บ้าน</label>
			<div class="form-group row-expand justify-content-between radio-container">
				<label class="btn btn-select radius-custom value-select">
					<input type="radio" name="amount_mate" class="hidden radio-select" value="unknown" checked>
					ไม่ระบุ
				</label>
				<label class="btn btn-select radius-custom-circle value-select">
					<input type="radio" name="amount_mate" class="hidden radio-select" value="one">
					1
				</label>
				<label class="btn btn-select radius-custom-circle value-select">
					<input type="radio" name="amount_mate" class="hidden radio-select" value="two">
					2
				</label>
				<label class="btn btn-select radius-custom-circle value-select">
					<input type="radio" name="amount_mate" class="hidden radio-select" value="three">
					3
				</label>
				<label class="btn btn-select radius-custom-circle value-select">
					<input type="radio" name="amount_mate" class="hidden radio-select" value="four">
					4
				</label>
				<label class="btn btn-select radius-custom value-select">
					<input type="radio" name="amount_mate" class="hidden radio-select" value="more_than_four">
					มากกว่า 4
				</label>
			</div>

			<label class="bold">จำนวนชั้น</label>
			<div class="form-group row-expand justify-content-between radio-container">
				<label class="btn btn-select radius-custom value-select">
					<input type="radio" name="amount_floor" class="hidden radio-select" value="unknown" checked>
					ไม่ระบุ
				</label>
				<label class="btn btn-select radius-custom-circle value-select">
					<input type="radio" name="amount_floor" class="hidden radio-select" value="one">
					1
				</label>
				<label class="btn btn-select radius-custom-circle value-select">
					<input type="radio" name="amount_floor" class="hidden radio-select" value="two">
					2
				</label>
				<label class="btn btn-select radius-custom-circle value-select">
					<input type="radio" name="amount_floor" class="hidden radio-select" value="three">
					3
				</label>
				<label class="btn btn-select radius-custom-circle value-select">
					<input type="radio" name="amount_floor" class="hidden radio-select" value="four">
					4
				</label>
				<label class="btn btn-select radius-custom value-select">
					<input type="radio" name="amount_floor" class="hidden radio-select" value="more_than_four">
					มากกว่า 4
				</label>
			</div>

			<label class="bold">จำนวนลิฟ</label>
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
	</div>

	<div class="row mt-3">
		<div class="col-md-4">
			<label for="parking" class="bold">ที่จอดรถ</label>
			<input id="parking" name="parking" type="text" class="form-control" placeholder="กรุณาใส่เฉพาะตัวเลข">
		</div>
		<div class="col-md-4">
			<label for="floor_address" class="bold">ชั้นที่อยู่</label>
			<input id="floor_address" name="floor_address" type="text" class="form-control" placeholder="กรุณาใส่เฉพาะตัวเลข">
		</div>
		<div class="col-md-4">
			<label for="year_builded" class="bold">ปีที่สร้างเสร็จ (ค.ศ.)</label>
			<input id="year_builded" name="year_builded" type="text" class="form-control" placeholder="2560">
		</div>
	</div>

	<div class="row mt-3">
		<div class="col-md-4">
			<label for="direction" class="bold">หันหน้าไปทิศ</label>
			<select class="form-control custom-select" name="direction" id="direction">
				<option value="unknown">ไม่ระบุ</option>
				<option value="north">ทิศเหนือ</option>
				<option value="south">ทิศใต้</option>
				<option value="east">ทิศตะวันออก</option>
				<option value="west">ทิศตะวันตก</option>
			</select>
		</div>
		<div class="col-md-4">
			<label class="bold">บ้านใหม่</label>
			<div class="row">
				<div class="col-md-6">
					<div class="custom-control custom-radio">
						<input type="radio" name="check_new_home" class="custom-control-input" id="old-home" value="no" checked required>
						<label class="custom-control-label" for="old-home">ไม่ใช่</label>
					</div>
				</div>
				<div class="col-md-6">
					<div class="custom-control custom-radio">
						<input type="radio" name="check_new_home" class="custom-control-input" id="new-home" value="yes">
						<label class="custom-control-label" for="new-home">ใช่</label>
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-4">
			<label class="bold">เปิดรับตัวแทนอสังหา (นายหน้า)</label>
			<div class="row">
				<div class="col-md-6">
					<div class="custom-control custom-radio">
						<input type="radio" name="agent_realty_request" class="custom-control-input" id="request" value="yes" checked
						 required>
						<label class="custom-control-label" for="request">เปิดรับ</label>
					</div>
				</div>
				<div class="col-md-6">
					<div class="custom-control custom-radio">
						<input type="radio" name="agent_realty_request" class="custom-control-input" id="no-request" value="no">
						<label class="custom-control-label" for="no-request">ไม่เปิดรับ</label>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="row mt-3">
		<div class="col-12">
			<h5 class="text-info font-weight-bold">ข้อกำหนดเพิ่มเติม</h5>
			<hr class="bg-dark-50">
		</div>

		<div class="col-12">
			<label class="bold">ข้อกำหนดเพิ่มเติม</label>
		</div>
		<div class="col-md-12 mt-3 condition-container">
			<button class="btn btn-condition dash btn-block btn-add-condition">+ เพิ่มเติม </button>
		</div>
	</div>
</div>

<div class="z-template" id="sell-rent-template">
	<div class="row mt-3">
		<div class="col-md-6">
			<label class="bold" for="realty_type">เลือกประเภทอสังหา<span class="text-danger"> *</span></label>
			<select class="form-control custom-select" name="realty_type" id="realty_type">
				<option value="">บ้าน</option>
				<option value="">คอนโด</option>
				<option value="">คอนโด</option>
				<option value="">คอนโด</option>
			</select>
		</div>
	</div>

	<div class="row mt-3">
		<div class="col-md-6">
			<label class="bold" for="topic_th">หัวข้อประกาศ (ภาษาไทย)</label>
			<input id="topic_th" name="topic_th" type="text" class="form-control border rounded" placeholder="หัวข้อประกาศ">
		</div>
		<div class="col-md-6">
			<label class="bold" for="topic_en">หัวข้อประกาศ (ภาษาอังกฤษ)</label>
			<input id="topic_en" name="topic_en" type="text" class="form-control border rounded" placeholder="หัวข้อประกาศ">
		</div>
	</div>

	<div class="row mt-3">
		<div class="col-md-4 align-self-end">
			<label class="bold" for="asset_code">รหัสทรัพย์สิน</label>
			<input id="asset_code" name="asset_code" type="text" class="form-control border rounded" placeholder="รหัสทรัพย์สิน(สำหรับตัวแทนอสังหา)">
		</div>
		<div class="col-md-8 align-self-end">
			<label for="project_mention" class="bold">อ้างอิงโครงการ<span class="smaller-90 font-weight-normal">
					หากอ้างอิงโครงการ ระบบแสดงลิงค์โครงการ
					ในใบประกาศของท่านเพื่อเพิ่มโอกาสในการขายหรือปล่อยเช่า</span></label>
			<select class="custom-select form-control" name="project_mention" id="project_mention">
				<option disabled>ค้นหาชื่อโครงการ</option>
				<option value="">ชื่อโครงการ</option>
				<option value="">ชื่อโครงการ</option>
			</select>
		</div>
	</div>

	<div class="row mt-3">
		<div class="col-md-4">
			<label for="price_sale_advert" class="bold">ราคาประกาศขาย (บาท)<span class="text-danger"> *</span></label>
			<input id="price_sale_advert" name="price_sale_advert" type="number" class="form-control" placeholder="กรุณาใส่เฉพาะตัวเลข">
		</div>
		<div class="col-md-4">
			<label for="price_rental_advert" class="bold">ราคาประกาศเช่ารายเดือน (บาท/เดือน)<span class="text-danger"> *</span></label>
			<input id="price_rental_advert" name="price_rental_advert" type="number" class="form-control" placeholder="กรุณาใส่เฉพาะตัวเลข">
		</div>
	</div>

	<div class="row mt-3">
		<div class="col-md-4">
			<label class="bold">สถานะ</label>
			<div class="custom-control custom-radio">
				<input type="checkbox" class="custom-control-input" id="rent_status" name="rent_status">
				<label class="custom-control-label" for="rent_status">ปัจจุบันมีผู้เช่าอยู่</label>
			</div>
		</div>
		<div class="col-md-4">
			<label for="price_rental_now" class="bold">ราคาเช่าปัจจุบัน (บาท/เดือน)</label>
			<input type="number" class="form-control" id="price_rental_now" name="price_rental_now" required>
		</div>
		<div class="col-md-4">
			<label for="expired_contract" class="bold">วันที่หมดสัญญา</label>
			<div class="input-group">
				<div class="input-group-prepend">
					<div class="input-group-text"><i class="far fa-calendar"></i></div>
				</div>
				<input type="date" class="form-control" id="expired_contract" name="expired_contract" required>
			</div>
		</div>
	</div>

	<div class="row mt-3">
		<div class="col-md-3 align-self-md-end">
			<label for="area_size" class="bold">ขนาดที่ดิน</label>
			<div class="form-inline">
				<input type="text" name="area_size_1" class="form-control w-75" placeholder="กรุณาใส่เฉพาะตัวเลข"><span class="ml-2">ไร่</span>
			</div>
		</div>
		<div class="col-md-3 align-self-md-end">
			<div class="form-inline">
				<input type="text" name="area_size_2" class="form-control w-75" placeholder="กรุณาใส่เฉพาะตัวเลข"><span class="ml-2">งาน</span>
			</div>
		</div>
		<div class="col-md-3 align-self-md-end">
			<div class="form-inline">
				<input type="text" name="area_size_3" class="form-control w-75" placeholder="กรุณาใส่เฉพาะตัวเลข"><span class="ml-2">ตารางวา</span>
			</div>
		</div>
		<div class="col-md-3 align-self-md-end">
			<label for="area_to_use" class="bold">พื้นที่ใช้สอย (ตร.ม.) <span class="text-danger"> *</span></label>
			<div class="form-inline">
				<input type="text" class="form-control w-75" name="area_to_use" placeholder="กรุณาใส่เฉพาะตัวเลข"><span class="ml-2">ไร่</span>
			</div>
		</div>
	</div>

	<div class="row mt-3">
		<div class="col-md-6">
			<label class="bold">ห้องนอน</label>
			<div class="form-group row-expand justify-content-between radio-container">
				<label class="btn btn-select radius-custom value-select">
					<input type="radio" name="amount_bedroom" class="hidden radio-select" value="unknown" checked>
					ไม่ระบุ
				</label>
				<label class="btn btn-select radius-custom-circle value-select">
					<input type="radio" name="amount_bedroom" class="hidden radio-select" value="one">
					1
				</label>
				<label class="btn btn-select radius-custom-circle value-select">
					<input type="radio" name="amount_bedroom" class="hidden radio-select" value="two">
					2
				</label>
				<label class="btn btn-select radius-custom-circle value-select">
					<input type="radio" name="amount_bedroom" class="hidden radio-select" value="three">
					3
				</label>
				<div class="btn btn-select radius-custom inline" style="width:100px;">
					<input type="number" name="" id="" class="text-center form-control-custom">
				</div>
			</div>

			<label class="bold">ห้องนอนที่ 1</label>
			<div class="form-group">
				<div class="row">
					<div class="col-6">
						<span class="bold">0 เตียง</span>
					</div>
					<div class="col-6 text-right">
						<a href="">
							<button class="btn btn-select radius-custom active">เพิ่มเตียง</button>
						</a>
					</div>
				</div>
				<hr class="bg-dark-50">
			</div>
			<label class="bold">ห้องนอนที่ 2</label>
			<div class="form-group">
				<div class="row">
					<div class="col-6">
						<span class="bold">0 เตียง</span>
					</div>
					<div class="col-6 text-right">
						<a href="">
							<button class="btn btn-select radius-custom active">เพิ่มเตียง</button>
						</a>
					</div>
				</div>
				<hr class="bg-dark-50">
			</div>
			<label class="bold">ห้องนอนที่ 3</label>
			<div class="form-group">
				<div class="row">
					<div class="col-6">
						<span class="bold">0 เตียง</span>
					</div>
					<div class="col-6 text-right">
						<a href="">
							<button class="btn btn-select radius-custom active">เพิ่มเตียง</button>
						</a>
					</div>
				</div>
				<hr class="bg-dark-50">
			</div>
			<div class="row">
				<div class="col-12 text-center">
					<a href="#" class="smaller-90 text-secondary">ห้องนอนต่อไป <i class="fa fa-angle-down"></i></a>
				</div>
			</div>
		</div>
		<div class="col-md-6 border-left">
			<label class="bold">ห้องน้ำ</label>
			<div class="form-group row-expand justify-content-between radio-container">
				<label class="btn btn-select radius-custom value-select">
					<input type="radio" name="amount_bahtroom" class="hidden radio-select" value="unknown" checked>
					ไม่ระบุ
				</label>
				<label class="btn btn-select radius-custom-circle value-select">
					<input type="radio" name="amount_bahtroom" class="hidden radio-select" value="one">
					1
				</label>
				<label class="btn btn-select radius-custom-circle value-select">
					<input type="radio" name="amount_bahtroom" class="hidden radio-select" value="two">
					2
				</label>
				<label class="btn btn-select radius-custom-circle value-select">
					<input type="radio" name="amount_bahtroom" class="hidden radio-select" value="three">
					3
				</label>
				<label class="btn btn-select radius-custom-circle value-select">
					<input type="radio" name="amount_bahtroom" class="hidden radio-select" value="four">
					4
				</label>
				<label class="btn btn-select radius-custom value-select">
					<input type="radio" name="amount_bahtroom" class="hidden radio-select" value="more_than_four">
					มากกว่า 4
				</label>
			</div>

			<label class="bold">ห้องแม่บ้าน</label>
			<div class="form-group row-expand justify-content-between radio-container">
				<label class="btn btn-select radius-custom value-select">
					<input type="radio" name="amount_mate" class="hidden radio-select" value="unknown" checked>
					ไม่ระบุ
				</label>
				<label class="btn btn-select radius-custom-circle value-select">
					<input type="radio" name="amount_mate" class="hidden radio-select" value="one">
					1
				</label>
				<label class="btn btn-select radius-custom-circle value-select">
					<input type="radio" name="amount_mate" class="hidden radio-select" value="two">
					2
				</label>
				<label class="btn btn-select radius-custom-circle value-select">
					<input type="radio" name="amount_mate" class="hidden radio-select" value="three">
					3
				</label>
				<label class="btn btn-select radius-custom-circle value-select">
					<input type="radio" name="amount_mate" class="hidden radio-select" value="four">
					4
				</label>
				<label class="btn btn-select radius-custom value-select">
					<input type="radio" name="amount_mate" class="hidden radio-select" value="more_than_four">
					มากกว่า 4
				</label>
			</div>

			<label class="bold">จำนวนชั้น</label>
			<div class="form-group row-expand justify-content-between radio-container">
				<label class="btn btn-select radius-custom value-select">
					<input type="radio" name="amount_floor" class="hidden radio-select" value="unknown" checked>
					ไม่ระบุ
				</label>
				<label class="btn btn-select radius-custom-circle value-select">
					<input type="radio" name="amount_floor" class="hidden radio-select" value="one">
					1
				</label>
				<label class="btn btn-select radius-custom-circle value-select">
					<input type="radio" name="amount_floor" class="hidden radio-select" value="two">
					2
				</label>
				<label class="btn btn-select radius-custom-circle value-select">
					<input type="radio" name="amount_floor" class="hidden radio-select" value="three">
					3
				</label>
				<label class="btn btn-select radius-custom-circle value-select">
					<input type="radio" name="amount_floor" class="hidden radio-select" value="four">
					4
				</label>
				<label class="btn btn-select radius-custom value-select">
					<input type="radio" name="amount_floor" class="hidden radio-select" value="more_than_four">
					มากกว่า 4
				</label>
			</div>

			<label class="bold">จำนวนลิฟ</label>
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
	</div>

	<div class="row mt-3">
		<div class="col-md-4">
			<label for="parking" class="bold">ที่จอดรถ</label>
			<input id="parking" name="parking" type="text" class="form-control" placeholder="กรุณาใส่เฉพาะตัวเลข">
		</div>
		<div class="col-md-4">
			<label for="floor_address" class="bold">ชั้นที่อยู่</label>
			<input id="floor_address" name="floor_address" type="text" class="form-control" placeholder="กรุณาใส่เฉพาะตัวเลข">
		</div>
		<div class="col-md-4">
			<label for="year_builded" class="bold">ปีที่สร้างเสร็จ (ค.ศ.)</label>
			<input id="year_builded" name="year_builded" type="text" class="form-control" placeholder="2560">
		</div>
	</div>

	<div class="row mt-3">
		<div class="col-md-4">
			<label for="direction" class="bold">หันหน้าไปทิศ</label>
			<select class="form-control custom-select" name="direction" id="direction">
				<option value="unknown">ไม่ระบุ</option>
				<option value="north">ทิศเหนือ</option>
				<option value="south">ทิศใต้</option>
				<option value="east">ทิศตะวันออก</option>
				<option value="west">ทิศตะวันตก</option>
			</select>
		</div>
		<div class="col-md-4">
			<label class="bold">บ้านใหม่</label>
			<div class="row">
				<div class="col-md-6">
					<div class="custom-control custom-radio">
						<input type="radio" name="check_new_home" class="custom-control-input" id="old-home" value="no" checked required>
						<label class="custom-control-label" for="old-home">ไม่ใช่</label>
					</div>
				</div>
				<div class="col-md-6">
					<div class="custom-control custom-radio">
						<input type="radio" name="check_new_home" class="custom-control-input" id="new-home" value="yes">
						<label class="custom-control-label" for="new-home">ใช่</label>
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-4">
			<label class="bold">เปิดรับตัวแทนอสังหา (นายหน้า)</label>
			<div class="row">
				<div class="col-md-6">
					<div class="custom-control custom-radio">
						<input type="radio" name="agent_realty_request" class="custom-control-input" id="request" value="yes" checked
						 required>
						<label class="custom-control-label" for="request">เปิดรับ</label>
					</div>
				</div>
				<div class="col-md-6">
					<div class="custom-control custom-radio">
						<input type="radio" name="agent_realty_request" class="custom-control-input" id="no-request" value="no">
						<label class="custom-control-label" for="no-request">ไม่เปิดรับ</label>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="row mt-3">
		<div class="col-12">
			<h5 class="text-info font-weight-bold">ข้อกำหนดการเช่า</h5>
			<hr class="bg-dark-50">
		</div>
	</div>

	<div class="row">
		<div class="col-md-4">
			<label class="bold">เลี้ยงสัตว์</label>
			<div class="row">
				<div class="col-md-6">
					<div class="custom-control custom-radio">
						<input type="radio" name="pet_allow" class="custom-control-input" id="pet_allowed" value="allowed" checked
						 required>
						<label class="custom-control-label" for="pet_allowed">ไม่ได้</label>
					</div>
				</div>
				<div class="col-md-6">
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
				<div class="col-md-6">
					<div class="custom-control custom-radio">
						<input type="radio" name="smoke_allow" class="custom-control-input" id="smoke_allowed" value="allowed" checked
						 required>
						<label class="custom-control-label" for="smoke_allowed">ไม่ได้</label>
					</div>
				</div>
				<div class="col-md-6">
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
				<div class="col-md-6">
					<div class="custom-control custom-radio">
						<input type="radio" name="internet_install_allow" class="custom-control-input" id="internet_install_allowed"
						 value="allowed" checked required>
						<label class="custom-control-label" for="internet_install_allowed">ไม่ได้</label>
					</div>
				</div>
				<div class="col-md-6">
					<div class="custom-control custom-radio">
						<input type="radio" name="internet_install_allow" class="custom-control-input" value="not-allowed" id="internet_install_not_allowed">
						<label class="custom-control-label" for="internet_install_not_allowed">ได้</label>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="row mt-3">
		<div class="col-12">
			<h5 class="text-info font-weight-bold">ข้อกำหนดเพิ่มเติม</h5>
			<hr class="bg-dark-50">
		</div>

		<div class="col-12">
			<label class="bold">ข้อกำหนดเพิ่มเติม</label>
		</div>
		<div class="col-md-12 mt-3 condition-container">
			<button class="btn btn-condition dash btn-block btn-add-condition">+ เพิ่มเติม </button>
		</div>
	</div>
</div>

<div id="condition-template" class="z-template">
	<div class="col-md-12 my-3  condition-parents btn-block">
		<span class="condition-contain"><i class="fa fa-circle smaller-50 align-middle"></i>
			<input type="text" name="" id="" class="form-check-inline form-control form-control-sm w-75">
			<a class="fa fa-trash text-danger smaller-70 align-middle delete-condition btn-remove-condition"></a>
		</span>
	</div>
</div>