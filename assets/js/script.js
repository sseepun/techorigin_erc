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

        // Topnav Submenu Tab
        topnav.find('.submenu-container .pagination').each(function(){
            var topnavPagination = $(this);
            topnavPagination.find('.page-btn').click(function(e){
                e.preventDefault();
                topnavPagination.find('.page-btn').removeClass('active');
                $(this).addClass('active');
                $(this).closest('.submenu-container').find('.submenu-tab').removeClass('active');
                $(this).closest('.submenu-container')
                    .find('.submenu-tab[data-submenu="'+$(this).data('submenu')+'"]')
                        .addClass('active');
            });
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


    // Date Picker
    $('input.date-picker').datepicker();
    
    // Calendar
    var calendar;
    if($('.calendar-container > .calendar-wrapper').length){
        if(!$('.banner-event').length){
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
        }else{
            calendar = $('.calendar-container > .calendar-wrapper').simpleCalendar({
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
                ],
                onMonthChange: function(month, year){
                    $('.banner-event').find('.slides').css('--month', month);
                    $('.banner-event').find('.slide').removeClass('active');
                    $('.banner-event').find('.slide[data-month="'+month+'"]').addClass('active');
                }
            });
        }
    }

    // Banner Event
    if($('.banner-event').length){
        $('.banner-event').each(function(){
            var bannerSlides = $(this).find('.slides'),
                bannerEvents = bannerSlides.find('.slide');
            bannerEvents.click(function(e){
                e.preventDefault();
                bannerSlides.css('--month', $(this).data('month'));
                bannerEvents.removeClass('active');
                $(this).addClass('active');
                if(calendar!==undefined){
                    var currentMonth = calendar.data('plugin_simpleCalendar').currentDate.getMonth();
                    calendar.data('plugin_simpleCalendar').changeMonth(
                        $(this).data('month') - currentMonth
                    );
                }
            });
        });
    }

    // Special Side Menu
    if($('.ss-side-menu').length){
        $('.ss-side-menu').each(function(){
            var menus = $(this).find('.menu'),
                menuContents = $(this).find('.menu-content');
            menus.click(function(e){
                e.preventDefault();
                menus.removeClass('active');
                $(this).addClass('active');
                menuContents.slideUp();
                $(this).next().stop().slideDown();
            });
        });
    }

    // Info Graphic
    if($('.info-graphic-container').length){
        $('.info-graphic-container').each(function(){
            var pages = $(this).find('.page-btn'),
                infoImgs = $(this).find('.img-content'),
                infoContents = $(this).find('.info-content');
            pages.click(function(e){
                e.preventDefault();
                var self = $(this),
                    pageId = $(this).data('page');
                if($(this).hasClass('page-prev')){
                    pageId = Math.max(1, Number(pages.filter('.active').data('page')) - 1);
                }else if($(this).hasClass('page-next')){
                    pageId = Math.min(5, Number(pages.filter('.active').data('page')) + 1);
                }
                pages.removeClass('active');
                pages.filter('[data-page="'+pageId+'"]').addClass('active');
                infoImgs.removeClass('active');
                infoImgs.filter('[data-page="'+pageId+'"]').addClass('active');
                infoContents.removeClass('active');
                infoContents.filter('[data-page="'+pageId+'"]').addClass('active');
            });
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

    // Special Tag Closable
    $('.ss-tags > .ss-tag.closable').click(function(e){
        e.preventDefault();
        $(this).remove();
    });

    // Toggle Box
    if($('.toggle-box').length){
        $('.toggle-box').each(function(){
            $(this).find('> .toggle-title').click(function(e){
                e.preventDefault();
                $(this).toggleClass('active');
                $(this).next().slideToggle();
            });
        });
    }

    // Button Clear
    $('.btn-clear').click(function(e){
        e.preventDefault();
        var target = $(this).closest('.control').find('> input');
        if(target.length) target.val('');
    });

    // Button Toggle
    $('.btn-toggle').click(function(e){
        e.preventDefault();
        $('.toggle-target[data-toggle="'+$(this).data('toggle')+'"]').slideToggle();
    });

    // Button Popup
    $('.btn-popup-toggle').click(function(e){
        e.preventDefault();
        $('.popup-container[data-popup="'+$(this).data('popup')+'"]').toggleClass('active');
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
            if(self.find('> .slides-nav .slides').length){
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
            }else{
                self.find('> .preview-container .slides').slick({
                    slidesToShow: 1, slidesToScroll: 1, dots: false, arrows: true, 
                    prevArrow: self.find('> .preview-container .arrows .prev'), 
                    nextArrow: self.find('> .preview-container .arrows .next')
                });
            }
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

    
    // FAQ 01
    if($('.faq-01').length){
        $('.faq-01').each(function(){
            $(this).find('.question').click(function(e){
                e.preventDefault();
                var self = $(this);
                self.toggleClass('active');
                self.next().slideToggle();
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
