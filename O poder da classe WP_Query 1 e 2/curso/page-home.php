<?php get_header(); ?>
<div class="conteudo">
	<main>
		<section class="slide">
			<div class="container">Slide</div>
		</section>
		<section class="servicos">
			<div class="container">Serviços</div>
		</section>
		<section class="meio">
			<div class="container">
				<div class="row">
					<aside class="barra-lateral col-md-3">
						<?php get_sidebar('home'); ?>
					</aside>
					<div class="noticias col-md-9">
						<div class="row">
							<?php 

							//Usando WP_Query com query string

							// 1 Criamos o objeto da classe e passamos os valores diretamente pela string 
							$destaque = new WP_Query('post_type=post&posts_per_page=1&cat=6,8');

							// 2 Construímos nosso loop com dados vindos do objeto criado
							if($destaque->have_posts()):
								while($destaque->have_posts()):
									$destaque->the_post();
							?>
								<div class="col-md-12">
									<?php 
									// 3 Dentro do loop, chamamos a estrutura do post através de um arquivo de template	
									get_template_part('content','destaque'); 
									?>
								</div>
								
							<?php
								endwhile;

								// 4 Resetamos os dados da consulta 
								wp_reset_postdata();

							endif;

							 ?>

							<?php 

							//Usando WP_Query com array

							// 1 Criamos o array e passamos os valores desejados 
							$args = array(
								'post_type'			=>	'post',
								'posts_per_page'	=> 	2,
								'category__not_in'	=>	array(7),
								'category__in'		=>	array(6,8),
								'offset'			=>	1
							);

							// 2 Criamos o objeto e passamos o array para o construtor da classe
							$secundarias = new WP_Query($args);

							// 3 Criamos nosso loop
							if($secundarias->have_posts()):
								while($secundarias->have_posts()):
									$secundarias->the_post();
							?>
								<div class="col-md-6">
									<?php 
									// 4 Dentro do loop, chamamos a estrutura do post através de um arquivo de template	
									get_template_part('content','secundaria'); 
									?>
								</div>
								
							<?php
								endwhile;
								// 5 Resetamos os dados da consulta 
								wp_reset_postdata();
							endif;

							 ?>
							
						</div>
					</div>
				</div>
			</div>
		</section>
		<section class="mapa">
			<div class="container">Mapa</div>
		</section>
	</main>	
</div>
<?php get_footer(); ?>



