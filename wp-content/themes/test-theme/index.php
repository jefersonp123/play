<?php get_header(); ?>
<div class="container">
	<div class="jumbotron">
		<?php get_template_part( 'content','jumbotron' ); ?>
	</div>
	<div class="container marketing">
		<div class="row">
			<h3 class="subtitulo">Testimonios</h3>
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<div class="col-lg-4">
					<?php
					if ( has_post_thumbnail() )
					{
						the_post_thumbnail('thumbnail',array('class'=>'img-circle center-block', 'width'=>'140', 'height' =>'140'));
					}
					?>

					<p>
						<?php the_excerpt(); ?>
					</p>
				</div><!-- /.col-lg-4 -->
			<?php endwhile; else: ?>
			<p><?php _e('Lo siento, no encontre nada para mostrar.'); ?></p>
		<?php endif; ?>
	</div>
</div>
<div class="jumbotron">
	<div class="row">
		<div align="left">
			FEATURED
			<?php get_template_part( 'content','featured' ); ?>
		</div>
	</div>
	<div class="row">
		<div align="left">
			BLOG
			<?php get_template_part( 'content','blog' ); ?>
		</div>
	</div>
</div>
<?php get_footer(); ?>