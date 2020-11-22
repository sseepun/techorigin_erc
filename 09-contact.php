<!DOCTYPE html>
<html lang="th">
<head>
    <?php include_once('include/header.php'); ?>
    <?php include_once('include/style.php'); ?>
</head>
<body>
    <?php $pageActive = 'Contact'; include_once('include/topnav.php'); ?>

    <section class="contact-01 section-padding">
        <div class="container">
            <h4 class="text-center color-secondary" data-aos="fade-up" data-aos-delay="0">
                ติดต่อเรา
            </h4>
            <img class="sep-01" src="assets/img/hero/03.png" alt="Separation" data-aos="fade-up" data-aos-delay="150" />

            <!-- Footer -->
            <div class="footer b-bottom-dashed bcolor-gray" data-aos="fade-up" data-aos-delay="300">
                <div class="items">
                    <div class="item">
                        <div class="icon"><i class="zmdi zmdi-pin"></i></div>
                        <div class="text-container color-black">
                            <h4 class="fw-400">วิทยาลัยพัฒนาการปกครองท้องถิ่น สถาบันพระปกเกล้า</h4>
                            <p class="fw-400">
                                เลขที่ 120 หมู่ 3 ถนนแจ้งวัฒนะ แขวงทุ่งสองห้อง เขตหลักสี่ กรุงเทพ 10210
                            </p>
                        </div>
                    </div>
                    <div class="item">
                        <div class="icon"><i class="zmdi zmdi-phone"></i></div>
                        <div class="text-container">
                            <a class="color-black h-color-primary" href="tel:021419563">
                                <h6 class="fw-400">02-1419563-76</h6>
                            </a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="icon"><i class="zmdi zmdi-email"></i></div>
                        <div class="text-container">
                            <a class="color-black h-color-primary" href="mailto:webmaster@kpi.ac.th">
                                <h6 class="fw-400">webmaster@kpi.ac.th</h6>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <form action="" method="POST" data-aos="fade-up" data-aos-delay="300">
                <div class="gallery-grids">
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

        </div>
    </section>

    <div class="map-container">
        <iframe src="https://www.google.com/maps/embed/v1/place?q=place_id:ChIJNdtz08qd4jART4TRAkRJ4m4&key=AIzaSyBKkodq5Y5jt-mk1Cvs6JwYASj8NMT_MKA" allowfullscreen></iframe>
    </div>
    
    <?php include_once('include/footer.php'); ?>
    <?php include_once('include/script.php'); ?>
</body>
</html>
