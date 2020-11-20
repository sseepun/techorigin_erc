<!DOCTYPE html>
<html lang="th">
<head>
    <?php include_once('include/header.php'); ?>
    <?php include_once('include/style.php'); ?>
</head>
<body>
    <?php include_once('include/topnav.php'); ?>
    
    <div class="popup-container active" data-popup="forgot">
        <div class="wrapper">
            <div class="close-filter btn-popup-toggle" data-popup="forgot"></div>
            <div class="popup-box">
                <div class="popup-header" style="background-image:url('assets/img/content/02.jpg');">
                    <div class="hero-container">
                        <img src="assets/img/hero/07.png" alt="Hero" />
                    </div>
                </div>
                <div class="popup-body">
                    <h4 class="text-center color-secondary">
                        ลืมรหัสผ่าน
                    </h4>
                    <img class="sep-01" src="assets/img/hero/03.png" alt="Separation" />
                    <p class="text-center mb-1">
                        กรุณากรอกเบอร์มือถือหรืออีเมล <br>
                        เพื่อรับรหัสผ่านสำหรับใช้ในการเข้าสู่ระบบ
                    </p>
                    <form action="" method="POST">
                        <div class="gallery-grids">
                            <div class="grid sm-100">
                                <div class="position-relative">
                                    <input type="text" class="gray" placeholder="เบอร์มือถือ / อีเมล" required />
                                    <div class="input-icon">
                                        <i class="zmdi zmdi-account"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="gallery-grids">
                            <div class="grid sm-50">
                                <button type="submit" class="btn btn-secondary btn-sm w-full">
                                    ยืนยัน
                                </button>
                            </div>
                            <div class="grid sm-50">
                                <a class="btn btn-gray bcolor-primary btn-sm w-full btn-popup-toggle" 
                                data-popup="forgot" href="#">
                                    ยกเลิก
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <section class="content-04 section-padding">
        <div class="container">
            <div class="ss-box text-center" data-aos="fade-up" data-aos-delay="0">
                <img class="img-content vertical" src="assets/img/hero/07.png" alt="Icon" />
                <h5>
                    คุณได้ทำการสมัครรางวัลเสร็จสมบูรณ์ <br>
                    ข้อมูลในการสมัครของคุณอยู่ในระบบแล้ว
                </h5>
                <div class="btns">
                    <a class="btn btn-secondary" href="#">
                        เสร็จสิ้น
                    </a>
                </div>
            </div>
            <div class="btns pt-3 pb-2" data-aos="fade-up" data-aos-delay="0">
                <a class="btn btn-gray mx-1" href="#">
                    <i class="zmdi zmdi-print mr-1"></i> พิมพ์ใบสมัคร
                </a>
                <a class="btn btn-gray mx-1" href="#">
                    <i class="zmdi zmdi-assignment mr-1"></i> แก้ไขใบสมัคร
                </a>
            </div>
            <div class="btns" data-aos="fade-up" data-aos-delay="0">
                <p class="text-danger text-center">
                    *** ท่านสามารถแก้ไขใบสมัครได้จนถึงวันปิดรับสมัคร ***
                </p>
            </div>
        </div>
    </section>
    
    <?php include_once('include/footer.php'); ?>
    <?php include_once('include/script.php'); ?>
</body>
</html>
