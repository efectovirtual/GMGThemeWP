<?php 

/*
* Template Name: GMG Title - Medium
*/

get_header(); ?>


	<?php if (have_posts()): while (have_posts()) : the_post();
				$thumb = wp_get_attachment_image_src( get_post_thumbnail_id(), 'parallax' );
				$urlImagen = $thumb['0'];
		 ?>

	
</div> <!-- /wrapper -->
		<div id="post-<?php the_ID(); ?>" class="bannermedium" style="background: url(<?php print_r($urlImagen); ?>); background-size: cover; background-position: center;">
			<div class="wrapper">
				<h1><?php the_title(); ?></h1>
			</div> <!-- /wrapper -->
		</div>

<div class="clear"></div>

<div class="wrapper">
	
		<main role="main">	
		<!-- section -->
		<section>

			<!-- article -->
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

				<?php the_content(); ?>

				<br class="clear">

			</article>
			<!-- /article -->

		<?php endwhile; ?>
		<?php endif; ?>

		</section>
		<!-- /section -->
	</main>		

</div> <!-- /wrapper -->

</div> <!-- /wrapper -->
<?php get_footer(); ?>
