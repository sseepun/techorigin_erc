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
            <form action="04-register-06.php" method="POST">
                <h4 class="text-center color-secondary" data-aos="fade-up" data-aos-delay="0">
                    สมัครรางวัลพระปกเกล้า
                </h4>
                <img class="sep-01" src="assets/img/hero/03.png" alt="Separation" data-aos="fade-up" data-aos-delay="150" />
                
                <h6 class="text-center fw-500 pt-2" data-aos="fade-up" data-aos-delay="300">
                    2. การจัดทำแผนและการประสานแผนพัฒนาท้องถิ่น
                </h6>
                <div class="stepbar" data-aos="fade-up" data-aos-delay="300">
                    <div class="wrapper">
                        <div class="step">1</div>
                        <div class="step active">2</div>
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
                    <h6 class="fw-500">
                        2.1 อปท. ของท่านมีนโยบาย ยุทธศาสตร์ แผนงาน การพัฒนาท้องถิ่นที่เกี่ยวข้องกับด้านความโปร่งใส 
                        และส่งเสริมการมีส่วนร่วมของประชาชน หรือไม่ 
                    </h6>
                    <div class="radio-adaptive mt-2">
                        <div class="radio-container">
                            <input type="radio" name="radio_0" id="radio_0_0" value="0" />
                            <label for="radio_0_0">
                                ไม่มี
                            </label>
                        </div>
                        <div class="radio-container">
                            <input type="radio" name="radio_0" id="radio_0_1" value="1" />
                            <label for="radio_0_1">
                                มี นโยบาย ยุทธศาสตร์ แผนงาน <span class="color-secondary">(ระบุ)</span>
                            </label>
                        </div>
                    </div>
                    <textarea rows="6" class="sm border spacing" placeholder="นโยบาย ยุทธศาสตร์ แผนงาน ที่เกี่ยวข้องกับความโปร่งใสขององค์กรปกครองส่วนท้องถิ่น ..."></textarea>
                    <textarea rows="6" class="sm border spacing" placeholder="นโยบาย ยุทธศาสตร์ แผนงาน ที่เกี่ยวข้องกับการส่งเสริมการมีส่วนร่วมของประชาชน ..."></textarea>
                </div>
                
                <div class="ss-box bg-soft-primary mt-4" data-aos="fade-up" data-aos-delay="0">
                    <h6 class="fw-500">
                        2.2 ในการจัดทำหรือปรับแผนพัฒนาท้องถิ่นได้เปิดโอกาสให้หน่วยราชการ ภาคเอกชน และภาคประชาชน 
                        เข้ามามีส่วนร่วมในการจัดทำหรือปรับแผนพัฒนาท้องถิ่น บ้าง หรือไม่
                    </h6>
                    <div class="radio-adaptive mt-2">
                        <div class="radio-container">
                            <input type="radio" name="radio_1" id="radio_1_0" value="0" />
                            <label for="radio_1_0">
                                ไม่มี
                            </label>
                        </div>
                        <div class="radio-container">
                            <input type="radio" name="radio_1" id="radio_1_1" value="1" />
                            <label for="radio_1_1">
                                มีการเปิดโอกาส <span class="color-secondary">(ระบุหน่วยงาน / องค์กรที่เข้ามามีส่วนร่วมเป็นข้อๆ)</span>
                            </label>
                        </div>
                    </div>
                    <textarea rows="6" class="sm border spacing" placeholder="ระบุหน่วยงาน / องค์กรที่เข้ามามีส่วนร่วมเป็นข้อๆ ..."></textarea>

                    <h6 class="fw-500 spacing">
                        2.3 หากองค์กรปกครองส่วนท้องถิ่นมีการเปิดโอกาส (ตามข้อ 2.2) โปรดระบุวิธีการให้หน่วยงานราชการ 
                        ภาคเอกชน และภาคประชาชน มีส่วนร่วมในการจัดทำหรือปรับแผนพัฒนา โดยวิธีการใดบ้างเป็นข้อๆ 
                    </h6>
                    <textarea rows="6" class="sm border spacing" placeholder="ระบุวิธีการเป็นข้อๆ ..."></textarea>
                </div>
                
                <div class="ss-box mt-4" data-aos="fade-up" data-aos-delay="0">
                    <h6 class="fw-500">
                        2.4 องค์กรปกครองส่วนท้องถิ่นของท่านให้หน่วยราชการ/ ภาคเอกชน /ภาคประชาชน 
                        มีส่วนร่วมในการติดตามประเมินผลแผนพัฒนาท้องถิ่น หรือไม่
                    </h6>
                    <div class="radio-adaptive mt-2">
                        <div class="radio-container">
                            <input type="radio" name="radio_2" id="radio_2_0" value="0" />
                            <label for="radio_2_0">
                                ไม่มี
                            </label>
                        </div>
                        <div class="radio-container">
                            <input type="radio" name="radio_2" id="radio_2_1" value="1" />
                            <label for="radio_2_1">
                                มี <span class="color-secondary">(ระบุหน่วยงาน / องค์กรที่เข้ามามีส่วนร่วมเป็นข้อๆ)</span>
                            </label>
                        </div>
                    </div>
                    <textarea rows="6" class="sm border spacing" placeholder="ระบุหน่วยงาน / องค์กรที่เข้ามามีส่วนร่วมเป็นข้อๆ ..."></textarea>

                    <h6 class="fw-500 spacing">
                        2.5 หากองค์กรปกครองส่วนท้องถิ่นมีการเปิดโอกาส (ตามข้อ 2.4) โปรดระบุวิธีการให้หน่วยงานราชการ 
                        ภาคเอกชน และภาคประชาชน มีส่วนร่วมในการติดตามประเมินผลแผนพัฒนา โดยวิธีการใดบ้างเป็นข้อๆ 
                    </h6>
                    <textarea rows="6" class="sm border spacing" placeholder="ระบุวิธีการเป็นข้อๆ ..."></textarea>
                </div>

                <div class="d-flex ai-center jc-space-between mt-4" data-aos="fade-up" data-aos-delay="0">
                    <a class="btn btn-primary xs-mw-adaptive" href="04-register-04.php">
                        <i class="zmdi zmdi-chevron-left mr-2"></i> ก่อนหน้า
                    </a>
                    <a class="btn btn-gray mx-1 xs-mw-adaptive" href="#">
                        <img class="mr-1" src="assets/img/icon/04.png" alt="Icon" />
                        บันทึก
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
