jQuery(document).ready(function(){

    var actuSliders = [];
    jQuery('.swiper-actu').each(function(index, swiper){
        jQuery(this).addClass('swiper-actu-' + index);
        jQuery('.swiper-button-next').addClass('bn-actu-' + index);
        jQuery('.swiper-button-prev').addClass('bp-actu-' + index);

        var object = {
            slidesPerView: 1,
            spaceBetween: 20,
            loop: true,
            pagination: {
                el: '.swiper-pagination-actu',
                clickable: true,
            },
            navigation: {
                nextEl: '.bn-actu-' + index,
                prevEl: '.bp-actu-' + index,
            },
            breakpoints: {
                567: {
                    slidesPerView: 2,
                    spaceBetween: 0,
                },
                1024: {
                    slidesPerView: 3,
                    spaceBetween: 0,
                },
            }
        };
        
        let slider =  new Swiper('.swiper-actu-' + index, object);
        actuSliders.push(slider);
    });
});

