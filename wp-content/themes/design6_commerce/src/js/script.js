$(document).ready(function(){

	var logoStartSize = $('body header #logo img').css('max-width')
	var headerSize = $('header').css('height');
	var textColor = document.styleSheets[5].cssRules[2].style.color
	var headerColor = document.styleSheets[5].cssRules[1].style.backgroundColor;
	var asideColor = headerColor

	console.log(document.styleSheets[5].cssRules[2].style.color);

	$('.aside-wrap').css({
		'background-color': asideColor
	})

	$('banner').css({
		'margin-top':headerSize
	})

	$('body header ul li a').css({
		color: textColor
	})

	$('body .aside-wrap ul li a').css({
		color: textColor

	})
	console.log(headerSize)

	$(window).scroll(function(){

		//console.log(window.scrollY);

			if (window.scrollY > 0) {

				$('body header #logo img').css({
					'width':'250px'
				})

				$('header').css({
					'height' : '80px',
					'background-color': headerColor
				})


			}else if(window.scrollY === 0){

				$('body header #logo img').css({
					'width': logoStartSize
				})

				$('header').css({
					height: headerSize,
					'background-color':'initial'
				})

			}

	});


	//MENU TOGGLE EVENTS

	$('.bars').click(function(e){

		console.log('click');

		var e = e || window.event;

		var target = e.target || e.srcElement;

		console.log(target.className);


		if(target.className == "bars open"){

		$('.bars').removeClass('open');
		$('.page-wrapper').removeClass('open');
		$('.aside-wrap').removeClass('open');
		$('html').removeClass('asideVisible');

		}else{


		$('.bars').addClass('open')
		$('.aside-wrap').addClass('open');

		$('.page-wrapper').addClass('open');
		$('html').addClass('asideVisible');

		}






		})
	/*

		document.addEventListener('click', function(e){

		var e = e || window.event;

		var target = e.target || e.srcElement;

		console.log(target.className);

		if(target.className == "bars open"){

		$('.bars').removeClass('open');
		$('.page-wrapper').removeClass('open');
		$('.aside-wrap').removeClass('open');
		$('html').removeClass('asideVisible');

		}

	}, false);

	*/

	});
	



