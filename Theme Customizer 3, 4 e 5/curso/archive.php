<?php get_header(); ?>

<img class="img-responsive" src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="" />

<div class="conteudo">
	<main>
		<section class="meio">
			<div class="container">
				<div class="row">

					<div class="arquivo col-md-9">

						<?php 

						the_archive_title('<h1 class="titulo-arquivo">','</h1>');
						the_archive_description();

						if(have_posts()) :
								while (have_posts()) : the_post(); 

									get_template_part('content', 'archive'); 
 
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
						<?php endif; ?>


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
