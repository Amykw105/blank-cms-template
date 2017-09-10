jQuery(document).ready(function($) {
    
    var site_account = "kingwilliamtotnes";
    var access_token = "1933495080224354";
    var secret = "b0dc8279b8f3cc27462a981d8b11e263";
    var limit = "5";
    
    
    function fbFetch(){
         var url = "https://graph.facebook.com/" + site_account + "/posts?access_token=" + access_token + "|" + secret + "&limit=" + limit;
   
         $.getJSON(url,function(json){
           var html = "<ul>";
           $.each(json.data,function(i,fb){
               if(!fb.message){
                 html += "<li class='news__item'><a href='https://facebook.com/" + site_account + "/photos/" + fb.id + "' target='_blank'><span class='message'>Added a new photo</span></a><div class='clearfix'></div></li>";
               }
             else if(!fb.picture){
               html += "<li class='news__item'><a href='https://facebook.com/" + site_account + "/photos/" + fb.id + "' target='_blank'><span class='message'>" + fb.message + "</span></a><div class='clearfix'></div></li>";
             }
             else if(fb.status_type == 'shared_story'){
                 html += "<li class='news__item'><a href='https://facebook.com/" + site_account + "/photos/" + fb.id + "' target='_blank'><span class='message'>" + fb.description + "</span></a><div class='clearfix'></div></li>";
             }
               else{
               html += "<li class='news__item'><a href='https://facebook.com/" + site_account + "/photos/" + fb.id + "' target='_blank'><span class='message'>" + fb.message + "</span></a><div class='clearfix'></div></li>";
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
     
});