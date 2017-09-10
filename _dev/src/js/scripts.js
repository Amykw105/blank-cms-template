jQuery(document).ready(function($) {
  
  $('.site-navigation').slicknav({
    prependTo: '.main-header'
  });
  $('.slicknav_btn').click(function (event) {
     $('.main-header').toggleClass('open-fixed');
   });

  $('.reviews').slick({
    autoplay: true,
    arrows: false,
    autoplaySpeed: 6000,
    fade: true
  });
  
  if (document.documentElement.clientWidth < 700) {
	  window.fitText( document.getElementById("responsive_headline"), 1.2 );
  }
  

   
 });