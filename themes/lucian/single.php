<?php
/**
 * The Template for displaying all single posts
 *
 * @package ZoTheme
 * @subpackage Zo Theme
 * @since 1.0.0
 */

get_header(); ?>
<div class="<?php zo_main_class(); ?>">
    <div class="row">
        <div id="primary" class="col-xs-12"> <!--  col-sm-9 col-md-9 col-lg-9 -->
            <div id="content" role="main">

                <?php while ( have_posts() ) : the_post(); ?>

                    <?php if ( ! in_category(array('portrait','architecture','prints')) ) { ?>
                        <!-- <p class="[ date-wedding ]"><?php //the_date(); ?></p> -->
                        <h1 class="[ title-wedding ]"><?php the_title(); ?></h1>
                    <?php } ?>
                    <?php if ( in_category(array('portrait','architecture','prints')) ) { ?>
                        <a href="javascript:history.back()" class="[ close-slider ]"><span>x</span></a>
                    <?php } ?>

                    <?php get_template_part( 'single-templates/single/content', get_post_format() ); ?>

	                <?php if( has_tag() ) : ?>
	                <div class="post-tags">
		                <?php the_tags( esc_html__('Tags: ', 'lucian'), ', ', '' ); ?>
	                </div>
	                <?php endif; ?>

                    <?php //echo do_shortcode('[addtoany buttons="facebook,twitter,email]'); ?>

                   <!--  <div class="social-share">
	                    <h2><?php esc_html_e('Share with', 'lucian'); ?></h2>
                        <?php zo_social_share() ?>
                    </div> -->

	                <?php zo_post_nav(); ?><!-- pagination -->

	                <?php comments_template( '', true ); ?>

                <?php endwhile; // end of the loop. ?>

            </div><!-- #content -->
        </div><!-- #primary -->
        <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
            <?php get_sidebar(); ?>
        </div>
    </div>
</div>
<?php get_footer(); ?>