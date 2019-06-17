/*                         _
                        _ooOoo_
                       o8888888o
                       88" . "88
                       (| -_- |)
                       O\  =  /O
                    ____/`---'\____
                  .'  \\|     |//  `.
                 /  \\|||  :  |||//  \
                /  _||||| -:- |||||_  \
                |   | \\\  -  /'| |   |
                | \_|  `\`---'//  |   |
                \  .-\__ '-. -'__/-.  /
              ___`. .'  /--.--\  '. .'__
           ."" '<  `.__\_<|>_/__.'  _>  \"".
          | | : `- \`. ;'. _/; .'/ /  -'  ; |
          \ \ `-.  \_\_`. _.' _/_/  -'  _-' /
===========`-.'___`-.__\ \___ / __.-'_.-'_.-'===========
       "อบัคยา ปรมาลาภา" - การไม่มีบัคเป็นลาภอันประเสริฐ
*/
var System = {
  helper: {
    DataTable: {}
  },
  global: {
    async_content: {}
  },
  template: {},
  settings: {
    pace_module: true,
    toastr_module: true
  },
  controller: {
    'number_format': function ($view, number) {
      number = parseFloat(number);
      System.view($view).update(number.toLocaleString());
    },
    'get_filename': function ($view, file_input) {
      if (!file_input.files || !file_input.files[0]) return 'ยังไม่ได้เลือกไฟล์';
      System.view($view).update(file_input.files[0].name);
    },
    'get_imagebase64': function ($view, file_input) {
      System.readImage(file_input, function (e) {
        System.view($view).update(e.target.result);
      });
    },
    'get_image_status': function ($view, file_input) {
      var status = (System.readImage(file_input) == 'sucess') ? true : false;
      System.view($view).update(status);
    },
    'convert_date_th': function ($view, date, short_format) {
      short_format = (typeof (short_format) != 'undefined') ? short_format : false;
      var months = 'มกราคม_กุมภาพันธ์_มีนาคม_เมษายน_พฤษภาคม_มิถุนายน_กรกฎาคม_สิงหาคม_กันยายน_ตุลาคม_พฤศจิกายน_ธันวาคม'.split('_');
      var monthsShort = 'ม.ค._ก.พ._มี.ค._เม.ย._พ.ค._มิ.ย._ก.ค._ส.ค._ก.ย._ต.ค._พ.ย._ธ.ค.'.split('_');
      var date = date.split('-');
      var year = (parseFloat(date[0]) + 543);
      date[1] = parseFloat(date[1]) - 1;
      var month = (!short_format) ? months[date[1]] : monthsShort[date[1]];
      var day = date[2];
      var format_date = day + ' ' + month + ' ' + year;
      System.view($view).update(format_date);
    },
    'convert_date_slash': function ($view, date) {
      var date = date.split('-');
      var year = date[0];
      var month = date[1];
      var day = date[2];
      var format_date = day + '/' + month + '/' + year;
      System.view($view).update(format_date);
    }
  }
};

System.helper.scrollTop = function () {
  return document.scrollTop || document.documentElement.scrollTop || document.body.scrollTop
}
System.helper.winHeight = function () {
  return window.innerHeight || document.documentElement.clientHeight;
}
System.helper.winWidth = function () {
  return window.innerWidth || document.documentElement.clientWidth;
}
System.helper.uid = function (prefix) {
  if (typeof (prefix) == 'undefined') prefix = '';
  return prefix + 'xxxxxxxxxxxxx'.replace(/[x]/g, function (c) {
    var r = Math.random() * 16 | 0,
      v = c == 'x' ? r : (r & 0x3 | 0x8);
    return v.toString(16);
  });
}

System.setupAjax = function () {
  // toggle Pace on akax start
  $(document).ajaxStart(function () {
    if (System.settings.pace_module && typeof (Pace) != 'undefined') {
      Pace.restart();
    }
  });
  // setup ajax
  $.ajaxSetup({
    type: 'POST',
    dataType: 'json',
    catch: false,
    error: function (xhr, status, error) {
      var message;
      if (xhr.status === 0) {
        message = 'Not connected.\nPlease verify your network connection.';
      } else if (xhr.status == 404) {
        message = 'The requested page not found. [404]';
      } else if (xhr.status == 500) {
        message = 'Internal Server Error [500].';
      } else if (status === 'parsererror') {
        message = 'Requested JSON parse failed.';
      } else if (status === 'timeout') {
        message = 'Time out error.';
      } else if (status === 'abort') {
        message = 'Ajax request aborted.';
      } else {
        message = 'Uncaught Error.\n' + xhr.responseText;
      }
      System.notification('error', message);
      console.log(xhr.responseText);
    }
  });
}

System.initTemplate = function ($scope) {
  if (typeof ($scope) == 'undefined') {
    $scope = $(document);
  }
  $scope.find('.z-template').each(function (index, el) {
    var $template = $(el);
    var id = $template.attr('id');
    if (id) {
      System.template[id] = $template.html();
      $template.remove();
    }
  });
}
System.compileTemplate = function (templateID, data) {
  if (typeof (System.template[templateID]) == 'undefined') {
    var $template = $('#' + templateID);
    if ($template.length > 0) {
      System.template[templateID] = $template.html();
      $template.remove();
    } else {
      console.error('Undefined Template ID: ' + templateID);
      return null;
    }
  }
  var html = System.template[templateID];
  for (var key in data) {
    if (typeof (data[key]) != 'undefined') {
      var re = new RegExp('{{' + key + '}}', 'g');
      html = html.replace(re, data[key]);
    }
  }
  return html;
}
System.helper.imgUrl = function (url) {
  return 'style="background-image: url(\'' + url + '\')"';
}
System.helper.imgSrc = function (url) {
  return 'src="' + url + '"';
}
System.helper.videoYoutube = function (code) {
  return 'src="https://www.youtube.com/embed/' + code + '"';
}
System.helper.td = function (html, customClass) {
  customClass = (typeof (customClass) != 'undefined') ? customClass : '';
  return '<td class="' + customClass + '">' + html + '</td>';
}
System.helper.tr = function (html, customClass) {
  customClass = (typeof (customClass) != 'undefined') ? customClass : '';
  return '<tr class="' + customClass + '">' + html + '</tr>';
}
System.helper.short_text = function (text, length) {
  length = (typeof (length) != 'undefined') ? length : 200;
  var raw_text = $(text).text();
  if (raw_text.length > length) {
    return raw_text.substring(0, length) + '...';
  } else {
    return raw_text;
  }
}

System.helper.DataTable.lengthMenu = [
  [10, 25, 50, 100, -1],
  [10, 25, 50, 100, 'ทั้งหมด']
];
System.helper.DataTable.language = {
  'decimal': '',
  'emptyTable': 'ไม่พบข้อมูล',
  'info': 'แสดงข้อมูลแถวที่ _START_ ถึง _END_ จากทั้งหมด _TOTAL_ แถว',
  'infoEmpty': 'ไม่พบข้อมูล',
  'infoFiltered': '(ค้นหาจากข้อมูลทั้งหมด _MAX_ แถว)',
  'infoPostFix': '',
  'thousands': ',',
  'lengthMenu': 'แสดง _MENU_ แถว',
  'loadingRecords': 'กำลังโหลด...',
  'processing': '<i class="fa fa-spinner fa-pulse"></i> กำลังประมวลผล...',
  'search': 'ค้นหา',
  'zeroRecords': 'ไม่พบข้อมูลที่ค้นหา',
  'paginate': {
    'first': '<i class="fa fa-step-backward"></i>',
    'last': '<i class="fa fa-step-forward"></i>',
    'previous': '<i class="fa fa-chevron-left"></i>',
    'next': '<i class="fa fa-chevron-right"></i>'
  },
  'aria': {
    'sortAscending': ': จัดเรียงจากน้อยไปมาก',
    'sortDescending': ': จัดเรียงจากมากไปน้อย'
  }
}

System.handleAnimation = function () {
  $(window).on('scroll', function () {
    $('.viewpoint-animate').each(function (index, el) {
      var $this = $(el);
      var rect = $this[0].getClientRects();
      var currTop = rect[0].top;
      var winHeight = window.innerHeight;
      var animationName = $this.data('animation');
      if (currTop < (winHeight * 0.95)) {
        $this.addClass(animationName + ' animated');
        $this.removeClass('viewpoint-animate');
      }
    });;
  });

  // $('.aniview').AniView({
  //   'animateThreshold': 50,
  //   'scrollPollInterval': 10
  // });
  $(window).scroll();
}

