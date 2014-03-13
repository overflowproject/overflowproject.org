(function( $ ){
  "use strict";

  $.fn.rotateOptions = function(options) {
    var DELAY_ROTATE = 5000; // ms between changing options
    var DELAY_TYPE = 50; // ms between a single character

    var i = 0, j = 0;
    var el = $(this);

    var option;
    var setPlaceholder = function() {
      option = options[i];
      i = (i + 1) % options.length;
      j = 0;
      typePlaceholder();
    }

    var typeTimeout;
    var typePlaceholder = function() {
      el.attr("placeholder", option.substr(0, j++));
      if (j <= option.length) {
        typeTimeout = setTimeout(typePlaceholder, DELAY_TYPE);
      }
    }

    var rotateInterval = setInterval(setPlaceholder, DELAY_ROTATE)
    $(this).on('focus', function() {
      clearInterval(rotateInterval);
      clearTimeout(typeTimeout);
      j = option.length + 1;
      el.attr("placeholder", option);
    });
    $(this).on('blur', function() {
      rotateInterval = setInterval(setPlaceholder, DELAY_ROTATE)
      typeTimeout = setTimeout(typePlaceholder, DELAY_TYPE);
    });
  };
// Works with either jQuery or Zepto
})( window.jQuery || window.Zepto );