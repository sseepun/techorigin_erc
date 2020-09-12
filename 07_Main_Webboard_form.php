<!DOCTYPE html>
<html lang="th">
<head>
    <?php include_once('include/header.php'); ?>
    <?php include_once('include/style.php'); ?>
</head>
<body>
    <?php include_once('include/topnav.php'); ?>
    <?php
        $breadcrumb = [
            [ 'name' => 'หน้าแรก', 'url' => './' ],
            [ 'name' => 'บริการประชาขน', 'url' => '#' ],
            [ 'name' => 'กระดานถาม-ตอบ', 'url' => '#' ]
        ];
        include_once('component/breadcrumb.php');
    ?>

    <div class="section-padding">
        <div class="container">
            <div class="ss-header" data-aos="fade-up" data-aos-delay="0">
                <div class="ss">แ</div><h1 class="color2">บบฟอร์มการตั้งกระทู้</h1>
                <p><strong class="ml-0-5">กรมอนามัย</strong> พร้อมพูดคุยและแลกเปลี่ยนความรู้ข่าวสารที่เป็นประโยชน์สำหรับคุณ</p>
            </div>
            <div class="grids">

                <div class="grid xl-75 lg-70 sm-100">
                    <div class="btns text-right mt-0">
                        <a class="btn btn-icon mr-1" href="#">
                            <i class="fas fa-plus-circle"></i> ตั้งกระทู้
                        </a>
                        <a class="btn btn-icon mr-1" href="#">
                            <i class="fas fa-lock"></i> เข้าสู่ระบบ
                        </a>
                        <a class="btn btn-icon" href="#">
                            <i class="far fa-user"></i> สมัครสมาชิก
                        </a>
                    </div>

                    <div class="ss-box">
                        <div class="header bg-color3 color-white">
                            <div class="icon"><i class="fas fa-book"></i></div>
                            <h3 class="color-white">หัวข้อกระทู้</h3>
                        </div>
                        <div class="content">
                            <div class="field mt-0">
                                <div class="control">
                                    <input type="text">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="ss-box">
                        <div class="header bg-color4 color-white">
                            <div class="icon"><i class="fas fa-book"></i></div>
                            <h3 class="color-white">หมวดหมู่กระทู้</h3>
                        </div>
                        <div class="content">
                            <div class="field d-flex fw-wrap mt-0">
                                <?php for($i=0; $i<12; $i++){?>
                                    <div class="icon-radio">
                                        <div class="icon bg-color<?php echo $i%5; ?>">
                                            <i class="fas fa-running"></i>
                                        </div>
                                        <div class="control-flex">
                                            <div class="control radio-control">
                                                <input type="radio" name="radio" id="radio_<?php echo $i; ?>" value="<?php echo $i; ?>">
                                                <label for="radio_<?php echo $i; ?>">ข่าวประชาสัมพันธ์</label>
                                            </div>
                                        </div>
                                    </div>
                                <?php }?>
                            </div>
                        </div>
                    </div>
                    <div class="ss-box">
                        <div class="header bg-color1 color-white">
                            <div class="icon"><i class="fas fa-book"></i></div>
                            <h3 class="color-white">รายละเอียด</h3>
                        </div>
                        <div class="content">
                            <div class="field mt-0">
                                <div class="control">
                                    <textarea rows="5"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="ss-box">
                        <div class="header bg-color0 color-white">
                            <div class="icon"><i class="fas fa-book"></i></div>
                            <h3 class="color-white">แนบไฟล์</h3>
                        </div>
                        <div class="content">
                            <div class="field mt-0">
                                <div class="control">
                                    <form action="/upload" class="dropzone" method="POST" enctype="multipart/form-data"></form>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="btns text-center">
                        <a class="btn btn-action btn-secondary" href="#">
                            โพสกระทู้
                        </a>
                        <a class="btn btn-action btn-primary" href="#">
                            ยกเลิก
                        </a>
                    </div>

                    <h3 class="fw-400 mt-3-5">ข้อตกลงในการใช้งานกระดานถาม-ตอบ :</h3>
                    <p class="mt-0-5 pl-1-5">
                        ในกรณีต้องการตั้งคำถาม ต้องสมัครเป็นสมาชิกเว็ปไซต์ก่อน และล็อกอินเข้าระบบเพื่อตั้งคำถาม
                        <br>
                        ข้อความในถาม-ตอบปัญหาสุขภาพนี้ ถือเป็นความคิดเห็นเฉพาะของผู้ตอบคำถาม 
                        ไม่สามารถนำข้อมูลคำตอบไปอ้างอิงทางกฎหมายได้
                    </p>

                    <h3 class="fw-400 mt-2">หมายเหตุ :</h3>
                    <p class="mt-0-5">
                        <span class="fw-500">เว็บบอร์ดนี้จัดทำขึ้นโดยกรมอนามัย กระทรวงสาธารณะสุข</span> 
                        มีวัตถุประสงค์เพื่อเผยแพร่ความรด้านสุขภาพสำหรับประชาชนโดยทั่วไปเท่านั้น 
                        ดังนั้นขอความกรุณากลั่นกรองข้อความที่อาจพาดพิงถึงบุคคลอื่นๆ 
                        เพื่อให้เว็บบอร์ดนี้เป็นแหล่งข้อมูลที่ดีสำหรับทุกคน เนื้อหาของการตอบคำถามแต่ละข้อเป็น
                        การตอบเฉพาะปัญหานั้นๆ ไม่สามารถนำไปอ้างอิงเปรียบเทียบกับผู้อื่นที่มีปัญหาเดียวกันได้เสมอไป 
                        ข้อความในคำถาม เกิดจากการเขียนโดยสาธารณชน และส่งขึ้นมาแบบอัตโนมัติ
                        <br>
                        <span class="fw-500">ทางเว็บไซต์กรมอนามัย ไม่ได้เป็นเจ้าของลิขสิทธิ์ของข้อความ</span> 
                        ทางเว็บไซต์ไม่รับผิดชอบต่อข้อความใดๆ ทั้งสิ้นเพราะไม่สามารถระบุได้ว่าเป็นความจริงหรือชื่อผู้เขียน
                        ที่ได้เห็นคือชื่อจริง ผู้อ่านจึงควรใช้วิจารณญาณในการกลั่นกรอง
                        <br><br>
                        <span class="fw-500">
                            ถ้าท่านพบเห็นข้อความใดที่ขัดต่อกฎหมายและศีลธรรมหรือเป็นการกลั่นแกล้งเพื่อให้เกิดความเสียหาย 
                            ต่อบุคคลหรือหน่วยงานใด กรุณาส่ง email มาที่ Webmaster/anamai.moph.go.th หรือ 
                            กดแจ้งที่ปุ่มแจ้งลบกระทู้ เพื่อให้ทีมงานทราบและทำการลบข้อความนั้นออกจากระบบต่อไป 
                            ขอขอบคุณทุกท่านที่ช่วยแจ้งเข้ามา
                        </span>
                    </p>
                </div>

                <div class="grid xl-25 lg-30 md-100 sm-100" data-aos="fade-up" data-aos-delay="600">
                    <div class="slots no-mask lazy-bg" data-src="./assets/img/bg/03.jpg">
                        <img class="float-img type-11" src="./assets/img/hero/23.png" alt="Slot Float Image 01" />
                        <div class="slot mt-3-5">
                            <h2 class="header-text quote-text quote-inline">
                                <span class="fw-400">กรรมอนามัย</span> <br>
                                เรามีสาระสุขภาพดีๆ <br>
                                <span class="text-xl fw-400 color1">ส่งตรงถึงคุณ</span> <br>
                                <span class="text-xl">ทุกวัน</span>
                            </h2>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <?php include_once('include/footer.php'); ?>
    <?php include_once('include/script.php'); ?>
</body>
</html>
