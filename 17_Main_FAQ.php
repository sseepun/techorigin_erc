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
            [ 'name' => 'คำถามที่พบบ่อย', 'url' => '#' ]
        ];
        include_once('component/breadcrumb.php');
    ?>
    
    <section class="section-padding">
        <div class="container">
            <div class="ss-header" data-aos="fade-up" data-aos-delay="0">
                <div class="ss">คำ</div><h1><span class="color2">ถามที่พบบ่อย</span>
                    <span class="fw-300 text-xs">| 02. สุขภาพจิตร</span>
                </h1>
                <p>ตอบปัญหาไขข้อข้องใจด้านสุขภาพ</p>
            </div>
            <div class="grids">

                <div class="grid xl-75 lg-70 sm-100">
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
                            <a class="btn btn-action btn-secondary next-icon" href="#">
                                ติดต่อสอบถาม
                            </a>
                        </div>
                    </div>

                    <div class="faq-01">
                        <?php for($i=0; $i<10; $i++){?>
                            <div class="faq">
                                <div class="question">
                                    <div class="icon">Q</div>
                                    <h4 class="fw-400">
                                        กรมอนามัย แนะ 10 วิธีกินแบบพอเพียงช่วงโควิด 19 สร้างร่างกายแข็งแรง ไร้พุง
                                    </h4>
                                </div>
                                <div class="wrapper">
                                    <div class="answer">
                                        <div class="icon">A</div>
                                        <p>
                                            คอนโด หม่านโถว ไอติมชิฟฟอนอาข่าแตงกวาเซอร์ ม็อบซิ่งกรีนวีเจ 
                                            เนิร์สเซอรี่เท็กซ์ไพลินไกด์ซะ อึ๋ม เพนกวินเช็งเม้งฟลุต บัตเตอร์ฮาโลวีนมายองเนสสปอร์ต 
                                            เครปโดมิโนฟยอร์ดวิลล์ ชาร์ตเดอะสไตล์ ตาปรือกระดี๊กระด๊าอีสต์ เชฟซะมาเฟียโมจิ โฟม 
                                            แชมพูแจ็กเก็ตรีเสิร์ชโบว์ลิ่ง...
                                        </p>
                                    </div>
                                </div>
                            </div>
                        <?php }?>
                    </div>
                    
                    <?php include_once('component/list-footer.php'); ?>
                </div>

                <div class="grid xl-25 lg-30 md-100 sm-100" data-aos="fade-up" data-aos-delay="600">
                    <div class="slots no-mask lazy-bg" data-src="./assets/img/bg/09.jpg">
                        <img class="float-img type-6" src="./assets/img/hero/15.png" alt="Slot Float Image 01" />
                        <div class="slot-tabs mt-0">
                            <h4 class="title color-white">หมวดหมู่</h4>
                            <?php for($i=0; $i<2; $i++){?>
                                <a class="slot-tab" href="#">
                                    <h5 class="mt-0 color-white">
                                        0<?php echo "$i"; ?>. <br>
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

    <section class="section-padding bg-gradient-04">
        <div class="container">
            <div class="ss-icon-title jc-center mt-0" data-aos="fade-up" data-aos-delay="0">
                <div class="icon bg-color4"><i class="far fa-file-alt"></i></div>
                <h2>แบบฟอร์มติดต่อ</h2>
            </div>
            <form action="./" method="POST" class="mt-1">
                <div class="grids jc-center">
                    <div class="grid sm-100 md-80 lg-2-3 mt-0">
                        <div class="grids">
                            <div class="grid md-50 mt-0">
                                <div class="field">
                                    <label for="firstname">ชื่อ *</label>
                                    <div class="control">
                                        <input type="text" name="firstname" required>
                                    </div>
                                </div>
                            </div>
                            <div class="grid md-50 mt-0">
                                <div class="field">
                                    <label for="lastname">นามสกุล</label>
                                    <div class="control">
                                        <input type="text" name="lastname">
                                    </div>
                                </div>
                            </div>
                            <div class="grid md-50 mt-0">
                                <div class="field">
                                    <label for="phone">หมายเลขโทรศัพท์ *</label>
                                    <div class="control">
                                        <input type="text" name="phone" required>
                                    </div>
                                </div>
                            </div>
                            <div class="grid md-50 mt-0">
                                <div class="field">
                                    <label for="email">อีเมล</label>
                                    <div class="control">
                                        <input type="email" name="email">
                                    </div>
                                </div>
                            </div>
                            <div class="grid sm-100 mt-0">
                                <div class="field">
                                    <label for="message">ข้อความ *</label>
                                    <div class="control">
                                        <textarea name="message" rows="4" required></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex ai-center jc-space-between fw-wrap mb-1">
                            <div class="captcha-container">
                                <img class="lazy-img" data-src="./assets/img/default/captcha.png" alt="CAPTCHA" />
                            </div>
                            <div class="btns width-auto">
                                <button type="submit" class="btn btn-action btn-secondary next-icon">
                                    ส่งข้อความ
                                </button>
                                <a class="btn btn-action btn-primary" href="#">
                                    ล้างข้อมูล
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>
    
    <?php include_once('include/footer.php'); ?>
    <?php include_once('include/script.php'); ?>
</body>
</html>
