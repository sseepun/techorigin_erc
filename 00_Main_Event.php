<!DOCTYPE html>
<html lang="th">
<head>
    <?php include_once('include/header.php'); ?>
    <?php include_once('include/style.php'); ?>
<style>
/* Banner Event */
.banner-event{width:100%; padding-bottom:3rem;}
.banner-event > .slide-container{
    width:100%; background-image:linear-gradient(to right, rgba(255,161,28,.65), rgba(226,61,81,.65));
}
.banner-event .slides{
    width:calc(100vw + 980px); display:flex; overflow:hidden; transition:transform .4s;
    transform:translateX(calc((2 - var(--month)) * 140px));
}
.banner-event .slide{position:relative; width:140px; cursor:pointer; transition:width .4s;}
.banner-event .slide.active{width:calc(100vw - 560px);}
.banner-event .slide > .wrapper{position:relative; width:100%; height:300px;}
.banner-event .slide .img-bg{
    position:absolute; top:0; bottom:0; left:0; right:0; background-size:cover;
    background-position:center; background-repeat:no-repeat; cursor:pointer;
    -webkit-filter:grayscale(100%); transition:all .4s;
}
.banner-event .slide.active .img-bg{-webkit-filter:grayscale(0%);}
.banner-event .slide .filter{
    position:absolute; top:0; bottom:0; left:0; right:0; opacity:.65; transition:opacity .4s;
}
.banner-event .slide.active .filter{opacity:0;}
.banner-event .slide .text-wrapper{
    position:absolute; bottom:1.5rem; left:1rem; right:1rem; transition:opacity .4s;
}
.banner-event .slide.active .text-wrapper{opacity:0;}
.banner-event .slide .text-wrapper > *{line-height:1; margin:0;}
.banner-event .slide:nth-child(5n+1) .filter{background:#ffa11c;}
.banner-event .slide:nth-child(5n+2) .filter{background:#e23d51;}
.banner-event .slide:nth-child(5n+3) .filter{background:#1d684a;}
.banner-event .slide:nth-child(5n+4) .filter{background:#148790;}
.banner-event .slide:nth-child(5n) .filter{background:#abcb0c;}
.banner-event .calendar-container{
    width:100%; max-width:300px; margin:0 auto; transform:translateY(-5.375rem);
}
@media screen and (max-width:1299.98px){
    .banner-event .slides{
        width:calc(100vw + 1260px); transform:translateX(calc((1 - var(--month)) * 140px));
    }
    .banner-event .slide.active{width:calc(100vw - 280px);}
    .banner-event .slide > .wrapper{height:320px;}
}
@media screen and (max-width:1199.98px){
    .banner-event .slide > .wrapper{height:260px;}
}
@media screen and (max-width:991.98px){
    .banner-event{padding-bottom:2rem;}
    .banner-event .slides{width:1200vw; transform:translateX(calc((0 - var(--month)) * 100vw));}
    .banner-event .slide, .banner-event .slide.active{width:100vw;}
    .banner-event .slide > .wrapper{height:30.5vw;}
    .banner-event .calendar-container{max-width:340px; margin-top:1rem; transform:none;}
}
</style>
</head>
<body>
    <?php include_once('include/topnav.php'); ?>
    <?php
        $breadcrumb = [
            [ 'name' => 'หน้าแรก', 'url' => './' ],
            [ 'name' => 'ข่าวสาร', 'url' => '#' ],
            [ 'name' => 'ปฏิทินกิจกรรม', 'url' => '#' ]
        ];
        include_once('component/breadcrumb.php');
    ?>

    <div class="section-padding section-bg lazy-bg" data-src="./assets/img/bg/11.jpg">
        <div class="container">
            <div class="ss-header color-white">
                <div class="ss">ป</div><h1>ฏิทินกิจกรรม</h1>
                <p>
                    กรมอนามัย มีกิจกรรมเพื่อสุขภาพให้คุณได้ติดตามข่าวสารได้ทุกๆเดือน
                    ไม่ตกเทรนด์แน่นอน
                </p>
            </div>
        </div>   
    </div>

    <!-- Banner Event -->
    <div class="banner-event">
        <div class="slide-container">
            <div class="slides" style="--month:8;">
                <?php
                    foreach(
                        ['มกราคม', 'กุมภาพันธ์', 'มีนาคม', 'เมษายน', 'พฤษภาคม', 'มิถุนายน', 'กรกฎาคม', 
                        'สิงหาคม', 'กันยายน', 'ตุลาคม', 'พฤศจิกายน', 'ธันวาคม'] as $i=>$m){
                ?>
                    <div class="slide <?php if($i==8)echo 'active'; ?>" data-month="<?php echo $i; ?>">
                        <div class="wrapper">
                            <div class="img-bg" style="background-image:url('./assets/img/month/month_<?php echo sprintf('%02d', $i+1); ?>.jpg');"></div>
                            <div class="filter"></div>
                            <div class="text-wrapper text-center">
                                <h2 class="color-white">
                                    <span class="text-xl"><?php echo sprintf('%02d', $i+1); ?></span>
                                </h2>
                                <h4 class="color-white"><?php echo $m; ?></h4>
                            </div>
                        </div>
                    </div>
                <?php }?>
            </div>
        </div>
        <div class="container">
            <div class="grids">

                <div class="grid xl-10 lg-10 md-0 sm-0 xs-0"></div>
                <div class="grid xl-30 lg-30 sm-100">
                    <div class="calendar-container shadow-box pb-1">
                        <div class="calendar-wrapper"></div>
                    </div>
                </div>

                <div class="grid xl-50 lg-60 sm-100">
                    <div class="grids">
                        <?php for($i=0; $i<5; $i++){?>
                            <div class="grid lg-100 md-50 sm-50 mt-0">
                                <div class="ss-card pt-1-5 pb-1-5">
                                    <div class="block">
                                        <div class="ss-img square">
                                            <div class="img-bg lazy-bg" data-src="./assets/img/content/01.jpg"></div>
                                            <div class="socials">
                                                <ul>
                                                    <li><a class="social social-fw" href="#">
                                                        <i class="fab fa-facebook-f"></i>
                                                    </a></li>
                                                    <li><a class="social social-tw" href="#">
                                                        <i class="fab fa-twitter"></i>
                                                    </a></li>
                                                    <li><a class="social social-ln" href="#">
                                                        <i class="fab fa-line"></i>
                                                    </a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="block">
                                        <div class="ss-tags">
                                            <div class="ss-tag type-9"></div>
                                            <div class="ss-tag type-10"></div>
                                        </div>
                                        <a class="ss-h3" href="#">
                                            การประชุมวิชาการนมแม่แห่งชาติครั้งที่ 7 เนื่องจากปัญหา 
                                            <span class="fw-400 color4">COVID-19</span> 
                                            ที่เกิดขึ้น ส่งผลให้การ ประชุมในปีน
                                        </a>
                                        <div class="btn btn-icon text-left pt-0-5">
                                            <i class="fas fa-clock"></i>
                                            <span class="text-sm">
                                                18-20 กรกฎาคม 2563 | 11:00 - 19:00 น.
                                            </span>
                                        </div>
                                        <div class="btn btn-icon text-left pt-0-5">
                                            <i class="fas fa-map-marker-alt"></i>
                                            <span class="text-sm">
                                                ศูนย์นิทรรศการและการประชุมไบเทค
                                            </span>
                                        </div>
                                        <p class="mt-1-5">
                                            ปรับเป็นลักษณะของ <span class="fw-400 color4">Live streaming</span> 
                                            โดยทางผู้จัด ยังคงเนื้อหาการประชุม8;k,d
                                        </p>
                                        <div class="btns">
                                            <a class="btn btn-action btn-primary btn-sm next-icon" href="#">
                                                รายละเอียด
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php }?>
                    </div>
                </div>
                <div class="grid xl-10 lg-0 md-0 sm-0 xs-0"></div>

            </div>
        </div>
    </div>

    <?php include_once('include/footer.php'); ?>
    <?php include_once('include/script.php'); ?>
</body>
</html>