$(document).ready(function(){
  $(window).scroll(function(){
  	var scroll = $(window).scrollTop();
	  if (scroll > 50) {
	    $(".navbar").css({'transition-delay': '1s ease-in-out', 'position': 'fixed', 'width': '100%', 'z-index': '22', 'top': '0'});
			// $(".navbar-brand").css({'font-size': '20px', 'color': 'white', 'font-family': 'Bungee Shade'});
      // $(".nav-link").css("font-family" , "cursive");
	  }
	  else {
      $(".navbar").css({'transition': '5s ease-in-out', 'position': 'relative', 'width': '100%', 'z-index': '22',});

	  }
  })
		// $("p").css("color", "off-white");
})
