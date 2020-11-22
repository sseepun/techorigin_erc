<!DOCTYPE html>
<html lang="th">
<head>
    <?php include_once('include/header.php'); ?>
    <?php include_once('include/style.php'); ?>
</head>
<body>
    <?php include_once('include/topnav.php'); ?>

    <section class="section-padding">
        <div class="container">
            <h4 class="text-center color-secondary" data-aos="fade-up" data-aos-delay="0">
                สมัครรางวัลพระปกเกล้า
            </h4>
            <img class="sep-01" src="assets/img/hero/03.png" alt="Separation" data-aos="fade-up" data-aos-delay="150" />
            
            <h6 class="text-center fw-500 pt-2" data-aos="fade-up" data-aos-delay="300">
                1. ข้อมูลทั่วไปองค์กรปกครองส่วนท้องถิ่น
            </h6>
            <div class="stepbar" data-aos="fade-up" data-aos-delay="300">
                <div class="wrapper">
                    <div class="step active">1</div>
                    <div class="step">2</div>
                    <div class="step">3</div>
                    <div class="step">4</div>
                    <div class="step">5</div>
                    <div class="step">6</div>
                    <div class="step">7</div>
                    <div class="step">8</div>
                    <div class="step">9</div>
                </div>
            </div>
            
            <div class="ss-box" data-aos="fade-up" data-aos-delay="450">
                <div class="gallery-grids">
                    <div class="grid sm-100 mt-0">
                        <input type="text" class="sm border" placeholder="ชื่อหน่วยงาน" />
                    </div>
                    <div class="grid sm-50">
                        <input type="email" class="sm border" placeholder="อีเมล" />
                    </div>
                    <div class="grid sm-50">
                        <input type="text" class="sm border" placeholder="เบอร์โทร" />
                    </div>
                    <div class="grid sm-100">
                        <textarea rows="6" class="sm border" placeholder="สถานที่ตั้งขององค์กรปกครองส่วนท้องถิ่น"></textarea>
                    </div>
                </div>
            </div>
            
            <div class="ss-box bg-soft-primary mt-4" data-aos="fade-up" data-aos-delay="0">
                <p class="fw-500">
                    จำนวนประชากรในเขตองค์กรปกครองส่วนท้องถิ่น
                    <input type="number" class="sm input-inline border mx-1" step="1" 
                    placeholder="จำนวน" style="width:6.5rem!important;" /> 
                    คน 
                </p>
                <p class="fw-500 spacing">
                    พื้นที่ขององค์กรปกครองส่วนท้องถิ่น
                    <input type="number" class="sm input-inline border mx-1" step="1" 
                    placeholder="จำนวน" style="width:6.5rem!important;" /> 
                    ตารางกิโลเมตร ครอบคลุม 
                    <input type="number" class="sm input-inline border mx-1" step="1" 
                    placeholder="จำนวน" style="width:6.5rem!important;" /> 
                    หมู่บ้าน / ชุมชน
                </p>
            </div>
            
            <div class="ss-box mt-4" data-aos="fade-up" data-aos-delay="0">
                <p class="fw-500">
                    รายได้ขององค์กรปกครองส่วนท้องถิ่น 
                    <span class="fw-300">(ไม่รวมเงินอุดหนุน, เงินกู้, เงินจ่ายขาดจากเงินสะสม)</span> 
                    <input type="number" class="sm input-inline border mx-1" step="1" 
                    placeholder="จำนวน" style="width:6.5rem!important;" /> 
                    บาท 
                </p>
                <p class="fw-500 spacing">
                    และรายได้จากเงินอุดหนุน 
                    <input type="number" class="sm input-inline border mx-1" step="1" 
                    placeholder="จำนวน" style="width:6.5rem!important;" /> 
                    บาท
                </p>
            </div>

            <div class="d-flex ai-center jc-space-between mt-4" data-aos="fade-up" data-aos-delay="0">
                <a class="btn btn-primary xs-mw-adaptive" href="#">
                    <i class="zmdi zmdi-chevron-left mr-2"></i> ก่อนหน้า
                </a>
                <a class="btn btn-gray mx-1 xs-mw-adaptive" href="#">
                    <img class="mr-1" src="assets/img/icon/04.png" alt="Icon" />
                    บันทึก
                </a>
                <a class="btn btn-secondary xs-mw-adaptive" href="#">
                    ยืนยัน
                </a>
            </div>

        </div>
    </section>
    
    <?php include_once('include/footer.php'); ?>
    <?php include_once('include/script.php'); ?>
</body>
</html>
