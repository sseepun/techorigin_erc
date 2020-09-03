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
                
                    <div class="chat-container">
                        <div class="chat-header bg-color0 color-white pb-1">
                            <div class="ss-icon-title no-margin ai-start">
                                <div class="icon bg-color4 mt-0-5">
                                    <i class="far fa-clipboard"></i>
                                </div>
                                <div class="text-wrapper">
                                    <h2 class="color-white mt-0">
                                        megaloblastic anemia / <span class="color1">bicytopenia</span> คือโรคอะไร
                                    </h2>
                                    <p class="color-white mt-0">
                                        อยากทราบว่า megaloblastic anemia และ bicytopenia คือโรคอะไร 
                                        เป็นอันตรายร้ายแรงหรือไม่ สามารถรักษาให้หายขาดมั้ย และควรมีวิธีปฎิบัติตัวอย่างไร 
                                        ในการรักษาคนไข้สูงอายุ
                                    </p>
                                    <div class="ss-tags mt-0-5">
                                        <div class="ss-tag bg-color4">#667643</div>
                                        <div class="ss-tag bg-color2">#667643</div>
                                    </div>
                                </div>
                            </div>

                            <div class="info-stat">
                                <div class="block">
                                    <div class="profile-tab xs width-auto">
                                        <div class="icon lazy-bg" data-src="./assets/img/banner/01.jpg"></div>
                                        <div class="text-container">
                                            <p class="no-margin ws-nowrap color-white">
                                                <span class="fw-500">โพสต์โดย : anonymous</span>
                                                <span class="fw-500">IP Address :</span> 180.183.126.169
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="block">
                                    <a href="#" class="color-white">แจ้งลบกระทู้</a>
                                </div>
                                <div class="block">
                                    26.03.2563 
                                    <div class="inline-icon bg-color0 color1">
                                        <i class="fas fa-clock"></i>
                                    </div>
                                </div>
                                <div class="block">
                                    202
                                    <div class="inline-icon bg-color0 color1">
                                        <i class="fas fa-eye"></i>
                                    </div>
                                </div>
                                <div class="block">
                                    Share
                                    <a class="inline-icon bg-color0 color4" href="#">
                                        <i class="fab fa-facebook-f"></i>
                                    </a>
                                    <a class="inline-icon bg-color0 color4" href="#">
                                        <i class="fab fa-twitter"></i>
                                    </a>
                                    <a class="inline-icon bg-color0 color4" href="#">
                                        <i class="fab fa-instagram"></i>
                                    </a>
                                </div>
                            </div>

                        </div>
                        <div class="chat-body">

                            <div class="pb-1 border-bottom">
                                <div class="ss-icon-title no-margin ai-start">
                                    <div class="icon bg-color4 mt-0-5">
                                        <i class="far fa-comment"></i>
                                    </div>
                                    <div class="text-wrapper">
                                        <h2 class="no-margin">ร่วมความคิดเห็นอื่น</h2>
                                        <p class="no-margin">
                                            ( กรุณาเข้าสู่ระบบ 
                                            <span class="inline-icon bg-color0 color1">
                                                <i class="fas fa-lock"></i>
                                            </span>
                                            เพื่อตั้งกระทู้คำถาม หรือ สมัครสมาชิก 
                                            <span class="inline-icon bg-color0 color1">
                                                <i class="fas fa-user"></i>
                                            </span>
                                            หากท่านยังไม่มีชื่อเข้าใช้งาน )
                                        </p>
                                        <form action="./" method="POST">
                                            <div class="field">
                                                <div class="control">
                                                    <textarea rows="4"></textarea>
                                                </div>
                                            </div>
                                            <div class="d-flex ai-center jc-space-between fw-wrap mb-1">
                                                <div class="captcha-container">
                                                    <img class="lazy-img" data-src="./assets/img/default/captcha.png" alt="CAPTCHA" />
                                                </div>
                                                <div class="btns width-auto">
                                                    <button type="submit" class="btn btn-action btn-secondary next-icon">
                                                        ตอบความเห็น
                                                    </button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>

                            <?php for($i=0; $i<3; $i++){?>
                                <div class="border-bottom pt-1-5 pb-1-5">
                                    <div class="ss-icon-title no-margin ai-start">
                                        <div class="icon bg-color2 <?php if($i!=0)echo 'op-0'; ?>">
                                            <i class="far fa-comments"></i>
                                        </div>
                                        <div class="text-wrapper">
                                            <div class="d-flex jc-space-between">
                                                <h3 class="no-margin">32 ความเห็นอื่นๆ</h3>
                                                <div class="people-icons">
                                                    <?php for($j=1; $j<5; $j++){?>
                                                        <div class="person lazy-bg" data-src="./assets/img/banner/0<?php echo $j; ?>.jpg" 
                                                        style="--order:<?php echo $j; ?>;"></div>
                                                    <?php }?>
                                                </div>
                                            </div>

                                            <h3>Megalobalstoc amemia เป็นกลุ่มโรคที่เกิดจากเซลล์ที่ทำหน้าที่สร้างเซลล์</h3>
                                            <p class="mt-0-5">
                                                ในไขกระดูกไม่สามารถสร้าง DNA ได้ตามปกติ แต่ยังคงสร้าง RNA 
                                                และโปรตีนได้ทำให้เกิดความผิดปกติโดยเซลล์มีขนาดใหญ่ขึ้นและนิวเคลียสมีลักษณะอ่อนในขณะที่ไซโตพลาสซึมเจริญตามปกติ 
                                                ทำให้เกิดปรากฏการณ์ที่เรียกว่า "nuclear-cytoplasmic asymchronism" นอกจากนี้เซลล์อื่นๆ 
                                                ที่มีการแบ่งตัวเร็วจะเกิดความผิดปกติ
                                            </p>

                                            <div class="d-flex ai-center jc-space-between fw-wrap">
                                                <div class="profile-tab xs width-auto mt-1">
                                                    <div class="icon lazy-bg" data-src="./assets/img/banner/01.jpg"></div>
                                                    <div class="text-container">
                                                        <p class="no-margin ws-nowrap">
                                                            <span class="fw-500">โพสต์โดย : anonymous</span>
                                                            <span class="fw-500 ml-1">IP Address :</span> 180.183.126.169
                                                        </p>
                                                    </div>
                                                </div>
                                                <p class="mt-1">
                                                    | <a class="btn btn-icon ml-0-5 mr-0-5" href="#">
                                                        <span class="text-sm">ลบความคิดเห็น</span>
                                                    </a> | 
                                                    <span class="text-sm ml-0-5">26.03.2563</span> 
                                                    <span class="inline-icon bg-color0 color-white">
                                                        <i class="fas fa-clock"></i>
                                                    </span> 
                                                    <span class="text-sm ml-0-5">202</span>
                                                    <span class="inline-icon bg-color0 color-white">
                                                        <i class="fas fa-eye"></i>
                                                    </span> 
                                                </p>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            <?php }?>
                            
                            <div class="pagination mt-2">
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
                                    <a class="btn btn-action btn-sm btn-primary next-icon" href="#">
                                        ดูความคิดเห็นทั้งหมด
                                    </a>
                                </div>
                            </div>
                    
                        </div>
                    </div>
                    
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
