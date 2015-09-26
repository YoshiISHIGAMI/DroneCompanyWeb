$(function(){
  "use strict";
  
  $('#gnavi a, .anchor').smoothScroll();

  var windowH = $(window).height();
  $('#header, #mainVisual, #mainVisual .item').css("height", windowH);
  
  
});
