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

                <div class="grid lg-75 sm-100">
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

                <div class="grid lg-25 sm-100">
                    <div class="slots bg-color4">
                        
                        <div class="slot-tabs">
                            <h4 class="title color-white">เลือกประเภท</h4>
                            <?php for($i=1; $i<=4; $i++){?>
                                <a class="slot-tab" href="#">
                                    <div class="icon bg-color3 color-white">
                                        <i class="far fa-building"></i>
                                    </div>
                                    <h5 class="mt-0 color-white">
                                        0<?php echo "$i"; ?>. <br>
                                        ข่าวจากหน่วยงานส่วนกลาง
                                    </h5>
                                </a>
                            <?php }?> 
                        </div>
                        <div class="slot">
                            
                            <h2 class="header-text quote-text">
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
