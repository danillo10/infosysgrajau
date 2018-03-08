<!--

	PÁGINA PRINCIPAL COM TODOS OS COMPONENTES INCLUIDOS DINAMICAMENTE

-->

@extends('layout.site')

@section('conteudo')
<main>
	
	<div class="container-fluid p-0">
		<!-- SLIDER -->
		<section>
			<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
			  <ol class="carousel-indicators">
			    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
			    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
			    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
			  </ol>
			  <div class="carousel-inner">
			    <div class="carousel-item active">
			      <img class="d-block w-100" src="http://via.placeholder.com/1200x400" alt="First slide">
			    </div>
			    <div class="carousel-item">
			      <img class="d-block w-100" src="http://via.placeholder.com/1200x400" alt="Second slide">
			    </div>
			    <div class="carousel-item">
			      <img class="d-block w-100" src="http://via.placeholder.com/1200x400" alt="Third slide">
			    </div>
			  </div>
			  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
			    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
			    <span class="sr-only">Previous</span>
			  </a>
			  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
			    <span class="carousel-control-next-icon" aria-hidden="true"></span>
			    <span class="sr-only">Next</span>
			  </a>
			</div>
		</section>
		<!-- FIM SLIDER -->

		<!-- SUB-SLIDER -->
		<section>		
			<div class="row b-blue d-flex flex-row justify-content-center pt-4 pb-4">
				<div class="col-lg-1"></div>
				<div class="col-lg-3 col-xl-3 caracteristicas">
					<i class="fas fa-cog"></i>
					<h4 class="h4-body-title">SOFTWARE SOB MEDIDA</h4>
					<div class="content-box-text">
                        Levantamento de funcionalidades e desenvolvimento de sistemas de acordo com a sua necessidade.
					</div>
				</div>
				<div class="col-lg-3 col-xl-3 caracteristicas">
					<i class="fas fa-mobile-alt"></i>
					<h4 class="h4-body-title">LAYOUT RESPONSIVO</h4>
					<div class="content-box-text">
						Nossos sistemas se adaptam muito bem em qualquer dispositivo, sejam eles desktops, tablets ou smartphones.
					</div>
				</div>
				<div class="col-lg-3 col-xl-3 caracteristicas">
					<i class="fas fa-magic"></i>
					<h4 class="h4-body-title">SISTEMAS SEM SURPRESAS</h4>
					<div class="content-box-text">
						Seu sistema hospedado conosco, durante o período de desenvolvimento, para acompanhamento diário do seu projeto.
					</div>
				</div>
				<div class="col-lg-1 col-xl-1">
					
				</div>
			</div>
		</section>
		<!-- FIM SUB-SLIDER -->

	</div>

	<div class="container">

		<!-- CLIENTES -->
		<section class="clientes mt-5 mb-5 d-flex flex-column justify-content-center align-items-center">
			<h2 class="section-title">CONHEÇA ALGUNS DE NOSSOS CLIENTES</h2>
			<p class="subsection">Desenvolvemos sistemas unindo qualidade, tecnologia de ponta e paixão pelo desenvolvimento de software, ajudando empresas dos mais diversos segmentos do mercado.</p>
			<div class="d-flex flex-row justify-content-center flex-wrap w-100">
				<div class="col-lg-4 col-xl-4 p-1 logo-cliente">
					<img class="img-fluid" src="http://via.placeholder.com/400x200">
					<span class="vejamais">
						Nome do cliente
						<i class="fas fa-search fa-3x m-2"></i>
					</span>
				</div>
				<div class="col-lg-4 col-xl-4 p-1 logo-cliente">
					<img class="img-fluid" src="http://via.placeholder.com/400x200">
					<span class="vejamais">
						Nome do cliente
						<i class="fas fa-search fa-3x m-2"></i>
					</span>
				</div>
				<div class="col-lg-4 col-xl-4 p-1 logo-cliente">
					<img class="img-fluid" src="http://via.placeholder.com/400x200">
					<span class="vejamais">
						Nome do cliente
						<i class="fas fa-search fa-3x m-2"></i>
					</span>
				</div>
				<div class="col-lg-4 col-xl-4 p-1 logo-cliente">
					<img class="img-fluid" src="http://via.placeholder.com/400x200">
					<span class="vejamais">
						Nome do cliente
						<i class="fas fa-search fa-3x m-2"></i>
					</span>
				</div>
				<div class="col-lg-4 col-xl-4 p-1 logo-cliente">
					<img class="img-fluid" src="http://via.placeholder.com/400x200">
					<span class="vejamais">
						Nome do cliente
						<i class="fas fa-search fa-3x m-2"></i>
					</span>
				</div>
				<div class="col-lg-4 col-xl-4 p-1 logo-cliente">
					<img class="img-fluid" src="http://via.placeholder.com/400x200">
					<span class="vejamais">
						Nome do cliente
						<i class="fas fa-search fa-3x m-2"></i>
					</span>
				</div>
			</div>
		</section>

		<hr>

		<!-- SOBRE NÓS -->
		<section class="sobrenos" id="sobrenos">
			<div class="row">
				<div class="col-lg-6 col-xl-6 mt-5 mb-5">
					<h2 class="section-title2 text-left">SOBRE NÓS</h2>
					<p class="subsection">Seja bem-vindo à Infosys, uma empresa especializada em tecnologias. 
					Buscamos sempre a excelência nos serviços prestados, com sistemas que atendam a sua necessidade. O cumprimento de prazos e a qualidade do código fazem parte do nosso princípio. Nosso objetivo é criar a solução perfeita para o seu negócio.

					Desenvolvimento de sistemas com comprometimento e qualidade. Software sob medida: criação de sistemas conforme sua necessidade. Consultoria técnica: nossa expertise auxiliando o seu projeto.</p>
					<ul class="details">
						<li>
							<i class="fas fa-check"></i>
							<span class="text-details">Desenvolvimento de sistemas com comprometimento e qualidade.</span>
						</li>
						<li>
							<i class="fas fa-check"></i>
							<span class="text-details">Software sob medida: criação de sistemas conforme sua necessidade.</span>
						</li>
						<li>	
							<i class="fas fa-check"></i>
							<span class="text-details">Consultoria técnica: nossa expertise auxiliando o seu projeto.</span>
						</li>
					</ul>
					<button class="btn btn-sm btn-primary">Saiba mais</button>
				</div>
				<div class="col-lg-6 col-xl-6 mt-5 d-flex flex-row justify-content-center align-items-center">
					<img src="img/mockup-notebook-infosys.png" style="max-height: 100%">
				</div>
			</div>
		</section>
		<!-- FIM SOBRE NÓS -->

		<hr>

		<!-- IDÉIAS -->
		<section class="ideias mt-5">
			<div class="d-flex flex-row align-items-center">
				<div class="col-lg-3 col-xl-3 text-center relative network">
					<span class="fab-float">1</span>
					<i class="far fa-lightbulb fa-4x"></i>
					<h4 class="mt-4">IDÉIA</h4>
					<p class="subsection">
                        Você nos conta sobre sua idéia, projeto, site, atividades e sua necessidade e criamos o protótipo
					</p>
				</div>
				<div class="col-lg-3 col-xl-3 text-center relative network">
					<span class="fab-float">2</span>
					<i class="far fa-compass fa-4x"></i>
					<h4 class="mt-4">ESTRATÉGIA</h4>
					<p class="subsection">
                        Analisamos cuidadosamente cada item, construindo o modelo de dados ideal para seu negócio.
                    </p>    
				</div>
				<div class="col-lg-3 col-xl-3 text-center relative network">
					<span class="fab-float">3</span>
					<i class="fas fa-laptop fa-4x"></i>
					<h4 class="mt-4">DESIGN</h4>
					<p class="subsection">
                        Elaboramos os layouts responsivos para um perfeito encaixe em qualquer dispositivo.
                    </p>   
				</div>
				<div class="col-lg-3 col-xl-3 text-center relative network">
					<span class="fab-float">4</span>
					<i class="fas fa-code fa-4x"></i>
					<h4 class="mt-4">CODIFICAÇÃO</h4>
					<p class="subsection">
                        Iniciamos o trabalho de desenvolvimento do seu sistema com a mais alta qualidade técnica.
                    </p>   
				</div>
			</div>
		</section>
		<!-- FIM IDÉIAS -->

	</div>

	<div class="container-fluid p-0">

		<!-- TEXTO DESTAQUE -->
		<section class="section-destaque d-flex flex-row justify-content-center align-items-center text-center mt-5">
			<div class="overlay-blue w-100 h-100"></div>
			<h2 class="destaque">Desenvolvemos sistemas nos mais diversos segmentos e 
			utilizamos as principais tecnologias do mercado.</h2>
		</section>
		<!-- FIM TEXTO DESTAQUE -->

	</div>

	<div class="container">

		<!-- TECNOLOGIAS -->
		<section id="servicos" class="d-flex flex-column justify-content-center mt-5 mb-5">
			<h3 class="h3-body-title">CONHEÇA UM POUCO MAIS SOBRE O DESENVOLVIMENTO COM A Infosys</h3>
			<div class="d-flex flex-row	justify-content-start align-items-start">
				<div class="col-lg-2 col-xl-2">
					<ul class="etabs">
						<a class="tab-links cursor-pointer" data-pagina="des-sol"><li class="tab active"><i class="fas fa-cloud pr-2"></i> Solução</li></a>
						<a class="tab-links cursor-pointer" data-pagina="des-web"><li class="tab"><i class="fab fa-html5 pr-2"></i> Tecnologias Web</li></a>
						<a class="tab-links cursor-pointer" data-pagina="des-mob"><li class="tab"><i class="fas fa-mobile-alt pr-2"></i> Tecnologias Mobile</li></a>
						<a class="tab-links cursor-pointer" data-pagina="des-neg"><li class="tab"><i class="fas fa-laptop pr-2"></i> Negócios</li></a>
					</ul>
				</div>

				<div class="col-lg-6 col-xl-6 relative des-web" id="des-web">
					<span class="d-flex flex-column justify-content-center pl-3">
						<p class="subsection">Especializada em desenvolvimento web, a Infosys desenvolve sistemas utilizando as seguintes tecnologias:</p>
						<div class="d-flex flex-row justify-content-start pl-0">
							<ul class="lista-atividades pl-0">
								<li class="li-atividades"><i class="fas fa-check p-2"></i> Delphi</li>
								<li class="li-atividades"><i class="fas fa-check p-2"></i> MVC</li>
								<li class="li-atividades"><i class="fas fa-check p-2"></i> Firebird</li>
								<li class="li-atividades"><i class="fas fa-check p-2"></i> Javascript</li>
								<li class="li-atividades"><i class="fas fa-check p-2"></i> CSS 3</li>
								<li class="li-atividades"><i class="fas fa-check p-2"></i> Bootstrap</li>
							</ul>
							<ul class="lista-atividades pl-0">
								<li class="li-atividades"><i class="fas fa-check p-2"></i> PHP</li>
								<li class="li-atividades"><i class="fas fa-check p-2"></i> Laravel</li>
								<li class="li-atividades"><i class="fas fa-check p-2"></i> HTML 5</li>
								<li class="li-atividades"><i class="fas fa-check p-2"></i> Angular</li>
								<li class="li-atividades"><i class="fas fa-check p-2"></i> jQuery</li>
								<li class="li-atividades"><i class="fas fa-check p-2"></i> Linux</li>
							</ul>
						</div>
					</span>
				</div>

				<div class="col-lg-6 col-xl-6 relative des-mob" id="des-mob">
					<span class="d-flex flex-column justify-content-cen	ter pl-3">
						<p class="subsection">Especializada em desenvolvimento web, a Infosys desenvolve sistemas utilizando as seguintes tecnologias:</p>
						<div class="d-flex flex-row justify-content-start pl-0">
							<ul class="lista-atividades pl-0">
								<li class="li-atividades"><i class="fas fa-check p-2"></i> Ionic</li>
								<li class="li-atividades"><i class="fas fa-check p-2"></i> Angular</li>
								<li class="li-atividades"><i class="fas fa-check p-2"></i> Cordova</li>
							</ul>
						</div>
					</span>
				</div>

				<div class="col-lg-6 col-xl-6 relative des-neg" id="des-neg">
					<span class="d-flex flex-column justify-content-center pl-3">
						<p class="subsection">Há 15 anos no mercado, a Infosys se especializou no desenvolvimento de projetos Desktop, Web e Mobile, com a proposta de entregar códigos de qualidade, livres de bugs, respeitando o cumprimento de prazos e tudo isso a preços bem competitivos.</p>
						<p class="subsection">Solicite já um <a href="#">orçamento</a>.</p>

						<ul class="details">
							<li>
								<i class="fas fa-check"></i>
								<span class="text-details">Desenvolvimento de sistemas com comprometimento e qualidade.</span>
							</li>
							<li>
								<i class="fas fa-check"></i>
								<span class="text-details">Software sob medida: criação de sistemas conforme sua necessidade.</span>
							</li>
							<li>	
								<i class="fas fa-check"></i>
								<span class="text-details">Consultoria técnica: nossa expertise auxiliando o seu projeto.</span>
							</li>
						</ul>
					</span>
				</div>

				<div class="col-lg-6 col-xl-6 relative des-mob" id="des-sol">
					<span class="d-flex flex-column justify-content-center pl-3">
						<p class="subsection">Com a Infosys você não tem surpresas. 
						Todo o desenvolvimento é hospedado em nossos servidores (durante o período de construção), para que você possa acompanhar on-line e diariamente a evolução do seu projeto.</p>
						<p class="subsection">
						Nossos profissionais são altamente capacitados e possuem qualificações Microsoft, tanto em banco de dados, quanto no desenvolvimento em desktop Delphi.</p>
						<p class="subsection">
						Desenvolva com a Infosys, e tenha certeza de receber um projeto bem estruturado e que atenderá todas as suas expectativas.</p>
					</span>
				</div>

				<div class="col-lg-4 col-xl-4">
					<img src="img/webtech.png" class="rounded img-fluid img-site" alt="tecnologias">
				</div>
			</div>
		</section>
		<!-- FIM TECNOLOGIAS -->

		<hr>

		<!-- ÚLTIMAS NOTÍCIAS -->
		<section id="noticias" class="d-flex flex-column justify-content-center align-items-center mt-5 mb-5">
			<h2 class="section-title">Últimas Notícias</h2>
			<div class="col-lg-12 col-xl-12 d-flex flex-row mt-4">
				@for($i=0;$i < 3; $i++)
				<div class="col-lg-4 col-xl-4 mr-2">
					<div class="card card-2">
						<div class="card-img">
							<a class="null" href="{{$noticias['link'][$i]}}" target="_blank">
								<img class="img-overlay" src="{{$noticias['imagem'][$i]}}" alt="imagem1">
							</a>
						</div>
						<div class="card-body d-flex flex-column justify-content-end">
							<a class="null" href="{{$noticias['link'][$i]}}" target="_blank">
								<p class="card-message text-justify">
									{{$noticias['noticia'][$i]}}
								</p>
							</a>
							<div class="card-social d-flex flex-row justify-content-end">
								<i class="fab fa-facebook-f"></i>
								<i class="fab fa-twitter"></i>
								<i class="fab fa-instagram"></i>
								<i class="fab fa-google-plus-g"></i>
							</div>
						</div>
					</div>
				</div>
				@endfor
			</div>
		</section>
		<!-- FIM ÚLTIMAS NOTÍCIAS -->

		<!-- CONTATO -->
		<section id="contato">
			<div class="d-flex flex-row back-blue.">
				<div class="col-lg-6 col-xl-6">
					<form>
					  <h3 class="h3-body-title">ENTRE EM CONTATO CONOSCO</h3>
					  <p class="subsection">No formulário abaixo, informe seus dados de contato e conte-nos um poquinho sobre seu projeto. Nossa equipe analisará os dados e entrará em contato.</p>
					  <div class="form-group">
					     <label for="inputEmail4">Nome</label>
					     <input type="text" class="form-control" id="inputEmail4" placeholder="">
					  </div>
					  <div class="form-group">
					      <label for="inputPassword4">Email</label>
					      <input type="email" class="form-control" id="inputPassword4" placeholder="">
					  </div>
					  <div class="form-group">
					      <label for="inputPassword4">Telefone</label>
					      <input type="email" class="form-control" id="inputPassword4" placeholder="">
					  </div>
					  <div class="form-group">
					    <label for="inputAddress">Mensagem</label>
					    <textarea class="form-control" style="height: 150px;"></textarea>
					  </div>
					  <button type="submit" class="btn btn-primary">Enviar</button>
					</form>
				</div>
				<div class="col-lg-1 col-xl-1"></div>
				<div class="col-lg-5 col-xl-5 p-0">
					<h3 class="h3-body-title">fale conosco</h3>
					<address class="d-flex flex-column">
						<ul class="noticias mt-3">
		                    <li>
		                        <p class="greylight d-flex flex-row justify-content-start align-items-center" style="font-size: 13px;"><i class="material-icons pr-2">phone</i>(99) 98842-6863</p>
		                    </li>
		                    <li>
		                        <p class="greylight d-flex flex-row justify-content-start align-items-center" style="font-size: 13px;"><i class="material-icons pr-2">home</i>Endereço: Avenida Brasil, 252, Canoeiro, Grajaú - MA</p>
		                    </li>
		                    <li>
		                        <p class="greylight d-flex flex-row justify-content-start align-items-center" style="font-size: 13px;"><i class="material-icons pr-2">email</i>contato@infosyssistemas.com.br</p>
		                    </li>
		                </ul>
					</address>
					<div class="google-maps w-100">
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1668.859544738351!2d-46.15758196834544!3d-5.821841538925433!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x7673ba6ec42f5f0!2sInfosys+Inform%C3%A1tica+e+Sistemas+-+Graja%C3%BA+-+MA!5e0!3m2!1spt-BR!2sbr!4v1519043553840" width="100%" height="330" frameborder="0" style="border:0" allowfullscreen></iframe>
					</div>
				</div>
			</div>
		</section>
		<!-- FIM CONTATO -->

	</div>

</main>
@endsection