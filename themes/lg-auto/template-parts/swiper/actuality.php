<div class="swiper-container swiper-actu">
<div class="swiper-container swiper-actu" id="WrapperContainer">        
<div class="swiper-wrapper">
        <?php foreach( $actualitys->posts as $actuality) : 
            $concessions = wp_get_object_terms($actuality->ID, 'univers_cat', $args = array('parent' => '21'));
            $thumbnail = get_the_post_thumbnail_url($actuality->ID, 'full'); ?>
            <a href="<?= $actuality->guid ?>" class="swiper-slide">
                <div class="container-slide">
                    <div class="contain-shadow">
                        <div class="background-slide thumbnails" style="background-image:url('<?= $thumbnail;?>')"></div>
                        <div class="contain-txt">
                            <h3 class="title-concession"><?= $concessions[0]->name; ?></h3>
                            <h3 class="title-actu"><?= wp_trim_words($actuality->post_title, 6);?></h3>
                            <p><?= wp_trim_words($actuality->post_content, 25); ?></p>
                            <button class="button-actu-red"><span><?= __('En savoir plus'); ?></span></button>
                        </div>
                    </div>
                </div>
            </a>
        <?php endforeach; ?>
    </div>
</div>    
    <!-- Add Pagination -->
    <div class="swiper-pagination-actu swiper-pagination"></div>
    <!-- Add Arrows -->
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
</div>
