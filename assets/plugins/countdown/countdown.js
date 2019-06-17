/*
Countdown - 1.0.0
Copyright 2018 Poonarin Wongchomphu
Licensed under the MIT license.
*/

(function ($) {
  'use strict'
  $.fn.countdown = function (options) {
    $(this).each(function (index, element) {
      var $this = $(element);
      var start_date = $this.data('start');
      var finish_date = $this.data('finish');

      // validate input
      if (typeof (start_date) == 'undefined') {
        console.error('Countdown: Undefined start attribute.');
        console.log(ele);
        return;
      } else if (typeof (finish_date) == 'undefined') {
        console.error('Countdown: Undefined finish attribute.');
        console.log(ele);
        return;
      }

      var remain_time = parseFloat(finish_date) - parseFloat(start_date);
      $this.html(format_date(remain_time));

      // start timer
      var interval = setInterval(onTick, 1000);

      function onTick() {
        remain_time--;
        $this.html(format_date(remain_time));
        if (remain_time <= 0) {
          // timer end.
          if (typeof (options.onFinish) == 'function') {
            options.onFinish($this);
          }
          clearInterval(interval);
        }
      }

      function format_date(remain_time) {
        var hour = Math.floor(remain_time / 3600);
        var minute = Math.floor((remain_time - (hour * 3600)) / 60);
        var second = remain_time % 60;
        return zefo_fill(hour, 2) + ":" + zefo_fill(minute, 2) + ":" + zefo_fill(second, 2);
      }

      function zefo_fill(n, w) {
        var n_ = Math.abs(n);
        var zeros = Math.max(0, w - Math.floor(n_).toString().length);
        var zeroString = Math.pow(10, zeros).toString().substr(1);
        if (n < 0) {
          zeroString = '-' + zeroString;
        }

        return zeroString + n;
      }
    });
    return this;
  }
}(jQuery));