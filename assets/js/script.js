var app = app || {};
let scrollTop, scrollLeft = 0;

app.init = function () {
	app.tab();
	app.anchorLink();
	app.showMenu();
	app.sliderHome();
	app.sliderLoop();
	app.showMenu();
	app.sticky();
};

app.setVh = function () {
	let vh = window.innerHeight * 0.01;
	document.documentElement.style.setProperty("--vh", `${vh}px`);
}

app.showMenu = function () {
	let ele = $(".js-header-menu");
	let gloHeader = $(".p-header");
	let globalnavi = $(".p-header__menu");

	$(ele).on("click", function (e) {
		e.preventDefault();
		app.setVh();
		menuBtn = $(this).find('.open_menu');

		if (menuBtn.hasClass("is-active")) {
			app.resumeScroll();
			menuBtn.removeClass("is-active");
			globalnavi.removeClass("is-active");
			gloHeader.removeClass("openMenu");
		} else {
			app.stopScroll();
			menuBtn.addClass("is-active");
			globalnavi.addClass("is-active");
			gloHeader.addClass("openMenu");
		}
	});
};

app.sticky = function () {
	if ($("[data-header-nav-area]").length) {
		function make_sticky() {
			$("[data-header-nav-area]").stick_in_parent({
				parent: "[data-header-area]",
				offset_top: 110
			});
		}

		if ($(window).width() > 767) {
			make_sticky();
		}

		$(window).on('resize', function () {
			if ($(window).width() > 767) {
				make_sticky();
			} else {
				$("[data-header-nav-area]").trigger("sticky_kit:detach");
			}
		});
	}
}

app.tab = function () {
	$(document).on("click", ".tab a", function (e) {
		e.preventDefault();
		let target = $(this).attr("href").split('#')[1];

		$(this).parent().addClass("active").siblings().removeClass("active");
		$('[data-id="'+target+'"]').fadeIn(0).siblings().fadeOut(0);
		history.pushState({}, '', '#'+target);
	});

	if( location.hash && $(".tab li a[href='"+location.hash+"']").length ) {
		$(".tab li a[href='"+location.hash+"']").trigger("click");

		$('.pagination a.page-numbers').each(function(i,a){
			$(a).attr('href',$(a).attr('href')+'#'+$(a).parents('.tab-box').attr('data-id'));
		});
	} else {
		$(".tab li:first-child a").trigger("click");
		history.replaceState(null, null, ' ');
	}
}

app.anchorLink = function () {
	$('.anchor-link').click(function () {
		if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
			var target = $(this.hash);
			target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
			if (target.length) {
				$('html,body').animate({
					scrollTop: target.offset().top
				}, 1000);
				return false;
			}
		}
	});
}

app.sliderHome = function () {
	var swiper = new Swiper(".js-slider", {
		effect: "fade",
		loop: true,
		autoplay: {
			delay: 8000,
			disableOnInteraction: false,
		},
	});
}

app.sliderLoop = function () {
	var swiper = new Swiper(".p-album__loop", {
		autoplay: {
			delay: 1,
			disableOnInteraction: false,
		},
		spaceBetween: 30,
		slidesPerView: "auto",
		loop: true,
		speed: 14000,
	});
}

app.showMenu = function () {
	let ele = $(".js-show-menu");
	let globalnavi = $(".p-header__menu");

	$(ele).on('click', function (e) {
		console.log('hihi');
		e.preventDefault();
		if ($(this).hasClass('is-active')) {
			app.resumeScroll();
			$(this).removeClass('is-active');
			globalnavi.stop().slideUp(300);
		} else {
			app.stopScroll();
			$(this).addClass('is-active');
			globalnavi.stop().slideDown(300);
		}
	});
}

app.stopScroll = function () {
	scrollTop = $(window).scrollTop();
	scrollLeft = $(window).scrollLeft();
	$("html")
		.addClass("noscroll")
		.css("top", -scrollTop + "px");
};

app.resumeScroll = function () {
	$("html").removeClass("noscroll");
	$(window).scrollTop(scrollTop);
	$(window).scrollLeft(scrollLeft);
};

$(document).ready(function() {
	$('.page-top a').click(function() {
		$('html, body').animate({ scrollTop : 0 });
		return false;
	});

	$(window).on("scroll", function () {
		let top = $(this).scrollTop();
		if (top > 80) {
			$('.p-header').addClass("is-fixed");
		} else {
			$('.p-header').removeClass("is-fixed");
		}
	});

	if ($(".wow").length > 0) {
		var wow = new WOW({
			animateClass: 'animate_animated'
		});
		wow.init();
	}

	app.init();
});