System.handleScrollTop = function () {
  // Back To Top
  var offset = 450;
  var duration = 500;
  var upToTop = $('.btn-to-top');

  if (upToTop) {
    $(window).on('scroll', function () {
      if (upToTop) {
        if ($(this).scrollTop() > offset) {
          upToTop.fadeIn(duration);
        } else {
          upToTop.fadeOut(duration);
        }
      }
    });

    upToTop.on('click', function (event) {
      event.preventDefault();
      $('html, body').animate({
        scrollTop: 0
      }, duration);
      return false;
    });
  }
}

System.handleEqualHeight = function (scope) {
  var setEqualHeight = debounce(function () {
    $(scope).each(function (idx, ele) {
      var $elements = $(ele).find('.eq-height');
      $elements.css('min-height', 'auto');
      var max_height = 0;

      for (var i = 0; i < $elements.length; i++) {
        var curr_height = $($elements[i]).outerHeight();
        if (i == 0) {
          max_height = curr_height;
        } else if (curr_height > max_height) {
          max_height = curr_height;
        }
      }
      $elements.css('min-height', max_height + 'px');
    });
  }, 250);

  setTimeout(function () {
    setEqualHeight();
    window.addEventListener('resize', setEqualHeight);
  });
}

// require smoothscroll.js
System.smoothScroll = function () {
  if (typeof (SmoothScroll) != 'undefined') {
    /* Scroll Like Mac*/
    SmoothScroll({
      keyboardSupport: false,
      animationTime: 300, // [ms]
      stepSize: 50 // [px]
    });
  }
}

System.handleLanguage = function () {
  var lang = Cookies.get('language');
  if (typeof (lang) != 'undefined') {
    System.switchLanguage(lang);
  } else {
    $('.lang-switch[data-default-lang="true"]').addClass('active');
  }

  $(document).on('click', '.lang-switch', function (e) {
    e.preventDefault();
    var lang = $(this).data('lang');
    if (typeof (lang) != 'undefined') {
      System.switchLanguage(lang);
    }
  });
}
System.switchLanguage = function (lang) {
  Cookies.set('language', lang);
  $('.lang-switch').removeClass('active');
  $('.lang-switch[data-lang="' + lang + '"]').addClass('active');
  $('.multi-language').each(function (index, el) {
    var $this = $(el);
    var text = $this.data('lang-' + lang);
    if (typeof (text) != 'undefined') {
      $this.html(text);
    }
  });
}
System.refreshLanguage = function () {
  var lang = Cookies.get('language');
  if (typeof (lang) != 'undefined') {
    System.switchLanguage(lang);
  }
}

System.helper.submitFlag = function () {
  var rd = Math.floor((Math.random() * 10000) + 1);
  return {
    'html': '<input name="flag" type="text" class="form-control" id="flag_' + rd + '" required="required" style="display:none;">',
    'id': '#flag_' + rd
  }
}
// require toastr.js
System.notification = function (type, message, options) {
  if (System.settings.toastr_module) {
    var progressbar = true;
    var position = 'toast-bottom-right';
    var timeout = 3;
    var exTimeout = 1;
    if (typeof (options) !== 'undefined') {
      progressbar = (typeof (options.progressbar) === 'undefined') ? progressbar : options.progressbar;
      position = (typeof (options.position) === 'undefined') ? position : options.position;
      timeout = (typeof (options.timeout) === 'undefined') ? timeout : options.timeout;
      exTimeout = (typeof (options.exTimeout) === 'undefined') ? exTimeout : options.exTimeout;
    }
    toastr.options.progressBar = progressbar;
    toastr.options.positionClass = position;
    toastr.options.timeOut = parseInt(timeout, 10) * 1000;
    toastr.options.extendedTimeOut = parseInt(exTimeout, 10) * 1000;
    if (type === 'info') {
      toastr.info(message);
    } else if (type === 'success') {
      toastr.success(message);
    } else if (type === 'warning') {
      toastr.warning(message);
    } else if (type === 'error') {
      toastr.error(message);
    }
  } else {
    alert(message);
  }
}
System.confirm = function (title, text, onOK, onCancel) {
  swal({
    title: title,
    text: text,
    type: 'question',
    showCancelButton: true,
    confirmButtonText: '<i class="fa fa-check"></i> ตกลง',
    cancelButtonText: '<i class="fa fa-times"></i> ยกเลิก',
    confirmButtonClass: 'btn btn-primary mr-2',
    cancelButtonClass: 'btn btn-link',
    buttonsStyling: false
  }).then(function () {
    if (typeof (onOK) === 'function') onOK();
  }, function (dismiss) {
    if (typeof (onCancel) === 'function') onCancel(dismiss);
  });
}

System.alert = function (title, text, onOK) {
  swal({
    title: title,
    text: text,
    type: 'warning',
    confirmButtonText: '<i class="fa fa-check"></i> ตกลง',
    confirmButtonClass: 'btn btn-primary',
    buttonsStyling: false
  }).then(function () {
    if (typeof (onOK) === 'function') onOK();
  }, function (dismiss) {
    if (typeof (onCancel) === 'function') onCancel(dismiss);
  });
}

System.readImage = function (fileInput, onSuccess) {
  if (!fileInput.files || !fileInput.files[0]) return false;
  var imgPath = $(fileInput)[0].value;
  var extn = imgPath.substring(imgPath.lastIndexOf('.') + 1).toLowerCase();

  if (extn == "gif" || extn == "png" || extn == "jpg" || extn == "jpeg") {
    if (typeof (FileReader) != "undefined") {
      var reader = new FileReader();
      reader.onload = function (e) {
        // get loaded data and render thumbnail.
        if (typeof (onSuccess) === 'function') onSuccess(e);
      };
      // read the image file as a data URL.
      reader.readAsDataURL(fileInput.files[0]);
      return 'success';
    } else {
      return 'not support';
    }
  } else {
    return 'invalid type';
  }
}

System.initTooltip = function () {
  $('.tooltip').remove();
  $('[data-toggle="tooltip"], .toggle-tooltip').tooltip({
    'container': 'body'
  });
}

System.detectIE = function () {
  /**
   * detect IE
   * returns version of IE or false, if browser is not Internet Explorer
   */
  var ua = window.navigator.userAgent;

  // Test values; Uncomment to check result …

  // IE 10
  // ua = 'Mozilla/5.0 (compatible; MSIE 10.0; Windows NT 6.2; Trident/6.0)';

  // IE 11
  // ua = 'Mozilla/5.0 (Windows NT 6.3; Trident/7.0; rv:11.0) like Gecko';

  // Edge 12 (Spartan)
  // ua = 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/39.0.2171.71 Safari/537.36 Edge/12.0';

  // Edge 13
  // ua = 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/46.0.2486.0 Safari/537.36 Edge/13.10586';

  var msie = ua.indexOf('MSIE ');
  if (msie > 0) {
    // IE 10 or older => return version number
    return parseInt(ua.substring(msie + 5, ua.indexOf('.', msie)), 10);
  }

  var trident = ua.indexOf('Trident/');
  if (trident > 0) {
    // IE 11 => return version number
    var rv = ua.indexOf('rv:');
    return parseInt(ua.substring(rv + 3, ua.indexOf('.', rv)), 10);
  }

  var edge = ua.indexOf('Edge/');
  if (edge > 0) {
    // Edge (IE 12+) => return version number
    return parseInt(ua.substring(edge + 5, ua.indexOf('.', edge)), 10);
  }

  // var safari = /^((?!chrome|android).)*safari/i.test(ua);
  // if(safari) {
  //   return 0;
  // }

  // other browser
  return false;
}

System.handleIE = function () {
  // Get IE or Edge browser version
  var version = System.detectIE();
  if (version === false) {
    // other browser
  } else if (version >= 12) {
    // ms edge
  } else {
    // ie 11 below
    swal({
      title: 'ตรวจพบบราวเซอร์รุ่นเก่า',
      html: 'กรุณาใช้บราวเซอร์รุ่นใหม่เพื่อประสิทธิภาพการใช้งานที่ดีกว่า',
      type: 'warning',
      confirmButtonText: '<i class="fa fa-chrome"></i> Download',
      confirmButtonClass: 'btn btn-primary',
      buttonsStyling: false
    }).then(function () {
      window.open('https://www.google.com/intl/th/chrome/', '_blank')
    }, function (dismiss) {});
  }
}

