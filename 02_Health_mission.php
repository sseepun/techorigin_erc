<!DOCTYPE html>
<html lang="th">
<head>
    <?php include_once('include/header.php'); ?>
    <?php include_once('include/style.php'); ?>
</head>
<body class="lang_en">
    <?php include_once('include/topnav.php'); ?>
    <?php
        $breadcrumb = [
            [ 'name' => 'หน้าแรก', 'url' => './' ],
            [ 'name' => 'รู้จักกรมอนามัย', 'url' => '#' ],
            [ 'name' => 'วิสัยทัศน์และพันธกิจ', 'url' => '#' ]
        ];
        include_once('component/breadcrumb.php');
    ?>

    <section class="section-padding section-bg lazy-bg" data-src="./assets/img/bg/20.jpg" style="padding-bottom:22rem;">
        <div class="container">
            <div class="ss-header" data-aos="fade-up" data-aos-delay="0">
                <div class="ss">วิ</div><h1>วิสัยทัศน์และพันธกิจ</h1>
                <p>กรมอนามัย พร้อมให้ข้อมูลข่าวสารที่เป็นประโยชน์สำหรับคุณ</p>
            </div>
            <div class="grids mt-1 jc-center ai-center">
                <div class="grid lg-40 md-40 sm-100">
                    <h2 class="mt-0 text-right sm-text-left xs-text-left">
                        <span class="text-xs color4 fw-400">กรมอนามัย</span> <br>
                        เป็นองค์กรหลักของประเทศ <br>
                        <span class="text-xs">ในการอภิบาล ระบบส่งเสริมสุขภาพและ</span> <br>
                        <span class="text-xs">ระบบอนามัยสิ่งแวดล้อม</span> <br>
                        <span class="color4 fw-400">เพื่อประชาชนสุขภาพดี</span>
                    </h2>
                </div>
                <div class="grid lg-30 md-30 sm-100"></div>
                <div class="grid lg-30 md-1-3 sm-100">
                    <h2 class="mt-0 color4 fw-400">
                        "ดูแล ปกป้อง คุ้มครอง"
                    </h2>
                </div>
            </div>
        </div>
    </section>

    <section class="section-padding section-bg lazy-bg" data-src="./assets/img/bg/19.jpg">
        <div class="container text-center">
            <h1 class="color-white mt-0">พันธกิจ</h1>
            <h4 class="color-white">
                <span class="text-lg">ทำหน้าที่ในการสังเคราะห์ใช้ความรู้และดูภาพรวม</span> <br>
                เพื่อกำหนดนโยบายและออกแบบระบบส่งเสริมสุขภาพและอนามัยสิ่งแวดล้อม <br>
                โดยการประสานงาน สร้างความร่วมมือและกำกับดูแลเพื่อให้เกิดความรับผิดชอบ <br>
                ต่อการดำเนินงาน
            </h4>
        </div>
    </section>

    <section class="section-padding section-bg lazy-bg" data-src="./assets/img/bg/21.jpg">
        <div class="container text-center">
            <h2 class="mt-0">
                <span class="text-lg">วัฒนธรรมองค์กรกรมอนามัย</span>
            </h2>
            <h4 class="sm-no-br xs-no-br">
                วัฒนธรรมที่เข้มแข็งหรืออ่อนแอซึ่งจะขึ้นอยู่กับระดับของการเห็นพ้องต้องกัน <br>
                (ConsensusหรือAgreement)การยึดเหนี่ยวกัน(Cohesiveness)และการผูกพัน (Commitment) <br>
                ของสมาชิกต่อวัฒนธรรมองค์การนั้น ๆ
            </h4>
            <img class="mt-4 lazy-img" data-src="./assets/img/hero/21.png" alt="Hero 21" 
            style="display:block; width:100%; height:auto;" />
        </div>
    </section>
    
    <?php include_once('include/footer.php'); ?>
    <?php include_once('include/script.php'); ?>
</body>
</html>
