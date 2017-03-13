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

						/**
						 * Variáveis para divs das notícias e arquivo de conteúdo
						 *
						 * Sugestão Gilberto Medeiros
						 * @see https://www.udemy.com/criando-temas-customizados-com-wordpress/learn/v4/questions/1968272
						 *
						 */

						$tamanho = 'col-md-12';
                        			$op_content = 'destaque';

                        			// Quais categorias serão inclusas na nossa listagem?
						$itens = get_categories(array('include' => '6,7,8'));

						// echo '<pre>';
						// print_r($itens);
						// echo '</pre>';

						// Para cada categoria encontrada, buscamos um só item dessa categoria
						foreach($itens as $item):

							// Pegamos cada item dentro do loop para compor nossa consulta
							$args = array(
								'category__in' => $item->cat_ID,
								'posts_per_page' => 1
							);

							// Criação do objeto da classe WP_Query
							$consulta = new WP_Query($args);

							// O loop WordPress (consulta padrão modificada)
							if($consulta->have_posts()):
								while($consulta->have_posts()):
									$consulta->the_post();

							// Abaixo, usamos as variáveis $tamanho e $op_content
							// Na primeira repetição do loop, elas têm o valor indicado acima. Na segunda e terceira, mudam de valor
							?>
								<div class="<?php echo $tamanho; ?>">
									<?php get_template_part('content', $op_content); ?>
								</div>								

							<?php

								// Reiniciamos o valor das variáveis $tamanho e $op_content com novos valores
								// Esses novos valores só valerão do segundo loop em diante

								$tamanho = 'col-md-6';
	                        				$op_content = 'secundaria';

								endwhile;
								// Reseta a consulta a cada passo do loop
								wp_reset_postdata();

							endif;

						// Fim do loop foreach
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



