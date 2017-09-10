jQuery(document).ready(function($){
    
    var token = '5645476372.07f05e4.899d50d62e3d4a85a94cbea2ff058cd2',
    username = 'dartmouthinntotnes', 
    num_photos = 10;
 
$.ajax({ 
	url: 'https://api.instagram.com/v1/users/search',
	dataType: 'jsonp',
	type: 'GET',
	data: {access_token: token, q: username}, 
	success: function(data){
	//	console.log(data);
		$.ajax({
			url: 'https://api.instagram.com/v1/users/' + data.data[0].id + '/media/recent', 
			dataType: 'jsonp',
			type: 'GET',
			data: {access_token: token, count: num_photos},
			success: function(data2){
			//	 console.log(data2);
				for(x in data2.data){
					$('.instagram ul').append('<li><a href="'+data2.data[x].link+'" rel="nofollow" target="_blank"><img src="'+data2.data[x].images.low_resolution.url+'" alt="'+data2.data[x].caption.text+'"></a></li>');  
				}
    			},
			error: function(data2){
				// console.log(data2);
			}
		});
	},
	error: function(data){
	//	console.log(data);
	}
});
});