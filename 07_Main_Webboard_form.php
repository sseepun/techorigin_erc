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
            [ 'name' => 'บริการประชาขน', 'url' => '#' ],
            [ 'name' => 'กระดานถาม-ตอบ', 'url' => '#' ]
        ];
        include_once('component/breadcrumb.php');
    ?>

    <div class="section-padding">
        <div class="container">
            <div class="ss-header" data-aos="fade-up" data-aos-delay="0">
                <div class="ss">แ</div><h1 class="color2">บบฟอร์มการตั้งกระทู้</h1>
                <p><strong class="ml-0-5">กรมอนามัย</strong> พร้อมพูดคุยและแลกเปลี่ยนความรู้ข่าวสารที่เป็นประโยชน์สำหรับคุณ</p>
            </div>
            <div class="grids">

                <div class="grid xl-75 lg-70 sm-100">
                    <div class="btns">
                        <a class="btn btn-icon" href="#">
                            <i class="fas fa-plus-circle"></i> ตั้งกระทู้
                        </a>
                        <a class="btn btn-icon" href="#">
                            <i class="fas fa-lock"></i> เข้าสู่ระบบ
                        </a>
                        <a class="btn btn-icon" href="#">
                            <i class="far fa-user"></i> สมัครสมาชิก
                        </a>
                    </div>

                    <div class="ss-box">
                        <div class="header bg-color3 color-white">
                            <div class="icon"><i class="fas fa-book"></i></div>
                            <h2 class="color-white">หัวข้อกระทู้</h2>
                        </div>
                        <div class="content">
                            <div class="field mt-0">
                                <div class="control">
                                    <input type="text">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="ss-box">
                        <div class="header bg-color1 color-white">
                            <div class="icon"><i class="fas fa-book"></i></div>
                            <h2 class="color-white">รายละเอียด</h2>
                        </div>
                        <div class="content">
                            <div class="field mt-0">
                                <div class="control">
                                    <textarea rows="5"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="ss-box">
                        <div class="header bg-color0 color-white">
                            <div class="icon"><i class="fas fa-book"></i></div>
                            <h2 class="color-white">แนบไฟล๋</h2>
                        </div>
                        <div class="content">
                            <div class="field mt-0">
                                <div class="control">
                                    <form action="/upload" class="dropzone" method="POST" enctype="multipart/form-data"></form>
                                </div>
                            </div>
                        </div>
                    </div>

                    <form action="./" method="POST">
                        <div class="ss-icon-title mt-0 mb-2">
                            <div class="icon bg-color3"><i class="fas fa-mobile-alt"></i></div>
                            <h2>แบบฟอร์มสมัครรับข่าวสารจากกรมอนามัย</h2>
                        </div>
                        <div class="field mt-0 mb-2">
                            <label for="email">
                                กรุณากรอกอีเมลที่ต้องการรับข่าวสาร *
                            </label>
                            <div class="control">
                                <input type="email" name="email" id="email" required />
                            </div>
                        </div>
                        <p>กรุณาเลือกประเภทของข่าวสารที่คุณมีความสนใจในการติดตาม</p>

                        <div class="border-bottom pt-1 pb-1">
                            <div class="ss-icon-title mt-0 mb-0 ai-start">
                                <div class="icon bg-color4"><i class="fas fa-mobile-alt"></i></div>
                                <div class="text-wrapper">
                                    <h4 class="mt-0 fw-400">ข่าวประชาสัมพันธ์</h4>
                                    <p class="mt-0">
                                        กรมอนามัย พร้อมให้ข้อมูลข่าวสารที่เป็นประโยชน์สำหรับคุณ
                                    </p>
                                    <?php for($i=0; $i<4; $i++){?>
                                        <div class="field mt-0-5">
                                            <div class="control checkbox-control">
                                                <input type="checkbox" name="types[]" id="type_1_<?php echo $i; ?>" value="<?php echo $i; ?>">
                                                <label for="type_1_<?php echo $i; ?>">
                                                    ข่าวจากหน่วยงานส่วนกลาง
                                                </label>
                                            </div>
                                        </div>
                                    <?php }?>
                                </div>
                            </div>
                        </div>
                        
                        <div class="border-bottom pt-1 pb-1">
                            <div class="ss-icon-title mt-0 mb-0 ai-start">
                                <div class="icon bg-color1"><i class="fas fa-mobile-alt"></i></div>
                                <div class="text-wrapper">
                                    <div class="field mt-0">
                                        <div class="control checkbox-control">
                                            <input type="checkbox" name="types[]" id="type_2" value="2">
                                            <label for="type_2">
                                                <h4 class="mt-0 fw-400">วารสาร</h4>
                                                <p class="mt-0">
                                                    กรมอนามัย ส่งมอบความรู้ที่ถูกต้องเหมาะสมในวิถีชีวิตสู่สุขภาพดี
                                                </p>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="border-bottom pt-1 pb-1">
                            <div class="ss-icon-title mt-0 mb-0 ai-start">
                                <div class="icon bg-color5"><i class="fas fa-mobile-alt"></i></div>
                                <div class="text-wrapper">
                                    <div class="field mt-0">
                                        <div class="control checkbox-control">
                                            <input type="checkbox" name="types[]" id="type_3" value="3">
                                            <label for="type_3">
                                                <h4 class="mt-0 fw-400">คลังภาพ</h4>
                                                <p class="mt-0">
                                                    เผยแพร่ความรู้ และวิชาการด้านส่งเสริมสุขภาพและอนามัยสิ่งแวดล้อม
                                                </p>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="border-bottom pt-1 pb-1">
                            <div class="ss-icon-title mt-0 mb-0 ai-start">
                                <div class="icon bg-color3"><i class="fas fa-mobile-alt"></i></div>
                                <div class="text-wrapper">
                                    <div class="field mt-0">
                                        <div class="control checkbox-control">
                                            <input type="checkbox" name="types[]" id="type_4" value="4">
                                            <label for="type_4">
                                                <h4 class="mt-0 fw-400">วิดิโอ</h4>
                                                <p class="mt-0">
                                                    กรมอนามัย อัพเดท รวบรวมสื่อมัลติมีเดียเพื่อประชาชน
                                                </p>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="pt-1 pb-1">
                            <div class="ss-icon-title mt-0 mb-0 ai-start">
                                <div class="icon bg-color0"><i class="fas fa-mobile-alt"></i></div>
                                <div class="text-wrapper">
                                    <div class="field mt-0">
                                        <div class="control checkbox-control">
                                            <input type="checkbox" name="types[]" id="type_5" value="5">
                                            <label for="type_5">
                                                <h4 class="mt-0 fw-400">ไฟล์เอกสาร</h4>
                                                <p class="mt-0">
                                                    กรมอนามัย กับคลังความรู้สุขภาพเพื่อทุกคน
                                                </p>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="btns mt-2">
                            <button type="submit" class="btn btn-action btn-secondary next-icon">
                                ยืนยันการลงทะเบียน
                            </button>
                            <a class="btn btn-action btn-primary" href="#">
                                ล้างข้อมูล
                            </a>
                        </div>

                        <h4 class="mt-3 fw-400">เงื่อนไขการรับจดหมายข่าว</h4>
                        <p class="mt-0">
                            เมื่อส่งแบบฟอร์มนี้ จะถือว่าคุณยินยอมที่จะรับการติดต่อสื่อสารทางอิเล็กทรอนิกส์จากรกรมอนามัย
                        </p>
                    </form>
                </div>

                <div class="grid xl-25 lg-30 md-100 sm-100" data-aos="fade-up" data-aos-delay="600">
                    <div class="slots no-mask lazy-bg" data-src="./assets/img/bg/22.jpg">
                        <img class="float-img type-10" src="./assets/img/hero/22.png" alt="Slot Float Image 01" />
                        <div class="slot">
                            <h2 class="header-text quote-text">
                                <span class="fw-400">เพราะความห่วงใย</span> <br>
                                สุขภาพที่ดี คือ <br>
                                <span class="text-xl fw-400 color4">หน้าที่ของเรา</span>
                            </h2>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <?php include_once('include/footer.php'); ?>
    <?php include_once('include/script.php'); ?>
</body>
</html>
