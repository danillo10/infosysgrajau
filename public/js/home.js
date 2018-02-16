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