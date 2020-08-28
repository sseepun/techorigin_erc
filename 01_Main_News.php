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
            [ 'name' => 'ข่าวประชาสัมพันธ์', 'url' => '#' ]
        ];
        include_once('component/breadcrumb.php');
    ?>
    
    <section class="section-padding">
        <div class="container">
            <div class="ss-header" data-aos="fade-up" data-aos-delay="0">
                <div class="ss">ข่</div><h1 class="color2">าวประชาสัมพันธ์</h1>
                <p><span class="fw-600">กรมอนามัย</span> พร้อมให้ข้อมูลข่าวสารที่มีประโยชน์สำหรับคุณ</p>
            </div>
            <div class="grids">

                <div class="grid xl-75 lg-70 md-100 sm-100" data-aos="fade-up" data-aos-delay="300">
                    <?php include_once('component/list-header.php'); ?>
                    
                    <div class="ss-carousel">
                        <div class="slides">
                            <?php for($i=1; $i<5; $i++){?>
                                <div class="slide">
                                    <div class="wrapper">
                                        <a class="ss-img" href="#">
                                            <div class="img-bg lazy-bg" data-src="./assets/img/banner/0<?php echo $i; ?>.jpg"></div>
                                            <div class="tag">
                                                <div class="date">28</div>
                                                <div class="text-container">
                                                    <div class="month">กรกฎาคม</div>
                                                    <div class="year">2563</div>
                                                </div>
                                            </div>
                                        </a>
                                        <div class="ss-tags">
                                            <div class="ss-tag type-6"></div>
                                        </div>
                                        <a href="#" class="ss-h2">
                                            การจัดการด้านอาหารและโภชนาการช่วง 14 วันที่ต้องอยู่บ้าน
                                        </a>
                                        <p>
                                            สถานการณ์โรคติดเชื้อไวรัสโคโรนา 2019 หรือ COVID-19 ระบาด 
                                            ประชาชนควรอยู่ที่บ้าน 14 วัน เพื่อเฝ้าระวังอาการ
                                            นอกจากจะไม่ใช้ของส่วนตัวร่วมกับผู้อื่นแล้ว ต้องเลือกปรุงและกินอาหารให้เหมาะสม 
                                            ถูกหลักโภชนาการ โดยกินอาหารที่มีประโยชน์หลากหลาย
                                        </p>
                                    </div>
                                </div>
                            <?php }?> 
                        </div>
                        <div class="dots"></div>
                    </div>

                    <div class="grids">
                        <?php for($i=0; $i<12; $i++){?>
                            <div class="grid md-25 ss-card-2">
                                <div class="ss-img square">
                                    <div class="img-bg lazy-bg" data-src="./assets/img/default/banner-01.jpg"></div>
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
                                    <div class="ss-tag type-<?php echo $i % 11 + 1; ?>"></div>
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
                        
                    <?php include_once('component/list-footer.php'); ?>
                </div>

                <div class="grid xl-25 lg-30 md-100 sm-100" data-aos="fade-up" data-aos-delay="600">
                    <div class="slots no-mask lazy-bg" data-src="./assets/img/bg/04.jpg">
                        <img class="float-img" src="./assets/img/hero/07.png" alt="Slot Float Image" />
                        <div class="slot-tabs">
                            <h4 class="title color-white">หมวดหมู่</h4>
                            <?php for($i=0; $i<4; $i++){?>
                                <a class="slot-tab" href="#">
                                    <h5 class="mt-0 color-white">
                                        0<?php echo "$i"; ?>. <br>
                                        ข่าวจากหนังสือพิมพ์ <br>
                                        <span class="text-xs">กรมอนามัย</span>
                                    </h5>
                                </a>
                            <?php }?> 
                        </div>
                        <div class="slot mt-2">
                            <h2 class="header-text quote-text">
                                <span class="fw-400">กรรมอนามัย</span> <br>
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
</body>
</html>
