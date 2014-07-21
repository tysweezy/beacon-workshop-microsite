$(document).ready(function(){
  $('.owl-carousel').owlCarousel({
  	nav: true,
  	slideSpeed: 300,
  	paginationSpeed: 400,
  	items: 1,
  	navRewind: false,
  	autoplayHoverPause: true,
  	autoplay: 7000,
  	navText: ['&#x2190;','&#8594;']
  });


 var pull     =  $('#pull');
 var menu     =  $('nav ul');
 menuHeight   =  menu.height();

 $(pull).on('click', function(e){
   e.preventDefault();
   menu.slideToggle("fast", function(){
    //animation complete
   });
 });

 $(window).resize(function(){
  var w = $(window).width();
  if (w > 320 && menu.is(':hidden')) {
    menu.removeAttr('style');
  }
 });



 /*$(window).resize(function(){
  var width = $(document).width();

  if (width < 770) {
    
   
    $('nav.main-nav').addClass('mobile');
    

    $('.mobileMenu').click(function (){
      $('nav.main-nav ul li').slideToggle();
    }); 

  } else {

    $('nav.main-nav').removeClass('mobile');
    // add desktop class
    // for desktop version and larger screens 771px and above

  }

});*/


  $('ul#company-logos li a').click(function(){
    $('li a.active').removeClass('active');
    $(this).addClass('active');
  });


 $('#jwt-quote').show();
  $('#best-quote').hide();
  $('#dish-quote').hide();
  $('#yougov-quote').hide();
  $('#ebay-quote').hide();
  

 $('#jwt').click(function(){
   $('#jwt-quote').show();
  $('#best-quote').hide();
  $('#dish-quote').hide();
  $('#yougov-quote').hide();
  $('#ebay-quote').hide();

  
  
 });
  
 $('#bestwestern').click(function(){
   $('#best-quote').fadeIn();
    $('#dish-quote').hide();
  	$('#yougov-quote').hide();
  	$('#jwt-quote').hide();
    $('#ebay-quote').hide();


 });
  
 $('#dish').click(function(){
   $('#dish-quote').fadeIn();
  	$('#yougov-quote').hide();
  	$('#jwt-quote').hide();
  	$('#best-quote').hide();
    $('#ebay-quote').hide();

 });

  $('#yougov').click(function(){
   $('#dish-quote').hide();
  	$('#yougov-quote').fadeIn();
  	$('#jwt-quote').hide();
  	$('#best-quote').hide();
    $('#ebay-quote').hide();

 });

  $('#ebay').click(function() {
     $('#ebay-quote').fadeIn();
    $('#dish-quote').hide();
    $('#yougov-quote').hide();
    $('#jwt-quote').hide();
    $('#best-quote').hide();
  });
});