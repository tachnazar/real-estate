<div class="col-12 mt-3">
	<h6 class="bold">รูปแบบธุรกิจ<span class="text-danger"> *</span></h6>
</div>

<div class="col-12">
	<div class="row">
		<div class="col-md-3 mt-3">
			<div class="custom-control custom-radio">
				<input type="radio" class="custom-control-input" id="croporation" value="croporation" name="type_person">
				<label class="custom-control-label text-muted bold" for="croporation">นิติบุคคล</label>
			</div>
		</div>
		<div class="col-md-3 mt-3">
			<div class="custom-control custom-radio">
				<input type="radio" class="custom-control-input" id="personal" value="personal" name="type_person">
				<label class="custom-control-label text-muted bold" for="personal">บุคคลธรรมดา</label>
			</div>
		</div>
	</div>
</div>


<div class="col-md-6 mt-3 ">
	<label for="name_corp_th"><b>ชื่อบริษัท/ชื่อบุคคล</b> (ภาษาไทย)<span class="text-danger"> *</span></label>
	<input id="name_corp_th" name="name_corp_th" type="text" class="form-control border-2  rounded" placeholder="ชื่อ">
</div>
<div class="col-md-6 mt-3">
	<label for="name_corp_en"><b>ชื่อบริษัท/ชื่อบุคคล</b> (ภาษาอังกฤษ)</label>
	<input id="name_corp_en" name="name_corp_en" type="text" class="form-control border-2  rounded" placeholder="Name">
</div>

<div class="col-12 mt-3">
	<b>ประเภทงาน</b> <span class="smaller-90">(เลือกประเภทงานที่คุณให้บริการ สามารถเลือกได้มากกว่า 1)</span>
</div>

<div class="col-12">
	<button class="btn btn-sm btn-secondary border-2 rounded mt-2">เครื่องใช้ไฟฟ้า</button>
	<button class="btn btn-sm btn-secondary border-2 rounded mt-2">แอร์</button>
	<button class="btn btn-sm btn-secondary border-2 rounded mt-2">ทีวี</button>
</div>


<div class="card p-2 border-0">
	<div class="row justify-content-between">
		<div class="col-md-4 mt-3">
			<div class="row">
				<div class="col-12">
					<a href="#">
						<button class="btn btn-lg bg-white rounded border w-100 p-2 mt-2">
							<img src="images/icon-btn-1.png" alt="">
							<span class="smaller-80 text-muted">สินค้าและวัสดุ<i class="fas fa-plus ml-3"></i> </span>
						</button>
					</a>
				</div>
				<div class="col-12 mt-3">
					<a href="#">
						<button class="btn btn-lg rounded border p-2 w-100  bg-select-cus mt-2">
							<img src="images/icon-btn-2.png" alt="">
							<span class="smaller-80 text-muted">ซ่อม-สร้าง-บริการ<i class="fas fa-minus ml-3"></i> </span>
						</button>
					</a>
				</div>
			</div>
		</div>
		<div class="col-md-4 mt-3">
			<div class="row border-1 py-3">
				<div class="col-lg-6 mt-2">
					<button class="btn bg-white border-2 btn-block">ระบบน้ำ</button>
				</div>
				<div class="col-lg-6 mt-2">
					<button class="btn bg-white border-2 btn-block">ระบบไฟ</button>
				</div>
				<div class="col-lg-6 mt-2">
					<button class="btn bg-white border-2 btn-block">เครื่องใช้ไฟฟ้า</button>
				</div>
				<div class="col-lg-6 mt-2">
					<button class="btn bg-white border-2 btn-block">โครงสร้าง</button>
				</div>
				<div class="col-lg-6 mt-2">
					<button class="btn bg-white border-2 btn-block">บริการและซ่อมบำรุง</button>
				</div>
				<div class="col-lg-6 mt-2">
					<button class="btn bg-white border-2 btn-block">เบ็ดเตล็ด</button>
				</div>
			</div>
		</div>
		<div class="col-md-3 mt-3 ">
			<div class="row py-3 border-1">
				<div class="col-lg-6 mt-2">
					<button class="btn bg-white border-2 btn-block">แอร์</button>
				</div>
				<div class="col-lg-6 mt-2">
					<button class="btn bg-white border-2 btn-block">พัดลม</button>
				</div>
				<div class="col-lg-6 mt-2">
					<button class="btn bg-white border-2 btn-block">ทีวี</button>
				</div>
			</div>
		</div>
	</div>
</div>


<div class="col-md-6 mt-3">
	<label for="exp"><b>ประสบการณ์และความเชี่ยวชาญ</b></label>
	<textarea class="form-control border-2" style="resize:none" name="exp" id="exp" rows="5" placeholder="ประสบการณ์และความเชี่ยวชาญ"></textarea>
</div>
<div class="col-md-6 mt-3">
	<label for="warr"><b>การรับประกัน</b> </label>
	<textarea class="form-control border-2" style="resize:none" name="warr" id="warr" rows="5" placeholder="การรับประกัน"></textarea>
</div>