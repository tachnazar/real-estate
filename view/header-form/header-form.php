<style>
  @media (max-width: 1199px) {
    #navbar-top {
      display: none;
    }
  }
</style>
<?php
  $pagename = '';
  if(PAGE_NAME == 'realty'){
    $pagename = 'ลงประกาศอสังหาฯ';
  }elseif(PAGE_NAME == 'dormitory'){
    $pagename = 'ลงประกาศหอพัก / อพาร์ทเม้นท์';
  }elseif(PAGE_NAME == 'project'){
    $pagename = 'ลงประกาศโครงการ';
  }elseif(PAGE_NAME == 'owner'){
    $pagename = 'ลงประกาศเจ้าของโครงการ';
  }elseif(PAGE_NAME == 'realty_agent'){
    $pagename = 'ฟอร์มตัวแทนอสังหาฯ';
  }elseif(PAGE_NAME == 'entrepreneur'){
    $pagename = 'ลงประกาศผู้ประกอบการ';
  }elseif(PAGE_NAME == 'contractsale'){
    $pagename = 'ลงประกาศขายสัญญาหอพัก';
  }
  ?>

<div class="row pt-3 pb-3 pb-xl-5">
  <div class="col-12 align-right desktop-only mb-3">
    <button class="btn btn-success btn-sm text-white radius-custom"><i class="fas fa-bullhorn mr-2"></i>ลงประกาศกับเรา</button>
    <button class="btn btn-success btn-sm text-white radius-custom"><i class="fas fa-bullhorn mr-2"></i>ลงโฆษณากับเรา</button>
  </div>
  <div class="col-12 d-flex justify-content-center form-header">
    <a href="index.php" class="btn-prev">
      <i class="fas fa-angle-left text-primary"></i>
    </a>
    <h5 class="text-primary mb-0">
      <b><?php echo $pagename; ?></b>
    </h5>
  </div>
</div>

<div class="row align-items-center pb-3">
  <div class="col-12">
    <h5 class="text-primary"><b>ส่งเอกสารยืนยันตัวตน</b></h5>
    <hr class="bg-dark-50">
  </div>
  <div class="col-lg-6 col-xl-4 mb-2 ">
    <div class="border-1 bg-transparent p-3 d-flex align-items-center verify-box">
      <div>
        <img src="images/icon/id-card-verify.png" alt="" height="40px">
        <img src="images/icon/police-verify.png" alt="" height="40px">
      </div>
      <div class="pl-3 text-success bold d-flex flex-column">
        <span>ประกาศคุณยืนยันตัวตนแล้ว</span>
        <span>ประกาศคุณมีความน่าเชื่อถือ</span>
      </div>
    </div>
  </div>
  <div class="col-lg-2 col-xl-1">
    <a href="#">
      <button class="btn btn-success btn-block radius-custom">ยันยืน</button>
    </a>
  </div>
</div>