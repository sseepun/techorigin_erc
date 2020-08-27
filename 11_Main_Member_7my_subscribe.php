<!DOCTYPE html>
<html lang="th">
<head>
    <?php include_once('include/header.php'); ?>
    <?php include_once('include/style.php'); ?>
    <style>
        .contact-box .checkbox-container {display:flex; flex-wrap:wrap;}
        .contact-box .checkbox-container label {padding-left:.25rem; }
        .contact-box .checkbox-container input {cursor:pointer; margin:0;}
        .contact-box .checkbox-container label::before {content: ''; position:absolute; top:0.3125rem;  left:0; background:var(--color4); width:.8125rem; height:.8125rem; border-radius:.125rem;}
        .contact-box .checkbox-container input[type='checkbox']:checked + label::before {}
        .contact-box .checkbox-container .wrapper {padding-left:3.1875rem;}
        .contact-box .checkbox-container .grid {position:relative; display:flex; align-items:center;}
        @media screen and (max-width: 768px) {
            .contact-box .checkbox-container .wrapper {padding-left:2.6875rem;}
        }
        @media screen and (max-width: 576px) {
            .contact-box .checkbox-container .wrapper {padding-left:0;}
        }
    </style>
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
                    <div class="contact-box">
                        <form action="./" method="POST">
                            <div class="ss-icon-title mt-0 mb-1">
                                <div class="icon bg-color3"><i class="fas fa-mobile-alt"></i></div>
                                <h2>แก้ไขติดตามจดหมายข่าวสาร</h2>
                            </div>
                            <p>กรุณาเลือกประเภทของข่าวสารที่คุณมีความสนใจในการติดตาม</p>
                            <div class="grids">
                                <div class="grid sm-100 mt-0">
                                    <div class="field">
                                        <div class="ss-icon-title mt-0">
                                            <div class="icon bg-color4"><i class="far fa-building"></i></div>
                                            <div class="title">
                                                <p class="fw-600">ข่าวประชาสัมพันธ์</p>
                                                <p>กรมอนามัย พร้อมให้ข้อมูลข่าวสารที่เป็นประโยชน์สำหรับคุณ</p>
                                            </div>
                                        </div>
                                        <div class="checkbox-container">
                                            <div class="grids">
                                                <div class="wrapper">
                                                    <div class="grid all-100 mt-1">
                                                        <input type="checkbox" name="center">
                                                        <label for="center">ข่าวจากหน่วยงานส่วนกลาง</label>
                                                    </div>
                                                    <div class="grid all-100 mt-1">
                                                        <input type="checkbox" name="anamai">
                                                        <label for="anamai">ข่าวจากศูนย์อนามัย</label>
                                                    </div>
                                                    <div class="grid all-100 mt-1">
                                                        <input type="checkbox" name="newspaper">
                                                        <label for="newspaper">ข่าวจากหนังสือพิมพ์</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="btns mt-2">
                                <button type="submit" class="btn btn-action btn-secondary next-icon">
                                    ส่งข้อความ
                                </button>
                                <a class="btn btn-action btn-primary" href="#">
                                    ล้างข้อมูล
                                </a>
                            </div>
                        </form>
                    </div>
                    <h2 class="color4 fw-400 mt-2">
                        แก้ไขติดตามจดหมายข่าวสาร
                    </h2>
                    <p>ผู้สมัครสมาชิกตกลงยินยอมผูกพันตามข้อกำหนดและเงื่อนไขการใช้ของสำนักงานกรมอนามัย</p>
                </div>
            </div>

        </div>
    </div>
    <?php include_once('include/footer.php'); ?>
    <?php include_once('include/script.php'); ?>
</body>
</html>
