<!DOCTYPE html>
<html lang="th">
<head>
    <?php include_once('include/header.php'); ?>
    <?php include_once('include/style.php'); ?>
    <style>
        .contact-box .checkbox-container {display:flex; flex-wrap:wrap;}
        .contact-box .checkbox-container label {padding-left:.25rem; cursor:pointer; }
        .contact-box .checkbox-container input[type="checkbox"] {display:none;}
        .contact-box .checkbox-container input[type="checkbox"] + *::before {
            content: '';
            display:inline-block;
            vertical-align:middle;
            width:.75rem;
            height:.75rem;
            border-radius:.25rem;
            border-style:solid;
            border-width:.0625rem;
            border-color:var(--color5);
            margin-right:.3rem;
        } 
        .contact-box .checkbox-container input[type="checkbox"]:checked + *::before {
            content: '✓';
            color: #fff;
            font-size: 50%;
            line-height: .9375rem;
            font-weight: 900;
            text-align:center;
            background:var(--color4);
            border-color:var(--color4);
        }
        .contact-box .checkbox-container .ss-icon-title label > p {padding-left: 1.475rem;}
        .contact-box .ss-icon-title .title > p:first-child {font-size: 1.3125rem;}
        .contact-box .checkbox-container input[type='checkbox']:checked + label::before {}
        .contact-box .checkbox-container .wrapper {padding-left:3.1875rem;}
        .contact-box .checkbox-container .grid {position:relative; display:flex; align-items:center;}
        @media screen and (max-width: 768px) {
            .contact-box .checkbox-container .wrapper {padding-left:2.6875rem;}
            .contact-box .checkbox-container .ss-icon-title label > p {margin-top:0;}
            .ss-icon-title .title > p {margin-top:0;}

        }
        @media screen and (max-width: 576px) {
            .contact-box .checkbox-container .wrapper {padding-left:0;}
            .ss-icon-title .icon  {display:none;}
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
    <div class="section-padding">
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
                    <div class="contact-box">
                        <form action="./" method="POST">
                            <div class="ss-icon-title mt-0 mb-1">
                                <div class="icon bg-color5"><i class="fas fa-mobile-alt"></i></div>
                                <h2>แก้ไขติดตามจดหมายข่าวสาร</h2>
                            </div>
                            <p>กรุณาเลือกประเภทของข่าวสารที่คุณมีความสนใจในการติดตาม</p>
                            <div class="grids">
                                <div class="grid sm-100 mt-0 mb-0-5">
                                    <div class="field">
                                        <div class="ss-icon-title mt-0">
                                            <div class="icon bg-color1"><i class="far fa-building"></i></div>
                                            <div class="title">
                                                <p class="fw-600">ข่าวประชาสัมพันธ์</p>
                                                <p>กรมอนามัย พร้อมให้ข้อมูลข่าวสารที่เป็นประโยชน์สำหรับคุณ</p>
                                            </div>
                                        </div>
                                        <div class="checkbox-container">
                                            <div class="grids">
                                                <div class="wrapper">
                                                    <div class="grid all-100 mt-0-5">
                                                        <input type="checkbox" id="center" value="value" />
                                                    <label for="center">ข่าวจากหน่วยงานส่วนกลาง</label>
                                                    </div>
                                                    <div class="grid all-100 mt-0-5">
                                                        <input type="checkbox" id="anamai">
                                                        <label for="anamai">ข่าวจากศูนย์อนามัย</label>
                                                    </div>
                                                    <div class="grid all-100 mt-0-5">
                                                        <input type="checkbox" id="newspaper">
                                                        <label for="newspaper">ข่าวจากหนังสือพิมพ์</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="grid sm-100 mt-0 mb-0-5">
                                    <div class="field">
                                        <div class="checkbox-container">
                                            <div class="grids">
                                                <div class="grid all-100 mt-0">
                                                    <div class="ss-icon-title mt-0">
                                                        <div class="icon bg-color2"><i class="far fa-building"></i></div>
                                                        <input type="checkbox" id="่journal" value="value" />
                                                        <label for="่journal">
                                                            <span class="fw-600">วารสาร</span>
                                                            <p>กรมอนามัย ส่งมอบความรู้ที่ถูกต้องเหมาะสมในวิถีชีวิตสู่สุขภาพดี</p>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="grid sm-100 mt-0 mb-0-5">
                                    <div class="field">
                                        <div class="checkbox-container">
                                            <div class="grids">
                                                <div class="grid all-100 mt-0">
                                                    <div class="ss-icon-title mt-0">
                                                        <div class="icon bg-color3"><i class="far fa-building"></i></div>
                                                        <input type="checkbox" id="gallery" value="value" />
                                                        <label for="gallery">
                                                            <span class="fw-600">คลังภาพ</span>
                                                            <p>เผยแพร่ความรู้ และวิชาการด้านส่งเสริมสุขภาพและอนามัยสิ่งแวดล้อม</p>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="grid sm-100 mt-0 mb-0-5">
                                    <div class="field">
                                        <div class="checkbox-container">
                                            <div class="grids">
                                                <div class="grid all-100 mt-0">
                                                    <div class="ss-icon-title mt-0">
                                                        <div class="icon bg-color5"><i class="far fa-building"></i></div>
                                                        <input type="checkbox" id="video" value="value" />
                                                        <label for="video">
                                                            <span class="fw-600">วิดิโอ</span>
                                                            <p>กรมอนามัย อัพเดท รวบรวมสื่อมัลติมีเดียเพื่อประชาชน</p>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="grid sm-100 mt-0">
                                    <div class="field">
                                        <div class="checkbox-container">
                                            <div class="grids">
                                                <div class="grid all-100 mt-0">
                                                    <div class="ss-icon-title mt-0">
                                                        <div class="icon bg-color0"><i class="far fa-building"></i></div>
                                                        <input type="checkbox" id="document" value="value" />
                                                        <label for="document">
                                                            <span class="fw-600">ไฟล์เอกสาร</span>
                                                            <p>กรมอนามัย กับคลังความรู้สุขภาพเพื่อทุกคน</p>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                            <div class="btns mt-2">
                                <button type="submit" class="btn btn-action btn-secondary next-icon">
                                    อัพเดตข้อมูล
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
    <?php include_once('include/footer.php'); ?>
    <?php include_once('include/script.php'); ?>
</body>
</html>
