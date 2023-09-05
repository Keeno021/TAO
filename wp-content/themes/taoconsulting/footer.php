<?php

/**

 * The theme footer.

 *

 * @package bootstrap-basic4

 */

?>

</div>

<section class="footerBg">
    <footer class="container">
    <div class="row">
            <div class="col-md-4 mt-4 mb-3">
                <?php dynamic_sidebar('footer-left'); ?>
            </div>
            <div class="col-md-4 mt-4 mb-3">
                <?php dynamic_sidebar('footer-middle'); ?>
            </div>
            <div class="col-md-4 mt-4 mb-3">
                <?php dynamic_sidebar('footer-right'); ?>
            </div>
        </div>
    </footer>

</section>





<script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.min.js"></script>

<script src="<?php echo get_template_directory_uri(); ?>/assets/bootstrap/js/bootstrap.min.js"></script>

<script src="<?php echo get_template_directory_uri(); ?>/assets/js/Full-Page-Background-1.js"></script>

<script src="<?php echo get_template_directory_uri(); ?>/assets/js/Full-Page-Background-2.js"></script>

<script src="<?php echo get_template_directory_uri(); ?>/assets/js/Full-Page-Background-3.js"></script>

<script src="<?php echo get_template_directory_uri(); ?>/assets/js/Full-Page-Background.js"></script>


<!--wordpress footer-->

<?php wp_footer(); ?>

<!--end wordpress footer-->

<!-- Global site tag (gtag.js) - Google Analytics -->

<script async src="https://www.googletagmanager.com/gtag/js?id=UA-72814387-13"></script>

<script>

window.dataLayer = window.dataLayer || [];

function gtag() {
    dataLayer.push(arguments);
}
gtag('js', new Date());
gtag('config', 'UA-72814387-13');
</script>
</body>
</html>