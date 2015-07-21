$(document).ready(function () {

//	$('.slider-for').slick({
//		slidesToShow: 1,
//		slidesToScroll: 1,
//		arrows: true,
//		fade: true,
//		asNavFor: '.slider-nav'
//	});
//	$('.slider-nav').slick({
//		slidesToShow: 3,
//		slidesToScroll: 1,
//		asNavFor: '.slider-for',
//		dots: false,
//		centerMode: true,
//		focusOnSelect: true,
//		arrows: false,
//		variableWidth:true
//	});
	$('.center').slick({
		centerMode: true,
//		centerPadding: '60px',
		slidesToShow: 3,
		slidesToScroll: 1,
		responsive: [
			{
				breakpoint: 768,
				settings: {
					arrows: false,
					centerMode: true,
					centerPadding: '40px',
					slidesToShow: 3,
					slidesToScroll: 1
				}
			},
			{
				breakpoint: 480,
				settings: {
					arrows: false,
					centerMode: true,
					centerPadding: '40px',
					slidesToShow: 1,
					slidesToScroll: 1
				}
			}
		]
	});

});
	 