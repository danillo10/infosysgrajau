<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8">
  	<meta http-equiv="X-UA-Compatible" content="IE=edge">
  	<meta name="csrf-token" content="{{ csrf_token() }}">
  	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	
	<title>@yield('titulo')</title>


	<!-- Bootstrap 4 -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	
	<!-- font-awesome 5 -->
	<link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">

	<!-- font google -->
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">

	<!-- Estilo -->
	<link href="css/style.css" rel="stylesheet">

</head>
<body id="home">

	<header >
		<div class="container-fluid">
			<div class="row topo">
				<div class="col-lg-2 col-xl-2 offset-lg-1 d-flex flex-row justify-content-center align-items-center">
					<img src="http://via.placeholder.com/200x100" alt="LOGOMARCA" class="logo">
					<img src="http://via.placeholder.com/180x50" alt="LOGOMARCA" class="logo1">
				</div>
				<div class="col-lg-6 col-xl-6 d-flex flex-row justify-content-end align-items-center pr-0">
					<ul class="nav">
						<li><a href="#home">Home</a><span class="hit"></span></li>
						<li><a href="#sobrenos">Empresa</a><span class="hit"></span></li>
						<li><a href="#servicos">Serviços</a><span class="hit"></span></li>
						<li><a href="#noticias">Notícias</a><span class="hit"></span></li>
						<li><a href="#contato">Contato</a><span class="hit"></span></li>
					</ul>
				</div>
				<div class="col-lg-2 col-xl-2 d-flex flex-row justify-content-end">
					<div class="d-flex flex-row justify-content-center align-items-center">
						<a href="https://www.facebook.com/InfosysInformaticaESistemas/?rc=p" class="null" target="_blank">
							<i class="fab fa-facebook-f fa-1x p-2"></i>
						</a>
						<a href="#" class="null">
							<i class="fab fa-twitter fa-1x p-2"></i>
						</a>
						<a href="#" class="null">
							<i class="fab fa-instagram fa-1x p-2"></i>
						</a>
						<a href="#" class="null">
							<i class="fab fa-google-plus-g fa-1x p-2"></i>
						</a>				
					</div>
				</div>
			</div>

			<!-- <div class="row topo2">
				<div class="col-lg-2 col-xl-2 offset-lg-1 d-flex flex-row justify-content-center align-items-center">
					<img src="http://via.placeholder.com/200x50" alt="LOGOMARCA" class="logo">
				</div>
				<div class="col-lg-6 col-xl-6 d-flex flex-row justify-content-end align-items-center pr-0">
					<ul class="nav">
						<li><a href="#">Home</a><span class="hit"></span></li>
						<li><a href="#empresa">Empresa</a><span class="hit"></span></li>
						<li><a href="#servicos">Serviços</a><span class="hit"></span></li>
						<li><a href="#produtos">Produtos</a><span class="hit"></span></li>
						<li><a href="noticias">Notícias</a><span class="hit"></span></li>
						<li><a href="contato">Contato</a><span class="hit"></span></li>
					</ul>
				</div>
				<div class="col-lg-2 col-xl-2 d-flex flex-row justify-content-end">
					<div class="d-flex flex-row justify-content-end">
						<i class="fab fa-facebook-f fa-1x p-2"></i>
						<i class="fab fa-twitter fa-1x p-2"></i>
						<i class="fab fa-instagram fa-1x p-2"></i>
						<i class="fab fa-google-plus-g fa-1x p-2"></i>				
					</div>
				</div>
			</div> -->
		</div>
	</header>
