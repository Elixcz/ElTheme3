/** Javascript **/
$(document).ready(function() {
	/** GoTop Button **/
	$(function () {
		$('#goTop').goTop({
			"src": "bi bi-arrow-up-square-fill",
			"appear":200,
			"scrolltime":500,
			"opacity":0.75
		});
	});
	/** Magnific popup **/
	$('.lightbox').magnificPopup({
		type:'image',
		tClose: 'Zavřít',
		tLoading: 'Načítám...',
		image: {
			tError: '<a href="%url%">Obrázek</a> nelze načíst.'
		}
	});
	$('.gallery').magnificPopup({
		delegate: 'a',
		type: 'image',
		gallery: {
			enabled: true,
			tPrev: 'Předchozí',
			tNext: 'Další',
			tCounter: '%curr% z %total%'
		}
	});
});
