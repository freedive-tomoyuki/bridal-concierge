// JavaScript Document
var windowWidth = parseInt($(window).width());
/*■■■■■■■■■■■■■■■■■■
scroll
■■■■■■■■■■■■■■■■■■*/
$(function () {
	$('a[href^="#"]').click(function () {
		var speed = 400;
		var href = $(this).attr("href");
		var target = $(href == "#" || href == "" ? 'html' : href);
		var headerHeightPc = 150;
		var headerHeightSp = 70;
		if (windowWidth >= 900) {
		var positionPc = target.offset().top - headerHeightPc;
		$('body,html').animate({
			scrollTop: positionPc
		}, speed, 'swing');
		return false;
	}
	else {
		var positionSp = target.offset().top - headerHeightSp;
		$('body,html').animate({
			scrollTop: positionSp
		}, speed, 'swing');
		return false;
  }
});
});
/*■■■■■■■■■■■■■■■■■■
switch
■■■■■■■■■■■■■■■■■■*/
$(function () {
	var $elem = $('.switch');
	var sp = '_sp.';
	var pc = '_pc.';
	var replaceWidth = 900;

	function imageSwitch() {
		var windowWidth = parseInt($(window).width());

		$elem.each(function () {
			var $this = $(this);
			if (windowWidth >= replaceWidth) {
				$this.attr('src', $this.attr('src').replace(sp, pc));

			} else {
				$this.attr('src', $this.attr('src').replace(pc, sp));
			}
		});
	}
	imageSwitch();

	var resizeTimer;
	$(window).on('resize', function () {
		clearTimeout(resizeTimer);
		resizeTimer = setTimeout(function () {
			imageSwitch();
		}, 200);
	});
});

$(function () {
	if (windowWidth <= 900) {
		$('#nav_toggle , nav a').click(function () {
			$('nav').toggleClass('open');
			$('.menu').slideToggle(500);
		});
	}
});