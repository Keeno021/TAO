<?php
/**
 * The page template file.<br>
 * This file works as display page content (post type "page") and its comments.
 *
 * @package bootstrap-basic4
 */

/*
 Template Name: TAO Template
 */

// begins template. -------------------------------------------------------------------------
get_header();
?>
<section class="content">
    <!-- Text content -->
            <div class="col-sm-12 text-center">
                <h1 class="heading"><?php the_title(); ?></h1>
            </div>
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                        <?php
                    if (have_posts()) {
                        while (have_posts()) {
                            the_post();
                            get_template_part('template-parts/content', get_post_format());
                        }// endwhile;

                        $Bsb4Design = new \BootstrapBasic4\Bsb4Design();
                        $Bsb4Design->pagination();
                        unset($Bsb4Design);
                    } else {
                        get_template_part('template-parts/section', 'no-results');
                    }// endif;
                    ?>
            </div>

        </div>
        <?
    wp_reset_postdata();
?>
    </div>
</section>


<?php
get_footer();