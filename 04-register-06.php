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
            <form action="04-register-07.php" method="POST">
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
                        3.1 การจัดทำโครงการและบริการสาธารณะแบบมีส่วนร่วม
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
                                มี <span class="color-secondary">(พร้อมแนบตัวอย่างเอกสารเกี่ยวกับแผนงาน หรือ โครงการ หรือ กิจกรรม)</span>
                            </label>
                        </div>
                    </div>
                    <div class="spacing">
                        <?php for($i=0; $i<5; $i++){?>
                            <div class="position-relative mt-2">
                                <div class="input-prefix"><?= $i+1 ?></div>
                                <input type="text" class="sm border" placeholder="ชื่อแผนงาน หรือ โครงการ หรือ กิจกรรม" />
                                <div class="input-suffix">
                                    แนบไฟล์ 
                                    <i class="zmdi zmdi-plus-square color-primary ml-1"></i>
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
                        ( 3.1.2 ) ในรอบปีที่ผ่านมาองค์กรปกครองส่วนท้องถิ่นของท่านเปิดโอกาสให้ประชาชน กลุ่ม และองค์กร 
                        มีส่วนร่วมในการดำเนินแผนงาน หรือ โครงการ หรือ กิจกรรม ในลักษณะดังต่อไปนี้หรือไม่ อย่างไร
                    </p>
                    <p class="fw-500 spacing">
                        3.1.2.1 ร่วมริเริ่มหรือเสนอแผนงาน หรือ โครงการ หรือ กิจกรรม
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
                                มี <span class="color-secondary">(ระบุวิธีการเปิดโอกาสให้มีส่วนร่วมเสนอแผนงาน หรือ โครงการ หรือ กิจกรรม)</span>
                            </label>
                        </div>
                    </div>
                    <textarea rows="6" class="sm border spacing" placeholder="ระบุวิธีการเป็นข้อๆ ..."></textarea>

                    <p class="fw-500 spacing">
                        ถ้ามีกลุ่ม / องค์กรที่ร่วมเสนอแผนงาน หรือ โครงการ หรือ กิจกรรม ให้ระบุชื่อกลุ่ม / องค์กร
                    </p>
                    <textarea rows="6" class="sm border spacing" placeholder="ระบุชื่อกลุ่ม / องค์กรเป็นข้อๆ ..."></textarea>
                </div>
                
                <div class="ss-box mt-4" data-aos="fade-up" data-aos-delay="0">
                    <p class="fw-500">
                        3.1.2.2 ร่วมให้ข้อมูล / แสดงความคิดเห็นเกี่ยวกับแผนงาน หรือ โครงการ หรือ กิจกรรม 
                        ก่อนการดำเนินโครงการ
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
                                มี <span class="color-secondary">(ระบุวิธีการเปิดโอกาสให้มีส่วนร่วมให้ข้อมูลฯ เป็นข้อๆ)</span>
                            </label>
                        </div>
                    </div>
                    <textarea rows="6" class="sm border spacing" placeholder="ระบุวิธีการเปิดโอกาสให้มีส่วนร่วมให้ข้อมูลฯ เป็นข้อๆ"></textarea>

                    <p class="fw-500 spacing">
                        3.1.2.3 ร่วมตัดสินใจ / ให้ความเห็นชอบแผนงาน หรือ โครงการ หรือ กิจกรรม
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
                                มี <span class="color-secondary">(ระบุวิธีการเปิดโอกาสให้มีส่วนร่วมให้ข้อมูลฯ เป็นข้อๆ)</span>
                            </label>
                        </div>
                    </div>
                    <textarea rows="6" class="sm border spacing" placeholder="ระบุวิธีการเปิดโอกาสให้มีส่วนร่วมตัดสินใจฯ เป็นข้อๆ"></textarea>
                </div>
                
                <div class="ss-box bg-soft-primary mt-4" data-aos="fade-up" data-aos-delay="0">
                    <p class="fw-500">
                        3.1.2.4 ร่วมดำเนินการตามแผนงาน หรือ โครงการ หรือ กิจกรรม
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
                                มี <span class="color-secondary">(ระบุวิธีการเปิดโอกาสให้มีส่วนร่วมดำเนินการฯ เป็นข้อๆ)</span>
                            </label>
                        </div>
                    </div>
                    <textarea rows="6" class="sm border spacing" placeholder="ระบุวิธีการเปิดโอกาสให้มีส่วนร่วมดำเนินการฯ เป็นข้อๆ"></textarea>
                    
                    <p class="fw-500 spacing">
                        3.1.2.5 ร่วมติดตามและประเมินผลแผนงาน หรือ โครงการ หรือ กิจกรรม
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
                                มี <span class="color-secondary">(ระบุวิธีการเปิดโอกาสให้มีส่วนร่วมติดตามฯ เป็นข้อๆ)</span>
                            </label>
                        </div>
                    </div>
                    <textarea rows="6" class="sm border spacing" placeholder="ระบุวิธีการเปิดโอกาสให้มีส่วนร่วมติดตามฯ เป็นข้อๆ"></textarea>
                </div>
                
                <div class="ss-box mt-4" data-aos="fade-up" data-aos-delay="0">
                    <p class="fw-500">
                        3.1.2.6 ระบุชื่อแผนงาน หรือ โครงการ หรือ กิจกรรมที่โดดเด่นตามข้อ 3.1.2.1-3.1.2.5 มาเป็นตัวอย่าง 
                        3 โครงการ พร้อมระบุการดำเนินงานโดยย่อของแต่ละโครงการ
                    </p>
                    <div class="position-relative spacing">
                        <div class="input-prefix">1</div>
                        <input type="text" class="sm border" placeholder="ชื่อแผนงาน หรือ โครงการ หรือ กิจกรรม" />
                    </div>
                    <textarea rows="6" class="sm border spacing" placeholder="การดำเนินงาน (โดยย่อ)"></textarea>
                    <div class="position-relative spacing">
                        <div class="input-prefix">2</div>
                        <input type="text" class="sm border" placeholder="ชื่อแผนงาน หรือ โครงการ หรือ กิจกรรม" />
                    </div>
                    <textarea rows="6" class="sm border spacing" placeholder="การดำเนินงาน (โดยย่อ)"></textarea>
                    <div class="position-relative spacing">
                        <div class="input-prefix">3</div>
                        <input type="text" class="sm border" placeholder="ชื่อแผนงาน หรือ โครงการ หรือ กิจกรรม" />
                    </div>
                    <textarea rows="6" class="sm border spacing" placeholder="การดำเนินงาน (โดยย่อ)"></textarea>
                </div>
                
                <div class="ss-box bg-soft-primary mt-4" data-aos="fade-up" data-aos-delay="0">
                    <p class="fw-500">
                        ( 3.1.3 ) ในองค์กรปกครองส่วนท้องถิ่นของท่านประชาชนได้มีส่วนร่วมในการสนับสนุนงบประมาณให้แก่องค์กรปกครองส่วนท้องถิ่นบ้างหรือไม่
                    </p>
                    <div class="radio-adaptive mt-2">
                        <div class="radio-container">
                            <input type="radio" name="radio_6" id="radio_6_0" value="0" />
                            <label for="radio_6_0">
                                ไม่มี
                            </label>
                        </div>
                        <div class="radio-container">
                            <input type="radio" name="radio_6" id="radio_6_1" value="1" />
                            <label for="radio_6_1">
                                มี <span class="color-secondary">(ระบุเรื่องและจำนวนงบประมาณที่ประชาชนมีส่วนร่วม)</span>
                            </label>
                        </div>
                    </div>
                    <div class="gallery-grids spacing">
                        <?php for($i=0; $i<5; $i++){?>
                            <div class="grid lg-70 md-2-3 sm-60 mt-2">
                                <div class="position-relative">
                                    <div class="input-prefix"><?= $i+1 ?></div>
                                    <input type="text" class="sm border" placeholder="เรื่อง" />
                                </div>
                            </div>
                            <div class="grid lg-30 md-1-3 sm-40 mt-2">
                                <input type="number" class="sm border" placeholder="งบประมาณ" style="width:calc(100% - 2.5rem);" /> 
                                บาท
                            </div>
                        <?php }?>
                    </div>
                    <div class="btns text-center mt-4">
                        <a class="fw-500 color-black h-color-primary" href="#">
                            เพิ่มแผนงาน +
                        </a>
                    </div>
                </div>

                <div class="d-flex ai-center jc-space-between mt-4" data-aos="fade-up" data-aos-delay="0">
                    <a class="btn btn-primary xs-mw-adaptive" href="04-register-05.php">
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
