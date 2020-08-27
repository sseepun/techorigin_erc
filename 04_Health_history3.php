<!DOCTYPE html>
<html lang="th">
<head>
    <?php include_once('include/header.php'); ?>
    <?php include_once('include/style.php'); ?>
</head>
<body>
    <?php $topnavActive = 'About'; include_once('include/topnav.php'); ?>
    <?php
        $breadcrumb = [
            [ 'name' => 'หน้าแรก', 'url' => './' ],
            [ 'name' => 'รู้จักกรมอนามัย', 'url' => '#' ],
            [ 'name' => 'ประวัติความเป็นมา', 'url' => '#' ]
        ];
        include_once('component/breadcrumb.php');
    ?>

    <section class="about-02">
        <img class="banner-top" src="./assets/img/bg/01.jpg" alt="Health 01" />
        <div class="container">
            <div class="ss-header color-white-info">
                <div class="ss">ป</div><h1>ระวัติความเป็นมาของกรมอนามัย</h1>
                <p>กรมอนามัย พร้อมให้ข้อมูลข่าวสารที่เป็นประโยชน์สำหรับคุณ</p>
            </div>
            <img class="icon lazy-img" data-src="./assets/img/icon/9.png" alt="Health Icon 01" />
            <h2 class="text-center">
                พระบาทสมเด็จพระบรมชนกาธิเบศร <br> 
                มหาภูมิพลอดุลยเดชมหาราช บรมนาถบพิตร
            </h2>
            <p class="text-center desc">
                ทรงพระกรุณาโปรดเกล้าให้ตราพระราชบัญญัติปรับปรุงกระทรวง ทบวง กรม พ.ศ.๒๔๙๕
                <br><br>
                ดังประกาศในราชกิจจานุเบกษา เล่ม ๖๙ ตอนที่ ๑๖ วันที่ ๑๑ มีนาคม ๒๔๙๕
                โดยเปลี่ยนชื่อจากกระทรวงการสาธารณสุข เป็นกระทรวงสาธารณสุข และกรมสาธารณสุข 
                เป็นกรมอนามัย ซึ่งพระราชบัญญัติดังกล่าวมีผลบังคับใช้นับแต่วันถัดจากวันประกาศ
                ในราชกิจจานุเบกษาเป็นต้นไป ด้วยเหตุนี้กรมอนามัย
            </p>
            <h3 class="text-center color4">
                จึงถือเอาวันที่ ๑๒ มีนาคม ๒๔๙๕ เป็นวันสถาปนากรมอนามัย
            </h3>
            <img class="border lazy-img" data-src="./assets/img/icon/border.png" alt="Health Border 01" />
        </div>
        <img class="banner-bottom lazy-img" data-src="./assets/img/bg/02.jpg" alt="Health 02" />
    </section>

    <section class="content-03 section-padding lazy-bg" data-src="./assets/img/bg/08.jpg">
        <div class="container">
            <div class="grids">
                <div class="grid sm-mt-0 sm-100 md-50 lg-40 xl-1-3">
                    <h3 class="color-white mt-0">
                        กรมอนามัย กระทรวงสาธารณสุข
                        มีพัฒนาการมาเป็นเวลายาวนาน
                    </h3>
                    <p class="color-white">
                        มีการเปลี่ยนแปลงอำนาจหน้าที่การบริหารจัดการและการแบ่ง
                        ส่วนราชการให้เหมาะสมสอดคล้องกับสภาพเศรษฐกิจ 
                        สังคม การปกครองและสิ่งแวดล้อม
                    </p>
                </div>
                <div class="grid sm-100 md-50 lg-40 xl-1-3">
                    <h3 class="color-white mt-0">
                        <span class="text-sm">
                            และที่สำคัญคือให้เท่าทันกับสภาพปัญหาสาธารณสุข
                            และระบบสุขภาพในยุคโลกาภิวัตน์ 
                        </span>
                        <br>
                        ในปีพ.ศ.๒๕๔๕
                    </h3>
                    <p class="color-white">
                        รัฐบาลมีนโยบายปฏิรูประบบราชการ จึงมีการถ่ายโอนบุคลากรและ
                        ภารกิจบางส่วนของกรมอนามัยให้กับกระทรวงทรัพยากรธรรมชาติ 
                        และสิ่งแวดล้อม ตามกฎกระทรวงแบ่งส่วนราชการกรมอนามัย <br>
                        กระทรวงสาธารณสุข พ.ศ.๒๕๔๕ <br>
                        ประกาศ ณ วันที่ ๙ ตุลาคม ๒๕๔๕
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="section-padding bg-gradient-03">
        <div class="container text-center">
            <p class="mt-0">
                ปัจจุบัน กรมอนามัยมีภารกิจและหน้าที่รับผิดชอบตามกฎกระทรวงแบ่งส่วนราชการกรมอนามัย 
                <br> กระทรวงสาธารณสุข พ.ศ.๒๕๕๒ 
            </p>
            <h2 class="fw-400">
                ดังประกาศในราชกิจจานุเบกษา <br> 
                เล่มที่ ๑๒๖ ตอนที่ ๙๘ ณ วันที่ ๒๘ ธันวาคม ๒๕๕๒
            </h2>
        </div>
    </section>
    
    <?php include_once('include/footer.php'); ?>
    <?php include_once('include/script.php'); ?>
</body>
</html>
