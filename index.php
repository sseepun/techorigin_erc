<!DOCTYPE html>
<html lang="en">
<head>
    <?php include_once('include/header.php'); ?>
    <?php include_once('include/style.php'); ?>
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

            <div class="ss-header">
                <div class="ss">ข่</div><h1>าวประชาสัมพันธ์</h1>
                <p>อัพเดททุกสาระ ข่าวสารเพื่อสุขภาพ มั่นใจไม่ตกเทรนด์</p>
            </div>

            <div class="grids">
                <div class="grid sm-100 lg-70 xl-75">
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
                                <h1>Tab 1</h1>
                            </div>

                            <div class="tab-content" data-tab="2">
                                <h1>Tab 2</h1>
                            </div>

                            <div class="tab-content" data-tab="3">
                                <h1>Tab 3</h1>
                            </div>

                        </div>
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
