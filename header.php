<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Redo_Theme
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?> id="top">
<?php wp_body_open(); ?>
<div class="container">
    <div class="layout">
        <header class="sidebar">
            <div class="brand">
                <?php
                if ( has_custom_logo() ) :
                    the_custom_logo();
                else :
                    ?>
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="brand-link">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Vector.svg" alt="Brand logo" class="brand-logo" />
                    </a>
                <?php endif; ?>
            </div>
            <div class="menu-toggle">
                <button class="menu-toggle-btn">Menu</button>
            </div>
            <nav class="side-nav">
                <?php
                wp_nav_menu(
                    array(
                        'theme_location' => 'menu-1',
                        'menu_id'        => 'primary-menu',
                        'container'      => false,
                        'menu_class'     => 'nav-list',
                    )
                );
                ?>
            </nav>
            <div class="sidebar-footer">
                <div class="sidebar-action">
                    <a href="<?php echo esc_url( get_theme_mod( 'redo_sidebar_action_1_url', '#' ) ); ?>" class="action-link">
                        <?php echo esc_html( get_theme_mod( 'redo_sidebar_action_1_text', __( 'Download kit', 'redo-theme' ) ) ); ?>
                    </a>
                </div>
                <div class="sidebar-action">
                    <a href="<?php echo esc_url( get_theme_mod( 'redo_sidebar_action_2_url', '#' ) ); ?>" class="action-link">
                        <?php echo esc_html( get_theme_mod( 'redo_sidebar_action_2_text', __( 'Contact us', 'redo-theme' ) ) ); ?>
                    </a>
                </div>
            </div>
        </header>

        <!-- content -->
        <main id="primary" class="main-content site-main">
