<!doctype html>
<html <?php language_attributes(); ?> class="no-js">

<?php 
	// verificamos el lenguaje del sitio
	include ("fev.php");
?>


	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">


	<?php 
	$id = get_the_ID();
	if ($id == "1169" or $id == "1385") { ?>

	<!-- Stylesheets -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/ev-form/css/ev.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/ev-form/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/ev-form/css/ev-forms.css">

    <!-- Scripts -->
    <script src="https://gmgmarkets.com/wp-content/themes/EfectoVirtual-GMG/ev-form/js/jquery.1.11.1.min.js"></script>
    <script src="https://gmgmarkets.com/wp-content/themes/EfectoVirtual-GMG/ev-form/js/jquery.maskedinput.min.js"></script>
    <script src="https://gmgmarkets.com/wp-content/themes/EfectoVirtual-GMG/ev-form/js/jquery.validate.min.js"></script>
    <script src="https://gmgmarkets.com/wp-content/themes/EfectoVirtual-GMG/ev-form/js/jquery.form.min.js"></script>
    <script src="https://gmgmarkets.com/wp-content/themes/EfectoVirtual-GMG/ev-form/js/j-forms.js"></script>
    <script src="https://gmgmarkets.com/wp-content/themes/EfectoVirtual-GMG/ev-form/js/ev.js"></script>

	<?php } ?>


		<?php wp_head(); ?>
		<script>
        // conditionizr.com
        // configure environment tests
        conditionizr.config({
            assets: '<?php echo get_template_directory_uri(); ?>',
            tests: {}
        });
        </script>


 


	</head>
	<body <?php body_class(); ?>>

						<?php 
							if( is_front_page() ) :
							     echo do_shortcode( '[responsive-menu]' );
							else :
							     echo do_shortcode( '[responsive-menu menu="inner-page-menu"]' );
							endif;
					
						?>
                        
	
			<div id="barra-top-menu">
				<div class="wrapper">
					<a href="<?php the_field('link_open_live_account', $Lpage) ?>">
                    	<div class="menuscroll-l1 wev bounceIn" data-wow-delay=".6s"><p><?php the_field('open_live_account', $Lpage); ?></p></div>
                    </a>
                   
                    <a href="<?php the_field('link_open_demo_account', $Lpage) ?>">
                    	<div class="menuscroll-l2 wev bounceIn" data-wow-delay=".3s"><p><?php the_field('open_demo_account', $Lpage) ?></p></div>
                    </a>
                    
					<div class="menuscroll-c wev bounceIn" data-wow-delay=".1s"><img src="<?php echo get_template_directory_uri(); ?>/img/logo-gmg.svg" alt="Logo" ></div>
                    
					<a href="<?php the_field('link_client_portal', $Lpage) ?>">
                    	<div class="menuscroll-r1 wev bounceIn" data-wow-delay=".3s"><p><?php the_field('client_portal', $Lpage) ?></p></div>
                    </a>
                    
                    <a href="<?php the_field('link_contact_us', $Lpage) ?>">
                    	<div class="menuscroll-r2 wev bounceIn" data-wow-delay=".6s"><p><?php the_field('contact_us', $Lpage) ?></p></div>
                    </a>
                    
                    <a href="<?php the_field('link_open_live_account', $Lpage) ?>">
                    	<div class="menuscroll-r3 wev bounceIn" data-wow-delay=".3s"><p><?php the_field('open_live_account', $Lpage) ?></p></div>
                    </a>
				</div>

				<div class="clear"></div>
			</div>

			
			<!-- header -->
			<header class="header clear" role="banner">
				
			<div class="topb1">
				<!-- wrapper -->
				<div class="wrapper">

			
						<!-- logo -->
						<div class="logo">
							<a href="<?php echo home_url(); ?>">
								<img src="<?php echo get_template_directory_uri(); ?>/img/logo-gmg.svg" alt="Logo" class="logo-img">
							</a>
						</div>
						<!-- /logo -->

						<!-- Derecha Header -->
						<div class="derbloqh">
							<div class="menutop1">
								<!-- nav -->
								<nav class="navb1" role="navigation">
									<?php navtop1_nav(); ?>
								</nav>
								<ul class="menu-language">
										<li class="selectlang"><a href="#">Select Language <img src="<?php echo get_template_directory_uri(); ?>/img/img-languages.jpg" alt="LogoLan"></a>
										<ul class="submenu-language"><?php pll_the_languages();?></ul>
										</li>
										
								</ul>

								<!-- /nav -->
							</div>

							<div class="menucuenta">
								<div class="mopenlive">
                                    <div id="text-2" class="widget_text">
                                    <a href="<?php the_field('link_open_live_account', $Lpage) ?>" target="_blank">
                                    <div class="textwidget"><?php the_field('open_live_account', $Lpage) ?></div>
                                    </a>
                                    <div class="aviso-riesgo"><?php the_field('aviso_riesgo', $Lpage) ?></div>
								</div>
                                
                                <div id="text-3" class="widget_text">
                                	<a href="<?php the_field('link_open_demo_account', $Lpage) ?>">
                                	<div class="textwidget"><?php the_field('open_demo_account', $Lpage) ?></div>
                                    </a>
								</div>

								</div>
								<div class="buscador"><?php get_template_part('searchform'); ?></div>
							</div>

						</div>
							
			

				</div> <!-- /wrapper -->
			</div><!-- /topb1 -->
			<div style="clear: both;"></div>

					<!-- nav -->
					<nav class="nav" role="navigation">
						
						<?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
						
					</nav>
					<!-- /nav -->



			</header>
			<!-- /header -->

			<!-- wrapper -->
		<div class="wrapper">