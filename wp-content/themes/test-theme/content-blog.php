<?php
$blog= array(
	'post_type' => 'blog'
);
$the_query = new WP_Query($blog)
?>
<?php if ( have_posts() ) : while ($the_query -> have_posts() ) : $the_query -> the_post(); ?>
	<h3 align="left"><?php the_title(); ?></h3>
	<div class="row">
		<div class="col-sm-8">
			<?php the_excerpt(the_field('descripcion_blog')); ?><a href="<?php the_permalink() ?>">Read More...</a>
		</div>
		<div class="col-sm-4">
			<p><a class="btn btn-lg btn-default">See More</a></p>
		</div>
	</div>
	<div class="row">
		<div class="col-lg-2">
			<?php
				if ( has_post_thumbnail() )
				{
					the_post_thumbnail('thumbnail',array('class'=>'img-circle center-block', 'width'=>'140', 'height' =>'140'));
				}
			?>
		</div>
		<div class="col-sm-2">
			<p><b style="color: #77bcdb; !important;"><?php the_field('creador_blog'); ?></b>
			<br>
			<b><?php the_field('empresa_blog'); ?></b>
		</p>
	</div>
</div>


<?php endwhile; else: ?>
<p><?php _e('Lo siento, no encontre nada para mostrar.'); ?></p>
<?php endif; ?>
