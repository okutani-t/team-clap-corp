$(function(){
  var window_width = $(window).width();
if( window_width > 768 ) {
  $('#popup').addClass('pc-popup-delay');
} else {
  $('#popup').removeClass('pc-popup-delay');
};

 $(window).scroll(function(){
   $('.column-item').each(function(){
     var POS = $(this).offset().top;
     var scroll = $(window).scrollTop();
     var windowHeight = $(window).height();

     if(scroll > POS - windowHeight + windowHeight/5){
       $(this).css({
         'opacity':'1',
         'transform': 'translateX(0)'
       });
     }else{
       $(this).css({
       'opacity':'0',
       'transform': 'translateY(70px)',
       });
     }
   });
 });
});
