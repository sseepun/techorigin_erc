<!DOCTYPE html>
<html lang="th">
<head>
    <?php include_once('include/header.php'); ?>
    <?php include_once('include/style.php'); ?>
    <style>
        .survey-container .question-body .question-num {display:inline-block; color:#fff; width:1.875rem; height:1.875rem; line-height:1.875rem; text-align:center; border-radius:.375rem; font-weight:400;}
        .survey-container .question-body .question {margin-left: 1rem; display:inline-block; font-size: 1.125rem; font-weight:300;}
        .survey-container .question-body .answers {margin: 0 0 0 2.875rem;}
        .survey-container .question-body .field .control.radio-control > label {font-size:1.125rem;}
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
                    <div class="contact-box">
                        <form action="./" method="POST">
                            <div class="ss-icon-title mt-0 mb-1">
                                <div class="icon bg-color4"><i class="fas fa-mail-bulk"></i></div>
                                <h2>แบบสำรวจความรอบรู้ด้านสุขภาพของประชาชนไทยอายุ 15 ปีขึ้นไป</h2>
                            </div>
                            <div class="survey-container">
                                <div class="surver page-1">
                                    <p class="fw-600">ส่วนที่ 3 - ข้อมูลสุขภาพ</p>
                                    <p class="fw-600">คำอธิบาย</p>
                                    <p class="mt-0 fw-500">แบบสอบถามต่อไปนี้เกี่ยวข้องกับความรอบรู้ด้านสุขภาพ ประกอบด้วย การเข้าถึงข้อมูล ความเข้าใจ การทบทวนซักถาม การตัดสินใจ และการเปลี่ยนพฤติกรรมที่เกี่ยวข้องกับสุขภาพ ให้เลือกคำตอบที่ตรงกับท่านมากที่สุด</p>
                                <div class="grids">
                                    <div class="grid sm-100">
                                        <div class="question-body">
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
                                    <div class="grid sm-100">
                                        <div class="question-body">
                                            <div class="question-num bg-color0">2</div>
                                            <div class="question">
                                                ปัจจุบันท่านการได้ยินหรือไม่
                                            </div>
                                            <div class="answers">
                                                <div class="field">
                                                    <div class="control radio-control">
                                                        <input type="radio" name="q_1" id="q_1_1">
                                                        <label for="q_1_1">ไม่มี</label>
                                                    </div>
                                                </div>
                                                <div class="field">
                                                    <div class="control radio-control">
                                                        <input type="radio" name="q_1" id="q_1_2">
                                                        <label for="q_1_2">มี</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="grid sm-100">
                                        <div class="question-body">
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
