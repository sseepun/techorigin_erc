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
            [ 'name' => 'ลืมรหัสผ่าน', 'url' => '#' ]
        ];
        include_once('component/breadcrumb.php');
    ?>

    <section class="section-padding pb-0">
        <div class="container">
            <div class="ss-header">
                <div class="ss">ลื</div><h1 class="color2">มรหัสผ่าน</h1>
                <p><strong>กรมอนามัย</strong> สมัครเพื่อรับข้อมูลที่มีประโยชน์ก่อนใคร</p>
            </div>
            <div class="grids">

                <div class="grid xl-70 lg-70 md-100 sm-100">
                    <div class="contact-box">
                        <form action="./" method="POST">
                            <div class="ss-icon-title mt-0 mb-1">
                                <div class="icon bg-color0"><i class="fas fa-mail-bulk"></i></div>
                                <h2>แบบฟอร์มรีเซ็ทรหัสผ่าน</h2>
                            </div>
                            <h4 class="mt-2">กรุณากรอกรหัสผ่านใหม่เพื่อเปลี่ยนรหัสผ่านของคุณ</h4>
                            <div class="grids">
                                <div class="grid sm-50 mt-0">
                                    <div class="field">
                                        <label for="password">ระหัสผ่านใหม่ *</label>
                                        <div class="control">
                                            <input type="password" name="password" required />
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
                                        <label for="conf_password">ยืนยันระหัสผ่านใหม่ *</label>
                                        <div class="control">
                                            <input type="password" name="conf_password" required />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="captcha-container">
                                <img class="lazy-img" data-src="./assets/img/default/captcha.png" alt="CAPTCHA" />
                            </div>
                            <div class="btns mt-1">
                                <button type="submit" class="btn btn-action btn-secondary next-icon">
                                    ยืนยันข้อมูล
                                </button>
                                <a class="btn btn-action btn-primary" href="#">
                                    ล้างข้อมูล
                                </a>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="grid xl-25 lg-30 md-100 sm-100" data-aos="fade-up" data-aos-delay="600">
                    <div class="slots no-mask pb-0">
                        <img class="float-img type-8" src="./assets/img/hero/19.png" alt="Slot Float Image 01" />
                    </div>
                </div>

            </div>
        </div>
    </section>

    <?php include_once('include/footer.php'); ?>
    <?php include_once('include/script.php'); ?>
</body>
</html>
