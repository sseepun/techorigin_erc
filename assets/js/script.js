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

    // Global Search
    var globalSearchContainer = $('.global-search-container');
    if(0 && globalSearchContainer.hasClass('use-gsap')){
        var globalSearchTl =  new TimelineMax({paused: true})
            .to('.global-search-container', .6, {
                autoAlpha: 1, ease: Power3.easeInOut
            })
            .from('.global-search-container h1', .6, {
                opacity: 0, y: 30, ease: Power3.easeInOut
            }, '-=.4')
            .from('.global-search-container .input-container', .6, {
                opacity: 0, y: 30, ease: Power3.easeInOut
            }, '-=.4')
            .staggerFrom('.global-search-container .ss-tag', .6, {
                opacity: 0, y: 30, ease: Power3.easeInOut
            }, .08, '-=.55')
            .reverse();
        $('.global-search-toggle').click(function(e){
            e.preventDefault();
            globalSearchTl.reversed( !globalSearchTl.reversed() );
            globalSearchContainer.toggleClass('active');
            if(globalSearchContainer.hasClass('active')){
                globalSearchContainer.find('input[type=text]').focus();
            }
        });
    }else{
        $('.global-search-toggle').click(function(e){
            e.preventDefault();
            globalSearchContainer.toggleClass('active');
            if(globalSearchContainer.hasClass('active')){
                globalSearchContainer.find('input[type=text]').focus();
            }
        });
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
