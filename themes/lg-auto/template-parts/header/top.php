<nav class="container-marks">
    <ul class="contain-mark">
        <li class="mark">
            <a href="<?= site_url('../lg-mercedes-benz/'); ?>"><div class="icons icon-mercedes"></div></a>
        </li>
        <li class="mark">
            <a href="<?= site_url('../vehicule/smart/'); ?>"><div class="icons icon-smart"></div></a>
        </li>
        <li class="mark">
            <a href="<?= site_url('../vehicule/jeep/'); ?>"><div class="icons icon-jeep"></div></a>
        </li>
        <li class="mark">
            <a href="<?= site_url('../vehicule/camion/'); ?>"><div class="icons icon-fuso"></div></a>
        </li>
        <li class="mark">
            <a href="http://yam66.fr" target="_blank"><div class="icons icon-yamaha"></div></a>
        </li>
        <li class="mark">
            <a href="<?= site_url('../vehicule/indian/'); ?>"><div class="icons icon-indian"></div></a>
        </li>
    </ul>
</nav>

<div class="site-branding contain-logo">
    <?php the_custom_logo(); ?>
</div>

<nav class="bnow-button-menu" title="Suivez-nous !">
    <input type="checkbox" href="#" class="bnow-button-open" name="bnow-button-open" id="bnow-button-open"/>
    <label class="bnow-button-open-button" for="bnow-button-open">
        <span class="lines line-1"></span>
        <span class="lines line-2"></span>
        <span class="lines line-3"></span>
    </label>
    <a href="<?= site_url('#') ?>" class="bnow-button-item item-whishlist"></a>
    <a href="<?= site_url('#') ?>" class="bnow-button-item item-facebook"></a>
    <a href="https://twitter.com/GroupeLg" target="_blank" rel="noopener noreferrer" class="bnow-button-item item-twitter"></a>
    <a href="https://www.instagram.com/groupe_lg/" target="_blank" rel="noopener noreferrer" class="bnow-button-item item-instagram"></a>
    <a href="https://www.youtube.com/channel/UCyFUdY02ogACwpdu-azmfKg" target="_blank" rel="noopener noreferrer" class="bnow-button-item item-youtube"></a>
    <a href="https://www.linkedin.com/company/19201748/" target="_blank" rel="noopener noreferrer" class="bnow-button-item item-linkedin"></a>
    <a href="https://www.pinterest.fr/LGAutomobiles/" target="_blank" rel="noopener noreferrer" class="bnow-button-item item-pinterest"></a>
</nav>

<div id="Language">
    <?php echo do_shortcode('[gtranslate]'); ?>
</div>
