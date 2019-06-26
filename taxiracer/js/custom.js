jQuery(document).ready(function(){

	function topslider() {
		var wh = jQuery(window).height();
		jQuery('#map').css({'height':wh/2});
	}
	topslider();
	jQuery(window).resize(function(){
		topslider();
	});

	jQuery('.vopros_block_zag').click(
		function(){
			jQuery(this).next('.vopros_block_text').slideToggle(300);
			jQuery(this).parent('.vopros_block').toggleClass('active'); return false;
	});



	jQuery('a.modal').click(function(e) {
		e.preventDefault();
		var id = jQuery(this).attr('href');
		var maskHeight = jQuery(document).height();
		var maskWidth = jQuery(document).width();
		jQuery('.modal_mask').css({'width':maskWidth,'height':maskHeight});
		jQuery('.modal_mask').fadeIn(0);
		jQuery('.modal_mask').fadeTo(0,0.4);

		var winH = jQuery(window).height();
		var winHt = jQuery(document).scrollTop();
		var winW = jQuery(document).width();
		var modh = jQuery(id).innerHeight();
		var modw = jQuery(id).innerWidth();
              	if (modh > winH) {
			jQuery(id).css('top', winHt);
		} else {
			jQuery(id).css('top', winHt + winH/2-modh/2);
		}
		jQuery(id).css('left', winW/2-modw/2);

		jQuery(id).fadeIn(200);
	});

	jQuery('.modal_close').click(function (e) {
		e.preventDefault();
		jQuery('.modal_mask, .modal_win, .modal_win_txt').hide();
	});

	jQuery('.modal_mask').click(function () {
		jQuery(this).hide();
		jQuery('.modal_win, .modal_win_txt').hide();
	});



	jQuery.fn.getTitle = function() {
		var arr = jQuery("a.fancybox");
		jQuery.each(arr, function() {
			var title = jQuery(this).children("img").attr("title");
			jQuery(this).attr('title',title);
		})
	}
	var thumbnails = 'a:has(img)[href$=".bmp"],a:has(img)[href$=".gif"],a:has(img)[href$=".jpg"],a:has(img)[href$=".jpeg"],a:has(img)[href$=".png"],a:has(img)[href$=".BMP"],a:has(img)[href$=".GIF"],a:has(img)[href$=".JPG"],a:has(img)[href$=".JPEG"],a:has(img)[href$=".PNG"]';
	jQuery(thumbnails).each(function(){
		if(jQuery(this).has("img")) {
			if(jQuery(this).hasClass('fancybox')) {
				jQuery(this).getTitle();
			} else {
				jQuery(this).addClass("fancybox").attr("rel","fancybox").getTitle();
			}
		}
	});
	jQuery("a.fancybox").fancybox({
		'padding': 2,
		'overlayColor': "#000000",
		'overlayOpacity': 0.5,
		'centerOnScroll': true
	});

});