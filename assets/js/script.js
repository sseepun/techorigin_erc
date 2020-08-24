$(function(){ 'use strict';

    // Topnav
    var topnav = $('nav.topnav'),
        sidenav = $('nav.sidenav'),
        sidenavMenus = sidenav.find('.menu-container'),
        sidenavBtns = $('nav.topnav .sidenav-btn, nav.sidenav .sidenav-btn');
    var backToTop = $('.back-to-top');
    if(topnav.length){

        // On Scroll
        checkOnScroll( $(window).scrollTop() );
        $(window).scroll(function(){
            checkOnScroll( $(this).scrollTop() );
        });

        // Language dropdown
        topnav.find('.form-language .ui.dropdown').dropdown();
        topnav.find('.form-language input[name=language]').change(function(){
            $(this).closest('.form-language')[0].submit();
        });

        // Sidenav buttons
        sidenavBtns.click(function(e){
            e.preventDefault();
            if($('body').hasClass('sidenav-opened')){
                $('html, body').removeClass('sidenav-opened');
                sidenavBtns.find('> *').removeClass('active');
                sidenav.removeClass('active');
            }else{
                $('html, body').addClass('sidenav-opened');
                sidenavBtns.find('> *').addClass('active');
                sidenav.addClass('active');
            }
        });
        $('.sidenav-filter').click(function(e){
            e.preventDefault();
            $('html, body').removeClass('sidenav-opened');
            sidenavBtns.find('> *').removeClass('active');
            sidenav.removeClass('active');
        });

        // Generate sidenav
        sidenavMenus.html( topnav.find('#topnav-menu-container').html() );

        sidenavMenus.find('.menu.icon-menu > a').eq(0).html('หน้าแรก');
        sidenavMenus.find('.menu.icon-menu').eq(0).removeClass('icon-menu');

        sidenavMenus.find('.menu.icon-menu').remove();
        sidenavMenus.find('.has-children').each(function(){
            $(this).append('<div class="dropdown-toggle"><i class="fas fa-chevron-right"></i></div>');
        });
        sidenavMenus.find('.dropdown-toggle').click(function(e){
            e.preventDefault();
            var self = $(this);
            self.toggleClass('active');
            self.prev().slideToggle();
        });

        // Back to Top
        backToTop.click(function(e){
            e.preventDefault();
            $('html, body').stop().animate({ scrollTop: 0 }, 800 );
        });
    }
    function checkOnScroll(st){
        if(st > 400){
            topnav.addClass('sticky');
            backToTop.addClass('active');
        }else{
            topnav.removeClass('sticky');
            backToTop.removeClass('active');
        }
    }

    // Global Search
    var globalSearchContainer = $('.global-search-container');
    $('.global-search-toggle').click(function(e){
        e.preventDefault();
        globalSearchContainer.toggleClass('active');
        if(globalSearchContainer.hasClass('active')){
            globalSearchContainer.find('input[type=text]').focus();
        }
    });


    // Font Sizes
    var bodySize = 16;
    $('.btn.font-size-btn').click(function(e){
        e.preventDefault();
        var s = Number($(this).data('size'));
        if(s==0) bodySize = 16;
        else if(s==1 || s==-1) bodySize += s;
        else bodySize = s;
        $('html, body').css('font-size', bodySize+'px');
    });

    // Themes
    $('.theme-btn').click(function(e){
        e.preventDefault();
        $('#css-theme').attr('href', './assets/css/themes/'+$(this).data('theme')+'.css'); 
    });

    
    // Calendar
    if($('.calendar-container > .calendar-wrapper').length){
        $('.calendar-container > .calendar-wrapper').simpleCalendar({
            months: [
                'มกราคม', 'กุมภาพันธ์', 'มีนาคม', 'เมษายน', 'พฤษภาคม', 'มิถุนายน', 
                'กรกฎาคม', 'สิงหาคม', 'กันยายน', 'ตุลาคม', 'พฤศจิกายน', 'ธันวาคม'
            ],
            days: ['อา', 'จ', 'อ', 'พ', 'พฤ', 'ศ', 'ส'],
            displayYear: false,
            fixedStartDay: 0,
            displayEvent: true,
            disableEventDetails: false,
            disableEmptyDetails: true,
            events: [
                {
                    startDate: new Date('08-18-2020'),
                    endDate: new Date('08-18-2020'),
                    summary: 'กิจกรรมที่ 1'
                }
            ]
        });
    }


    // Tab
    $('.tab-container').each(function(){
        var self = $(this),
            tabs = self.find('> .tabs > .tab'),
            tabContents = self.find('> .tab-contents > .tab-content');
        tabs.click(function(e){
            e.preventDefault();
            tabs.removeClass('active');
            $(this).addClass('active');
            tabContents.removeClass('active');
            tabContents.filter('[data-tab="'+$(this).data('tab')+'"]').addClass('active');
        });
    });


    // Banner 01
    if($('section.banner-01').length){
        $('section.banner-01 > .slide-container').each(function(){
            var self = $(this);
            self.find('> .slides').slick({
                centerMode: true, centerPadding: 0, slidesToShow: 1, 
                focusOnSelect: true, autoplay: true, autoplaySpeed: 4000, speed: 800,
                arrows: false, dots: true, appendDots: self.find('.dots')
            });
        });
    }
    // Banner 02
    if($('.banner-02').length){
        $('.banner-02 > .slide-container').each(function(){
            var self = $(this);
            self.find('> .slides-nav .slides').slick({
                draggable: false, slidesToShow: 5, centerMode: true, focusOnSelect: true,
                asNavFor: self.find('> .preview-container .slides'), 
                dots: false, arrows: false,
                responsive: [
                    { breakpoint: 1199.98, settings: { slidesToShow: 4 } },
                    { breakpoint: 767.98, settings: { slidesToShow: 3 } },
                    { breakpoint: 575.98, settings: { slidesToShow: 2 } }
                ]
            });
            self.find('> .preview-container .slides').slick({
                slidesToShow: 1, slidesToScroll: 1, dots: false, arrows: true, 
                asNavFor: self.find('> .slides-nav .slides'), 
                prevArrow: self.find('> .preview-container .arrows .prev'), 
                nextArrow: self.find('> .preview-container .arrows .next')
            });
        });
    }
    // Banner 03
    if($('.banner-03').length){
        $('.banner-03 > .slide-container').each(function(){
            var self = $(this);
            self.find('> .slides').slick({
                slidesToShow: 1, slidesToScroll: 1, draggable: false, 
                arrows: false, dots: true, appendDots: self.find('.dots')
            });
        });
    }


    // Special Carousel
    if($('.ss-carousel').length){
        $('.ss-carousel').each(function(){
            var self = $(this);
            self.find('> .slides').slick({
                slidesToShow: 1, slidesToScroll: 1, 
                focusOnSelect: true, autoplay: true, autoplaySpeed: 4000, speed: 800,
                dots: true, appendDots: self.find('> .dots'), arrows:false
            });
        });
    }

    
    // AOS Animation
    // AOS.init({ easing: 'ease-in-out-cubic', duration: 750, once: true, offset: 15 });

});
