<?php 


get_header(); ?>


<div class="menu-left-faqs">
	<?php Faqs_nav(); ?>
</div>

<div class="contenido-faqs">

	<?php if (have_posts()): while (have_posts()) : the_post();?>


		<div class="title_faqs"><h1><?php the_title(); ?></h1></div>

		<main role="main">	
		<!-- section -->
		<section>

			<!-- article -->
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

				<?php the_content(); ?>

			</article>
			<!-- /article -->

		<?php endwhile; ?>
		<?php endif; ?>

		</section>
		<!-- /section -->
	</main>	

</div>
<div class="clear"></div>

</div> <!-- /wrapper -->
<?php get_footer(); ?>
