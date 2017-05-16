(function($){
  $.fn.stepper = function( options ){

    var settings = $.extend({
      showDot:true,
    },options);

    var _current = 0;
    var items = this.find('.stepper-content .stepper-item');
    var stepper_content = this.find('.stepper-content');
    var btn_step_control = this.find('.btn-step-control');

    if(settings.showDot){
      var ul = $('<ul>');
      for(let i = 0 ; i < items.length ; i ++){
        ul.append($('<li>')
          .css('width',100*1/items.length + '%')
          .html($('<span>').addClass('step')
            .html('<i class="glyphicon glyphicon-ok"></i>')
          )
        );
      }
      this.prepend(
        $('<div>').addClass('step-dot').html(ul)
      );
    }

    var steps = this.find('.step-dot .step');


    btn_step_control.click(function(e){
      e.preventDefault();
      flag = $(this).data('forward');

      switch (flag) {
        case 'prev':
          if(_current>0){
              _current-=1;
              $('.wln-stepper .step-dot ul li:eq(' + _current +')').removeClass('active');

          }else{
            return;
          }
          break;
        case 'next':
          if(_current<items.length-1){
            _current+=1;
            $('.wln-stepper .step-dot ul li:eq(' + (_current-1) +')').addClass('active');

          }else{
            return;
          }
          break;
      }

      $('.stepper-content').animate({left: -(_current*100)+"%"});
    });

  }
})(jQuery);
