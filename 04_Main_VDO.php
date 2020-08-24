<!DOCTYPE html>
<html lang="th">
<head>
    <?php include_once('include/header.php'); ?>
    <?php include_once('include/style.php'); ?>
    <style>
        
    </style>
</head>
<body>
    <?php include_once('include/topnav.php'); ?>
    <?php
        $breadcrumb = [
            [ 'name' => 'หน้าแรก', 'url' => './' ],
            [ 'name' => 'คลิปวิดีโอ', 'url' => '#' ]
        ];
        include_once('component/breadcrumb.php');
    ?>

    <section class="section-padding">
        <div class="container">
            <div class="ss-header">
                <div class="ss">วิ</div><h1><span class="color2">ดีโอคลิป</span></h1>
                <p><strong>กรมอนามัย</strong> อัพเดท รวบรวมสื่อมัลติมีเดียเพื่อประชาชน</p>
            </div>
            <div class="grids">

                <div class="grid lg-75 md-100 sm-100">
                    <?php include_once('component/list-header.php'); ?>
                    
                    <!-- Banner 03 -->
                    <div class="banner-03">
                        <div class="slide-container">
                            <div class="slides">
                                <?php for($i=1; $i < 5; $i++){?>
                                    <div class="slide">
                                        <div class="wrapper">
                                            <div class="ss-video no-hover">
                                                <div class="img-bg lazy-bg" data-src="./assets/img/banner/0<?php echo $i; ?>.jpg"></div>
                                                <div class="play-container">
                                                    <div class="wrapper">
                                                        <iframe src="https://www.youtube.com/embed/BiVTSRSweEY"></iframe>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="ss-tags">
                                                <div class="ss-tag type-<?php echo $i % 11 + 1; ?>"></div>
                                            </div>
                                            <a class="ss-h2 no-margin" href="#">
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
                                    </div>
                                <?php }?> 
                            </div>
                            <div class="dots"></div>
                        </div>
                    </div>
                    
                    <div class="grids">
                        <?php for($i=0; $i<12; $i++){?>
                            <div class="grid md-25 ss-card-2">
                                <div class="ss-video square">
                                    <div class="img-bg lazy-bg" data-src="./assets/img/default/banner-01.jpg"></div>
                                    <div class="play-container">
                                        <a class="play-icon" href="https://www.youtube.com/watch?v=4NRXx6U8ABQ" data-fancybox>
                                            <i class="fas fa-play"></i>
                                        </a>
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

                <div class="grid lg-25 sm-100 md-100" data-aos="fade-up" data-aos-delay="600">
                    <div class="slots bg-color4">
                        <div class="slot bg-color4">

                            <div class="ss-header color-white">
                                <div class="ss">อั</div><h1 class="fw-300">ลบั้มภาพ</h1>
                                <p>พร้อมอัพเดท</p>
                            </div>
                            <p class="color-white no-margin">สาระสุขภาพทันสมัยให้คุณเข้าใจง่าย</p>
                            <h2 class="color1 no-margin">ไม่ตกเทรนด์!</h2>

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
