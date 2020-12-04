<!DOCTYPE html>
<html lang="th">
<head>
    <?php include_once('include/header.php'); ?>
    <?php include_once('include/style.php'); ?>
</head>
<body class="loading">
    <?php include_once('include/topnav.php'); ?>

    <?php
        $breadcrumbClass = 'white';
        $breadcrumb = [
            [ 'display' => 'เกี่ยวกับองค์กร', 'url' => '#' ],
            [ 'display' => 'คณะผู้บริหารสำนักงาน', 'url' => '#' ],
        ];
        include('component/breadcrumb-01.php');
    ?>

    <section class="call-03 section-padding" style="background-image:url('assets/img/bg/11.jpg');">
        <div class="container">
            <h2 class="text-center color-white" data-aos="fade-up" data-aos-delay="150">
                <span class="text-xs fw-500">วิสัยทัศน์</span>
            </h2>
            <h6 class="text-center color-white mt-10" data-aos="fade-up" data-aos-delay="300">
                เพื่อให้การดำเนินงานของคณะกรรมการกำกับกิจการพลังงาน (กกพ.) และสำนักงานคณะกรรมการกำกับ <br>
                กิจการพลังงาน (สำนักงาน กกพ.) มีแนวทางการกำกับดูแลในทิศทางเดียวกัน และบรรลุเป้าหมายที่กำหนดไว้ร่วมกัน <br>
                จึงได้กำหนดวิสัยทัศน์ พันธกิจ และค่านิยมหลักไว้ ดังนี้
            </h6>
            <div class="quote-wrapper" data-aos="fade-up" data-aos-delay="450">
                <h2 class="text-center color-white">
                    <span class="text-sm fw-500">
                        กำกับกิจการพลังงานเพื่อการพัฒนาที่ยั่งยืน <br>
                        และส่งเสริมการแข่งขันให่้เหมาะสมเป็นธรรม
                    </span>
                </h2>
            </div>
        </div>
    </section>

    <section class="call-04 section-padding" style="background-image:url('assets/img/bg/12.jpg');">
        <div class="container">
            <h2 class="text-center" data-aos="fade-up" data-aos-delay="0">
                <span class="text-xs fw-500">พันธกิจ</span>
            </h2>
            <div class="grids mt-05">
                <div class="grid lg-25" data-aos="fade-up" data-aos-delay="150">
                    <h2><span class="text-xs">01.</span></h2>
                    <h6 class="fw-600">กำกับดูแลการประกอบกิจการพลังงาน</h6>
                    <h6 class="fw-200">
                        ให้เป็นไปตามวัตถุประสงค์ของพระราชบัญญัติ <br>
                        การประกอบกิจการพลังงาน พ.ศ. 2550 <br>
                        และกรอบนโยบายรัฐ
                    </h6>
                </div>
                <div class="grid lg-25" data-aos="fade-up" data-aos-delay="300">
                    <h2><span class="text-xs">02.</span></h2>
                    <h6 class="fw-600">ส่งเสริมสนับสนุนการศึกษาวิจัย</h6>
                    <h6 class="fw-200">
                        เกี่ยวกับการพัฒนาการกำกับกิจการพลังงาน <br>
                        และการประกอบกิจการพลังงาน
                    </h6>
                </div>
                <div class="grid lg-25" data-aos="fade-up" data-aos-delay="450">
                    <h2><span class="text-xs">03.</span></h2>
                    <h6 class="fw-600">ส่งเสริมสังคมและประชาชนให้มีความรู้</h6>
                    <h6 class="fw-200">
                        และความตระหนักด้านการจัดการ <br>
                        และตรวจสอบการดำเนินงานด้านพลังงาน
                    </h6>
                </div>
                <div class="grid lg-25" data-aos="fade-up" data-aos-delay="600">
                    <h2><span class="text-xs">04.</span></h2>
                    <h6 class="fw-600">พัฒนาองค์กรด้วยหลักธรรมาภิบาล</h6>
                    <h6 class="fw-200">
                        และพัฒนาศักยภาพบุคลากร <br>
                        ในการกำกับกิจการพลังงานให้สูงขึ้น
                    </h6>
                </div>
            </div>
        </div>
    </section>

    <section class="call-05 section-padding" style="background-image:url('assets/img/bg/13.jpg');">
        <div class="container">
            <h2 class="text-center color-white" data-aos="fade-up" data-aos-delay="0">
                <span class="text-xs fw-500">ค่านิยมหลัก</span>
            </h2>
            <h6 class="text-center color-white mt-10" data-aos="fade-up" data-aos-delay="150">
                " TRUST " เป็นคำย่อจากคำศัพท์ภาษาอังกฤษ ที่แสดงให้เห็นถึงความเชื่อ ค่านิยมและพฤติกรรม <br>
                ที่พึงประสงค์ในการกำกับดูแลกิจการพลังงาน ประกอบด้วย
            </h6>
            <div class="characters">
                <div class="character" data-aos="fade-up" data-aos-delay="0">
                    <img src="assets/img/hero/T.png" alt="Character" />
                    <div class="text">
                        Trust : ความเชื่อมั่น
                    </div>
                </div>
                <div class="character" data-aos="fade-up" data-aos-delay="150">
                    <img src="assets/img/hero/R.png" alt="Character" />
                    <div class="text">
                        Reliability and Consistency : <br>
                        ความน่าเชื่อถือและความแน่วแน่ มั่งคง
                    </div>
                </div>
                <div class="character" data-aos="fade-up" data-aos-delay="300">
                    <img src="assets/img/hero/U.png" alt="Character" />
                    <div class="text">
                        Unity : เอกภาพ
                    </div>
                </div>
                <div class="character" data-aos="fade-up" data-aos-delay="450">
                    <img src="assets/img/hero/S.png" alt="Character" />
                    <div class="text">
                        Social Accountability : <br>
                        สังคมสามารถตรวจสอบได้ มีสำนึก <br>
                        ในหน้าที่ี่รับผิดชอบ
                    </div>
                </div>
                <div class="character" data-aos="fade-up" data-aos-delay="600">
                    <img src="assets/img/hero/T.png" alt="Character" />
                    <div class="text">
                        Transparency and Independence : <br>
                        โปร่งใสและเป็นอิสระ
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <?php include_once('include/footer.php'); ?>
    <?php include_once('include/script.php'); ?>
</body>
</html>
