<?php get_header(); ?>

</div> <!-- Cerramos Wrapper -->
<script>

</script>
	<section class="containerslider">

		<?php $args=array(
			// Banner Inicial
			'post_type' => 'slider',
			'orderby' => 'menu_order',
			'order' => 'ASC',
			'posts_per_page' => -1

		); ?>

		<?php $slider = new WP_Query($args); ?>

		<ul class="slider">

		<?php while($slider->have_posts()): $slider->the_post(); ?>
		
			<a href="<?php the_field(link); ?>">
				<li>
				
					<?php the_post_thumbnail('slider'); ?>
				
				</li>
			</a>
			<?php endwhile; wp_reset_postdata(); ?>
		</ul>

	</section>


	<!-- Contenido página -->
	
	<div class="container-homecontent">

		<!-- Bloque #1 - Inicio -->
			
			<?php $args=array(
				'post_type' => 'homecontent',
				'p' => '77',
			); ?>

			<?php $homecontent = new WP_Query($args); ?>

		
			<div class="bloq1gmg">

			<?php while($homecontent->have_posts()): $homecontent->the_post(); 
				$thumb = wp_get_attachment_image_src( get_post_thumbnail_id(), 'parallax' );
				$urlImagen = $thumb['0'];
			?>
			
					
				<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					
					<div class="parallax-window" data-parallax="scroll" data-image-src="
					<?php print_r($urlImagen) ?>">

					<div class="wrapper">
						<h2><?php the_title(); ?></h2>
						<h3><?php the_field(introduction); ?></h3>
						<ul>
							<li><?php the_field(item1)  ?></li>
							<li><?php the_field(item2)  ?></li>
							<li><?php the_field(item3)  ?></li>
							<li><?php the_field(item4)  ?></li>
						</ul>
						<ul>
							<li><?php the_field(item5)  ?></li>
							<li><?php the_field(item6)  ?></li>
							<li><?php the_field(item7)  ?></li>
						</ul>
					</div>

				</div>			
					
				<?php endwhile; wp_reset_postdata(); ?>

			</div>
		</div>
	</div>

<div class="wrapper">


<!-- Bloque #2 -->

	<div class="container-homecontent">

		<!-- Bloque #2-1 - Inicio -->
			
			<?php $args=array(
				'post_type' => 'homecontent',
				'p' => '80',
			); ?>


			<?php $homecontent = new WP_Query($args); ?>

			<div class="bloq21gmg">

			<?php while($homecontent->have_posts()): $homecontent->the_post(); 
				$thumb = wp_get_attachment_image_src( get_post_thumbnail_id(), 'parallax' );
				$urlImagen = $thumb['0'];
			?>

				<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					
						
						<h2><?php the_title(); ?></h2>
						<img src="<?php print_r($urlImagen) ?>">
						<ul>
							<li><?php the_field(item1)  ?></li>
							<li><?php the_field(item2)  ?></li>
							<li><?php the_field(item3)  ?></li>
							<li><?php the_field(item4)  ?></li>
						</ul>
						
				</div>

				<?php endwhile; wp_reset_postdata(); ?>

			</div>
				


	</div>


<div class="container-homecontent">

		<!-- Bloque #2-2 - Inicio -->
			
			<?php $args=array(
				'post_type' => 'homecontent',
				'p' => '84',
			); ?>


			<?php $homecontent = new WP_Query($args); ?>
		
			<div class="bloq22gmg">

			<?php while($homecontent->have_posts()): $homecontent->the_post(); 
				$thumb = wp_get_attachment_image_src( get_post_thumbnail_id(), 'parallax' );
				$urlImagen = $thumb['0'];
			?>
			
				<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					
						<h2><?php the_title(); ?></h2>
						<img src="<?php print_r($urlImagen) ?>">
						<ul>
							<li><?php the_field(item1)  ?></li>
							<li><?php the_field(item2)  ?></li>
							<li><?php the_field(item3)  ?></li>
							<li><?php the_field(item4)  ?></li>
							<li><?php the_field(item5)  ?></li>
						</ul>
						
				</div>			
					
				<?php endwhile; wp_reset_postdata(); ?>

			</div>

	</div>


<div class="container-homecontent">

		<!-- Bloque #2-3 - Inicio -->
			
			<?php $args=array(
				'post_type' => 'homecontent',
				'p' => '85',
			); ?>


			<?php $homecontent = new WP_Query($args); ?>
		
			<div class="bloq23gmg">

			<?php while($homecontent->have_posts()): $homecontent->the_post(); 
				$thumb = wp_get_attachment_image_src( get_post_thumbnail_id(), 'parallax' );
				$urlImagen = $thumb['0'];
			?>
			
				<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					
						<h2><?php the_title(); ?></h2>
						<img src="<?php print_r($urlImagen) ?>">
						<ul>
							<li><?php the_field(item1)  ?></li>
							<li><?php the_field(item2)  ?></li>
							<li><?php the_field(item3)  ?></li>
							<li><?php the_field(item4)  ?></li>
						</ul>
						
				</div>			
					
				<?php endwhile; wp_reset_postdata(); ?>

			</div>

	</div>

<div class="clear"></div>

	<div class="botoncuentascenter">

			<?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('widget-area-1')) ?>
			<div class="btcontc"><div class="textwidget">Contact Us</div></div>

	</div>

<div class="clear"></div>

</div> <!-- Cierra Wrapper-->


