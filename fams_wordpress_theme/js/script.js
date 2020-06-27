window.onload = function() {
    scroll_effect();
  
    $(window).scroll(function(){
     scroll_effect();
    });
  
    function scroll_effect(){
     $('.effect_fade').each(function(){
      var elemPos = $(this).offset().top;
      var scroll = $(window).scrollTop();
      var windowHeight = $(window).height();
      if (scroll > elemPos - windowHeight){
       $(this).addClass('effect_scroll');
      }
     });
    }
};