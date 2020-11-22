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
            <form action="04-register-12.php" method="POST">
                <h4 class="text-center color-secondary" data-aos="fade-up" data-aos-delay="0">
                    สมัครรางวัลพระปกเกล้า
                </h4>
                <img class="sep-01" src="assets/img/hero/03.png" alt="Separation" data-aos="fade-up" data-aos-delay="150" />
                
                <h6 class="text-center fw-500 pt-2" data-aos="fade-up" data-aos-delay="300">
                    7. การส่งเสริมศักยภาพและความเข้มแข็งของประชาชน
                </h6>
                <div class="stepbar" data-aos="fade-up" data-aos-delay="300">
                    <div class="wrapper">
                        <div class="step">1</div>
                        <div class="step">2</div>
                        <div class="step">3</div>
                        <div class="step">4</div>
                        <div class="step">5</div>
                        <div class="step">6</div>
                        <div class="step active">7</div>
                        <div class="step">8</div>
                        <div class="step">9</div>
                    </div>
                </div>
                
                <div class="ss-box" data-aos="fade-up" data-aos-delay="450">
                    <div class="b-bottom-dashed bcolor-gray pb-4">
                        <h6 class="fw-500">
                            7.1 การส่งเสริมศักยภาพและความเข้มแข็งของประชาชน กลุ่ม องค์กร
                        </h6>
                        <p class="fw-500 spacing">
                            ( 7.1.1 ) องค์กรปกครองส่วนท้องถิ่นมีการจัดทำหรือสนับสนุนแผนงาน หรือ โครงการ หรือ กิจกรรม 
                            ส่งเสริมการเรียนรู้หรือศักยภาพของกลุ่ม / องค์กรชุมชน รูปแบบต่างๆ หรือไม่ 
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
                                    มี
                                    <span class="color-secondary">
                                        (ระบุรูปแบบกิจกรรม เนื้อหาในส่งเสริมการเรียนรู้ฯ ผลการดำเนินงาน และการ
                                        ติดตามผล พร้อมแนบเอกสารและรูปภาพตัวอย่างประกอบ) 
                                    </span>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="project-container">
                        <div class="projects">
                            <?php for($i=0; $i<2; $i++){?>
                                <div class="project">
                                    <div class="gallery-grids">
                                        <div class="grid md-75 sm-100 mt-0">
                                            <div class="position-relative">
                                                <div class="input-prefix"><?= $i+1 ?></div>
                                                <input type="text" class="sm border" placeholder="ชื่อโครงการ / กิจกรรม" />
                                            </div>
                                        </div>
                                        <div class="grid sm-50">
                                            <textarea rows="5" class="sm border" placeholder="เนื้อหาการส่งเสริม"></textarea>
                                        </div>
                                        <div class="grid sm-50">
                                            <textarea rows="5" class="sm border" placeholder="ผลการดำเนินงาน"></textarea>
                                        </div>
                                    </div>
                                    <div class="d-flex ai-center fw-wrap mt-2">
                                        <p class="fw-500 ws-nowrap mt-2 mr-5">
                                            การติดตามผล
                                        </p>
                                        <div class="radio-adaptive">
                                            <div class="radio-container">
                                                <input type="radio" name="project_<?= $i ?>" id="project_<?= $i ?>_0" value="0" />
                                                <label for="project_<?= $i ?>_0">
                                                    ไม่มี
                                                </label>
                                            </div>
                                            <div class="radio-container">
                                                <input type="radio" name="project_<?= $i ?>" id="project_<?= $i ?>_1" value="1" />
                                                <label for="project_<?= $i ?>_1">
                                                    มี <span class="color-secondary">(ระบุวิธีการติดตามผล)</span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <textarea rows="6" class="sm border spacing" placeholder="ระบุวิธีการติดตามผล ..."></textarea>
                                </div>
                            <?php }?>
                        </div>
                        <div class="btns text-center mt-3">
                            <a class="fw-500 color-black h-color-primary" href="#">
                                เพิ่มโครงการ +
                            </a>
                        </div>
                    </div>
                </div>
                
                <div class="ss-box bg-soft-primary mt-4" data-aos="fade-up" data-aos-delay="0">
                    <h6 class="fw-500">
                        7.2 การเสริมสร้างสำนึกพลเมือง (Civic Education)
                    </h6>

                    <p class="fw-500 spacing">
                        ( 7.2.1 ) องค์กรปกครองส่วนท้องถิ่นของท่านมีแผนงาน หรือ โครงการ หรือ กิจกรรม 
                        เกี่ยวกับการส่งเสริมคุณธรรม และศีลธรรมของประชาชนในชุมชนท้องถิ่น บ้างหรือไม่ 
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
                                มี
                                <span class="color-secondary">
                                    (ระบุแผนงาน หรือ โครงการ หรือ กิจกรรม พร้อมแนบเอกสาร)
                                </span>
                            </label>
                        </div>
                    </div>
                    <textarea rows="6" class="sm border spacing" placeholder="ระบุแผนงาน หรือ โครงการ หรือ กิจกรรม พร้อมแนบเอกสาร ..."></textarea>
                    
                    <p class="fw-500 spacing">
                        ( 7.2.2 ) องค์กรปกครองส่วนท้องถิ่นของท่านมีแผนงาน หรือ โครงการ หรือ กิจกรรม 
                        เกี่ยวกับการส่งเสริมความรู้ด้านสิทธิและหน้าที่ของพลเมืองแก่ประชาชน บ้างหรือไม่ 
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
                                มี
                                <span class="color-secondary">
                                    (ระบุแผนงาน หรือ โครงการ หรือ กิจกรรม พร้อมแนบเอกสาร)
                                </span>
                            </label>
                        </div>
                    </div>
                    <textarea rows="6" class="sm border spacing" placeholder="ระบุแผนงาน หรือ โครงการ หรือ กิจกรรม พร้อมแนบเอกสาร ..."></textarea>
                </div>
                
                <div class="ss-box mt-4" data-aos="fade-up" data-aos-delay="0">
                    <p class="fw-500">
                        ( 7.2.3 ) องค์กรปกครองส่วนท้องถิ่นของท่านมี แผนงาน หรือ โครงการ หรือ กิจกรรม 
                        เกี่ยวกับการส่งเสริมความมีวินัย ค่านิยมประชาธิปไตย การเคารพศักดิ์ศรีความเป็นมนุษย์ 
                        หรือเคารพความแตกต่างหลากหลายให้แก่ประชาชน บ้างหรือไม่  
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
                                มี
                                <span class="color-secondary">
                                    (ระบุแผนงาน หรือ โครงการ หรือ กิจกรรม พร้อมแนบเอกสาร)
                                </span>
                            </label>
                        </div>
                    </div>
                    <textarea rows="6" class="sm border spacing" placeholder="ระบุแผนงาน หรือ โครงการ หรือ กิจกรรม พร้อมแนบเอกสาร ..."></textarea>
                </div>
                
                <div class="ss-box bg-soft-primary mt-4" data-aos="fade-up" data-aos-delay="0">
                    <p class="fw-500">
                        ( 7.2.4 ) องค์กรปกครองส่วนท้องถิ่นของท่านมี แผนงาน หรือ โครงการ หรือ กิจกรรม 
                        เกี่ยวกับการส่งเสริมให้เกิดความหวงแหน และความเป็นเจ้าของชุมชนท้องถิ่นของตน 
                        รวมทั้งมีความรับผิดชอบต่อสังคมร่วมกัน หรือไม่ 
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
                                มี
                                <span class="color-secondary">
                                    (ระบุแผนงาน หรือ โครงการ หรือ กิจกรรม พร้อมแนบเอกสาร)
                                </span>
                            </label>
                        </div>
                    </div>
                    <textarea rows="6" class="sm border spacing" placeholder="ระบุแผนงาน หรือ โครงการ หรือ กิจกรรม พร้อมแนบเอกสาร ..."></textarea>
                
                    <p class="fw-500 spacing">
                        ( 7.2.5 ) องค์กรปกครองส่วนท้องถิ่นของท่านมี แผนงาน หรือ โครงการ หรือ กิจกรรม 
                        เกี่ยวกับการส่งเสริมและสนับสนุนให้มีอาสาสมัครพลเมืองที่หวงแหน 
                        และความเป็นเจ้าของชุมชนท้องถิ่นของตน รวมทั้งมีความรับผิดชอบต่อสังคมร่วมกัน หรือไม่ 
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
                                มี
                                <span class="color-secondary">
                                    (ระบุแผนงาน หรือ โครงการ หรือ กิจกรรม พร้อมแนบเอกสาร)
                                </span>
                            </label>
                        </div>
                    </div>
                    <textarea rows="6" class="sm border spacing" placeholder="ระบุแผนงาน หรือ โครงการ หรือ กิจกรรม พร้อมแนบเอกสาร ..."></textarea>
                </div>

                <div class="d-flex ai-center jc-space-between mt-4" data-aos="fade-up" data-aos-delay="0">
                    <a class="btn btn-primary xs-mw-adaptive" href="04-register-10.php">
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
