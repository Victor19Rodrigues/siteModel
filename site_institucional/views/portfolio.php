<div class="porfolio">
	<h1>
		Meu portfolio
	</h1>

	<?php foreach($portfolio as $item): ?>
		<div class="portfolio_item">
			<img src="/PHP/site_institucional/assets/portfolio/<?php echo $item['imagem'];?>" border="0" width="200px" height="150px">
		</div>
	<?php endforeach; ?>
	<div style="clear: both;"></div>
</div>