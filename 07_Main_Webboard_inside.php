<!DOCTYPE html>
<html lang="th">
<head>
    <?php include_once('include/header.php'); ?>
    <?php include_once('include/style.php'); ?>
    <style>
        .post-container {width:100%; border-radius: .625rem .625rem 0 0; overflow:hidden; 
            -webkit-box-shadow:0px 5px 20px 0px rgba(0,0,0,.2);
            -moz-box-shadow:0px 5px 20px 0px rgba(0,0,0,.2);
            box-shadow:0px 5px 20px 0px rgba(0,0,0,.2);
        }
        .post-container .post-header {padding: 1rem 1.25rem 0 1.25rem; overflow:hidden;}
        .post-container .post-header .ss-icon-title > p {margin:0; width:calc(100% - 3.1875rem);}
        .post-container .post-header .ss-icon-title .ss-tags {width: calc(100% - 3.1875rem);}
        /* Comment Area */
        .post-container .comment-area {padding: 1.5rem 1.25rem 0 1.25rem;}
        .post-container .comment-area .ss-icon-title > h2 {line-height: 1.375rem;}
        .post-container .comment-area .ss-icon-title h2 > span{font-size: 1rem; display:block;} 
        .post-container .comment-area .ss-icon-title h2 span > i{width:1rem; height:1rem; border-radius: 50%; padding: .0625rem; font-size:50%;text-align:center; line-height: .85rem; vertical-align:middle;}
        /* Other comments */
        .post-container .other-comments .ss-icon-title {position:relative;}
        .post-container .other-comments .people {display:flex; align-items:center; height:100%; position:absolute; top:0; width:100%;}
        .post-container .other-comments .people .person {position:absolute; top:0; width:2rem; height:2rem; border-radius:50%; }
        .post-container .other-comments {padding:0 1.25rem 1rem 1.25rem;}
        .post-container .other-comments .content{ padding: 0 0 0 3.1875rem;}
        .post-container .other-comments .content > h2 {margin:0; font-size:2rem;}
        .post-container .other-comments .content .info, .post-container .other-comments .content .info .blocks{display:flex; align-items:center; justify-content:space-between;}
        .post-container .other-comments .content .info .blocks .block, .post-container .other-comments .content .info .blocks .block > * {display:inline-block;}
        .post-container .other-comments .content .info .profile{ width:2rem; height:2rem; border-radius:50%;}
        .post-container .other-comments .content .info .person {margin-left:.625rem;}
        .post-container .other-comments .content .info .person span {display:block;}
        .post-container .other-comments .content .info .block > .icon{
            width:1rem; height:1rem; line-height:1.1875rem; font-size:.5625rem;
            border-radius:50%; text-align:center; transform:translateY(-.125rem); 
        }
        .post-container .other-comments .content .info .block a { text-decoration:none; font-size:1.125rem; color:#000; padding:0 .5rem;border: 1px solid transparent; border-right-color:#000; border-left-color:#000;}
        @media screen and (max-width: 767.98px) {
            .post-container .other-comments .content {padding-left: 2.6875rem;}
        }
        @media screen and (max-width: 576px) {
            .post-container .other-comments .content .info {display:block;}
            .post-container .other-comments .content .info .person {margin:0;}
            .post-container .other-comments .content .info .block a {margin:0; padding: 0 .25rem;}
            .post-container .other-comments .content .info .profile {display:none;}
        }

        /* Special responsive condition maybe unneccessary */
        @media screen and (max-width:350px) {
            .post-container .other-comments .ss-icon-title {padding-bottom:2rem;}
            .post-container .other-comments .people {top:2rem;}
        }

        /* info stat
        /* Almost identical to info content */
        .info-stat {position:relative; margin: .625rem 0 1.25rem 3.1875rem; padding:.25rem 0;}
        .info-stat::before, .info-stat::after {content:''; position:absolute; width:calc(100% + 6.1875rem); height:.03125rem; background:#e7e7e7;}
        .info-stat::before {top:0; left:-4.6875rem;}
        .info-stat::after {bottom:0; left:-4.6875rem;}
        .info-stat .wrapper {display:inline-block; height:100%;}
        .info-stat .wrapper > *, .info-stat .wrapper > * * {display:inline-block;vertical-align:middle; }
        .info-stat .block {margin: .375rem 0 0 0; height:100%;padding-right:.5rem; position:relative; }
        .info-stat .block::after {content: ''; position:absolute; right:0; top:-.575rem; width:.03125rem;  background:#e7e7e7;}
        .info-stat .block:first-child::after {height:calc(100% + .875rem);}
        .info-stat .block:not(:first-child)::after {top: -.9344rem; height:calc(100% + 1.4375rem);}
        .info-stat .block:last-child::after{background:transparent;}
        .info-stat .person-info {display:inline;}
        .info-stat .person-info > p {margin:0;}
        .info-stat .profile {width:2rem; height:2rem; border-radius: 50%; vertical-align:middle; margin-right:.5rem;}
        .info-stat .icon {display:inline-block; width:1.4375rem; height:1.4375rem; border-radius: 50%; font-size:.75rem; text-align:center; line-height:1.375rem; border:.5px solid transparent; border-color:#e7e7e7; }
        .info-stat .delete-btn a {text-decoration:none; font-size:1.1875rem; color:#000;}
        .info-stat .stat {font-size:1.1875rem;}
        .info-stat .socials {font-size:1.1875rem;}

        /* info content */
        .info-content .wrapper {display:inline-block; }
        .info-content .grid:first-child {text-align:left;}
        .info-content .grid:last-child {text-align:right;}
        .info-content .wrapper > *, .info-content .wrapper > * * {display:inline-block; vertical-align:middle;}
        .info-content .person-info {display:inline;}
        .info-content .person-info > p {margin:0;}
        .info-content .profile {width:2rem; height:2rem; border-radius: 50%; vertical-align:middle; margin-right:.5rem;}
        .info-content .icon {display:inline-block; width:1.125rem; height:1.125rem; border-radius: 50%; font-size:.75rem; text-align:center; line-height:1.125rem; }
        .info-content .delete-btn a {text-decoration:none; font-size:1.25rem; color:#000; padding: 0 .5rem; border-left: .5px solid transparent; border-right: .5px solid transparent; border-color:#000; margin-right:.25rem;}
        .info-content .stat {font-size:1.1875rem;}
        @media screen and (max-width:1199.98px){
            .info-stat .block:not(:first-child)::after,.info-stat .block:first-child::after  {background:transparent; }
        }
        @media screen and (max-width: 767.98px){
            .info-content .grid:last-child {text-align:left;}
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
                <div class="ss">ก</div><h1 class="color2">ระดานถาม - ตอบ<span class="fw-300 text-xs color-black"> | 01. ข่าวประชาสัมพันธ์</span></h1>
                <p><strong>กรมอนามัย</strong> พร้อมพูดคุยและแลกเปลี่ยนความรู้ข่าวสารที่เป็นประโยชน์สำหรับคุณ</p>
            </div> 
            <div class="grids">

                <div class="grid xl-75 lg-70 md-100 sm-100">
                    <div class="post-container">
                        <div class="post-header bg-color0 color-white">
                            <div class="d-flex ai-center">
                                <div class="ss-icon-title no-margin">
                                    <div class="icon bg-color1"><i class="fas fa-exclamation-triangle"></i></div>
                                    <h2 class="color-white">megaloblastic anemia / <span class="color1">bicytopenia</span> คือโรคอะไร</h2>
                                </div> 
                            </div>    
                            <div class="ss-icon-title mt-0-5 mb-1">
                                <div class="icon bg-color1 op-0"><i class="fas fa-exclamation-triangle"></i></div>
                                <p class="color-white">
                                    อยากทราบว่า megaloblastic anemia และ bicytopenia คือโรคอะไร เป็นอันตรายร้ายแรงหรือไม่ สามารถรักษาให้หายขาดมั้ย และควรมีวิธีปฎิบัติตัวอย่างไร ในการรักษาคนไข้สูงอายุ
                                </p>  
                                <div class="icon bg-color1 op-0"><i class="fas fa-exclamation-triangle"></i></div>
                                <div class="ss-tags no-margin">
                                    <div class="ss-tag bg-color4">#667643</div>
                                    <div class="ss-tag bg-color2">#667643</div>
                                </div>
                            </div>
                            <div class="info-stat">
                                <div class="grids">
                                    <div class="wrapper">
                                        <div class="block">
                                            <div class="wrapper">
                                                <div class="profile" style="background-image:url('./assets/img/banner/01.jpg');"></div>
                                                <div class="person-info">
                                                    <p class="color-white fw-500">โพสต์โดย : anonymous</p>
                                                    <p class="color-white fw-500">IP Address : 180.183.126.169</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="block">
                                            <div class="wrapper">
                                                <div class="delete-btn">
                                                    <a class="color-white" href="#">แจ้งลบกระทู้</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="block">
                                            <div class="wrapper">
                                                <div class="stat">
                                                    <div class="icon bg-color0 color1"><i class="fas fa-clock"></i></div>
                                                    26.03.2563
                                                </div>
                                            </div>
                                        </div>
                                        <div class="block">
                                            <div class="wrapper">
                                                <div class="stat">
                                                    <div class="icon bg-color0 color1"><i class="fas fa-eye"></i></div>
                                                    202
                                                </div>
                                            </div>
                                        </div>
                                        <div class="block">
                                            <div class="wrapper">
                                                <div class="socials">
                                                    Share
                                                    <a class="icon icon-share color4" href="#">
                                                        <i class="fab fa-facebook-f"></i>
                                                    </a>
                                                    <a class="icon icon-share color4" href="#">
                                                        <i class="fab fa-twitter"></i>
                                                    </a>
                                                    <a class="icon icon-share color4" href="#">
                                                        <i class="fab fa-instagram"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="comment-area">
                            <div class="wrapper pb-1 border-bottom">
                                <div class="d-flex ai-center">
                                    <div class="ss-icon-title no-margin">
                                        <div class="icon bg-color4"><i class="fas fa-exclamation-triangle"></i></div>
                                        <h2>ร่วมความคิดเห็นอื่น<span>( กรุณาเข้าสู่ระบบ <i class="fas fa-lock bg-color0 color-white"></i> เพื่อตั้งกระทู้คำถาม หรือ สมัครสมาชิก <i class="fas fa-user bg-color0 color-white"></i> หากท่านยังไม่มีชื่อเข้าใช้งาน)</span></h2>
                                    </div> 
                                </div>
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
                        <div class="other-comments">
                            <div class="other-comment border-bottom pt-1 pb-1">
                                <div class="d-flex ai-center">
                                    <div class="ss-icon-title no-margin">
                                        <div class="icon bg-color2"><i class="fas fa-exclamation-triangle"></i></div>
                                        <h2>32 ความเห็นอื่นๆ</h2>
                                        <div class="people">
                                            <?php for($i=1; $i < 5; $i++){?>
                                            <div class="person person-<?php echo $i; ?>" style="background-image:url('./assets/img/banner/0<?php echo $i; ?>.jpg'); z-index: <?php echo (4-$i); ?>; right: <?php echo (4-$i)*1.375; ?>rem;"></div>
                                            <?php }?>
                                        </div>
                                    </div>
                                </div>
                                <div class="content">
                                    <h2>Megalobalstoc amemia เป็นกลุ่มโรคที่เกิดจากเซลล์ที่ทำหน้าที่สร้างเซลล์</h2>
                                    <p>ในไขกระดูกไม่สามารถสร้าง DNA ได้ตามปกติ แต่ยังคงสร้าง RNA และโปรตีนได้ทำให้เกิดความผิดปกติโดยเซลล์มีขนาดใหญ่ขึ้นและนิวเคลียสมีลักษณะอ่อนในขณะที่ไซโตพลาสซึมเจริญตามปกติ ทำให้เกิดปรากฏการณ์ที่เรียกว่า "nuclear-cytoplasmic asymchronism" นอกจากนี้เซลล์อื่นๆ ที่มีการแบ่งตัวเร็วจะเกิดความผิดปกติ</p>
                                    <div class="info-content mt-1">
                                        <div class="grids">
                                            <div class="grid xl-60 lg-50 md-50 sm-100 mt-0">
                                                <div class="wrapper">
                                                    <div class="profile" style="background-image:url('./assets/img/banner/01.jpg');"></div>
                                                    <div class="person-info">
                                                        <p class="fw-500">โพสต์โดย : anonymous</p>
                                                        <p class="fw-500">IP Address : 180.183.126.169</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="grid xl-40 lg-50 md-50 sm-100 mt-0">
                                                <div class="wrapper">
                                                    <div class="delete-btn">
                                                        <a href="#">ลบความคิดเห็น</a>
                                                    </div>
                                                    <div class="stat">
                                                        <div class="icon bg-color0 color-white"><i class="fas fa-clock"></i></div>
                                                        26.03.2563
                                                    </div>
                                                    <div class="stat">
                                                        <div class="icon bg-color0 color-white"><i class="fas fa-eye"></i></div>
                                                        202
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                       
                                    </div>
                                </div>         
                            </div>
                            <div class="other-comment border-bottom pt-1 pb-1">
                                <div class="content">
                                    <h2>Megalobalstoc amemia เป็นกลุ่มโรคที่เกิดจากเซลล์ที่ทำหน้าที่สร้างเซลล์</h2>
                                    <p>ในไขกระดูกไม่สามารถสร้าง DNA ได้ตามปกติ แต่ยังคงสร้าง RNA และโปรตีนได้ทำให้เกิดความผิดปกติโดยเซลล์มีขนาดใหญ่ขึ้นและนิวเคลียสมีลักษณะอ่อนในขณะที่ไซโตพลาสซึมเจริญตามปกติ ทำให้เกิดปรากฏการณ์ที่เรียกว่า "nuclear-cytoplasmic asymchronism" นอกจากนี้เซลล์อื่นๆ ที่มีการแบ่งตัวเร็วจะเกิดความผิดปกติ</p>
                                    <div class="info-content mt-1">
                                        <div class="grids">
                                            <div class="grid xl-60 lg-50 md-50 sm-100 mt-0">
                                                <div class="wrapper">
                                                    <div class="profile" style="background-image:url('./assets/img/banner/01.jpg');"></div>
                                                    <div class="person-info">
                                                        <p class="fw-500">โพสต์โดย : anonymous</p>
                                                        <p class="fw-500">IP Address : 180.183.126.169</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="grid xl-40 lg-50 md-50 sm-100 mt-0">
                                                <div class="wrapper">
                                                    <div class="delete-btn">
                                                        <a href="#">ลบความคิดเห็น</a>
                                                    </div>
                                                    <div class="stat">
                                                        <div class="icon bg-color0 color-white"><i class="fas fa-clock"></i></div>
                                                        26.03.2563
                                                    </div>
                                                    <div class="stat">
                                                        <div class="icon bg-color0 color-white"><i class="fas fa-eye"></i></div>
                                                        202
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                       
                                    </div>
                                </div>         
                            </div>
                            <div class="other-comment border-bottom pt-1 pb-1">
                                <div class="content">
                                    <h2>Megalobalstoc amemia เป็นกลุ่มโรคที่เกิดจากเซลล์ที่ทำหน้าที่สร้างเซลล์</h2>
                                    <p>ในไขกระดูกไม่สามารถสร้าง DNA ได้ตามปกติ แต่ยังคงสร้าง RNA และโปรตีนได้ทำให้เกิดความผิดปกติโดยเซลล์มีขนาดใหญ่ขึ้นและนิวเคลียสมีลักษณะอ่อนในขณะที่ไซโตพลาสซึมเจริญตามปกติ ทำให้เกิดปรากฏการณ์ที่เรียกว่า "nuclear-cytoplasmic asymchronism" นอกจากนี้เซลล์อื่นๆ ที่มีการแบ่งตัวเร็วจะเกิดความผิดปกติ</p>
                                    <div class="info-content mt-1">
                                        <div class="grids">
                                            <div class="grid xl-60 lg-50 md-50 sm-100 mt-0">
                                                <div class="wrapper">
                                                    <div class="profile" style="background-image:url('./assets/img/banner/01.jpg');"></div>
                                                    <div class="person-info">
                                                        <p class="fw-500">โพสต์โดย : anonymous</p>
                                                        <p class="fw-500">IP Address : 180.183.126.169</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="grid xl-40 lg-50 md-50 sm-100 mt-0">
                                                <div class="wrapper">
                                                    <div class="delete-btn">
                                                        <a href="#">ลบความคิดเห็น</a>
                                                    </div>
                                                    <div class="stat">
                                                        <div class="icon bg-color0 color-white"><i class="fas fa-clock"></i></div>
                                                        26.03.2563
                                                    </div>
                                                    <div class="stat">
                                                        <div class="icon bg-color0 color-white"><i class="fas fa-eye"></i></div>
                                                        202
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                       
                                    </div>
                                </div>         
                            </div>
                            
                        </div>
                        <div class="pagination no-margin">
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