<!-- Bloque #3 - Inicio -->

	<div class="container-homecontent">
			
			<?php $args=array(
				'post_type' => 'homecontent',
				'p' => '87',
			); ?>

			<?php $homecontent = new WP_Query($args); ?>

		
			<div class="bloq3gmg">

			<?php while($homecontent->have_posts()): $homecontent->the_post(); 
				$thumb = wp_get_attachment_image_src( get_post_thumbnail_id(), 'parallax' );
				$urlImagen = $thumb['0'];
			?>
			
					
				<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					
					<div class="parallax-window" data-parallax="scroll" data-image-src="
					<?php print_r($urlImagen) ?>">

					<div class="wrapper">
						<h2><?php the_title(); ?></h2>
						<h3><?php the_field(introduction); ?></h3>
						<ul class="bloq1-3">
							<li><?php the_field(item1)  ?></li>
							<li><?php the_field(item2)  ?></li>
							<li><?php the_field(item3)  ?></li>
						</ul>

						<ul class="bloq2-3">
							<li><?php the_field(item4)  ?></li>
							<li><?php the_field(item5)  ?></li>
							<li><?php the_field(item6)  ?></li>
						</ul>
						<div class="clear"></div>
					</div>

					</div>			
					
				<?php endwhile; wp_reset_postdata(); ?>

			</div>
		</div>
	</div>


<div class="wrapper">

<!-- Bloque #4 -->

	<div class="container-homecontent">

		<!-- Bloque #4-1 - Inicio -->
			
			<?php $args=array(
				'post_type' => 'homecontent',
				'p' => '89',
			); ?>


			<?php $homecontent = new WP_Query($args); ?>

			<div class="bloq41gmg">

			<?php while($homecontent->have_posts()): $homecontent->the_post(); 
				$thumb = wp_get_attachment_image_src( get_post_thumbnail_id(), 'parallax' );
				$urlImagen = $thumb['0'];
			?>

				<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>			
						
						<img src="<?php print_r($urlImagen) ?>">
						<h2><?php the_title(); ?></h2>
						<ul>
							<li><?php the_field(item1)  ?></li>
							<li><?php the_field(item2)  ?></li>
							<li><?php the_field(item3)  ?></li>
							<li><?php the_field(item4)  ?></li>
							<li><?php the_field(item5)  ?></li>
						</ul>
						<div class="boton-rm">
							<a href="<?php the_field(link_gmg)  ?>"><?php the_field(read_more) ?></a>
						</div>
						
				</div>			
					
				<?php endwhile; wp_reset_postdata(); ?>

			</div>

	</div>


<div class="container-homecontent">

		<!-- Bloque #4-2 - Inicio -->
			
			<?php $args=array(
				'post_type' => 'homecontent',
				'p' => '94',
			); ?>


			<?php $homecontent = new WP_Query($args); ?>
		
			<div class="bloq42gmg">

			<?php while($homecontent->have_posts()): $homecontent->the_post(); 
				$thumb = wp_get_attachment_image_src( get_post_thumbnail_id(), 'parallax' );
				$urlImagen = $thumb['0'];
			?>
			
				<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					
						<img src="<?php print_r($urlImagen) ?>">
						<h2><?php the_title(); ?></h2>
						<ul>
							<li><?php the_field(item1)  ?></li>
							<li><?php the_field(item2)  ?></li>
							<li><?php the_field(item3)  ?></li>
							<li><?php the_field(item4)  ?></li>
							<li><?php the_field(item5)  ?></li>
						</ul>
						<div class="boton-rm">
							<a href="<?php the_field(link_gmg)  ?>"><?php the_field(read_more) ?></a>
						</div>
						
				</div>			
					
				<?php endwhile; wp_reset_postdata(); ?>

			</div>

	</div>


<div class="container-homecontent">

		<!-- Bloque #4-3 - Inicio -->
			
			<?php $args=array(
				'post_type' => 'homecontent',
				'p' => '95',
			); ?>


			<?php $homecontent = new WP_Query($args); ?>
		
			<div class="bloq43gmg">

			<?php while($homecontent->have_posts()): $homecontent->the_post(); 
				$thumb = wp_get_attachment_image_src( get_post_thumbnail_id(), 'parallax' );
				$urlImagen = $thumb['0'];
			?>
			
				<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					
						<img src="<?php print_r($urlImagen) ?>">
						<h2><?php the_title(); ?></h2>
						<ul>
							<li><?php the_field(item1)  ?></li>
							<li><?php the_field(item2)  ?></li>
							<li><?php the_field(item3)  ?></li>
							<li><?php the_field(item4)  ?></li>
							<li><?php the_field(item5)  ?></li>
						</ul>
						<div class="boton-rm">
							<a href="<?php the_field(link_gmg)  ?>"><?php the_field(read_more) ?></a>
						</div>
						
				</div>			
				<div class="paycard"><?php the_field(img_pay)  ?></div>	
				<?php endwhile; wp_reset_postdata(); ?>

			</div>

	</div>

<div class="clear"></div>

</div> <!-- Cierra Wrapper-->


<!-- **Img Formas de pago Bloque 5 -->

<div class="container-homecontent">

		<!-- Bloque #4-3 - Inicio -->
			
			<?php $args=array(
				'post_type' => 'homecontent',
				'p' => '98',
			); ?>


			<?php $homecontent = new WP_Query($args); ?>
		
			<div class="bloq5gmg">

			<?php while($homecontent->have_posts()): $homecontent->the_post(); 
				$thumb = wp_get_attachment_image_src( get_post_thumbnail_id(), 'parallax' );
				$urlImagen = $thumb['0'];
			?>
			
				<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<?php the_post_thumbnail(); ?>
				</div>			

				<?php endwhile; wp_reset_postdata(); ?>

			</div>

	</div>

<?php get_footer(); ?>
