<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="<?php echo BASE_URL?>/assets/css/bootstrap.min.css">
		<script type="text/javascript" src="<?php echo BASE_URL?>/assets/js/jquery-3.2.1.min.js"></script>
		<script type="text/javascript" src="<?php echo BASE_URL?>/assets/js/bootstrap.min.js"></script>
		<link rel="stylesheet" type="text/css" href="<?php echo BASE_URL?>/assets/css/template.css">
		<title>Site</title>
	</head>
	<body>
		<div class="container">

			<div class="topo">
				<div class="topo1"></div>
				<div class="banner"></div>
			</div>

		
			<div class="menu">
				<ul>
				    <a href="/PHP/site_institucional/"><li>HOME</li></a>
				    <a href="/PHP/site_institucional/portfolio"><li>PORTFÓLIO</li></a>
				    <a href="/PHP/site_institucional/sobre"><li>SOBRE</li></a>
				    <a href="/PHP/site_institucional/servicos"><li>SERVIÇOS</li></a>
				    <a href="/PHP/site_institucional/contato"><li>CONTATO</li></a>
				</ul>
			</div>
			
			<div class="conteudo">
				<?php $this->loadViewInTemplate($viewName, $viewData); ?>
			</div>
			<div class="rodape">
				
			</div>
		</div>	
	</body>
</html>