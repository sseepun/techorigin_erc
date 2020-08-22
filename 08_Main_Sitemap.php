<!DOCTYPE html>
<html lang="th">
<head>
    <?php include_once('include/header.php'); ?>
    <?php include_once('include/style.php'); ?>
<style>
    .main-sitemap {padding: 0 0 2.5rem 0;}
    .banner-06 {padding: 2rem 0; background: linear-gradient(to right, rgba(152,146,52,1) 0%, rgba(33,77,54,1) 35%, rgba(33,78,84,1) 100%);}
    .column-01 .text-container {display:flex; flex-wrap:wrap;}
    .column-01 .text-container .icon {width:2.5rem; height:2.5rem; display:flex; justify-content: center; align-items:center; font-size:1.5rem; padding: .5rem; color:#fff; border-radius: .3125rem;}
    .column-01 .text-container .title{font-size: 2.25rem; padding-left: 1rem;}
    .column-01 .wrapper { position:relative; display:flex; flex-wrap:wrap; padding: 1rem 0 0 3.5rem;}
    .column-01 .map-contents {position:relative; width:100%;}
    .column-01 .wrapper .map-contents .dot { position:absolute; width:.375rem; height:.375rem; top:0; left:-1.375rem; background:black; }
    .column-01 .wrapper .map-contents .v-line {position:absolute; width:.0625rem; height:100%; background:#777; top:0; left: -1rem;}
    .column-01 .map-contents.half {width:50%;}
    .column-01 .map-contents.half:first-child .map-content {width:calc(100% - 3.5rem);}
    .column-01 .map-content {position:relative; padding: .5rem 0; }
    .column-01 .map-content ul {list-style: none;}
    .column-01 .map-content li {position:relative;}
    .column-01 .map-content li::before {content: ''; position:absolute; width:.25rem; height:.25rem; background: #777; top:0.46875rem; left:-1rem;}
    .column-01 .map-content:nth-child(3)::before {display:none;}
    .column-01 .map-content::before {content: ''; position:absolute; top:0; width:100%; height:.0625rem; background: #777; opacity:.2;}
    .column-01 .map-content a { text-decoration: none; color:#777; font-size:110%;}
    @media screen and (max-width: 991.98px) {
        .column-01 .map-contents.half {width:100%;}
        .column-01 .map-contents.half:first-child .map-content {width:100%;}
    }
</style>
</head>
<body>
    <?php include_once('include/topnav.php'); ?> 
    <section class="main-sitemap">
        <div class="banner-06">
            <div class="container">
                 <!-- Special Header -->
                 <div class="ss-header color-white">
                    <div class="ss">แ</div><h1>ผนผังเว็บไซต์</h1>
                    <p><strong>กรมอนามัย</strong> เพิ่มความสะดวกการจัดหมวดหมู่รายการ</p>
                </div>
            </div>   
        </div>
        <div class="container">
            <div class="grids">
                <div class="grid  lg-20 md-50 sm-100">
                    <div class="column-01">
                        <div class="text-container">
                            <div class="icon bg-color5"><i class="far fa-file-alt"></i></div>
                            <div class="title">หน้าแรก</div>
                        </div>
                        <div class="wrapper">
                            <div class="map-contents">
                                <div class="dot bg-color5"></div>
                                <div class="v-line bg-color5"></div>
                                <div class="map-content">
                                    <a href="#">ระเบียงคุณธรรม</a>
                                </div>
                                <div class="map-content">
                                    <a href="#">ดาวน์โหลดเอกสาร</a>
                                </div>
                                <div class="map-content">
                                    <a href="#">ศูนย์ข้อมูลข่าวสารของราชการ</a>
                                </div>
                                <div class="map-content">
                                    <a href="#">ระบบควบคุมภายใน</a>
                                </div>
                                <div class="map-content">
                                    <a href="#">DoH Dashboard</a>
                                </div>
                                <div class="map-content">
                                    <a href="#">สา'สุข ชัวร์</a>
                                </div>
                                <div class="map-content">
                                    <a href="#">ระบบฐานข้อมูลกลางกรมอนามัย</a>
                                </div>
                                <div class="map-content">
                                    <a href="#">โหวต/โพล</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="grid lg-60 md-50 sm-100">
                    <div class="column-01">
                        <div class="text-container">
                            <div class="icon bg-color4"><i class="far fa-file-alt"></i></div>
                            <div class="title">รู้จักกรม</div>
                        </div>
                        <div class="wrapper">
                            <div class="map-contents half">
                                <div class="dot bg-color4"></div>
                                <div class="v-line bg-color4"></div>
                                <div class="map-content">
                                    <a href="#">ประวัติความเป็นมา</a>
                                </div>
                                <div class="map-content">
                                    <a href="#">วิสัยทัศน์ พันธกิจ</a>
                                </div>
                                <div class="map-content">
                                    <a href="#">ผู้บริหารกรมอนามัย</a>
                                </div>
                                <div class="map-content">
                                    <a href="#">CIO กรมอนามัย</a>
                                    <ul>
                                        <li><a href="#">ประวัติ CIO</a></li>
                                        <li><a href="#">แผนแม่บทเทคโนโลยีสารสนเทศ และการสื่อสาร</a></li>
                                    </ul>
                                </div>
                                <div class="map-content">
                                    <a href="#">โครงสร้างและระบบการดูแลของกรมอนามัย</a>
                                </div>
                                <div class="map-content">
                                    <a href="#">ภารกิจ/หน้าที่รับผิดชอบของหน่วยงาน</a>
                                </div>
                                <div class="map-content">
                                    <a href="#">หน่วยงานในสังกัดกรมอนามัย</a>
                                </div>
                                <div class="map-content">
                                    <a href="#">แผนปฏิบัติราชการของหน่วยงาน</a>
                                    <ul>
                                        <li><a href="#">แผนปฏิบัติราชการ 5 ปี</a></li>
                                        <li><a href="#">แผนปฏิบัติราชการ 4 ปี</a></li>
                                        <li><a href="#">แผนปฏิบัติราชการประจำปี</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="map-contents half">
                                <div class="dot bg-color4"></div>
                                <div class="v-line bg-color4"></div>
                                <div class="map-content">
                                    <a href="#">แผนยุทธศาสตร์</a>
                                </div>
                                <div class="map-content">
                                    <a href="#">แผนงาน โครงการงบประมาณรายจ่ายประจำปี</a>
                                </div>
                                <div class="map-content">
                                    <a href="#">คำรับรองและรายงานผลการปฏิบัติราชการ</a>
                                    <ul>
                                        <li><a href="#">คำรับรองการปฏิบัติราชการปีงบประมาณ พ.ศ. 2559</a></li>
                                        <li><a href="#">คำรับรองการปฏิบัติราชการปีงบประมาณ พ.ศ. 2558</a></li>
                                        <li><a href="#">คำรับรองการปฏิบัติราชการปีงบประมาณ พ.ศ. 2557</a></li>
                                    </ul>
                                </div>
                                <div class="map-content">
                                    <a href="#">กฏ ระเบียบ ข้อบังคับ</a>
                                </div>
                                <div class="map-content">
                                    <a href="#">รายงานประจำปี กรมอนามัย</a>
                                    <ul>
                                        <li><a href="#">รายงานประจำปี 2562 รอบ 6 เดือน</a></li>
                                        <li><a href="#">รายงานประจำปี</a></li>
                                    </ul>
                                </div>
                                <div class="map-content">
                                    <a href="#">การกำกับติดตามการดำเนินงาน ตามแผนปฏิบัติราชการ ประจำปี 2561</a>
                                </div>
                                <div class="map-content">
                                    <a href="#">กระบวนการปฏิบัติงานและการให้บริการของกรมอนามัย</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="grid  lg-20 md-50 sm-100">
                    <div class="column-01">
                        <div class="text-container">
                            <div class="icon bg-color3"><i class="far fa-file-alt"></i></div>
                            <div class="title">ข่าวสาร</div>
                        </div>
                        <div class="wrapper">
                            <div class="map-contents">
                                <div class="dot bg-color3"></div>
                                <div class="v-line bg-color3"></div>
                                <div class="map-content">
                                    <a href="#">ข่าวจากส่วนกลาง</a>
                                </div>
                                <div class="map-content">
                                    <a href="#">ข่าวจากศูนย์อนามัย</a>
                                </div>
                                <div class="map-content">
                                    <a href="#">ข่าวหนังสือพิมพ์</a>
                                </div>
                                <div class="map-content">
                                    <a href="#">ข่าวรับสมัครบุคลากร</a>
                                </div>
                                <div class="map-content">
                                    <a href="#">วิดีโอ</a>
                                </div>
                                <div class="map-content">
                                    <a href="#">คลังภาพ</a>
                                </div>
                                <div class="map-content">
                                    <a href="#">ปฏิทินกิจกรรม</a>
                                </div>
                                <div class="map-content">
                                    <a href="#">จัดซื้อจัดจ้าง</a>
                                    <ul>
                                        <li><a href="#">ข่าวการจัดซื้อจัดจ้าง</a></li>
                                        <li><a href="#">การเปิดเผยราคากลาง</a></li>
                                        <li><a href="#">แผน-ผลการจัดซื้อจัดจ้าง</a></li>
                                    </ul>
                                </div>
                                <div class="map-content">
                                    <a href="#">สรุปผลการดำเนินการจัดซื้อจัดจ้าง (สขร. 1)</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="grid  lg-20 md-50 sm-100">
                    <div class="column-01">
                        <div class="text-container">
                            <div class="icon bg-color1"><i class="far fa-file-alt"></i></div>
                            <div class="title">บริการประชาชน</div>
                        </div>
                        <div class="wrapper">
                            <div class="map-contents">
                                <div class="dot bg-color1"></div>
                                <div class="v-line bg-color1"></div>
                                <div class="map-content">
                                    <a href="#">แจ้งเรื่องร้องเรียน</a>
                                </div>
                                <div class="map-content">
                                    <a href="#">ความรู้สุขภาพ</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="grid  lg-20 md-50 sm-100">
                    <div class="column-01">
                        <div class="text-container">
                            <div class="icon bg-color2"><i class="far fa-file-alt"></i></div>
                            <div class="title">ติดต่อกรม</div>
                        </div>
                        <div class="wrapper">
                            <div class="map-contents">
                                <div class="dot bg-color2"></div>
                                <div class="v-line bg-color2"></div>
                                <div class="map-content">
                                    <a href="#">ติดต่อกรม</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="grid lg-60">
                    <div class="column-01">
                        <div class="text-container">
                            <div class="icon bg-color5"><i class="far fa-file-alt"></i></div>
                            <div class="title">แผนผังเว็บไซต์</div>
                        </div>
                        <div class="wrapper">
                            <div class="map-contents">
                                <div class="dot bg-color5"></div>
                                <div class="v-line bg-color5"></div>
                                <div class="map-content">
                                    <a href="#">แผนผังเว็บไซต์</a>
                                </div>
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