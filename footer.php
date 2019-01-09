<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Smart_Light
 */

?>

<div id="rec47189732" class="r t-rec t-rec_pt_90 t-rec_pb_90">
    <!-- t564-->
    <div class="t564">
        <div class="t-container">
            <div class="t-col t-col_8 t-prefix_2 t-align_center">
                <img src="<?php echo get_theme_mod('footer-logo') ?>" alt="" class="t564__img">
                <div class="t564__small-wrapper">
                    <div class="t564__text t-text t-text_md">
                        <div class="t564_text" style="color:#000000;">
                            <?php echo get_theme_mod( 'phone') ?>
                            <br>
                            <a class="t564_email" href="mailto:<?php echo get_theme_mod( 'email') ?>"><?php echo get_theme_mod( 'email') ?></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</div> <!-- #allrecords -->

<?php wp_footer(); ?>

</body>
</html>
