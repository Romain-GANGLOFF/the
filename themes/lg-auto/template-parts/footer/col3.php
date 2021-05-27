<nav id="site-navigation-header2" class="main-navigation header2-navigation">
    <h4 class="title-classic"><?= __('Menu'); ?></h4>
    <?php
    wp_nav_menu(
        array(
            'theme_location' => 'menu-footer2',
            'menu_id'        => 'header2-menu',
        )
    );
    ?>
</nav><!-- #site-navigation-header -->

<nav id="site-navigation-mentions" class="main-navigation mentions-navigation">
    <?php
    wp_nav_menu(
        array(
            'theme_location' => 'menu-mention',
            'menu_id'        => 'mention-menu',
        )
    );
    ?>
</nav><!-- #site-navigation-mentions -->