
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>SJP Virtual</title>

	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Favicon -->
	<link rel="apple-touch-icon" sizes="57x57" href="<?php echo base_url(); ?>assets/image/favicon/apple-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="<?php echo base_url(); ?>assets/image/favicon/apple-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="72x72" href="<?php echo base_url(); ?>assets/image/favicon/apple-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="76x76" href="<?php echo base_url(); ?>assets/image/favicon/apple-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="114x114" href="<?php echo base_url(); ?>assets/image/favicon/apple-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="120x120" href="<?php echo base_url(); ?>assets/image/favicon/apple-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="144x144" href="<?php echo base_url(); ?>assets/image/favicon/apple-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="152x152" href="<?php echo base_url(); ?>assets/image/favicon/apple-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="<?php echo base_url(); ?>assets/image/favicon/apple-icon-180x180.png">
	<link rel="icon" type="image/png" sizes="192x192"  href="<?php echo base_url(); ?>assets/image/favicon/android-icon-192x192.png">
	<link rel="icon" type="image/png" sizes="32x32" href="<?php echo base_url(); ?>assets/image/favicon/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="96x96" href="<?php echo base_url(); ?>assets/image/favicon/favicon-96x96.png">
	<link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url(); ?>assets/image/favicon/favicon-16x16.png">
	<link rel="manifest" href="<?php echo base_url(); ?>assets/image/favicon/manifest.json">
	<meta name="msapplication-TileColor" content="#ffffff">
	<meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
	<meta name="theme-color" content="#ffffff">

	<!-- Bootstrap -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap-grid.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap-reboot.css">

	<!-- fa icons -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/font-awesome/css/font-awesome.min.css">

	<!-- Custom -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/custom.css">

