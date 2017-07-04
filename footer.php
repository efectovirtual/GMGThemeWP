

<?php 
	// verificamos el lenguaje del sitio
	include ("fev.php");
?>
			<!-- footer -->
		<footer class="footer" role="contentinfo">
			<div class="wrapper">
				<nav class="navfooter grid25" role="navigation">
					<h3 class="name-mf"><?php the_field('open_an_account', $Lpage) ?></h3>
					<?php footer_opc_nav(); ?>
				</nav>

				<nav class="navfooter grid25" role="navigation">
					<h3 class="name-mf"><?php the_field('gmg', $Lpage) ?></h3>
					<?php footer_gmg(); ?>
				</nav>

				<nav class="navfooter grid25" role="navigation">
					<h3 class="name-mf"><?php the_field('site', $Lpage) ?></h3>
					<?php footer_site(); ?>
				</nav>

				<nav class="navfooter grid25" role="navigation">
					<h3 class="name-mf"><?php the_field('download', $Lpage) ?></h3>
					<?php footer_download(); ?>
                        <?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('widget-area-1')) ?>
				</nav>

				<div class="clear"></div>
                

 
			<div class="footer-risk">
				<div>
						<?php $args=array(
							'page_id' => '2038',
							); ?>


					<?php $pagesgmg = new WP_Query($args); ?>

					
					<?php while($pagesgmg->have_posts()): $pagesgmg->the_post();?>

							<?php the_content() ?>
							
						<?php endwhile; wp_reset_postdata(); ?>

					</div>

			</div>

                <div class="clear"></div>
                <nav class="navterm" role="navigation">
					<?php footer_terms(); ?>
				</nav>

			</div> <!-- /wrapper -->

		</footer>

		
			<!-- /footer -->
		
		<?php wp_footer(); ?>
		<!--Start of Zendesk Chat Script-->
<script type="text/javascript">
window.$zopim||(function(d,s){var z=$zopim=function(c){z._.push(c)},$=z.s=
d.createElement(s),e=d.getElementsByTagName(s)[0];z.set=function(o){z.set.
_.push(o)};z._=[];z.set._=[];$.async=!0;$.setAttribute("charset","utf-8");
$.src="https://v2.zopim.com/?3PpdEzIxspdQLZHgiT0BCoDY0dFvfbB0";z.t=+new Date;$.
type="text/javascript";e.parentNode.insertBefore($,e)})(document,"script");
</script>
<!--End of Zendesk Chat Script-->

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-90445015-1', 'auto');
  ga('send', 'pageview');

</script>

	</body>
</html>
