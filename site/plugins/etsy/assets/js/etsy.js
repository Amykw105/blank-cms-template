// this is the bit of code that starts everything in motion!
jQuery(document).ready(function ($) {

// just setting some variables...
var api_key = "6pyxveemx722x4bfog2r6of0";
var shop_name = "Stitchrovia";
var keyword = "pattern";

function getItems() {

    $.ajax({
        url: "https://openapi.etsy.com/v2/shops/" + shop_name + "/listings/active.js?api_key=" + api_key + "&includes=MainImage&fields=url,title,keywords&limit=4&tags=" + keyword,
        dataType: 'jsonp',
        success: function (resp) {
    //console.log(resp);
            //display listing images as links
            for (i = 0; i < resp.results.length; i++) {
                $("#shop").append('<div class="front-shop-item"><a target="_blank" href="/shop" style="background-image:url(' + resp.results[i].MainImage.url_170x135 + ');"></a></div>');
            }
        },
        //end success block
    });
}

getItems();

// this function adds all the listings with a particular shop_section_id to the website
function populateSection(shopSectionID) {

    $.ajax({
        url: "https://openapi.etsy.com/v2/shops/" + shop_name + "/listings/active.js?api_key=" + api_key + "&includes=MainImage&fields=url,title&limit=10",
        dataType: 'jsonp',
        success: function (resp) {
    console.log(resp);
            //display listing images as links
            for (i = 0; i < resp.results.length; i++) {
                if (resp.results[i].shop_section_id === shopSectionID) {
                    //don't show prices:
                    $("#" + shopSectionID).append('<div style="display: inline-block"><a target="_blank" href="' + resp.results[i].url + '">' + '<img class="pullImg" style="padding:' + imgPadding + '" src="' + resp.results[i].MainImage.url_170x135 + '"</img></a></div>');
                    //show prices:
                    //$("#" + shopSectionID).append('<div style="display: inline-block"><a target="_blank" href="' + resp.results[i].url + '">' + '<img class="pullImg" style="padding-top:' + imgPadding + ';padding-left:' + imgPadding + ';padding-right' + imgPadding + '" alt="' + resp.results[i].description + '" src="' + resp.results[i].MainImage.url_170x135 + '"></img></a><center>$' + resp.results[i].price.slice(0, -3) + '</div>');

                }
            }

            // slight opacity fade on mouse over
            $(".pullImg").hover(function () {
                $(this).fadeTo('fast', .7);
            },

            function () {
                $(this).fadeTo('fast', 1);
            });
            // end opacity fade

        },
        //end success block
    });

}

// this function pulls information on how your shop is organized into sections. It creates an area for each section and then populates it with the right listings (by calling the above function)!
function createSections() {
    $.ajax({
        url: "https://openapi.etsy.com/v2/shops/" + shop_name + "/sections.js?api_key=" + api_key,
        dataType: 'jsonp',
        success: function (resp2) {
            for (i = 0; i < resp2.results.length; i++) {
                $('#shop').append("<h2>" + resp2.results[i].title + "</h2><div id=" + resp2.results[i].shop_section_id + "></div>");
                populateSection(resp2.results[i].shop_section_id);
            }
        }
    });
}


    //create sections
    //createSections();
});