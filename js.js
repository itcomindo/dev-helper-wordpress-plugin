window.addEventListener('DOMContentLoaded', (event) => {
    jQuery(function () {
        var devShortcuts = jQuery('.devShortcuts');
        // var devContent = jQuery('#devContent.inactive');
        devShortcuts.slideUp();
        var devTrigger = jQuery('.devTrigger');
        var toggleCloseDH = jQuery('#toggleCloseDH');
        var toggleOpenDH = jQuery('#toggleOpenDH');
        var devHelperPr = jQuery('#devHelperPr');
        toggleOpenDH.slideUp();
        var inactive = localStorage.getItem('devHelperPr');

        // run open accordion
        // jQuery(devTrigger).click(function () {
        //     devShortcuts.slideUp();
        //     if (jQuery('.devshortcuts').hasClass('active')) {
        //         jQuery('.devshortcuts').removeClass('active').addClass('inactive');
        //     }
        //     var devTriggerAttr = jQuery(this).attr('data-toggle');
        //     var currentActive = jQuery(this).next('#' + devTriggerAttr + '.devShortcuts');
        //     if (currentActive.hasClass('inactive')) {
        //         jQuery(currentActive).removeClass('inactive').addClass('active').slideDown();
        //     } else {
        //         jQuery('.devShortcuts').removeClass('active').addClass('inactive').slideUp();
        //     }
        // });

        // code below is not working
        // jQuery(devTrigger).hover(function () {
        //     devShortcuts.slideUp();
        //     if (jQuery('.devshortcuts').hasClass('active')) {
        //         jQuery('.devshortcuts').removeClass('active').addClass('inactive');
        //     }
        //     var devTriggerAttr = jQuery(this).attr('data-toggle');
        //     var currentActive = jQuery(this).next('#' + devTriggerAttr + '.devShortcuts');
        //     if (currentActive.hasClass('inactive')) {
        //         jQuery(currentActive).removeClass('inactive').addClass('active').slideDown();
        //     } else {
        //         jQuery('.devShortcuts').removeClass('active').addClass('inactive').slideUp();
        //     }
        // }, function () {
        //     jQuery('.devShortcuts').removeClass('active').addClass('inactive').slideUp();
        // });


        // if mouse enter on devTrigger then open accordion and keep accordion open until mouse leave

        jQuery(devTrigger).mouseenter(function () {
            devShortcuts.slideUp();
            jQuery(this).addClass('test');
            if (jQuery('.devshortcuts').hasClass('active')) {
                jQuery('.devshortcuts').removeClass('active').addClass('inactive');
            }
            var devTriggerAttr = jQuery(this).attr('data-toggle');
            console.log(devTriggerAttr);
            var currentActive = jQuery(this).next('#' + devTriggerAttr + '.devShortcuts');
            if (currentActive.hasClass('inactive')) {
                jQuery(currentActive).removeClass('inactive').addClass('active').slideDown();
            } else {
                jQuery('.devShortcuts').removeClass('active').addClass('inactive').slideUp();
            }
        });

        // when mouse leave devTrigger but still on devShortcuts then keep accordion open
        jQuery(devShortcuts).mouseenter(function () {
            jQuery('.devTrigger.test').addClass('test2');
        });

        // when mouse leave devShortcuts then close accordion
        jQuery(devShortcuts).mouseleave(function () {
            jQuery('.devTrigger.test').removeClass('test');
            jQuery('.devTrigger.test2').removeClass('test2');
            jQuery('.devShortcuts').removeClass('active').addClass('inactive').slideUp();
        });

        // jQuery(devTrigger).mouseleave(function () {
        //     jQuery('.devShortcuts').removeClass('active').addClass('inactive').slideUp();
        // });



        if (inactive == 'inactive') {
            jQuery(devHelperPr).addClass('inactive').removeClass('active');
            toggleCloseDH.slideUp();
            toggleOpenDH.slideDown();
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