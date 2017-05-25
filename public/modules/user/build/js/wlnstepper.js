//Khai báo các hằng sử dụng.
var LANG_SET_MESSAGES = {
  vi:{
    validate_error:{
      accepted:'(Bạn cần đồng ý với chúng tôi)',
      required:'Những trường có dấu * là thông tin bắt buộc.',
      remote: "Hãy sửa lại thông tin ở trường này.",
      email: "Bạn chưa nhập đúng định dạng email",
      url: "Bạn chưa nhập đúng định dạng url",
      date: "Bạn chưa nhập đúng định dạng ngày tháng.",
      dateISO: "Bạn chưa nhập đúng ngày (ISO).",
      number: "Bạn chưa nhập đúng định dạng số",
      digits: "Trường này chỉ chấp nhận giá trị nguyên",
      creditcard: "Số thẻ chưa chính xác",
      equalTo: "Giá trị xác nhận chưa khớp với nguyên mẫu.",
      accept: "Please enter a value with a valid extension.",
      maxlength: jQuery.validator.format("Hãy nhập thông tin với độ dài tối đa là  {0} kí tự"),
      minlength: jQuery.validator.format("Thông tin yêu cầu cần có ít nhất {0} kí tự."),
      rangelength: jQuery.validator.format("Please enter a value between {0} and {1} characters long."),
      range: jQuery.validator.format("Chỉ chấp nhận giá trị từ {0} đến {1}"),
      max: jQuery.validator.format("Nhập giá trị nhỏ hơn {0}"),
      min: jQuery.validator.format("Nhập giá trị lớn hơn hoặc bằng {0}")
    }
  },
  en:{
    validate_error:{
      accepted:'(You need to agree with us)',
      required: 'This field is required.',
      remote: "Please fix this field.",
      email: "Please enter a valid email address.",
      url: "Please enter a valid URL.",
      date: "Please enter a valid date.",
      dateISO: "Please enter a valid date (ISO).",
      number: "Please enter a valid number.",
      digits: "Please enter only digits.",
      creditcard: "Please enter a valid credit card number.",
      equalTo: "Please enter the same value again.",
      accept: "Please enter a value with a valid extension.",
      maxlength: jQuery.validator.format("Please enter no more than {0} characters."),
      minlength: jQuery.validator.format("Please enter at least {0} characters."),
      rangelength: jQuery.validator.format("Please enter a value between {0} and {1} characters long."),
      range: jQuery.validator.format("Please enter a value between {0} and {1}."),
      max: jQuery.validator.format("Please enter a value less than or equal to {0}."),
      min: jQuery.validator.format("Please enter a value greater than or equal to {0}.")
    }
  }
}
//Kết thúc khai báo hằng.


function getCookie(cname) {
    var name = cname + "=";
    var decodedCookie = decodeURIComponent(document.cookie);
    var ca = decodedCookie.split(';');
    for(var i = 0; i <ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0) == ' ') {
            c = c.substring(1);
        }
        if (c.indexOf(name) == 0) {
            return c.substring(name.length, c.length);
        }
    }
    return "";
}

var MESSAGES = (function(){
  var lang = getCookie('lang');
  var x;
  switch (lang) {
    case 'en':
      x=  LANG_SET_MESSAGES.en;
      break;
    case 'vi':
      x= LANG_SET_MESSAGES.vi;
      break;
    default:
      x= LANG_SET_MESSAGES.en;
      break;
  }

  return x;
})();


jQuery.extend(jQuery.validator.messages, {
    required: MESSAGES.validate_error.required,
    remote: MESSAGES.validate_error.remote,
    email: MESSAGES.validate_error.email,
    url: MESSAGES.validate_error.url,
    date: MESSAGES.validate_error.date,
    dateISO: MESSAGES.validate_error.dateISO,
    number: MESSAGES.validate_error.number,
    digits: MESSAGES.validate_error.digits,
    creditcard: MESSAGES.validate_error.creditcard,
    equalTo: MESSAGES.validate_error.equalTo,
    accept: MESSAGES.validate_error.accept,
    maxlength: MESSAGES.validate_error.maxlength,
    minlength:MESSAGES.validate_error.minlength,
    rangelength: MESSAGES.validate_error.rangelength,
    range: MESSAGES.validate_error.range,
    max: MESSAGES.validate_error.max,
    min: MESSAGES.validate_error.min
});





(function($){
  $.fn.stepper = function( options ){

    var settings = $.extend({
      showDot:true,
    },options);

    var _current = 0;
    var items = this.find('.stepper-content .stepper-item');
    var stepper_content = this.find('.stepper-content');
    var btn_step_control = this.find('.btn-step-control');
    var form_register_trainer = $('#myform');
    var submit = form_register_trainer.find('input[type="submit"]');
    var next = form_register_trainer.find('.btn-step-control[data-forward="next"]');
    var validate = form_register_trainer.validate({
      errorClass:'error',
      rules:{
        opinion:{
          required:true
        },
        first_name:{
          required:true,
          maxlength:255,
        },
        last_name:{
          required:true,
          maxlength:255,
        },
        email:{
          required:true,
          maxlength:255,
          email:true
        },
        phone:{
          required:true,
          maxlength:15,
          number:true
        },
        birthday:{
          required:true,
        },
        company:{
          required:true
        },
        location:{
          required:true
        },
        field:{
          required:true,
        },
        detail_information:{
          required:true,
        }
      },
      messages:{
        opinion:{
          required:MESSAGES.validate_error.accepted
        }
      }
    });

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
          if(submit.is(':visible')){
              submit.hide();
          }
          if(!next.is(':visible')){
              next.show();
          }

          if(_current>0){
              _current-=1;
              $('.wln-stepper .step-dot ul li:eq(' + _current +')').removeClass('active');

          }else{
            return;
          }
          break;
        case 'next':
          if(_current<items.length-1){

            if(_current == items.length-2){
              console.log('cc');
              submit.show();
              next.hide();
            }

            var inputs = $(items[_current]).find('input');
            var check = true;

            inputs.each(function(){
              check  = check & validate.element ($(this));
            });

            if(check){
              _current+=1;
              $('.wln-stepper .step-dot ul li:eq(' + (_current-1) +')').addClass('active');
            }else{
              return;
            }

          }else{
            return;
          }
          break;
      }

      $('.stepper-content').animate({left: -(_current*100)+"%"});
    });

  }
})(jQuery);
