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
            <form action="04-register-08.php" method="POST">
                <h4 class="text-center color-secondary" data-aos="fade-up" data-aos-delay="0">
                    สมัครรางวัลพระปกเกล้า
                </h4>
                <img class="sep-01" src="assets/img/hero/03.png" alt="Separation" data-aos="fade-up" data-aos-delay="150" />
                
                <h6 class="text-center fw-500 pt-2" data-aos="fade-up" data-aos-delay="300">
                    3. การจัดทำโครงการและบริการสาธารณะ
                </h6>
                <div class="stepbar" data-aos="fade-up" data-aos-delay="300">
                    <div class="wrapper">
                        <div class="step">1</div>
                        <div class="step">2</div>
                        <div class="step active">3</div>
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
                        3.2 การจัดทำโครงการและบริการสาธารณะเพื่อตอบสนองความท้าทายใหม่
                    </h6>
                    <p class="fw-500 spacing">
                        ( 3.2.1 ) องค์กรปกครองส่วนท้องถิ่นของท่าน มีการจัดทำแผนงาน หรือโครงการ 
                        หรือกิจกรรมให้ความช่วยเหลือผู้ด้อยโอกาสทางสังคม หรือไม่
                    </p>
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
                                มี <span class="color-secondary">(ระบุแผนงาน หรือ โครงการ หรือ กิจกรรม พร้อมแนบเอกสาร)</span>
                            </label>
                        </div>
                    </div>
                    <div class="spacing">
                        <?php for($i=0; $i<3; $i++){?>
                            <div class="position-relative mt-2">
                                <div class="input-prefix"><?= $i+1 ?></div>
                                <input type="text" class="sm border" placeholder="ชื่อแผนงาน หรือ โครงการ หรือ กิจกรรม" />
                                <div class="input-suffix btn-file">
                                    แนบไฟล์ 
                                    <i class="zmdi zmdi-plus-square color-primary ml-1"></i>
                                    <input type="file" />
                                </div>
                            </div>
                        <?php }?>
                        <div class="btns text-center mt-4">
                            <a class="fw-500 color-black h-color-primary" href="#">
                                เพิ่มแผนงาน +
                            </a>
                        </div>
                    </div>
                </div>
                
                <div class="ss-box bg-soft-primary mt-4" data-aos="fade-up" data-aos-delay="0">
                    <p class="fw-500">
                        ( 3.2.2 ) องค์กรปกครองส่วนท้องถิ่นของท่านมีการจัดทำแผนงาน หรือ โครงการ หรือ กิจกรรมทรัพยากรธรรมชาติ 
                        สิ่งแวดล้อม การลดภาวะโลกร้อน การใช้พลังงานทางเลือก หรือพลังงานทดแทน หรือไม่
                    </p>
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
                                มี <span class="color-secondary">(ระบุแผนงาน หรือ โครงการ หรือ กิจกรรม พร้อมแนบเอกสาร)</span>
                            </label>
                        </div>
                    </div>
                    <div class="spacing">
                        <?php for($i=0; $i<3; $i++){?>
                            <div class="position-relative mt-2">
                                <div class="input-prefix"><?= $i+1 ?></div>
                                <input type="text" class="sm border" placeholder="ชื่อแผนงาน หรือ โครงการ หรือ กิจกรรม" />
                                <div class="input-suffix btn-file">
                                    แนบไฟล์ 
                                    <i class="zmdi zmdi-plus-square color-primary ml-1"></i>
                                    <input type="file" />
                                </div>
                            </div>
                        <?php }?>
                        <div class="btns text-center mt-4">
                            <a class="fw-500 color-black h-color-primary" href="#">
                                เพิ่มแผนงาน +
                            </a>
                        </div>
                    </div>
                </div>
                
                <div class="ss-box mt-4" data-aos="fade-up" data-aos-delay="0">
                    <p class="fw-500">
                        ( 3.2.3 ) องค์กรปกครองส่วนท้องถิ่นของท่านมีการจัดทำแผนงาน หรือ โครงการ หรือ 
                        กิจกรรมเกี่ยวกับการรองรับความเสี่ยงด้านสาธารณภัย และภัยพิบัติ หรือไม่ 
                    </p>
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
                                มี <span class="color-secondary">(ระบุแผนงาน หรือ โครงการ หรือ กิจกรรม พร้อมแนบเอกสาร)</span>
                            </label>
                        </div>
                    </div>
                    <div class="spacing">
                        <?php for($i=0; $i<3; $i++){?>
                            <div class="position-relative mt-2">
                                <div class="input-prefix"><?= $i+1 ?></div>
                                <input type="text" class="sm border" placeholder="ชื่อแผนงาน หรือ โครงการ หรือ กิจกรรม" />
                                <div class="input-suffix btn-file">
                                    แนบไฟล์ 
                                    <i class="zmdi zmdi-plus-square color-primary ml-1"></i>
                                    <input type="file" />
                                </div>
                            </div>
                        <?php }?>
                        <div class="btns text-center mt-4">
                            <a class="fw-500 color-black h-color-primary" href="#">
                                เพิ่มแผนงาน +
                            </a>
                        </div>
                    </div>
                </div>
                
                <div class="ss-box bg-soft-primary mt-4" data-aos="fade-up" data-aos-delay="0">
                    <p class="fw-500">
                        ( 3.2.4 ) องค์กรปกครองส่วนท้องถิ่นมีการจัดทำแผนงาน หรือ โครงการ หรือ 
                        กิจกรรมเกี่ยวกับการอนุรักษ์ศิลปวัฒนธรรม การอนุรักษ์ภูมิปัญญาท้องถิ่น หรือ 
                        การเสริมสร้างอัตลักษณ์ท้องถิ่น บ้างหรือไม่ 
                    </p>
                    <div class="radio-adaptive mt-2">
                        <div class="radio-container">
                            <input type="radio" name="radio_3" id="radio_3_0" value="0" />
                            <label for="radio_3_0">
                                ไม่มี
                            </label>
                        </div>
                        <div class="radio-container">
                            <input type="radio" name="radio_3" id="radio_3_1" value="1" />
                            <label for="radio_3_1">
                                มี <span class="color-secondary">(ระบุแผนงาน หรือ โครงการ หรือ กิจกรรม พร้อมแนบเอกสาร)</span>
                            </label>
                        </div>
                    </div>
                    <div class="spacing">
                        <?php for($i=0; $i<3; $i++){?>
                            <div class="position-relative mt-2">
                                <div class="input-prefix"><?= $i+1 ?></div>
                                <input type="text" class="sm border" placeholder="ชื่อแผนงาน หรือ โครงการ หรือ กิจกรรม" />
                                <div class="input-suffix btn-file">
                                    แนบไฟล์ 
                                    <i class="zmdi zmdi-plus-square color-primary ml-1"></i>
                                    <input type="file" />
                                </div>
                            </div>
                        <?php }?>
                        <div class="btns text-center mt-4">
                            <a class="fw-500 color-black h-color-primary" href="#">
                                เพิ่มแผนงาน +
                            </a>
                        </div>
                    </div>
                </div>
                
                <div class="ss-box mt-4" data-aos="fade-up" data-aos-delay="0">
                    <p class="fw-500">
                        ( 3.2.5 ) องค์กรปกครองส่วนท้องถิ่น มีการจัดทำแผนงาน หรือ โครงการ หรือ 
                        กิจกรรมเกี่ยวกับการลดความเหลื่อมล้ำทางสังคมและการส่งเสริม
                        ความเสมอภาคทางเพศ บ้างหรือไม่	
                    </p>
                    <div class="radio-adaptive mt-2">
                        <div class="radio-container">
                            <input type="radio" name="radio_4" id="radio_4_0" value="0" />
                            <label for="radio_4_0">
                                ไม่มี
                            </label>
                        </div>
                        <div class="radio-container">
                            <input type="radio" name="radio_4" id="radio_4_1" value="1" />
                            <label for="radio_4_1">
                                มี <span class="color-secondary">(ระบุแผนงาน หรือ โครงการ หรือ กิจกรรม พร้อมแนบเอกสาร)</span>
                            </label>
                        </div>
                    </div>
                    <div class="spacing">
                        <?php for($i=0; $i<3; $i++){?>
                            <div class="position-relative mt-2">
                                <div class="input-prefix"><?= $i+1 ?></div>
                                <input type="text" class="sm border" placeholder="ชื่อแผนงาน หรือ โครงการ หรือ กิจกรรม" />
                                <div class="input-suffix btn-file">
                                    แนบไฟล์ 
                                    <i class="zmdi zmdi-plus-square color-primary ml-1"></i>
                                    <input type="file" />
                                </div>
                            </div>
                        <?php }?>
                        <div class="btns text-center mt-4">
                            <a class="fw-500 color-black h-color-primary" href="#">
                                เพิ่มแผนงาน +
                            </a>
                        </div>
                    </div>
                </div>
                
                <div class="ss-box bg-soft-primary mt-4" data-aos="fade-up" data-aos-delay="0">
                    <p class="fw-500">
                        ( 3.2.6 ) องค์กรปกครองส่วนท้องถิ่นมี การจัดทำแผนงาน หรือ โครงการ หรือ กิจกรรมอื่นๆ 
                        นอกเหนือจากที่ระบุในข้อ 3.1.2-3.1.5 ที่เป็นการแก้ปัญหารับมือกับความท้าทายใหม่ๆ 
                        เฉพาะพื้นที่ของท่านบ้างหรือไม่  
                    </p>
                    <div class="radio-adaptive mt-2">
                        <div class="radio-container">
                            <input type="radio" name="radio_5" id="radio_5_0" value="0" />
                            <label for="radio_5_0">
                                ไม่มี
                            </label>
                        </div>
                        <div class="radio-container">
                            <input type="radio" name="radio_5" id="radio_5_1" value="1" />
                            <label for="radio_5_1">
                                มี <span class="color-secondary">(ระบุแผนงาน หรือ โครงการ หรือ กิจกรรม พร้อมแนบเอกสาร)</span>
                            </label>
                        </div>
                    </div>
                    <div class="spacing">
                        <?php for($i=0; $i<3; $i++){?>
                            <div class="position-relative mt-2">
                                <div class="input-prefix"><?= $i+1 ?></div>
                                <input type="text" class="sm border" placeholder="ชื่อแผนงาน หรือ โครงการ หรือ กิจกรรม" />
                                <div class="input-suffix btn-file">
                                    แนบไฟล์ 
                                    <i class="zmdi zmdi-plus-square color-primary ml-1"></i>
                                    <input type="file" />
                                </div>
                            </div>
                        <?php }?>
                        <div class="btns text-center mt-4">
                            <a class="fw-500 color-black h-color-primary" href="#">
                                เพิ่มแผนงาน +
                            </a>
                        </div>
                    </div>
                </div>

                <div class="d-flex ai-center jc-space-between mt-4" data-aos="fade-up" data-aos-delay="0">
                    <a class="btn btn-primary xs-mw-adaptive" href="04-register-06.php">
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
