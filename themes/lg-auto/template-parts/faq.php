<div class="tabs">

    <div class="tab">
        <input type="checkbox" id="chck1">
        <label class="tab-label" for="chck1"><?= __('Jeep') ?></label>
        <div class="tab-content">
            <?php 
                wp_reset_query();
                $args = array( 'post_type' => 'faq', 'faq_cat' => 'jeep');
                $faqs = query_posts($args);
                foreach($faqs as $faq) : 
                    $cats = wp_get_object_terms($faq->ID, 'faq_cat');
                    foreach($cats  as $cat) : 
                        if($cat->slug == 'sav' || $cat->slug == 'commerce' || $cat->slug == 'financement' || $cat->slug == 'location') : ?>
                            <div class="container-cat container-<?= $cat->slug; ?>">
                                <h3><?= $cat->name; ?></h3>
                                <div class="content-txt"><?= $faq->post_content ?></div>
                            </div>
                        <?php elseif($cat->slug == 'defaut') : ?>
                            <div class="container-cat container-none">
                                <div class="content-txt"><?= $faq->post_content ?></div>
                            </div>
                        <?php endif;
                    endforeach;
                endforeach;
            ?>
        </div>
    </div>
    <div class="tab">
        <input type="checkbox" id="chck2">
        <label class="tab-label" for="chck2"><?= __('Mercedes-Benz') ?></label>
        <div class="tab-content">
            <?php 
                wp_reset_query();
                $args = array( 'post_type' => 'faq', 'faq_cat' => 'mb');
                $faqs = query_posts($args);
                foreach($faqs as $faq) : 
                    $cats = wp_get_object_terms($faq->ID, 'faq_cat');
                    foreach($cats  as $cat) : 
                        if($cat->slug == 'sav' || $cat->slug == 'commerce' || $cat->slug == 'financement' || $cat->slug == 'location') : ?>
                            <div class="container-cat container-<?= $cat->slug; ?>">
                                <h3><?= $cat->name; ?></h3>
                                <div class="content-txt"><?= $faq->post_content ?></div>
                            </div>
                        <?php elseif($cat->slug == 'defaut') : ?>
                            <div class="container-cat container-none">
                                <div class="content-txt"><?= $faq->post_content ?></div>
                            </div>
                        <?php endif;
                    endforeach;
                endforeach;
            ?>
        </div>
    </div>
    <div class="tab">
        <input type="checkbox" id="chck3">
        <label class="tab-label" for="chck3"><?= __('smart') ?></label>
        <div class="tab-content">
            <?php 
                wp_reset_query();
                $args = array( 'post_type' => 'faq', 'faq_cat' => 'smart');
                $faqs = query_posts($args);
                foreach($faqs as $faq) : 
                    $cats = wp_get_object_terms($faq->ID, 'faq_cat');
                    foreach($cats  as $cat) : 
                        if($cat->slug == 'sav' || $cat->slug == 'commerce' || $cat->slug == 'financement' || $cat->slug == 'location') : ?>
                            <div class="container-cat container-<?= $cat->slug; ?>">
                                <h3><?= $cat->name; ?></h3>
                                <div class="content-txt"><?= $faq->post_content ?></div>
                            </div>
                        <?php elseif($cat->slug == 'defaut') : ?>
                            <div class="container-cat container-none">
                                <div class="content-txt"><?= $faq->post_content ?></div>
                            </div>
                        <?php endif;
                    endforeach;
                endforeach;
            ?>
        </div>
    </div>
    <div class="tab">
        <input type="checkbox" id="chck4">
        <label class="tab-label" for="chck4"><?= __('Mercedes-benz rent') ?></label>
        <div class="tab-content">
            <?php 
                wp_reset_query();
                $args = array( 'post_type' => 'faq', 'faq_cat' => 'mb-rent');
                $faqs = query_posts($args);
                foreach($faqs as $faq) : 
                    $cats = wp_get_object_terms($faq->ID, 'faq_cat');
                    foreach($cats  as $cat) : 
                        if($cat->slug == 'sav' || $cat->slug == 'commerce' || $cat->slug == 'financement' || $cat->slug == 'location') : ?>
                            <div class="container-cat container-<?= $cat->slug; ?>">
                                <h3><?= $cat->name; ?></h3>
                                <div class="content-txt"><?= $faq->post_content ?></div>
                            </div>
                        <?php elseif($cat->slug == 'defaut') : ?>
                            <div class="container-cat container-none">
                                <div class="content-txt"><?= $faq->post_content ?></div>
                            </div>
                        <?php endif;
                    endforeach;
                endforeach;
            ?>
        </div>
    </div>
    <div class="tab">
        <input type="checkbox" id="chck5">
        <label class="tab-label" for="chck5"><?= __('Mercedes-benz vans') ?></label>
        <div class="tab-content">
            <?php 
                wp_reset_query();
                $args = array( 'post_type' => 'faq', 'faq_cat' => 'mb-vans');
                $faqs = query_posts($args);
                foreach($faqs as $faq) : 
                    $cats = wp_get_object_terms($faq->ID, 'faq_cat');
                    foreach($cats  as $cat) : 
                        if($cat->slug == 'sav' || $cat->slug == 'commerce' || $cat->slug == 'financement' || $cat->slug == 'location') : ?>
                            <div class="container-cat container-<?= $cat->slug; ?>">
                                <h3><?= $cat->name; ?></h3>
                                <div class="content-txt"><?= $faq->post_content ?></div>
                            </div>
                        <?php elseif($cat->slug == 'defaut') : ?>
                            <div class="container-cat container-none">
                                <div class="content-txt"><?= $faq->post_content ?></div>
                            </div>
                        <?php endif;
                    endforeach;
                endforeach;
            ?>
        </div>
    </div>
    <div class="tab">
        <input type="checkbox" id="chck6">
        <label class="tab-label" for="chck6"><?= __('Mercedes-benz trucks') ?></label>
        <div class="tab-content">
            <?php 
                wp_reset_query();
                $args = array( 'post_type' => 'faq', 'faq_cat' => 'mb-trucks');
                $faqs = query_posts($args);
                foreach($faqs as $faq) : 
                    $cats = wp_get_object_terms($faq->ID, 'faq_cat');
                    foreach($cats  as $cat) : 
                        if($cat->slug == 'sav' || $cat->slug == 'commerce' || $cat->slug == 'financement' || $cat->slug == 'location') : ?>
                            <div class="container-cat container-<?= $cat->slug; ?>">
                                <h3><?= $cat->name; ?></h3>
                                <div class="content-txt"><?= $faq->post_content ?></div>
                            </div>
                        <?php elseif($cat->slug == 'defaut') : ?>
                            <div class="container-cat container-none">
                                <div class="content-txt"><?= $faq->post_content ?></div>
                            </div>
                        <?php endif;
                    endforeach;
                endforeach;
            ?>
        </div>
    </div>
    <div class="tab">
        <input type="checkbox" id="chck7">
        <label class="tab-label" for="chck7"><?= __('Yamm66') ?></label>
        <div class="tab-content">
            <?php 
                wp_reset_query();
                $args = array( 'post_type' => 'faq', 'faq_cat' => 'yamaha');
                $faqs = query_posts($args);
                foreach($faqs as $faq) : 
                    $cats = wp_get_object_terms($faq->ID, 'faq_cat');
                    foreach($cats  as $cat) : 
                        if($cat->slug == 'sav' || $cat->slug == 'commerce' || $cat->slug == 'financement' || $cat->slug == 'location') : ?>
                            <div class="container-cat container-<?= $cat->slug; ?>">
                                <h3><?= $cat->name; ?></h3>
                                <div class="content-txt"><?= $faq->post_content ?></div>
                            </div>
                        <?php elseif($cat->slug == 'defaut') : ?>
                            <div class="container-cat container-none">
                                <div class="content-txt"><?= $faq->post_content ?></div>
                            </div>
                        <?php endif;
                    endforeach;
                endforeach;
            ?>
        </div>
    </div>
    <div class="tab">
        <input type="checkbox" id="chck8">
        <label class="tab-label" for="chck8"><?= __('indian motorcycle') ?></label>
        <div class="tab-content">
            <?php 
                wp_reset_query();
                $args = array( 'post_type' => 'faq', 'faq_cat' => 'indian');
                $faqs = query_posts($args);
                foreach($faqs as $faq) : 
                    $cats = wp_get_object_terms($faq->ID, 'faq_cat');
                    foreach($cats  as $cat) : 
                        if($cat->slug == 'sav' || $cat->slug == 'commerce' || $cat->slug == 'financement' || $cat->slug == 'location') : ?>
                            <div class="container-cat container-<?= $cat->slug; ?>">
                                <h3><?= $cat->name; ?></h3>
                                <div class="content-txt"><?= $faq->post_content ?></div>
                            </div>
                        <?php elseif($cat->slug == 'defaut') : ?>
                            <div class="container-cat container-none">
                                <div class="content-txt"><?= $faq->post_content ?></div>
                            </div>
                        <?php endif;
                    endforeach;
                endforeach;
            ?>
        </div>
    </div>
</div>