    <hr>

    <footer class="mt-5 footer">
        <div class="container pt-3 pb-3 d-flex flex-row justify-content-between">
            <div class="col-lg-3 col-xl-3">
                <span class="logo-footer">
                    <img src="http://via.placeholder.com/200x80" alt="LOGOMARCA">
                </span>

                <p class="mt-2">Somos uma empresa especializada em desenvolvimento de sistemas Desktop, Web e Mobile.</p>

                <p>Desenvolvemos Sistemas, sites e aplicativos móveis, unindo qualidade, tecnologia de ponta e paixão pelo desenvolvimento de software.</p>

                <p>Nosso objetivo é criar a solução perfeita para o seu negócio.</p>
            </div>
            <div class="col-lg-4 col-xl-4">
                <span class="footer-title">NOTÍCIAS</span>
                <ul class="noticias mt-3">
                    @for($i=0;$i < 4;$i++)
                    <li class="pt-1 pb-1">
                        <a href="{{$noticias['link'][$i]}}" target="_blank" class="null">
                            <img src="{{$noticias['imagem'][$i]}}" class="rounded" alt="LOGOMARCA" style="max-width: 80px;">
                        </a>
                        <a href="{{$noticias['link'][$i]}}" target="_blank" class="null">
                            <p class="pl-2" style="font-size: 13px;">{{$noticias['noticia'][$i]}}.</p>
                        </a>
                    </li>
                    @endfor
                </ul>
            </div>
            <div class="col-lg-3 col-xl-3">
                <span class="footer-title">CONTATO</span>
                <address>
                    <ul class="noticias mt-3">
                        <li class="d-flex flex-row justify-content-start align-items-center relative">
                            <i class="fas fa-map-marker-alt icn-footer"></i>
                            <p class="pl-4" style="font-size: 13px;">Endereço: Avenida Brasil, 252, Canoeiro, Grajaú - MA</p>
                        </li>
                        <li class="d-flex flex-row justify-content-start align-items-center relative">
                            <i class="fas fa-phone icn-footer"></i>
                            <p class="pl-4" style="font-size: 13px;">(99) 98842-6863</p>
                        </li>
                        <li class="d-flex flex-row justify-content-start align-items-start relative">
                            <i class="far fa-envelope icn-footer"></i>
                            <p class="pl-4" style="font-size: 13px;">contato@infosyssistemas.com.br</p>
                        </li>
                        <li class="d-flex flex-row justify-content-start align-items-start relative">
                            <i class="fas fa-globe icn-footer"></i>
                            <p class="pl-4" style="font-size: 13px;">www.infosyssistemas.com.br</p>
                        </li>
                    </ul>
                </address>
            </div>
            <div class="col-lg-2 col-xl-2">
                <span class="footer-title">ÚLTIMOS PROJETOS</span>
                <div class="d-flex flex-row mt-3">
                    <div class="col-lg-5 col-xl-5 p-0">
                        <img src="http://via.placeholder.com/80x80" alt="LOGOMARCA">
                    </div>
                    <div class="col-lg-5 col-xl-5 p-0 offset-lg-2 offset-xl-2">
                        <img src="http://via.placeholder.com/80x80" alt="LOGOMARCA">
                    </div>
                </div>
                <div class="d-flex flex-row mt-2">
                    <div class="col-lg-5 col-xl-5 p-0">
                        <img src="http://via.placeholder.com/80x80" alt="LOGOMARCA">
                    </div>
                    <div class="col-lg-5 col-xl-5 p-0 offset-lg-2 offset-xl-2">
                        <img src="http://via.placeholder.com/80x80" alt="LOGOMARCA">
                    </div>
                </div>
                <div class="d-flex flex-row mt-2">
                    <div class="col-lg-5 col-xl-5 p-0">
                        <img src="http://via.placeholder.com/80x80" alt="LOGOMARCA">
                    </div>
                    <div class="col-lg-5 col-xl-5 p-0 offset-lg-2 offset-xl-2">
                        <img src="http://via.placeholder.com/80x80" alt="LOGOMARCA">
                    </div>
                </div>
                <div class="d-flex flex-row mt-2">
                    <div class="col-lg-5 col-xl-5 p-0">
                        <img src="http://via.placeholder.com/80x80" alt="LOGOMARCA">
                    </div>
                    <div class="col-lg-5 col-xl-5 p-0 offset-lg-2 offset-xl-2">
                        <img src="http://via.placeholder.com/80x80" alt="LOGOMARCA">
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <div class="container-fluid d-flex flex-row" style="background-color: #f2f2f2; height: 30px; color:#333;">
        <div class="col-lg-1 col-xl-1"></div>
        <div class="col-lg-10 col-xl-10 text-center d-flex flex-row align-items-center justify-content-center" style="font-size: 14px;">
            Desenvolvido por: &nbsp;<a href="http://www.infosyssistemas.com.br" target="_blank" style="font-family: Montserrat,sans-serif;">Infosys Sistemas</a> &nbsp;<i class="far fa-registered"></i>
        </div>
        <div class="col-lg-1 col-xl-1"></div>
    </div>

	<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="http://code.jquery.com/jquery-3.3.1.min.js"></script>	
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <script src="{{asset('js/home.js')}}"></script>
    
    <script>
    	$('section').on('click', 'a', function(){
    		$('.card').toggleClass('flipped')
    	})
    </script>
  </body>
</html>