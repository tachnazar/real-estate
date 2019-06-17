<?php
  $user = User::get_current_user();
  
  System::debug_control(); // do not remove

  echo '<div class="lnw-content">'; // do not remove

  $list_page_class = '';
  if (PAGE_NAME == 'list') {
    $list_page_class = 'list-page';
  }
?>

<nav id="navbar-top" class="navbar navbar-expand-lg navbar-light bg-white shadow-2 fixed-top <?php echo $list_page_class; ?>">
  <div class="container">
    <a class="navbar-brand desktop-only" href="index.php">
      <div class="text-center py-1">
        <img src="images/logo-nayoo.png" height="50px">
      </div>
    </a>
    <div class="navbar-menu">
      <button id="navbar-toggle" class="mobile-only btn-hamburger">
        <span></span>
        <span></span>
        <span></span>
      </button>
      <select class="custom-select smaller-80 desktop-only">
        <option>ขอนแก่น</option>
      </select>
      <div class="navbar-menu-center">
        <ul class="navbar-nav">
          <li class="nav-item nav-top-search">
            <div class="dropdown">
              <button type="button" class="btn btn-search dropdown-toggle text-primary smaller-90" data-toggle="dropdown">
                <span><i class="icon-custom icon-search"></i> ค้นหา</span>
              </button>
              <div class="dropdown-menu dropdown-menu-custom">
                <div class="dropdown-item">
                  <div class="dropdown-title text-primary">
                    <span class="dropdown-title-icon">
                      <i class="fas fa-home"></i>
                    </span>
                    <span>อสังหาริมทรัพย์</span>
                  </div>
                  <ul class="list">
                    <li>
                      <a href="#">ซื้อโครงการใหม่</a>
                    </li>
                    <li>
                      <a href="#">ซื้อมือสอง</a>
                    </li>
                    <li>
                      <a href="#">เช่าอสังหาฯ / หอพัก</a>
                    </li>
                    <li>
                      <a href="#">นายหน้า</a>
                    </li>
                    <li>
                      <a href="#">เจ้าของโครงการ</a>
                    </li>
                  </ul>
                </div>
                <div class="dropdown-item">
                  <div class="dropdown-title text-primary">
                    <span class="dropdown-title-icon">
                      <i class="fas fa-home"></i>
                    </span>
                    <span>สินค้าและวัสดุ</span>
                  </div>
                  <ul class="list">
                    <li>
                      <a href="#">เครื่องใช้ไฟฟ้า</a>
                    </li>
                    <li>
                      <a href="#">เฟอร์นิเจอร์และของแต่งบ้าน</a>
                    </li>
                    <li>
                      <a href="#">วัสดุก่อสร้าง</a>
                    </li>
                    <li>
                      <a href="#">ต้นไม้และสวน</a>
                    </li>
                    <li>
                      <a href="#">โคมไฟและหลอดไฟ</a>
                    </li>
                  </ul>
                </div>
                <div class="dropdown-item">
                  <div class="dropdown-title text-primary">
                    <span class="dropdown-title-icon">
                      <i class="fas fa-home"></i>
                    </span>
                    <span>ซ่อม-สร้าง-บริการ</span>
                  </div>
                  <ul class="list">
                    <li>
                      <a href="#">ระบบน้ำ</a>
                    </li>
                    <li>
                      <a href="#">ระบบไฟ</a>
                    </li>
                    <li>
                      <a href="#">เครื่องใช้ไฟฟ้า</a>
                    </li>
                    <li>
                      <a href="#">โครงสร้าง</a>
                    </li>
                    <li>
                      <a href="#">บริการและซ่อมบำรุง</a>
                    </li>
                    <li>
                      <a href="#">เบ็ดเตล็ด</a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </li>
          <li class="nav-item nav-top-inform">
            <div class="dropdown">
              <button type="button" class="btn btn-bullhorn dropdown-toggle text-success smaller-90" data-toggle="dropdown">
                <span><i class="icon-custom icon-bullhorn"></i> แจ้งความต้องการ</span>
              </button>
              <div class="dropdown-menu dropdown-menu-custom">
                <div class="dropdown-item">
                  <div class="dropdown-title text-success">
                    <span class="dropdown-title-icon">
                      <i class="fas fa-home"></i>
                    </span>
                    <span>อสังหาริมทรัพย์</span>
                  </div>
                  <ul class="list">
                    <li>
                      <a href="#">ซื้อโครงการใหม่</a>
                    </li>
                    <li>
                      <a href="#">ซื้อมือสอง</a>
                    </li>
                    <li>
                      <a href="#">เช่าอสังหาฯ / หอพัก</a>
                    </li>
                    <li>
                      <a href="#">นายหน้า</a>
                    </li>
                    <li>
                      <a href="#">เจ้าของโครงการ</a>
                    </li>
                  </ul>
                </div>
                <div class="dropdown-item">
                  <div class="dropdown-title text-success">
                    <span class="dropdown-title-icon">
                      <i class="fas fa-home"></i>
                    </span>
                    <span>สินค้าและวัสดุ</span>
                  </div>
                  <ul class="list">
                    <li>
                      <a href="#">เครื่องใช้ไฟฟ้า</a>
                    </li>
                    <li>
                      <a href="#">เฟอร์นิเจอร์และของแต่งบ้าน</a>
                    </li>
                    <li>
                      <a href="#">วัสดุก่อสร้าง</a>
                    </li>
                    <li>
                      <a href="#">ต้นไม้และสวน</a>
                    </li>
                    <li>
                      <a href="#">โคมไฟและหลอดไฟ</a>
                    </li>
                  </ul>
                </div>
                <div class="dropdown-item">
                  <div class="dropdown-title text-success">
                    <span class="dropdown-title-icon">
                      <i class="fas fa-home"></i>
                    </span>
                    <span>ซ่อม-สร้าง-บริการ</span>
                  </div>
                  <ul class="list">
                    <li>
                      <a href="#">ระบบน้ำ</a>
                    </li>
                    <li>
                      <a href="#">ระบบไฟ</a>
                    </li>
                    <li>
                      <a href="#">เครื่องใช้ไฟฟ้า</a>
                    </li>
                    <li>
                      <a href="#">โครงสร้าง</a>
                    </li>
                    <li>
                      <a href="#">บริการและซ่อมบำรุง</a>
                    </li>
                    <li>
                      <a href="#">เบ็ดเตล็ด</a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </li>
        </ul>
        <ul class="navbar-nav desktop-only">
          <li class="nav-item">
            <a class="nav-link smaller-90">ถามกูรู</a>
          </li>
          <li class="nav-item">
            <a class="nav-link smaller-90">ข่าวและโปรโมชั่น</a>
          </li>
        </ul>
      </div>
      <div class="desktop-only">
        <ul class="ml-auto navbar-nav">
          <li class="nav-item dropdown d-flex align-items-center">
            <a class="nav-link dropdown-toggle custom-arrow smaller-90" href="#" role="button" data-toggle="dropdown">
              <img src="images/flag/th.svg" width="19px" class="mr-1">
              <span>ภาษาไทย</span>
            </a>
            <div class="dropdown-menu dropdown-menu-right smaller-90">
              <a class="dropdown-item" href="#">
                <img src="images/flag/us.svg" width="19px" class="mr-1">
                <span>ภาษาอังกฤษ</span>
              </a>
            </div>
          </li>
          <?php if(User::is_login()) { ?>
          <li class="nav-item">
            <a class="btn-icon-bell" href="#">
              <small>5</small>
              <img src="images/icon/bell.png" height="25px">
            </a>
          </li>
          <li class="nav-item d-flex align-items-center dropdown">
            <a class="nav-link dropdown-toggle custom-arrow smaller-90" href="#" role="button" data-toggle="dropdown">
              <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/c/c4/Mark_Zuckerberg_F8_2018_Keynote_%28cropped%29.jpg/220px-Mark_Zuckerberg_F8_2018_Keynote_%28cropped%29.jpg" class="avatar-img">
              <span>นายแดง มีดี</span>
            </a>
            <div class="dropdown-menu dropdown-menu-right smaller-90">
              <a class="dropdown-item" href="#">
                <span>ข้อมูลส่วนตัว</span>
              </a>
              <a class="dropdown-item" href="#">
                <span>ออกจากระบบ</span>
              </a>
            </div>
          </li>
          <?php } else { ?>
          <li class="nav-item d-flex align-items-center">
            <a href="" class="nav-link smaller-90">
              <i class="fa fa-sign-in"></i>
              เข้าสู่ระบบ
            </a>
          </li>
          <?php } ?>
        </ul>
      </div>
      <a class="mobile-only btn-icon-bell" href="#">
        <small>5</small>
        <img src="images/icon/bell.png" height="30px">
      </a>
    </div>
  </div>
