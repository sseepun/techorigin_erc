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
            [ 'name' => 'คลังภาพ', 'url' => '#' ]
        ];
        include_once('component/breadcrumb.php');
    ?>

    <section class="section-padding">
        <div class="container">
            <div class="ss-header">
                <div class="ss">ค</div><h1 class="color2">ลังภาพ</h1>
                <p><strong>กรมอนามัย</strong> อัพเดท รวบรวม ภาพกิจกรรมหรือข้อมูลเพื่อประชาชน</p>
            </div>
            <div class="grids">

                <div class="grid lg-75 md-100 sm-100">
                    <?php include_once('component/list-header.php'); ?>

                    <a class="ss-img" href="#">
                        <div class="img-bg lazy-bg" data-src="./assets/img/banner/01.jpg"></div>
                        <div class="tag">
                            <div class="date">28</div>
                            <div class="text-container">
                                <div class="month">กรกฎาคม</div>
                                <div class="year">2563</div>
                            </div>
                        </div>
                    </a>

                    <?php for($i=0; $i<10; $i++){?>
                        <div class="ss-card pt-1-5 pb-1-5 border-bottom">
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
                                            <li><a class="social social-ig" href="#">
                                                <i class="fab fa-instagram"></i>
                                            </a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="block">
                                <div class="ss-tags">
                                    <div class="ss-tag type-10"></div>
                                </div>
                                <div class="ss-date">02.04.2563</div>
                                <a class="ss-h4" href="#">
                                    กรมอนามัย แนะ 10 วิธีกินแบบพอเพียงช่วงโควิด 19
                                    สร้างร่างกายแข็งแรง ไร้พุง
                                </a>
                                <div class="btns">
                                    <a class="btn btn-action btn-primary btn-sm next-icon" href="#">
                                        รายละเอียด
                                    </a>
                                </div>
                            </div>
                        </div>
                    <?php }?>

                    <?php include_once('component/list-footer.php'); ?>
                </div>

                <div class="grid lg-25 sm-100 md-100" data-aos="fade-up" data-aos-delay="600">
                    <div class="slots bg-color4">
                        <div class="slot">
                            
                            <h2 class="header-text quote-text quote-inline">
                                คนไทย <br>
                                <span class="text-xl fw-400 color1">ร่วมใจสู้ภัย</span> <br>
                                <span class="text-xl">โควิด-19</span>
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