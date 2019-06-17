<div class="col-12 mt-3">
	<h6><b>ประเภทตัวแทน</b><span class="text-danger"> *</span></h6>
</div>

<div class="col-12 mt-3 agent-container">
	<div class="custom-control custom-radio inline">
		<input type="radio" name="agent" class="custom-control-input" id="Agent" checked>
		<label class="custom-control-label" for="Agent"><b>บริษัทตัวแทน</b></label>
	</div>
	<div class="custom-control custom-radio inline">
		<input type="radio" name="agent" class="custom-control-input" id="Agent-Free">
		<label class="custom-control-label" for="Agent-Free"><b>ตัวแทนอิสระ</b></label>
	</div>
</div>

<script>
$(document).ready(function () {
	$(document).on('change', 'input[name="agent"]', function(){
		var $this = $(this);
		var $scope = $this.parents('.agent-container');
		var $contain = $this.parents('.custom-radio');
		$scope.find('.custom-radio').removeClass('text-success');
		$contain.addClass('text-success');
	});
	$('input[name="agent"]:checked').trigger('change');
});
</script>

<div class="col-md-6 mt-3">
	<label for="name_th"><b>ชื่อบริษัท</b> (ภาษาไทย)<span class="text-danger"> *</span></label>
	<input id="name_th" name="name_th" type="text" class="form-control border-2 rounded" placeholder="ชื่อ">
</div>
<div class="col-md-6 mt-3">
	<label for="name_en"><b>ชื่อบริษัท</b> (ภาษาอังกฤษ)</label>
	<input id="name_en" name="name_en" type="text" class="form-control border-2 rounded" placeholder="Name">
</div>

<div class="col-md-6 mt-3">
	<label for="about_th"><b>เกี่ยวกับเรา</b> (ภาษาไทย)<span class="text-danger"> *</span></label>
	<textarea style="resize:none;" class="form-control border-2  rounded" id="about_th" name="about_th" rows="5"
	 placeholder="รายละเอียด"></textarea>
</div>
<div class="col-md-6 mt-3">
	<label for="about_en"><b>เกี่ยวกับเรา</b> (ภาษาอังกฤษ)</label>
	<textarea style="resize:none;" class="form-control border-2  rounded" id="about_en" name="about_en" rows="5"
	 placeholder="Detail"></textarea>
</div>
</div>