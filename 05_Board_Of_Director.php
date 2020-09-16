<!DOCTYPE html>
<html lang="th">
<head>
    <?php include_once('include/header.php'); ?>
    <?php include_once('include/style.php'); ?>
</head>
<body>
    <?php $topnavActive = 'About'; include_once('include/topnav.php'); ?>
    <?php
        $breadcrumb = [
            [ 'name' => 'หน้าแรก', 'url' => './' ],
            [ 'name' => 'รู้จักกรมอนามัย', 'url' => '#' ],
            [ 'name' => 'ผู้บริหารกรมอนามัย', 'url' => '#' ]
        ];
        include_once('component/breadcrumb.php');
    ?>

    <section class="about-01 lazy-bg" data-src="./assets/img/bg/48.jpg">
        <div class="container">
            <div class="ss-header" data-aos="fade-up" data-aos-delay="0">
                <div class="ss">ผู้</div><h1>บริหารกรมอนามัย</h1>
                <p>กรมอนามัย พร้อมให้ข้อมูลข่าวสารที่เป็นประโยชน์สำหรับทุกคน</p>
            </div>
            <div class="team-selectors">
                <?php for($i=1; $i<6; $i++){?>
                    <div class="team-selector <?php if($i==1)echo 'root'; ?>" data-team="<?php echo $i; ?>">
                        <img class="lazy-img" alt="Team Selector <?php echo $i; ?>" 
                        data-src="./assets/img/icon/team-0<?php echo $i; ?>.png" />
                    </div>
                <?php }?>
            </div>

            <?php for($i=1; $i<6; $i++){?>
                <div class="contents about-01-target <?php if($i==1)echo 'active'; ?>" data-team="<?php echo $i; ?>">
                    <div class="content" data-aos="fade-up" data-aos-delay="300">
                        <div class="text-container text-right">
                            <div class="ss-banner to-left d-inline-block">
                                <h3>แพทย์หญิงพรรณพิมล วิปุลากร</h3>
                                <p class="no-margin">อธิบดีกรมอนามัย</p>
                            </div>
                            <div class="ss-banner to-left">
                                <ul>
                                    <li>
                                        <div class="icon bg-color0 color-white">
                                            <i class="far fa-envelope"></i>
                                        </div>
                                        <a href="#">
                                            <span>email :</span> webmaster@anamai.go.th
                                        </a>
                                    </li>
                                    <li>
                                        <div class="icon bg-color0 color-white">
                                            <i class="fas fa-phone-alt"></i>
                                        </div>
                                        <a href="#">
                                            <span>เบอร์โทร :</span> 02-123 4567
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="content" data-aos="fade-up" data-aos-delay="600">
                        <img class="box-img lazy-img" data-src="./assets/img/content/box-01.png" alt="Box Image <?php echo $i; ?>" />
                        <img class="hero lazy-img" data-src="./assets/img/hero/team-0<?php echo $i; ?>.png" alt="About Hero <?php echo $i; ?>" />
                    </div>
                </div>
            <?php }?>

        </div>
    </section>

    <section class="section-padding">
        <div class="container">
            <?php for($i=1; $i<6; $i++){?>
                <div class="about-01-target <?php if($i==1)echo 'active'; ?>" data-team="<?php echo $i; ?>">
                    <div class="grids">
                        <div class="grid md-50 sm-100 mt-0" data-aos="fade-up" data-aos-delay="0">
                            <h2 class="no-margin fw-400">ประวัติการศึกษา</h2>
                            <div class="table-wrapper" data-simplebar>
                                <table class="table about-table">
                                    <tbody>
                                        <?php for($j=0; $j<7; $j++){?>
                                            <tr>
                                                <td><div class="icon icon-dot bg-color1"></div></td>
                                                <td class="color4 fw-500">2522 - 2528</td>
                                                <td>มหาวิทยาลัยขอนแก่น</td>
                                                <td>แพทย์ศาสตร์</td>
                                            </tr>
                                        <?php }?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="grid md-50 sm-100 xl-mt-0 lg-mt-0 md-mt-0" data-aos="fade-up" data-aos-delay="300">
                            <h2 class="no-margin fw-400">ตำเเหน่งที่รับผิดชอบ</h2>
                            <div class="table-wrapper" data-simplebar>
                                <table class="table about-table">
                                    <tbody>
                                        <?php for($j=0; $j<7; $j++){?>
                                            <tr>
                                                <td><div class="icon icon-dot bg-color1"></div></td>
                                                <td class="color4 fw-500">2522 - 2528</td>
                                                <td>มหาวิทยาลัยขอนแก่น</td>
                                                <td>แพทย์ศาสตร์</td>
                                            </tr>
                                        <?php }?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            <?php }?>
        </div>
    </section>
    
    <?php include_once('include/footer.php'); ?>
    <?php include_once('include/script.php'); ?>
</body>
</html>
