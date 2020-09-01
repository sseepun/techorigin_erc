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
            [ 'name' => 'คลังภาพ', 'url' => '#' ]
        ];
        include_once('component/breadcrumb.php');
    ?>

    <section class="section-padding">
        <div class="container">
            <div class="ss-header" data-aos="fade-up" data-aos-delay="0">
                <div class="ss">ค</div><h1 class="color2">ลังภาพ</h1>
                <p><span class="fw-400">กรมอนามัย</span> อัพเดท รวบรวม ภาพกิจกรรมหรือข้อมูลเพื่อประชาชน</p>
            </div>
            <div class="grids">

                <div class="grid xl-75 lg-70 sm-100 md-100" data-aos="fade-up" data-aos-delay="300">
                    <?php include_once('component/list-header.php'); ?>

                    <div class="ss-carousel">
                        <div class="slides">
                            <?php for($i=1; $i<5; $i++){?>
                                <div class="slide">
                                    <div class="wrapper">
                                        <div class="ss-img no-hover ss-img-content" href="#">
                                            <div class="img-bg lazy-bg" data-src="./assets/img/bg/23.jpg"></div>
                                            <div class="contents">
                                                <div class="content content-img">
                                                    <img class="lazy-img" data-src="./assets/img/hero/24.png" alt="Hero Banner <?php echo $i; ?>" />
                                                </div>
                                                <div class="content content-text">
                                                    <div class="ss-icon-title no-margin">
                                                        <div class="icon bg-color4"><i class="fas fa-mail-bulk"></i></div>
                                                        <div class="text-wrapper">
                                                            <div class="ss-tags no-margin">
                                                                <div class="ss-tag type-5"></div>
                                                            </div>
                                                            <div class="ss-date no-margin">02.04.2563</div>
                                                        </div>
                                                    </div>
                                                    <h2 class="mt-0-5">
                                                        พักนัดทำฟัน ถ้าไม่ฉุกเฉิน! เพื่อความปลอดภัยจาก ‘COVID-19’
                                                    </h2>
                                                    <p class="mt-0-5">
                                                        ช่วงนี้ถ้าคุณลุงคุณป้าคุณตาคุณยาย มีนัดทำฟัน กับคุณหมอ หรืออยากไปทำฟัน 
                                                        แต่ไม่ใช่กรณีฉุกเฉิน ควรงดเว้นเอาไว้ก่อน เพราะการทำฟันนั้น
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
                                    <div class="img-num">120</div>
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
                    <div class="slots no-mask lazy-bg" data-src="./assets/img/bg/03.jpg">
                        <img class="float-img type-2" src="./assets/img/hero/08.png" alt="Slot Float Image 01" />
                        <div class="slot">
                            <h2 class="header-text quote-text quote-inline">
                                <span>คนไทย</span> <br>
                                <span class="text-xl fw-400 color1">ร่วมใจสู้ภัย</span> <br>
                                <span class="text-xl">โควิด-19</span>
                            </h2>
                        </div>
                        <img class="float-img type-3 lazy-img" data-src="./assets/img/hero/09.png" alt="Slot Float Image 02" />
                    </div>
                </div>

            </div>
        </div>
    </section>
    
    <?php include_once('include/footer.php'); ?>
    <?php include_once('include/script.php'); ?>
</body>
</html>
