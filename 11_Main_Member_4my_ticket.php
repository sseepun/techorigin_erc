<!DOCTYPE html>
<html lang="th">
<head>
    <?php include_once('include/header.php'); ?>
    <?php include_once('include/style.php'); ?>
    <style>
        .table-requests{width:100%; border-collapse:collapse;}
        .table-requests thead th {color:#fff; padding:1rem .75rem; font-size:115%;}
        .table-requests thead th:first-child{border-radius:25% 0 0 0;}
        .table-requests thead th:last-child {border-radius: 0 25% 0 0;}
        .table-requests tbody::before{content:""; display:block; height:.75rem;}
        .table-requests tbody td {text-align:center; padding:.625rem .5rem; border-top:1px solid #d8d8d8; border-bottom:1px solid #d8d8d8;}
        .table-requests tbody td:first-child, .table-requests tbody tr td:nth-child(2) {color:#383838;}
        .table-requests tbody td:last-child {color:#fff;}
        .table-requests .status {background: #f3983d; padding:.125rem .25rem; border-radius: .25rem; color:#fff;}
        @media screen and (max-width:576px) {
            .table-requests tbody::before{display:none;}
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
                            <?php for($i=0; $i<4; $i++){?>
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
                    <!-- Table -->
                    <table class="table-requests">
                        <thead>
                            <tr>
                                <th class ="fw-300" style="background:#6d9e5c;">หมายเลข</th>
                                <th class ="fw-300" style="background:#28502b;">หัวข้อเรื่องร้องเรียน</th>
                                <th class ="fw-300" style="background:#385f26;">สถานะ</th>
                                <th class ="fw-300" style="background:#6d9e5c;">แก้ไขล่าสุด</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php for($i=0;$i <10; $i++){?>
                                <tr>
                                    <td style="background: #f5f3f4;">#667642</td>
                                    <td>ประกาศรับสมัครบุคคลเพื่อสรรหาและเลือกสรรเป็นพนักงานจ้างของเทศบาลเมืองไร่ขิง</td>
                                    <td style="background: #f5f3f4;"><div class="status">รอดำเนินการ</div></td>
                                    <td style="background: #959595;">17/06/2020 <br> (16:45)</td>
                                </tr>
                            <?php }?>
                        </tbody>
                    </table>
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
