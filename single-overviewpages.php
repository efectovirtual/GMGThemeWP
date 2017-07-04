<?php 


get_header(); ?>



	<?php
	 $ids = get_the_ID();
	 $args=array(
				'post_type' => 'overviewpages',
				'p' => $ids
			); ?>


			<?php $overview = new WP_Query($args); ?>
		
			<div class="overview">

			<?php while($overview->have_posts()): $overview->the_post(); ?>
			
				<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                
						<?php $image = get_field('image'); ?>
                        
						<div class="ovbloq" style="background: url('<?php echo $image['url']; ?>'); background-size: cover;">
                            <div class="fondoimg">
                                <h1><?php the_field('title'); ?></h1>
                                <p><?php the_field('text'); ?></p>
                            </div>
                        </div>
                        
                        <a href="<?php the_field('link1'); ?>">
						<div class="ovblq1">
							<h1><?php the_field('title1'); ?></h1>
                            <p><?php the_field('text1'); ?></p>
                        </div>
                        </a>
                        
                        <a href="<?php the_field('link2'); ?>">
                        <div class="ovblq1">
							<h1><?php the_field('title2'); ?></h1>
                            <p><?php the_field('text2'); ?></p>
                        </div>
                        </a>
                        
                        <div class="clear"></div>
                        
                                           
                        <?php
						// Comprobar cuantos bloques existen para generar el ancho de ventana
							$j=0; $wi=0;
						 for($i=3;$i<=7;$i++){ 
							$it= 'title'.$i;
                        	if(get_field($it)){
								$j++; 
							} 
						  }
						  
						  switch ($j) {
							case 1:
								$wi='100%'; break;
							case 2:
								$wi= '50%'; break;
							case 3:
								$wi= '33%'; break;
							case 4:
								$wi= '25%'; break;
							case 5:
								$wi= '20%'; break;
						}
						
						?>
                        
                        <ul class="ovbloqcont">
							<?php for($i=3;$i<=7;$i++){ 
									$it= 'title'.$i; $tx= 'text'.$i; $lk= 'link'.$i ?>                                 
									<?php if( get_field($it) ): ?>
                                    	
                                        <a href="<?php the_field($lk); ?>">
										<li style="width:<?php echo $wi?>">
                                            <h1><?php the_field($it); ?></h1>
                                            <p><?php the_field($tx); ?></p>
                                        </li>
                                        </a>
                                        
									<?php endif; ?>
							<?php }?>
						</ul>
						
				</div>			
					
				<?php endwhile; wp_reset_postdata(); ?>

			</div>
<div class="clear"></div>

</div> <!-- /wrapper -->
<?php get_footer(); ?>
