<?php get_header(); ?>
<div class="conteudo">
	<main>
		<section class="slide">
			<?php motoPressSlider( "home-slider" ) ?>
		</section>
		<section class="servicos">
			<div class="container">
				<h1>Serviços</h1>
				<div class="row">
					<div class="col-md-4 col-sm-4 col-xs-12">
						<div class="servicos-item">
							<div class="servicos-img">
								<img src="<?php echo wp_get_attachment_url(get_theme_mod('set_servicos1')); ?>" alt="">
							</div>
							<div class="servicos-desc">
								<h2><?php echo get_theme_mod('set_servicos1_titulo') ?></h2>
								<p><?php echo get_theme_mod('set_servicos1_descricao') ?></p>
							</div>
						</div>
					</div>
					<div class="col-md-4 col-sm-4 col-xs-12">
						<div class="servicos-item">
							<div class="servicos-img">
								<img src="<?php echo wp_get_attachment_url(get_theme_mod('set_servicos2')); ?>" alt="">
							</div>
							<div class="servicos-desc">
								<h2><?php echo get_theme_mod('set_servicos2_titulo') ?></h2>
								<p><?php echo get_theme_mod('set_servicos2_descricao') ?></p>
							</div>
						</div>
					</div>
					<div class="col-md-4 col-sm-4 col-xs-12">
						<div class="servicos-item">
							<div class="servicos-img">
								<img src="<?php echo wp_get_attachment_url(get_theme_mod('set_servicos3')); ?>" alt="">
							</div>
							<div class="servicos-desc">
								<h2><?php echo get_theme_mod('set_servicos3_titulo') ?></h2>
								<p><?php echo get_theme_mod('set_servicos3_descricao') ?></p>
							</div>
						</div>
					</div>
				</div>

			</div>
		</section>
		<section class="meio">
			<div class="container">
				<div class="row">
					<aside class="barra-lateral col-md-4">
						<?php get_sidebar('home'); ?>
					</aside>
					<div class="noticias col-md-8">
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
			<div class="ondeestamos">
				<h1>Onde estamos?</h1>
			</div>
			<?php gmwd_map( 1, 1); ?>
		</section>
	</main>	
</div>
<?php get_footer(); ?>



