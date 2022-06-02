$(function(){
 	$('.show-order-form2').on('click', function() {
 		$('.form-layout').css('display', 'flex');
 	});

 	$('.close-button2').on('click', function(){
 		$('.form-layout').css('display', 'none');
 	});


 	// $('.order-form button').on('click', function(){
 	// 	let formData = $('.order-form').serializeArray();
 	// 	let request = {}
 	// 	for(i in formData){
	// 		request[formData[i].name] = formData[i].value;
 	// 	}

 	// 	$.post('/api/api.php', request, function(response){
 	// 		if(response == "1") {
 	// 			$('.form-layout').css('display', 'none');
 	// 		}
 	// 	});

 		//return false;
 	// });
 });

