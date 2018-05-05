<?php get_header(); ?>
	<section class="[ container ]">
		<h1><?php the_title(); ?></h1>
		<div id="filters" class="button-group">  
			<button class="button is-checked" data-filter=".lugares">lugares</button>
			<button class="button" data-filter=".personas">personas</button>
			<button class="button" data-filter=".series">series</button>
			<button class="button" data-filter=".smartphone">smartphone</button>
		</div>

		<div class="grid [ margin-bottom ]">

			<?php
				$galeria_args = array(
					'post_type' => 'galeria',
					'posts_per_page' => '-1',
					'order'=> 'ASC'
				);
				$galeria_query = new WP_Query( $galeria_args );
				if ( $galeria_query->have_posts() ) :
				while ( $galeria_query->have_posts() ) : $galeria_query->the_post();

				// Get slug taxonomy seccion for class element-item (filters)
				$getSlugID = wp_get_post_terms( $post->ID, 'seccion' ); 

				// Get slug taxonomy columna for width img
				$getWidthCol = wp_get_post_terms( $post->ID, 'columnas' ); 

				global $post;
				$post_slug=$post->post_name;
			?>
				<div class="element-item 
				<?php foreach( $getWidthCol as $thisWidthCol ) { echo 'col' . $thisWidthCol->slug . ' '; } ?> 
				<?php foreach( $getSlugID as $thisSlug ) { echo $thisSlug->slug . ' '; } ?>">
					<div class="content-item">

						<?php if( has_term( array('lugares', 'series') , 'seccion' ) ) { ?>
							<div class="[ box-info ]">
								<h3 class="section-gallery"><?php the_title(); ?></h3>						
								<div class="[ box-buttons ]">
									<a href="<?php the_permalink(); ?>" class="waves-effect waves-light btn btn-rectangle">
										<i class="icon-link"></i>
									</a>
									<div id="<?php echo $post_slug; ?>" class="waves-effect waves-light btn btn-rectangle btn-zoom">
										<i class="icon-zoom-in"></i>
									</div>
									<div class="waves-effect waves-light btn btn-rectangle">
										<i class="icon-share"></i>
									</div>						
								</div>	
							</div>							
						<?php } else {?>

						<?php } ?>	

						<img class="materialboxed <?php echo $post_slug; ?>" src="<?php the_post_thumbnail_url('medium'); ?>" alt="Fotografía <?php the_title(); ?>" />
					</div>
				</div>
			<?php 
				endwhile;
				wp_reset_postdata();
				else:
			?>
				<p>Falta agregar imágenes a la galería</p>	
			<?php endif; ?>	

		</div>
	</section>
<?php get_footer(); ?>