</head>
<body>
	
	<!-- Top Bar -->
	<div id="c_top_bar">
		<div id="top_bar">
			<div class="row">
				<div class="col-sm-8">
					<ul>
						<li><a href="#">Sobre o Portal</a></li>
						<li><a href="#">Como Anunciar</a></li>
						<li><a href="#">Entre em Contato</a></li>
					</ul>
				</div>
				<div class="col-sm-4">
					<div id="data_top_bar">
						<?php echo data_por_extenso(); ?>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Second Top Bar -->
	<div id="second_top_bar">
		<div class="row">
			<div class="col-sm-3">
				<img id="second_top_bar_logo" src="<?php echo base_url(); ?>assets/image/logo.png" alt="SJP Virtual">
			</div>
			<div class="col-sm-9">
				<div id="publicidade_top_bar"></div>
			</div>
		</div>
	</div>

	<!-- Menu Principal -->
	<nav id="nav_menu_principal">
		<div id="menu_principal">
			<div class="row">
				<div class="col-sm-9">
					<ul>
						<li><a href="#">A Cidade</a></li>
						<li><a href="#">Guia Comercial</a></li>
						<li><a href="#">Delivery SJP</a></li>
						<li><a href="#">Lazer e Turismo</a></li>
						<li><a href="#">Notícias</a></li>
						<li><a href="#">Classificados</a></li>
					</ul>
				</div>
				<div class="col-sm-3" style="text-align: right;">
					<a href=""><i style="color: #ffffff;" data-toggle="tooltip" data-placement="top" title="Facebook" class="fa fa-facebook"></i></a> &nbsp;&nbsp;&nbsp;
					<a href=""><i style="color: #ffffff;" data-toggle="tooltip" data-placement="top" title="Twitter" class="fa fa-twitter"></i></a> &nbsp;&nbsp;&nbsp;
					<a href=""><i style="color: #ffffff;" data-toggle="tooltip" data-placement="top" title="Google +" class="fa fa-google-plus""></i></a>&nbsp;&nbsp;&nbsp;
					<button id="menu_principal_chama_pesquisa" data-toggle="tooltip" data-placement="top" title="Pesquisar em SJP" onclick="javascript:mostra_esconde_barra_pesquisa('barra_pesquisa');"><i style="color: #ffffff; font-size: 20px;" class="fa fa-search" aria-hidden="true"></i></button>
				</div>
			</div>
		</div>
		<div id="barra_pesquisa" style="display: none;">
			<div id="input_pesquisa">
				<form action="#">
					<div class="input-group">
			      <input type="text" class="form-control" placeholder="O que você procura em SJP?">
			    </div>
				</form>
			</div>
		</div>
	</nav>

	<!-- Destaques -->
	<section id="home_destaques">
		<div class="row">
			<div class="col-md-6">

				<div id="carousel_destaques" class="carousel slide" data-ride="carousel">
				  <ol class="carousel-indicators">
				    <li data-target="#carousel_destaques" data-slide-to="0" class="active"></li>
				    <li data-target="#carousel_destaques" data-slide-to="1"></li>
				    <li data-target="#carousel_destaques" data-slide-to="2"></li>
				  </ol>
				  <div class="carousel-inner" role="listbox">
				    <div class="carousel-item active">
				      <img class="d-block img-fluid" src="<?php echo base_url(); ?>assets/image/noticia/1/1.jpg" alt="First slide">
				      <div class="carousel-caption d-none d-md-block">
						    <p class="crousel-p">Prefeito participa de voo inaugural da Amaszonas Paraguay</p>
						  </div>
				    </div>
				    <div class="carousel-item">
				      <img class="d-block img-fluid" src="<?php echo base_url(); ?>assets/image/noticia/1/2.jpg" alt="Second slide">
				      <div class="carousel-caption d-none d-md-block">
						    <p class="crousel-p">Guarda Mirim: mais uma turma recebe certificados de conclusão de curso</p>
						  </div>
				    </div>
				    <div class="carousel-item">
				      <img class="d-block img-fluid" src="<?php echo base_url(); ?>assets/image/noticia/1/3.jpg" alt="Third slide">
				      <div class="carousel-caption d-none d-md-block">
						    <p class="crousel-p">Obras de manilhamento no Bairro Ipê II avançam</p>
						  </div>
				    </div>
				  </div>
				  <a class="carousel-control-prev" href="#carousel_destaques" role="button" data-slide="prev">
				    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
				    <span class="sr-only">Anterior</span>
				  </a>
				  <a class="carousel-control-next" href="#carousel_destaques" role="button" data-slide="next">
				    <span class="carousel-control-next-icon" aria-hidden="true"></span>
				    <span class="sr-only">Próximo</span>
				  </a>
				</div>
					
			</div>
			<div class="col-md-2">
				<div id="publicidade_destaque_home"></div>
			</div>
			<div class="col-md-4" id="box_destaques_home">

				<a href="#">
					<div class="row">
						<div class="col-sm-4">
							<img class="img_box_destaques_home" src="<?php echo base_url(); ?>assets/image/noticia/1/3.jpg" alt="">
						</div>
						<div class="col-sm-8">
							<p class="titulo_box_destaques_home">Obras de manilhamento no Bairro Ipê II avançam</p>
							<p class="data_box_destaques_home">11/12/2017 às 15:00</p>
						</div>
					</div>
				</a>
				<hr>
				<a href="#">
					<div class="row">
						<div class="col-sm-4">
							<img class="img_box_destaques_home" src="<?php echo base_url(); ?>assets/image/noticia/1/3.jpg" alt="">
						</div>
						<div class="col-sm-8">
							<p class="titulo_box_destaques_home">Obras de manilhamento no Bairro Ipê II avançam</p>
							<p class="data_box_destaques_home">11/12/2017 às 15:00</p>
						</div>
					</div>
				</a>
				<hr>
				<a href="#">
					<div class="row">
						<div class="col-sm-4">
							<img class="img_box_destaques_home" src="<?php echo base_url(); ?>assets/image/noticia/1/3.jpg" alt="">
						</div>
						<div class="col-sm-8">
							<p class="titulo_box_destaques_home">Obras de manilhamento no Bairro Ipê II avançam</p>
							<p class="data_box_destaques_home">11/12/2017 às 15:00</p>
						</div>
					</div>
				</a>
				<hr>
				<a href="#">
					<div class="row">
						<div class="col-sm-4">
							<img class="img_box_destaques_home" src="<?php echo base_url(); ?>assets/image/noticia/1/3.jpg" alt="">
						</div>
						<div class="col-sm-8">
							<p class="titulo_box_destaques_home">Obras de manilhamento no Bairro Ipê II avançam</p>
							<p class="data_box_destaques_home">11/12/2017 às 15:00</p>
						</div>
					</div>
				</a>
				<hr>
				<a href="#">
					<div class="row">
						<div class="col-sm-4">
							<img class="img_box_destaques_home" src="<?php echo base_url(); ?>assets/image/noticia/1/3.jpg" alt="">
						</div>
						<div class="col-sm-8">
							<p class="titulo_box_destaques_home">Obras de manilhamento no Bairro Ipê II avançam</p>
							<p class="data_box_destaques_home">11/12/2017 às 15:00</p>
						</div>
					</div>
				</a>
			</div>
		</div>
	</section>

	<!-- Container -->
	<div id="container">
		
		<!-- Menu Lateral -->
		<div class="col-md-2" id="menu_guia_comercial">
			<nav>
				<a href="#"><div class="li">Advocacia</div></a>
				<a href="#"><div class="li">Agências de Turismo</div></a>
				<a href="#"><div class="li">Cestas de Café da Manhã</div></a>
				<a href="#"><div class="li">Item 1</div></a>
				<a href="#"><div class="li">Item 1</div></a>
				<a href="#"><div class="li">Item 1</div></a>
				<a href="#"><div class="li">Item 1</div></a>
				<a href="#"><div class="li">Item 1</div></a>
				<a href="#"><div class="li">Item 1</div></a>
			</nav>
		</div>

	</div>
	





	<!-- JQuery -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

	<!-- Bootstrap -->
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/bootstrap.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/bootstrap.bundle.js"></script>

	<!-- Enable tooltips everywhere -->
	<script>
		$(function () {
		  $('[data-toggle="tooltip"]').tooltip()
		})
	</script>

	<!-- Enable carousel -->
	<script>
		$('.carousel').carousel()
	</script>
	
	<!-- Enable search bar -->
	<script>
		function mostra_esconde_barra_pesquisa(el) {
		  var display = document.getElementById(el).style.display;
		  if (display == "none"){
		  	$('#'+el).show(500);
		  	$('#input_pesquisa input').focus();
		  }
		  else{
		  	$('#'+el).hide(500);
		  }
		}
	</script>

</body>
</html>
