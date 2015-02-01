$(function() {

	var rel  = $('body[rel]').attr('rel');

	$('#menu a:eq(' + rel + '), #mobile_menu a:eq(' + rel + ') ').addClass('active');

	$('#mobile_btn').on('click', function() {
		$('#mobile_menu').sidebar('toggle');
	});

	$('.hoverimage').popup();

	$('#btn_anim1').on('click', function() {
		$('#shake_img1')
		  .transition('tada');		  
	});
	$('#btn_anim2').on('click', function() {
		$('#shake_img2')
		  .transition('bounce');
	});
	$('#btn_anim3').on('click', function() {
		$('#shake_img3')
		  .transition('shake');
	});

	
	$('#btn_anim1').on('click', function() {
		$('#side_info1')
  			.sidebar('toggle');

  		$('#btn_anim1').transition('pulse');
	});

	$('#btn_anim2').on('click', function() {
		$('#side_info2')
  			.sidebar('toggle');

  		$('#btn_anim2').transition('pulse');
	});

	$('#btn_anim3').on('click', function() {
		$('#side_info3')
  			.sidebar('toggle');

  		$('#btn_anim3').transition('pulse');
	});

});