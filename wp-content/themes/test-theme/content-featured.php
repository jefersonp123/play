<?php
$featured= array(
	'post_type' => 'featured'
);
$the_query = new WP_Query($featured)
?>
<?php if ( have_posts() ) : while ($the_query -> have_posts() ) : $the_query -> the_post(); ?>
	<h3 align="left"><?php the_title();?></h3>
	<div class="col-sm-4">
		<p align="left"><?php the_field('descripcion'); ?></p>
	</div>
<?php endwhile; else: ?>
<p><?php _e('Lo siento, no encontre nada para mostrar.'); ?></p>
<?php endif; ?>

