var App={config:{url:"",layout:"",section:""},Init:function(e){App.config=$.extend(App.config,e||{}),""!=window.name&&(App.config.canvas=!0),$(document).ready(function(){switch(Uclone($(".siteNav__lang, .siteNav__search"),$(".slideSiteNav__cloneSearch")),Uclone($(".userNav_myAccount, .userNav_Items"),$(".slideUserNav__cloneNav")),Accordion($(".accordion")),siteNav(),userNav(),new Swiper(".carousel-products .swiper-container",{loop:!0,slidesPerView:3,spaceBetween:15,nextButton:".carousel-products .swiper-button-next",prevButton:".carousel-products .swiper-button-prev"}),App.config.section){case"home":Home()}})}},Home=function(){new Swiper("#slide-home",{loop:!0,pagination:".swiper-pagination",paginationClickable:!0})},siteNav=function(){$(".siteNav__toggle, .slideSiteNav__close").click(function(){$(".slideSiteNav").toggleClass("open")})},userNav=function(){$(".userNav__toggle, .slideUserNav__close").click(function(){$(".userNav__toggle, .slideUserNav__close").removeClass("active"),$(this).hasClass("userNav_myAccount")&&($(".slideUserNav").addClass("open"),$(".userNav_myAccount").addClass("active"),$(".slideUserNav__MyAccount").addClass("open"),$(".slideUserNav__Items").removeClass("open")),$(this).hasClass("userNav_Items")&&($(".slideUserNav").addClass("open"),$(".userNav_Items").addClass("active"),$(".slideUserNav__Items").addClass("open"),$(".slideUserNav__MyAccount").removeClass("open")),$(this).hasClass("slideUserNav__close")&&$(".slideUserNav").removeClass("open")})},Uclone=function(e,t){$(t).append($(e).clone())},Accordion=function(e){$(e).each(function(e,t){var n=$(t),i=$(".accordion__item",n);$(i).each(function(e,t){var n=$(".accordion__item__title",t),s=$(".accordion__item__content__container",$(t)).height();$(n).hasClass("has-items")&&n.on("click",function(){var e=$(this).parent();e.hasClass("open")?(e.removeClass("open"),$(".accordion__item__content",$(e)).css("max-height",0)):($(i).removeClass("open"),$(".accordion__item__content",$(i)).css("max-height",0),e.addClass("open"),$(".accordion__item__content",$(t)).css("max-height",s))})})})};