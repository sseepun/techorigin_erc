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
            <form action="04-register-11.php" method="POST">
                <h4 class="text-center color-secondary" data-aos="fade-up" data-aos-delay="0">
                    สมัครรางวัลพระปกเกล้า
                </h4>
                <img class="sep-01" src="assets/img/hero/03.png" alt="Separation" data-aos="fade-up" data-aos-delay="150" />
                
                <h6 class="text-center fw-500 pt-2" data-aos="fade-up" data-aos-delay="300">
                    6. การเผยแพร่ข้อมูลข่าวสาร และการรับเรื่องร้องเรียน ร้องทุกข์
                </h6>
                <div class="stepbar" data-aos="fade-up" data-aos-delay="300">
                    <div class="wrapper">
                        <div class="step">1</div>
                        <div class="step">2</div>
                        <div class="step">3</div>
                        <div class="step">4</div>
                        <div class="step">5</div>
                        <div class="step active">6</div>
                        <div class="step">7</div>
                        <div class="step">8</div>
                        <div class="step">9</div>
                    </div>
                </div>
                
                <div class="ss-box" data-aos="fade-up" data-aos-delay="450">
                    <h6 class="fw-500">
                        6.1 ในรอบปีที่ผ่านมาองค์กรปกครองส่วนท้องถิ่นของท่าน 
                        ได้เปิดเผยข้อมูลข่าวสารใดบ้างเพื่อประชาสัมพันธ์ให้ประชาชนทราบ
                    </h6>
                    <div class="table-wrapper">
                        <table class="table table-02">
                            <thead>
                                <tr>
                                    <th>ข้อมูล</th>
                                    <th class="text-center">มีการเผยแพร่</th>
                                    <th class="text-center">ไม่เผยแพร่</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td style="min-width:20rem;">
                                        แผนพัฒนาท้องถิ่น
                                    </td>
                                    <td>
                                        <div class="checkbox-container">
                                            <input type="checkbox" id="checkbox_0_0" value="1" />
                                            <label for="checkbox_0_0">&nbsp;</label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="checkbox-container">
                                            <input type="checkbox" id="checkbox_0_1" value="1" />
                                            <label for="checkbox_0_1">&nbsp;</label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="min-width:20rem;">
                                        โครงการและกิจกรรมที่องค์กรปกครองส่วนท้องถิ่นดำเนินการ
                                    </td>
                                    <td>
                                        <div class="checkbox-container">
                                            <input type="checkbox" id="checkbox_1_0" value="1" />
                                            <label for="checkbox_1_0">&nbsp;</label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="checkbox-container">
                                            <input type="checkbox" id="checkbox_1_1" value="1" />
                                            <label for="checkbox_1_1">&nbsp;</label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="min-width:20rem;">
                                        ผลการดำเนินงานขององค์กรปกครองส่วนท้องถิ่น
                                    </td>
                                    <td>
                                        <div class="checkbox-container">
                                            <input type="checkbox" id="checkbox_2_0" value="1" />
                                            <label for="checkbox_2_0">&nbsp;</label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="checkbox-container">
                                            <input type="checkbox" id="checkbox_2_1" value="1" />
                                            <label for="checkbox_2_1">&nbsp;</label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="min-width:20rem;">
                                        ข้อมูลข่าวสารเกี่ยวกับจัดเก็บภาษี อากร ค่าธรรมเนียม
                                    </td>
                                    <td>
                                        <div class="checkbox-container">
                                            <input type="checkbox" id="checkbox_3_0" value="1" />
                                            <label for="checkbox_3_0">&nbsp;</label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="checkbox-container">
                                            <input type="checkbox" id="checkbox_3_1" value="1" />
                                            <label for="checkbox_3_1">&nbsp;</label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="min-width:20rem;">
                                        ข้อมูลรายรับ / รายจ่ายขององค์กรปกครองส่วนท้องถิ่น
                                    </td>
                                    <td>
                                        <div class="checkbox-container">
                                            <input type="checkbox" id="checkbox_4_0" value="1" />
                                            <label for="checkbox_4_0">&nbsp;</label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="checkbox-container">
                                            <input type="checkbox" id="checkbox_4_1" value="1" />
                                            <label for="checkbox_4_1">&nbsp;</label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="min-width:20rem;">
                                        ข้อมูลเกี่ยวกับการดำเนินการจัดซื้อจัดจ้าง
                                    </td>
                                    <td>
                                        <div class="checkbox-container">
                                            <input type="checkbox" id="checkbox_5_0" value="1" />
                                            <label for="checkbox_5_0">&nbsp;</label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="checkbox-container">
                                            <input type="checkbox" id="checkbox_5_1" value="1" />
                                            <label for="checkbox_5_1">&nbsp;</label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="min-width:20rem;">
                                        <div class="d-flex ai-center ws-nowrap">
                                            ข้อมูลอื่นๆ 
                                            <input type="text" class="sm input-inline border w-full ml-2" placeholder="โปรดระบุ" />
                                        </div>
                                    </td>
                                    <td>
                                        <div class="checkbox-container">
                                            <input type="checkbox" id="checkbox_6_0" value="1" />
                                            <label for="checkbox_6_0">&nbsp;</label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="checkbox-container">
                                            <input type="checkbox" id="checkbox_6_1" value="1" />
                                            <label for="checkbox_6_1">&nbsp;</label>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                
                <div class="ss-box bg-soft-primary mt-4" data-aos="fade-up" data-aos-delay="0">
                    <h6 class="fw-500">
                        6.2 องค์กรปกครองส่วนท้องถิ่นของท่านมีวิธีการรับเรื่องร้องเรียน ร้องทุกข์ของประชาชน 
                        ในลักษณะดังต่อไปนี้หรือไม่ อย่างไร
                    </h6>

                    <p class="fw-500 spacing">
                        ( 6.2.1 ) มีวิธีการหรือช่องทาง รับเรื่องร้องเรียน ร้องทุกข์ของประชาชน อย่างไรบ้างในรูปแบบใด
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
                    <textarea rows="6" class="sm border spacing" placeholder="ระบุรูปแบบการรับเรื่องร้องเรียน ร้องทุกข์ หรือการแลกเปลี่ยนข้อมูลข่าวสาร เป็นข้อๆ ... "></textarea>
                    
                    <p class="fw-500 spacing">
                        ( 6.2.2 ) ในรอบปี 2563 องค์กรปกครองส่วนท้องถิ่นของท่าน ได้รับเรื่องร้องเรียนร้องทุกข์ของประชาชน 
                        จำนวนกี่เรื่อง และสามารถแก้ไขเรื่องร้องเรียน ร้องทุกข์ของประชาชน ได้กี่เรื่อง จากเรื่องร้องเรียน ร้องทุกข์ 
                        ทั้งหมด (ให้คำนวณออกมาเป็นค่าร้อยละ)
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
                    <textarea rows="6" class="sm border spacing" placeholder="ได้รับเรื่องร้องเรียนกี่เรื่อง และสามารถแก้ไขได้กี่เรื่อง คำนวณออกมาเป็นค่าร้อยละ ..."></textarea>
                </div>

                <div class="d-flex ai-center jc-space-between mt-4" data-aos="fade-up" data-aos-delay="0">
                    <a class="btn btn-primary xs-mw-adaptive" href="04-register-09.php">
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
