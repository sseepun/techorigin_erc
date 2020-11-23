$(function(){ 'use strict';

    // Topnav
    var topnav = $('nav.topnav'),
        sidenav = $('nav.sidenav'),
        sidenavMenus = sidenav.find('.menu-container'),
        sidenavToggle = $('nav.topnav .sidenav-toggle, nav.sidenav .sidenav-toggle');
    var backToTop = $('.back-to-top');
    if(topnav.length){

        // On Scroll
        checkOnScroll( $(window).scrollTop() );
        $(window).scroll(function(){
            checkOnScroll( $(this).scrollTop() );
        });

        // Sidenav buttons
        sidenavToggle.click(function(e){
            e.preventDefault();
            if($('body').hasClass('sidenav-opened')){
                $('html, body').removeClass('sidenav-opened');
                sidenavToggle.find('> *').removeClass('active');
                sidenav.removeClass('active');
            }else{
                $('html, body').addClass('sidenav-opened');
                sidenavToggle.find('> *').addClass('active');
                sidenav.addClass('active');
            }
        });
        $('.sidenav-filter').click(function(e){
            e.preventDefault();
            $('html, body').removeClass('sidenav-opened');
            sidenavToggle.find('> *').removeClass('active');
            sidenav.removeClass('active');
        });

        // Generate sidenav
        sidenavMenus.html( topnav.find('.menu-container').html() );
        sidenavMenus.find('.menu.has-submenu > a').click(function(e){
            e.preventDefault();
            var parent = $(this).parent(),
                target = parent.find('> .submenu-container');
            if(target.length){
                parent.toggleClass('opened');
                target.slideToggle();
            }
        });

        // Back to Top
        backToTop.click(function(e){
            e.preventDefault();
            $('html, body').stop().animate({ scrollTop: 0 }, 800 );
        });
    }
    function checkOnScroll(st){
        if(st > 400){
            backToTop.addClass('active');
        }else{
            backToTop.removeClass('active');
        }
    }
    

    // Policy Nav
    var policyNav = $('nav.policy-nav');
    if(policyNav.length){
        if($('body').hasClass('policy-opened')){
            policyNav.find('a').click(function(e){
                e.preventDefault();
                $('body').removeClass('policy-opened');
                setTimeout(function(){
                    policyNav.remove();
                }, 750);
            });
        }else{
            policyNav.remove();
        }
    }

    
    // Button Popup
    $('.btn-popup-toggle').click(function(e){
        e.preventDefault();
        $('.popup-container[data-popup="'+$(this).data('popup')+'"]').toggleClass('active');
    });

    // Date Picker
    $('input.date-picker').each(function(){
        new Datepicker($(this)[0], {});
    });

    // Check Toggle
    $('.check-toggle').each(function(){
        var self = $(this),
            target = self.parent().find('input[type="checkbox"], input[type="radio"]');
        if(target.is(':checked')) self.show();
        target.change(function(){
            self.slideToggle();
        });
    });


    // Tab Container
    var tabContainers = $('.tab-container');
    if(tabContainers.length){
        tabContainers.each(function(){
            var self = $(this),
                tabs = self.find('.tabs > .tab'),
                tabContents = self.find('.tab-contents > .tab-content');
            tabs.click(function(e){
                e.preventDefault();
                tabs.removeClass('active');
                $(this).addClass('active');
                tabContents.removeClass('active');
                tabContents.filter('[data-tab="'+$(this).data('tab')+'"]').addClass('active');
                AOS.refresh();
            });
        });
    }


    // Banner 01
    var banner01 = $('.banner-01');
    if(banner01.length){
        banner01.each(function(){
            var self = $(this);
            self.find('.slides').slick({
                centerMode: true, centerPadding: 0, slidesToShow: 1, 
                focusOnSelect: true, autoplay: true, autoplaySpeed: 4000, speed: 800,
                arrows: true, appendArrows: self.find('.arrows'),
                dots: true, appendDots: self.find('.dots'),
                adaptiveHeight: false
            });
        });
    }


    // Content 02
    var content02 = $('.content-02');
    if(content02.length){
        content02.each(function(){
            var self = $(this);
            self.find('.slides').slick({
                centerMode: false, centerPadding: 0, slidesToShow: 3, 
                focusOnSelect: true, autoplay: true, autoplaySpeed: 4000, speed: 800,
                arrows: false, dots: true, appendDots: self.find('.dots'),
                responsive: [
                    { breakpoint: 1199.98, settings: { slidesToShow: 2, } },
                    { breakpoint: 767.98, settings: { slidesToShow: 1, } },
                ]
            });
        });
    }

    // Content 03
    var content03 = $('.content-03');
    if(content03.length){
        content03.each(function(){
            var self = $(this);
            self.find('.slides').slick({
                centerMode: false, centerPadding: 0, slidesToShow: 2, 
                focusOnSelect: true, autoplay: true, autoplaySpeed: 4000, speed: 800,
                arrows: false, dots: true, appendDots: self.find('.dots'),
                responsive: [
                    { breakpoint: 767.98, settings: { slidesToShow: 1, } },
                ]
            });
        });
    }


    // Page Loader
    if($('.page-loader').length){
        window.onload = function(){
            $('.page-loader').addClass('fade-out');
            setTimeout(function(){
                $('.page-loader').remove();
            }, 1350);
        }
    }

    
    // AOS Animation
    AOS.init({ easing: 'ease-in-out-cubic', duration: 750, once: true, offset: 15 });

});
