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
            <form action="04-register-04.php" method="POST">
                <h4 class="text-center color-secondary" data-aos="fade-up" data-aos-delay="0">
                    สมัครรางวัลพระปกเกล้า
                </h4>
                <img class="sep-01" src="assets/img/hero/03.png" alt="Separation" data-aos="fade-up" data-aos-delay="150" />
                <div class="grids" data-aos="fade-up" data-aos-delay="300">
                    <div class="grid sm-100">
                        <div class="ss-box">
                            <h4 class="text-center">คำชี้แจง</h4>
                            <p class="mt-4">
                                1. ข้อมูลที่กรอกลงในแบบฟอร์ม ให้ใช้ข้อมูลและผลการปฏิบัติงานของปีงบประมาณ 2563 (ตั้งแต่วันที่ 1 ต.ค. 2562 ถึง 30 ก.ย. 2563) 
                                และให้ส่งแบบฟอร์มภายในวันจันทร์ที่ 25 พฤษภาคม 2564
                            </p>
                            <p class="mt-3">
                                2. ข้อมูลสอบถามเพิ่มเติมที่ระบุไว้ในวงเล็บท้ายคำถามแต่ละข้อ มีความสำคัญต่อเกณฑ์การพิจารณาของคณะกรรมการ 
                                โปรดระบุข้อมูลให้ครบถ้วน ซึ่งอาจจะใช้ประกอบคำถามหลายข้อก็ได้
                            </p>
                            <p class="mt-3">
                                3. ท่านสามารถดาวน์โหลด “คู่มือการสมัครโครงการรางวัลพระปกเกล้า 2564” ได้จาก 
                                <a class="color-secondary h-color-primary fw-500" href="www.kpi.ac.th" target="_blank">
                                    www.kpi.ac.th
                                </a>
                            </p>
                            <div class="checkbox-container mt-4">
                                <input type="checkbox" id="checkbox" value="1" required />
                                <label for="checkbox">
                                    ข้าพเจ้าขอรับรองว่าข้อความที่ระบุไว้ในใบสมัครนี้เป็นความจริงและครบถ้วน ข้าพเจ้าทราบดีว่าหากระบุข้อมูลหรือส่งเอกสารที่ผิดจากความเป็นจริง 
                                    จะเป็นสาเหตุให้ถูกตัดสิทธิในการคัดเลือกเข้ารับรางวัลพระปกเกล้า และข้าพเจ้ายอมรับว่าการตัดสินของคณะกรรมการฯ ถือเป็นที่สิ้นสุด
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="d-flex ai-center jc-space-between mt-4" data-aos="fade-up" data-aos-delay="450">
                    <a class="btn btn-primary xs-mw-adaptive" href="04-register-02.php">
                        <i class="zmdi zmdi-chevron-left mr-2"></i> ก่อนหน้า
                    </a>
                    <button type="submit" class="btn btn-primary xs-mw-adaptive">
                        ต่อไป <i class="zmdi zmdi-chevron-right ml-2"></i>
                    </button>
                </div>
            </form>
        </div>
    </section>
    
    <?php include_once('include/footer.php'); ?>
    <?php include_once('include/script.php'); ?>
</body>
</html>
