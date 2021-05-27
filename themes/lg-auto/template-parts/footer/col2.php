
<nav id="site-navigation-footer" class="main-navigation footer-navigation">
    <h4 class="title-concessions"><?= __('Concessions'); ?></h4>
    <?php
    wp_nav_menu(
        array(
            'theme_location' => 'menu-footer',
            'menu_id'        => 'footer-menu',
        )
    );
    ?>
</nav><!-- #site-navigation-footer -->