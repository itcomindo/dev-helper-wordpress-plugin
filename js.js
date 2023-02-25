window.addEventListener('DOMContentLoaded', (event) => {
    jQuery(function () {
        var devShortcuts = jQuery('.devShortcuts.inactive');
        // var devContent = jQuery('#devContent.inactive');
        devShortcuts.slideUp();
        var devTrigger = jQuery('.devTrigger');
        var toggleCloseDH = jQuery('#toggleCloseDH');
        var toggleOpenDH = jQuery('#toggleOpenDH');
        var devHelperPr = jQuery('#devHelperPr');
        toggleOpenDH.slideUp();
        var inactive = localStorage.getItem('devHelperPr');

        // storage start
        // storage end

        jQuery(devTrigger).click(function () {
            jQuery(devShortcuts).slideUp();
            var devTriggerAttr = jQuery(this).attr('data-toggle');
            jQuery(this).next('#' + devTriggerAttr).slideDown();
            jQuery(toggleOpenDH).slideUp();
        });

        if (inactive == 'inactive') {
            jQuery(devHelperPr).addClass('inactive').removeClass('active');
        } else {
            jQuery(devHelperPr).addClass('active').removeClass('inactive');
        }
        
        // close workspace
        jQuery(toggleCloseDH).click(function () {
            jQuery(devShortcuts).slideUp();
            jQuery(this).slideUp();
            jQuery(toggleOpenDH).slideDown();
            jQuery(devHelperPr).addClass('inactive').removeClass('active');
            localStorage.setItem('devHelperPr', 'inactive');
            

            
        });
        // open workspace
        jQuery(toggleOpenDH).click(function () {
            jQuery(this).slideUp();
            jQuery(toggleCloseDH).slideDown();
            jQuery(devHelperPr).addClass('active').removeClass('inactive');
            localStorage.setItem('devHelperPr', 'active');
        });

        

        
    });
});