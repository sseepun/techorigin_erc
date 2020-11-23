<!DOCTYPE html>
<html lang="th">
<head>
    <?php include_once('include/header.php'); ?>
    <?php include_once('include/style.php'); ?>
</head>
<body>
    <?php $pageActive = 'Register'; include_once('include/topnav.php'); ?>

    <section class="section-padding">
        <div class="container">
            <form action="04-register-15.php" method="POST">
                <h4 class="text-center color-secondary" data-aos="fade-up" data-aos-delay="0">
                    สมัครรางวัลพระปกเกล้า
                </h4>
                <img class="sep-01" src="assets/img/hero/03.png" alt="Separation" data-aos="fade-up" data-aos-delay="150" />
                
                <h6 class="text-center fw-500 pt-2" data-aos="fade-up" data-aos-delay="300">
                    9. กรุณาทำเครื่องหมาย / ในช่องที่ตรงกับข้อมูลของหน่วยงานท่าน
                </h6>
                <div class="stepbar" data-aos="fade-up" data-aos-delay="300">
                    <div class="wrapper">
                        <a class="step" href="04-register-04.php">1</a>
                        <a class="step" href="04-register-05.php">2</a>
                        <a class="step" href="04-register-06.php">3</a>
                        <a class="step" href="04-register-08.php">4</a>
                        <a class="step" href="04-register-09.php">5</a>
                        <a class="step" href="04-register-10.php">6</a>
                        <a class="step" href="04-register-11.php">7</a>
                        <a class="step" href="04-register-12.php">8</a>
                        <a class="step active" href="04-register-14.php">9</a>
                    </div>
                </div>
                
                <div class="ss-box" data-aos="fade-up" data-aos-delay="450">
                    <h6 class="fw-400 pb-2">
                        ในรอบ 5 ปีที่ผ่านมา (2559-2563) อปท. ของท่าน 
                    </h6>
                    <div class="checkbox-container">
                        <input type="checkbox" id="checkbox_0" value="1" />
                        <label for="checkbox_0">
                            เคยสมัครเข้าร่วมโครงการรางวัลพระปกเกล้า และได้รับโล่รางวัลพระปกเกล้า
                        </label>
                    </div>
                    <div class="checkbox-container">
                        <input type="checkbox" id="checkbox_1" value="1" />
                        <label for="checkbox_1">
                            เคยสมัครเข้าร่วมโครงการรางวัลพระปกเกล้า และได้รับใบประกาศเกียรติคุณสถาบันพระปกเกล้า
                        </label>
                    </div>
                    <div class="checkbox-container">
                        <input type="checkbox" id="checkbox_2" value="1" />
                        <label for="checkbox_2">
                            เคยสมัครเข้าร่วมโครงการรางวัลพระปกเกล้า แต่ไม่เคยได้รับโล่รางวัลฯ หรือใบประกาศฯ เลย 
                        </label>
                    </div>
                    <div class="checkbox-container">
                        <input type="checkbox" id="checkbox_3" value="1" />
                        <label for="checkbox_3">
                            ไม่เคยสมัครเข้าร่วมโครงการรางวัลพระปกเกล้ามาก่อน ครั้งนี้เป็นครั้งแรกที่สมัครเข้าร่วมโครงการฯ 
                        </label>
                    </div>
                </div>
                
                <div class="d-flex ai-center jc-space-between mt-4" data-aos="fade-up" data-aos-delay="450">
                    <a class="btn btn-primary xs-mw-adaptive" href="04-register-13.php">
                        <i class="zmdi zmdi-chevron-left mr-2"></i> ก่อนหน้า
                    </a>
                    <a class="btn btn-gray mx-1 xs-mw-adaptive" href="#">
                        <img class="mr-1" src="assets/img/icon/04.png" alt="Icon" />
                        บันทึก
                    </a>
                    <button type="submit" class="btn btn-secondary xs-mw-adaptive">
                        ยืนยัน
                    </button>
                </div>
            </form>
        </div>
    </section>
    
    <?php include_once('include/footer.php'); ?>
    <?php include_once('include/script.php'); ?>
</body>
</html>
