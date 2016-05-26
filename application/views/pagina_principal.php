<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">	
	<title>Plataforma de reconocimiento de cursos online</title>	
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Bootstrap -->
	<link href="<?php echo base_url('css/bootstrap.css');?>" rel="stylesheet">
	<!-- Estilo propio de la página -->
	<link href="<?php echo base_url('css/style.css');?>" rel="stylesheet">
	<link href="<?php echo base_url('css/pagina_principal.css');?>" rel="stylesheet">
	<!-- Font Awesome -->
	<link href="<?php echo base_url('css/font-awesome.min.css');?>" rel="stylesheet">
	<!--JAVASCRIPT-->
	<script src="<?php echo base_url('js/jquery-1.12.3.min.js');?>"></script>
	<script src="<?php echo base_url('js/bootstrap.js');?>"></script>	

</head>
<body>
<div class="container-fluid">	
	<?php $this->load->view('header'); ?>
	<div class="row contenedor-imagen-slider">
		<div class="col-xs-12 quitar-padding-columnas imagen-slider">			
		</div>	
		<div class="container superponer">
			<div class="row">
				<div class="col-xs-12 alinear-centro">
					<p class="parrafo-1-superponer">¿Estás pensando en aprender?</p>
					<p class="parrafo-2-superponer">Escoge la materia que mejor concuerde con tus necesidades</p>
				</div>
				<div class="col-xs-12 col-sm-4 contenedor-area">
					<div class="area">
						<span><i class="fa fa-paint-brush icono-area" aria-hidden="true"></i></span>
						<p>Arte y diseño</p>
					</div>
				</div>
				<div class="col-xs-12 col-sm-4 contenedor-area">
					<div class="area">
						<span><i class="fa fa-suitcase icono-area" aria-hidden="true"></i></span>
						<p>Administración de empresas</p>
					</div>
				</div>
				<div class="col-xs-12 col-sm-4 contenedor-area">
					<div class="area">
						<span><i class="fa fa-graduation-cap icono-area" aria-hidden="true"></i></span>
						<p>Educación</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12 col-sm-4 contenedor-area">
					<div class="area">
						<span><i class="fa fa-users icono-area" aria-hidden="true"></i></span>
						<p>Humanidades</p>
					</div>
				</div>
				<div class="col-xs-12 col-sm-4 contenedor-area">
					<div class="area">
						<span><i class="fa fa-flask icono-area" aria-hidden="true"></i></span>
						<p>Ciencia y Tecnología</p>
					</div>
				</div>
				<div class="col-xs-12 col-sm-4 contenedor-area">
					<div class="area">
						<span><i class="fa fa-heartbeat icono-area" aria-hidden="true"></i></span>
						<p>Deportes y Ocio</p>
					</div>
				</div>
			</div>
		</div>


	</div>	
			

	

	<h1><?= $cadena ?></h1>

	<?php $this->load->view('footer'); ?>
</div>
</body>
</html>