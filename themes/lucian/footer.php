<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package ZoTheme
 * @subpackage Zo Theme
 * @since 1.0.0
 */
?>

	<?php if ( is_page(array('lovebirds','portraits','architecture','prints','projects-2')) ) { ?>
		<div class="[ container ]">
			<h3 style="font-size: 7px;text-align: left" class="vc_custom_heading default [ font-size--7 ]">
				<a href="<?php echo esc_url( home_url( '/category' ) ); ?>">BACK TO MENU</a>
			</h3>
		</div>
	<?php } ?>
</div><!-- #main -->
<footer>

<?php if ( ! in_category(array('portrait','architecture','prints')) ) { ?>

	<?php if ( zo_get_smof_data('enable_footer_top') =='1'): ?>
		<div id="zo-footer-top">
			<div class="container">
				<div class="row">
					<?php if ( ! is_single() ) { ?>
						<?php if (is_active_sidebar('sidebar-5')) : ?>
							<div class="col-xs-12 col-sm-2 footer-first"><?php dynamic_sidebar('sidebar-5'); ?></div>
						<?php endif; ?>
						<?php if (is_active_sidebar('sidebar-6')) : ?>
							<div class="col-xs-12 col-sm-7 footer-second"><?php dynamic_sidebar('sidebar-6'); ?></div>
						<?php endif; ?>
						<?php if (is_active_sidebar('sidebar-7')) : ?>
							<div class="col-xs-12 col-sm-3 footer-third [ clear-inherit no-margin-bottom ]"><?php dynamic_sidebar('sidebar-7'); ?></div>
						<?php endif; ?>
						<?php if (is_active_sidebar('sidebar-8')) : ?>
							<div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 footer-four"><?php dynamic_sidebar('sidebar-8'); ?></div>
						<?php endif; ?>
					<?php } ?>
					<?php if ( is_single() ) { ?>
						<?php if (is_active_sidebar('sidebar-5')) : ?>
							<div class="col-xs-12 col-sm-1 footer-first"><?php dynamic_sidebar('sidebar-5'); ?></div>
						<?php endif; ?>
						<?php if (is_active_sidebar('sidebar-6')) : ?>
							<div class="col-xs-12 col-sm-10 footer-second"><?php dynamic_sidebar('sidebar-6'); ?></div>
						<?php endif; ?>
						<?php if (is_active_sidebar('sidebar-7')) : ?>
							<div class="col-xs-12 col-sm-1 footer-third [ clear-inherit no-margin-bottom text-right ]">
								<ul class="social-list">
									<li>
										<a href="mailto:?subject=Ana Georgina photography.&amp;body=Visit the site <?php echo "http://" . $host . $url; ?>">
											<i class="fa fa-envelope"></i>
										</a>
									</li>
								</ul>
								<!-- <div class="social-share [ margin-top--12 ]">
									<?php //zo_social_share() ?>
									<?php
										//$host= $_SERVER["HTTP_HOST"];
										//$url= $_SERVER["REQUEST_URI"];
									?>
								</div> -->
							</div>
						<?php endif; ?>
						<?php if (is_active_sidebar('sidebar-7')) : ?>
							<div class="col-xs-12 col-sm-2 footer-four"> <?php dynamic_sidebar('sidebar-7'); ?> </div>
						<?php endif; ?>
					<?php } ?>
				</div>
			</div>
		</div>
	<?php endif;?>
	<?php if ( zo_get_smof_data('enable_footer_bottom') =='1' && is_active_sidebar('sidebar-9') ): ?>
		<div id="zo-footer-bottom">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<?php dynamic_sidebar('sidebar-9'); ?>
					</div>
				</div>
			</div>
		</div>
	<?php endif;?>

<?php } ?><!-- end don't footer in category -->

</footer><!-- #site-footer -->
</div><!-- #page -->
<?php wp_footer(); ?>

<!-- footer Contact form -->

</div>
</body>
</html>