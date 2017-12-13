
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>SJP Virtual</title>

	<meta name="viewport" content="width=device-width, initial-scale=1">

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
				<div class="col-sm-10">
					<ul>
						<li><a href="#">A Cidade</a></li>
						<li><a href="#">Guia Comercial</a></li>
						<li><a href="#">Delivery SJP</a></li>
						<li><a href="#">Lazer e Turismo</a></li>
						<li><a href="#">Notícias</a></li>
						<li><a href="#">Classificados</a></li>
					</ul>
				</div>
				<div class="col-sm-2" style="text-align: right;">
					<a href=""><i style="color: #ffffff;" data-toggle="tooltip" data-placement="top" title="Facebook" class="fa fa-facebook"></i></a> &nbsp;&nbsp;&nbsp;
					<a href=""><i style="color: #ffffff;" data-toggle="tooltip" data-placement="top" title="Twitter" class="fa fa-twitter"></i></a> &nbsp;&nbsp;&nbsp;
					<a href=""><i style="color: #ffffff;" data-toggle="tooltip" data-placement="top" title="Google +" class="fa fa-google-plus""></i></a>
				</div>
			</div>
			<div class="row" style="display: none;">
				<div class="col-sm-12">
					<div class="input-group">
			      <input type="text" class="form-control" placeholder="Search for...">
			      <span class="input-group-btn">
			        <button class="btn btn-secondary" type="button">Go!</button>
			      </span>
			    </div>
				</div>
			</div>
		</div>
	</nav>

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

</body>
</html>
