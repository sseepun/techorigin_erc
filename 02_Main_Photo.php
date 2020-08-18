<!DOCTYPE html>
<html lang="th">
<head>
    <?php include_once('include/header.php'); ?>
    <?php include_once('include/style.php'); ?>
    <style>
        .main-photo { padding: 7.5rem 0;}

        /* Banner 02 */
        .banner-02 { position:relative;}
        .banner-02 .img-container {position:relative; width:100%; height:100%; padding: 50% 0 0 0;}
        .banner-02 .img-container .img-bg{border-radius: 10px; position:absolute; top:0; bottom:0; left:0; right:0; background-position:center; background-size:cover;}
        /* date display */
        .date-display {transform: scale(0.8); transform-origin:bottom left;  position:absolute; bottom:2rem; width:40%; height: 15%; color:#fff; background: linear-gradient(to right, rgba(13, 147, 123, 1), rgba(255, 255, 255, 0)); 
        }
        /* Effect borders */
        .date-display::before {content: ''; position:absolute; border-top: 0.0625rem solid; border-image-source:linear-gradient(to right, rgba(233, 248, 45, 1), rgba(9, 145, 123, 1),  rgba(255, 255, 255, 0)); border-image-slice:1; width:100%; top:-0.125rem;}
        .date-display::after {content: ''; position:absolute; border-top: 0.0625rem solid; border-image-source:linear-gradient(to right, rgba(233, 248, 45, 1), rgba(9, 145, 123, 1),  rgba(255, 255, 255, 0)); border-image-slice:1; width:100%; bottom:-0.125rem;}
        .date-display .wrapper::before {content: ''; position:absolute; border-top: 0.0625rem solid; border-image-source:linear-gradient(to right, rgba(9, 145, 123, 1), rgba(255, 255, 255, 0)); border-image-slice:1; width:100%; top:-0.0625rem;}
        .date-display .wrapper::after {content: ''; position:absolute; border-top: 0.0625rem solid; border-image-source:linear-gradient(to right, rgba(9, 145, 123, 1), rgba(255, 255, 255, 0)); border-image-slice:1; width:100%; bottom:-0.0625rem;}
        .date-display .wrapper {position:relative; width:100%; height:100%; display:flex; flex-wrap:wrap;}
        .date-display .day-container{width: 20%; height: inherit;}
        .date-display .day-container .day {font-size:400%; height:inherit; display:flex; align-items:center; justify-content:flex-end;}
        .date-display .month-year-container {width:80%; position:relative; padding-left:0.5rem;}
        .date-display .month-year-container .month { width:100%; font-size:150%; position:absolute; top:calc(50% - 1.4rem);}
        .date-display .month-year-container .year { width:100%; font-size:150%; position:absolute; top: calc(50% - 0.3rem);}
        /* date responsive */
        @media screen and (max-width: 991.98px) and (min-width: 768px) {
            .date-display .day-container .day {font-size:200%;}
            .date-display .month-year-container .month, .date-display .month-year-container .year   {font-size:100%; }
            .date-display .month-year-container .month  {top:calc(50% - 0.9rem);}
        }
        @media screen and (max-width: 767.98px){
            .date-display .day-container .day {font-size:150%;}
            .date-display .month-year-container .month, .date-display .month-year-container .year  {font-size:80%;}
            .date-display .month-year-container .month {top: calc(50% - 0.8rem);}
            .date-display .month-year-container .year {top: calc(50% - 0.2rem);}
        }
        @media screen and (max-width: 576px) {
            .date-display {width:25%;}
        }

        /* Content 02 */
        .content-02 {overflow:hidden;}
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
        .content-02 .grids .grid .img-container .socials > a {background-color:#fffffd;pointer-events:none; display:flex; justify-content:center; align-items:center; text-decoration: none; color: #5b5966; opacity:0; height:2.125rem; width:2.125rem; font-size:100%; margin:0 .25rem; border-radius:50%; transition: transform ease .5s, opacity ease .5s;}
        .content-02 .grids .grid .img-container .socials > a:nth-child(2n+1) {transform: translateY(-.75rem);}
        .content-02 .grids .grid .img-container .socials > a:nth-child(2n) {transform: translateY(.75rem);}
        .content-02 .grids .grid .img-container:hover .socials > a:nth-child(2n+1), .content-02 .grids .grid .img-container:hover .socials > a:nth-child(2n) {
            opacity: 1; transform: translateY(0); pointer-events:auto;
        }
        .content-02 .grids .grid .text-container > p {margin: 0;}

    </style>
</head>
<body>
    <?php include_once('include/topnav.php'); ?> 

    <section class="main-photo">
        <div class="container">
            <div class="grids">
                <div class="grid lg-75 md-100 sm-100">
                    <!-- Special Header -->
                    <div class="ss-header">
                        <div class="ss">ค</div><h1>ลังภาพ</h1>
                        <p><strong>กรมอนามัย</strong> อัพเดท รวบรวม ภาพกิจกรรมหรือข้อมูลเพื่อประชาชน</p>
                    </div>
                    <!-- Banner 02 -->
                    <div class="banner-02">
                                <div class="img-container">
                                    <div class="img-bg" style="background-image:url('./assets/img/default/banner-01.jpg');">
                                    </div>
                                </div>
                                <div class="date-display">
                                    <div class="wrapper">
                                        <div class="day-container">
                                            <div class="day">28</div>
                                        </div>
                                        <div class="month-year-container">
                                            <div class="month">กรกฎาคม</div>
                                            <div class="year">2563</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    <!-- Content 02 -->
                    <div class="content-02">
                        <div class="grids">
                            <?php for($i = 1; $i<13;$i++){?>
                                <div class="grid md-25 card">
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
                                        <div class="ss-tags">
                                            <div class="ss-tag type-<?php echo $i % 11 + 1; ?>"></div>
                                        </div>
                                        <div class="ss-date">02.04.2563</div>
                                        <a href="#" class="ss-h5">
                                            กรมอนามัย แนะ สปาสัตว์ สถานรับฝากเลี้ยง ปฏิบัติตามข้อแนะนำ ป้องกันโควิด-19
                                        </a>
                                    </div>
                                </div>
                            <?php }?> 
                        </div>
                    </div>

                    <!-- Pagination -->
                    <div class="pagination border-top border-bottom">
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
                                หน้าข่าวทั้งหมด
                            </a>
                        </div>
                    </div>
                </div>
                <div class="grid sm-100 md-100 lg-25" data-aos="fade-up" data-aos-delay="600">
                    <!-- Slots -->
                    <div class="slots bg-color4">
                        <div class="slot bg-color0">
                            <div class="ss-header color-white-info">
                                <div class="ss">วี</div><h1 class="fw-300">ดิโอ</h1>
                                <p>& สื่อมัลติมีเดีย</p>
                            </div>
                            <div class="ss-video bradius-0">
                                <div class="img-bg" style="background-image:url('./assets/img/default/banner-01.jpg');"></div>
                                <div class="play-container">
                                    <a class="play-icon" href="https://www.youtube.com/watch?v=4NRXx6U8ABQ" data-fancybox>
                                        <i class="fas fa-play"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="ss-tags">
                                <div class="ss-tag type-3"></div>
                                <div class="ss-tag type-4"></div>
                            </div>
                            <div class="ss-date color-white">02.04.2563</div>
                            <a class="ss-h3 color-white" href="#">
                                การปฏิบัติด้านสุขอนามัยในห้างสรรพสินค้าและศูนย์การค้า
                            </a>
                            <p class="color-white">
                                ห้างสรรพสินค้าและศูนย์การค้าเป็นแหล่งนัดพบที่มีคนมาใช้บริการมากมาย...
                            </p>
                            <div class="btns">
                                <a class="btn btn-action btn-secondary next-icon" href="#">
                                    ดูวิดีโอทั้งหมด
                                </a>
                            </div>
                        </div>
                        <div class="slot bg-color4">
                            <div class="ss-header color-white">
                                <div class="ss">อั</div><h1 class="fw-300">ลบั้มภาพ</h1>
                                <p>พร้อมอัพเดท</p>
                            </div>
                            <p class="color-white no-margin">สาระสุขภาพทันสมัยให้คุณเข้าใจง่าย</p>
                            <h2 class="color1 no-margin">ไม่ตกเทรนด์!</h2>
                            <div class="btns">
                                <a class="btn btn-action btn-primary next-icon" href="#">
                                    อัลบั้มภาพทั้งหมด
                                </a>
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