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
            <form action="04-register-09.php" method="POST">
                <h4 class="text-center color-secondary" data-aos="fade-up" data-aos-delay="0">
                    สมัครรางวัลพระปกเกล้า
                </h4>
                <img class="sep-01" src="assets/img/hero/03.png" alt="Separation" data-aos="fade-up" data-aos-delay="150" />
                
                <h6 class="text-center fw-500 pt-2" data-aos="fade-up" data-aos-delay="300">
                    4. การบริหารการเงินการคลังท้องถิ่น
                </h6>
                <div class="stepbar" data-aos="fade-up" data-aos-delay="300">
                    <div class="wrapper">
                        <div class="step">1</div>
                        <div class="step">2</div>
                        <div class="step">3</div>
                        <div class="step active">4</div>
                        <div class="step">5</div>
                        <div class="step">6</div>
                        <div class="step">7</div>
                        <div class="step">8</div>
                        <div class="step">9</div>
                    </div>
                </div>
                
                <div class="ss-box" data-aos="fade-up" data-aos-delay="450">
                    <h6 class="fw-500">
                        4.1 องค์กรปกครองส่วนท้องถิ่นของท่านจัดให้มีการวางระบบควบคุมภายในของตนเองหรือไม่
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
                                มี <span class="color-secondary">(ระบุวิธีการวางระบบควบคุมภายใน)</span>
                            </label>
                        </div>
                    </div>
                    <textarea rows="6" class="sm border spacing" placeholder="ระบุวิธีการวางระบบควบคุมภายในเป็นข้อๆ ..."></textarea>

                    <h6 class="fw-500 spacing">
                        4.2 องค์กรปกครองส่วนท้องถิ่นของท่านมีวิธีการส่งเสริม และอำนวยความสะดวกให้ประชาชนเสียภาษีอากร 
                        ค่าธรรมเนียมให้แก่ องค์กรปกครองส่วนท้องถิ่น หรือไม่
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
                                มี <span class="color-secondary">(ระบุวิธีการส่งเสริมและอำนวยความสะดวก)</span>
                            </label>
                        </div>
                    </div>
                    <textarea rows="6" class="sm border spacing" placeholder="ระบุวิธีการส่งเสริมและอำนวยความสะดวกเป็นข้อๆ ..."></textarea>
                
                    <h6 class="fw-500 spacing">
                        4.3 ในรอบปีที่ผ่านมา องค์กรปกครองส่วนท้องถิ่นของท่าน มีจำนวนผู้เสียภาษี อากร ค่าธรรมเนียม 
                    </h6>
                    <div class="table-wrapper spacing">
                        <table>
                            <tbody>
                                <tr>
                                    <td class="p">มีจำนวนผู้เสียภาษี อากร ค่าธรรมเนียม</td>
                                    <td>
                                        <input type="number" class="sm input-inline border ml-3 mr-1" step="1" 
                                        placeholder="จำนวน" style="width:8rem!important;" /> 
                                    </td>
                                    <td class="p">คน</td>
                                </tr>
                                <tr>
                                    <td class="p">และจำนวนผู้ค้างภาษี อากร ค่าธรรมเนียม</td>
                                    <td>
                                        <input type="number" class="sm input-inline border ml-3 mr-1" step="1" 
                                        placeholder="จำนวน" style="width:8rem!important;" /> 
                                    </td>
                                    <td class="p">คน</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                
                <div class="ss-box bg-soft-primary mt-4" data-aos="fade-up" data-aos-delay="0">
                    <h6 class="fw-500">
                        4.4 องค์กรปกครองส่วนท้องถิ่นของท่านมีวิธีหรือแนวทางในการสร้างความเป็นธรรม 
                        และทั่วถึงในการจัดเก็บภาษีอากรอย่างไร
                    </h6>
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
                                มี <span class="color-secondary">(ระบุวิธีหรือแนวทางในการสร้างความเป็นธรรมและทั่วถึง)</span>
                            </label>
                        </div>
                    </div>
                    <textarea rows="6" class="sm border spacing" placeholder="ระบุวิธีหรือแนวทางในการสร้างความเป็นธรรมและทั่วถึงเป็นข้อๆ ..."></textarea>
                
                    <h6 class="fw-500 spacing">
                        4.5 องค์กรปกครองส่วนท้องถิ่นมีวิธีการให้ความรู้ความเข้าใจแก่ประชาชน เกี่ยวกับบทบาทหน้าที่ในการตรวจรับการจ้างให้แก่
                        คณะกรรมการที่แต่งตั้งมาจากประชาชนหรือไม่
                    </h6>
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
                                มี <span class="color-secondary">(ระบุวิธีการส่งเสริมและอำนวยความสะดวก)</span>
                            </label>
                        </div>
                    </div>
                    <textarea rows="6" class="sm border spacing" placeholder="ระบุวิธีการส่งเสริมความรู้ฯ เป็นข้อๆ ..."></textarea>
                </div>
                
                <div class="ss-box mt-4" data-aos="fade-up" data-aos-delay="0">
                    <h6 class="fw-500">
                        4.6 ในองค์กรปกครองส่วนท้องถิ่นของท่านมีวิธีหรือแนวทางด้านการป้องกันปัญหาการทุจริต หรือไม่
                    </h6>
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
                                มี <span class="color-secondary">(ระบุวิธีการหรือแนวทางด้านการป้องกันปัญหาการทุจริต)</span>
                            </label>
                        </div>
                    </div>
                    <textarea rows="6" class="sm border spacing" placeholder="ระบุวิธีการหรือแนวทางด้านการป้องกันปัญหาการทุจริตเป็นข้อๆ ..."></textarea>

                    <h6 class="fw-500 spacing">
                        4.7 ในองค์กรปกครองส่วนท้องถิ่นของท่านมีวิธีการหรือแนวทางด้านการป้องปรามปัญหาการทุจริต หรือไม่
                    </h6>
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
                                มี <span class="color-secondary">(ระบุวิธีการหรือแนวทางด้านการป้องปรามปัญหาการทุจริต)</span>
                            </label>
                        </div>
                    </div>
                    <textarea rows="6" class="sm border spacing" placeholder="ระบุวิธีการหรือแนวทางด้านการป้องปรามปัญหาการทุจริตเป็นข้อๆ ..."></textarea>
                </div>

                <div class="d-flex ai-center jc-space-between mt-4" data-aos="fade-up" data-aos-delay="0">
                    <a class="btn btn-primary xs-mw-adaptive" href="04-register-07.php">
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
