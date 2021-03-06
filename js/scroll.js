jQuery(document).ready(function($) {

	//Smooth Scroll
	$(function() {
		$('a[href*="#"]:not([href="#"])').click(function() {
			if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
				var target = $(this.hash);
				target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
				if (target.length) {
					$('html, body').animate({
						scrollTop: target.offset().top
					}, 1000);
					return false;
				}
			}
		});
	});

	// Main Menu
	$('#main-nav').affix({
		offset: {
			top: $('header').height()
		}
	});
$('#form').submit(function(e) {
                $('#messages').removeClass('hide').addClass('alert alert-success alert-dismissible').slideDown().show();
                $('#messages_content').html('<h4 style="text-align:center">Thank you for subscribing to our newsletter<br>Your subscription is now complete</h4>');
                $('#modal').modal('show');
                e.preventDefault();
});

});