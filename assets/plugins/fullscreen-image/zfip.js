// require jQuery
$(document).ready(function () {
  var setupZFIP = function () {
    // append zfip container
    if ($('#zfip_actual').length == 0) {
      $('body').append('<div id="zfip_actual"></div>');
    }

    var animating = false;
    var $zfipActual = $('#zfip_actual');
    $zfipActual.css('position', 'absolute');

    var windowTop = 0;
    var position = {};
    var size = {};

    //modal action stuffs
    var openZFIP = function (event) {
      if (!animating) {
        animating = true;
        var $this = $(event.currentTarget);
        windowTop = $(document).scrollTop();
        position = $this.offset();
        size = {
          width: $this.width(),
          height: $this.height()
        }

        $zfipActual.css('position', 'absolute');
        $zfipActual.css('top', position.top + 'px');
        $zfipActual.css('left', position.left + 'px');
        $zfipActual.css('height', size.height);
        $zfipActual.css('width', size.width);
        $zfipActual.css('margin', $this.css('margin'));

        setTimeout(function () {
          $('body').addClass('no-scroll');
          $zfipActual.html($this.html());
          var classes = $this.attr('class').split('/\s+/');
          for (var i = 0; i < classes.length; i++) {
            $zfipActual.addClass(classes[i]);
          }
          $zfipActual.addClass('growing');
          $zfipActual.css('height', '100%');
          $zfipActual.css('width', '100%');
          $zfipActual.css('top', windowTop + 'px');
          $zfipActual.css('left', '0');
          $zfipActual.css('margin','0');
        }, 100);

        setTimeout(function () {
          $zfipActual.removeClass('growing');
          $zfipActual.addClass('full-screen');
          animating = false;
        }, 1000);
      }
    };

    var closeZFIP = function (event) {
      if (!animating) {
        $('body').removeClass('no-scroll');
        animating = true;
        var $this = $(event.currentTarget);
        $this.css('height', size.height);
        $this.css('width', size.width);
        $this.css('top', position.top + 'px');
        $this.css('left', position.left + 'px');
        $this.css('margin', '0');
        $this.removeClass('full-screen');
        $this.addClass('shrinking');

        setTimeout(function () {
          $this.empty();
          $this.removeAttr('style');
          animating = false;
        }, 1000);
      }
    };

    // binding event
    $(document).on('click', '.zfip', openZFIP);
    $zfipActual.on('click', closeZFIP);
  }();
});