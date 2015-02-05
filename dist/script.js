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


	});

	$('#btn_anim2').on('click', function() {
		$('#side_info2')
  			.sidebar('toggle');


	});

	$('#btn_anim3').on('click', function() {
		$('#side_info3')
  			.sidebar('toggle');


	});
	


	//dimmer

	$('#dimmer').hover(function() {
		$('#dimmer').transition('shake');
	})
	

	$('#dimmer').on('click', function() {
		$('.page.dimmer').dimmer('show');
	});

	//rating
	$('.ui.rating').rating({initialRating:3});

	//accordion
	$('.accordion').accordion({
		duration: 200,
		collapsible: false,
		onOpen: function() {
			var StepIndex = $(this).attr('data-index');
			$('.ui.steps div').removeClass('active');
			$('.ui.steps div:eq('+ StepIndex +')').addClass('active');
		}
	});

	$('.ui.steps div').on('click', function() {
		$('.ui.steps div').removeClass('active');
		$(this).addClass('active');

		var ind = $(this).index();
		$('.accordion').accordion('open', ind);
	});

	//checkbox
	$('.ui.checkbox').checkbox();

	//dropdown
	$('.dropdown').dropdown();

	//form validation
	$('.ui.form')
  .form({
    firstName: {
      identifier  : 'firstName',
      rules: [
        {
          type   : 'empty',
          prompt : 'Please enter your First Name'
        }
      ]
    },
    lastName: {
      identifier  : 'lastName',
      rules: [
        {
          type   : 'empty',
          prompt : 'Please enter your Last Name'
        }
      ]
    },
    email: {
      identifier  : 'email',
      rules: [
        {
          type   : 'empty',
          prompt : 'Please enter your email'
        },
        {
            type : 'email',
            prompt : 'please enter a proper email'
        }
      ]
    },
    message: {
      identifier  : 'message',
      rules: [
        {
          type   : 'empty',
          prompt : 'Please enter your Message for Us'
        }
      ]
    },
    terms: {
      identifier : 'terms',
      rules: [
        {
          type   : 'checked',
          prompt : 'You must enable first'
        }
      ]
    }
  }, {
    inline : true,
    on     : 'blur'
  });

	
});



