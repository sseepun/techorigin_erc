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
                                <h3 class="fw-400">อนุสรา เสปอร์บันด์</h3>
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
                        <div class="ss-icon-title mt-0 mb-1">
                            <div class="icon bg-color1"><i class="fas fa-mail-bulk"></i></div>
                            <h2>แก้ไขข้อมูลและรหัสผ่าน</h2>
                        </div>
                        <div class="grids">
                            <div class="grid sm-50 mt-0">
                                <div class="field">
                                    <label for="firstname">ชื่อ *</label>
                                    <div class="control">
                                        <input type="text" name="firstname" required>
                                    </div>
                                </div>
                            </div>
                            <div class="grid sm-50 mt-0">
                                <div class="field">
                                    <label for="lastname">นามสกุล *</label>
                                    <div class="control">
                                        <input type="text" name="lastname" required>
                                    </div>
                                </div>
                            </div>
                            <div class="grid sm-50 mt-0">
                                <div class="field">
                                    <label for="email">อีเมล *</label>
                                    <div class="control">
                                        <input type="email" name="email" required>
                                    </div>
                                </div>
                            </div>
                            <div class="grid sm-50 mt-0">
                                <div class="field">
                                    <label for="phone">หมายเลขโทรศัพท์</label>
                                    <div class="control">
                                        <input type="text" name="phone">
                                    </div>
                                </div>
                            </div>
                            <div class="grid sm-50 md-30 mt-0">
                                <div class="field">
                                    <label for="birth_date">ระบุว้นเกิด</label>
                                    <div class="control">
                                        <input type="text" name="birth_date" class="date-picker" autocomplete="off">
                                    </div>
                                </div>
                            </div>
                            <div class="grid sm-50 md-60 mt-0">
                                <div class="field">
                                    <label for="sex">ระบุเพศ</label>
                                    <div class="control-flex">
                                        <div class="control radio-control mr-3" style="width:auto;">
                                            <input type="radio" name="sex" id="sex_1" value="1">
                                            <label for="sex_1">ชาย</label>
                                        </div>
                                        <div class="control radio-control" style="width:auto;">
                                            <input type="radio" name="sex" id="sex_0" value="0">
                                            <label for="sex_0">หญิง</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="grid sm-50 mt-0">
                                <div class="field">
                                    <label for="password">รหัสผ่าน *</label>
                                    <div class="control">
                                        <input type="password" name="password" required>
                                    </div>
                                    <div class="password-indicator level-3">
                                        <div class="levels">
                                            <div class="level"></div>
                                            <div class="level"></div>
                                            <div class="level"></div>
                                            <div class="level"></div>
                                        </div>
                                        <h5 class="mt-0">
                                            ระดับความยากของรหัสผ่าน : 
                                            <span class="level-text"></span>
                                        </h5>
                                    </div>
                                </div>
                            </div>
                            <div class="grid sm-50 mt-0">
                                <div class="field">
                                    <label for="conf_password">ยืนยันรหัสผ่าน *</label>
                                    <div class="control">
                                        <input type="password" name="conf_password" required>
                                    </div>
                                </div>
                            </div>
                            <div class="grid sm-100">
                                <h4 class="fw-500 mt-0">หมายเหตุ</h4>
                                <p class="no-margin">
                                    ข้อสำคัญ: ชื่อที่ลิงค์กับอีเมลของคุณจะไม่ใช่ชื่อผู้ใช้ 
                                    โดยคุณจะเปลี่ยนชื่อที่ใช้หรืออีเมลไม่ได้
                                </p>
                            </div>
                        </div>
                        <div class="captcha-container mt-2-5">
                            <img class="lazy-img" data-src="./assets/img/default/captcha.png" alt="CAPTCHA" />
                        </div>
                        <div class="btns mt-1">
                            <button type="submit" class="btn btn-action btn-secondary next-icon">
                                อัพเดทข้อมูล
                            </button>
                            <a class="btn btn-action btn-primary" href="#">
                                ล้างข้อมูล
                            </a>
                        </div>
                    </form>

                </div>

            </div>
        </div>
    </section>

    
    <?php include_once('include/footer.php'); ?>
    <?php include_once('include/script.php'); ?>
</body>
</html>
