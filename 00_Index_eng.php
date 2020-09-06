<!DOCTYPE html>
<html lang="th">
<head>
    <?php include_once('include/header.php'); ?>
    <?php include_once('include/style.php'); ?>
</head>
<body class="lang_en">
    <?php include_once('include/topnav.php'); ?>

    <section class="banner-01">
        <div class="slide-container">
            <div class="slides">
                <?php for($i=0; $i<8; $i++){?>
                    <div class="slide lazy-bg" data-src="./assets/img/banner/01.jpg">
                        <div class="container">
                            <h2 class="animate" style="--delay:.6s;">
                                new gen
                            </h2>
                            <h1 class="animate" style="--delay:.75s;">
                                NEW NORMAL
                            </h1>
                            <h3 class="animate" style="--delay:.9s;">
                                ปลอดภัยห่างไกล 
                                <span class="line" style="--delay:1.5s;"></span> 
                                COVID-19
                            </h3>
                        </div>
                    </div>
                <?php }?>
            </div>
            <div class="dots"></div>
        </div>
    </section>

    <section class="content-01" data-aos="fade-up" data-aos-delay="0">
        <div class="container">
            <div class="contents jc-end">
                <?php for($i=0; $i<2; $i++){?>
                    <a class="content" href="#">
                        <div class="wrapper">
                            <div class="text-container">
                                <h6>Download Document</h6>
                            </div>
                            <div class="banner">
                                <i class="icon far fa-chart-bar"></i>
                            </div>
                            <div class="order"><?php echo sprintf('%02d', $i+1); ?></div>
                        </div>
                    </a>
                <?php }?>
            </div>
        </div>
    </section>

    <section class="section-padding">
        <div class="container">

            <!-- Special Header -->
            <div class="ss-header" data-aos="fade-up" data-aos-delay="0">
                <div class="ss">N</div><h1>ews & Update</h1>
                <p>อัพเดททุกสาระ ข่าวสารเพื่อสุขภาพ มั่นใจไม่ตกเทรนด์</p>
            </div>

            <div class="grids">
                <div class="grid sm-100 lg-70 xl-75" data-aos="fade-up" data-aos-delay="300">

                    <!-- Tab -->
                    <div class="tab-container">
                        <div class="tabs">
                            <div class="tab active" data-tab="1">
                                <div class="icon"><i class="far fa-building"></i></div>
                                <div class="text-container">
                                    <div class="title">
                                        <span>01.</span> ข่าวจากหน่วยงานส่วนกลาง
                                    </div>
                                    <div class="desc">กรมอนามัย</div>
                                </div>
                            </div>
                            <div class="tab" data-tab="2">
                                <div class="icon"><i class="far fa-building"></i></div>
                                <div class="text-container">
                                    <div class="title">
                                        <span>02.</span> ข่าวจากหน่วยงานส่วนกลาง
                                    </div>
                                    <div class="desc">กรมอนามัย</div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-contents">

                            <div class="tab-content active" data-tab="1">
                                <div class="card card-lg">
                                    <a class="ss-img" href="#">
                                        <div class="img-bg lazy-bg" data-src="./assets/img/content/01.jpg"></div>
                                        <div class="tag">
                                            <div class="date">28</div>
                                            <div class="text-container">
                                                <div class="month">กรกฎาคม</div>
                                                <div class="year">2563</div>
                                            </div>
                                        </div>
                                    </a>
                                    <div class="ss-tags">
                                        <div class="ss-tag type-1"></div>
                                        <div class="ss-tag type-2"></div>
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
                                </div>
                                <div class="card card-lg mt-2">
                                    <a class="ss-img" href="#">
                                        <div class="img-bg lazy-bg" data-src="./assets/img/content/01.jpg"></div>
                                        <div class="tag">
                                            <div class="date">28</div>
                                            <div class="text-container">
                                                <div class="month">กรกฎาคม</div>
                                                <div class="year">2563</div>
                                            </div>
                                        </div>
                                    </a>
                                    <div class="ss-tags">
                                        <div class="ss-tag type-1"></div>
                                        <div class="ss-tag type-2"></div>
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
                                </div>
                                <!-- Pagination -->
                                <div class="pagination">
                                    <div class="wrapper">
                                        <a href="#" class="page-btn page-first disabled"></a>
                                        <a href="#" class="page-btn page-prev disabled"></a>
                                        <a href="#" class="page-btn active">01</a>
                                        <a href="#" class="page-btn">02</a>
                                        <a href="#" class="page-btn">03</a>
                                        <a href="#" class="page-btn">04</a>
                                        <a href="#" class="page-btn">05</a>
                                        <a href="#" class="page-btn page-next"></a>
                                        <a href="#" class="page-btn page-last"></a>
                                        <a class="btn btn-action btn-sm btn-primary next-icon" href="#">
                                            More News & Update
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-content" data-tab="2">
                                <div class="card card-lg">
                                    <a class="ss-img" href="#">
                                        <div class="img-bg lazy-bg" data-src="./assets/img/content/01.jpg"></div>
                                        <div class="tag">
                                            <div class="date">28</div>
                                            <div class="text-container">
                                                <div class="month">กรกฎาคม</div>
                                                <div class="year">2563</div>
                                            </div>
                                        </div>
                                    </a>
                                    <div class="ss-tags">
                                        <div class="ss-tag type-1"></div>
                                        <div class="ss-tag type-2"></div>
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
                                </div>
                                <div class="card card-lg mt-2">
                                    <a class="ss-img" href="#">
                                        <div class="img-bg lazy-bg" data-src="./assets/img/content/01.jpg"></div>
                                        <div class="tag">
                                            <div class="date">28</div>
                                            <div class="text-container">
                                                <div class="month">กรกฎาคม</div>
                                                <div class="year">2563</div>
                                            </div>
                                        </div>
                                    </a>
                                    <div class="ss-tags">
                                        <div class="ss-tag type-1"></div>
                                        <div class="ss-tag type-2"></div>
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
                                </div>
                                <!-- Pagination -->
                                <div class="pagination">
                                    <div class="wrapper">
                                        <a href="#" class="page-btn page-first disabled"></a>
                                        <a href="#" class="page-btn page-prev disabled"></a>
                                        <a href="#" class="page-btn active">01</a>
                                        <a href="#" class="page-btn">02</a>
                                        <a href="#" class="page-btn">03</a>
                                        <a href="#" class="page-btn">04</a>
                                        <a href="#" class="page-btn">05</a>
                                        <a href="#" class="page-btn page-next"></a>
                                        <a href="#" class="page-btn page-last"></a>
                                        <a class="btn btn-action btn-sm btn-primary next-icon" href="#">
                                            More News & Update
                                        </a>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>

                <div class="grid sm-100 lg-30 xl-25" data-aos="fade-up" data-aos-delay="600">
                    <!-- Slots -->
                    <div class="slots">

                        <div class="slot lazy-bg" data-src="./assets/img/bg/37.jpg">
                            <div class="ss-header color-white-info">
                                <div class="ss">วี</div><h1 class="fw-300">ดิโอ</h1>
                                <p>& สื่อมัลติมีเดีย</p>
                            </div>
                            <div class="ss-video bradius-0">
                                <div class="img-bg lazy-bg" data-src="./assets/img/default/banner-01.jpg"></div>
                                <div class="play-container">
                                    <a class="play-icon" href="https://www.youtube.com/watch?v=4NRXx6U8ABQ" data-fancybox>
                                        <i class="fas fa-play"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="ss-tags">
                                <div class="ss-tag type-3"></div>
                                <div class="ss-tag type-4"></div>
                            </div>
                            <div class="ss-date color-white">02.04.2563</div>
                            <a class="ss-h3 color-white" href="#">
                                การปฏิบัติด้านสุขอนามัยในห้างสรรพสินค้าและศูนย์การค้า
                            </a>
                            <p class="color-white">
                                ห้างสรรพสินค้าและศูนย์การค้าเป็นแหล่งนัดพบที่มีคนมาใช้บริการมากมาย...
                            </p>
                            <div class="btns">
                                <a class="btn btn-action btn-secondary next-icon" href="#">
                                    ดูวิดีโอทั้งหมด
                                </a>
                            </div>
                        </div>
                        
                        <img class="img-simple lazy-img" data-src="./assets/img/bg/36.jpg" alt="Simple Image 01" />

                        <!-- Calendar -->
                        <div class="calendar-container border-bottom">
                            <div class="calendar-wrapper"></div>
                        </div>
                        <div class="btns text-center">
                            <a class="btn btn-action btn-primary next-icon" href="#">
                                หน้าปฏิทินทั้งหมด
                            </a>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </section>

    <section class="call-02">
        <div class="container">
            <div class="contents" data-aos="fade-up" data-aos-delay="0">
                <div class="content">
                    <a class="ss-h5 fw-400" href="#">
                        ลิงค์หน่วยงานภายในกระทรวงสาธารณสุข
                    </a>
                </div>
                <div class="content">
                    <div class="menu">
                        <div class="hamburger">
                            <div></div><div></div><div></div>
                        </div>
                        <h5 class="fw-400">
                            ลิงค์หน่วยงานภายนอกกระทรวงสาธารณสุข
                        </h5>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="client-01">
        <div class="container">
            <div class="clients" data-aos="fade-up" data-aos-delay="0">
                <?php for($i=0; $i<6; $i++){?>
                    <a class="client" href="#">
                        <img class="lazy-img" data-src="./assets/img/default/client-01.jpg" alt="Client 01 <?php echo $i; ?>" />
                        <h6 class="name">
                            ศาลปกครอง <br>
                            สาระดีดีจากศาลปกครอง
                        </h6>
                    </a>
                <?php }?>
            </div>
        </div>
    </section>
    
    <?php include_once('include/footer.php'); ?>
    <?php include_once('include/script.php'); ?>
</body>
</html>
