$(document).ready(function(){

	var logoStartSize = $('body header #logo img').css('max-width')

	$(window).scroll(function(){

		console.log(window.scrollY);

			if (window.scrollY > 0) {

				$('body header #logo img').css({
					'max-width':'250px'
				})


			}else if(window.scrollY === 0){

				$('body header #logo img').css({
					'max-width': logoStartSize
				})

			}

	});
	
})