</nav>

<div class="sidebar-mobile-overlay"></div>
<div class="sidebar-mobile d-flex flex-column justify-content-between">
  <div class="sidebar-header p-3">
    <h4>
      <span class="text-primary smaller-90">All About</span>
      <span class="text-success smaller-90">Home</span>
      <small class="smaller-50">ครบเครื่อง เรื่องบ้าน</small>
    </h4>
    <hr>
    <?php if(User::is_login()) { ?>
    <div class="d-flex justify-content-center align-items-center" data-toggle="collapse" href="#profile-collapse">
      <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/c/c4/Mark_Zuckerberg_F8_2018_Keynote_%28cropped%29.jpg/220px-Mark_Zuckerberg_F8_2018_Keynote_%28cropped%29.jpg" class="avatar-img mr-2">
      <span>นายแดง มีดี</span>
    </div>
    <div class="collapse" id="profile-collapse">
      <hr>
      <div class="d-flex flex-column">
        <a class="text-primary" href="#">
          <span>ข้อมูลส่วนตัว</span>
        </a>
        <a class="text-primary" href="#">
          <span>ออกจากระบบ</span>
        </a>
      </div>
    </div>
    <?php } else { ?>
    <a class="btn btn-outline-primary radius-custom btn-block">เข้าสู่ระบบ</a>
    <?php } ?>
    <hr>
    <ul class="sidebar-menu">
      <li class="title">
        <i class="far fa-file-alt icon"></i> โครงการใหม่
      </li>
      <li>
        <a href="#">บ้านมือสอง</a>
      </li>
      <li>
        <a href="#">เช่าและหอพัก</a>
      </li>
      <li>
        <a href="#">ทำเนียบผู้ประกอบการ</a>
      </li>
      <li>
        <a href="#">แจ้งผู้ให้บริการ</a>
      </li>
      <li>
        <a href="#">ถามกรูรู</a>
      </li>
      <li>
        <a href="#">ข่าวและโปรโมชั่น</a>
      </li>
    </ul>
    <ul class="sidebar-menu">
      <li class="title">
        <i class="far fa-file-alt icon"></i> โครงการใหม่
      </li>
      <li>
        <a href="#">บ้านมือสอง</a>
      </li>
      <li>
        <a href="#">เช่าและหอพัก</a>
      </li>
      <li>
        <a href="#">ทำเนียบผู้ประกอบการ</a>
      </li>
      <li>
        <a href="#">แจ้งผู้ให้บริการ</a>
      </li>
      <li>
        <a href="#">ถามกรูรู</a>
      </li>
      <li>
        <a href="#">ข่าวและโปรโมชั่น</a>
      </li>
    </ul>
  </div>
  <div class="sidebar-footer d-flex flex-column">
    <a class="smaller-90 active">
      <img src="images/flag/th.svg" width="19px" class="mr-1">
      <span>ภาษาไทย</span>
    </a>
    <a class="smaller-90">
      <img src="images/flag/us.svg" width="19px" class="mr-1">
      <span>ภาษาอังกฤษ</span>
    </a>
  </div>
</div>

<script>
$(document).ready(function() {
  $navbar_toggle = $('#navbar-toggle');
  $sidebar_mobile = $('.sidebar-mobile');
  $sidebar_mobile_overlay = $('.sidebar-mobile-overlay');
  $navbar_toggle.on('click', function() {
    $sidebar_mobile.toggleClass('show');
    $sidebar_mobile_overlay.toggleClass('show');
  });
  $sidebar_mobile_overlay.on('click', function() {
    $sidebar_mobile.toggleClass('show');
    $sidebar_mobile_overlay.toggleClass('show');
  });

  // scroll
  $(window).scroll(function() {
    $('.list-page').removeClass('has-shadow');
    if ($(this).scrollTop() >= 122) {
      $('.list-page').addClass('has-shadow');
    }
  });
});
</script>