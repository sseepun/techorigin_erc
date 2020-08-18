<!DOCTYPE html>
<html lang="th">
<head>
    <?php include_once('include/header.php'); ?>
    <?php include_once('include/style.php'); ?>
</head>
<body>
    <?php include_once('include/topnav.php'); ?>

    <section class="breadcrumb">
        <div class="container">
            <div class="wrapper">
                <div class="breadcrumb-container">
                    <a href="./">หน้าแรก</a>
                    <a href="#">คลังภาพ</a>
                </div>
            </div>
        </div>
    </section>

    <section class="section-padding">
        <div class="container">
            <div class="ss-header" data-aos="fade-up" data-aos-delay="0">
                <div class="ss">ค</div><h1 class="color4">ลังภาพ</h1>
                <p>อัพเดททุกสาระ ข่าวสารเพื่อสุขภาพ มั่นใจไม่ตกเทรนด์</p>
            </div>
            <div class="grids">
                <div class="grid sm-100 lg-70 xl-75">
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
                    <div class="grids">
                        <?php for($i=0; $i<12; $i++){?>
                            <div class="grid md-25 card">
                                <div class="ss-img square">
                                    <div class="img-bg" style="background-image:url('./assets/img/default/banner-01.jpg');"></div>
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
                    <div class="pagination border-top">
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
                        </div>
                    </div>
                </div>
                <div class="grid sm-100 lg-30 xl-25">
                    <!-- Slots -->
                    <div class="slots" style="background-image:url('./assets/img/default/banner-01.jpg');">
                        <div class="slot">
                            <div class="ss-header" data-aos="fade-up" data-aos-delay="0">
                                <div class="ss">ค</div><h1 class="color4">ลังภาพ</h1>
                                <p>อัพเดททุกสาระ ข่าวสารเพื่อสุขภาพ มั่นใจไม่ตกเทรนด์</p>
                            </div>
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