System.handleFocusModalInput = function () {
  $(document).on('click', '.toggle-modal', function (e) {
    e.preventDefault();
    var $this = $(this);
    var $target = $($this.data('target'));
    $target.modal();

    // auto fill modal input
    $params = $this.find('.modal-param');
    for (var i = 0; i < $params.length; i++) {
      $param = $params.eq(i);
      var key = $param.attr('name');
      var value = $param.val();
      var $target_input = $target.find('[name="' + key + '"]');
      $target_input.val(value);
      $target_input.trigger('change');
    }
  });

  $(document).on('shown.bs.modal', function (e) {
    var $modal = $(e.target);
    $(document).off('focusin.modal');
    $modal.find('[autofocus]').focus();
  });
}

System.handleConfirm = function () {
  $(document).on('click', '.toggle-confirm, [data-toggle="confirm"]', function (e) {
    var $this = $(this);
    var target = (typeof ($this.data('target')) != 'undefined') ? $this.data('target') : false;
    var $form = $this.parents('form');

    if (target != false && $(target).length > 0) {
      var $target = $(target);
      if ($target[0].checkValidity()) {
        e.preventDefault();
        System.confirm($this.data('message'), '', function () {
          $target.submit();
        }, function () {});
      }
    } else if ($form.length > 0) {
      if ($form[0].checkValidity()) {
        e.preventDefault();
        System.confirm($this.data('message'), '', function () {
          $form.submit();
        }, function () {});
      }
    } else {
      console.error('Toggle Confirm : Parent <form> not found.');
    }
  });
}

System.handleAlert = function () {
  $(document).on('click', '.toggle-alert, [data-toggle="alert"]', function (e) {
    e.preventDefault();
    var $this = $(this);
    System.alert('', $this.data('message'));
  });
}

System.initDatatablePlugin = function () {
  if (typeof (jQuery.fn.dataTable) != 'undefined') {
    jQuery.extend(jQuery.fn.dataTableExt.oSort, {
      "string-pre": function (a) {
        var text_weight = 0
        for (var i = 0; i < a.length; i++) {
          var multiply = Math.pow(10, (a.length - i - 1));
          if (!isNaN(parseFloat(a.charAt(i)))) {
            text_weight += (parseFloat(a.charAt(i)) * multiply);
          } else {
            text_weight += (a.charCodeAt(i) * multiply);
          }
        }

        return text_weight;
      },

      "string-asc": function (a, b) {
        return ((a < b) ? -1 : ((a > b) ? 1 : 0));
        return 0;
      },

      "string-desc": function (a, b) {
        return ((a < b) ? 1 : ((a > b) ? -1 : 0));
      }
    });

    jQuery.extend(jQuery.fn.dataTableExt.oSort, {
      "date-thai-pre": function (a) {
        a = $.parseHTML(a);
        a = $.trim($(a).text());
        a = a.replace("กุมภาพันธ์", "01");
        a = a.replace("มกราคม", "02");
        a = a.replace("มีนาคม", "03");
        a = a.replace("เมษายน", "04");
        a = a.replace("พฤษภาคม", "05");
        a = a.replace("มิถุนายน", "06");
        a = a.replace("กรกฎาคม", "07");
        a = a.replace("สิงหาคม", "08");
        a = a.replace("กันยายน", "09");
        a = a.replace("ตุลาคม", "10");
        a = a.replace("พฤศจิกายน", "11");
        a = a.replace("ธันวาคม", "12");
        tmp = a.split(" ");
        if (tmp.length == 3) {
          t_y = parseFloat(tmp[2]);
          t_m = parseFloat(tmp[1]);
          t_d = parseFloat(tmp[0]);
          a = new Date(t_y, t_m, t_d).getTime();
        } else if (tmp.length > 3) {
          t_y = parseFloat(tmp[2]);
          t_m = parseFloat(tmp[1]);
          t_d = parseFloat(tmp[0]);
          a = new Date(t_y, t_m, t_d).getTime();

          tmp_t = tmp[3].split(":");
          if (tmp_t.length > 0) a = a + (parseFloat(tmp_t[0]) * 3600);
          if (tmp_t.length > 1) a = a + (parseFloat(tmp_t[1]) * 60);
          if (tmp_t.length > 2) a = a + (parseFloat(tmp_t[2]));
        }
        return (a == "-" || a === "") ? 0 : a;
      },

      "date-thai-asc": function (a, b) {
        return ((a < b) ? -1 : ((a > b) ? 1 : 0));
        return 0;
      },

      "date-thai-desc": function (a, b) {
        return ((a < b) ? 1 : ((a > b) ? -1 : 0));
      }
    });

    jQuery.extend(jQuery.fn.dataTableExt.oSort, {
      "date-thai-short-pre": function (a) {
        a = $.parseHTML(a);
        a = $.trim($(a).text());
        a = a.replace("ม.ค.", "01");
        a = a.replace("ก.พ.", "02");
        a = a.replace("มี.ค.", "03");
        a = a.replace("เม.ย.", "04");
        a = a.replace("พ.ค.", "05");
        a = a.replace("มิ.ย.", "06");
        a = a.replace("ก.ค.", "07");
        a = a.replace("ส.ค.", "08");
        a = a.replace("ก.ย.", "09");
        a = a.replace("ต.ค.", "10");
        a = a.replace("พ.ย.", "11");
        a = a.replace("ธ.ค.", "12");
        tmp = a.split(" ");
        if (tmp.length == 3) {
          t_y = parseFloat(tmp[2]);
          t_m = parseFloat(tmp[1]);
          t_d = parseFloat(tmp[0]);
          a = new Date(t_y, t_m, t_d).getTime();
        } else if (tmp.length > 3) {
          t_y = parseFloat(tmp[2]);
          t_m = parseFloat(tmp[1]);
          t_d = parseFloat(tmp[0]);
          a = new Date(t_y, t_m, t_d).getTime();

          tmp_t = tmp[3].split(":");
          if (tmp_t.length > 0) a = a + (parseFloat(tmp_t[0]) * 3600);
          if (tmp_t.length > 1) a = a + (parseFloat(tmp_t[1]) * 60);
          if (tmp_t.length > 2) a = a + (parseFloat(tmp_t[2]));
        }
        return (a == "-" || a === "") ? 0 : a;
      },

      "date-thai-short-asc": function (a, b) {
        return ((a < b) ? -1 : ((a > b) ? 1 : 0));
        return 0;
      },

      "date-thai-short-desc": function (a, b) {
        return ((a < b) ? 1 : ((a > b) ? -1 : 0));
      }
    });
  }
}

