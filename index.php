<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Redo_Theme
 */

get_header();
?>

        <?php
        if ( have_posts() ) :

            while ( have_posts() ) :
                the_post();

                the_content();

            endwhile;

        else :
            ?>
            <section class="guidelines p-32">
                <div class="guide-content paragraph-1">
                    <p><?php esc_html_e( 'Please create a page and add content to see it here.', 'redo-theme' ); ?></p>
                </div>
            </section>
            <?php
        endif;
        ?>

<?php
get_footer();
