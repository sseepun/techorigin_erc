<!DOCTYPE html>
<html lang="th">
<head>
    <?php include_once('include/header.php'); ?>
    <?php include_once('include/style.php'); ?>
    <style>
        .header-container{border-radius: 1rem 1rem 0 0; padding: 1.75rem 1.5rem; color:#fff;}
        .header-container .title-container .wrapper {display:flex; align-items:center; }
        .header-container .title-container .ss-icon-title {width:70%;}
        .header-container .title-container .btns {width:30%;}
        .header-container .title-container .text-wrapper {display:flex; justify-content:flex-start; align-items:center; height:100%;}
        .header-container .title-container .text-wrapper .tag {padding:.125rem .375rem; border-radius:.375rem; color:#fff; margin-left:.5rem;}
        .header-container .text-container {padding: .75rem 0 .75rem 3.1875rem; font-size:200%;}
        .header-container .title-container .btn.btn-back::before {background-color:#fff; border:none;}
        .header-container .stat-container .content-stat .stat{color:#fff;}
        .header-container .stat-container .content-stat .stat .icon {color:var(--color1);}
        .chat-container {
            -webkit-box-shadow:0px 5px 20px 0px rgba(0,0,0,.2);
            -moz-box-shadow:0px 5px 20px 0px rgba(0,0,0,.2);
            box-shadow:0px 5px 20px 0px rgba(0,0,0,.2);
            padding: 0 1.5rem;
        }
        .chat-container .chat-type-area {padding:2rem 0;}
        @media screen and (max-width:576px) {
            .header-container .text-container {padding: .75rem 0 0 0;}
        }
    </style>
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
                <div class="ss">ข้</div><h1 class="color2">อมูลของฉัน</h1>
                <p><strong>ระบบจัดการ</strong> เกี่ยวกับการใช้งาน จัดการเนื้อหา และข้อมูล</p>
            </div> 
            <div class="grids">
                <div class="grid xl-25 lg-30 sm-100">
                    <div class="slots bg-color5">
                        <div class="profile-tab">
                            <div class="icon lazy-bg" data-src="./assets/img/banner/01.jpg"></div>
                            <div class="text-container">
                                <h3 class="fw-400">อุรัสยา เสปอร์บันด์</h3>
                                <h5>urrasaya.sp@gmail.com</h5>
                            </div>
                        </div>
                        <div class="slot-tabs">
                            <?php for($i=0; $i<4; $i++){?>
                                <a class="slot-tab <?php if($i==0)echo 'active'; ?>" href="#">
                                    <div class="icon bg-color3 color-white">
                                        <i class="far fa-building"></i>
                                    </div>
                                    <h5 class="mt-0 color-black">
                                        0<?php echo "$i"; ?>. <br>
                                        ข่าวจากหน่วยงานส่วนกลาง
                                    </h5>
                                </a>
                            <?php }?> 
                        </div>
                    </div>
                </div>
                <div class="grid xl-75 lg-70 sm-100">
                    <div class="header-container bg-color0">
                        <div class="title-container">
                            <div class="wrapper">
                                <div class="ss-icon-title mt-0">
                                    <div class="icon bg-color1"><i class="fas fa-exclamation-triangle"></i></div>
                                    <div class="text-wrapper">หมายเลขร้องเรียน <div class="tag bg-color1">#667643</div></div>
                                </div>
                                <div class="btns mt-0 text-right">
                                    <a class="btn btn-back color-white" href="#">ย้อนกลับ</a>
                                </div>
                            </div>
                        </div>
                        <div class="text-container">ด้วยทาง รพ.สต.บ้านนาแล จัดทำโครงการคัดกรองสุขภาพผู้สูงอายุจึงมีความประสงค์ต้องการขอสนับสนุนสมุดบันทึกสุขภาพผู้สูงอายุ เล่มสีฟ้า จำนวน 500 เล่ม</div>
                        <div class="stat-container color-white">
                            <?php
                                $contentStat = [
                                    'date' => '27.03.2563', 'view_count' => '202'
                                ];
                                include_once('component/content-stat-2.php');
                            ?>
                        </div>
                    </div>
                    <div class="chat-container">
                        <div class="chat-content-area" style="min-height:50vh;"></div>
                        <div class="chat-type-area">
                            <div class="contact-box">
                                <form action="./" method="POST">
                                    <div class="ss-icon-title mt-0 mb-1">
                                        <div class="icon bg-color4"><i class="far fa-comment-dots"></i></div>
                                        <h2>ตอบหรือถามเพิ่มเติมเรื่องร้องเรียน</h2>
                                    </div>
                                    <div class="grids">
                                        <div class="grid sm-100 mt-0">
                                            <div class="field">
                                                <div class="control">
                                                    <textarea name="message" rows="4" required></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="btns text-right">
                                        <button type="submit" class="btn btn-action btn-secondary next-icon">
                                            ตอบความเห็น
                                        </button>
                                        <a class="btn btn-action btn-primary" href="#">
                                            ล้างข้อมูล
                                        </a>
                                    </div>
                                </form>
                            </div>
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
