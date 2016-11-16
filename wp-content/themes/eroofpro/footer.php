		</div>
		<footer id="footer">
			<div class="container">
				<div class="row footer-cols">
					<div class="col-md-4 col-sm-5">
						<?php dynamic_sidebar('Footer1'); ?>
					</div>
					<div class="col-md-4 col-sm-2">
						<?php dynamic_sidebar('Footer2'); ?>
					</div>
					<div class="col-md-4 col-sm-5">
						<div class="site-quote">
							<?php dynamic_sidebar('Footer3'); ?>
							<div class="copyright">
								<span>&copy; <?php echo date('Y'); ?> ERoofPro</span>
								<?php 
			                        wp_nav_menu( array(
			                            'theme_location' => 'footer_menu',
			                            'container' => false,
			                            'menu_class' => 'footer-menus'
			                        ) );
			                    ?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</footer>
		<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.min.js"></script>
		<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/js/scroll-magic/ScrollMagic.js"></script>
		<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/js/scroll-magic/debug.addIndicators.js"></script>
		<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/js/scroll-magic/TweenMax.min.js"></script>
		<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/js/scroll-magic/animation.gsap.js"></script>
		<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.viewportchecker.js"></script>
		<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/js/bootstrap.min.js"></script>
		<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/js/custom.js"></script>
		
		<script type="text/javascript">
			// init controller
        	var controller = new ScrollMagic.Controller();

        	$(function () { // wait for document ready
				var total = 0;
				$('.scroll-section').each(function(){
				    total += $(this).outerHeight();
				});
				// var tween = TweenMax.to("#scroll-pin", '0.9', {color: "#fff"});
				// var animateElem = document.getElementById("scroll-pin");
				// build scene
				var scene = new ScrollMagic.Scene({triggerElement: "#scroll-section-start", duration: total, offset: -100, triggerHook: "onLeave"})
								// .setTween(tween)
								.setPin("#scroll-pin")

								// .on("end", function () {
								// 	// reset style
								// 	animateElem.style.color = "#fff";
								// })
								// .addIndicators({name: "1 (duration: 300)"}) // add indicators (requires plugin)
								.addTo(controller);

			});
		</script>
		<?php wp_footer(); ?>
	</body>
</html>