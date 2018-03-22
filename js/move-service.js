$(function(){
 $(window).scroll(function(){
   $('.fadeIn').each(function(){
     var POS = $(this).offset().top;
     var scroll = $(window).scrollTop();
     var windowHeight = $(window).height();

     if(scroll > POS - windowHeight + windowHeight/2){
       $(this).css({
         'opacity':'1',
         'transform': 'translateX(0)'
       });
     }else{
       $(this).css({
       'opacity':'0',
       'transform': 'translateX(70px)',
       });
     }
   });
   $('.fadeIn2').each(function(){
     var POS = $(this).offset().top;
     var scroll = $(window).scrollTop();
     var windowHeight = $(window).height();

     if(scroll > POS - windowHeight + windowHeight/2){
       $(this).css({
         'opacity':'1',
         'transform': 'translateX(0)'
       });
     }else{
       $(this).css({
       'opacity':'0',
       'transform': 'translateX(-70px)',
       });
     }
   });
 });
});
