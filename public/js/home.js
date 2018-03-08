// $('.sobrenos').fadeOut()

var distanciaCard = $('header').offset().top + 80;
$(window).scroll(function(){
	if($(window).scrollTop() > distanciaCard){
		$('.logo').hide()
		$('.logo1').fadeIn(100)
		$('.topo').css('height',"60px")
		$('ul.nav li').css('height','60px')
		$('header').css({
			"position": "fixed",
			"z-index":"100000",
			"width":"100%",
			"backgroundColor":"#f2f2f2",
			"height":"60px"
		})
	}else{
		$('.logo1').hide()
		$('.logo').fadeIn(100)
		$('.topo').css('height','100px')
		$('ul.nav li').css('height','100px')
		$('header').css({
			"position":"relative",
			"width":"100%",
			"backgroundColor":"#f2f2f2",
			"height":"100px"
		})
	}
})

// var distanciaCard2 = $('.sobrenos').offset().top - 300;
// $(window).scroll(function(){
// 	if($(window).scrollTop() > distanciaCard2){
// 		$('.sobrenos').fadeIn()
// 	}
// })


$('.tab-links').on('click', function(){
	var pagina = $(this).attr('data-pagina')
	$('.tab').removeClass('active')
	$(this).find('.tab').addClass('tab active')

	$('.relative').css('display','none')
	$('#'+pagina).css('display','inline')

	if(pagina == 'des-web'){
		$('.img-site').attr('src','img/webtech.png')
	}else if(pagina == 'des-mob'){
		$('.img-site').attr('src','img/xamarin.png')
	}else if(pagina == 'des-neg'){
		$('.img-site').attr('src','img/negocios.jpg')
	}else{
		$('.img-site').attr('src','img/solucao.jpg')
	}
})


/* ANCORA */

$('a[href*="#"]')
  // Remove links that don't actually link to anything
  .not('[href="#"]')
  .not('[href="#0"]')
  .click(function(event) {
    // On-page links
    if (
      location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') 
      && 
      location.hostname == this.hostname
    ) {
      // Figure out element to scroll to
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
      // Does a scroll target exist?
      if (target.length) {
        // Only prevent default if animation is actually gonna happen
        event.preventDefault();
        $('html, body').animate({
          scrollTop: target.offset().top - 130
        }, 1000, function() {
          // Callback after animation
          // Must change focus!
          var $target = $(target);
          // $target.focus();
          // if ($target.is(":focus")) { // Checking if the target was focused
          //   return false;
          // } else {
          //   $target.attr('tabindex','-1'); // Adding tabindex for elements not focusable
          //   $target.focus(); // Set focus again
          // };
        });
      }
    }
})