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
            <form action="04-register-03.php" method="POST">
                <h4 class="text-center color-secondary" data-aos="fade-up" data-aos-delay="0">
                    สมัครรางวัลพระปกเกล้า
                </h4>
                <img class="sep-01" src="assets/img/hero/03.png" alt="Separation" data-aos="fade-up" data-aos-delay="150" />
                
                <div class="grids" data-aos="fade-up" data-aos-delay="300">
                    <div class="grid sm-100">
                        <div class="ss-box">
                            <h4 class="text-center">รางวัลที่ต้องการสมัคร</h4>
                            <div class="tab-container">
                                <div class="tabs">
                                    <div class="tab active" data-tab="0">
                                        รางวัลพระปกเกล้า
                                    </div>
                                    <div class="tab" data-tab="1">
                                        รางวัลพระปกเกล้าทองคำ
                                    </div>
                                </div>
                                <div class="tab-contents">
                                    
                                    <div class="tab-content active" data-tab="0">
                                        <h5 class="fw-500 text-center">ประเภทของรางวัลพระปกเกล้า</h5>
                                        <div class="pt-1">
                                            <div class="radio-container">
                                                <input type="radio" name="radio_0" id="radio_0_0" value="0" checked />
                                                <label for="radio_0_0">
                                                    ด้านความโปร่งใสและส่งเสริมการมีส่วนร่วมของประชาชน
                                                </label>
                                            </div>
                                            <div class="radio-container">
                                                <input type="radio" name="radio_0" id="radio_0_1" value="1" />
                                                <label for="radio_0_1">
                                                    ด้านการเสริมสร้างสันติสุขและความสมานฉันท์
                                                </label>
                                            </div>
                                            <div class="radio-container">
                                                <input type="radio" name="radio_0" id="radio_0_2" value="2" />
                                                <label for="radio_0_2">
                                                    ด้านการเสริมสร้างเครือข่าย รัฐ เอกชน และประชาสังคม
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="tab-content" data-tab="1">
                                        <h5 class="fw-500 text-center">ประเภทของรางวัลพระปกเกล้าทองคำ</h5>
                                        <div class="pt-1">
                                            <div class="radio-container">
                                                <input type="radio" name="radio_1" id="radio_1_0" value="0" checked />
                                                <label for="radio_1_0">
                                                    ด้านความโปร่งใสและส่งเสริมการมีส่วนร่วมของประชาชน
                                                </label>
                                            </div>
                                            <div class="radio-container">
                                                <input type="radio" name="radio_1" id="radio_1_1" value="1" />
                                                <label for="radio_1_1">
                                                    ด้านการเสริมสร้างสันติสุขและความสมานฉันท์
                                                </label>
                                            </div>
                                            <div class="radio-container">
                                                <input type="radio" name="radio_1" id="radio_1_2" value="2" />
                                                <label for="radio_1_2">
                                                    ด้านการเสริมสร้างเครือข่าย รัฐ เอกชน และประชาสังคม
                                                </label>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="d-flex ai-center jc-space-between mt-4" data-aos="fade-up" data-aos-delay="450">
                    <a class="btn btn-primary xs-mw-adaptive" href="04-register-01.php">
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
