<?php
/**
 * The Template for displaying all single posts.
 *
 * @package Astralis Lite
 */

get_header(); ?>

<div class="container">
     <div id="Tab-Naviagtion">
        <div class="left-content-wrap">           
				<?php while ( have_posts() ) : the_post(); ?>
                    <?php get_template_part( 'content', 'single' ); ?>                  
                    <div class="clear"></div>
                    <?php
                    // If comments are open or we have at least one comment, load up the comment template
                    if ( comments_open() || '0' != get_comments_number() )
                    	comments_template();
                    ?>
                <?php endwhile; // end of the loop. ?>                  
          </div><!-- .left-content-wrap-->       
           <?php get_sidebar();?>
        <div class="clear"></div>
    </div><!-- #Tab-Naviagtion -->
</div><!-- container -->	
<?php get_footer(); ?>