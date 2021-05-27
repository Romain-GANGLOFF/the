<?php
    $array = [
        ["name" => 'MERCEDES', 'img' => get_template_directory_uri() . "/assets/imgs/lg_group/MERCEDES.png"],
        ["name" => 'SMART', 'img' => get_template_directory_uri() . "/assets/imgs/lg_group/SMART.png"],
        ["name" => 'JEEP', 'img' => get_template_directory_uri() . "/assets/imgs/lg_group/JEEP.png"],
        ["name" => 'FUSO', 'img' => get_template_directory_uri() . "/assets/imgs/lg_group/FUSO.png"],
        ["name" => 'YAMAHA', 'img' => get_template_directory_uri() . "/assets/imgs/lg_group/YAMAHA.png"],
        ["name" => 'INDIAN', 'img' => get_template_directory_uri() . "/assets/imgs/lg_group/INDIAN.png"],
    ];
?>
<div class="container">
    <div class="swiper-container swiper-brands">
        <div class="swiper-wrapper">
            <?php foreach($array as $brand) : ?>
            <a href="#" class="swiper-slide">
                <div class="container-slide">
                    <div class="contain-shadow">
                        <img src="<?= $brand["img"] ?>" alt="<?= $brand["name"]?>">
                    </div>
                </div>
            </a>
            <?php endforeach ?>
        </div>
        <div class="swiper-pagination-brands swiper-pagination"></div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
    </div>
</div>