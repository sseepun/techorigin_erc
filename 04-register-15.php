<!DOCTYPE html>
<html lang="th">
<head>
    <?php include_once('include/header.php'); ?>
    <?php include_once('include/style.php'); ?>
</head>
<body>
    <?php $pageActive = 'Register'; include_once('include/topnav.php'); ?>

    <section class="content-04 section-padding">
        <div class="container">
            <div class="ss-box text-center" data-aos="fade-up" data-aos-delay="0">
                <img class="img-content vertical" src="assets/img/hero/07.png" alt="Icon" />
                <h5>
                    คุณได้ทำการสมัครรางวัลเสร็จสมบูรณ์ <br>
                    ข้อมูลในการสมัครของคุณอยู่ในระบบแล้ว
                </h5>
                <div class="btns">
                    <a class="btn btn-secondary" href="index.php">
                        เสร็จสิ้น
                    </a>
                </div>
            </div>
            <div class="btns pt-3 pb-2" data-aos="fade-up" data-aos-delay="0">
                <a class="btn btn-gray mx-1" href="#">
                    <i class="zmdi zmdi-print mr-1"></i> พิมพ์ใบสมัคร
                </a>
                <a class="btn btn-gray mx-1" href="04-register-01.php">
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
