<nav id="site-navigation-header" class="main-navigation header-navigation">
    <?php
    wp_nav_menu(
        array(
            'theme_location' => 'menu-header',
            'menu_id'        => 'header-menu',
        )
    );
    ?>
</nav><!-- #site-navigation -->

<div class="contain-search">
    <form action="/recherche" class="search-bar" method="POST">
        <input type="text" name="search" class="search-input">
        <input type="submit" value="" class="search-submit icons-size icons">
        <div class="search-close"></div>
    </form>
</div>