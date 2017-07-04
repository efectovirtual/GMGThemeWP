<?php 

/*
* Template Name: GMG Banner Top Parallax
*/

get_header(); ?>



	</div> <!-- /wrapper -->


	<?php if (have_posts()): while (have_posts()) : the_post();
				$thumb = wp_get_attachment_image_src( get_post_thumbnail_id(), 'parallax' );
				$urlImagen = $thumb['0'];
		 ?>

					<div class="parallax-window-content" data-parallax="scroll" data-image-src="
						<?php print_r($urlImagen) ?>"> 
					</div>
	
			
	
	<div class="wrapper">

		<div class="title_top_banner"><h1><?php the_title(); ?></h1></div>

<div class="clear"></div>

		<main role="main">	
		

		<?php 
		$sectionleft = 'sectionleft';
		$sectionright = 'sectionright';

				$modulenew = do_shortcode('[moduleposition id="1"]');

				if ($modulenew) { 
					$sectionleft = 'sectionleft2';
					$sectionright = 'sectionright2';
					}	?>


		<!-- section -->
		<section class="<?php echo $sectionleft; ?>">

			<!-- article -->
			<article  id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

				<?php the_content(); ?>
				
			</article>
			<!-- /article -->

		<?php endwhile; ?>

					
		

		<?php endif; ?>

		</section>
		<section class="<?php echo $sectionright; ?>">
			<?php 
				echo $modulenew;
			 ?>
		</section>
		<div class="clear"></div>
		
		<!-- /section -->
	</main>		


</div> <!-- /wrapper -->

</div> <!-- /wrapper -->
<?php get_footer(); ?>
