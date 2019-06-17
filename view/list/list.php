<div class="main-content">
  <div class="nav-top-custom desktop-only">
    <div class="container d-flex align-items-center justify-content-between py-1">
      <ol class="breadcrumb smaller-80">
        <li class="breadcrumb-item"><a href="index.php">หน้าแรก</a></li>
        <li class="breadcrumb-item active">โครงการใหม่</li>
      </ol>
      <div>
        <button class="btn btn-success btn-sm text-white radius-custom"><i class="fas fa-bullhorn mr-2"></i>ลงประกาศกับเรา</button>
        <button class="btn btn-success btn-sm text-white radius-custom"><i class="fas fa-bullhorn mr-2"></i>ลงโฆษณากับเรา</button>
      </div>
    </div>
  </div>

  <div class="filter-box position-relative desktop-only" style="z-index: 1;">
    <div class="container d-flex align-items-center justify-content-between py-3">
      <div class="d-flex flex-1 border-right pr-2 align-items-center">
        <input type="text" class="form-control w-auto mr-2" placeholder="ค้นหาจากจังหวัด, ตำบล">
        <div class="select-custom-icon-left">
          <i class="fas fa-map-marker-alt icon"></i>
          <select class="form-control w-auto custom-select mr-2">
            <option>สถานที่</option>
          </select>
        </div>
        <select class="form-control w-auto custom-select mr-2">
          <option>ประเภทงาน</option>
        </select>
        <select class="form-control w-auto custom-select mr-2">
          <option>ไม่จำกัดราคา</option>
        </select>
        <select class="form-control w-auto custom-select mr-2">
          <option>ห้องนอน</option>
        </select>
        <a href="#">
          <img src="images/icon/plus-circle.png" width="25px">
        </a>
      </div>
      <div class="d-flex align-items-center pl-2">
        <a href="#" class="mr-2">
          <img src="images/icon/map-marker.png" width="25px">
        </a>
        <div class="dropdown">
          <button type="button" class="btn btn-outline-primary radius-custom mr-2 custom-arrow dropdown-toggle" data-toggle="dropdown">
            <span>เรียงลำดับ</span>
          </button>
          <div class="dropdown-menu dropdown-menu-right smaller-90">
            <a href="#" class="dropdown-item">xxx</a>
          </div>
        </div>
        <button class="btn btn-primary btn-search radius-custom custom-arrow">
          <span><i class="icon-custom icon-search"></i> ค้นหา</span>
        </button>
      </div>
    </div>
  </div>

  <div class="filter-box-mobile mobile-only bg-primary pl-2 pl-lg-3 py-2 pr-1">
    <div class="d-flex align-items-center justify-content-between">
      <h4 class="text-white title mb-0">โครงการใหม่</h4>
      <div class="d-flex">
        <a class="btn btn-default ml-1">
          <i class="fas fa-list text-black-50"></i> กรอง
        </a>
        <a class="btn btn-default ml-1">
          <i class="fas fa-list text-black-50"></i> เรียง
        </a>
        <a class="btn btn-default text-primary ml-1">
          <i class="fas fa-th-large"></i> รายการ
        </a>
      </div>
    </div>
  </div>

  <div class="async-content py-4" data-url="view/list/async.list.php" id="place_list" style="background-color: #fcfcfc;"></div>
</div>