System.initDatatable = function ($scope) {
  if (typeof (jQuery.fn.dataTable) != 'undefined') {
    // init datatable & plugins
    var $table = null;
    var $table_search = null;
    if (typeof ($scope) == 'undefined') {
      System.global.datatables = {};
      $table = $('.w-data-table');
      $table_search = $('.w-data-table-search');
    } else {
      $table = $scope.find('.w-data-table');
      $table_search = $scope.find('.w-data-table-search');
    }

    $table.each(function (idx, ele) {
      var $this = $(this);
      var id = $this.attr('id');
      var state_save = $this.data('statesave');
      var order = $this.data('orders');
      var cardable = $this.data('cardable');
      var exportable = $this.data('exportable');
      var lengthMenu = [
        System.helper.DataTable.lengthMenu[0].slice(0),
        System.helper.DataTable.lengthMenu[1].slice(0)
      ];

      if (cardable) {
        lengthMenu[0].unshift(8);
        lengthMenu[1].unshift(8);
      }

      var options = {
        'autoWidth': false,
        'language': System.helper.DataTable.language,
        'lengthMenu': lengthMenu,
        'columnDefs': [{
          'targets': 'no-sort',
          'orderable': false
        }, {
          'targets': 'date-thai',
          'type': 'date-thai'
        }, {
          'targets': 'date-thai-short',
          'type': 'date-thai-short'
        }, {
          'targets': 'string',
          'type': 'string'
        }, {
          'targets': '_all',
          'render': function (data, type, full, meta) {
            var text = data;
            if (!exportable) {
              var colTitle = $.trim(meta.settings.aoColumns[meta.col].sTitle);
              if (colTitle != '') {
                text = '<label class="table-card-label">' + colTitle + ':</label>' + data;
              }
            }
            System.initTooltip();
            return text;
          }
        }],
        'bDestroy': true,
        'stateSave': (typeof (state_save) != 'undefined') ? state_save : false,
      };

      if (cardable && typeof (id) != 'undefined') {
        options.buttons = [{
          'text': '<i class="fa fa-table"></i> <i class="fa fa-arrows-h"></i> <i class="fa fa-align-justify"></i>',
          'action': function (e, dt, node, config) {
            $('#' + id).toggleClass('cards');
          }
        }];
      }

      if (exportable) {
        var title = $this.data('export-title');
        var orientation = $this.data('export-orientation');
        var auto_index = $this.data('export-auto-index');
        var index_label = '';
        var $table_header = $this.find('thead tr th');
        var display_options = [];
        var title_width = 400;
        for (var i = 0; i < $table_header.length; i++) {
          var $th = $table_header.eq(i);
          var align = $th.data('export-align');
          var width = $th.data('export-width');
          var display = $th.data('export');
          var option = {
            'alignment': typeof (align) != 'undefined' ? align : 'left',
            'display': typeof (display) != 'undefined' ? display : true,
            'width': typeof (width) != 'undefined' ? width : '*'
          }
          display_options.push(option);
        }

        // title
        if (typeof (title) != 'undefined') {
          try {
            title = eval('[' + title + ']');
          } catch (error) {}
        } else {
          title = document.title;
        }

        if (typeof (auto_index) == 'undefined') {
          auto_index = false;
        } else if (typeof (auto_index) == 'string') {
          index_label = auto_index;
          auto_index = true;
        }

        // orientation
        if (typeof (orientation) != 'undefined') {
          if (orientation != 'portrait' && orientation != 'landscape') {
            orientation = 'portrait';
          }
        } else {
          orientation = 'portrait';
        }
        if (orientation == 'landscape') {
          title_width = 500;
        }

        options.buttons = [{
            'extend': 'csvHtml5',
            'title': typeof (title) != 'string' ? title[0] : title,
            'display_options': display_options,
            'auto_index': auto_index,
            'index_label': index_label
          },
          {
            'extend': 'excelHtml5',
            'title': typeof (title) != 'string' ? title[0] : title,
            'display_options': display_options,
            'auto_index': auto_index,
            'index_label': index_label
          },
          {
            'extend': 'pdfHtml5',
            'orientation': orientation,
            'title': '',
            'display_options': display_options,
            'auto_index': auto_index,
            'index_label': index_label,
            'customize_header': function (doc) {
              var custom_header = {
                'columns': [{
                  //   'width': 100,
                  //   'margin': [0, 0, 0, 12],
                  //   'image': ImageDataURL['logo']
                  // },
                  // {
                  'width': title_width,
                  'margin': [20, 0, 0, 12],
                  'stack': [
                    title
                  ],
                  'alignment': 'left',
                  'style': 'title'
                }],
                'width': 'auto'
              };
              return custom_header;
            }
          }
        ];
      }

      if (typeof (id) != 'undefined') {
        if (typeof (options.buttons) != 'undefined') {
          var $button_container = $('.button-container[for="' + id + '"]');
          if ($button_container.length > 0) {
            // do nothing
          } else {
            options.dom = '<"text-right mb-2"B>lfrtip';
          }
        }
      }

      var $datatable = $this.DataTable(options);
      $this.find('tbody tr').removeClass('hidden');
      $datatable.on('draw', function () {
        $this.find('tbody tr').removeClass('hidden');
      });

      if (typeof (order) != 'undefined') {
        $datatable.order([eval(order)]).draw();
      }

      if (typeof (id) != 'undefined') {
        System.global.datatables[id] = $datatable;

        if (typeof (options.buttons) != 'undefined') {
          var $button_container = $('.button-container[for="' + id + '"]');
          if ($button_container.length > 0) {
            $button_container.html($datatable.buttons().container());
          }
        }
      }
      if ($this.hasClass('no-search')) {
        var $parent = $this.parent('.dataTables_wrapper');
        var $filter = $parent.find('.dataTables_filter');
        $filter.remove();
      }
      if ($this.hasClass('no-pagelength')) {
        var $parent = $this.parent('.dataTables_wrapper');
        var $length = $parent.find('.dataTables_length');
        $length.remove();
      }
    });

    // init datatable search
    $table_search.each(function (idx, ele) {
      var $this = $(this);
      var table_id = $this.attr('for');
      if (typeof (table_id) != 'undefined') {
        if (typeof (System.global.datatables[table_id]) != 'undefined') {
          var $datatable = System.global.datatables[table_id];
          $this.val($datatable.search());
        }

        // binding event
        $this.off('keyup');
        $this.on('keyup', function (e) {
          $datatable.search($this.val()).draw();
        });
      }
    });
  }
}

System.initDatatableAsync = function ($scope) {
  // init datatable & plugins
  var $table = null;
  if (typeof ($scope) == 'undefined') {
    System.global.datatables = {};
    $table = $('.w-data-table-async');
  } else {
    $table = $scope.find('.w-data-table-async');
  }

  $table.each(function (idx, ele) {
    var $this = $(this);
    var id = $this.attr('id');
    var url = $this.data('url');
    var state_save = $this.data('statesave');
    var cardable = $this.data('cardable');
    var lengthMenu = [
      System.helper.DataTable.lengthMenu[0].slice(0),
      System.helper.DataTable.lengthMenu[1].slice(0)
    ];
    var $data = $this.find('.table-param');

    if (cardable) {
      lengthMenu[0].unshift(8);
      lengthMenu[1].unshift(8);
    }

    if (typeof (url) != 'undefined' && $.trim(url) != '') {
      // do nothing.
    } else {
      console.error('Error: [w-data-table-async] - Missing parameter [url]');
      return;
    }

    var options = {
      'autoWidth': false,
      'language': System.helper.DataTable.language,
      'lengthMenu': lengthMenu,
      'sort': false,
      'info': false,
      'processing': true,
      'serverSide': true,
      'ajax': {
        'url': url,
        'data': function (d) {
          var param = {};
          $data.each(function (idx, ele) {
            var $ele = $(ele);
            param[$ele.attr('name')] = $ele.val();
          });
          d.param = param;
        }
      },
      'columnDefs': [{
        'targets': '_all',
        'render': function (data, type, full, meta) {
          var text = data;
          if (cardable) {
            var colTitle = $.trim(meta.settings.aoColumns[meta.col].sTitle);
            if (colTitle != '') {
              text = '<label class="table-card-label">' + colTitle + ':</label>' + data;
            }
          }
          System.initTooltip();
          return text;
        }
      }],
      'bDestroy': true,
      'stateSave': (typeof (state_save) != 'undefined') ? state_save : false,
    };

    if (cardable && typeof (id) != 'undefined') {
      options.buttons = [{
        'text': '<i class="fa fa-table"></i> <i class="fa fa-arrows-h"></i> <i class="fa fa-align-justify"></i>',
        'action': function (e, dt, node, config) {
          $('#' + id).toggleClass('cards');
        }
      }];
    }


    var $datatable = $this.DataTable(options);
    $this.find('tbody tr').removeClass('hidden');
    $datatable.on('draw', function () {
      $this.find('tbody tr').removeClass('hidden');
    });

    var $parent = $this.parent('.dataTables_wrapper');
    var $filter = $parent.find('.dataTables_filter');
    $filter.remove();

    var $parent = $this.parent('.dataTables_wrapper');
    var $length = $parent.find('.dataTables_length');
    $length.remove();
  });

}

System.initSearchTable = function () {
  $('.search-table').each(function (idx, ele) {
    var $ele = $(ele);
    if (typeof ($ele.data('target')) == 'undefined') {
      console.error('Search Table: no target table.');
      return;
    }

    $ele.off('keyup');
    $ele.on('keyup', function (e) {
      if (typeof ($ele.data('target')) == 'undefined') {
        return;
      }
      var $target = $($ele.data('target'));
      var $target_row = $target.find('tbody tr');

      var search = $(this).val().toLowerCase();
      $target_row.each(function (idx, ele) {
        var $current_row = $(ele);
        var matched = false;
        $cols = $(ele).find('td');
        for (var i = 0; i < $cols.length; i++) {
          var text = $($cols[i]).text().toLowerCase();
          var res = text.indexOf(search);
          if (res > -1) {
            matched = true;
            break;
          }
        }
        if (matched) {
          $current_row.removeClass('hidden');
        } else {
          $current_row.addClass('hidden');
        }
      });
    });
  });
}

