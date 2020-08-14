<!DOCTYPE html>
<html lang="en">
<head>
    <?php include_once('include/header.php'); ?>
    <?php include_once('include/style.php'); ?>
<style>

</style>
</head>
<body>
    <?php include_once('include/topnav.php'); ?>

    <!-- Banner 01 -->
    <section class="banner-01">
        <div class="slide-container">
            <div class="slides">
                <?php for($i=0; $i<8; $i++){?>
                    <div class="slide" style="background-image:url('./assets/img/banner/01.jpg');">
                        <div class="container">
                            <h2 class="animate" style="--delay:.6s;">
                                new gen
                            </h2>
                            <h1 class="animate" style="--delay:.75s;">
                                NEW NORMAL
                            </h1>
                            <h3 class="animate" style="--delay:.9s;">
                                ปลอดภัยห่างไกล <span class="line"></span> COVID-19
                            </h3>
                        </div>
                    </div>
                <?php }?>
            </div>
            <div class="dots"></div>
        </div>
    </section>

    <!-- Content 01 -->
    <!-- <section class="content-01">
        <div class="container">
            <div class="contents">
                <?php for($i=0; $i<8; $i++){?>
                    <a class="content" href="#">
                        <div class="wrapper">
                            <div class="banner">
                                <i class="icon far fa-chart-bar"></i>
                                <div class="order"><?php echo sprintf('%02d', $i+1); ?></div>
                            </div>
                            <div class="text-container">
                                <h1>ระเบียงคุณธรรม</h1>
                            </div>
                        </div>
                    </a>
                <?php }?>
            </div>
        </div>
    </section> -->

    <section style="padding:4rem 0;">
        <div class="container">

            <!-- Special Header -->
            <div class="ss-header">
                <div class="ss">ข่</div><h1>าวประชาสัมพันธ์</h1>
                <p>อัพเดททุกสาระ ข่าวสารเพื่อสุขภาพ มั่นใจไม่ตกเทรนด์</p>
            </div>

            <div class="grids">
                <div class="grid sm-100 lg-70 xl-75">

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
                            <div class="tab" data-tab="3">
                                <div class="icon"><i class="far fa-building"></i></div>
                                <div class="text-container">
                                    <div class="title">
                                        <span>03.</span> ข่าวจากหน่วยงานส่วนกลาง
                                    </div>
                                    <div class="desc">กรมอนามัย</div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-contents">

                            <div class="tab-content active" data-tab="1">
                                <div class="card card-lg">
                                    <a class="ss-img" href="#">
                                        <div class="img-bg" style="background-image:url('./assets/img/content/01.jpg');"></div>
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
                                    <div class="btns">
                                        <a class="btn btn-action btn-primary next-icon" href="#">
                                            อ่านรายละเอียด
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-content" data-tab="2">
                                <div class="card card-lg">
                                    <a class="ss-img" href="#">
                                        <div class="img-bg" style="background-image:url('./assets/img/default/banner-01.jpg');"></div>
                                        <div class="tag">
                                            <div class="date">29</div>
                                            <div class="text-container">
                                                <div class="month">กรกฎาคม</div>
                                                <div class="year">2563</div>
                                            </div>
                                        </div>
                                    </a>
                                    <div class="ss-tags">
                                        <div class="ss-tag type-3"></div>
                                        <div class="ss-tag type-4"></div>
                                        <div class="ss-tag type-5"></div>
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

                            <div class="tab-content" data-tab="3">
                                <div class="card card-lg">
                                    <a class="ss-img" href="#">
                                        <div class="img-bg" style="background-image:url('./assets/img/default/banner-01.jpg');"></div>
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
                    
                    <!-- Special Header -->
                    <div class="ss-header">
                        <div class="ss">อั</div><h1>พเดทข่าวสารอื่นๆ</h1>
                        <p>อัพเดททุกสาระ ข่าวสารเพื่อสุขภาพ มั่นใจไม่ตกเทรนด์</p>
                    </div>
                    
                    <!-- Cards -->
                    <div class="grids">
                        <?php for($i=0; $i<4; $i++){?>
                            <div class="grid md-25 card">
                                <div class="ss-img square">
                                    <div class="img-bg" style="background-image:url('./assets/img/content/01.jpg');"></div>
                                    <div class="socials">
                                        <ul>
                                            <li><a class="social social-fw" href="#">
                                                <i class="fab fa-facebook-f"></i>
                                            </a></li>
                                            <li><a class="social social-tw" href="#">
                                                <i class="fab fa-twitter"></i>
                                            </a></li>
                                            <li><a class="social social-ig" href="#">
                                                <i class="fab fa-instagram"></i>
                                            </a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="ss-tags">
                                    <div class="ss-tag type-6"></div>
                                </div>
                                <div class="ss-date">02.04.2563</div>
                                <a class="ss-h5" href="#">
                                    กรมอนามัย แนะ 10 วิธีกินแบบพอเพียงช่วงโควิด 19
                                    สร้างร่างกายแข็งแรง ไร้พุง
                                </a>
                                <div class="btns">
                                    <a class="btn btn-action btn-sm btn-primary next-icon" href="#">
                                        อ่านรายละเอียด
                                    </a>
                                </div>
                            </div>
                        <?php }?>
                    </div>

                    <!-- Pagination -->
                    <div class="pagination">

                    </div>

                </div>

                <div class="grid sm-100 lg-30 xl-25" style="background:orange;">

                </div>
            </div>

        </div>
    </section>
    
    <?php include_once('include/footer.php'); ?>
    <?php include_once('include/script.php'); ?>
</body>
</html>
