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
        .banner-02 .container {width: inherit; position:relative;}
        .banner-02 .img-container {position:relative; width:100%; height:100%; padding: 50% 0 0 0;}
        .banner-02 .img-container .img-bg{border-radius: 10px; position:absolute; top:0; bottom:0; left:0; right:0; background-position:center; background-size:cover;}
        .banner-02 .date{background-color: #1e6b65; border-radius:50%;position:absolute;top:10%;
            /* left: -2.8125rem; */
            left: -3.125vw;
            /* height:5.625rem; */
            /* width:5.625rem;  */
            height:6.25vw;
            width: 6.25vw;
            -webkit-box-shadow: 0.3125rem 0.3125rem 1.1875rem 0rem rgba(156, 156, 156, 1);
            -moz-box-shadow: 0.3125rem 0.3125rem 1.1875rem 0rem rgba(156, 156, 156, 1);
            box-shadow: 0.3125rem 0.3125rem 1.1875rem 0rem rgba(156, 156, 156, 1);}
        .banner-02 .date .inset{
            -webkit-box-shadow:inset 0.3125rem 0.3125rem 1.1875rem 0rem rgba(11, 61, 55, 1);
            -moz-box-shadow: inset 0.3125rem 0.3125rem 1.1875rem 0rem rgba(11, 61, 55, 1);
            box-shadow: inset 0.3125rem 0.3125rem 1.1875rem 0rem rgba(11,61, 55, 1);
            position:absolute; width:100%; height:100%; border-radius:50%; 
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
        .banner-top .img-container img {position:absolute; z-index:1; left:-3rem; top:-3rem; height:65%;}
        .banner-top .img-container .img-bg{position:absolute; top:0; left:0; right:0; bottom:0; background-position:top center; background-size:cover; background-image:url('./assets/img/default/banner-02.jpg');}
        .banner-bottom{height:50%; background: linear-gradient(to bottom, rgba(255, 255, 255, 0), rgba(6, 91, 128, 1),rgba(6, 91, 128, 1), rgba(255, 255, 255, 0));}

    </style>
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
                <section class="grid lg-25">
                    <div class="banner-top">
                        <div class="img-container">
                            <img src="./assets/img/default/kid.png" alt="kid">
                            <div class="img-bg"></div>
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

</body>