System.initFormInput = function ($scope) {
  if (typeof ($scope) == 'undefined') {
    $scope = $(document);
  }
  // disable input number on mouse wheel
  $scope.off('mousewheel', 'input[type=number]');
  $scope.on('mousewheel', 'input[type=number]', function (e) {
    $(this).blur();
  });

  // select all string in textbox on focus
  $scope.off('click', '.select-focus');
  $scope.on('click', '.select-focus', function (e) {
    var $this = $(this);
    $this.select();
  });

  // autofill required input
  $scope.off('change', 'input[required]');
  $scope.on('change', 'input[required]', function (e) {
    if (this.type == 'number') {
      if (this.value == '') {
        this.value = 0;
      }
    } else if (this.type == 'text') {
      this.value = $.trim(this.value);
    }
  });

  $scope.off('change', 'textarea[required]');
  $scope.on('change', 'textarea[required]', function (e) {
    this.value = $.trim(this.value);
  });

  $scope.off('change', '.dropdown-link');
  $scope.on('change', '.dropdown-link', function (e) {
    window.location.href = this.value;
  });

  if (typeof (Select2) != 'undefined') {
    $scope.find('.toggle-select2, [data-toggle="select2"]').each(function (idx, ele) {
      if (typeof ($(ele).data('select2')) == 'undefined') {
        $(ele).select2();
      }
    });
  }

  $scope.off('change', '.range-input')
  $scope.on('change', '.range-input', function (e) {
    var $this = $(this);
    var target = $this.data('range-target');
    var attr = $this.data('range-attr');
    if (typeof (target) == 'undefined') {
      return;
    }
    attr = (typeof (attr) == 'undefined') ? 'min' : attr;
    var $target = $(target);

    $target.attr(attr, $this.val());
  });

  $('.range-input').trigger('change');

  $scope.off('click', '.btn-print-iframe');
  $scope.on('click', '.btn-print-iframe', function (e) {
    var $this = $(this);
    var url = $this.data('url');

    var $iframe = $this.find('iframe');
    if ($iframe.length > 0) {
      // remvoe old frame
      $iframe.remove();
    }
    // save html state
    var old_html = $this.html();

    // loader
    var loading_html = '<i class="fa fa-spinner fa-pulse mr-1"></i>กำลังโหลด...';
    $this.html(loading_html);
    $this.prop('disabled', true);

    // add iframe
    $this.append('<iframe class="d-none"></iframe>');
    $iframe = $this.find('iframe');
    $iframe.attr('src', url);

    // print & rollback state
    $iframe.off('load');
    $iframe.on('load', function (e) {
      setTimeout(function () {
        $iframe.get(0).contentWindow.print();
        $this.html(old_html)
        $this.prop('disabled', false);
      }, 500);
    });
  });
}

System.initClipboard = function () {
  if (typeof (ClipboardJS) != 'undefined') {
    new ClipboardJS('.btn-clipboard');
  }
}

System.initZyserMVC = function ($scope) {
  if (typeof ($scope) == 'undefined') {
    $scope = $(document);
  }
  $('[data-toggle="model"]').each(function (idx, ele) {
    var $model = $(ele);
    var model_name = $model.attr('name');
    $scope.find('[data-model="' + model_name + '"]').each(function (v_idx, v_ele) {
      var $view = $(v_ele);

      var controller_name = $view.data('controller');
      $model.on('change', function (e) {
        var html = $model.val();
        var use_val = $view.data('val');
        if (typeof (use_val) != 'undefined' && use_val == false) {
          html = $model[0];
        }
        if (typeof (controller_name) != 'undefined' && typeof (System.controller[controller_name]) != 'undefined') {
          System.controller[controller_name]($view, html);
        } else {
          System.view($view).update(html);
        }
      });
      $model.trigger('change');
    });
  });
}

System.model = function (model_name) {
  var $model = $('[data-toggle="model"][name="' + model_name + '"]');
  $model.update = function (value) {
    $model.val(value);
    $model.trigger('change');
  }
  return $model;
}

System.view = function ($view) {
  var tag_name = $view[0].tagName;
  $view.update = function (value) {
    var target_attr = $view.data('attr');
    if (typeof (target_attr) != 'undefined') {
      $view.prop(target_attr, value);
    } else {
      if (tag_name == 'INPUT') {
        $view.val(value);
      } else {
        $view.html(value);
      }
    }
  }
  return $view;
}

System.handleLogout = function () {
  $(document).on('click', 'a[href="logout.php"], .btn-logout', function (e) {
    e.preventDefault();
    var link = this.href;
    var onOK = function () {
      window.location.href = link;
    }
    var onCalcel = function () {}

    System.confirm('คุณต้องการออกจากระบบ?', '', onOK, onCalcel);
  });
}

System.helper.typeaheadMatcher = function (strs) {
  return function findMatches(q, cb) {
    var matches, substringRegex;
    // an array that will be populated with substring matches
    matches = [];
    // regex used to determine if a string contains the substring `q`
    substrRegex = new RegExp(q, 'i');
    // iterate through the pool of strings and for any string that
    // contains the substring `q`, add it to the `matches` array
    $.each(strs, function (i, str) {
      if (substrRegex.test(str)) {
        matches.push(str);
      }
    });

    cb(matches);
  };
}
System.helper.zeroFill = function (width, number, pad) {
  if (pad === undefined) pad = '0';
  width -= number.toString().length;
  if (width > 0) return new Array(width + (/\./.test(number) ? 2 : 1)).join(pad) + number;
  return number + '';
}
System.helper.getDataUri = function (url, callback) {
  var image = new Image();

  image.onload = function () {
    var canvas = document.createElement('canvas');
    canvas.width = this.naturalWidth; // or 'width' if you want a special/scaled size
    canvas.height = this.naturalHeight; // or 'height' if you want a special/scaled size

    canvas.getContext('2d').drawImage(this, 0, 0);

    // Get raw image data
    callback(canvas.toDataURL('image/png').replace(/^data:image\/(png|jpg);base64,/, ''));

    // ... or get as Data URI
    callback(canvas.toDataURL('image/png'));
  };

  image.src = url;
}


System.handleSubmit = function () {
  $(document).on('submit', 'form', function (e) {
    var $form = $(this);

    // handle form transfer
    if ($form.hasClass('toggle-transfer')) {
      e.preventDefault();
      var close_modal = (typeof ($form.data('close-modal')) != 'undefined') ? $form.data('close-modal') : true;
      var $target = $($form.data('transfer-target'));

      // auto fill target input
      $params = $form.find('.transfer-param');
      for (var i = 0; i < $params.length; i++) {
        $param = $params.eq(i);
        var key = $param.attr('name');
        var value = $param.val();
        var $target_input = $target.find('[name="' + key + '"]');
        $target_input.val(value);
      }

      var $modal = $form.parents('.modal');
      if ($modal.length > 0 && close_modal) {
        $modal.modal('hide');
        $('.modal-backdrop').remove();
      }
    } else {
      var $btn_submit = $form.find('[type="submit"]');
      var btn_name = '';
      if ($btn_submit.length > 0) {
        btn_name = (typeof ($btn_submit.attr('name')) != 'undefined') ? $btn_submit.attr('name') : '';
      }

      $btn_submit.prop('disabled', !$form.hasClass('bypass-submit'));
      if ($.trim(btn_name) != '') {
        $form.append('<input type="hidden" name="' + btn_name + '" value="1">');
      }
    }
  });
}

