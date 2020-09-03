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
            [ 'name' => 'ข้อมูลของฉัน', 'url' => '#' ]
        ];
        include_once('component/breadcrumb.php');
    ?>

    <section class="section-padding">
        <div class="container">
            <div class="ss-header" data-aos="fade-up" data-aos-delay="0">
                <div class="ss">ก</div><h1 class="color2">ระดานถาม - ตอบ<span class="fw-300 text-xs color-black"> | 01. ข่าวประชาสัมพันธ์</span></h1>
                <p><strong>กรมอนามัย</strong> พร้อมพูดคุยและแลกเปลี่ยนความรู้ข่าวสารที่เป็นประโยชน์สำหรับคุณ</p>
            </div> 
            <div class="grids">

                <div class="grid xl-75 lg-70 md-100 sm-100">
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
                    <h3 class="mt-0-5 fw-400">ข้อตกลงในการใช้งานกระดานถาม-ตอบ :</h3>
                    <ul class="ss-list">
                        <li>
                            ในกรณีต้องการตั้งคำถาม ต้องสมัครเป็นสมาชิกเว็ปไซต์ก่อน 
                            และล็อกอินเข้าระบบเพื่อตั้งคำถาม
                        </li>
                        <li>
                            ข้อความในถาม-ตอบปัญหาสุขภาพนี้ ถือเป็นความคิดเห็นเฉพาะของผู้ตอบคำถาม 
                            ไม่สามารถนำข้อมูลคำตอบไปอ้างอิงทางกฎหมายได้
                        </li>
                    </ul>

                    <!-- Info Table -->
                    <div class="table-wrapper mt-1" data-simplebar>
                        <table class="table info-table info-table-2">
                            <thead>
                                <tr>
                                    <th style="width:2rem;">No.</th>
                                    <th>หัวข้อกระทู้</th>
                                    <th>ผู้โพสกระทู้</th>
                                    <th style="width:4.5rem;">จำนวนอ่าน</th>
                                    <th style="min-width:6rem;">จำนวนตอบ</th>
                                    <th>ผู้ตอบล่าสุด</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php for($i=0; $i<18; $i++){?>
                                    <tr>
                                        <td style="width:2rem;">
                                            <?php echo sprintf('%02d', $i+1); ?>
                                        </td>
                                        <td class="no-bullet">
                                            สอบถามตำแหน่งพนักงานราชการเจ้าพนักงานธุรการ 
                                        </td>
                                        <td>
                                            <div class="profile-tab sm no-shadow">
                                                <div class="icon lazy-bg" data-src="./assets/img/banner/01.jpg"></div>
                                                <div class="text-container">
                                                    <h5 class="text-left">อุรัสยา เสปอร์บันด์</h5>
                                                    <h5 class="text-left op-7">
                                                        <span class="text-xs">
                                                            [11/06/2560 06:49:42]
                                                        </span>
                                                    </h5>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-center" style="width:4.5rem;">
                                            1254
                                        </td>
                                        <td class="text-center" style="width:4.5rem;">
                                            5
                                        </td>
                                        <td class="text-center">
                                            <?php if($i%2==0){?>
                                                -
                                            <?php }else{?>
                                                <div class="profile-tab sm no-shadow">
                                                    <div class="icon lazy-bg" data-src="./assets/img/banner/01.jpg"></div>
                                                    <div class="text-container">
                                                        <h5 class="color-white text-left">อุรัสยา เสปอร์บันด์</h5>
                                                        <h5 class="color-white text-left op-7">
                                                            <span class="text-xs">
                                                                [11/06/2560 06:49:42]
                                                            </span>
                                                        </h5>
                                                    </div>
                                                </div>
                                            <?php }?>
                                        </td>
                                    </tr>
                                <?php }?>
                            </tbody>
                        </table>
                    </div>
                
                    <div class="pagination mt-1">
                        <div class="wrapper">
                            <a href="#" class="page-btn page-first disabled"></a>
                            <a href="#" class="page-btn page-prev disabled"></a>
                            <a href="#" class="page-btn active">01</a>
                            <a href="#" class="page-btn">02</a>
                            <a href="#" class="page-btn">03</a>
                            <a href="#" class="page-btn">04</a>
                            <a href="#" class="page-btn">05</a>
                            <a href="#" class="page-btn page-next"></a>
                            <a href="#" class="page-btn page-last"></a>
                            <a class="btn btn-action btn-sm btn-secondary next-icon" href="#">
                                ดูแบบสำรวจทั้งหมด
                            </a>
                        </div>
                    </div>

                    <h4 class="fw-400 mt-3">หมายเหตุ :</h4>
                    <p>
                        <span class="fw-600">เว็บบอร์ดนี้จัดทำขึ้นโดยกรมอนามัย กระทรวงสาธารณะสุข</span> 
                        มีวัตถุประสงค์เพื่อเผยแพร่ความรด้านสุขภาพสำหรับประชาชนโดยทั่วไปเท่านั้น 
                        ดังนั้นขอความกรุณากลั่นกรองข้อความที่อาจพาดพิงถึงบุคคลอื่นๆ เพื่อให้เว็บบอร์ดนี้เป็นแหล่งข้อมูลที่ดีสำหรับทุกคน 
                        เนื้อหาของการตอบคำถามแต่ละข้อเป็น การตอบเฉพาะปัญหานั้นๆ 
                        ไม่สามารถนำไปอ้างอิงเปรียบเทียบกับผู้อื่นที่มีปัญหาเดียวกันได้เสมอไป ข้อความในคำถาม เกิดจากการเขียนโดยสาธารณชน
                        และส่งขึ้นมาแบบอัตโนมัติ
                        <br>
                        <span class="fw-600">ทางเว็บไซต์กรมอนามัย ไม่ได้เป็นเจ้าของลิขสิทธิ์ของข้อความ</span> 
                        ทางเว็บไซต์ไม่รับผิดชอบต่อข้อความใดๆ ทั้งสิ้นเพราะไม่สามารถระบุได้ว่าเป็นความจริงหรือชื่อผู้เขียน
                        ที่ได้เห็นคือชื่อจริง ผู้อ่านจึงควรใช้วิจารณญาณในการกลั่นกรอง
                    </p>
                    <p class="fw-600 mt-1-5">
                        ถ้าท่านพบเห็นข้อความใดที่ขัดต่อกฎหมายและศีลธรรมหรือเป็นการกลั่นแกล้งเพื่อให้เกิดความเสียหาย 
                        ต่อบุคคลหรือหน่วยงานใด กรุณาส่ง email มาที่ 
                        <span class="color4">Webmaster/anamai.moph.go.th</span>
                        หรือ <span class="color4">กดแจ้งที่ปุ่มแจ้งลบกระทู้</span> 
                        เพื่อให้ทีมงานทราบและทำการลบข้อความนั้นออกจากระบบต่อไป 
                        ขอขอบคุณทุกท่านที่ช่วยแจ้งเข้ามา
                    </p>
                </div>

                <div class="grid xl-25 lg-30 md-100 sm-100" data-aos="fade-up" data-aos-delay="600">
                    <div class="slots no-mask lazy-bg" data-src="./assets/img/bg/35.jpg">
                        <img class="float-img type-15" src="./assets/img/hero/32.png" alt="Slot Float Image 01" />
                        <div class="slot-tabs mt-0">
                            <?php for($i=0; $i<7; $i++){?>
                                <a class="slot-tab" href="#">
                                    <h5 class="mt-0 color-white">
                                        <?php echo sprintf('%02d', $i+1); ?>. <br>
                                        ข่าวจากหนังสือพิมพ์
                                    </h5>
                                </a>
                            <?php }?> 
                        </div>
                        <div class="slot mt-1">
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
    </section>
    
    <?php include_once('include/footer.php'); ?>
    <?php include_once('include/script.php'); ?>
</body>
</html>
