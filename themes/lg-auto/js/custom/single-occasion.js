jQuery(window).ready(function(){
    const swiper = new Swiper('.swiper-container', {
        slidesPerView: 2,
        spaceBetween: 10,
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev'
        },
        breakpoints: {
            768: {
                slidesPerView: 4,
            },
        }
    })
    var photos = jQuery(".swiper-slide");
    photos.css("display","none");
    photos.each(function(i){
        if (first.includes(i)){
            jQuery(this).css("display","flex");
            swiper.update();
        }
    })
    jQuery(".swiper-slide").click(function(event){
        jQuery("#ActiveImage").css("background-image","url("+jQuery(this).children().attr("src")+")");
    })
})