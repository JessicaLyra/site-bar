<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<meta name="author" content="Jessica Lyra">
		<title><?php wp_title(''); ?></title>
		
		<!--Bootstrap e Style CSS-->
		<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/style.css">
		<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/bootstrap.min.css">
		<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/animate.css">
		<link rel="stylesheet" href="icon/font/css/open-iconic-bootstrap.css">
	<?php wp_head(); ?>
	</head>
	<body id="corpo">
		<nav class="navbar navbar-expand-lg container-fluid menu-fixo fixed-top">
			<button class="navbar-toggler bg-light" type="button" data-toggle="collapse" data-target="#topico-menu" aria-controls="topico-menu" aria-expanded="false" aria-label="Toggle navigation" >
				<span class="navbar-toggler-icon"></span>
			</button>	
			
			<div class="collapse navbar-collapse" id="topico-menu">
								<ul class="navbar-nav mx-auto">
									<li class="nav-item">
										<a class="nav-link scroll" href="#cabecalho">Home</a>
									</li>	
									<li class="nav-item">
										<a class="nav-link scroll" href="#sobre">Sobre</a>
									</li>
									<li class="nav-item">
										<a class="nav-link scroll" href="#galeria">Galeria</a>
									</li>
									<li class="nav-item">
										<a class="nav-link scroll" href="#rodape">Contato</a>
									</li>	
								</ul>
						
						
			</div>
		</nav>