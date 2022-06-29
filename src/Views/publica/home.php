<?=$this->fetch('commons/header.php')?>

<section class="banners">
	<ul class="itens">
		<li class="item">
			<a href="#">
				<img src="<?=URL_BASE?>resources/imagens/banners/banner.png" alt="Banner">
			</a>
		</li>
		<li class="item">
			<a href="#">
				<img src="<?=URL_BASE?>resources/imagens/banners/banner.png" alt="Banner">
			</a>
		</li>
	</ul>
</section>

<?php
    $data['slider_servicos'] = true;
    echo $this->fetch('commons/servicos.php', $data);
?>

<section class="call_to_action">
	<video autoplay loop muted src="<?=URL_BASE?>resources/videos/video2.mp4"></video><!--autoplay-->
	<div class="container">
		<div class="titulo_principal">
			Somos a Oficina mecânica mais completa de Porto Alegre com excelente qualidade e preços acessíveis
		</div>
		<div class="btn">
			<a href="#">Fazer Orçamento</a>
		</div>
	</div>
</section>

<section class="institucional">
	<div class="container">
		<div class="informacoes">
			<div class="titulo">
				<h2>Quem somos</h2>
			</div>
			<div class="descricao">
				<p>Lorem ipsum justo bibendum nunc justo imperdiet sapien tortor dui nostra interdum, senectus elit tristique himenaeos justo ut placerat pharetra vel purus, sociosqu porta feugiat dui sit arcu placerat fames nullam primis.</p>
				<p>Venenatis dictum at rhoncus aliquam ut interdum ut dui urna, primis commodo consequat aptent dapibus ornare sociosqu faucibus, habitant quam lectus ligula magna duis elementum vehicula.</p>
			</div>
			<div class="btn">
				<a href="#">Continue Lendo</a>
			</div>
		</div>
		<div class="video">
			<img src="<?=URL_BASE?>resources/imagens/institucional/institucional.png" alt="Institucional">
			<div class="conteudo">
				<div class="texto">
					Assista o vídeos especial que preparamos para você
				</div>
				<div class="icone">
					<a class="swipebox-video" href="https://www.youtube.com/watch?v=9JmjyvTXdSE" title="Vídeo Institucional">
						<i class="fa fa-play"></i>
					</a>
				</div>
			</div>
		</div>
	</div>
</section>
<?=$this->fetch('commons/clientes.php')?>
<section class="marcas">
	<div class="container">
		<div class="galeria">
			<div class="item">
				<img src="<?=URL_BASE?>resources/imagens/marcas/logo_audi.png" alt="">
			</div>
			<div class="item">
				<img src="<?=URL_BASE?>resources/imagens/marcas/logo_bmw.png" alt="">
			</div>
			<div class="item">
				<img src="<?=URL_BASE?>resources/imagens/marcas/logo_chevrolet.png" alt="">
			</div>
			<div class="item">
				<img src="<?=URL_BASE?>resources/imagens/marcas/logo_citroen.png" alt="">
			</div>
			<div class="item">
				<img src="<?=URL_BASE?>resources/imagens/marcas/logo_fiat.png" alt="">
			</div>
			<div class="item">
				<img src="<?=URL_BASE?>resources/imagens/marcas/logo_ford.png" alt="">
			</div>
			<div class="item">
				<img src="<?=URL_BASE?>resources/imagens/marcas/logo_honda.png" alt="">
			</div>
			<div class="item">
				<img src="<?=URL_BASE?>resources/imagens/marcas/logo_hyundai.png" alt="">
			</div>
			<div class="item">
				<img src="<?=URL_BASE?>resources/imagens/marcas/logo_jac.png" alt="">
			</div>
			<div class="item">
				<img src="<?=URL_BASE?>resources/imagens/marcas/logo_land_rover.png" alt="">
			</div>
			<div class="item">
				<img src="<?=URL_BASE?>resources/imagens/marcas/logo_mercedes.png" alt="">
			</div>
			<div class="item">
				<img src="<?=URL_BASE?>resources/imagens/marcas/logo_mitsubishi.png" alt="">
			</div>
			<div class="item">
				<img src="<?=URL_BASE?>resources/imagens/marcas/logo_nissan.png" alt="">
			</div>
			<div class="item">
				<img src="<?=URL_BASE?>resources/imagens/marcas/logo_peugeot.png" alt="">
			</div>
			<div class="item">
				<img src="<?=URL_BASE?>resources/imagens/marcas/logo_renault.png" alt="">
			</div>
			<div class="item">
				<img src="<?=URL_BASE?>resources/imagens/marcas/logo_suzuki.png" alt="">
			</div>
			<div class="item">
				<img src="<?=URL_BASE?>resources/imagens/marcas/logo_toyota.png" alt="">
			</div>
			<div class="item">
				<img src="<?=URL_BASE?>resources/imagens/marcas/logo_volkswagen.png" alt="">
			</div>
			<div class="item">
				<img src="<?=URL_BASE?>resources/imagens/marcas/logo_volvo.png" alt="">
			</div>
		</div>
	</div>
