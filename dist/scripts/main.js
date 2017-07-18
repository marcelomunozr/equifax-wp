/*"use strict";var sections=$("section"),nav=$(".nav"),nav_height=nav.outerHeight();$(window).on("scroll",function(){var e=$(this).scrollTop();sections.each(function(){var t=$(this).offset().top-nav_height,a=t+$(this).outerHeight();e>=t&&a>=e&&(nav.find("a").parent().removeClass("active"),nav.find('a[href="#'+$(this).attr("id")+'"]').parent().addClass("active"))}),console.log(e),e>50?$("header").addClass("fixed-head"):$("header").removeClass("fixed-head")}),$(".nav a, a.ancla").bind("click",function(){var e=$(this),t=e.attr("href");return $("html, body").animate({scrollTop:$(t).offset().top},800),!1}),$(window).load(function(){var e=0;$(".coles").each(function(t){var a=$(".coles").eq(t).height();a>e&&(e=a)}),$(".coles").height(e)}),$(function(){var e=["1.png","2.png"];$(".paquete").css({background:"url(images/"+e[Math.floor(Math.random()*e.length)]+") no-repeat"}),$(".btn-meh").mouseenter(function(e){e.stopPropagation(),$(".meh-zone").stop(!0,!0).animate({marginRight:"-280"})}),$(".meh-zone").mouseleave(function(e){e.stopPropagation(),$(this).stop(!0,!0).animate({marginRight:"0"})}),$(".menu-, .pattern-flow li a").click(function(e){e.stopPropagation(),$(".menu-").toggleClass("m-close"),$(".pattern-flow").stop(!0,!0).fadeToggle()})});*/
var sections = $('section'), nav = $('.nav'), nav_height = nav.outerHeight();
$(window).on('scroll', function () {
  var cur_pos = $(this).scrollTop();
  sections.each(function() {
    var top = $(this).offset().top - nav_height,
        bottom = top + $(this).outerHeight();

    if (cur_pos >= top && cur_pos <= bottom) {
      nav.find('a').parent().removeClass('active');
      nav.find('a[href="#'+$(this).attr('id')+'"]').parent().addClass('active');
    }
  });
  console.log(cur_pos);
  /* HEADER FIXED */
  if (cur_pos > 50) {
    $('header').addClass('fixed-head');
  } else {
    $('header').removeClass('fixed-head');
  }
});

$('.nav a, a.ancla').bind('click', function () {
  var $el = $(this), id = $el.attr('href');

  $('html, body').animate({
    scrollTop: $(id).offset().top //- nav_height
  }, 800);

  return false;
});


$(window).load(function() {
  /*IGUALAR ALTOS*/
  var H = 0;
  $(".coles").each(function(i){
    var h = $(".coles").eq(i).height();
    if(h > H) H = h;
  });
  $(".coles").height(H);


});

$(function() {
  var images = ['1.png', '2.png'];
  $('.paquete').css({'background': 'url('+ location.href +'/wp-content/themes/equifax/dist/images/' + images[Math.floor(Math.random() * images.length)] + ') no-repeat'});/*/wp-content/themes/equifax/dist/*/
  /*$('.paquete').css({'background': 'url(images/' + images[Math.floor(Math.random() * images.length)] + ') no-repeat'});*/
  /*$("input#rut").rut({
    formatOn: 'keyup',
    validateOn: 'change'
  });
  $("input#rut").rut().on('rutValido', function(e, rut, dv) {
    $(this).css({'border': '1px solid #ffffff'});
  });
  $("input#rut").rut().on('rutInvalido', function(e) {
    $(this).css({'border': '1px solid #ec0928'});
  });*/


  $(".btn-meh").mouseenter(function(e){
    e.stopPropagation();
    $('.meh-zone').stop(true, true).animate({marginRight: '-280'});
  });
  $(".meh-zone").mouseleave(function(e){
    e.stopPropagation();
    $(this).stop(true, true).animate({marginRight: '0'});
  });



  $('.menu-, .pattern-flow li a').click(function(e){
    e.stopPropagation();
    $('.menu-').toggleClass('m-close');
    $('.pattern-flow').stop(true, true).fadeToggle();
  });
/*  $('.m-close').click(function(e){
    e.stopPropagation();
    $('.pattern-flow').stop(true, true).fadeOut();
  });*/

});
