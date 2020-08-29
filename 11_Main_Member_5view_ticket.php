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

    <section class="section-padding">
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

                    <!-- Chat Container -->
                    <div class="chat-container">
                        <div class="chat-header bg-color0 color-white">
                            <div class="d-flex ai-center">
                                <div class="ss-icon-title no-margin">
                                    <div class="icon bg-color4"><i class="fas fa-exclamation-triangle"></i></div>
                                    <div class="text-wrapper d-flex ai-center">
                                        <p class="color-white mr-0-5 mt-0" style="white-space:nowrap;">
                                            หมายเลขร้องเรียน 
                                        </p>
                                        <div class="ss-tags no-margin">
                                            <div class="ss-tag bg-color4">#667643</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="btns no-margin text-right">
                                    <a class="btn btn-back color-white" href="#">ย้อนกลับ</a>
                                </div>
                            </div>
                            <div class="ss-icon-title mt-0-5 mb-1">
                                <div class="icon bg-color1 op-0"><i class="fas fa-exclamation-triangle"></i></div>
                                <h2 class="color-white">
                                    ด้วยทาง รพ.สต.บ้านนาแล จัดทำโครงการคัดกรองสุขภาพผู้สูงอายุจึงมีความประสงค์ต้องการขอสนับสนุนสมุดบันทึกสุขภาพผู้สูงอายุ 
                                    เล่มสีฟ้า จำนวน 500 เล่ม
                                </h2>
                            </div>
                            <?php
                                $contentStatColorWhite = true;
                                $contentStat = [
                                    'date' => '27.03.2563', 'view_count' => '202'
                                ];
                                include_once('component/content-stat.php');
                            ?>
                        </div>
                        <div class="chat-body">

                            <div class="chat-wrapper" data-simplebar>
                                <div class="wrapper">
                                    <?php for($i=0; $i<5; $i++){?>
                                        <div class="chat other">
                                            <div class="profile" style="background-image:url('./assets/img/banner/01.jpg');"></div>
                                            <div class="content">
                                                <div class="text">
                                                    ขออนุญาติทราบถามเรื่องสมุดบันทึกสุขภาพผู้สูงอายุค่ะ อยากได้บ้างต้องทำไงคะ 
                                                    รบกวนติดต่อกลับด้วยนะคะ 087-2204450
                                                </div>
                                            </div>
                                            <div class="info">
                                                <div class="person mr-1">
                                                    <span class="fw-500">
                                                        ตอบโดย : ประกายกัญญา
                                                    </span> พนักงาน
                                                </div>
                                                <div class="time">26.03.2563 (16:45)</div>
                                                <div class="icon bg-color0"><i class="fas fa-clock"></i></div>
                                            </div>
                                        </div>
                                        <div class="chat self">
                                            <div class="profile" style="background-image:url('./assets/img/banner/02.jpg');"></div>
                                            <div class="content">
                                                <div class="text">
                                                    ด้วยทาง รพ.สต. บ้านนาแล จัดทำโครงการคัดกรองสุขภาพผู้สูงอายุ จึงมีความประสงต์ต้องการ 
                                                    ขอสนับสนุนสมุดบันทึกสุขภาพผู้สูงอายุ เล่มสีฟ้า
                                                </div>
                                            </div>
                                            <div class="info">
                                                <div class="time">26.03.2563 (16:45)</div>
                                                <div class="icon bg-color0"><i class="fas fa-clock"></i></div>
                                            </div>
                                        </div>
                                    <?php }?>
                                </div>
                            </div>

                            <form action="./" method="POST">
                                <div class="ss-icon-title mt-3-5 mb-0">
                                    <div class="icon bg-color4"><i class="far fa-comment-dots"></i></div>
                                    <h2>ตอบหรือถามเพิ่มเติมเรื่องร้องเรียน</h2>
                                </div>
                                <div class="grids">
                                    <div class="grid sm-100 mt-0">
                                        <div class="field">
                                            <div class="control">
                                                <textarea name="message" rows="4" required></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="btns text-right">
                                    <button type="submit" class="btn btn-action btn-secondary next-icon">
                                        ตอบความเห็น
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
        </div>
    </section>
    
    <?php include_once('include/footer.php'); ?>
    <?php include_once('include/script.php'); ?>
</body>
</html>
