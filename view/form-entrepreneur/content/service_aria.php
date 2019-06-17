<div class="col-12 mt-3">
  <p class="bg-muted w-50">*พื่นที่บริการคือ
    พื่นที่ที่ผู้ประกอบการสามารถส่งสินค้าหรือเข้าไปให้บริการในพื้นที่ได้</p>
</div>
<?php
    $get_json = file_get_contents('view/province_json/province.json');
    $province_list = json_decode($get_json);
  ?>
<div class="col-md-4 mt-3">
  <select class="form-control custom-select" name="province_service">
    <?php 
      foreach($province_list as $province){
        echo '<option value="'.$province->province_id.'">'.$province->province_name.'</option>';
      }
      ?>
  </select>
</div>
<div class="col-md-12">
  <div class="row p-3">
    <div class="col-12 p-4  border-1">
      <div class="row">
        <?php 
            foreach($province_list as $amphurs){
          ?>
        <div class="col-custom">
          <button class="btn btn-lg btn-block border-2 bg-white mt-2">ชื่อจังหวัด</button>
        </div>
        <?php } ?>
      </div>
    </div>
  </div>
</div>

<script>
  $(document).ready(function () {

  });
</script>