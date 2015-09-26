$(function(){
  "use strict";
  
  $('#gnavi a').smoothScroll();

  var windowH = $(window).height();
  $('#header, #mainVisual, #mainVisual .item').css("height", windowH);
  
  
});
