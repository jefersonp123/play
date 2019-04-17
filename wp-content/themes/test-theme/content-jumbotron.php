<?php
	$jumbotron= array(
					'post_type' => 'jumbotron'
				);
	$the_query = new WP_Query($jumbotron)
 ?>
<?php if ( have_posts() ) : while ($the_query -> have_posts() ) : $the_query -> the_post(); ?>
	<h3><?php the_title(); ?></h3>
	<p class="lead">
		<?php the_field('jumbotron'); ?>
	</p>
	<p><a class="btn btn-lg btn-success" href="#" role="button"><?php the_field('boton'); ?></a></p>
<?php endwhile; else: ?>
<p><?php _e('Lo siento, no encontre nada para mostrar.'); ?></p>
<?php endif; ?>