// Async Content
System.initAsyncContent = function ($scope) {
  if ((typeof ($scope) == 'undefined')) {
    $scope = $(document);
  }

  $scope.find('.async-content').each(function (idx, ele) {
    var $async_content = $(ele);
    $async_content.async_option = {};
    $async_content.async_data = {};
    if (typeof ($async_content.data('autoload')) != 'undefined') {
      $async_content.async_option.autoload = $async_content.data('autoload');
    } else {
      $async_content.async_option.autoload = true;
    }
    if (typeof ($async_content.data('async-append')) != 'undefined') {
      $async_content.async_option.append = $async_content.data('async-append');
    } else {
      $async_content.async_option.append = false;
    }
    $async_content.async_option.ghost = $async_content.hasClass('async-ghost');
    $async_content.async_option.global = $async_content.hasClass('global-loader');

    $async_content.init = false;
    $async_content.url = $async_content.data('url');
    if (typeof ($async_content.url) == 'undefined') {
      console.error('Async-Content: Missing Parameter [url]');
      return;
    }
    $async_content.find('.async-param').each(function (idx, ele) {
      var $input = $(ele);
      $async_content.async_data[$input.attr('name')] = $input.val();
      $input.remove();
    });

    $async_content.show_loader = function () {
      if (!$async_content.hasClass('async-loading')) {
        $async_content.addClass('async-loading');
        if (!$async_content.async_option.ghost && !$async_content.async_option.global) {
          var html = '<div class="loader-overlay">' +
            '<div class="pusher"></div>' +
            '<div class="loader-text bold">' +
            '<i class="fa fa-spinner fa-pulse mr-2"></i>' +
            'กำลังโหลด...' +
            '</div></div>';
          $async_content.append(html);
        } else if ($async_content.async_option.global) {
          var html = '<div class="loader-overlay global-overlay">' +
            '<div class="pusher"></div>' +
            '<div class="loader-text bold">' +
            '<i class="fa fa-spinner fa-pulse mr-2"></i>' +
            'กำลังโหลด...' +
            '</div></div>';
          $('body').append(html);
        }
      }
    }

    $async_content.hide_loader = function () {
      if ($async_content.hasClass('async-loading')) {
        if (!$async_content.async_option.ghost && !$async_content.async_option.global) {
          $async_content.find('.loader-overlay').remove();
        } else if ($async_content.async_option.global) {
          $('.loader-overlay').remove();
        }
        $async_content.removeClass('async-loading');
      }
    }

    $async_content.reload = function (callback, force_reload) {
      force_reload = (typeof (force_reload) == 'undefined') ? false : force_reload;
      if (!$async_content.hasClass('async-loading') || force_reload) {
        $async_content.show_loader();
        $('.async-id-list').trigger('change');
        $.ajax({
          'url': $async_content.url,
          'data': $async_content.async_data,
          'dataType': 'html',
          'global': false,
          'success': function (response) {
            if ($async_content.async_option.append) {
              $async_content.append(response);
            } else {
              $async_content.html(response);
            }
            System.initTooltip();
            System.initFormInput();
            $async_content.init = true;
            $(document).resize();
          },
          'complete': function () {
            if (typeof (callback) == 'function') {
              callback();
            } else if (typeof (callback) == 'object') {
              for (idx in callback) {
                if (typeof (callback[idx]) == 'function') {
                  callback[idx]();
                }
              }
            }
            $async_content.hide_loader();
            var id = $async_content.attr('id');

            if (typeof (id) != 'undefined') {
              System.global.async_content[id] = $async_content;
            }
          }
        });
      }
    }

    $async_content.force_reload = function (callback) {
      $async_content.reload(callback, true);
    }

    var id = $async_content.attr('id');
    if (typeof (id) != 'undefined') {
      if (typeof (System.global.async_content[id]) == 'undefined') {
        $('.async-id-list').append('<option value="' + id + '">' + id + '</option>');
      }

      System.global.async_content[id] = $async_content;
    }

    if ($async_content.async_option.autoload) {
      var callback = $async_content.data('callback');
      $async_content.reload(callback, true);
    }
  });

  var n_async = 0;

  for (i in System.global.async_content) {
    n_async++;
  }
  if (n_async == 0) {
    $('.async-reload-form').html('<div class="text-center">Async-Content not found.</div>');
  }
}

System.async_data = function (id, key, value) {
  var ret = null;
  if (typeof (System.global.async_content[id]) == 'undefined') {
    console.error('Async-Content: Undefined Async ID: [' + id + ']');
  } else {
    var $async_content = System.global.async_content[id];
    if (typeof (key) != 'undefined') {
      if (typeof (value) != 'undefined') {
        // set
        $async_content.async_data[key] = value;
        var $async_reload_form = $('.async-reload-form');
        if ($async_reload_form.length > 0) {
          var $async_reload_data = $async_reload_form.find('input[name="' + key + '"]');
          if ($async_reload_data.length > 0) {
            $async_reload_data.val(value);
          }
        }
      }
      // get by key
      ret = $async_content.async_data[key];
    } else {
      // get all
      ret = $async_content.async_data;
    }
  }
  return ret;
}

System.async_option = function (id, key, value) {
  var ret = null;
  if (typeof (System.global.async_content[id]) == 'undefined') {
    console.error('Async-Content: Undefined Async ID: [' + id + ']');
  } else {
    var $async_content = System.global.async_content[id];
    if (typeof (value) != 'undefined') {
      $async_content.async_option[key] = value;
    }
    ret = $async_content.async_option[key];
  }
  return ret;
}

System.async_querystring = function (id) {
  var ret = '?';
  if (typeof (System.global.async_content[id]) == 'undefined') {
    console.error('Async-Content: Undefined Async ID: [' + id + ']');
  } else {
    var $async_content = System.global.async_content[id];
    for (key in $async_content.async_data) {
      ret += key + '=' + $async_content.async_data[key] + '&';
    }
  }
  return ret;
}

System.async_reload = function (id, callback) {
  if (typeof (id) == 'undefined') {
    for (async_id in System.global.async_content) {
      System.global.async_content[async_id].reload();
    }
  } else {
    if (typeof (System.global.async_content[id]) == 'undefined') {
      console.error('Async-Content: Undefined Async ID: [' + id + ']');
    } else {
      System.global.async_content[id].reload(callback);
    }
  }
}