</section>

<section class="noticias">
	<div class="container">
		<div class="titulo center">
			<h2>Notícias</h2>
		</div>
		<div class="descricao">
			There are manu variations of passages of Lorem Ipsum typesetting industry has been the industry's standard dummy text ever since the been when an unknown printer.
		</div>
		<div class="itens">
			<div class="item">
				<div class="img">
					<img src="<?=URL_BASE?>resources/imagens/servicos/servicos.png" alt="Serviços">
				</div>
				<div class="info">
					<div class="data">
						20/08/2021
					</div>
					<div class="titulo">
						<h3>título da notícia título da notícia título da notícia título da notícia título da notícia título da notícia </h3>
					</div>
					<div class="link">
						<a href="#">Saiba mais</a>
					</div>
				</div>
			</div>
			<div class="item">
				<div class="img">
					<img src="<?=URL_BASE?>resources/imagens/servicos/servicos.png" alt="Serviços">
				</div>
				<div class="info">
					<div class="data">
						20/08/2021
					</div>
					<div class="titulo">
						<h3>título da notícia título da notícia título da notícia título da notícia título da notícia título da notícia </h3>
					</div>
					<div class="link">
						<a href="#">Saiba mais</a>
					</div>
				</div>
			</div>
			<div class="item">
				<div class="img">
					<img src="<?=URL_BASE?>resources/imagens/servicos/servicos.png" alt="Serviços">
				</div>
				<div class="info">
					<div class="data">
						20/08/2021
					</div>
					<div class="titulo">
						<h3>título da notícia título da notícia título da notícia título da notícia título da notícia título da notícia </h3>
					</div>
					<div class="link">
						<a href="#">Saiba mais</a>
					</div>
				</div>
			</div>
			<div class="item">
				<div class="img">
					<img src="<?=URL_BASE?>resources/imagens/servicos/servicos.png" alt="Serviços">
				</div>
				<div class="info">
					<div class="data">
						20/08/2021
					</div>
					<div class="titulo">
						<h3>título da notícia título da notícia título da notícia título da notícia título da notícia título da notícia </h3>
					</div>
					<div class="link">
						<a href="#">Saiba mais</a>
					</div>
				</div>
			</div>
			<div class="item">
				<div class="img">
					<img src="<?=URL_BASE?>resources/imagens/servicos/servicos.png" alt="Serviços">
				</div>
				<div class="info">
					<div class="data">
						20/08/2021
					</div>
					<div class="titulo">
						<h3>título da notícia título da notícia título da notícia título da notícia título da notícia título da notícia </h3>
					</div>
					<div class="link">
						<a href="#">Saiba mais</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<?=$this->fetch('commons/footer.php')?>