jQuery(document).ready(function(){

    var occasSliders = [];
    jQuery('.swiper-occas').each(function(index, swiper){
        jQuery(this).addClass('swiper-occas-' + index);

        var object = {
            effect: 'coverflow',
            grabCursor: true,
            centeredSlides: true,
            slidesPerView: 'auto',
            loop: true,
            coverflowEffect: {
                rotate: 50,
                stretch: 0,
                depth: 100,
                modifier: 1,
                slideShadows: true,
            }, 
            pagination: {
                el: '.swiper-pagination-occas',
                clickable: true,
            },  
            breakpoints: {
                567: {
                    slidesPerView: 2,
                    loop: false,
                },
                
                
            }   
        };
        
        let slider =  new Swiper('.swiper-occas-' + index, object);
        occasSliders.push(slider);
    });
});