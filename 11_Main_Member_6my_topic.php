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
                            <?php for($i=0; $i<5; $i++){?>
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
                    <div class="list-header">
                        <div class="block">
                            <div class="text-wrapper">
                                <div class="ss-icon-title mt-0">
                                    <div class="icon bg-color1"><i class="fas fa-exclamation-triangle"></i></div>
                                    <h2>เรื่องร้องเรียนของฉันล่าสุด</h2>
                                </div>
                            </div>
                        </div>
                        <div class="block">
                            <div class="text-wrapper">
                                เรียงลำดับข้อมูล
                                <select class="order">
                                    <option value="newest">ที่มาใหม่</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <!-- Info Table -->
                    <div class="table-wrapper" data-simplebar>
                        <table class="table info-table">
                            <thead>
                                <tr>
                                    <th>หมายเลข</th>
                                    <th>หัวข้อเรื่องร้องเรียน</th>
                                    <th style="min-width:6rem;">จำนวนตอบ</th>
                                    <th>ผู้ตอบล่าสุด</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php for($i=0; $i<10; $i++){?>
                                    <tr>
                                        <td>#667642</td>
                                        <td>
                                            ประกาศรับสมัครบุคคลเพื่อสรรหาและเลือกสรรเป็นพนักงานจ้าง
                                            ของเทศบาลเมืองไร่ขิง
                                        </td>
                                        <td>10</td>
                                        <td>
                                            <div class="profile-tab sm">
                                                <div class="icon lazy-bg" data-src="./assets/img/banner/01.jpg"></div>
                                                <div class="text-container">
                                                    <h5 class="color-white">อุรัสยา เสปอร์บันด์</h5>
                                                    <h5 class="color-white op-7">
                                                        <span class="text-xs">
                                                            [11/06/2560 06:49:42]
                                                        </span>
                                                    </h5>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                <?php }?>
                            </tbody>
                        </table>
                    </div>
                    
                    <?php $listFooterNoBorder = true; include_once('component/list-footer.php'); ?>
                </div>

            </div>
        </div>
    </section>
    
    <?php include_once('include/footer.php'); ?>
    <?php include_once('include/script.php'); ?>
</body>
</html>
