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
                            <?php for($i=0; $i<4; $i++){?>
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
                    <div class="list-header">
                        <div class="block"></div>
                        <div class="block"></div>
                    </div>
                </div>
            </div>
        </div>

    </section>

    
    <?php include_once('include/footer.php'); ?>
    <?php include_once('include/script.php'); ?>
</body>
</html>
