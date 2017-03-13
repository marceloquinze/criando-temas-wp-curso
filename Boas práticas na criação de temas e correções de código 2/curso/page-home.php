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
			<div class="container">Mapa</div>
		</section>
	</main>	
</div>
<?php get_footer(); ?>



