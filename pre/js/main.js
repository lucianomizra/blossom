var App = {
	config:{
		url: '',
		layout: '',
		section: ''
	},
	Init: function(config){

		App.config = $.extend(App.config, config || {});
		if(window.name != "") App.config.canvas = true;
		$(document).ready(function(){

			Uclone($('.siteNav__lang, .siteNav__search'), $('.slideSiteNav__cloneSearch'));
			Uclone($('.userNav_myAccount, .userNav_Items'), $('.slideUserNav__cloneNav'));
			Accordion($('.accordion'));
			siteNav();
			userNav();
			// $('#slideUserNav__Items_accordion').collapse();

			new Swiper('.carousel-products .swiper-container',  {
		      loop: true,
		      slidesPerView: 3,
		      spaceBetween: 15,
		      nextButton: '.carousel-products .swiper-button-next',
       		  prevButton: '.carousel-products .swiper-button-prev',
		    });   

			switch(App.config.section) {
				case 'home': Home();
				break;
			}
			
		});

	}
}

var Home = (function() {

	var homeSwiper = new Swiper('#slide-home',  {
      loop: true,
      pagination: '.swiper-pagination',
      paginationClickable: true
    });   
});

var siteNav = (function() {

	$('.siteNav__toggle, .slideSiteNav__close').click(function() {
		$('.slideSiteNav').toggleClass('open');

	});

});

var userNav = (function() {

	$('.userNav__toggle, .slideUserNav__close').click(function() {
		$('.userNav__toggle, .slideUserNav__close').removeClass('active');

		if( $(this).hasClass('userNav_myAccount')) {
			$('.slideUserNav').addClass('open');
			$('.userNav_myAccount').addClass('active');
			
			$('.slideUserNav__MyAccount').addClass('open');
			$('.slideUserNav__Items').removeClass('open');
		}

		if( $(this).hasClass('userNav_Items')) {
			$('.slideUserNav').addClass('open');
			$('.userNav_Items').addClass('active');

			$('.slideUserNav__Items').addClass('open');
			$('.slideUserNav__MyAccount').removeClass('open');
			
		}

		if( $(this).hasClass('slideUserNav__close')) {
			$('.slideUserNav').removeClass('open');
			
		}
	});

});

var Uclone = (function (clone, inside) {

	$(inside).append( $(clone).clone() );

});

var Accordion = (function (element) {
	$(element).each(function(z,accordion) {

		var a = $(accordion);
		var items = $('.accordion__item', a);

		$(items).each(function(k,item) {
		
			var title = $('.accordion__item__title', item);

			var h = $('.accordion__item__content__container', $(item)).height();


			if( $(title).hasClass('has-items') ) {
				title.on('click', function() {
					var _i = $(this).parent();
					if( _i.hasClass('open') ) {

						_i.removeClass('open');
						$('.accordion__item__content',$(_i)).css('max-height',0);
					} else {

						$(items).removeClass('open');
						$('.accordion__item__content',$(items)).css('max-height',0);
	
						_i.addClass('open');
						$('.accordion__item__content',$(item)).css('max-height',h);
					}
				});
			}

		});

	});

});
