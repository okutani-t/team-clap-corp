$(document).ready(function(){
  $('#backTop').hide();
  $(function(){
    $(window).scroll(function(){
      if($(this).scrollTop()>500){
        $('#backTop').fadeIn();
      }else{
        $('#backTop').fadeOut();
      }
    });
  });
  $(this).click(function(){
  $('body,html').animate({
  scrollTop: 0},500);
  return false;
 });
});
