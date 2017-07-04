
<?php 

get_header(); ?>

</div> <!-- /wrapper -->

	<?php if (have_posts()): while (have_posts()) : the_post();?>


	
		<div id="post-<?php the_ID(); ?>" class="bannertext">
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
            
     <h2 class="tcontactmap"><?php the_field('name_map1') ?></h2> 
     </div> <!-- /wrapper -->
                    <?php 
                        $location = get_field('googlemap1');
                        
                        if( !empty($location) ):
                        ?>
                        <div class="acf-map">
                            <div class="marker" data-lat="<?php echo $location['lat']; ?>" data-lng="<?php echo $location['lng']; ?>"></div>
                        </div>
                    <?php endif; ?>
     
     <div class="wrapper">
     
     <section>
     	<?php the_field('information1') ?>
     </section>
     
     
     
     <h2 class="tcontactmap"><?php the_field('name_map2') ?></h2> 
     </div> <!-- /wrapper -->
                    <?php 
                        $location = get_field('googlemap2');
                        
                        if( !empty($location) ):
                        ?>
                        <div class="acf-map">
                            <div class="marker" data-lat="<?php echo $location['lat']; ?>" data-lng="<?php echo $location['lng']; ?>"></div>
                        </div>
                    <?php endif; ?>
     
     <div class="wrapper">
     
     <section>
     	<?php the_field('information2') ?>
     </section>
     
     <h2 class="tcontactmap"><?php the_field('nameform') ?></h2> 
       <section>
     	<?php the_field('contactform') ?>
     </section>
     

</main>	
 </div> <!-- /wrapper -->
<?php get_footer(); ?>
