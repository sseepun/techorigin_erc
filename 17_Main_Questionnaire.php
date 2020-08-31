<!DOCTYPE html>
<html lang="th">
<head>
    <?php include_once('include/header.php'); ?>
    <?php include_once('include/style.php'); ?>
    <style>
        .survey-container .question-body .question-num {vertical-align:top; display:inline-block; color:#fff; width:1.875rem; height:1.875rem; line-height:1.875rem; text-align:center; border-radius:.375rem; font-weight:400;}
        .survey-container .question-body .question {width: calc(100% - 3.875rem); margin-left: 1rem; display:inline-block; font-size: 1.125rem; font-weight:300;}
        .survey-container .question-body .answers {margin: 0 0 0 2.875rem;}
        .survey-container .question-body .field .control.radio-control > label {font-size:1.125rem;}
        .survey-container .question-body .alternative {margin-left: 2.875rem; display:inline-block; font-size: 1.125rem; font-weight:300;}
        .survey-container .question-body .field .control.radio-control > label span.under {display:block;}
        .survey-container .file-upload {
            display:flex; 
            margin-left: 2.875rem;
            justify-content: space-between;
            align-items:center;
            width: auto; 
            -webkit-box-shadow:inset 0px 0px 10px 1px rgba(0,0,0,.2);
            -moz-box-shadow:inset 0px 0px 10px 1px rgba(0,0,0,.2);
            box-shadow:inset 0px 0px 10px 1px rgba(0,0,0,.2);
            border-radius: .1875rem;
            border: .0625rem dashed #000;
            background:#e7e7e7;
            padding: .75rem 2.5rem;
        }
        .survey-container .file-upload .file-info { display:flex;align-items:center; justify-content: space-between;}
        .survey-container .file-upload .file-info .text {padding-left: .5rem;}
        .survey-container .file-upload .file-info .text p {margin:0; font-size: 80%;}
        .survey-container .file-upload .file-icon {position:relative; display:block; width:2rem; height:2rem;}
        .survey-container .file-upload .file-icon::before {content: '';position:absolute; top:0;left:0; right:0; bottom:0; background-size:auto 100%; background-repeat: no-repeat; background-position:center; background-image:url('./assets/img/file/doc.png')}
        .survey-container .file-upload .btns {margin:0; text-align:right;}
        .survey-container .file-upload .btns .btn.add-file {display:inline-block; padding:.25rem 2rem; }
        .survey-container .checkbox-wrapper {padding-left: 1.5rem;}
        .survey-container input[name="other"] {width:40%;margin-top:.5rem; margin-left:1.5rem; height:2rem;}
        @media screen and (max-width: 576px) {
            .survey-container .file-upload {padding:.75rem 1rem;}
            .survey-container .file-upload .btns .btn.add-file {padding:.125rem 1rem; }
            .survey-container input[name="other"]{width:50%;}
        }
    </style>
</head>
<body>
    <?php include_once('include/topnav.php'); ?>
    <?php
        $breadcrumb = [
            [ 'name' => 'หน้าแรก', 'url' => './' ],
            [ 'name' => 'แบบสอบถามออนไลน์', 'url' => '#' ]
        ];
        include_once('component/breadcrumb.php');
    ?>

    <section class="section-padding">
        <div class="container">
            <div class="ss-header" data-aos="fade-up" data-aos-delay="0">
                <div class="ss">แ</div><h1 class="color2">บบสอบถามออนไลน์</h1>
                <p><strong class="ml-1">กรมอนามัย</strong> พร้อมให้ข้อมูลข่าวสารที่เป็นประโยชน์สำหรับคุณ</p>
            </div>

            <?php 
                $contentStat = [
                    'date' => '27.03.2563', 'view_count' => '202'
                ];
                include_once('component/content-stat.php');
            ?>
            
            <div class="grids">
                <div class="grid xl-70 lg-70 md-100 sm-100">
                    <div class="ss-icon-title mt-0 mb-1">
                        <div class="icon bg-color4"><i class="fas fa-mail-bulk"></i></div>
                        <h2>แบบสำรวจความรอบรู้ด้านสุขภาพของประชาชนไทยอายุ 15 ปีขึ้นไป</h2>
                    </div>
                    <div class="survey-container">
                        <form action="" id="form_step1" data-step="1" method="POST">
                            <p class="fw-600">ส่วนที่ 1 - ข้อมูลสุขภาพ</p>
                            <p class="fw-600">คำอธิบาย</p>
                            <p class="mt-0 fw-500">แบบสอบถามต่อไปนี้เกี่ยวข้องกับความรอบรู้ด้านสุขภาพ ประกอบด้วย การเข้าถึงข้อมูล ความเข้าใจ การทบทวนซักถาม การตัดสินใจ และการเปลี่ยนพฤติกรรมที่เกี่ยวข้องกับสุขภาพ ให้เลือกคำตอบที่ตรงกับท่านมากที่สุด</p>
                            <div class="grids">
                                <div class="grid sm-100 mt-0">
                                    <div class="question-body pt-1 pb-1 border-bottom">
                                        <div class="question-num bg-color0">1</div>
                                        <div class="question">
                                            ปัจจุบันท่านใช้แว่นตาหรือคอนแทคเลนส์ในการมองเห็นหรือไม่
                                        </div>
                                        <div class="answers">
                                            <div class="field">
                                                <div class="control radio-control">
                                                    <input type="radio" name="q_1" id="q_1_1">
                                                    <label for="q_1_1">ไม่ใช้</label>
                                                </div>
                                            </div>
                                            <div class="field">
                                                <div class="control radio-control">
                                                    <input type="radio" name="q_1" id="q_1_2">
                                                    <label for="q_1_2">ใช้</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="grid sm-100 mt-0">
                                    <div class="question-body pt-1 pb-1 border-bottom">
                                        <div class="question-num bg-color0">2</div>
                                        <div class="question">
                                            ปัจจุบันท่านการได้ยินหรือไม่
                                        </div>
                                        <div class="answers">
                                            <div class="field">
                                                <div class="control radio-control">
                                                    <input type="radio" name="q_2" id="q_2_1">
                                                    <label for="q_2_1">ไม่มี</label>
                                                </div>
                                            </div>
                                            <div class="field">
                                                <div class="control radio-control">
                                                    <input type="radio" name="q_2" id="q_2_2">
                                                    <label for="q_2_2">มี</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="grid sm-100 mt-0">
                                    <div class="question-body pt-1 pb-1 border-bottom">
                                        <div class="question-num bg-color0">3</div>
                                        <div class="question">
                                            กรุณาระบุหรือบอกปัญหาเกี่ยวกับอาการมองเห็น
                                        </div>
                                        <div class="answers">
                                            <div class="field">
                                                <div class="control">
                                                    <textarea name="message" rows="4" required></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="alternative">อัพโหลดไฟล์เอกสารประกอบ</div>
                                        <div class="file-upload">
                                            <div class="file-info">
                                                <div class="file-icon"></div>
                                                <div class="text">
                                                    <p class="fw-600">ลากหรือวางไฟล์ไว้ที่นี่</p>
                                                    <p>ชนิดไฟล์ที่อนุญาติ .jpg .jpeg .png .zip .rar ไฟล์ทั้งหมดรวมกันไม่เกิน 5 MB</p>
                                                </div>
                                            </div>
                                            <div class="btns">
                                                <div class="btn add-file bg-color2 color-white">เพิ่มไฟล์</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="grid sm-100 mt-0">
                                    <div class="question-body pt-1 pb-1">
                                        <div class="question-num bg-color0">5</div>
                                        <div class="question">
                                            โรคเรื้อรัง ท่านเคยได้รับการบอกกล่าว (วินิจฉัย) จากแพทย์ว่าเป็นโรคเหล่านี้หรือไม่
                                        </div>
                                        <div class="answers">
                                            <div class="field">
                                                <div class="control radio-control">
                                                    <input type="radio" name="q_5" id="q_5_1">
                                                    <label for="q_5_1">เคยตรวจ</label>
                                                </div>
                                            </div>
                                            <div class="field">
                                                <div class="control radio-control">
                                                    <input type="radio" name="q_5" id="q_5_2">
                                                    <label for="q_5_2">เคยตรวจในรอบ 1 ปีที่ผ่านมา แต่ไม่พบโรค</label>
                                                </div>
                                            </div>
                                            <div class="field">
                                                <div class="control radio-control">
                                                    <input type="radio" name="q_5" id="q_5_3">
                                                    <label for="q_5_3">เคยตรวจและแพทย์วินิจฉัยว่าเป็นระบุ <span class="under">(ตอบได้มากกว่า 1 ข้อ)</span></label>
                                                </div>
                                                <div class="checkbox-wrapper">
                                                    <?php for($i=0; $i<4; $i++){?>
                                                        <div class="field mt-0-5">
                                                            <div class="control checkbox-control">
                                                                <input type="checkbox" name="types[]" id="type_1_<?php echo $i; ?>" value="<?php echo $i; ?>">
                                                                <label for="type_1_<?php echo $i; ?>">
                                                                    ข่าวจากหน่วยงานส่วนกลาง
                                                                </label>
                                                            </div>
                                                        </div>
                                                    <?php }?>
                                                    <div class="field mt-0-5">
                                                        <div class="control checkbox-control">
                                                            <input type="checkbox" name="types[]" id="type_1_<?php echo $i; ?>" value="<?php echo $i; ?>">
                                                            <label for="type_1_<?php echo $i; ?>">
                                                                อื่นๆ ระบุ
                                                            </label>
                                                        </div>
                                                        <input type="text" name="other">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="btns mt-1 text-center">
                                    <a class="btn btn-action btn-primary" href="#">
                                        ย้อนกลับ
                                    </a>
                                    <button type="submit" class="btn btn-action btn-secondary next-icon">
                                        ตอบคำถามต่อไป
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
            
                    
                </div>

                <div class="grid xl-25 lg-30 md-100 sm-100" data-aos="fade-up" data-aos-delay="600">
                    <div class="slots no-mask pb-0">
                        <img class="float-img type-8" src="./assets/img/hero/19.png" alt="Slot Float Image 01" />
                    </div>
                </div>
            
            </div>
        </div>
    </section>

    
    <?php include_once('include/footer.php'); ?>
    <?php include_once('include/script.php'); ?>
</body>
</html>
