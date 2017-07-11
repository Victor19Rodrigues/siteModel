<div class="home_sobre">
	<img src="" border="0" width="150px" height="150px">
	<h4>Sobre</h4>
	O Lorem Ipsum é um texto modelo da indústria tipográfica e de impressão. O Lorem Ipsum tem vindo a ser o texto padrão usado por estas indústrias desde o ano de 1500, quando uma misturou os caracteres de um texto para criar um espécime de livro. Este texto não só sobreviveu 5 séculos, mas também o salto para a tipografia electrónica, mantendo-se essencialmente inalterada. Foi popularizada nos anos 60 com a disponibilização das folhas de Letraset, que continham passagens com Lorem Ipsum, e mais recentemente com os programas de publicação como o Aldus PageMaker que incluem versões do Lorem Ipsum.
</div>

<div class="home_portfolio">
	<h4>
		Meu portfolio
	</h4>

	<?php foreach($portfolio as $item): ?>
		<div class="portfolio_item">
			<img src="/PHP/site_institucional/assets/portfolio/<?php echo $item['imagem'];?>" border="0" width="200px" height="150px">
		</div>
	<?php endforeach; ?>
	<div style="clear: both;"></div>
</div>