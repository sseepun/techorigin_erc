<!DOCTYPE html>
<html lang="th">
<head>
    <?php include_once('include/header.php'); ?>
    <?php include_once('include/style.php'); ?>
</head>
<body class="policy-opened">
    <?php $pageActive = 'Home'; include_once('include/topnav.php'); ?>

    <section class="banner-01">
        <div class="slide-container">
            <div class="slides">
                <?php for($i=0; $i<5; $i++){?>
                    <div class="slide">
                        <img class="banner" src="assets/img/banner/01.jpg" alt="Banner" />
                    </div>
                <?php }?>
            </div>
            <div class="dots"></div>
            <div class="arrows"></div>
        </div>
    </section>

    <section class="search-01 section-padding-01">
        <div class="container">
            <h4 class="text-center color-secondary" data-aos="fade-up" data-aos-delay="0">
                ค้นหาองค์กรปกครองส่วนท้องถิ่นที่ได้รางวัล
            </h4>
            <img class="sep-01" src="assets/img/hero/03.png" alt="Separation" data-aos="fade-up" data-aos-delay="150" />
            <form action="05-local-award.php" method="GET" data-aos="fade-up" data-aos-delay="300">
                <div class="search-box mt bg-primary">
                    <input type="text" name="keyword" class="lg" placeholder="คำค้นหา..." required />
                </div>
                <div class="search-box bg-primary">
                    <div class="items">
                        <div class="item">
                            <select class="bg-gradient">
                                <option value="">ประเภทรางวัล</option>
                            </select>
                        </div>
                        <div class="item">
                            <select class="bg-gradient">
                                <option value="">รางวัล</option>
                            </select>
                        </div>
                        <div class="item">
                            <select class="bg-gradient">
                                <option value="">จังหวัด</option>
                            </select>
                        </div>
                        <div class="item">
                            <select class="bg-gradient">
                                <option value="">อำเภอ</option>
                            </select>
                        </div>
                        <div class="item">
                            <select class="bg-gradient">
                                <option value="">จากปี พ.ศ.</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="btns">
                    <button type="submit" class="btn btn-secondary">
                        <i class="zmdi zmdi-search mr-1"></i> ค้นหา
                    </button>
                </div>
            </form>
            <img class="sep-02" src="assets/img/hero/04.png" alt="Separation" />
        </div>
    </section>

    <section class="content-01 section-padding-02">
        <div class="container">
            <h4 class="text-center color-secondary" data-aos="fade-up" data-aos-delay="0">
                เกณฑ์การพิจารณา
            </h4>
            <img class="sep-01" src="assets/img/hero/03.png" alt="Separation" data-aos="fade-up" data-aos-delay="150" />
            <p class="text-center" data-aos="fade-up" data-aos-delay="300">
                การมอบรางวัลพระปกเกล้าแก่องค์กรปกครองส่วนท้องถิ่น แบ่งการมอบรางวัลพระปกเกล้า ออกเป็น 2 ระดับ คือ
            </p>
            <div class="grids" data-aos="fade-up" data-aos-delay="0">

                <div class="grid md-50 sm-100">
                    <div class="ss-title">
                        <div class="icon">
                            <img src="assets/img/hero/01.png" alt="Icon" />
                        </div>
                        <div class="text-container">
                            <h3>รางวัลพระปกเกล้า</h3>
                            <p>
                                ให้สำหรับองค์กรปกครองส่วนท้องถิ่นที่มีความเป็นเลิศในแต่ละด้าน
                                อันเป็นแบบอย่างที่ดีแก่องค์กรปกครองส่วนท้องถิ่นอื่นๆ ในประเทศไทย
                            </p>
                        </div>
                    </div>
                    <a class="ss-img" href="01-about.php">
                        <div class="img-bg lazy-bg" data-src="assets/img/content/01.jpg"></div>
                    </a>
                    <p class="p text-center">
                        สำหรับเกณฑ์การพิจารณารางวัลพระปกเกล้า จะให้ความสำคัญต่อการบริหารจัดการ 
                        และการดำเนินงานเพื่อพัฒนาในท้องถิ่น ซึ่งเกณฑ์ต่างๆ จะเกี่ยวข้องกับภารกิจหน้าที่
                        ขององค์กรปกครองส่วนท้องถิ่นตามที่กฎหมายกำหนด และเกี่ยวข้องกับรูปแบบและ
                        วิธีการบริหารจัดการและการพัฒนางานตามความเหมาะสมของแต่ละท้องถิ่นเป็นหลัก 
                        ประกอบกับการพิจารณาถึงบริบทการจัดการกับความเปลี่ยนแปลงของสังคม ที่ส่งผล
                        กระทบต่อการดำเนินงานขององค์กรปกครองส่วนท้องถิ่น และจัดการกับความท้าทาย
                        ใหม่ๆ ในการดำเนินงาน เป็นแบบอย่างที่ดีให้แก่องค์กรปกครองส่วนท้องถิ่นอื่น
                    </p>
                    <div class="btns">
                        <a class="btn btn-secondary" href="01-about.php">
                            อ่านรายละเอียด
                        </a>
                    </div>
                </div>

                <div class="grid md-50 sm-100">
                    <div class="ss-title">
                        <div class="icon">
                            <img src="assets/img/hero/02.png" alt="Icon" />
                        </div>
                        <div class="text-container">
                            <h3 class="color-primary">รางวัลพระปกเกล้าทองคำ</h3>
                            <p>
                                เพื่อเป็นแรงจูงใจแก่องค์กรปกครองส่วนท้องถิ่นที่เคยได้รับรางวัล
                                พระปกเกล้า มีการพัฒนาต่อยอดการดำเนินงานอย่างต่อเนื่อง
                            </p>
                        </div>
                    </div>
                    <a class="ss-img" href="02-about.php">
                        <div class="img-bg lazy-bg" data-src="assets/img/content/02.jpg"></div>
                    </a>
                    <p class="p text-center">
                        เป็นรางวัลที่ริเริ่มขึ้นในปี 2549 เพื่อเป็นแรงจูงใจแก่องค์กรปกครองส่วนท้องถิ่น
                        ที่เคยได้รับรางวัลพระปกเกล้า มีการพัฒนาต่อยอดการดำเนินงานอย่างต่อเนื่อง 
                        และสร้างสรรค์นวัตกรรมทางการบริหารงานท้องถิ่นอยู่เสมอ ทั้งนี้ รางวัลพระปก
                        เกล้าทองคำจะเป็นเครื่องหมายเชิดชูองค์กรปกครองส่วนท้องถิ่นว่าเป็นองค์กร
                        ปกครองส่วนท้องถิ่นที่บริหารงานและตอบสนองความต้องการของประชาชน และ
                        พื้นที่ อย่างโดดเด่นต่อเนื่อง รวมถึงมีการสร้างสรรค์นวัตกรรมทางการบริหารงาน
                        ใหม่ๆ อันเป็นแบบอย่างที่ดีแก่องค์กรปกครองส่วนท้องถิ่นอื่นในประเทศไทย
                    </p>
                    <div class="btns">
                        <a class="btn btn-secondary" href="02-about.php">
                            อ่านรายละเอียด
                        </a>
                    </div>
                </div>

            </div>
            <img class="sep-02" src="assets/img/hero/04.png" alt="Separation" />
        </div>
    </section>

    <section class="content-02 section-padding-02">
        <div class="container">
            <h4 class="text-center color-secondary" data-aos="fade-up" data-aos-delay="0">
                ข่าวสารและกิจกรรม
            </h4>
            <img class="sep-01" src="assets/img/hero/03.png" alt="Separation" data-aos="fade-up" data-aos-delay="150" />
            <div class="slide-container" data-aos="fade-up" data-aos-delay="300">
                <div class="slides">
                    <?php for($i=0; $i<2; $i++){?>

                        <div class="slide">
                            <div class="wrapper">
                                <a class="ss-card" href="#">
                                    <div class="ss-img horizontal">
                                        <div class="img-bg" style="background-image:url('assets/img/content/03.jpg');"></div>
                                    </div>
                                    <div class="content">
                                        <div class="icon">
                                            <div class="num">01</div>
                                            <div class="date">
                                                กันยายน <br> 2020
                                            </div>
                                        </div>
                                        <div class="text-container">
                                            <h6>
                                                พิธีมอบรางวัลพระปกเกล้าทองคำ 
                                                และรางวัลพระปกเกล้า ประจำปี 2559 
                                                พิธีมอบรางวัลพระปกเกล้าทองคำ 
                                                และรางวัลพระปกเกล้า ประจำปี 2559
                                            </h6>
                                            <p>
                                                พิธีมอบรางวัลพระปกเกล้าทองคำและรางวัล
                                                พระปกเกล้า ประจำปี 2559 
                                                พิธีมอบรางวัลพระปกเกล้าทองคำและรางวัล
                                                พระปกเกล้า ประจำปี 2559
                                            </p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        
                        <div class="slide">
                            <div class="wrapper">
                                <a class="ss-card" href="#">
                                    <div class="ss-img horizontal">
                                        <div class="img-bg" style="background-image:url('assets/img/content/04.jpg');"></div>
                                    </div>
                                    <div class="content">
                                        <div class="icon">
                                            <div class="num">01</div>
                                            <div class="date">
                                                กันยายน <br> 2020
                                            </div>
                                        </div>
                                        <div class="text-container">
                                            <h6>
                                                โครงการสัมมนารางวัลพระปกเกล้ากับ
                                                การพัฒนานวัตกรรมและความคิด 
                                                โครงการสัมมนารางวัลพระปกเกล้ากับ
                                                การพัฒนานวัตกรรมและความคิด 
                                            </h6>
                                            <p>
                                                สัมมนา รางวัลพระปกเกล้ากับการพัฒนานวัตกรรม
                                                และความคิดสร้างสรรค์เพื่อยกระดับมาตรฐาน 
                                                สัมมนา รางวัลพระปกเกล้ากับการพัฒนานวัตกรรม
                                                และความคิดสร้างสรรค์เพื่อยกระดับมาตรฐาน 
                                            </p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        
                        <div class="slide">
                            <div class="wrapper">
                                <a class="ss-card" href="#">
                                    <div class="ss-img horizontal">
                                        <div class="img-bg" style="background-image:url('assets/img/content/05.jpg');"></div>
                                    </div>
                                    <div class="content">
                                        <div class="icon">
                                            <div class="num">01</div>
                                            <div class="date">
                                                กันยายน <br> 2020
                                            </div>
                                        </div>
                                        <div class="text-container">
                                            <h6>
                                                อบรมเชิงปฏิบัติการตรงจุดตรงประเด็น 
                                                เทคนิคการเตรียมใบสมัครและ 
                                                อบรมเชิงปฏิบัติการตรงจุดตรงประเด็น 
                                                เทคนิคการเตรียมใบสมัครและ 
                                            </h6>
                                            <p>
                                                เปลี่ยนวันจัดอบรมจากวันจันทร์ 25 เมษายน 2559 
                                                เป็นวันศุกร์ที่ 29 เมษายน 2559 อบรมเชิง 
                                                เปลี่ยนวันจัดอบรมจากวันจันทร์ 25 เมษายน 2559 
                                                เป็นวันศุกร์ที่ 29 เมษายน 2559 อบรมเชิง 
                                            </p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>

                    <?php }?>
                </div>
                <div class="dots"></div>
            </div>
            <img class="sep-02" src="assets/img/hero/04.png" alt="Separation" />
        </div>
    </section>

    <section class="content-03 section-padding-02">
        <div class="container">
            <h4 class="text-center color-secondary" data-aos="fade-up" data-aos-delay="0">
                คลิปวีดิโอ
            </h4>
            <img class="sep-01" src="assets/img/hero/03.png" alt="Separation" data-aos="fade-up" data-aos-delay="150" />
            <div class="slide-container" data-aos="fade-up" data-aos-delay="300">
                <div class="slides">
                    <?php for($i=0; $i<5; $i++){?>
                        <div class="slide">
                            <div class="wrapper">
                                <div class="ss-video no-hover">
                                    <div class="img-bg" style="background-image:url('assets/img/content/01.jpg');"></div>
                                    <div class="play-container">
                                        <a class="icon" href="https://www.youtube.com/watch?v=u3VFzuUiTGw" data-fancybox>
                                            <i class="zmdi zmdi-play"></i>
                                        </a>
                                    </div>
                                </div>
                                <h6>
                                    การเข้าลงชื่อเพื่อเสนอกฎหมาย
                                </h6>
                            </div>
                        </div>
                    <?php }?>
                </div>
                <div class="dots"></div>
            </div>
            <img class="sep-02" src="assets/img/hero/04.png" alt="Separation" />
        </div>
    </section>

    <section class="section-padding-02">
        <div class="container">
            <h4 class="text-center color-secondary" data-aos="fade-up" data-aos-delay="0">
                สอบถามข้อมูล
            </h4>
            <img class="sep-01" src="assets/img/hero/03.png" alt="Separation" data-aos="fade-up" data-aos-delay="150" />
            <form action="" method="POST" data-aos="fade-up" data-aos-delay="300">
                <div class="gallery-grids mt-4">
                    <div class="grid lg-50">
                        <input type="text" class="gray" placeholder="ชื่อ - นามสกุล *" required />
                    </div>
                    <div class="grid lg-50">
                        <input type="email" class="gray" placeholder="อีเมล *" required />
                    </div>
                    <div class="grid lg-50">
                        <input type="text" class="gray" placeholder="เบอร์โทร" />
                    </div>
                    <div class="grid lg-50">
                        <input type="text" class="gray" placeholder="ชื่อหน่วยงาน" />
                    </div>
                    <div class="grid sm-100">
                        <select class="gray">
                            <option value="">เรื่องที่ต้องการติดต่อ</option>
                        </select>
                    </div>
                    <div class="grid sm-100">
                        <textarea class="gray" rows="5" placeholder="ข้อความ" required></textarea>
                    </div>
                </div>
                <div class="btns">
                    <button type="submit" class="btn btn-secondary">
                        ส่งข้อความ
                    </button>
                </div>
            </form>
            <img class="sep-02" src="assets/img/hero/04.png" alt="Separation" />
        </div>
    </section>

    <section class="client-01 section-padding-03">
        <div class="container">
            <h4 class="text-center color-secondary" data-aos="fade-up" data-aos-delay="0">
                เว็บไซต์ที่เกี่ยวข้อง
            </h4>
            <img class="sep-01" src="assets/img/hero/03.png" alt="Separation" data-aos="fade-up" data-aos-delay="150" />
            <div class="clients" data-aos="fade-up" data-aos-delay="300">
                <a class="client" href="#">
                    <img src="assets/img/client/01.png" alt="Client" />
                </a>
                <a class="client" href="#">
                    <img src="assets/img/client/02.png" alt="Client" />
                </a>
            </div>
        </div>
    </section>
    
    <?php include_once('include/footer.php'); ?>
    <?php include_once('include/script.php'); ?>
</body>
</html>
