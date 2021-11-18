<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package nuostabu
 */

?>
<?php $options = get_option('nuostabu'); ?>


<footer>
    <div class="container">
        <div class="row d-flex justify-content-between align-items-center">
            <div class="col">
                <div class="copyright">
                    <p><?php echo $options['copyright-title'] ?></p>
                </div>
            </div>
            <div class="col ">
                <div class="social-icons float-end">
                    <ul class="list-inline">
                        <li><a href="<?php echo $options['fb-link'] ?>" target="_blank">
                                <img src="<?php echo get_template_directory_uri() ?>/assets/img/facebook-logo.svg" alt="">
                            </a></li>
                        <li><a href="<?php echo $options['ig-link'] ?>" target="_blank">
                                <img src="<?php echo get_template_directory_uri() ?>/assets/img/instagram-logo.png" alt="">
                            </a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>

</div>
<!-- Main wrapper End-->


<?php wp_footer(); ?>
</body>

</html>

