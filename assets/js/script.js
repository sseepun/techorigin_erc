$(function(){ 'use strict';

    // Topnav
    var topnav = $('nav.topnav'),
        topnavMenuToggle = topnav.find('.menu-toggle'),
        tonavMenuTabs = topnav.find('.menu-tab');
    var backToTop = $('.back-to-top');
    if(topnav.length){

        // On Scroll
        checkOnScroll( $(window).scrollTop() );
        $(window).scroll(function(){
            checkOnScroll( $(this).scrollTop() );
        });

        // Topnav Menu Toggle
        topnavMenuToggle.find('> a').click(function(e){
            e.preventDefault();
            topnavMenuToggle.toggleClass('active');
            topnavMenuToggle.find('.hamburger').toggleClass('active');
        });

        // Topnav Menu Tabs
        tonavMenuTabs.each(function(){
            var tonavMenuTab = $(this),
                tempTabs = tonavMenuTab.find('.tab'),
                tempContents = tonavMenuTab.find('.tab-content');
            tempTabs.click(function(e){
                e.preventDefault();
                tempTabs.removeClass('active');
                $(this).addClass('active');
                tempContents.removeClass('active');
                tempContents.filter('[data-tab="'+$(this).data('tab')+'"]').addClass('active');
            });
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
                var target = tabContents.filter('[data-tab="'+$(this).data('tab')+'"]');
                if(target.length){
                    target.addClass('active');
                    var s = target.find('.slides');
                    if(s.length){
                        s.slick('setPosition');
                    }
                }
                AOS.refresh();
            });
        });
    }

    var banner01 = $('.banner-01');
    if(banner01.length){
        banner01.find('.slide-container').each(function(){
            var self = $(this);
            self.find('.slides').slick({
                centerMode: false, centerPadding: 0, slidesToShow: 1, swipeToSlide: true,
                focusOnSelect: true, 
                arrows: false,
                dots: true, appendDots: self.find('.dots'),
            });

            var descObj = {};
            self.find('.slide').each(function(i){
                if($(this).data('desc')!==undefined){
                    descObj[i] = $(this).data('desc');
                }
            });
            self.find('.slick-dots > li button').each(function(i){
                if(descObj[i]!==undefined){
                    $(this).html(descObj[i]);
                }
            });
        });

        
    }


    // Content 01
    var content01 = $('.content-01');
    if(content01.length){
        content01.find('.slide-container').each(function(){
            var self = $(this);
            self.find('.slides').slick({
                centerMode: false, centerPadding: 0, slidesToShow: 6, swipeToSlide: true,
                focusOnSelect: true, autoplay: true, autoplaySpeed: 4000, speed: 800,
                arrows: true, appendArrows: self.find('.page-arrows'),
                dots: true, appendDots: self.find('.page-dots'),
            });
        });
    }


    // Page Loader
    var pageLoader = $('.page-loader');
    if(pageLoader.length){
        window.onload = function(){
            pageLoader.addClass('fade-out');
            setTimeout(function(){
                pageLoader.remove();
                $('body').removeClass('loading');
                AOS.init({ easing: 'ease-in-out-cubic', duration: 750, once: true, offset: 15 });
            }, 1350);
        }
    }else{
        $('body').removeClass('loading');
        AOS.init({ easing: 'ease-in-out-cubic', duration: 750, once: true, offset: 15 });
    }

    // On Resize
    $(window).on('resize', function(){
        AOS.refresh();
    });

});
