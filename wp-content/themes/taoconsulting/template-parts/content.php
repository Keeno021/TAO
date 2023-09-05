<?php
/**
 * Display the post content in "generic" or "standard" format.
 * This will be use in the loop and full page display.
 * 
 * @package bootstrap-basic4
 */


$Bsb4Design = new \BootstrapBasic4\Bsb4Design();
?> 
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  

    <?php if (is_search()) { // Only display Excerpts for Search ?> 
    <div class="entry-summary">
        <?php the_excerpt(); ?> 
        <div class="clearfix"></div>
    </div><!-- .entry-summary -->
    <?php } else { ?> 
    <div class="entry-content">
        <?php the_content($Bsb4Design->continueReading(true)); ?> 
        <div class="clearfix"></div>
        <?php 
        /**
         * This wp_link_pages option adapt to use bootstrap pagination style.
         */
        wp_link_pages(array(
            'before' => '<div class="page-links">' . __('Pages:', 'bootstrap-basic4') . ' <ul class="pagination">',
            'after'  => '</ul></div>',
            'separator' => ''
        ));
        ?> 
    </div><!-- .entry-content -->
    <?php } //endif; ?> 

    
</article><!-- #post-## -->
<?php unset($Bsb4Design); ?> 