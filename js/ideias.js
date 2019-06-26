$(function(){
  var name_todas = $('.ideias-menu ul li[name=todas]');
  var name_menu = $('.ideias-menu ul li[name=menu]');
  var name_animation = $('.ideias-menu ul li[name=animation]');
  var name_hover = $('.ideias-menu ul li[name=hover]');
  var menu = $('.menu-gif');
  var animation = $('.animation-gif');
  var lis = $('.ideias-menu li');
  var todas = $('.todas');

  name_todas.click(function(){
    todas.fadeIn();
    lis.css('color','#1a2f40');
    name_todas.css('color','#27b4fc');
  });

  name_menu.click(function(){
    todas.fadeOut();
    menu.fadeIn();
    lis.css('color','#1a2f40');
    name_menu.css('color','#27b4fc');
  });

  name_animation.click(function(){
    todas.fadeOut();
    animation.fadeIn();
    lis.css('color','#1a2f40');
    name_animation.css('color','#27b4fc');
  });
});
