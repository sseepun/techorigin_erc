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
                8. โครงการที่โดดเด่นเป็นเลิศด้านความโปร่งใสและส่งเสริมการมีส่วนร่วมของประชาชน
            </h6>
            <div class="stepbar" data-aos="fade-up" data-aos-delay="300">
                <div class="wrapper">
                    <div class="step">1</div>
                    <div class="step">2</div>
                    <div class="step">3</div>
                    <div class="step">4</div>
                    <div class="step">5</div>
                    <div class="step">6</div>
                    <div class="step">7</div>
                    <div class="step active">8</div>
                    <div class="step">9</div>
                </div>
            </div>
            
            <div class="ss-box" data-aos="fade-up" data-aos-delay="450">
                <div class="b-bottom-dashed bcolor-gray pb-4">
                    <p class="fw-500">
                        8.1 ในรอบปี 2562 องค์กรปกครองส่วนท้องถิ่นของท่านมีแผนงาน หรือ โครงการ หรือ กิจกรรม 
                        ที่โดดเด่นเป็นเลิศด้าน ความโปร่งใสและส่งเสริมการมีส่วนร่วมของประชาชน ** 
                        <span class="fw-300">
                            (เป็นโครงการที่โดดเด่น เป็นที่ยอมรับ และเป็นโครงการที่จะนำเสนอต่อ
                            คณะกรรมการเมื่อผ่านเข้ารอบที่จะได้รับรางวัล แต่หากมีโครงการอื่นๆ สามารถเพิ่มเติมได้) หรือไม่
                        </span>
                    </p>
                    <div class="radio-adaptive mt-2">
                        <div class="radio-container">
                            <input type="radio" name="radio_1" id="radio_1_0" value="1" />
                            <label for="radio_1_0">
                                ไม่มี
                            </label>
                        </div>
                        <div class="radio-container">
                            <input type="radio" name="radio_1" id="radio_1_1" value="1" />
                            <label for="radio_1_1">
                                มี  ระบุ รายละเอียด โครงการ ตามหัวข้อคำถามด้านล่าง พร้อมแนบเอกสารและภาพโครงการ 
                                <span class="color-secondary">
                                    (ทั้งนี้ ไม่จำกัดจำนวนโครงการ / กิจกรรม แต่ไม่ควรน้อยกว่า 3 แผนงาน 
                                    หรือ โครงการ หรือ กิจกรรม)
                                </span>
                            </label>
                        </div>
                    </div>
                </div>
                <p class="fw-500 spacing pt-2">
                    ( 8.1.2 ) โครงการที่เกี่ยวข้องกับ 
                    <span class="color-secondary">การส่งเสริมการมีส่วนร่วมของประชาชน</span>
                </p>
                <input type="text" class="sm border spacing" placeholder="ชื่อแผนงาน หรือ โครงการ หรือ กิจกรรม ..." />
                <p class="fw-500 spacing">
                    เหตุผลที่นำเสนอแผนงาน หรือ โครงการ หรือ 
                    กิจกรรมนี้เป็นโครงการที่โดดเด่นเป็นเลิศด้านการส่งเสริมการมีส่วนร่วมของประชาชน (ระบุ)
                </p>
                <textarea rows="6" class="sm border spacing" placeholder="โปรดระบุ ..."></textarea>
                <p class="fw-500 spacing">
                    ความสอดคล้องกับยุทธศาสตร์ขององค์ปกครองส่วนท้องถิ่น 
                    ที่เกี่ยวข้องกับด้านการส่งเสริมการมีส่วนร่วมของประชาชน
                </p>
                <textarea rows="6" class="sm border spacing" placeholder="โปรดระบุ ..."></textarea>
            </div>
            
            <div class="ss-box bg-soft-primary mt-4" data-aos="fade-up" data-aos-delay="0">
                <p class="fw-500">
                    ที่มา / ความสำคัญ / ความจำเป็นของแผนงาน หรือ โครงการ หรือ กิจกรรม
                </p>
                <textarea rows="6" class="sm border spacing" placeholder="โปรดระบุ ..."></textarea>
                <p class="fw-500 spacing">
                    วัตถุประสงค์ของแผนงาน หรือ โครงการ หรือ กิจกรรม
                </p>
                <textarea rows="6" class="sm border spacing" placeholder="โปรดระบุ ..."></textarea>
                <p class="fw-500 spacing">
                    ลักษณะการดำเนิน
                </p>
                <textarea rows="6" class="sm border spacing" placeholder="โปรดระบุ ..."></textarea>
            </div>
            
            <div class="ss-box mt-4" data-aos="fade-up" data-aos-delay="0">
                <p class="fw-500">
                    ระยะเวลาในการดำเนินงาน (ระบุ) 
                    <input type="number" class="sm input-inline border mx-1" step="1" /> ปี 
                    <input type="number" class="sm input-inline border mx-1" step="1" /> เดือน 
                    <input type="number" class="sm input-inline border mx-1" step="1" /> วัน
                </p>
                <div class="d-flex fw-wrap spacing">
                    <div class="radio-container w-auto mr-4">
                        <input type="radio" name="radio_0" id="radio_0_0" value="1" />
                        <label for="radio_0_0">
                            โครงการใหม่
                        </label>
                    </div>
                    <div class="radio-container w-auto">
                        <input type="radio" name="radio_0" id="radio_0_1" value="1" />
                        <label for="radio_0_1">
                            โครงการต่อเนื่อง เริ่มดำเนินการเมื่อ 
                            <div class="d-inline position-relative ml-1">
                                <input type="text" class="sm input-inline border date-picker" placeholder="วัน / เดือน / ปี" />
                                <div class="input-icon">
                                    <i class="zmdi zmdi-calendar"></i>
                                </div>
                            </div>
                        </label>
                    </div>
                </div>
                <p class="fw-500 spacing">
                    ผลการดำเนินงาน
                </p>
                <div class="checkbox-container">
                    <input type="checkbox" id="checkbox_0" value="1" checked />
                    <label for="checkbox_0">
                        โครงการแล้วเสร็จเป็นที่เรียบร้อย และบรรลุตามวัตถุประสงค์ครบถ้วน 
                        <span class="color-secondary">(ระบุรายละเอียดผลการดำเนินงาน)</span>
                    </label>
                </div>
                <textarea rows="6" class="sm border spacing" placeholder="โปรดระบุ ..."></textarea>
                <div class="checkbox-container spacing">
                    <input type="checkbox" id="checkbox_1" value="1" />
                    <label for="checkbox_1">
                        โครงการแล้วเสร็จเป็นที่เรียบร้อย และบรรลุวัตถุประสงค์บางประการ 
                        <span class="color-secondary">(ระบุรายละเอียดผลการดำเนินงาน)</span>
                    </label>
                </div>
                <div class="checkbox-container">
                    <input type="checkbox" id="checkbox_2" value="1" />
                    <label for="checkbox_2">
                        โครงการยังไม่แล้วเสร็จ แต่คาดว่าผลที่จะได้รับคือ
                    </label>
                </div>
            </div>
            
            <div class="ss-box bg-soft-primary mt-4" data-aos="fade-up" data-aos-delay="0">
                <p class="fw-500">
                    การประเมินผลการดำเนินงาน
                </p>
                <div class="checkbox-container">
                    <input type="checkbox" id="checkbox_3" value="1" checked />
                    <label for="checkbox_3">
                        รายงานผลการดำเนินงานรายเดือน
                        <span class="color-secondary">(ระบุรายละเอียด)</span>
                    </label>
                </div>
                <textarea rows="6" class="sm border spacing" placeholder="โปรดระบุ ..."></textarea>
                <div class="checkbox-container spacing">
                    <input type="checkbox" id="checkbox_4" value="1" />
                    <label for="checkbox_4">
                        รายงานผลการดำเนินงานรายไตรมาส
                        <span class="color-secondary">(ระบุรายละเอียด)</span>
                    </label>
                </div>
                <div class="checkbox-container">
                    <input type="checkbox" id="checkbox_5" value="1" />
                    <label for="checkbox_5">
                        รายงานผลการดำเนินงานทุกครึ่งปี
                        <span class="color-secondary">(ระบุรายละเอียด)</span>
                    </label>
                </div>
                <div class="checkbox-container">
                    <input type="checkbox" id="checkbox_6" value="1" />
                    <label for="checkbox_6">
                        รายงานผลการดำเนินงานรายปี
                        <span class="color-secondary">(ระบุรายละเอียด)</span>
                    </label>
                </div>
                <div class="checkbox-container">
                    <input type="checkbox" id="checkbox_7" value="1" />
                    <label for="checkbox_7">
                        รายงานการประเมินผลการดำเนินงาน 
                        <a class="btn btn-gray btn-xs fw-400 ml-1" href="#">
                            แนบเอกสารประกอบ 
                            <i class="zmdi zmdi-plus-square color-primary"></i>
                        </a>
                    </label>
                </div>
                <div class="checkbox-container">
                    <input type="checkbox" id="checkbox_8" value="1" />
                    <label for="checkbox_8">
                        มีการดำเนินงานต่อเนื่อง
                        <span class="color-secondary">(ระบุรายละเอียด)</span>
                    </label>
                </div>
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
