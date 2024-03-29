<?php
/**
 * The template for displaying the footer
 * @package silverlessstudio
 */
?>
			</main>
			<?php $footerImage = get_field('background_image', 'options');?>
			<footer class="footer" role="contentinfo">
				<div class="wrapper">
					<div class="container-overflow-right">
						<div class="content-wrapper image-wrapper dark-overlay" style="background:url(<?php echo $footerImage['url'];?>);">
							<div class="container">
								<div class="footer-upper-content">
									<h2 class="heading heading__2">Photography, <span class="no-wrap">Film & 3D</span></h2>
									<p>Creating the content for your brand.
									Silverless Visual is our very own photography studio, film unit and 3D effects hub.
									This is not an outsourced service; this is a core part of our business, seamlessly fitting into our design and development workflow.
									</p>
									<a href="<?php the_sub_field('button_target');?>" class="button">Find Out More</a>
								</div>
							</div>
						</div>
						<div class="content-wrapper dark-wrapper">
							<div class="container">
								<a href="<?php echo get_home_url(); ?>" class="silverless"><?php get_template_part('inc/img/silverless', 'logo');?></a>
								<div class="footer-contact">
									<p>
										<a href="tel:+44 (0)1672 556532">+44 (0)1672 556532</a>
										<a href="mailto:hello@silverless.co.uk">hello@silverless.co.uk</a>
									</p>
									<?php get_template_part("template-parts/social");?>
									<a href="https://www.google.com/maps/dir//51.4225298,-1.7189314/@51.422194,-1.7205367,272m/data=!3m1!1e3" class="button button__ghost mb3" target="_blank">Directions</a>
								</div>
							</div>
						</div>
						<div class="content-wrapper darkest-wrapper">
							<div class="container">
								<div class="mandatory">
									<p>© Silverless Ltd <?php echo date('Y');?><br/>Registered in England, No. 8437159  <span class="no-wrap">VAT No. GB 101 7040 78</span>
										<span class="no-wrap">
											<a href="/privacy-policy/">Privacy policy</a>
											<a href="/terms-conditions/">Terms & Conditions</a>
										</span>
									</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</footer>
		</div><!-- #page -->
		<?php wp_footer(); ?>
	</body>
</html>
