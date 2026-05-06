<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Redo_Theme
 */

?>

        <footer class="footer">
            <div class="footer-top">
                <?php if ( has_custom_logo() ) : ?>
                    <div class="footer-logo">
                        <?php the_custom_logo(); ?>
                    </div>
                <?php else : ?>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Content.svg" alt="Redo logo" />
                <?php endif; ?>

                <?php
                if ( has_nav_menu( 'footer-menu' ) ) :
                    wp_nav_menu(
                        array(
                            'theme_location' => 'footer-menu',
                            'menu_class'     => 'footer-nav',
                            'container'      => false,
                            'depth'          => 1,
                        )
                    );
                else :
                ?>
                <ul class="footer-nav">
                    <li><a href="" class="link">Download Kit</a></li>
                    <li><a href="" class="link">Contact Us</a></li>
                    <li><a href="#top" class="link">Back to the top</a></li>
                </ul>
                <?php endif; ?>
            </div>

            <?php if ( is_active_sidebar( 'footer-sidebar' ) ) : ?>
                <div class="footer-widgets">
                    <?php dynamic_sidebar( 'footer-sidebar' ); ?>
                </div>
            <?php endif; ?>

            <div class="footer-bottom">
                <ul class="footer-links">
                    <li class="caption-2">© <?php echo date( 'Y' ); ?> Redo</li>
                    <li class="caption-2"><a href="">Legal</a></li>
                    <li class="caption-2"><a href="">Privacy</a></li>
                    <li class="caption-2">All Rights Reserved</li>
                </ul>
            </div>
        </footer>
    </main><!-- .main-content -->
</div><!-- .layout -->
</div><!-- .container -->

<?php wp_footer(); ?>

</body>
</html>
