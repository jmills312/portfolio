
$(window).scroll(function() {
	if ($(window).scrollTop() > 45 ){
 		$('.bg').addClass('show');
  } else {
    $('.bg').removeClass('show');
 	};   	
});