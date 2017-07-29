jQuery(document).ready(function($) {
  
  $('.site-navigation').slicknav({
    prependTo: '.main-header'
  });
  $('.slicknav_btn').click(function (event) {
     $('.main-header').toggleClass('open-fixed');
   });

   function fbFetch(){
         var url = "https://graph.facebook.com/kingwilliamtotnes/posts?access_token=1933495080224354|b0dc8279b8f3cc27462a981d8b11e263&limit=5";
   
         $.getJSON(url,function(json){
           var html = "<ul>";
           // <img src='https://graph.facebook.com/"+ fb.object_id +"/picture'/>
           $.each(json.data,function(i,fb){
               if(!fb.message){
                 html += "<li class='news__item'><a href='https://facebook.com/kingwilliamtotnes/" + fb.id + "' target='_blank'><span class='message'>Dartmouth Inn added a new photo</span></a><div class='clearfix'></div></li>";
               }
             else if(!fb.picture){
               html += "<li class='news__item'><a href='https://facebook.com/kingwilliamtotnes/" + fb.id + "' target='_blank'><span class='message'>" + fb.message + "</span></a><div class='clearfix'></div></li>";
             }
             else if(fb.status_type == 'shared_story'){
                 html += "<li class='news__item'><a href='https://facebook.com/kingwilliamtotnes/" + fb.id + "' target='_blank'><span class='message'>" + fb.description + "</span></a><div class='clearfix'></div></li>";
             }
               else{
               html += "<li class='news__item'><a href='https://facebook.com/kingwilliamtotnes/" + fb.id + "' target='_blank'><span class='message'>" + fb.message + "</span></a><div class='clearfix'></div></li>";
               }
   
             });
           html += "<div class='clearfix'></div></ul>";
         $('.feed-here').animate({opacity:0}, 500, function(){
           $('.feed-here').html(html);
         });
         $('.feed-here').animate({opacity:1}, 500);
       });
     }; // end fbFetch
     fbFetch();


  $('.reviews').slick({
    autoplay: true,
    arrows: false,
    autoplaySpeed: 6000,
    fade: true
  });
  

   
 });