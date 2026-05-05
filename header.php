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

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div class="container">
    <div class="layout">
        <!-- sidebar -->
        <header class="sidebar">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="brand">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Vector.svg" alt="Brand logo" class="brand-logo" />
            </a>
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
                        // We will need a custom walker or dynamic logic to handle the <sup>01</sup> numbers if we want them perfect, 
                        // but for now let's just output the standard menu.
                    )
                );
                ?>
            </nav>
            <div class="sidebar-footer">
                <div class="sidebar-action">
                    <a href="#" class="action-link">Download kit</a>
                </div>
                <div class="sidebar-action">
                    <a href="#" class="action-link">Contact us</a>
                </div>
            </div>
        </header>

        <!-- content -->
        <main id="primary" class="main-content site-main">
