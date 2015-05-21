/**
 * Created by Dexter on 01-Dec-14.
 */

(function($) {

  Drupal.behaviors.main = {
    attach: function (context, settings) {
      // main plugin call go here
      // in format = $('some el' , context ).pluginName();

      $('.messages', context).messsageClose();


      $('#toolbar', context).once('dru-res', function(){
        $(this).drupalToolbar({
          insertBefore: '#secondary-menu'
        });
      });

    }
  };

})(jQuery);


(function($) {

  $.drupalToolbar = function( element , options ) {

    element.data('drupalToolbar' , this);
    var settings = {},
      button, close,
      preCalc = false,
      obj = this;

    this.init = function( options ) {
      settings = $.extend( {} , $.drupalToolbar.defaultOptions , options );
      element.data('settings-drupalToolbar', settings);
      this.addButton();
      this.attachEvent();

      if( $(window).width() > settings.toolbarBreak ) {
        $('body').addClass('toolbar');
      } else {
        $('body').removeClass('toolbar');
      }

      $(window).on('resize', function(){
        if( $(this).width() > settings.toolbarBreak ) {
          if( preCalc ) {
            obj.preCalc();
            $('body').addClass('toolbar');
          }
        } else {
          if( preCalc == false ) {
            preCalc = true;
            $('body').removeClass('toolbar');
          }
        }
      });

    };

    this.preCalc = function() {
      preCalc = false;
      var tmpTop = element.outerHeight();
      $('body').css('padding-top',tmpTop);
    };

    this.attachEvent = function() {
      button.on('click', function(){
        element.show();
      });

      close.on('click', function(){
        element.hide();
      });
    };

    this.addButton = function() {
      $( settings.insertBefore ).after('<a class="drupal-toolber-ex nav-mobile" href="javascript:;">'+ settings.menuButton +'</a>');
      button = $(settings.insertBefore).parent().find('.drupal-toolber-ex');
      close = $('<a class="cloase-toolbar" href="javascript:;">' + settings.closeButton + '</i></a>').appendTo(element);
    };

    this.init( options );
  };

  $.drupalToolbar.defaultOptions = {
    target: false,
    insertBefore: false,
    toolbarBreak: 1190,
    closeButton: '<i class="fa fa-times"></i>',
    menuButton: '<i class="fa fa-cogs"></i>'
  };

  $.fn.drupalToolbar = function(options) {
    return this.each(function() {
      (new $.drupalToolbar($(this), options));
    });
  };

  // message close init btn
	$.messsageClose = function( element , options ) {

		element.data('messsageClose' , this).addClass('messsageclose');
	  var settings = {},
      closeBtn,
      obj = this;

	  this.init = function( options ) {
      settings = $.extend( {} , $.messsageClose.defaultOptions , options );
      element.data('settings_messsageClose', settings);

	    this._addBtnClose();
      this.attachEvent();
	  };

    this.getSettings = function( el ) {
      settings = el.closest('.messsageclose' , element).data('settings_messsageClose');
    };

    this._addBtnClose = function() {
      closeBtn = $('<a class="close-message" href="javascript:;">close</a>').appendTo(element);
    };

    this.attachEvent = function() {
      closeBtn.click(function(){
        obj.getSettings( $(this) );
        element.fadeOut( settings.fadeDuration , function(){
          $(this).remove();
        });
      });
    };

	  this.init(options);
	};

  $.messsageClose.defaultOptions = {
    fadeDuration: 500
  };

	$.fn.messsageClose = function(options) {
	  return this.each(function() {
	    (new $.messsageClose($(this) , options));
	  });
	};
// end message close



})(jQuery);