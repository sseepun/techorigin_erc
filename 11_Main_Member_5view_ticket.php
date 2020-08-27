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
        .chat-container {
            -webkit-box-shadow:0px 5px 20px 0px rgba(0,0,0,.2);
            -moz-box-shadow:0px 5px 20px 0px rgba(0,0,0,.2);
            box-shadow:0px 5px 20px 0px rgba(0,0,0,.2);
            padding: 0 1.5rem;
        }
        .chat-container .chat-content-area {display:flex; flex-wrap:wrap;}
        .chat-container .chat-content-area > .wrapper {position:relative; padding: 2.5rem 0; width:100%;}
        .chat-container .chat-content-area .chat-other {padding-top:2rem; display:flex; flex-wrap:wrap;}
        .chat-container .chat-content-area .chat-other .profile { min-height:2rem; width:10%; position:relative;}
        .chat-container .chat-content-area .chat-other .profile .profile-img {position:absolute; width:2.5rem; height:2.5rem; top: calc(50% - 1.25rem); left: calc(50% - 1.25rem); background-position:center; background-size:cover; border-radius:50%;}
        .chat-container .chat-content-area .chat-other .text {border: .0625rem solid #e7e7e7; max-width:80%; position:relative; border-radius:.25rem; background:#f3f5f4; min-height:10%; padding:.75rem 1rem; }
        .chat-container .chat-content-area .chat-other .text::before {content:''; width:1rem; height:1rem; background:#f3f5f4; transform: rotate(45deg); position:absolute; top: calc(50% - .5rem); left: -.5rem;}
        .chat-container .chat-content-area .chat-other .info {padding-left: calc(10% + .75rem); width:100%; padding-top: .25rem; display:flex; align-items:center;}
        .chat-container .chat-content-area .chat-other .info .time {padding-left:1.5rem;}
        .chat-container .chat-content-area .chat-other .info .icon {margin-left:.5rem;}
        .chat-container .chat-content-area .chat-other .info .icon i{ width:1.25rem; height:1.25rem; display:flex; justify-content:center; align-items:center; color:#e2e2e2; font-size:.75rem; padding:.25rem; border-radius: 50%; }
        .chat-container .chat-content-area .chat-me {padding-top:2rem; display:flex; flex-wrap:wrap; flex-direction:row-reverse;}
        .chat-container .chat-content-area .chat-me .profile { min-height:2rem; width:10%; position:relative;}
        .chat-container .chat-content-area .chat-me .profile .profile-img {position:absolute;  width:2.5rem; height:2.5rem; top: calc(50% - 1.25rem); left: calc(50% - 1.25rem); background-position:center; background-size:cover; border-radius:50%;}
        .chat-container .chat-content-area .chat-me .text {border: .0625rem solid #e7e7e7; max-width:80%;position:relative; border-radius:.25rem; background:#f3f5f4; min-height:10%; padding:.75rem 1rem; }
        .chat-container .chat-content-area .chat-me .text::before {content:''; width:1rem; height:1rem; background:#f3f5f4; transform: rotate(45deg); position:absolute; top: calc(50% - .5rem); right: -.5rem;}
        .chat-container .chat-content-area .chat-me .info {padding-right: calc(10% + .75rem);justify-content:flex-end; width:100%; padding-top: .25rem; display:flex; align-items:center;}
        .chat-container .chat-content-area .chat-me .info .time {padding-left:1.5rem;}
        .chat-container .chat-content-area .chat-me .info .icon {margin-left:.5rem;}
        .chat-container .chat-content-area .chat-me .info .icon i{ width:1.25rem; height:1.25rem; display:flex; justify-content:center; align-items:center; color:#e2e2e2; font-size:.75rem; padding:.25rem; border-radius: 50%; }
        .chat-container .chat-type-area {padding:2rem 0;}
        @media screen and (max-width: 767.98px)  {
            .chat-container .chat-content-area .chat-other .text::before, .chat-container .chat-content-area .chat-me .text::before {display:none;}
        }
        @media screen and (max-width:576px) {
            .header-container .text-container {padding: .75rem 0 0 0;}
            .chat-container .chat-content-area .chat-other .info{padding-left:0;}
            .chat-container .chat-content-area .chat-other .info .person {max-width:5rem;}
            .chat-container .chat-content-area .chat-other .info .time {padding-left:.5rem;}
            .chat-container .chat-content-area .chat-me .info {padding-right:0;}
            .chat-container .chat-content-area .chat-other .profile,.chat-container .chat-content-area .chat-me .profile{width:100%;}
            .chat-container .chat-content-area .chat-other .profile .profile-img {top: -1rem; left:0; }
            .chat-container .chat-content-area .chat-me .profile .profile-img {top:-1rem;left:auto;  right:0;}

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
                        <div class="chat-content-area" style="min-height:50vh;">
                            <div class="wrapper">
                                <div class="chat-other">
                                    <div class="profile">
                                        <div class="profile-img" style="background-image: url('./assets/img/hero/06.png');"></div>
                                    </div>
                                    <div class="text">ขออนุญาติทราบถามเรื่องสมุดบันทึกสุขภาพผู้สูงอายุค่ะ อยากได้บ้างต้องทำไงคะ รบกวนติดต่อกลับด้วยนะคะ 087-2204450</div>
                                    <div class="info">
                                        <div class="person"><strong>ตอบโดย : ประกายกัญญา</strong> พนักงาน</div>
                                        <div class="time">26.03.2563 (16:45)</div>
                                        <div class="icon"><i class="fas fa-clock bg-color0"></i></div>
                                    </div>
                                </div>
                                <div class="chat-me">
                                    <div class="profile">
                                        <div class="profile-img" style="background-image: url('./assets/img/hero/01.png');"></div>
                                    </div>
                                    <div class="text">ด้วยทาง รพ.สต. บ้านนาแล จัดทำโครงการคัดกรองสุขภาพผู้สูงอายุ จึงมีความประสงต์ต้องการ ขอสนับสนุนสมุดบันทึกสุขภาพผู้สูงอายุ เล่มสีฟ้า</div>
                                    <div class="info">
                                        <div class="time">26.03.2563 (16:45)</div>
                                        <div class="icon"><i class="fas fa-clock bg-color0"></i></div>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
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
