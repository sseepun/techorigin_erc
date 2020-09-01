<?php 
    $steps = 3;

?>

<!DOCTYPE html>
<html lang="th">
<head>
    <?php include_once('include/header.php'); ?>
    <?php include_once('include/style.php'); ?>
<style>
/* Progress */
.progress{width:100%; display:flex; align-items:center; margin:.5rem 0 0 0;}
.progress > .bar{
    position:relative; width:calc(100% - 2.875rem); height:.375rem;
    border-radius:.25rem; background:#ebebeb; overflow:hidden;
}
.progress > .bar::before{
    content:''; position:absolute; top:0; bottom:0; width:var(--progress); border-radius:.25rem;
    background-image:linear-gradient(to right, #1d684a, #0d838d, #c0ca67);
}
.progress > .percent{width:2.875rem; text-align:right; font-size:1.375rem; font-weight:400;}

/* Progress */
.progress > .bar{}
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
            
            <div class="grids">

                <div class="grid xl-70 lg-70 md-100 sm-100">
                    <?php 
                        $contentStat = [
                            'date' => '27.03.2563', 'view_count' => '202'
                        ];
                        include_once('component/content-stat.php');
                    ?>
                    <div class="ss-icon-title mt-0">
                        <div class="icon bg-color4"><i class="fas fa-mail-bulk"></i></div>
                        <h2>แบบสำรวจความรอบรู้ด้านสุขภาพของประชาชนไทยอายุ 15 ปีขึ้นไป</h2>
                    </div>
                    <div class="ss-icon-title no-margin">
                        <div class="icon bg-color4 op-0"><i class="fas fa-mail-bulk"></i></div>
                        <div class="text-wrapper">
                            <div class="progress no-margin">
                                <div class="bar" style="--progress:80%;"></div>
                                <div class="percent">80%</div>
                            </div>
                        </div>
                    </div>

                    <form action="./" method="POST">
                        <h4 class="fw-400 mt-1-5">ส่วนที่ 1 - ข้อมูลสุขภาพ</h4>
                        <p class="fw-400"><span class="text-lg">คำอธิบาย</span></p>
                        <p class="mt-0">
                            แบบสอบถามต่อไปนี้เกี่ยวข้องกับความรอบรู้ด้านสุขภาพ ประกอบด้วย การเข้าถึงข้อมูล 
                            ความเข้าใจ การทบทวนซักถาม การตัดสินใจ และการเปลี่ยนพฤติกรรมที่เกี่ยวข้องกับสุขภาพ 
                            ให้เลือกคำตอบที่ตรงกับท่านมากที่สุด
                        </p>

                        <div class="question-container mt-1-5">
                            <div class="num">1</div>
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

                        <div class="question-container">
                            <div class="num">2</div>
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

                        <div class="question-container">
                            <div class="num">3</div>
                            <div class="question">
                                กรุณาระบุหรือบอกปัญหาเกี่ยวกับอาการมองเห็น
                            </div>
                            <div class="answers">
                                <div class="field">
                                    <div class="control">
                                        <textarea name="message" rows="4" required></textarea>
                                    </div>
                                </div>
                                <div class="field">
                                    <label>อัพโหลดเอกสารประกอบ</label>
                                    <div class="control file-control">
                                        <div class="file-upload d-flex ai-center jc-space-evenly fw-wrap">
                                            <div class="upload-info">
                                                <h4 class="no-margin">ลากหรือวางไฟล์ไว้ที่นี่</h4>
                                                <p class="no-margin">
                                                    ชนิดไฟล์ที่อนุญาติ .jpg .jpeg .png .zip .rar 
                                                    ไฟล์ทั้งหมดรวมกันไม่เกิน 5 MB
                                                </p>
                                            </div>
                                            <div class="btns width-auto">
                                                <div class="btn btn-action btn-success">
                                                    เพิ่มไฟล์
                                                </div>
                                            </div>
                                        </div>
                                        <input type="file" name="file" />
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="question-container">
                            <div class="num">4</div>
                            <div class="question">
                                โรคเรื้อรัง ท่านเคยได้รับการบอกกล่าว (วินิจฉัย) 
                                จากแพทย์ว่าเป็นโรคเหล่านี้หรือไม่
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
                                        <label for="q_5_3">
                                            เคยตรวจและแพทย์วินิจฉัยว่าเป็นระบุ <br>
                                            <span class="text-sm">(ตอบได้มากกว่า 1 ข้อ)</span>
                                        </label>
                                    </div>
                                    <div class="pl-1-5">
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
                                            <div class="pl-1-5" style="width:240px;">
                                                <input type="text" name="other" />
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

                <div class="grid xl-25 lg-30 md-100 sm-100" data-aos="fade-up" data-aos-delay="600">
                    <div class="slots no-mask lazy-bg" data-src="./assets/img/bg/26.jpg">
                        <img class="float-img type-13" src="./assets/img/hero/27.png" alt="Slot Float Image 01" />
                        <div class="slot mt-2">
                            <h2 class="header-text quote-text">
                                <span class="text-xl fw-400">สุขภาพดี</span> <br>
                                ส่งเสริม <br>
                                <span class="text-lg fw-400 color1">สถาบันครอบครัว</span> <br>
                                <span class="text-xl fw-400">แข็งแรง</span>
                            </h2>
                        </div>
                        <img class="float-img type-14 lazy-img" data-src="./assets/img/hero/28.png" alt="Slot Float Image 02" />
                    </div>
                </div>
            
            </div>
        </div>
    </section>
    
    <?php include_once('include/footer.php'); ?>
    <?php include_once('include/script.php'); ?>
</body>
</html>
