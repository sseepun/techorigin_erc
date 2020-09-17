<!DOCTYPE html>
<html lang="th">
<head>
    <?php include_once('include/header.php'); ?>
    <?php include_once('include/style.php'); ?>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.2/fullcalendar.min.css" />
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
                                <div id="calendar"></div>
                            </div>

                            <div class="tab-content" data-tab="3">
                                <div class="card card-lg">
                                    <a class="ss-img" href="#">
                                        <div class="img-bg lazy-bg" data-src="./assets/img/default/banner-01.jpg"></div>
                                        <div class="tag">
                                            <div class="date">30</div>
                                            <div class="text-container">
                                                <div class="month">กรกฎาคม</div>
                                                <div class="year">2563</div>
                                            </div>
                                        </div>
                                    </a>
                                    <div class="ss-tags">
                                        <div class="ss-tag type-6"></div>
                                        <div class="ss-tag type-7"></div>
                                        <div class="ss-tag type-8"></div>
                                        <div class="ss-tag type-9"></div>
                                    </div>
                                    <div class="ss-date">02.04.2563</div>
                                    <a class="ss-h2" href="#">
                                        กรมอนามัย แนะ <span class="color1">10 วิธีกินแบบพอเพียงช่วงโควิด 19</span>
                                        สร้างร่างกายแข็งแรง ไร้พุง
                                    </a>
                                    <p>
                                        คอนโด หม่านโถว ไอติมชิฟฟอนอาข่าแตงกวาเซอร์ ม็อบซิ่งกรีนวีเจ 
                                        เนิร์สเซอรี่เท็กซ์ไพลินไกด์ซะ อึ๋ม เพนกวินเช็งเม้งฟลุต บัตเตอร์ฮาโลวีนมายองเนสสปอร์ต 
                                        เครปโดมิโนฟยอร์ดวิลล์ ชาร์ตเดอะสไตล์ ตาปรือกระดี๊กระด๊าอีสต์ เชฟซะมาเฟียโมจิ โฟม 
                                        แชมพูแจ็กเก็ตรีเสิร์ชโบว์ลิ่ง...
                                    </p>
                                    <div class="btns">
                                        <a class="btn btn-action btn-primary next-icon" href="#">
                                            อ่านรายละเอียด
                                        </a>
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
    <link href="https://dpstframework.com/lib/fullcalendar-4.4.0/packages/core/main.min.css" rel="stylesheet">
    <link href="https://dpstframework.com/lib/fullcalendar-4.4.0/packages/daygrid/main.min.css" rel="stylesheet">
    <script src="https://dpstframework.com/lib/fullcalendar-4.4.0/packages/core/main.min.js"></script>
    <script src="https://dpstframework.com/lib/fullcalendar-4.4.0/packages/daygrid/main.min.js"></script>
    <script src="https://dpstframework.com/lib/fullcalendar-4.4.0/packages/core/locales/th.js"></script>
    <script>
        var colors = [
            '#0061ae', '#2980b9', '#3498db', '#16a085', '#1abc9c', '#27ae60',
            '#2ecc71', '#f1c40f', '#e67e22', '#e84c3d', '#c0392b', '#990033'
        ];
        var months = [
            'มกราคม', 'กุมภาพันธ์', 'มีนาคม', 'เมษายน', 'พฤษภาคม', 'มิถุนายน',
            'กรกฎาคม', 'สิงหาคม', 'กันยายน', 'ตุลาคม', 'พฤศจิกายน', 'ธันวาคม'
        ];

        var calendar = new FullCalendar.Calendar($('#calendar')[0], {
            plugins: [ 'dayGrid' ],
            timeZone: 'UTC',
            locale: 'th', 
            defaultView: 'dayGridMonth',
            events: [
                {
                    title: 'การทำโครงงานของนักเรียน ม.4',
                    start: '2020-07-10',
                    end: '2020-07-23',
                    url: 'module-hss/task-group-view/?id=ajNqMnBBZFVLaVNJdVp4MVJkWlFnNi9kVGkvSTNwQTJnOHM1bkk4ZGN0OD0=',
                    backgroundColor: colors[Number('0') % colors.length],
                    borderColor: colors[Number('0') % colors.length]
                },
            ],
            eventClick: function(info){
                info.jsEvent.preventDefault();
                if(info.event.url) window.open(info.event.url);
            }
        });
        calendar.render();
    </script>
</body>
</html>
