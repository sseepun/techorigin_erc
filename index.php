<!DOCTYPE html>
<html lang="th">
<head>
    <?php include_once('include/header.php'); ?>
    <?php include_once('include/style.php'); ?>

    <style>
        .banner-01 {position:relative; width:100%;}
        .banner-01 > .slide-container {position:relative; width:100%; padding:0;}
        .banner-01 .slide-container .slides .slide {position:relative;display:flex; justify-content:center;}
        .banner-01 .slide-container .slide .hero {display:block; width:100%; height:auto;}
        .banner-01 .slide-container .slide .text-wrapper {position:absolute; top:15%; }
        .banner-01 .dots {position:absolute; bottom:0;}
        .banner-01 .dots .slick-dots {padding: 0 0 0 8rem; list-style:none; display:flex; flex-wrap:wrap; align-items:center;}
        .banner-01 .dots li.slick-active button {  font-size:.9375rem; color:#fff; font-weight:100; padding:.5rem .625rem; background: #df660c; border-radius: 99999rem; width:auto; height:auto;}
        .banner-01 .dots li button {display:block; cursor:pointer; font-size: 0; background: #fff; border-radius: 50%; width:.625rem; height:.625rem; border:none; }
        .banner-01 .dots li {padding:.5625rem; display:flex; position:relative;}
        .banner-01 .dots li > .desc {position: absolute; font-weight:100; bottom: 100%; left:5rem; width:16.5rem; color:#fff;}
        .banner-01 .dots li.slick-active .text-yellow {color:#f1cb0b;}
        .banner-01 .dots li .text-yellow {color:transparent;}
        .banner-01 .dots li:first-child::after, .banner-01 .dots li:last-child::after {
            content: ''; position:absolute; height:1px; width:100vw; background-color:#fff; top:calc(50% - .5px);
        }
        .banner-01 .dots li.slick-active:first-child::after {right:100%;}
        .banner-01 .dots li.slick-active:last-child::after {left:100%;}
        .banner-01 .dots li:first-child::after{right:calc(100% - .5625rem);}
        .banner-01 .dots li:last-child::after {left:calc(100% - .5625rem);}
    </style>
</head>
<body class="loading policy-opened">
    <?php include_once('include/topnav.php'); ?>

    <section class="menubar-01" style="background-image:url('assets/img/hero/05.jpg');">
        <div class="wrapper">
            <div class="menu-icon">
                <a href="#">
                    <img src="assets/img/icon/05.png" alt="Icon" /> 
                    <div class="text">การกำกับกิจการพลังงาน</div>
                </a>
            </div>
            <div class="menu-icon">
                <a href="#">
                    <img src="assets/img/icon/06.png" alt="Icon" /> 
                    <div class="text">การขอรับใบอนุณาต/การแจ้งต่างๆ</div>
                </a>
            </div>
            <div class="menu-icon">
                <a href="#">
                    <img src="assets/img/icon/07.png" alt="Icon" /> 
                    <div class="text">กองทุนพัฒนาไฟฟ้า</div>
                </a>
            </div>
            <div class="menu-icon">
                <a href="#">
                    <img src="assets/img/icon/08.png" alt="Icon" /> 
                    <div class="text">สำนักงานประจำเขต</div>
                </a>
            </div>
            <div class="menu-icon">
                <a href="#">
                    <img src="assets/img/icon/09.png" alt="Icon" /> 
                    <div class="text">คณะกรรมการผู้ใช้พลังงานประจำเขต (คพข.)</div>
                </a>
            </div>
        </div>
    </section>

    <section class="banner-01">
        <div class="slide-container">
            <div class="slides">
                <?php for($i=1; $i<5;$i++){?>
<<<<<<< HEAD
                    <div class="slide" data-desc="<span class='text-yellow'><?php echo ($i%4 +1).'/4';?></span> ใครคือผู้อยู่เบื้องหลังในการดูแลพลังงานไทย">
                        <img src="./assets/img/bg/08.jpg" alt="banner">
=======
                    <div class="slide" data-desc="<span class='text-yellow'><?php echo ($i%4 +1).'/4';?></span>ใครคือผู้อยู่เบื้องหลังในการดูแลพลังงานไทย">
                        <img class="hero" src="./assets/img/bg/07.jpg" alt="banner" />
                        <img style="position:absolute; top:50%; width:10%; height:auto;" src="./assets/img/icon/play.png" alt="play-icon"  />
                        <div class="text-wrapper color-white text-center">
                            <h4 class="fw-100">หนังสั้นแนะนำ กกพ.</h4>
                            <h2 class="fw-400" style="margin-top:.25rem;">ตอนที่ 2 เคธี่ เท่าเทียมไม่ใช่เท่ากัน</h2>
                        </div>
>>>>>>> 4fe51d056effee1405fd3d700fe3bf0d85f4fff1
                    </div>
                <?php }?>
            </div>
            <div class="dots"></div>
        </div>
    </section>

    <section class="content-01 section-padding" style="background-image:url('assets/img/bg/01.jpg');">
        <div class="container">
            <h2 class="text-center">
                ทันสมัย ทันเหตุการณ์
            </h2>
            <h5 class="text-center">
                อัพเดทข่าวสารด้านพลังงาน กิจกรรมต่างๆ พร้อมทั้งแสดงข้อคิดเห็นได้ที่นี่
            </h5>
        </div>
        <div class="tab-container">
            <div class="tabs">
                <?php
                    $tabs = [
                        'กิจกรรม กกพ.', 'ข่าวประชาสัมพันธ์', 'รับฟังความคิดเห็น', 'ข่าวกิจกรรมทางสังคม', 
                        'ข่าวรับสมัครงาน', 'ประกาศจัดซื้อจัดจ้าง', 'สถิติพลังงาน'
                    ];
                    foreach($tabs as $i=>$d){
                ?>
                    <div class="tab <?php if($i==0)echo 'active'; ?>" data-tab="<?= $i ?>">
                        <a class="btn btn-round btn-ss" href="#">
                            <span><?= $d ?></span>
                        </a>
                    </div>
                <?php }?>
            </div>
            <div class="tab-contents">
                <?php foreach($tabs as $i=>$d){?>
                    <div class="tab-content <?php if($i==0)echo 'active'; ?>" data-tab="<?= $i ?>">
                        <div class="slide-container">
                            <div class="slides">
                                <?php for($j=0; $j<12; $j++){?>
                                    <div class="slide">
                                        <a class="ss-card" href="#">
                                            <div class="ss-img">
                                                <div class="img-bg" style="background-image:url('assets/img/content/0<?= $j%6+1 ?>.jpg');"></div>
                                            </div>
                                            <div class="text-wrapper text-center">
                                                <p class="title">
                                                    เอกสารประกอบการสัมมนา
                                                </p>
                                                <p class="desc">
                                                    เรื่อง “ภาพอนาคตอัตราค่าไฟฟ้าของไทย <br>
                                                    (Thailand Electricity Tariff Outlook)
                                                </p>
                                                <p class="date">
                                                    13 พฤศจิกายน 2563
                                                </p>
                                            </div>
                                        </a>
                                    </div>
                                <?php }?>
                            </div>
                            <div class="option-wrapper">
                                <div class="page-dots">
                                    <div class="page-arrows"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php }?>
            </div>
        </div>
        <div class="btns">
            <a class="btn btn-round btn-ss" href="#">
                <span>ดูรายละเอียดเพิ่มเติม</span>
            </a>
        </div>
    </section>

    <section class="content-02 section-padding" style="background-image:url('assets/img/bg/02.jpg');">
        <div class="container">
            <h1 class="text-center color-white">
                เทคโนโลยีพลังงานน้ำ
            </h1>
            <h6 class="text-center color-white">
                น้ำจะสามารถนำมาใช้ประโยชน์ได้ต้องมีการกักเก็บน้ำไว้ เพื่อเป็นการสะสมกำลัง โดยการก่อสร้างเขื่อนหรือฝายปิดลำน้ำที่มีระดับความสูงเป็นพลังงานศักย์ <br>
                และผันน้ำเข้าท่อไปยังเครื่องกังหันน้ำขับเครื่องกำเนิดไฟฟ้าพลังน้ำ
            </h6>
            <h4 class="text-center color-white">
                กำลังการผลิตรวมไฟฟ้าพลังงานน้ำของประเทศไทย
            </h4>
            <div class="grids">
                <div class="grid lg-25 xl-25">
                    <div class="stat text-center color-white">
                        <div class="icon-title">
                            <img src="assets/img/icon/01.png" alt="Icon" /> IPP
                        </div>
                        <div class="num">14,248,50<span>MW</span></div>
                    </div>
                </div>
                <div class="grid lg-25 xl-25">
                    <div class="stat text-center color-white">
                        <div class="icon-title">
                            <img src="assets/img/icon/02.png" alt="Icon" /> Foreign
                        </div>
                        <div class="num">5,720.60<span>MW</span></div>
                    </div>
                </div>
                <div class="grid lg-25 xl-25">
                    <div class="stat text-center color-white">
                        <div class="icon-title">
                            <img src="assets/img/icon/03.png" alt="Icon" /> SSP
                        </div>
                        <div class="num">9,473.94<span>MW</span></div>
                    </div>
                </div>
                <div class="grid lg-25 xl-25">
                    <div class="stat text-center color-white">
                        <div class="icon-title">
                            <img src="assets/img/icon/04.png" alt="Icon" /> EGAT
                        </div>
                        <div class="num">16,034.83<span>MW</span></div>
                    </div>
                </div>
            </div>
            <div class="btns">
                <a class="btn btn-round btn-ss btn-ss-03" href="#">
                    <span>ดูรายละเอียดเพิ่มเติม</span>
                </a>
            </div>
        </div>
    </section>

    <section class="call-01 section-padding" style="background-image:url('assets/img/bg/03.jpg');">
        <div class="container">
            <h1 class="text-center">
                พลังงานจากขยะ
            </h1>
            <h3 class="text-center">
                ต้นแบบโรงไฟฟ้าขยะชุมชลไร้มลพิษ แห่งแรกในไทย
            </h3>
            <h6 class="text-center">
                ถ้าให้มองสถานการณ์ของการผลิตไฟฟ้าแบบดั้งเดิมโดยใช้ก๊าซธรรมชาติ มันมีความเสี่ยงที่จะทำให้ในอนาคตประเทศไทย <br>
                จะเสี่ยงต่อการที่ค่าไฟจะขึ้นราคาไปมากกว่านี้ เพราะปริมาณก๊าซในอ่าวไทยที่เราผลิตได้เองก็ลดน้อยลงทุก ๆ ปี
            </h6>
            <div class="btns">
                <a class="btn btn-round btn-ss btn-ss-02" href="#">
                    <span>ดูรายละเอียดเพิ่มเติม</span>
                </a>
            </div>
        </div>
    </section>

    <section class="call-02 section-padding" style="background-image:url('assets/img/bg/04.jpg');">
        <div class="container">
            <h1 class="text-center color-white">
                ความมั่นคงของพลังงาน
            </h1>
            <h3 class="text-center color-white">
                ทั้งปัจจุบัน และอนาคต คือ หน้าที่ของเรา
            </h3>
            <h6 class="text-center color-white">
                กำกับดูแลประกอบกิจการพลังงานให้มีระบบการบริหารจัดการพลังงานให้มีความมั่นคงและเชื่อถือได้ มีประสิทธิภาพเป็นธรรม <br>
                ต่อผู้ใช้และผู้ประกอบกิจการพลังงาน ตลอดจนเป็นมิตรต่อสิ่งแวดล้อม
            </h6>
            <div class="btns">
                <a class="btn btn-round btn-ss btn-ss-04" href="#">
                    <span>ดูรายละเอียดเพิ่มเติม</span>
                </a>
            </div>
        </div>
    </section>

    <section class="section-padding bg-sgray overflow-hidden">
        <div class="container">
            <h1 class="text-center">
                ความรู้คู่พลังงานไทย 
            </h1>
            <h3 class="text-center">
                ต้นแบบโรงไฟฟ้าขยะชุมชนไร้มลพิษ แห่งแรกในไทย
            </h3>
            <h6 class="text-center">
                ถ้าให้มองสถานการณ์ของการผลิตไฟฟ้าแบบดั้งเดิมโดยใช้ก๊าซธรรมชาติ มันมีความเสี่ยงที่จะทำให้ในอนาคตประเทศไทย <br>
                จะเสี่ยงต่อการที่ค่าไฟจะขึ้นราคาไปมากกว่านี้ เพราะปริมาณก๊าซในอ่าวไทยที่เราผลิตได้เองก็ลดน้อยลงทุก ๆ ปี 
            </h6>
            <div class="btns">
                <a class="btn btn-round btn-ss btn-ss-02" href="#">
                    <span>ดูรายละเอียดเพิ่มเติม</span>
                </a>
            </div>
            <div class="grids jc-center mt-1">
                <div class="grid md-40">
                    <a class="ss-card-02" href="#">
                        <div class="ss-img">
                            <div class="img-bg" style="background-image:url('assets/img/content/07.jpg');"></div>
                        </div>
                        <div class="text-wrapper text-center">
                            <p class="title">
                                กกพ. รวมพลังแบ่งปันเพื่อสังคมปลูกป่าเพื่อ <br>
                                การพัฒนาอย่างยั่งยืน
                            </p>
                            <p class="desc">
                                เมื่อวันจันทร์ที่ 16 พฤศจิกายน 2563 นายกัลย์ แสงเรือง ผู้ช่วยเลขาธิการ
                                สำนักงาน กกพ. นางปนัดดา ดาราฉายผู้อำนวยการฝ่ายการเงินและ
                                บริหารงานทั่วไป
                            </p>
                            <p class="date">
                                13 พฤศจิกายน 2563
                            </p>
                        </div>
                    </a>
                </div>
                <div class="grid md-40">
                    <a class="ss-card-02" href="#">
                        <div class="ss-img">
                            <div class="img-bg" style="background-image:url('assets/img/content/08.jpg');"></div>
                        </div>
                        <div class="text-wrapper text-center">
                            <p class="title">
                                กกพ. รวมพลังแบ่งปันเพื่อสังคมปลูกป่าเพื่อ <br>
                                การพัฒนาอย่างยั่งยืน
                            </p>
                            <p class="desc">
                                เมื่อวันจันทร์ที่ 16 พฤศจิกายน 2563 นายกัลย์ แสงเรือง ผู้ช่วยเลขาธิการ
                                สำนักงาน กกพ. นางปนัดดา ดาราฉายผู้อำนวยการฝ่ายการเงินและ
                                บริหารงานทั่วไป
                            </p>
                            <p class="date">
                                13 พฤศจิกายน 2563
                            </p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section class="call-02 section-padding" style="background-image:url('assets/img/bg/05.jpg');">
        <div class="container">
            <h1 class="text-center color-white">
                พลังที่ทำให้เราสะดวกสบาย
            </h1>
            <h3 class="text-center color-white">
                มีน้ำไหล ไฟฟ้าสว่าง เพียงพอต่อความต้องการอย่างยั่งยืน
            </h3>
            <h6 class="text-center color-white">
                และมีการจัดสรรปันส่วนให้เราทุกคนได้ใช้พลังงานได้อย่างเท่าเทียม และมาตรฐานความปลอดภัยให้เป็นไปอย่างมีประสิทธิภาพ <br>
                มั่นคงมีปริมาฟรเพียงพอ สามารถตอบสนองความต้องการภายในประเทศ
            </h6>
            <div class="btns">
                <a class="btn btn-round btn-ss btn-ss-04" href="#">
                    <span>ดูรายละเอียดเพิ่มเติม</span>
                </a>
            </div>
        </div>
    </section>
    
    <?php include_once('include/footer.php'); ?>
    <?php include_once('include/script.php'); ?>
</body>
</html>
