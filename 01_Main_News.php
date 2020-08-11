<!DOCTYPE html>
<html lang="en">
<head>
    <?php include_once('include/header.php'); ?>
    <?php include_once('include/style.php'); ?>
</head>
<body>
    <?php include_once('include/topnav.php'); ?> 
    
    <style>
        .main-news-01 .container .right-banner {min-height:100vh;}
        
        /* Banner 02 */
        .banner-02 .container {width: inherit; position:relative;}
        .banner-02 .img-container {position:relative; width:100%; height:100%; padding: 50% 0 0 0;}
        .banner-02 .img-container .img-bg{border-radius: 10px; position:absolute; top:0; bottom:0; left:0; right:0; background-position:center; background-size:cover;}
        .banner-02 .date{background-color: #1e6b65; border-radius:50%;position:absolute;top:10%;
            left: -2.8125rem;
            height:5.625rem;
            width:5.625rem; 
            -webkit-box-shadow: 0.3125rem 0.3125rem 1.1875rem 0rem rgba(156, 156, 156, 1);
            -moz-box-shadow: 0.3125rem 0.3125rem 1.1875rem 0rem rgba(156, 156, 156, 1);
            box-shadow: 0.3125rem 0.3125rem 1.1875rem 0rem rgba(156, 156, 156, 1);}
        .banner-02 .date .inset{
            -webkit-box-shadow:inset 0.3125rem 0.3125rem 1.1875rem 0rem rgba(11, 61, 55, 1);
            -moz-box-shadow: inset 0.3125rem 0.3125rem 1.1875rem 0rem rgba(11, 61, 55, 1);
            box-shadow: inset 0.3125rem 0.3125rem 1.1875rem 0rem rgba(11,61, 55, 1);
            position:absolute; width:100%; height:100%; border-radius:50%; 
        }
        .banner-02 .date .date-display {position:absolute; color:#fff; text-align:center; top: 5%; left:25%;}
        .banner-02 .date .date-display .separator {width: 100%; height: 0.03125rem; background: linear-gradient(to right, rgba(255, 255, 255, 0),rgba(255, 255,255, 0.7),rgba(255, 255,255, 0.7), rgba(255, 255,255, 0.7), rgba(255, 255,255, 0.7),rgba(255, 255,255, 0.7),rgba(255, 255, 255, 0));}
        .banner-02 .date .date-display .day {font-size: 200%; font-weight: bold;}
        .banner-02 .date .date-display .month {padding-top: 0.25rem;}
        .banner-02 .date .date-display .year {font-weight:bold;}
        /* date responsive */
        @media screen and (min-width: 1200px) {
            .banner-02 .date {transform: scale(1);}
        }
        @media screen and (max-width: 1199.98px) and (min-width: 768px) {
            .banner-02 .date {transform: scale(0.75);}
        }
        @media screen and (max-width: 767.98px){
            .banner-02 .date {transform: scale(0.6);}
        }
        /* Content 02 */
        .content-02 {overflow:hidden;}
        .content-02 .container {width:inherit;}
        .content-02 .text-container{width:100%; height:auto;}
        .content-02 .text-container h2, .content-02 .text-container p{margin:0;}
        .content-02 .text-container h2 {font-weight:normal; font-size:160%;}
        .content-02 .contents {display:flex; flex-wrap:wrap; width:100%; height: auto; justify-content:space-between;}
        .content-02 .grids .grid .img-container {position:relative; width:100%; padding:80% 0 0 0;}
        .content-02 .grids .grid .img-container .img-bg {border-radius:10px; position:absolute; top:0; left:0; right:0; bottom:0;background-position:center; background-size:cover;}
        .content-02 .grids .grid .img-container .img-bg::before{
            content: ''; position:absolute; background: #97a246; opacity:0; transition: opacity .5s; border-radius:10px; width:100%; height:100%;
        }
        .content-02 .grids .grid .img-container:hover .img-bg::before{opacity:1;}
        .content-02 .grids .grid .img-container .socials {display:flex; flex-wrap:wrap; justify-content:center; align-items:center; z-index:2; position:absolute; top:0; bottom:0;left:0; right:0; padding:0;}
        .content-02 .grids .grid .img-container .socials > a {background-color:#fffffd;pointer-events:none; display:flex; justify-content:center; align-items:center; text-decoration: none; color: #5b5966; opacity:0; padding: .5vw; font-size:1vw; margin:0 .25rem; border-radius:50%; transition: transform ease .5s, opacity ease .5s;}
        .content-02 .grids .grid .img-container .socials > a:nth-child(2n+1) {transform: translateY(-.75rem);}
        .content-02 .grids .grid .img-container .socials > a:nth-child(2n) {transform: translateY(.75rem);}
        .content-02 .grids .grid .img-container:hover .socials > a:nth-child(2n+1), .content-02 .grids .grid .img-container:hover .socials > a:nth-child(2n) {
            opacity: 1; transform: translateY(0); pointer-events:auto;
        }
        .content-02 .grids .grid .tag, .content-02 .text-container .tag {padding:0.125rem 0.5rem; font-size:80%;border-radius: 5px; display:inline-block; text-align:center; color:#fff; margin-top:0.625rem;}
        .content-02 .grids .grid .date {font-size: 90%;}
        .content-02 .grids .grid .text-container > p {margin: 0;}

        /* Right banner */
        .banner-top{height:50%; }
        .banner-top .img-container {height:100%; position:relative; overflow:visible;} 
        /* light green filter */
        .banner-top .img-container .filter {position:absolute; width:100%; top:40%; height:100%; background:linear-gradient(to bottom, rgba(255, 255, 255, 0), rgba(133, 185, 147, 1), rgba(133, 185, 147, 1), rgba(133, 185, 147, 1));}
        .banner-top .img-container img {position:absolute; z-index:1; left:-3rem; top:-3rem; height:65%;}
        .banner-top .img-container .img-bg{position:absolute; top:0; left:0; right:0; bottom:0; background-position:top center; background-size:cover; background-image:url('./assets/img/default/banner-02.jpg');}
        .banner-top .img-container > .grids {position:absolute; bottom: 0; opacity:0;  transition: all ease .5s; z-index:2;}
        .banner-top .img-container:hover > .grids {opacity:1; }
        .banner-top .img-container > .grids .grid > .grids {padding: 0.25rem 0.5rem;}
        .banner-top .img-container > .grids .grid > .grids:first-child {background: #659e75; transition: transform .5s; transform:translateY(10px);}
        .banner-top .img-container > .grids .grid > .grids:nth-child(2) {background: #537d55;transition: transform .5s; transform:translateY(20px);}
        .banner-top .img-container > .grids .grid > .grids:last-child {background: #535d38;transition: transform .5s; transform:translateY(30px);}
        .banner-top .img-container:hover > .grids .grid > .grids:first-child,  .banner-top .img-container:hover > .grids .grid > .grids:nth-child(2), .banner-top .img-container:hover > .grids .grid > .grids:last-child{transform: translateY(0);}
        .banner-top .img-container .grids .icon-wrapper {position:relative; width:100%; height:100%;}
        .banner-top .img-container .grids .icon-wrapper .icon {position:absolute; top:0; bottom:0; left:0; right:0; background-position:center; background-size:cover;}
        .banner-top .img-container > .grids .grid > .grids .grid .info {color:#fff;}
        .banner-top .img-container > .grids .grid > .grids .grid .info .order, .banner-top .img-container > .grids .grid > .grids .grid .info .category{font-size:100%;}
        .banner-top .img-container > .grids .grid > .grids .grid .info .title {font-size:120%;}
        .banner-bottom{position:relative; height:50%; background: linear-gradient(to bottom, rgba(44, 133, 79, 1), rgba(32, 111, 66, 1), rgba(36, 82, 69, 1),  rgba(36, 82, 69, 1), rgba(255, 255, 255, 0));}
        .banner-bottom .text-container {position:absolute; top:calc(50% - 5.625rem); text-align:center; display:flex; flex-wrap:wrap;}
        .banner-bottom .text-container::before{
            content: '\201C'; color:var(--color2); position:absolute; font-family:sans-serif; font-size:300%; top: calc(0% - 2rem); left: calc(50% - .5rem);
        }
        .banner-bottom .text-container::after{
            content: '\201D'; color:var(--color2); position:absolute; font-family:sans-serif; font-size:300%; bottom: calc(0% - 4rem); right: calc(50% - .5rem);
        }
        .banner-bottom .text-container > span {width:100%; color:#fff;}
        .banner-bottom .text-container > span:first-child, .banner-bottom .text-container > span:last-child {font-size: 250%;}
        .banner-bottom .text-container > span:nth-child(2) {font-size:180%;}
        .banner-bottom .text-container > span:nth-child(3) {font-size:300%; color:#b2c43a;}
    </style>
    <div style="padding-top:120px;"></div>
    <section class="main-news-01">
        <div class="container">
            <div class="grids">
                <section class="grid lg-75">
                    <!-- Banner 02 -->
                    <section class="banner-02">
                        <div class="container">
                            <div class="img-container">
                                <div class="img-bg" style="background-image:url('./assets/img/default/banner-01.jpg');">
                                </div>
                            </div>
                            <div class="date">
                                <div class="inset"></div>
                                <div class="date-display">
                                    <div class="day">8</div>
                                    <div class="separator"></div>
                                    <div class="month">กรกฎาคม</div>
                                    <div class="year">2563</div>
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
                            <div class="grids">
                                <?php for($i = 1; $i<13;$i++){?>
                                    <div class="grid lg-25">
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
                                            <div class="tag" style="background-color:#2c9f76;">
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
                <!-- Right banner -->
                <section class="grid lg-25 right-banner">
                    <div class="banner-top">
                        <div class="img-container">
                            <img src="./assets/img/default/kid.png" alt="kid">
                            <div class="img-bg"></div>
                            <div class="grids">
                                <div class="grid all-100">
                                    <div class="grids">
                                        <div class="grid all-20 mt-0">
                                            <div class="icon-wrapper">
                                                <div class="icon" style="background-image:url('./assets/img/default/icon-01.jpg');"></div>
                                            </div>
                                        </div>
                                        <div class="grid all-80 mt-0">
                                            <div class="info">
                                                <div class="order">01.</div>
                                                <div class="title">ข่าวจากหน่วยงานส่วนกลาง</div>
                                                <div class="category">กรมอนามัย</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="grids">
                                        <div class="grid all-20 mt-0">
                                            <div class="icon-wrapper">
                                                <div class="icon" style="background-image:url('./assets/img/default/icon-01.jpg');"></div>
                                            </div>
                                        </div>
                                        <div class="grid all-80 mt-0">
                                            <div class="info">
                                                <div class="order">01.</div>
                                                <div class="title">ข่าวจากหน่วยงานส่วนกลาง</div>
                                                <div class="category">กรมอนามัย</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="grids">
                                        <div class="grid all-20 mt-0">
                                            <div class="icon-wrapper">
                                                <div class="icon" style="background-image:url('./assets/img/default/icon-01.jpg');"></div>
                                            </div>
                                        </div>
                                        <div class="grid all-80 mt-0">
                                            <div class="info">
                                                <div class="order">01.</div>
                                                <div class="title">ข่าวจากหน่วยงานส่วนกลาง</div>
                                                <div class="category">กรมอนามัย</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="filter"></div>
                        </div>
                    </div>
                    <div class="banner-bottom">
                        <div class="text-container">
                            <span>กรมอนามัย</span>
                            <span>เรามีสาระสุขภาพดีๆ</span>
                            <span>ส่งตรงถึงคุณ</span>
                            <span>ทุกวัน</span>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </section>
 
    <?php include_once('include/script.php'); ?>
</body>
</html>
