<?php get_header(); ?>

<img class="img-responsive" src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="" />

<div class="conteudo">
	<main>
		<section class="meio">
			<div class="container">
				<div class="row">

					<div class="blog col-md-9">

						<?php 

						//================================================================//
						//============== Caso 1 - Usando o loop padrão ==================//
/*
						if(have_posts()) :
								while (have_posts()) : the_post(); 

									get_template_part('content', get_post_format()); 
 
								endwhile;		
						?>
								<div class="paginacao text-left">
									<?php next_posts_link("<< Mais antigos") ?>
								</div>

								<div class="paginacao text-right">
									<?php previous_posts_link("Mais novos >>"); ?>
								</div>						

						<?php else: ?>
							<p>Nao tem nada ainda pra mostrar</p>
						<?php endif; */?>


						<?php 

						//================================================================//
						//=== Caso 2 - Usando a classe WP_Query - cópia do loop padrão ===//

/*						$paginaatual = ( get_query_var('paged')) ? get_query_var('paged') : 1;

						$args = array(
							'posts_per_page' => 2,
							'paged'	=> $paginaatual
						);

						echo $paged;

						$consulta = new WP_Query($args);

						if($consulta->have_posts()) :
								while ($consulta->have_posts()) : $consulta->the_post(); 
									
									get_template_part('content', get_post_format()); 

								endwhile;

								wp_reset_postdata();

						?>
								<div class="paginacao text-left">
									<?php next_posts_link("<< Mais antigos", $consulta->max_num_pages) ?>
								</div>

								<div class="paginacao text-right">
									<?php previous_posts_link("Mais novos >>"); ?>
								</div>						

						<?php else: ?>
							<p>Nao tem nada ainda pra mostrar</p>
						<?php endif; */?>						

						<?php
						//===============================================================//
						//===  Caso 3 - Usando query_posts() -> desvio no loop padrão ===//

						$paginaatual = ( get_query_var('paged')) ? get_query_var('paged') : 1;

						$args = array(
							'posts_per_page' => 2,
							'paged'	=> $paginaatual
						);

						query_posts($args);

						if(have_posts()) :
								while (have_posts()) : the_post(); 
									
									get_template_part('content', get_post_format()); 

								endwhile;						

						?>
								<div class="paginacao text-left">
									<?php next_posts_link("<< Mais antigos") ?>
								</div>

								<div class="paginacao text-right">
									<?php previous_posts_link("Mais novos >>"); ?>
								</div>						

						<?php else: ?>
							<p>Nao tem nada ainda pra mostrar</p>
						<?php endif;

						wp_reset_query();

						?>

					</div>
					<aside class="barra-lateral col-md-3">
						<?php get_sidebar('blog'); ?>
					</aside>
				</div>
			</div>
		</section>

	</main>	
</div>
<?php get_footer(); ?>
