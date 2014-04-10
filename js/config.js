/*
  Escape Velocity 2.5 by HTML5 UP
  html5up.net | @n33co
  Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
*/
jQuery(function() {
  $('[data-toggle=offcanvas]').click(function () {
    $('.offcanvas-container').toggleClass('active');
    $('.offcanvas-element').toggleClass('active');
    $('.offcanvas-toggle').toggleClass('active');
  });

  $(window).scroll(function() {
    $('.offcanvas-container').removeClass('active');
    $('.offcanvas-element').removeClass('active');
    $('.offcanvas-toggle').removeClass('active');
  })


  jQuery.fn.n33_formerize=function(){var _fakes=new Array(),_form = jQuery(this);_form.find('input[type=text],textarea').each(function() { var e = jQuery(this); if (e.val() == '' || e.val() == e.attr('placeholder')) { e.addClass('formerize-placeholder'); e.val(e.attr('placeholder')); } }).blur(function() { var e = jQuery(this); if (e.attr('name').match(/_fakeformerizefield$/)) return; if (e.val() == '') { e.addClass('formerize-placeholder'); e.val(e.attr('placeholder')); } }).focus(function() { var e = jQuery(this); if (e.attr('name').match(/_fakeformerizefield$/)) return; if (e.val() == e.attr('placeholder')) { e.removeClass('formerize-placeholder'); e.val(''); } }); _form.find('input[type=password]').each(function() { var e = jQuery(this); var x = jQuery(jQuery('<div>').append(e.clone()).remove().html().replace(/type="password"/i, 'type="text"').replace(/type=password/i, 'type=text')); if (e.attr('id') != '') x.attr('id', e.attr('id') + '_fakeformerizefield'); if (e.attr('name') != '') x.attr('name', e.attr('name') + '_fakeformerizefield'); x.addClass('formerize-placeholder').val(x.attr('placeholder')).insertAfter(e); if (e.val() == '') e.hide(); else x.hide(); e.blur(function(event) { event.preventDefault(); var e = jQuery(this); var x = e.parent().find('input[name=' + e.attr('name') + '_fakeformerizefield]'); if (e.val() == '') { e.hide(); x.show(); } }); x.focus(function(event) { event.preventDefault(); var x = jQuery(this); var e = x.parent().find('input[name=' + x.attr('name').replace('_fakeformerizefield', '') + ']'); x.hide(); e.show().focus(); }); x.keypress(function(event) { event.preventDefault(); x.val(''); }); });  _form.submit(function() { jQuery(this).find('input[type=text],input[type=password],textarea').each(function(event) { var e = jQuery(this); if (e.attr('name').match(/_fakeformerizefield$/)) e.attr('name', ''); if (e.val() == e.attr('placeholder')) { e.removeClass('formerize-placeholder'); e.val(''); } }); }).bind("reset", function(event) { event.preventDefault(); jQuery(this).find('select').val(jQuery('option:first').val()); jQuery(this).find('input,textarea').each(function() { var e = jQuery(this); var x; e.removeClass('formerize-placeholder'); switch (this.type) { case 'submit': case 'reset': break; case 'password': e.val(e.attr('defaultValue')); x = e.parent().find('input[name=' + e.attr('name') + '_fakeformerizefield]'); if (e.val() == '') { e.hide(); x.show(); } else { e.show(); x.hide(); } break; case 'checkbox': case 'radio': e.attr('checked', e.attr('defaultValue')); break; case 'text': case 'textarea': e.val(e.attr('defaultValue')); if (e.val() == '') { e.addClass('formerize-placeholder'); e.val(e.attr('placeholder')); } break; default: e.val(e.attr('defaultValue')); break; } }); window.setTimeout(function() { for (x in _fakes) _fakes[x].trigger('formerize_sync'); }, 10); }); return _form; };
  jQuery.browser={};(function(){jQuery.browser.msie=false;jQuery.browser.version=0;if(navigator.userAgent.match(/MSIE ([0-9]+)\./)){jQuery.browser.msie=true;jQuery.browser.version=RegExp.$1;}})();

  // Forms (IE <= 9 only)
  if (jQuery.browser.msie && jQuery.browser.version <= 9) {
    jQuery('form').n33_formerize();
  }

  var submitForm = function(form) {
    var data = form.serializeArray();
    $.ajax({  
     type: "POST",  
     url: form.attr('action'),  
     data: data
    });

    // Clear the form data.
    form.trigger("reset")
  };

  $('#contactform input[type="submit"]').click(function(ev) {  
    ga('send', 'event', 'form', 'submit', 'contact');
 
    ev.preventDefault();
    var form = $(this).closest('form');
    submitForm($(form));
    var thanks = $(form).find('.thanks');
    $(thanks).hide().fadeIn(500);

    return false;  
  });

  // Set up the flipper for modern browsers by cloning the .thanks response to the back of the flipper.
  // if (!jQuery.browser.msie || jQuery.browser.version > 9) {
  //   var flipContainer = $('#challengeform').closest('.flip-container');
  //   var thanks = $(flipContainer).siblings('.thanks');
  //   var flipper = $(flipContainer).find('.flipper');
  //   var fakeThanks = thanks.clone();
  //   fakeThanks.removeClass('thanks').addClass('fake-thanks');
  //   fakeThanks.wrap("<div class='back'></div>").parent().appendTo(flipper);
  // }

  $('#challengeform input[type="submit"]').click(function(ev) {  
    ga('send', 'event', 'form', 'submit', 'challenge');

    ev.preventDefault();
    var form = $(this).closest('form');
    submitForm(form);

    var flipContainer = $(form).closest('.flip-container');
    var thanks = $(flipContainer).siblings('.thanks');

    // For old browsers, just hide the form and show the thanks.
    $(flipContainer).hide();
    $(thanks).fadeIn();
    // } else {
    //   // For Chrome, do a fancy flip transformation.
    //   $(flipContainer).toggleClass('flipped');
    //   setTimeout(function() { 
    //     $(flipContainer).hide();
    //     $(thanks).show();
    //   }, 650);
    // }
    return false;  
  });

  // Scroll depth.
  $.scrollDepth({
    elements: ['#challenge-wrapper', '#water-wrapper', '#resources-wrapper', '#about-wrapper', '#copyright'],
    percentage: false,
    userTiming: true,
    pixelDepth: false
  });

  // Analytics handler for nav.
  $('#nav a').on('click', function() {
    ga('send', 'event', 'nav-button', 'click', $(this).href);
  });

  // Analytics handler for all buttons.
  $('.button').on('click', function() {
    ga('send', 'event', 'button', 'click', $(this).id);
  });

});