System.initAsyncForm = function () {
  var $ghost = $('#async_form_ghost');
  if ($ghost.length == 0) {
    $('body').append('<div id="async_form_ghost"></div>');
    $ghost = $('#async_form_ghost');
    $ghost.css('display', 'none');
  }

  $(document).on('submit', '.async-form', function (e) {
    e.preventDefault();
    var $async_form = $(this);
    var url = $async_form.data('url');
    var datatype = (typeof ($async_form.data('datatype')) != 'undefined') ? $async_form.data('datatype') : 'html';
    var noreset = (typeof ($async_form.data('noreset')) != 'undefined') ? $async_form.data('noreset') : false;
    var reset_param = (typeof ($async_form.data('reset-param')) != 'undefined') ? $async_form.data('reset-param') : false;
    var method = (typeof ($async_form.attr('method')) != 'undefined') ? $async_form.attr('method') : 'post';
    var nopace = (typeof ($async_form.data('nopace')) != 'undefined') ? $async_form.data('nopace') : false;
    var is_global = $async_form.hasClass('global-loader');
    var callback = $async_form.data('callback');
    var remove = (typeof ($async_form.data('remove')) != 'undefined') ? $async_form.data('remove') : false;
    var close_modal = (typeof ($async_form.data('close-modal')) != 'undefined') ? $async_form.data('close-modal') : true;
    var reload = (typeof ($async_form.data('reload')) != 'undefined') ? $async_form.data('reload') : false;
    var statesave = (typeof ($async_form.data('async-statesave')) != 'undefined') ? $async_form.data('async-statesave') : false;

    var async_content_id = $async_form.data('async-content');
    if (typeof (async_content_id) != 'undefined' && typeof (System.global.async_content[async_content_id]) != 'undefined') {
      var $async_content = System.global.async_content[async_content_id];
    }

    var $modal = $async_form.parents('.modal');
    if ($modal.length > 0 && close_modal) {
      $modal.modal('hide');
      $('.modal-backdrop').remove();
    }

    if (typeof (url) != 'undefined') {
      var show_loader = function () {
        if (!$async_form.hasClass('async-loading')) {
          $async_form.addClass('async-loading');
          if (is_global) {
            var html = '<div class="loader-overlay global-overlay">' +
              '<div class="pusher"></div>' +
              '<div class="loader-text bold">' +
              '<i class="fa fa-spinner fa-pulse"></i>' +
              '</div></div>';
            $('body').append(html);
          } else if (typeof ($async_content) != 'undefined') {
            $async_content.show_loader();
          }
        }
      }

      var hide_loader = function () {
        if ($async_form.hasClass('async-loading')) {
          if (is_global) {
            $('.loader-overlay').remove();
          }
          $async_form.removeClass('async-loading');
        }
      }

      var form_data = $async_form.serialize();
      if (!$async_form.hasClass('async-loading')) {
        show_loader();
        $.ajax({
          'url': url,
          'type': method,
          'data': form_data,
          'dataType': datatype,
          'global': !nopace,
          'success': function (response) {
            if (datatype == 'html') {
              $ghost.html(response);
            }
            if (typeof ($async_content) != 'undefined') {
              $async_form.find('.async-param').each(function (idx, ele) {
                var $input = $(ele);
                System.async_data(async_content_id, $input.attr('name'), $input.val());
              });
              $async_content.force_reload(callback);
            } else if (typeof (callback) == 'function') {
              callback(response);
            }
            if (!noreset) {
              $async_form[0].reset();
              $async_form.find('input').trigger('change');
              $async_form.find('select').trigger('change');
            }
            if (remove) {
              $async_form.remove();
            }
            if (reload) {
              window.location.reload();
            }
          },
          'complete': function () {
            $async_form.find('[type="submit"]').prop('disabled', false);

            if (is_global) {
              $('.loader-overlay').remove();
            }
            hide_loader();
          }
        });
      }
    } else {
      if (typeof ($async_content) != 'undefined') {
        var form_data = $async_form.serializeArray();
        if (reset_param) {
          $async_content.async_data = {};
        }
        for (var i = 0; i < form_data.length; i++) {
          var data = form_data[i];
          System.async_data(async_content_id, data.name, data.value);
        }
        var tmp_callback = [];
        tmp_callback.push(callback);
        tmp_callback.push(function () {
          $async_form.find('[type="submit"]').prop('disabled', false);
        });
        $async_content.reload(tmp_callback);
      } else if (typeof (callback) == 'function') {
        callback(response);
        $async_form.find('[type="submit"]').prop('disabled', false);
      }
      if (!noreset && !statesave) {
        $async_form[0].reset();
        $async_form.find('input').trigger('change');
        $async_form.find('select').trigger('change');
      }
    }
    if (statesave) {
      var async_data = $async_content.async_data;
      var state_url = window.location.pathname + '?';
      for (var name in async_data) {
        state_url += (name + '=' + async_data[name]);
        state_url += '&';
      }
      window.history.replaceState($('body').html(), document.title, state_url);
    }
  });

  $(document).on('click', '.async-link', function (e) {
    e.preventDefault();
    var $async_link = $(this);
    var url = $async_link.data('url');
    var is_global = $async_link.hasClass('global-loader');

    var async_content_id = $async_link.data('async-content');
    if (typeof (async_content_id) != 'undefined' && typeof (System.global.async_content[async_content_id]) != 'undefined') {
      var $async_content = System.global.async_content[async_content_id];
    }

    if (typeof ($async_content) != 'undefined') {
      var async_data = $async_link.find('.async-param');
      for (var i = 0; i < async_data.length; i++) {
        var data = async_data.eq(i);
        System.async_data(async_content_id, data.attr('name'), data.val());
      }
      $async_content.reload();
    }

    var statesave = (typeof ($async_link.data('async-statesave')) != 'undefined') ? $async_link.data('async-statesave') : false;
    if (statesave) {
      var async_data = $async_content.async_data;
      var state_url = window.location.pathname + '?';
      for (var name in async_data) {
        state_url += (name + '=' + async_data[name]);
        state_url += '&';
      }
      window.history.replaceState($('body').html(), document.title, state_url);
    }
  });

  // async pagination
  $(document).on('click', '.pagination-async .aspg-link', function (e) {
    e.preventDefault();
    var $this = $(this);
    var param = $this.data('param');
    var $pagination = $this.parents('.pagination-async');
    var async_content_id = $pagination.data('async-content');
    if (typeof (async_content_id) != 'undefined') {
      var $async_content = System.global.async_content[async_content_id];
      var page = $this.attr('href');
      System.async_data(async_content_id, param, page);
      window.history.replaceState($('body').html(), document.title, window.location.pathname + System.async_querystring(async_content_id));
      $async_content.reload();
    }
  });

  $(document).on('submit', '.async-pagination-form', function (e) {
    e.preventDefault();
    var $this = $(this);
    var param = $this.data('param');
    var async_content_id = $this.data('async-content');
    if (typeof (async_content_id) != 'undefined') {
      var $async_content = System.global.async_content[async_content_id];
      var page = $this.find('input[name="' + param + '"]').val();
      System.async_data(async_content_id, param, page);
      window.history.replaceState($('body').html(), document.title, window.location.pathname + System.async_querystring(async_content_id));
      $async_content.reload();
    }
  });
}

// handle async file change & reload
System.handle_async_file = function () {
  function auto_sync() {
    var data = [];
    for (async_id in System.global.async_content) {
      var $async = System.global.async_content[async_id];

      if ($async.init) {
        data.push({
          'id': async_id,
          'url': $async.url
        });
      }
    }

    if (data.length > 0) {
      $.ajax({
        'url': 'import/asyncCheckfile.php',
        'data': {
          'data': data
        },
        'dataType': 'json',
        'global': false,
        'success': function (response) {
          for (i in response) {
            var res = response[i];
            var $async = System.global.async_content[res.id];
            if (typeof ($async.time) != 'undefined') {
              if (res.time > $async.time) {
                $async.reload();
              }
            }
            $async.time = res.time;
          }
          setTimeout(function () {
            auto_sync();
          }, 2000);
        }
      });
    } else {
      setTimeout(function () {
        auto_sync();
      }, 2000);
    }
  }
  auto_sync();

  $(document).on('submit', '.async-reload-form', function (e) {
    e.preventDefault();
    var $this = $(this);
    var async_id = $this.find('.async-id-list').val();
    var $options = $this.find('.async-option');
    for (i = 0; i < $options.length; i++) {
      var key = $options.eq(i).data('name');
      var value = $options.eq(i).prop('checked');
      System.async_option(async_id, key, value);
    }
    var form_data = $this.serializeArray();
    for (var i = 0; i < form_data.length; i++) {
      var data = form_data[i];
      System.async_data(async_id, data.name, data.value);
    }
    System.global.async_content[async_id].reload();
  });
  $(document).on('change', '.async-id-list', function (e) {
    System.template['async_option'] = '<label><input type="checkbox" class="async-option" data-name="{{name}}" value="{{value}}" {{check}} {{disable}}> {{name}}</label> ';

    System.template['async_data'] = '<div class="form-row"><div class="col">{{name}}:</div><div class="col"><input type="text" class="async-data form-control form-control-sm select-focus" name="{{name}}" value="{{value}}" required></div></div>';
    var $this = $(this);
    var $form = $this.parents('.async-reload-form');
    var $async_data = $form.find('.async-reload-data');
    var async_id = $this.val();
    var $async = System.global.async_content[async_id];
    if ($async_data.length > 0) {
      $async_data.html('');
      for (option in $async.async_option) {
        $async_data.append(System.compileTemplate('async_option', {
          'name': option,
          'value': $async.async_option[option],
          'check': ($async.async_option[option] == true) ? 'checked' : '',
          'disable': (option == 'autoload') ? 'disabled' : ''
        }));
      }
      for (data in $async.async_data) {
        $async_data.append(System.compileTemplate('async_data', {
          'name': data,
          'value': $async.async_data[data]
        }));
      }
    }
  });

  $(document).on('click', '.btn-async-config', function (e) {
    var $this = $(this);
    var $form = $this.parents('.async-reload-form');
    var async_id = $form.find('.async-id-list').val();
    var $options = $form.find('.async-option');
    for (i = 0; i < $options.length; i++) {
      var key = $options.eq(i).data('name');
      var value = $options.eq(i).prop('checked');
      System.async_option(async_id, key, value);
    }
    var form_data = $form.serializeArray();
    for (var i = 0; i < form_data.length; i++) {
      var data = form_data[i];
      System.async_data(async_id, data.name, data.value);
    }
  });
  $('.async-id-list').trigger('change');
}

