<?php get_header(); ?>
<div class="conteudo">
	<main>
		<section class="slide">
			<?php motoPressSlider( "home-slider" ) ?>
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

						// Quais categorias serão inclusas na nossa listagem?
						$itens = get_categories(array(6,7,8));
						//echo '<pre>';
						//print_r($itens);
						//echo '</pre>';

						// Começamos um contador para cada item buscado. No caso, três itens
						$cont = 1;

						// Para cada categoria achada, buscamos um só item dessa categoria
						// Este loop roda até o contador valer 3
						foreach($itens as $item):

							// Pegamos cada item dentro do loop para compor nossa consulta
							$args = array(
								'category__in'		=> $item->term_id,
								'posts_per_page'	=> 1
							);

							// Criação do objeto da classe WP_Query
							$consulta = new WP_Query($args);

							// O loop WordPress (consulta padrão modificada)
							if($consulta->have_posts()):
								while($consulta->have_posts()):
									$consulta->the_post();

								// Temos que ver se o contador vale 1. Se valer, vai em frente e mostra nosso template de post com 12 colunas
								// Se não valer 1, chama outro template, envolto com 6 colunas
								if($cont == 1):
						?>

							<div class="col-md-12">
								<?php get_template_part('content', 'destaque'); ?>
							</div>

							<?php else: ?>

							<div class="col-md-6">
								<?php get_template_part('content', 'secundaria'); ?>
							</div>							

						<?php
								endif;

								endwhile;
								// Reseta a conculta a cada passo do loop
								wp_reset_postdata();

							endif;

						// Incrementa o contador antes de acabar o loop
						$cont++;

						endforeach;

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



