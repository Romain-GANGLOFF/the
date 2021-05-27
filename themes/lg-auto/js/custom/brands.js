jQuery(document).ready(function(){
    var brandsSliders = [];
    if (jQuery(window).width() >= 1024){
        jQuery('.swiper-pagination').css('display', 'none');
        jQuery('.swiper-button-prev').css('display', 'none');
        jQuery('.swiper-button-next').css('display', 'none');
    }
    jQuery('.swiper-brands').each(function(index, swiper){
        jQuery(this).addClass('swiper-brands-' + index);
        jQuery(this).children('.swiper-button-next').addClass('bn-brands-' + index);
        jQuery(this).children('.swiper-button-prev').addClass('bp-brands-' + index);
        var object = {
            slidesPerView: 1,
            spaceBetween: 50,
            updateOnWindowResize: true,
            loop: true,
            pagination: {
                el: '.swiper-pagination-brands',
                clickable: true,
            },
            navigation: {
                nextEl: '.bn-brands-' + index,
                prevEl: '.bp-brands-' + index,
            },
            breakpoints: {
                567: {
                    slidesPerView: 2,
                    spaceBetween: 0,
                },
                1024: {
                    slidesPerView: 6,
                    spaceBetween: 20,
                    loop: false,
                    virtualTranslate: true,
                },
            }
        };
        
        let slider =  new Swiper('.swiper-brands-' + index, object);
        brandsSliders.push(slider);
    });
    
});

