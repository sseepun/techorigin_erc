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
            [ 'name' => 'RSS Feed', 'url' => '#' ]
        ];
        include_once('component/breadcrumb.php');
    ?>

    <section class="section-padding">
        <div class="container">
            <div class="ss-header" data-aos="fade-up" data-aos-delay="0">
                <div class="ss">RSS</div><h1 class="color2">Feed</h1>
                <p><strong>กรมอนามัย</strong> พร้อมให้ข้อมูลข่าวสารที่เป็นประโยชน์สำหรับคุณ</p>
            </div>
            <div class="grids">

                <div class="grid xl-75 lg-70 md-100 sm-100" data-aos="fade-up" data-aos-delay="300">
                    <?php for($i=0; $i<7; $i++){?>
                        <div class="bullet border-bottom">
                            <a class="ss-h4 fw-500 no-margin" href="#">
                                ประกาศประกวดราคาจ้างทำชุดของรางวัลก้าวท้าใจ ต้านภัย COVID-19 
                                ด้วยวิธีอิเล็กทรอนิกส์
                            </a>
                            <div class="ss-tags">
                                <div class="ss-tag type-<?php echo $i+1; ?>"></div>
                            </div>
                            <div class="ss-date color2">
                                02.04.2563
                            </div>
                            <p>
                                คอนโด หม่านโถว ไอติมชิฟฟอนอาข่าแตงกวาเซอร์ ม็อบซิ่งกรีนวีเจ 
                                เนิร์สเซอรี่เท็กซ์ไพลินไกด์ซะ อึ๋ม เพนกวินเช็งเม้งฟลุต บัตเตอร์ฮาโลวีนมายองเนสสปอร์ต 
                                เครปโดมิโนฟยอร์ดวิลล์ ชาร์ตเดอะสไตล์ ตาปรือกระดี๊กระด๊าอีสต์ เชฟซะมาเฟียโมจิ โฟม 
                                แชมพูแจ็กเก็ตรีเสิร์ชโบว์ลิ่ง...
                            </p>
                        </div>
                    <?php }?>

                    <?php $listFooterNoBorder = true; include_once('component/list-footer.php'); ?>
                </div>

                <div class="grid xl-25 lg-30 md-100 sm-100" data-aos="fade-up" data-aos-delay="600">
                    <div class="slots no-mask lazy-bg" data-src="./assets/img/bg/18.jpg">
                        <img class="float-img type-9" src="./assets/img/hero/20.png" alt="Slot Float Image 01" />
                        <div class="slot-tabs mt-0">
                            <?php for($i=0; $i<5; $i++){?>
                                <a class="slot-tab" href="#">
                                    <div class="icon bg-color3 color-white">
                                        <i class="far fa-building"></i>
                                    </div>
                                    <h5 class="mt-0 color-white">
                                        0<?php echo $i; ?>. <br>
                                        ข่าวจากหนังสือพิมพ์
                                    </h5>
                                </a>
                            <?php }?> 
                        </div>
                        <div class="slot mt-2">
                            <h2 class="header-text quote-text quote-inline">
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
</body>
</html>
