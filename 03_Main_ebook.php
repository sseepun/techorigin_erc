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
            [ 'name' => 'วารสารออนไลน์สุขภาพ', 'url' => '#' ]
        ];
        include_once('component/breadcrumb.php');
    ?>

    <section class="section-padding">
        <div class="container">
            <div class="ss-header">
                <div class="ss">ว</div><h1><span class="color2">ารสารออนไลน์สุขภาพ</span> 
                    <span class="fw-300 text-xs">| 04. แม่และเด็ก</span>
                </h1>
                <p><strong>กรมอนามัย</strong> ส่งมอบความรู้ที่ถูกต้อง เหมาะสมในวิถีชีวิตสู่การสุขภาพดี</p>
            </div>
            <div class="grids">
                
                <div class="grid xl-75 lg-70 md-100 sm-100">
                    <div class="list-header">
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
                        <div class="block">
                            <div class="text-wrapper">
                                เรียงลำดับข้อมูล 
                                <select class="order mr-0">
                                    <option value="newest">ที่มาใหม่</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="ss-carousel">
                        <div class="slides">
                            <?php for($i=1; $i<5; $i++){?>
                                <div class="slide">
                                    <div class="wrapper">
                                        <div class="ss-img no-hover ss-img-content" href="#">
                                            <div class="img-bg lazy-bg" data-src="./assets/img/bg/27.jpg"></div>
                                            <div class="contents">
                                                <div class="content content-img">
                                                    <img class="lazy-img" data-src="./assets/img/hero/29.png" alt="Hero Banner <?php echo $i; ?>" />
                                                </div>
                                                <div class="content content-text">
                                                    <div class="ss-icon-title no-margin">
                                                        <div class="icon bg-color1"><i class="fas fa-book"></i></div>
                                                        <div class="text-wrapper">
                                                            <div class="ss-tags no-margin">
                                                                <div class="ss-tag type-9"></div>
                                                            </div>
                                                            <div class="ss-date no-margin">02.04.2563</div>
                                                        </div>
                                                    </div>
                                                    <h2 class="mt-0-5">
                                                        7 สัปดาห์ รอบรู้สู่สุขภาพดี Moving forward to fitness
                                                    </h2>
                                                    <p class="mt-0-5">
                                                        “7 สัปดาห์รอบรู้สู่สุขภาพดี” เป็นคู่มือแนวทางการดูแลสุขภาพ ที่ให้ความรู้ที่ถูกต้อง 
                                                        เหมาะสมในวิถีชีวิตสู่การสุขภาพดี ประกอบด้วย การประเมินควา…
                                                    </p>
                                                    <div class="btns">
                                                        <a class="btn btn-action btn-primary next-icon" href="#">
                                                            รายละเอียด
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
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
                    <div class="slots no-mask lazy-bg" data-src="./assets/img/bg/14.jpg">
                        <img class="float-img type-7" src="./assets/img/hero/16.png" alt="Slot Float Image 01" />
                        <div class="slot-tabs mt-0">
                            <h4 class="title color-white">หมวดหมู่</h4>
                            <?php for($i=0; $i<12; $i++){?>
                                <a class="slot-tab" href="#">
                                    <h5 class="mt-0 color-white">
                                        <?php echo sprintf('%02d', $i+1); ?>. <br>
                                        ข่าวจากหนังสือพิมพ์
                                    </h5>
                                </a>
                            <?php }?> 
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