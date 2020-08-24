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
            [ 'name' => 'แผนผังเว็บไซต์', 'url' => '#' ]
        ];
        include_once('component/breadcrumb.php');
    ?>

    <div class="section-padding bg-gradient-01">
        <div class="container">
            <div class="ss-header color-white">
                <div class="ss">แ</div><h1>ผนผังเว็บไซต์</h1>
                <p><strong class="ml-1">กรมอนามัย</strong> เพิ่มความสะดวกการจัดหมวดหมู่รายการ</p>
            </div>
        </div>   
    </div>
    <section class="mt-0" style="padding-bottom:20rem;">
        <div class="container">
            <div class="grids">

                <div class="grid lg-25 md-1-3 sm-100 mt-0">
                    <div class="ss-icon-title">
                        <div class="icon color-white bg-color5"><i class="far fa-file-alt"></i></div>
                        <h2>หน้าแรก</h2>
                    </div>
                    <div class="column-01">
                        <div class="maps">
                            <div class="dot bg-color5"></div>
                            <div class="line bg-color5"></div>
                            <div class="map">
                                <a href="#">ระเบียงคุณธรรม</a>
                            </div>
                            <div class="map">
                                <a href="#">ดาวน์โหลดเอกสาร</a>
                            </div>
                            <div class="map">
                                <a href="#">ศูนย์ข้อมูลข่าวสารของราชการ</a>
                            </div>
                            <div class="map">
                                <a href="#">ระบบควบคุมภายใน</a>
                            </div>
                            <div class="map">
                                <a href="#">DoH Dashboard</a>
                            </div>
                            <div class="map">
                                <a href="#">สา'สุข ชัวร์</a>
                            </div>
                            <div class="map">
                                <a href="#">ระบบฐานข้อมูลกลางกรมอนามัย</a>
                            </div>
                            <div class="map">
                                <a href="#">โหวต/โพล</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="grid lg-25 md-1-3 sm-100 mt-0">
                    <div class="ss-icon-title">
                        <div class="icon color-white bg-color4"><i class="far fa-file-alt"></i></div>
                        <h2>รู้จักกรม</h2>
                    </div>
                    <div class="column-01">
                        <div class="maps">
                            <div class="dot bg-color4"></div>
                            <div class="line bg-color4"></div>
                            <div class="map">
                                <a href="#">ประวัติความเป็นมา</a>
                            </div>
                            <div class="map">
                                <a href="#">วิสัยทัศน์ พันธกิจ</a>
                            </div>
                            <div class="map">
                                <a href="#">ผู้บริหารกรมอนามัย</a>
                            </div>
                            <div class="map">
                                <a href="#">CIO กรมอนามัย</a>
                                <ul>
                                    <li><a href="#">ประวัติ CIO</a></li>
                                    <li><a href="#">แผนแม่บทเทคโนโลยีสารสนเทศ และการสื่อสาร</a></li>
                                </ul>
                            </div>
                            <div class="map">
                                <a href="#">โครงสร้างและระบบการดูแลของกรมอนามัย</a>
                            </div>
                            <div class="map">
                                <a href="#">ภารกิจ/หน้าที่รับผิดชอบของหน่วยงาน</a>
                            </div>
                            <div class="map">
                                <a href="#">หน่วยงานในสังกัดกรมอนามัย</a>
                            </div>
                            <div class="map">
                                <a href="#">แผนปฏิบัติราชการของหน่วยงาน</a>
                                <ul>
                                    <li><a href="#">แผนปฏิบัติราชการ 5 ปี</a></li>
                                    <li><a href="#">แผนปฏิบัติราชการ 4 ปี</a></li>
                                    <li><a href="#">แผนปฏิบัติราชการประจำปี</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="grid lg-25 md-1-3 sm-100 mt-0">
                    <div class="ss-icon-title op-0">
                        <div class="icon color-white bg-color4"><i class="far fa-file-alt"></i></div>
                        <h2>รู้จักกรม</h2>
                    </div>
                    <div class="column-01">
                        <div class="maps">
                            <div class="dot bg-color4"></div>
                            <div class="line bg-color4"></div>
                            <div class="map">
                                <a href="#">แผนยุทธศาสตร์</a>
                            </div>
                            <div class="map">
                                <a href="#">แผนงาน โครงการงบประมาณรายจ่ายประจำปี</a>
                            </div>
                            <div class="map">
                                <a href="#">คำรับรองและรายงานผลการปฏิบัติราชการ</a>
                                <ul>
                                    <li><a href="#">คำรับรองการปฏิบัติราชการปีงบประมาณ พ.ศ. 2559</a></li>
                                    <li><a href="#">คำรับรองการปฏิบัติราชการปีงบประมาณ พ.ศ. 2558</a></li>
                                    <li><a href="#">คำรับรองการปฏิบัติราชการปีงบประมาณ พ.ศ. 2557</a></li>
                                </ul>
                            </div>
                            <div class="map">
                                <a href="#">กฏ ระเบียบ ข้อบังคับ</a>
                            </div>
                            <div class="map">
                                <a href="#">รายงานประจำปี กรมอนามัย</a>
                                <ul>
                                    <li><a href="#">รายงานประจำปี 2562 รอบ 6 เดือน</a></li>
                                    <li><a href="#">รายงานประจำปี</a></li>
                                </ul>
                            </div>
                            <div class="map">
                                <a href="#">การกำกับติดตามการดำเนินงาน ตามแผนปฏิบัติราชการ ประจำปี 2561</a>
                            </div>
                            <div class="map">
                                <a href="#">กระบวนการปฏิบัติงานและการให้บริการของกรมอนามัย</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="grid lg-25 md-1-3 sm-100 mt-0">
                    <div class="ss-icon-title">
                        <div class="icon color-white bg-color3"><i class="far fa-file-alt"></i></div>
                        <h2>ข่าวสาร</h2>
                    </div>
                    <div class="column-01">
                        <div class="maps">
                            <div class="dot bg-color3"></div>
                            <div class="line bg-color3"></div>
                            <div class="map">
                                <a href="#">ข่าวจากส่วนกลาง</a>
                            </div>
                            <div class="map">
                                <a href="#">ข่าวจากศูนย์อนามัย</a>
                            </div>
                            <div class="map">
                                <a href="#">ข่าวหนังสือพิมพ์</a>
                            </div>
                            <div class="map">
                                <a href="#">ข่าวรับสมัครบุคลากร</a>
                            </div>
                            <div class="map">
                                <a href="#">วิดีโอ</a>
                            </div>
                            <div class="map">
                                <a href="#">คลังภาพ</a>
                            </div>
                            <div class="map">
                                <a href="#">ปฏิทินกิจกรรม</a>
                            </div>
                            <div class="map">
                                <a href="#">จัดซื้อจัดจ้าง</a>
                                <ul>
                                    <li><a href="#">ข่าวการจัดซื้อจัดจ้าง</a></li>
                                    <li><a href="#">การเปิดเผยราคากลาง</a></li>
                                    <li><a href="#">แผน-ผลการจัดซื้อจัดจ้าง</a></li>
                                </ul>
                            </div>
                            <div class="map">
                                <a href="#">สรุปผลการดำเนินการจัดซื้อจัดจ้าง (สขร. 1)</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="grid lg-25 md-1-3 sm-100 mt-0">
                    <div class="ss-icon-title">
                        <div class="icon color-white bg-color1"><i class="far fa-file-alt"></i></div>
                        <h2>บริการประชาชน</h2>
                    </div>
                    <div class="column-01">
                        <div class="maps">
                            <div class="dot bg-color1"></div>
                            <div class="line bg-color1"></div>
                            <div class="map">
                                <a href="#">แจ้งเรื่องร้องเรียน</a>
                            </div>
                            <div class="map">
                                <a href="#">ความรู้สุขภาพ</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="grid lg-25 md-1-3 sm-100 mt-0">
                    <div class="ss-icon-title">
                        <div class="icon color-white bg-color2"><i class="far fa-file-alt"></i></div>
                        <h2>ติดต่อกรม</h2>
                    </div>
                    <div class="column-01">
                        <div class="maps">
                            <div class="dot bg-color2"></div>
                            <div class="line bg-color2"></div>
                            <div class="map">
                                <a href="#">ติดต่อกรม</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="grid lg-25 md-1-3 sm-100 mt-0">
                    <div class="ss-icon-title">
                        <div class="icon color-white bg-color5"><i class="far fa-file-alt"></i></div>
                        <h2>แผนผังเว็บไซต์</h2>
                    </div>
                    <div class="column-01">
                        <div class="maps">
                            <div class="dot bg-color5"></div>
                            <div class="line bg-color5"></div>
                            <div class="map">
                                <a href="#">แผนผังเว็บไซต์</a>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="grid lg-25 md-1-3 sm-100 mt-0"></div>

            </div>
        </div>
    </section>

    <?php include_once('include/footer.php'); ?>
    <?php include_once('include/script.php'); ?>
</body>
</html>
