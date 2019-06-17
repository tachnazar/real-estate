<div id="index-page" class="container">
	<?php include_once 'view/header-form/header-form.php'; ?>
	<div class="row mt-3">
		<div class="col-12">
			<h5 class="text-info font-weight-bold">ข้อมูลทั่วไป</h5>
			<hr class="bg-dark-50">
		</div>
	</div>
	<?php 
			include_once 'view/form-realty/content/general_info.php';
		?>

	<div class="row mt-3">
		<div class="col-12">
			<h5 class="text-info font-weight-bold">สิ่งอำนวยความสะดวก</h5>
			<hr class="bg-dark-50">
		</div>
		<?php 
			include_once 'view/form-realty/content/comfortable.php';
		?>
	</div>

	<div class="row mt-3">
		<div class="col-12">
			<h5 class="text-info font-weight-bold">โปรโมชั่น</h5>
			<hr class="bg-dark-50">
		</div>
		<?php 
			include_once 'view/form-realty/content/promotion.php';
		?>
	</div>

	<div class="row mt-3">
		<div class="col-12">
			<h5 class="text-info font-weight-bold">วีดีโอและรูปภาพ</h5>
			<hr class="bg-dark-50">
		</div>
		<?php 
			include_once 'view/form-realty/content/img_upload.php';
		?>
	</div>
	<div class="row mt-3">
		<div class="col-12">
			<h5 class="text-info font-weight-bold">ที่อยู่</h5>
			<hr class="bg-dark-50">
		</div>
		<?php 
			include_once 'view/form-realty/content/addr.php';
		?>
	</div>
	<div class="row mt-3">
		<div class="col-12">
			<h5 class="text-info font-weight-bold">ข้อมูลติดต่อ</h5>
			<hr class="bg-dark-50">
		</div>
		<?php 
			include_once 'view/form-realty/content/contact_info.php';
		?>
	</div>

	<div class="row mt-3">
		<div class="col-md-12 mt-3 mb-5 align-center">
			<a href="#">
				<button class="btn btn-success px-3 radius-custom">ส่งการแก้ไข</button>
			</a>
		</div>
	</div>

</div>

<script>
	$(document).ready(function () {
		$('input[name="rental_type"]').change(function () {
			var value = $(this).val();
			if (value == 'sell') {
				var html = System.compileTemplate('sell-template');
				$('#realty').html(html);
			} else if (value == 'rent') {
				var html = System.compileTemplate('rent-template');
				$('#realty').html(html);
			} else if (value == 'sell_rent') {
				var html = System.compileTemplate('sell-rent-template');
				$('#realty').html(html);
			}
		});
		$('input[name="rental_type"]:checked').trigger('change');

		$(document).on('click', '.btn-add-design', function (e) {
			var $this = $(this);
			$design_home_container = $('.design-home-container');
			var html = System.compileTemplate('home-extend');
			$design_home_container.prepend(html);
		});

		$(document).on('click', '.btn-remove-design-home', function (e) {
			var $this = $(this);
			var $container = $this.parents('.design-home-parents');
			$container.remove();
		});

		$(document).on('change', '.radio-select', function () {
			var $this = $(this);
			var $scope = $this.parents('.radio-container');
			var $button = $this.parents('.value-select');
			$scope.find('.value-select').removeClass('active');
			$button.addClass('active');
		});

		$(document).on('touchstart click', '.image-upload .btn-change-image', function (e) {
			var $container = $(this).parents('.image-upload');
			var $file_select = $container.find('.img-upload-file');
			$file_select.trigger('click');
		});

		$(document).on('change', '.image-upload .img-upload-file', function (e) {
			var $container = $(this).parents('.image-upload');
			var $btn_remove = $container.find('.btn-remove-image');
			var $img = $container.find('.image-preview');
			var $btn_change_image = $container.find('.btn-change-image');
			var $imagebase64 = $container.find('input.image-base64');
			var status = System.readImage(this, function (file_event) {
				$img.attr('src', file_event.target.result);
				$imagebase64.val(file_event.target.result);
				$btn_remove.removeClass('d-none');
				$btn_change_image.addClass('has-image');
			});
			if (status != 'success') {
				$img.attr('src', '');
				$imagebase64.val('');
				$btn_remove.addClass('d-none');
				$btn_change_image.removeClass('has-image');
			}
		});

		$(document).on('touchstart click', '.image-upload .btn-remove-image', function (e) {
			var $container = $(this).parents('.image-upload');
			var $file_select = $container.find('.img-upload-file');
			$file_select.val('');
			$file_select.trigger('change');
		});
	});
</script>