<!DOCTYPE html>
<html lang="en">
<head>
    <?php include_once('include/header.php'); ?>
    <?php include_once('include/style.php'); ?>
</head>
<body>
    <?php include_once('include/topnav.php'); ?> 
    
    <style>
        .main-news-01 .container > .wrapper {display:flex; flex-wrap:wrap; justify-content: space-between; }
        .main-news-01 .left-side {width:calc(60% - 1rem); position:relative;}
        .main-news-01 .right-side {width:calc(50% - 1rem);}
        /* Banner 02 */


        /* Content 02 */
        .content-02 {overflow:hidden;}
        .content-02 .container {width:inherit;}
        .content-02 .text-container{width:100%; height:auto;}
        .content-02 .text-container h2, .content-02 .text-container p{margin:0;}
        .content-02 .text-container h2 {font-weight:normal; font-size:160%;}
        .content-02 .contents {display:flex; flex-wrap:wrap; width:100%; height: auto; justify-content:space-between;}
        .content-02 .contents .content{width:calc(25% - 0.703125rem); padding-top:1rem;}
        .content-02 .contents .content .img-container {position:relative; width:100%; padding:80% 0 0 0;}
        .content-02 .contents .content .img-container .img-bg {border-radius:10px; position:absolute; top:0; left:0; right:0; bottom:0;background-position:center; background-size:cover;}
        .content-02 .contents .content .img-container .img-bg::before, .content-02 .contents .content .img-container .img-bg::after {
            content: ''; position:absolute; width:0; height:0; background: var(--main-news-01-img-hover); opacity:.7; transition: width ease .5s, height ease .5s; border-radius:10px;
        }
        .content-02 .contents .content .img-container .img-bg::before {top:0;left:0;}
        .content-02 .contents .content .img-container .img-bg::after {right:0;bottom:0;}
        .content-02 .contents .content .img-container:hover .img-bg::before, .content-02 .contents .content .img-container:hover .img-bg::after {width:100%; height:100%;}
        .content-02 .contents .content .img-container .socials {display:flex; flex-wrap:wrap; justify-content:center; align-items:center; z-index:2; position:absolute; top:0; bottom:0;left:0; right:0; padding:0;}
        .content-02 .contents .content .img-container .socials > a {background-color:#fffffd;pointer-events:none; display:flex; justify-content:center; align-items:center; text-decoration: none; color: #5b5966; opacity:0; padding: .5rem; min-width:2rem; font-size:100%; margin:0 .25rem; border-radius:50%; transition: transform ease .5s, opacity ease .5s;}
        .content-02 .contents .content .img-container .socials > a:nth-child(2n+1) {transform: translateY(-.75rem);}
        .content-02 .contents .content .img-container .socials > a:nth-child(2n) {transform: translateY(.75rem);}
        .content-02 .contents .content .img-container:hover .socials > a:nth-child(2n+1), .content-02 .contents .content .img-container:hover .socials > a:nth-child(2n) {
            opacity: 1; transform: translateY(0); pointer-events:auto;
        }
        .content-02 .contents .content .tag, .content-02 .text-container .tag {padding:0.125rem 0.5rem; font-size:80%;border-radius: 5px; display:inline-block; text-align:center; color:#fff; margin-top:0.625rem;}
        .content-02 .contents .content .date {font-size: 90%;}
        .content-02 .contents .content .text-container > p {margin: 0;}
    </style>
    <section class="main-news-01">
        <div class="container">
            <div class="wrapper">
                <section class="left-side">
                    <!-- Banner 02 -->
                    <section class="banner-02">
                        <div class="container">
                            <div class="header-container">
                                <!-- ข่าวประชาสัมพันธ์ -->
                            </div>
                            <div class="nav-tools">
                                <div class="search-box"></div>
                                <div class="order"></div>
                            </div>
                            <div class="img-container">
                                <div class="img-bg">

                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- Content 02 -->
                    <section class="content-02">
                        <div class="container">
                            <div class="text-container">
                                <div class="tag" style="background-color: #cfa143;">โภชนาการ</div>
                                <h2>การจัดการด้านอาหารและโภชนาการช่วง 14 วันที่ต้องอยู่บ้าน</h2>
                                <p>
                                    สถานการณ์โรคติดเชื้อไวรัสโคโรนา 2019 หรือ COVID-19 ระบาด ประชาชนควรอยู่ที่บ้าน 14 วัน เพื่อเฝ้าระวังอาการ
                                    นอกจากจะไม่ใช้ของส่วนตัวร่วมกับผู้อื่นแล้ว ต้องเลือกปรุงและกินอาหารให้เหมาะสม ถูกหลักโภชนาการ โดยกินอาหารที่มีประโยชน์หลากหลาย
                                </p>
                            </div>  
                            <div class="contents">
                                <?php for($i = 1; $i<13;$i++){?>
                                    <div class="content">
                                        <div class="wrapper">
                                            <div class="img-container">
                                                <div class="img-bg" style="background-image:url('./assets/img/default/blog-01.jpg');"></div>
                                                <div class="socials">
                                                    <a href="#">
                                                        <i class="fab fa-facebook-f"></i>
                                                    </a>
                                                    <a href="#">
                                                        <i class="fab fa-twitter"></i>
                                                    </a>
                                                    <a href="#">
                                                        <i class="fab fa-instagram"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="tag" style="background-color:var(--main-news-01-color-<?php echo sprintf("%02d", $i); ?>);">
                                                อนามัยสิ่งแวดล้อม
                                            </div>
                                            <div class="date">02.04.2563</div>
                                            <div class="text-container">
                                                <p>กรมอนามัย แนะ สปาสัตว์ สถานรับฝากเลี้ยง ปฏิบัติตามข้อแนะนำ ป้องกันโควิด-19</p>
                                            </div>
                                        </div>
                                    </div>
                                <?php }?> 
                            </div>
                        </div>
                    </section>
                </section>
                <section class="right-side"></section>
            </div>
        </div>
    </section>

</body>