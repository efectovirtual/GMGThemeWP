<?php 

get_header(); ?>

		<?php if (have_posts()): while (have_posts()) : the_post(); ?>

		<main role="main">	
		<!-- section -->
		<section>
			<h1><?php the_title(); ?></h1>

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
