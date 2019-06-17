<div class="row mt-3">
	<div class="col-12">
		<h6 class="text-info"><b>ข้อกำหนดการเช่า</b></h6>
		<hr class="bg-dark-50">
	</div>
	<div class="col-md-4"><b>เลี้ยงสัตว์</b>
		<div class="row mt-2">
			<div class="col-md-6">
				<div class="custom-control custom-checkbox">
					<input type="checkbox" class="custom-control-input" id="pet-no">
					<label class="custom-control-label" for="pet-no">ไม่ได้</label>
				</div>
			</div>
			<div class="col-md-6">
				<div class="custom-control custom-checkbox">
					<input type="checkbox" class="custom-control-input" id="pet-yes">
					<label class="custom-control-label" for="pet-yes">ได้</label>
				</div>
			</div>
		</div>
	</div>

	<div class="col-md-4"><b>อนุญาติให้สูบบุหรี่</b>
		<div class="row mt-2">
			<div class="col-md-6">
				<div class="custom-control custom-checkbox">
					<input type="checkbox" class="custom-control-input" id="smoke-no">
					<label class="custom-control-label" for="smoke-no">ไม่ได้</label>
				</div>
			</div>
			<div class="col-md-6">
				<div class="custom-control custom-checkbox">
					<input type="checkbox" class="custom-control-input" id="smoke-yes">
					<label class="custom-control-label" for="smoke-yes">ได้</label>
				</div>
			</div>
		</div>
	</div>

	<div class="col-md-4"><b>อนุญาตให้ติดตั้งอินเตอร์เน็ต</b>
		<div class="row mt-2">
			<div class="col-md-6">
				<div class="custom-control custom-checkbox">
					<input type="checkbox" class="custom-control-input" id="setnet-no">
					<label class="custom-control-label" for="setnet-no">ไม่ได้</label>
				</div>
			</div>
			<div class="col-md-6">
				<div class="custom-control custom-checkbox">
					<input type="checkbox" class="custom-control-input" id="setnet-yes">
					<label class="custom-control-label" for="setnet-yes">ได้</label>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="row">
	<div class="col-12 mt-3">
		<h6><b>ข้อกำหนดการเพิ่มเติม</b></h6>
		<div class="row rule-container my-3">
			<div class="col-lg-4 col-md-6 my-auto">
				<button class="btn btn-block border-3 bg-white text-muted btn-add-rule"><i class="fas fa-plus"></i> เพิ่ม</button>
			</div>
		</div>
	</div>
</div>

<div id="rule-template" class="z-template">
	<div class="col-lg-4 col-md-6 my-md-2 rule-parents">
		<span class="condition-contain"><i class="fa fa-circle smaller-50 align-middle"></i>
			<input type="text" name="" id="" class="form-check-inline form-control form-control-sm w-75">
			<a class="fa fa-trash text-danger smaller-70 align-middle delete-condition btn-remove-rule"></a></span>
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
</script>