<?php
if(! isset($no_pace)) {
  System::load_asset('assets/plugins/pace/css/pace.flattop.css');
  System::load_asset('assets/plugins/pace/js/pace.min.js');
}
// Bootstrap & Icon
System::load_asset('assets/css/bootstrap4.min.css');
System::load_asset('assets/plugins/fontawesome/css/all.min.css');

// Plugins
System::load_asset('assets/plugins/animate.css/animate.min.css');
System::load_asset('assets/plugins/sweetalert2/sweetalert2.css');
// System::load_asset('assets/plugins/typeahead/typeahead.css');
// System::load_asset('assets/plugins/datatables/DataTables-1.10.16/css/jquery.dataTables.min.css');
// System::load_asset('assets/plugins/datatables/Buttons-1.5.1/css/buttons.bootstrap4.min.css');
System::load_asset('assets/plugins/owl.carousel/css/owl.carousel.min.css');
System::load_asset('assets/plugins/owl.carousel/css/owl.theme.default.css');
// System::load_asset('assets/fullCalendar/fullcalendar.min.css');
// System::load_asset('assets/bootstrap-slider/css/bootstrap-slider.min.css');
System::load_asset('assets/plugins/lightbox2/lightbox.min.css');
// // System::load_asset('assets/air-datepicker/datepicker.min.css');
System::load_asset('assets/plugins/barrating/themes/css-stars.css');
// System::load_asset('assets/plugins/select2/select2.css');
// System::load_asset('assets/plugins/select2/select2-bootstrap.css');

// Core
System::load_asset('assets/plugins/toastr/toastr.min.css');
System::load_asset('assets/fonts/font.css');
System::load_asset(System::FONTS[System::get_font_config()]);
System::load_asset('assets/css/helper.css');
System::load_asset('assets/css/style.css');
System::load_asset('assets/css/custom.css');
System::load_asset('assets/css/custom-ble.css');
System::load_asset('assets/css/custom-nut.css');
System::load_asset('assets/js/jquery-3.2.1.min.js');
System::load_asset('assets/js/system.js');

?>
