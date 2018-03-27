$(function(){
  $('.top-header').hide();
 $(window).scroll(function(){
     var POS = $('.about').offset().top;
     var scroll = $(window).scrollTop();
     var windowHeight = $(window).height();
     if(scroll > POS - windowHeight + windowHeight/2){
       $('.top-header').fadeIn();
     }else{
       $('.top-header').fadeOut();
     }
   });
 });
