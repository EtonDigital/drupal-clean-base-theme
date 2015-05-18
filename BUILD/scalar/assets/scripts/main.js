/**
 * Created by Dexter on 01-Dec-14.
 */

(function($) {

  Drupal.behaviors.main = {
    attach: function (context, settings) {
      // main plugin call go here
      // in format = $('some el' , context ).pluginName();

      $('.messages', context).messsageClose();

    }
  };

})(jQuery);


(function($) {

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