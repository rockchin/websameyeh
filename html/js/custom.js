$(document).ready(function(){
	$('.center').slick({
		centerMode: true,
		centerPadding: 0,
		slidesToShow: 3,		
		variableWidth: true,
		responsive: [
		{
			breakpoint: 768,
			settings: {
				arrows: false,
				centerMode: true,
				centerPadding: 0,
				slidesToShow: 3
			}
		},
		{
			breakpoint: 480,
			settings: {
				arrows: false,
				centerMode: true,
				centerPadding: 0,
				slidesToShow: 3
			}
		}
		]
	});
});