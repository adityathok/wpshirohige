<?php
/**
 * Template for Primary Header
 */

$container = get_theme_mod('wpmulai_container_type');
?>

<!-- ******************* The Navbar Area ******************* -->
<div id="wrapper-navbar">

<nav id="main-nav" class="navbar navbar-expand-md navbar-dark bg-primary" aria-labelledby="main-nav-label">

    <h2 id="main-nav-label" class="sr-only">
        <?php esc_html_e('Main Navigation', 'wpmulai'); ?>
    </h2>

    <?php if ('container' === $container) : ?>
        <div class="container">
        <?php endif; ?>

        <!-- Your site title as branding in the menu -->
        <?php if (!has_custom_logo()) { ?>

            <?php if (is_front_page() && is_home()) : ?>

                <h1 class="navbar-brand mb-0"><a rel="home" href="<?php echo esc_url(home_url('/')); ?>" itemprop="url"><?php bloginfo('name'); ?></a></h1>

            <?php else : ?>

                <a class="navbar-brand" rel="home" href="<?php echo esc_url(home_url('/')); ?>" itemprop="url"><?php bloginfo('name'); ?></a>

            <?php endif; ?>

        <?php
        } else {
            the_custom_logo();
        }
        ?>
        <!-- end custom logo -->

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="<?php esc_attr_e('Toggle navigation', 'wpmulai'); ?>">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- The WordPress Menu goes here -->
        <?php
        wp_nav_menu(
            array(
                'theme_location'  => 'primary',
                'container_class' => 'collapse navbar-collapse',
                'container_id'    => 'navbarNavDropdown',
                'menu_class'      => 'navbar-nav ml-auto',
                'fallback_cb'     => '',
                'menu_id'         => 'main-menu',
                'depth'           => 2,
                'walker'          => new wpmulai_WP_Bootstrap_Navwalker(),
            )
        );
        ?>
        <?php if ('container' === $container) : ?>
        </div><!-- .container -->
    <?php endif; ?>

</nav><!-- .site-navigation -->

</div><!-- #wrapper-navbar end -->