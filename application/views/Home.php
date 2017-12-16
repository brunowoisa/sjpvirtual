
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
			<div class="titulo_item_menu">Guia Comercial</div>
			<nav>
				<a href="#"><div class="item_menu">Advocacia</div></a>
				<a href="#"><div class="item_menu">Agências de turismo</div></a>
				<a href="#"><div class="item_menu">Alimentação</div></a>
				<a href="#"><div class="item_menu">Açougues</div></a>
				<a href="#"><div class="item_menu">Bebidas</div></a>
				<a href="#"><div class="item_menu">Chocolates</div></a>
				<a href="#"><div class="item_menu">Conveniência</div></a>
				<a href="#"><div class="item_menu">Distribuidora de Alimentos</div></a>
				<a href="#"><div class="item_menu">Fábrica de alimentos</div></a>
				<a href="#"><div class="item_menu">Hortifruti</div></a>
				<a href="#"><div class="item_menu">Lanchonetes</div></a>
				<a href="#"><div class="item_menu">Panificadoras e confeitarias</div></a>
				<a href="#"><div class="item_menu">Peixarias</div></a>
				<a href="#"><div class="item_menu">Pizzaria</div></a>
				<a href="#"><div class="item_menu">Produtos Coloniais</div></a>
				<a href="#"><div class="item_menu">Sorveterias / Açaiterias</div></a>
				<a href="#"><div class="item_menu">Supermercados</div></a>
				<a href="#"><div class="item_menu">Animais</div></a>
				<a href="#"><div class="item_menu">Adestramento</div></a>
				<a href="#"><div class="item_menu">Agropecuárias</div></a>
				<a href="#"><div class="item_menu">Hotel para pets</div></a>
				<a href="#"><div class="item_menu">Pet Shop e Veterinárias</div></a>
				<a href="#"><div class="item_menu">Artesanatos</div></a>
				<a href="#"><div class="item_menu">Associações</div></a>
				<a href="#"><div class="item_menu">Auto escolas</div></a>
				<a href="#"><div class="item_menu">utomóveis</div></a>
				<a href="#"><div class="item_menu">Auto elétricas</div></a>
				<a href="#"><div class="item_menu">Auto peças</div></a>
				<a href="#"><div class="item_menu">Balanceamento</div></a>
				<a href="#"><div class="item_menu">Despachantes</div></a>
				<a href="#"><div class="item_menu">Estética automotiva</div></a>
				<a href="#"><div class="item_menu">Funilaria</div></a>
				<a href="#"><div class="item_menu">Garagens</div></a>
				<a href="#"><div class="item_menu">Lavagem e polimento</div></a>
				<a href="#"><div class="item_menu">Locação de veículos</div></a>
				<a href="#"><div class="item_menu">Oficinas mecânicas</div></a>
				<a href="#"><div class="item_menu">Som e Acessórios</div></a>
				<a href="#"><div class="item_menu">Aviamentos</div></a>
				<a href="#"><div class="item_menu">Bancos</div></a>
				<a href="#"><div class="item_menu">Bares</div></a>
				<a href="#"><div class="item_menu">Beleza</div></a>
				<a href="#"><div class="item_menu">Cosméticos</div></a>
				<a href="#"><div class="item_menu">Podologia</div></a>
				<a href="#"><div class="item_menu">Salões de beleza</div></a>
				<a href="#"><div class="item_menu">Bicicletas</div></a>
				<a href="#"><div class="item_menu">Brindes e presentes</div></a>
				<a href="#"><div class="item_menu">Brinquedos</div></a>
				<a href="#"><div class="item_menu">Cestas de Café da manhã</div></a>
				<a href="#"><div class="item_menu">Combustíveis</div></a>
				<a href="#"><div class="item_menu">Construção e reforma</div></a>
				<a href="#"><div class="item_menu">Arquitetos</div></a>
				<a href="#"><div class="item_menu">Calhas</div></a>
				<a href="#"><div class="item_menu">Cantoneiras</div></a>
				<a href="#"><div class="item_menu">Construtoras</div></a>
				<a href="#"><div class="item_menu">Engenheiros</div></a>
				<a href="#"><div class="item_menu">Ferragens</div></a>
				<a href="#"><div class="item_menu">Forros</div></a>
				<a href="#"><div class="item_menu">Gesso</div></a>
				<a href="#"><div class="item_menu">Impermeabilizações</div></a>
				<a href="#"><div class="item_menu">Instalações elétricas</div></a>
				<a href="#"><div class="item_menu">Instalações hidráulicas</div></a>
				<a href="#"><div class="item_menu">Interiores</div></a>
				<a href="#"><div class="item_menu">Lajes</div></a>
				<a href="#"><div class="item_menu">Licenciamento Ambiental</div></a>
				<a href="#"><div class="item_menu">Madeireiras</div></a>
				<a href="#"><div class="item_menu">Marcenarias</div></a>
				<a href="#"><div class="item_menu">Marmorarias</div></a>
				<a href="#"><div class="item_menu">Materiais de construção</div></a>
				<a href="#"><div class="item_menu">Metalúrgicas</div></a>
				<a href="#"><div class="item_menu">Pintores</div></a>
				<a href="#"><div class="item_menu">Piscinas</div></a>
				<a href="#"><div class="item_menu">Pisos</div></a>
				<a href="#"><div class="item_menu">Portas</div></a>
				<a href="#"><div class="item_menu">Pré moldados</div></a>
				<a href="#"><div class="item_menu">Redes de Proteção</div></a>
				<a href="#"><div class="item_menu">Telhas</div></a>
				<a href="#"><div class="item_menu">Terraplanagem</div></a>
				<a href="#"><div class="item_menu">Tintas</div></a>
				<a href="#"><div class="item_menu">Toldos</div></a>
				<a href="#"><div class="item_menu">Vidraçarias</div></a>
				<a href="#"><div class="item_menu">Contabilidade</div></a>
				<a href="#"><div class="item_menu">Corretoras de Seguro</div></a>
				<a href="#"><div class="item_menu">Creches</div></a>
				<a href="#"><div class="item_menu">Decoração</div></a>
				<a href="#"><div class="item_menu">Cama - Mesa - Banho</div></a>
				<a href="#"><div class="item_menu">Colchões</div></a>
				<a href="#"><div class="item_menu">Cortinas</div></a>
				<a href="#"><div class="item_menu">Lojas de decoração</div></a>
				<a href="#"><div class="item_menu">Papel de Parede</div></a>
				<a href="#"><div class="item_menu">Quadros e Molduras</div></a>
				<a href="#"><div class="item_menu">Telas</div></a>
				<a href="#"><div class="item_menu">Diversão</div></a>
				<a href="#"><div class="item_menu">Escolas</div></a>
				<a href="#"><div class="item_menu">Biblioteca</div></a>
				<a href="#"><div class="item_menu">Escola de cabelereiros</div></a>
				<a href="#"><div class="item_menu">Escola de dança</div></a>
				<a href="#"><div class="item_menu">Escola de idiomas</div></a>
				<a href="#"><div class="item_menu">Escolas de música</div></a>
				<a href="#"><div class="item_menu">Escolas particulares</div></a>
				<a href="#"><div class="item_menu">Escolas profissionalizantes</div></a>
				<a href="#"><div class="item_menu">Escolas públicas</div></a>
				<a href="#"><div class="item_menu">Escolas Técnicas</div></a>
				<a href="#"><div class="item_menu">Supletivo</div></a>
				<a href="#"><div class="item_menu">Esportes</div></a>
				<a href="#"><div class="item_menu">Artigos esportivos</div></a>
				<a href="#"><div class="item_menu">Quadras</div></a>
				<a href="#"><div class="item_menu">Estofaria</div></a>
				<a href="#"><div class="item_menu">Faculdades e Universidades</div></a>
				<a href="#"><div class="item_menu">Festas e eventos</div></a>
				<a href="#"><div class="item_menu">Artistas e similares</div></a>
				<a href="#"><div class="item_menu">Buffet</div></a>
				<a href="#"><div class="item_menu">Decoração de eventos</div></a>
				<a href="#"><div class="item_menu">Espaço para Festas</div></a>
				<a href="#"><div class="item_menu">Financiamentos</div></a>
				<a href="#"><div class="item_menu">Floriculturas</div></a>
				<a href="#"><div class="item_menu">Games e Eletrônicos</div></a>
				<a href="#"><div class="item_menu">Gráficas</div></a>
				<a href="#"><div class="item_menu">Hobby e modelismo</div></a>
				<a href="#"><div class="item_menu">Hospedagem</div></a>
				<a href="#"><div class="item_menu">Camping</div></a>
				<a href="#"><div class="item_menu">Casas de Aluguel</div></a>
				<a href="#"><div class="item_menu">Casas de Excursões</div></a>
				<a href="#"><div class="item_menu">Hotéis</div></a>
				<a href="#"><div class="item_menu">Motel</div></a>
				<a href="#"><div class="item_menu">Pousadas</div></a>
				<a href="#"><div class="item_menu">Igrejas</div></a>
				<a href="#"><div class="item_menu">Imobiliárias</div></a>
				<a href="#"><div class="item_menu">Informática</div></a>
				<a href="#"><div class="item_menu">Cartuchos e toners</div></a>
				<a href="#"><div class="item_menu">Cursos</div></a>
				<a href="#"><div class="item_menu">Lojas e assistência</div></a>
				<a href="#"><div class="item_menu">Manutenção de Impressoras</div></a>
				<a href="#"><div class="item_menu">Sistemas e consultoria</div></a>
				<a href="#"><div class="item_menu">TI - Tecnologia da Informação</div></a>
				<a href="#"><div class="item_menu">Internet</div></a>
				<a href="#"><div class="item_menu">Lan house</div></a>
				<a href="#"><div class="item_menu">Provedores</div></a>
				<a href="#"><div class="item_menu">Webdesign</div></a>
				<a href="#"><div class="item_menu">Jóias</div></a>
				<a href="#"><div class="item_menu">Jornais e Revistas</div></a>
				<a href="#"><div class="item_menu">Lotéricas</div></a>
				<a href="#"><div class="item_menu">Máquinas e Ferramentas</div></a>
				<a href="#"><div class="item_menu">Motocicletas</div></a>
				<a href="#"><div class="item_menu">Lojas</div></a>
				<a href="#"><div class="item_menu">Peças e serviços</div></a>
				<a href="#"><div class="item_menu">Móveis</div></a>
				<a href="#"><div class="item_menu">Atacado e fabricação</div></a>
				<a href="#"><div class="item_menu">Móveis e eletros</div></a>
				<a href="#"><div class="item_menu">Móveis para escritório</div></a>
				<a href="#"><div class="item_menu">Móveis usados</div></a>
				<a href="#"><div class="item_menu">Restauração de Móveis</div></a>
				<a href="#"><div class="item_menu">Música</div></a>
				<a href="#"><div class="item_menu">Náutica</div></a>
				<a href="#"><div class="item_menu">Oticas</div></a>
				<a href="#"><div class="item_menu">Papelarias</div></a>
				<a href="#"><div class="item_menu">Prestação de serviços</div></a>
				<a href="#"><div class="item_menu">Antenas</div></a>
				<a href="#"><div class="item_menu">Astrologia</div></a>
				<a href="#"><div class="item_menu">Cartórios</div></a>
				<a href="#"><div class="item_menu">Chaveiros</div></a>
				<a href="#"><div class="item_menu">Consultoria</div></a>
				<a href="#"><div class="item_menu">Dedetizadores</div></a>
				<a href="#"><div class="item_menu">Eletrônicas</div></a>
				<a href="#"><div class="item_menu">Extintores</div></a>
				<a href="#"><div class="item_menu">Fotografia</div></a>
				<a href="#"><div class="item_menu">Funerárias</div></a>
				<a href="#"><div class="item_menu">Gás</div></a>
				<a href="#"><div class="item_menu">Jardinagem</div></a>
				<a href="#"><div class="item_menu">Lavanderias</div></a>
				<a href="#"><div class="item_menu">Limpeza</div></a>
				<a href="#"><div class="item_menu">Mão de Obra</div></a>
				<a href="#"><div class="item_menu">Noivas</div></a>
				<a href="#"><div class="item_menu">Pagamentos</div></a>
				<a href="#"><div class="item_menu">Películas</div></a>
				<a href="#"><div class="item_menu">Poços Artesianos</div></a>
				<a href="#"><div class="item_menu">Produtos descartáveis</div></a>
				<a href="#"><div class="item_menu">Refrigeração</div></a>
				<a href="#"><div class="item_menu">Segurança e alarme</div></a>
				<a href="#"><div class="item_menu">Video locadoras</div></a>
				<a href="#"><div class="item_menu">Propaganda e mídia</div></a>
				<a href="#"><div class="item_menu">Agências</div></a>
				<a href="#"><div class="item_menu">Comunicação visual</div></a>
				<a href="#"><div class="item_menu">Jornais</div></a>
				<a href="#"><div class="item_menu">Rádios</div></a>
				<a href="#"><div class="item_menu">Revistas</div></a>
				<a href="#"><div class="item_menu">Restaurantes</div></a>
				<a href="#"><div class="item_menu">Setor público</div></a>
				<a href="#"><div class="item_menu">Shopping Center</div></a>
				<a href="#"><div class="item_menu">Sindicatos</div></a>
				<a href="#"><div class="item_menu">Tatuagem e Piercing</div></a>
				<a href="#"><div class="item_menu">Tele entregas</div></a>
				<a href="#"><div class="item_menu">Água e Gás</div></a>
				<a href="#"><div class="item_menu">Comida e bebida</div></a>
				<a href="#"><div class="item_menu">Remédios</div></a>
				<a href="#"><div class="item_menu">Tele Entulho</div></a>
				<a href="#"><div class="item_menu">Telefonia</div></a>
				<a href="#"><div class="item_menu">Lojas</div></a>
				<a href="#"><div class="item_menu">Lojas</div></a>
				<a href="#"><div class="item_menu">Posto telefônico</div></a>
				<a href="#"><div class="item_menu">Telefonia móvel</div></a>
				<a href="#"><div class="item_menu">Transportes</div></a>
				<a href="#"><div class="item_menu">Fretes e mudanças</div></a>
				<a href="#"><div class="item_menu">Guincho</div></a>
				<a href="#"><div class="item_menu">Moto-táxi</div></a>
				<a href="#"><div class="item_menu">Passageiros</div></a>
				<a href="#"><div class="item_menu">Táxi</div></a>
				<a href="#"><div class="item_menu">Táxi Aéreo</div></a>
				<a href="#"><div class="item_menu">Tratores</div></a>
				<a href="#"><div class="item_menu">Vestuário</div></a>
				<a href="#"><div class="item_menu">Acessórios</div></a>
				<a href="#"><div class="item_menu">Bordados</div></a>
				<a href="#"><div class="item_menu">Calçados</div></a>
				<a href="#"><div class="item_menu">Costureiras</div></a>
				<a href="#"><div class="item_menu">Íntima</div></a>
				<a href="#"><div class="item_menu">Locação de trajes</div></a>
				<a href="#"><div class="item_menu">Moda infantil</div></a>
				<a href="#"><div class="item_menu">Moda jovem e adulto</div></a>
				<a href="#"><div class="item_menu">Pijamas</div></a>
				<a href="#"><div class="item_menu">Roupas para Festas</div></a>
				<a href="#"><div class="item_menu">Tecidos</div></a>
				<a href="#"><div class="item_menu">Uniformes</div></a>
				<a href="#"><div class="item_menu">Vinhos</div></a>
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
