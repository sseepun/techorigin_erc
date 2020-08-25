<!DOCTYPE html>
<html lang="th">
<head>
    <?php include_once('include/header.php'); ?>
    <?php include_once('include/style.php'); ?>
    <style>
        .info-block .view {margin:.625rem 0 0 0;}
        .info-block .ss-date, .info-block .view {display:inline-block; width:100%;}
        .info-block .icon {margin-right:.625rem; display:inline-block;}
        .info-block .icon i{ width:1.25rem; height:1.25rem; display:flex; justify-content:center; align-items:center; color:#e2e2e2; background: #47484d; font-size:.75rem; padding:.25rem; border-radius: 50%; }
    </style>
</head>
<body>
    <?php include_once('include/topnav.php'); ?>
    <?php
        $breadcrumb = [
            [ 'name' => 'หน้าแรก', 'url' => './' ],
            [ 'name' => 'ผลการค้นหา', 'url' => '#' ]
        ];
        include_once('component/breadcrumb.php');
    ?>

    <section class="section-padding">
        <div class="container">
            <div class="ss-header">
                <div class="ss">ผ</div><h1 class="color2">ลการค้นหา</h1>
                <p><strong>กรมอนามัย</strong> พร้อมให้ข้อมูลข่าวสารที่เป็นประโยชน์สำหรับคุณ</p>
            </div>
            <div class="grids">
                <div class="grid xl-75 lg-75 md-100 sm-100">
                    <?php for($i=0; $i<9; $i++){?>
                        <div class="ss-card pt-1-5 pb-1-5 border-bottom">
                            <div class="grids">
                                <div class="grid lg-20 mt-0">
                                    <div class="ss-img square">
                                        <div class="img-bg lazy-bg" data-src="./assets/img/content/01.jpg"></div>
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
                                </div>
                                <div class="grid lg-60 mt-0">
                                    <p class="mt-0"><strong>7 สัปดาห์ สุขภาพดี หุ่นดี ที่บ้าน</strong></p>
                                    <p class="mt-0">
                                        คอนโด หม่านโถว ไอติมชิฟฟอนอาข่าแตงกวาเซอร์ ม็อบซิ่งกรีนวีเจ 
                                        เนิร์สเซอรี่เท็กซ์ไพลินไกด์ซะ อึ๋ม เพนกวินเช็งเม้งฟลุต บัตเตอร์ฮาโลวีนมายองเนสสปอร์ต 
                                        เครปโดมิโนฟยอร์ดวิลล์ ชาร์ตเดอะสไตล์ ตาปรือกระดี๊กระด๊าอีสต์
                                    </p>
                                </div>
                                <div class="grid lg-20 mt-0">
                                    <div class="info-block">
                                        <p class="mt-0"><strong>ประเภท</strong></p>
                                        <div class="ss-tags">
                                            <div class="ss-tag type-4"></div>
                                        </div>
                                        <div class="ss-date"><div class="icon"><i class="fas fa-clock"></i></div>02.04.2563</div>
                                        <div class="view"><div class="icon"><i class="fas fa-eye"></i></div>202</div>
                                    </div>  
                                </div>
                            </div>
                        </div>
                    <?php }?>
                </div>
                <div class="grid sm-100 lg-25" data-aos="fade-up" data-aos-delay="600">
                    <div class="slots bg-color4">
                        <div class="slot">
                            
                            <h2 class="header-text quote-text quote-inline">
                                คนไทย <br>
                                <span class="text-xl fw-400 color1">ร่วมใจสู้ภัย</span> <br>
                                <span class="text-xl">โควิด-19</span>
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