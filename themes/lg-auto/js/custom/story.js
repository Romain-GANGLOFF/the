jQuery(document).ready(function(){
    arrayDate = []
    jQuery("div.swiper-wrapper").children().each(
        function(){
            arrayDate.push(jQuery(this).data("id"));
        });  
        console.log(arrayDate);
    var swiperStory = new Swiper('#story-swip', {
        direction: 'vertical',
        slidesPerView: 1,
        spaceBetween: 30,
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
            renderBullet: function (index, className) {
                    return '<span class="' + className + '"><span class="date">' + (arrayDate[index]) + '</span></span>';
              },
        },
    });

});
