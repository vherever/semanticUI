$(function() {

	var rel  = $('body[rel]').attr('rel');

	$('#menu a:eq(' + rel + '), #mobile_menu a:eq(' + rel + ') ').addClass('active');

	$('#mobile_btn').on('click', function() {
		$('#mobile_menu').sidebar('toggle');
	});
});