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

        </div>
    </section>
    
    <?php include_once('include/footer.php'); ?>
    <?php include_once('include/script.php'); ?>
</body>
</html>
