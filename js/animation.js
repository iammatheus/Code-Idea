$(function(){
  //ANIMAR AO SCROLL
  debounce = function(func, wait, immediate){
    var timeout;
    return function(){
      var context = this, args = arguments;
      var later = function(){
        timeout = null;
        if(!immediate) func.apply(context, args);
      };
      var callNow = immediate && !timeout;
      clearTimeout(timeout);
      timeout = setTimeout(later, wait);
      if(callNow) func.aplly(context, args);
    };
  };

  (function(){
  var $target = $('.anime-slide,.anime-slide2,.anime-slide3,.anime-info,.anime-info2,.anime-logo,.anime-ideias'),
      animationClass = 'anime-start',
      offset = $(window).height() * 3.5/4;

  function animeScroll(){
    var documentTop = $(document).scrollTop();

    $target.each(function(){
      var itemTop = $(this).offset().top;
      if(documentTop > itemTop - offset){
        $(this).addClass(animationClass);
      }else{
        $(this).removeClass(animationClass);
      }
    });
  }
  animeScroll();

  $(document).scroll(debounce(function(){
    animeScroll();
  },50));
}());
})
