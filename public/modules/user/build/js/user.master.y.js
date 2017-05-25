$(document).ready(function(){
  tinymce.init({selector:'#detail_information'});
  $('.wln-stepper').stepper();
  $('.date-picker').datepicker({
     format: 'dd/mm/yyyy',
  });
});
