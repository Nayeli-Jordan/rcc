<?php
/**
 * The Template for displaying product archives, including the main shop page which is a post type archive.
 *
 * Override this template by copying it to yourtheme/woocommerce/archive-product.php
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     9.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}
global $breadcrumb, $pagetitle;
get_header( 'shop' ); ?>
<section id="primary" class="content-area<?php if($breadcrumb == '0'){ echo ' no_breadcrumb'; }; ?> <?php if(!$pagetitle){ echo ' no_page_title'; }; ?>">
    <main id="main-shop" class="site-main" role="main">    
        <div class="container">
            <div class="row">
                <div class="<?php echo (is_active_sidebar('sidebar-shop')) ? 'col-xs-12 col-sm-9 col-md-9 col-lg-9' : 'col-xs-12 col-sm-12 col-md-12 col-lg-12'; ?>">
                	<?php
                		/**
                		 * woocommerce_before_main_content hook
                		 *
                		 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
                		 * @hooked woocommerce_breadcrumb - 20
                		 */
                        remove_action('woocommerce_before_main_content', 'woocommerce_breadcrumb', 20);
                		do_action( 'woocommerce_before_main_content' );
                	?>

                		<?php do_action( 'woocommerce_archive_description' ); ?>
                
                		<?php if ( have_posts() ) : ?>
                
                			<?php
                				/**
                				 * woocommerce_before_shop_loop hook
                				 *
                				 * @hooked woocommerce_result_count - 20
                				 * @hooked woocommerce_catalog_ordering - 30
                				 */
                				do_action( 'woocommerce_before_shop_loop' );
                			?>
                
                			<?php woocommerce_product_loop_start(); ?>
                
                				<?php woocommerce_product_subcategories(); ?>
                
                				<?php while ( have_posts() ) : the_post(); ?>
                
                					<?php wc_get_template_part( 'content', 'product' ); ?>
                
                				<?php endwhile; // end of the loop. ?>
                
                			<?php woocommerce_product_loop_end(); ?>
                
                			<?php
                				/**
                				 * woocommerce_after_shop_loop hook
                				 *
                				 * @hooked woocommerce_pagination - 10
                				 */
                				do_action( 'woocommerce_after_shop_loop' );
                			?>
                
                		<?php elseif ( ! woocommerce_product_subcategories( array( 'before' => woocommerce_product_loop_start( false ), 'after' => woocommerce_product_loop_end( false ) ) ) ) : ?>
                
                			<?php wc_get_template( 'loop/no-products-found.php' ); ?>
                
                		<?php endif; ?>
                
                	<?php
                		/**
                		 * woocommerce_after_main_content hook
                		 *
                		 * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
                		 */
                		do_action( 'woocommerce_after_main_content' );
                	?>
                </div>
                <?php if ( is_active_sidebar( 'sidebar-shop' ) ) : ?>
                    <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
                        <div id="secondary" class="secondary shop-sidebar" role="complementary">
                            <?php dynamic_sidebar( 'sidebar-shop' ); ?>
                        </div><!-- #secondary -->
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </main><!-- #main -->
	<?php if ( is_active_sidebar( 'sidebar-shop-footer' ) ) : ?>
		<div id="zo-shop-footer">
			<?php dynamic_sidebar( 'sidebar-shop-footer' ); ?>
		</div>
	<?php endif; ?>
</section><!-- #primary -->
<?php get_footer( 'shop' ); ?>