System.info = function (mode) {
  mode = (typeof (mode) == 'undefined') ? 'console' : mode;
  var async = [];
  var n_async = 0;
  for (i in System.global.async_content) {
    async.push(System.global.async_content[i].url);
    n_async++;
  }
  if (mode == 'modal') {
    System.template['info_copy'] = '<div class="input-group mb-1"> \
        <input type="text" id="{{id}}" class="form-control select-focus" value="{{path}}" readonly> \
        <div class="input-group-append"> \
          <button type="button" class="btn btn-dark toggle-tooltip btn-clipboard" title="Copy to clipboard" data-clipboard-target="#{{id}}"> \
            <i class="fa fa-copy"></i> \
          </button> \
        </div> \
      </div>';
    var html = '';
    if (System.global.controller.length > 0) {
      html += '<div class="smaller-80 my-3">Controller</div>';
      // html += '<div class="text-left smaller-50">';
      for (i in System.global.controller) {
        // html += '<div class="mt-1">' + System.global.controller[i] + '</div>';
        html += System.compileTemplate('info_copy', {
          'id': System.helper.uid('info_'),
          'path': System.global.controller[i]
        });
      }
      // html += '</div>';
    }

    if (System.global.view.length > 0) {
      html += '<div class="smaller-80 my-3">View</div>';
      // html += '<div class="text-left smaller-50">';
      for (i in System.global.view) {
        // html += '<div class="mt-1">' + System.global.view[i] + '</div>';
        html += System.compileTemplate('info_copy', {
          'id': System.helper.uid('info_'),
          'path': System.global.view[i]
        });
      }
      // html += '</div>';
    }
    if (n_async > 0) {
      html += '<div class="smaller-80 my-3">Async</div>';
      // html += '<div class="text-left smaller-50">';
      for (i in async) {
        // html += '<div class="mt-1">' + async + '</div>';
        html += System.compileTemplate('info_copy', {
          'id': System.helper.uid('info_'),
          'path': async [i]
        });
      }
      // html += '</div>';
    }
    swal(html).then(
      function () {},
      function () {}
    );
    System.initClipboard();
    System.initTooltip();
  } else {
    console.log('Controller');
    console.table(System.global.controller);
    console.log('View');
    console.table(System.global.view);
    console.log('Async');
    console.table(async);
  }
}

// run
$(document).ready(function () {
  System.setupAjax();
  System.initTemplate();
  //System.handleLanguage();
  System.handleScrollTop();
  System.smoothScroll();
  System.handleAnimation();
  System.handleEqualHeight('.has-eq-height');
  System.handleIE();
  System.handleFocusModalInput();
  System.handleConfirm();
  System.handleAlert();
  System.handleSubmit();
  System.handleLogout();

  $('.debug-control .control-btn').on('click', function (e) {
    var $this = $(this);
    var $container = $this.parents('.debug-control');
    $container.toggleClass('open');

    if ($container.hasClass('open')) {
      var $debug_gif = $container.find('.debug-gif');
      var max_gif = 6;
      var gif_index = Math.floor((Math.random() * max_gif) + 1);
      var gif_html = '<div class="inline align-middle"><img class="btn-debug-form-start" width="90px" src="images/gif/' + gif_index + '.gif"></div>';
      var gif_speech = '<div class="inline align-middle debug-gif-speech"></div>';
      $debug_gif.html(gif_html + gif_speech);
    }
  });

  System.initTooltip();
  System.initDatatablePlugin();
  System.initDatatable();
  System.initSearchTable();
  System.initFormInput();
  System.initClipboard();
  System.initAsyncContent();
  System.initAsyncForm();

  System.initZyserMVC();

  // // handle no back
  // window.history.pushState('Back state forbidden.', '', window.location.href);
  // window.onpopstate = function (event) {
  //   window.history.pushState('Back state forbidden.', '', window.location.href);
  // };
  System.enable_debugger();
});

// Plugin -- Get Data from Query String
(function ($) {
  $.QueryString = (function (paramsArray) {
    let params = {};

    for (let i = 0; i < paramsArray.length; ++i) {
      let param = paramsArray[i]
        .split('=', 2);

      if (param.length !== 2)
        continue;

      params[param[0]] = decodeURIComponent(param[1].replace(/\+/g, " "));
    }

    return params;
  })(window.location.search.substr(1).split('&'));
})(jQuery);

// System.getSelector = function() {
//   var selector = $(this)
//     .parents()
//     .map(function () {
//       return this.tagName;
//     })
//     .get()
//     .reverse()
//     .concat([this.nodeName])
//     .join('>');

//   var id = $(this).attr('id');
//   if (id) {
//     selector += '#' + id;
//   }

//   var classNames = $(this).attr('class');
//   if (classNames) {
//     selector += '.' + $.trim(classNames).replace(/\s/gi, '.');
//   }

//   alert(selector);
// }

System.login_tester = function () {
  var username = prompt('Username', '');
  var password = prompt('Password', '');
  if (username != null && password != null) {
    $.ajax({
      'url': 'import/asyncCore.php',
      'data': {
        'login_tester': true,
        'username': username,
        'password': password
      },
      'dataType': 'html',
      'success': function (response) {
        $('body').append(response);
      }
    });
  }
}

System.logout_tester = function () {
  $.ajax({
    'url': 'import/asyncCore.php',
    'data': {
      'logout_tester': true
    },
    'dataType': 'html',
    'success': function (response) {
      $('body').append(response);
    }
  });
}

System.enable_debugger = function () {
  $(document).off('click', '.btn-debug-form-start');
  $(document).on('click', '.btn-debug-form-start', function (e) {
    e.preventDefault();
    if ($('body').hasClass('debug-select-form')) {
      // cancel form selector
      $('.debug-gif-speech').html('');
      $('body').removeClass('debug-select-form');
      $('form').off('click');
      System.global.debug_form = null;
    } else {
      // enable form selector
      var speech = '<span class="badge badge-dark">Select form</span>';
      speech += '<br>or<br>';
      speech += '<span class="badge badge-dark">Tab me to cancel</span>';
      $('.debug-gif-speech').html(speech);
      $('body').addClass('debug-select-form');

      $('form').one('click', function (e) {
        // debug form selected
        e.preventDefault();
        System.global.debug_form = $(this);
        var speech = '<btn class="btn btn-primary btn-sm rounded btn-debug-form-import"><i class="fa fa-download mr-1"></i>Import</btn>';
        speech += '<br>or<br>';
        speech += '<btn class="btn btn-danger btn-sm rounded btn-debug-form-export"><i class="fa fa-upload mr-1"></i>Export</btn>';

        speech += '<input type="file" class="debug-form-upload d-none" accept=".json,application/json">';
        $('.debug-gif-speech').html(speech);
        $('body').removeClass('debug-select-form');
      });
    }
  });

  $(document).off('click', '.btn-debug-form-import');
  $(document).on('click', '.btn-debug-form-import', function (e) {
    $('.debug-form-upload').trigger('click');
  });

  $(document).off('click', '.btn-debug-form-export');
  $(document).on('click', '.btn-debug-form-export', function (e) {
    var $form = System.global.debug_form;
    if ($form != null) {
      var data = $form.serializeArray();
      var json = JSON.stringify(data);
      var dataUri = 'data:application/json;charset=utf-8,' + encodeURIComponent(json);
      exportFileDefaultName = 'export_data.json';
      linkElement = document.createElement('a');
      linkElement.setAttribute('href', dataUri);
      linkElement.setAttribute('download', exportFileDefaultName);
      linkElement.click();
    }
  });

  $(document).off('change', '.debug-form-upload');
  $(document).on('change', '.debug-form-upload', function (e) {
    var file_input = $(this).get(0);
    if (!file_input.files || !file_input.files[0]) return;
    if (typeof (FileReader) != 'undefined') {
      var reader = new FileReader();
      reader.onload = function () {
        var data = JSON.parse(reader.result);
        System.fillForm(System.global.debug_form, data);
      };
      // read the image file as a data URL.
      reader.readAsText(file_input.files[0]);
    }
  });
}

System.fillForm = function ($target, data) {
  for (i in data) {
    var name = data[i].name;
    var value = data[i].value;
    var $form_input = $target.find('[name="' + name + '"]');
    if ($form_input.length > 0) {
      if ($form_input.attr('type') != 'hidden') {
        $form_input.val(value);
        if ($form_input.hasClass('toggle-select2') || $form_input.data('toggle') == 'select2') {
          $form_input.trigger('change');
        }
      }
    }
  }
}