jQuery(document).ready(function(){

    if(jQuery(window).width() <= 1278){
        // MENU RESPONSIVE
        jQuery('#Burger').click(function(){ 
            jQuery('#Burger, #site-navigation-header, #Language, .search-bar').toggleClass('open');
            if(jQuery(window).width() <= 1200){
                // blocage du scrool
                if(jQuery('#site-navigation-header').hasClass('open')){
                    document.documentElement.style.overflow = 'hidden';
                }
                else{
                    document.documentElement.style.overflow = 'auto';
                }
            }
        });
        jQuery('.menu-item-has-children').click(function(){
    
            jQuery(this).toggleClass('active');
                
        });

         

    }
    else{
        // MENU RETRACTABLE
        var prev = 0;
        var $window = jQuery(window);
        var nav = jQuery('#site-navigation');

        $window.on('scroll', function(){
            var scrollTop = $window.scrollTop();
            nav.toggleClass('scroll', scrollTop > prev);
            prev = scrollTop;
        });
    }

    //  TOOLBAR OCCASION
    jQuery('.toolbar-occasion').on('click', function(){
        jQuery(this).toggleClass('active');
    });

    // COLLABORATEUR DROPDOWN
    jQuery('.menu-collab').click(function() {
        jQuery(this).find('.menu-dropdown').slideToggle('slow');
        jQuery('.arrow-collab').toggleClass('open');
    }); 
            // CONCESSIONS DROPDOWN || Menu Classic
            jQuery('.title-concessions').click(function() {
                jQuery(this).parent().find('.menu').slideToggle('slow');
                jQuery('.title-concessions').toggleClass('open');
            });             
            jQuery('.title-classic').click(function() {
                jQuery(this).parent().find('.menu').slideToggle('slow');
                jQuery('.title-classic').toggleClass('open');
            });             
            jQuery('.open-dropdown').click(function() {
                jQuery(this).find('.sub-menu').slideToggle('slow');
                jQuery(this).find('a').toggleClass('open');
            });      
});

