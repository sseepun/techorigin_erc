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
    <section class="section-padding">
        <div class="container">
            <div class="ss-header">
                <div class="ss">ลื</div><h1 class="color2">มรหัสผ่าน</h1>
                <p><strong>กรมอนามัย</strong> สมัครเพื่อรับข้อมูลที่มีประโยชน์ก่อนใคร</p>
            </div>
            <div class="grids">
                <div class="grid xl-75 lg-75 sm-100">
                    <div class="contact-box">
                        <form action="./" method="POST">
                            <div class="ss-icon-title mt-0 mb-1">
                                <div class="icon bg-color0"><i class="fas fa-mail-bulk"></i></div>
                                <h2>แบบฟอร์มลืมรหัสผ่าน</h2>
                            </div>
                            <div class="grids">
                                <div class="grid sm-100 mt-0">
                                    <div class="field">
                                        <label for="email">กรุณากรอกอีเมล์ที่ท่านใช้สมัครสมาชิกเพื่อรีเซ็ตรหัสผ่าน</label>
                                        <div class="control">
                                            <input type="email" name="email">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="btns mt-2">
                                <button type="submit" class="btn btn-action btn-secondary next-icon">
                                    ส่องข้อความ
                                </button>
                                <a class="btn btn-action btn-primary" href="#">
                                    ล้างข้อมูล
                                </a>
                            </div>
                        </form>
                    </div>
                    <h2 class="color4 fw-400 mt-2">
                        เงื่อนไขการสมัครสมาชิก
                    </h2>
                    <p>ผู้สมัครสมาชิกตกลงยินยอมผูกพันตามข้อกำหนดและเงื่อนไขการใช้ของสำนักงานกรมอนามัย</p>
                </div>
                <div class="grid sm-100 lg-25" data-aos="fade-up" data-aos-delay="600">
                    <div class="slots bg-color4">
                        <div class="slot">
                            
                            <h2 class="header-text quote-text quote-inline">
                                คนไทย <br>
                                <span class="text-xl fw-400 color1">ร่วมใจสู้ภัย</span> <br>
                                <span class="text-xl">โควิด-19</span>
                            </h2>

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