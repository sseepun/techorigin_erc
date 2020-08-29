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
            [ 'name' => 'ข้อมูลของฉัน', 'url' => '#' ]
        ];
        include_once('component/breadcrumb.php');
    ?>

    <div class="section-padding">
        <div class="container">
            <div class="ss-header" data-aos="fade-up" data-aos-delay="0">
                <div class="ss">ข้</div><h1 class="color2">อมูลของฉัน</h1>
                <p><strong>ระบบจัดการ</strong> เกี่ยวกับการใช้งาน จัดการเนื้อหา และข้อมูล</p>
            </div> 
            <div class="grids">

                <div class="grid xl-25 lg-30 sm-100">
                    <div class="slots bg-color5">
                        <div class="profile-tab">
                            <div class="icon lazy-bg" data-src="./assets/img/banner/01.jpg"></div>
                            <div class="text-container">
                                <h3 class="fw-400">อุรัสยา เสปอร์บันด์</h3>
                                <h5>urrasaya.sp@gmail.com</h5>
                            </div>
                        </div>
                        <div class="slot-tabs">
                            <?php for($i=0; $i<5; $i++){?>
                                <a class="slot-tab <?php if($i==0)echo 'active'; ?>" href="#">
                                    <div class="icon bg-color3 color-white">
                                        <i class="far fa-building"></i>
                                    </div>
                                    <h5 class="mt-0 color-black">
                                        0<?php echo "$i"; ?>. <br>
                                        ข่าวจากหน่วยงานส่วนกลาง
                                    </h5>
                                </a>
                            <?php }?> 
                        </div>
                    </div>
                </div>

                <div class="grid xl-75 lg-70 sm-100">
                    <form action="./" method="POST">
                        <div class="ss-icon-title mt-0 mb-2">
                            <div class="icon bg-color3"><i class="fas fa-mobile-alt"></i></div>
                            <h2>แก้ไขติดตามจดหมายข่าวสาร</h2>
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
                                อัพเดตข้อมูล
                            </button>
                            <a class="btn btn-action btn-primary" href="#">
                                ล้างข้อมูล
                            </a>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>

    <?php include_once('include/footer.php'); ?>
    <?php include_once('include/script.php'); ?>
</body>
</html>
