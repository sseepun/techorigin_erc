<!DOCTYPE html>
<html lang="th">
<head>
    <?php include_once('include/header.php'); ?>
    <?php include_once('include/style.php'); ?>
</head>
<body>
    <?php include_once('include/topnav.php'); ?>
    <?php
        $breadcrumb = [
            [ 'name' => 'หน้าแรก', 'url' => './' ],
            [ 'name' => 'คำถามที่พบบ่อย', 'url' => '#' ]
        ];
        include_once('component/breadcrumb.php');
    ?>
    
    <section class="section-padding">
        <div class="container">
            <div class="ss-header" data-aos="fade-up" data-aos-delay="0">
                <div class="ss">ป</div><h1><span class="color2">ฏิทินกิจกรรม</span></h1>
                <p>
                    <span class="fw-600">กรมอนามัย</span> 
                    พร้อมให้ข้อมูลข่าวสารที่มีประโยชน์สำหรับคุณ
                </p>
            </div>
            <div class="grids">

                <div class="grid xl-75 lg-70 sm-100">
                    <div class="tab-container">
                        <div class="tabs">
                            <div class="tab active" data-tab="1">
                                <div class="icon"><i class="far fa-building"></i></div>
                                <div class="text-container">
                                    <div class="title">
                                        <span>01.</span> รายการ
                                    </div>
                                    <div class="desc">กรมอนามัย</div>
                                </div>
                            </div>
                            <div class="tab" data-tab="2">
                                <div class="icon"><i class="far fa-building"></i></div>
                                <div class="text-container">
                                    <div class="title">
                                        <span>02.</span> เดือน
                                    </div>
                                    <div class="desc">กรมอนามัย</div>
                                </div>
                            </div>
                            <div class="tab" data-tab="3">
                                <div class="icon"><i class="far fa-building"></i></div>
                                <div class="text-container">
                                    <div class="title">
                                        <span>03.</span> สัปดาห์
                                    </div>
                                    <div class="desc">กรมอนามัย</div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-contents">

                            <div class="tab-content active" data-tab="1">
                                <div class="list-header jc-end">
                                    <div class="block">
                                        <div class="text-wrapper">
                                            <select name="category" class="order no-margin">
                                                <option value="">เลือกหมวดหมู่</option>
                                                <option value="1">หมวดหมู่ที่ 1</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="block ml-1 mr-1">
                                        <div class="text-wrapper">
                                            <span class="date-picker-wrapper">
                                                <input type="text" name="end_date" class="date-picker" 
                                                autocomplete="off" style="width:6.5rem;" />
                                            </span>
                                        </div>
                                    </div>
                                    <div class="block">
                                        <div class="text-wrapper">
                                            <form action="search-result.php" method="GET">
                                                <input type="text" name="search" placeholder="ค้นหา" required>
                                                <button type="submit" class="btn">
                                                    <i class="fas fa-search"></i>
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <?php for($i=0; $i<5; $i++){?>
                                    <div class="grid lg-100 md-50 sm-50 mt-0">
                                        <div class="ss-card pt-1-5 pb-1-5">
                                            <div class="block">
                                                <div class="ss-img square">
                                                    <div class="img-bg lazy-bg" data-src="./assets/img/content/01.jpg"></div>
                                                    <div class="socials">
                                                        <ul>
                                                            <li><a class="social social-fw" href="#">
                                                                <i class="fab fa-facebook-f"></i>
                                                            </a></li>
                                                            <li><a class="social social-tw" href="#">
                                                                <i class="fab fa-twitter"></i>
                                                            </a></li>
                                                            <li><a class="social social-ln" href="#">
                                                                <i class="fab fa-line"></i>
                                                            </a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="block">
                                                <div class="ss-tags">
                                                    <div class="ss-tag type-9"></div>
                                                    <div class="ss-tag type-10"></div>
                                                </div>
                                                <a class="ss-h3" href="#">
                                                    การประชุมวิชาการนมแม่แห่งชาติครั้งที่ 7 เนื่องจากปัญหา 
                                                    <span class="fw-400 color4">COVID-19</span> 
                                                    ที่เกิดขึ้น ส่งผลให้การ ประชุมในปีน
                                                </a>
                                                <div class="btn btn-icon text-left pt-0-5">
                                                    <i class="fas fa-clock"></i>
                                                    <span class="text-sm">
                                                        18-20 กรกฎาคม 2563 | 11:00 - 19:00 น.
                                                    </span>
                                                </div>
                                                <div class="btn btn-icon text-left pt-0-5">
                                                    <i class="fas fa-map-marker-alt"></i>
                                                    <span class="text-sm">
                                                        ศูนย์นิทรรศการและการประชุมไบเทค
                                                    </span>
                                                </div>
                                                <p class="mt-1-5">
                                                    ปรับเป็นลักษณะของ <span class="fw-400 color4">Live streaming</span> 
                                                    โดยทางผู้จัด ยังคงเนื้อหาการประชุม8;k,d
                                                </p>
                                                <div class="btns">
                                                    <a class="btn btn-action btn-primary btn-sm next-icon" href="#">
                                                        รายละเอียด
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php }?>
                                <?php include('component/list-footer.php'); ?>
                            </div>

                            <div class="tab-content" data-tab="2">
                                <div class="list-header jc-end">
                                    <div class="block">
                                        <div class="text-wrapper">
                                            <select name="category" class="order no-margin">
                                                <option value="">เลือกหมวดหมู่</option>
                                                <option value="1">หมวดหมู่ที่ 1</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="block ml-1 mr-1">
                                        <div class="text-wrapper">
                                            <span class="date-picker-wrapper">
                                                <input type="text" name="end_date" class="date-picker" 
                                                autocomplete="off" style="width:6.5rem;" />
                                            </span>
                                        </div>
                                    </div>
                                    <div class="block">
                                        <div class="text-wrapper">
                                            <form action="search-result.php" method="GET">
                                                <input type="text" name="search" placeholder="ค้นหา" required>
                                                <button type="submit" class="btn">
                                                    <i class="fas fa-search"></i>
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                </div>

                                <!-- Calendar -->
                                <div class="fullcalendar-container month">
                                    <div class="fullcalendar-header">
                                        <div id="prev-month-btn" class="calendar-btn">
                                            <i class="fa fa-angle-double-left"></i>
                                            <span></span>
                                        </div>
                                        <h2 id="calendar-title" class="calendar-title"></h2>
                                        <div id="next-month-btn" class="calendar-btn">
                                            <span></span>
                                            <i class="fa fa-angle-double-right"></i>
                                        </div>
                                    </div>
                                    <div class="fullcalendar-wrapper">
                                        <div id="fullcalendar"></div>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-content" data-tab="3">
                                <div class="list-header jc-end">
                                    <div class="block">
                                        <div class="text-wrapper">
                                            <select name="category" class="order no-margin">
                                                <option value="">เลือกหมวดหมู่</option>
                                                <option value="1">หมวดหมู่ที่ 1</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="block ml-1 mr-1">
                                        <div class="text-wrapper">
                                            <span class="date-picker-wrapper">
                                                <input type="text" name="end_date" class="date-picker" 
                                                autocomplete="off" style="width:6.5rem;" />
                                            </span>
                                        </div>
                                    </div>
                                    <div class="block">
                                        <div class="text-wrapper">
                                            <form action="search-result.php" method="GET">
                                                <input type="text" name="search" placeholder="ค้นหา" required>
                                                <button type="submit" class="btn">
                                                    <i class="fas fa-search"></i>
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                </div>

                                <!-- Calendar Week -->
                                <div class="fullcalendar-container week">
                                    <div class="fullcalendar-wrapper">
                                        <div id="fullcalendar-week"></div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="grid xl-25 lg-30 md-100 sm-100" data-aos="fade-up" data-aos-delay="600">
                    <div class="slots no-mask lazy-bg" data-src="./assets/img/bg/04.jpg">
                        <img class="float-img" src="./assets/img/hero/07.png" alt="Slot Float Image" />
                        <div class="slot mt-2">
                            <h2 class="header-text quote-text">
                                <span class="fw-400">กรมอนามัย</span> <br>
                                เรามีสาระสุขภาพดีๆ <br>
                                <span class="text-xl fw-400 color1">ส่งตรงถึงคุณ</span> <br>
                                <span class="text-xl">ทุกวัน</span>
                            </h2>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    
    <?php include_once('include/footer.php'); ?>
    <?php include_once('include/script.php'); ?>

    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/@fullcalendar/core@4.4.0/main.min.css" />
    <link rel="stylesheet" type="text/css" href="https://unpkg.com/@fullcalendar/daygrid@4.4.0/main.min.css" />
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/@fullcalendar/core@4.4.0/main.min.js"></script>
    <script type="text/javascript" src="https://unpkg.com/@fullcalendar/daygrid@4.4.0/main.min.js"></script>
    <script type="text/javascript" src="https://unpkg.com/@fullcalendar/interaction@4.4.0/main.min.js"></script>
    <script type="text/javascript" src="https://unpkg.com/@fullcalendar/timegrid@4.4.0/main.min.js"></script>
    <script>
        var days = ['อา.', 'จ.', 'อ.', 'พ.', 'พฤ.', 'ศ.', 'ส.'];
        var months = [
            'มกราคม', 'กุมภาพันธ์', 'มีนาคม', 'เมษายน', 'พฤษภาคม', 'มิถุนายน',
            'กรกฎาคม', 'สิงหาคม', 'กันยายน', 'ตุลาคม', 'พฤศจิกายน', 'ธันวาคม'
        ];


        // Calendar Month
        var calendarTitle = $('#calendar-title');
        var prevMonthBtn = $('#prev-month-btn');
        var nextMonthBtn = $('#next-month-btn');
        
        function htmlToElement(html){
            var template = document.createElement('template');
            html = html.trim();
            template.innerHTML = html;
            return template.content.firstChild;
        }
        function updateCalendarHeader(currentMonth){
            let prevMonth = 0;
            let nextMonth = 0;

            if(months[currentMonth - 1]) prevMonth = months[currentMonth - 1];
            else prevMonth = months[months.length - 1];

            if(months[currentMonth + 1]) nextMonth = months[currentMonth + 1];
            else nextMonth = months[0];

            calendarTitle.html(months[currentMonth]);
            prevMonthBtn.find('> span').html(prevMonth);
            nextMonthBtn.find('> span').html(nextMonth);
        }

        var calendarContainer = $('#fullcalendar');
        const calendar = new FullCalendar.Calendar(calendarContainer[0], {
            plugins: [ 'interaction', 'dayGrid', 'timeGrid'],
            defaultView: 'dayGridMonth',
            firstDay: 1,
            locale: 'th',
            contentHeight: 'auto',
            events: [
                {
                    title: 'การทำโครงงานของนักเรียน ม.4',
                    start: '2020-09-18',
                    end: '2020-09-28',
                    url: '#',
                    backgroundColor: 'orange',
                    borderColor: 'orange'
                },
            ],
            // eventSources: [
            //     {
            //         className: 'ku-event',
            //         url: '/th/event-calendar/data',
            //         method: 'GET',
            //         extraParams: function(){
            //             return {
            //                 cate_id:$('#filter_calendar_cate').val(),
            //                 date:$('#filter_date').val(),
            //                 keyword:$('#filter_keyword').val(),
            //                 type:$('[name=my-nav-item].active').attr('data-key')
            //             };
            //         },
            //         failure: function(){
            //             alert('there was an error while fetching events...');
            //         }
            //     } 
            // ],
            eventSourceSuccess: function(content, xhr){
                return content.eventArray;
            },
            datesRender: function(info){
                const date = new Date(info.view.currentStart);
                updateCalendarHeader(date.getMonth());
            },
            dayRender: function (info){
                const date = new Date(info.date);
                if(info.el.classList.contains('fc-today')){
                    info.el.style.color = '#ffffff';
                    info.el.style.backgroundColor = '#0d838d';
                }
                if(info.el.classList.contains('fc-other-month')){
                    info.el.style.opacity = 0.3;
                }
                info.el.innerHTML = `<div class="calendar-date">
                        ${days[date.getDay()]}<br>${date.getDate()}
                    </div>`;
            },
            // eventMouseEnter: function(info){
            //     const id = info.event.id;
            //     const eventDate = new Date(info.event.start);
            //     const day = eventDate.getDate();
            //     const dayStr = `${day}`.length === 1 ? `0${day}` : day;
            //     const month = months[eventDate.getMonth()];
            //     const year = eventDate.getFullYear() + 543;

            //     const currentCalendarStart = new Date(info.view.activeStart);
            //     const nextThreeWeeks = new Date(currentCalendarStart);
            //     nextThreeWeeks.setDate(currentCalendarStart.getDate() + 20);

            //     // Set position for popover
            //     const positionClasses = [];
            //     if([1, 2, 3, 4].indexOf(eventDate.getDay()) > -1){ // Mon - Thu
            //         positionClasses.push('popup-left');
            //     }else{ // Fri - Sun
            //         positionClasses.push('popup-right');
            //     }
            //     if(eventDate <= nextThreeWeeks){ // week 1 - 3 of the month
            //         positionClasses.push('popoup-top');
            //     }else{ // week 4 - 6 of the month
            //         positionClasses.push('popup-bottom');
            //     }
            //     info.el.appendChild(
            //         htmlToElement(
            //             `<div class="calendar-popoup ${positionClasses.join(' ')}">
            //                 <div class="thumbnail" style="background-image:url('./assets/img/banner/01.jpg');"></div>
            //                 <div class="detail">
            //                     <div class="date">${dayStr} ${month} ${year}</div>
            //                     <div class="title">${info.event.title}</div>
            //                     <div class="desc">Description information</div>
            //                 </div>
            //             </div>`
            //         )
            //     );
            // },
            // eventMouseLeave: function(info){
            //     $('.calendar-popoup').remove();
            // },
        });
        calendar.render();

        prevMonthBtn.click(function(e){
            e.preventDefault();
            calendar.prev();
        });
        nextMonthBtn.click(function(e){
            e.preventDefault();
            calendar.next();
        });


        // Calendar Week
        var calendarWeekContainer = $('#fullcalendar-week');
        const calendarWeek = new FullCalendar.Calendar(calendarWeekContainer[0], {
            plugins: [ 'interaction', 'timeGrid'],
            header: {
                left: 'prev',
                center: 'title',
                right: 'next'
            },
            defaultView: 'timeGridWeek',
            firstDay: 1,
            locale: 'th',
            contentHeight: 'auto',
            events: [
                {
                    title: 'การทำโครงงานทดลอง',
                    start: '2020-09-21T10:00:00',
                    end: '2020-09-21T16:00:00',
                    url: '#',
                    backgroundColor: 'orange',
                    borderColor: 'orange'
                },
                {
                    title: 'การทำโครงงานทดลอง 2',
                    start: '2020-09-22T12:00:00',
                    end: '2020-09-22T21:00:00',
                    url: '#',
                    backgroundColor: 'orange',
                    borderColor: 'orange'
                },
            ],
            // eventSources: [
            //     {
            //         className: "ku-event",
        
            //         url: '/th/event-calendar/data',
            //         method: 'GET',
            //         extraParams: function(){
            //             return {
            //                 cate_id:$('#filter_calendar_cate').val(),
            //                 date:$('#filter_date').val(),
            //                 keyword:$('#filter_keyword').val(),
            //                 type:$('[name=my-nav-item].active').attr('data-key')
            //             };
            //         },
            //         failure: function(){
            //             alert('there was an error while fetching events!');
            //         }
            //     } 
            // ],
            eventSourceSuccess: function(content, xhr){
                return content.eventArray;
            },
            dayRender: function(info){
                if(!($(info.el).closest('.fc-scroller').length)){
                    const date = new Date(info.date);
                    if(info.el.classList.contains('fc-today')){
                        info.el.style.color = '#ffffff';
                        info.el.style.backgroundColor = '#0d838d';
                    }
                    if(info.el.classList.contains('fc-other-month')){
                        info.el.style.opacity = 0.3;
                    }
                    info.el.innerHTML = `<div class="calendar-custom-date">
                            ${days[date.getDay()]}<br>${date.getDate()}
                        </div>`;
                }
            },
            // eventMouseEnter: function(info){
            //     const id = info.event.id;
            //     const eventDate = new Date(info.event.start);
            //     const day = eventDate.getDate();
            //     const dayStr = `${day}`.length === 1 ? `0${day}` : day;
            //     const month = months[eventDate.getMonth()];
            //     const year = eventDate.getFullYear() + 543;

            //     const currentCalendarStart = new Date(info.view.activeStart);
            //     const nextThreeWeeks = new Date(currentCalendarStart);
            //     nextThreeWeeks.setDate(currentCalendarStart.getDate() + 20);

            //     // Set position for popover
            //     const positionClasses = [];
            //     if ([1, 2, 3, 4].indexOf(eventDate.getDay()) > -1) {
            //         // Mon - Thu
            //         positionClasses.push("popover-left");
            //     } else {
            //         // Fri - Sun
            //         positionClasses.push("popover-right");
            //     }
            //     if (eventDate <= nextThreeWeeks) {
            //         // week 1 - 3 of the month
            //         positionClasses.push("popover-top");
            //     } else {
            //         // week 4 - 6 of the month
            //         positionClasses.push("popover-bottom");
            //     }
            //     const popover = htmlToElement(`
            //         <div id="${id}" class="event-card calendar-popover ${positionClasses.join(' ')}">
            //             <div class="thumbnail">
            //                 <img src="${info.event.extendedProps.thumb_url}" alt="KU Calendar"/>
            //                 <div class="date green">
            //                 <span>${dayStr}</span>
            //                 <span>${month} ${year}</span>
            //                 </div>
            //             </div>
            //             <div class="detail">
            //                 <span>
            //                     <strong>${info.event.title}</strong>
            //                 </span>
            //                 <span>
            //                     ${info.event.extendedProps.description}
            //                 </span>
            //             </div>
            //         </div>`
            //     );
            //     info.el.appendChild(popover);
            //     if (!info.el.classList.contains('is-show-popover')){
            //         setTimeout(function(){
            //             info.el.classList.add('is-show-popover');
            //         }, 100);
            //     }
            // },
            // eventMouseLeave: function(info){
            //     if (info.el.classList.contains('is-show-popover')) {
            //         info.el.classList.remove('is-show-popover');
            //     }
            //     setTimeout(function(){
            //         const id = info.event.id;
            //         const popover = document.getElementById(id);
            //         if (popover) {
            //             popover.parentNode.removeChild(popover);
            //         }
            //     }, 100);
            // },
        });
        calendarWeekContainer.closest('.tab-content').addClass('active');
        calendarWeek.render();
        calendarWeekContainer.closest('.tab-content').removeClass('active');
    </script>
</body>
</html>
