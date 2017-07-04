<?php get_header();?>

<?php Faqs_nav(); ?>



<h1><?php single_cat_title(); ?></h1>

		<?php while(have_posts() ): the_post(); ?>
			

				<h2><?php the_title(); ?></h2>

				<?php the_content(); ?>


		<?php endwhile; ?>


</div> <!-- /Wrapper -->
<?php get_footer(); ?>
