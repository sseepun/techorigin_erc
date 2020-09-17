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
            [ 'name' => 'ข่าวประชาสัมพันธ์', 'url' => '#' ]
        ];
        include_once('component/breadcrumb.php');
    ?>
    
    <section class="section-padding">
        <div class="container">
            <div class="ss-header" data-aos="fade-up" data-aos-delay="0">
                <div class="ss">ข่</div><h1 class="color2">าวประชาสัมพันธ์</h1>
                <p><span class="fw-600">กรมอนามัย</span> พร้อมให้ข้อมูลข่าวสารที่มีประโยชน์สำหรับคุณ</p>
            </div>
            <div class="grids">

                <div class="grid xl-75 lg-70 md-100 sm-100">
                    <div data-aos="fade-up" data-aos-delay="300">
                        <?php
                            $contentStat = [
                                'date' => '27.03.2563', 'view_count' => '202'
                            ];
                            include_once('component/content-stat.php');
                        ?>
                    </div>

                    <div data-aos="fade-up" data-aos-delay="600">
                        <a class="ss-img no-hover" href="#">
                            <div class="img-bg lazy-bg" data-src="./assets/img/banner/01.jpg"></div>
                            <div class="tag">
                                <div class="date">28</div>
                                <div class="text-container">
                                    <div class="month">กรกฎาคม</div>
                                    <div class="year">2563</div>
                                </div>
                            </div>
                        </a>
                        <div class="btns text-right">
                            <a class="btn btn-back" href="#">
                                ย้อนกลับ
                            </a>
                        </div>
                        <div class="ss-tags">
                            <div class="ss-tag type-1"></div>
                        </div>
                        <h2 class="color4">5 ผัก ตัวช่วยสร้างนมแม่</h2>
                        <p>เพราะมีสารอาหารมากกว่า 200 ชนิด มีสารช่วยสร้างเซลล์สมอง เส้นใยประสาทสมอง และจอประสาทตา มีภูมิต้านทานโรค ทำให้ลูกน้อยแข็งแรง สุขภาพดี ไม่เจ็บป่วยง่าย คุณแม่ที่ให้นมลูกจึงควรกินอาหารที่มี ส่วนประกอบของผักชนิดต่างๆ ที่ช่วยเพิ่มปริมาณ น้ำนม ดังนี้</p>
                        <ul class="ss-list">
                            <li><strong>หัวปลี</strong> มีธาตุเหล็กมาก ช่วยบำรุงน้ำนมได้ดี นำมาประกอบอาหาร เช่น แกงเลียง ยำหัวปลี ทอดมันหัวปลี ต้มข่าไก่ใส่หัวปลี หัวปลีชุบแป้งทอด ต้มหัวปลีจิ้มน้ำพริก</li>
                            <li><strong>ขิง</strong> ช่วยขับเหงื่อ ขับลบ ไล่ความเย็น แก้ท้องอืด ท้องเฟ้อ ช่วยให้เจริญอาหาร ช่วยให้ร่างกายอบอุ่น นำมาประกอบอาหาร เช่น มันต้มขิง ปลาผัดขิง กระเพาะหมูผัดขิง</li>
                            <li><strong>ใบกะเพรา</strong> มีแคลเซียมและฟอสฟอรัสสูง แก้ท้องอืด ท้องเฟ้อ ขับลบ บำรุงธาตุ เพิ่มน้ำนม นำมาประกอบอาหาร เช่น ผัดกะเพราหมู ไก่ หรือปลา ต้มจืดใบกะเพราหมูสับ</li>
                            <li><strong>ฟักทอง</strong> อุดมไปด้วยวิตามินเอ ฟอสฟอรัส และเบต้าแคโรทีน นำมาประกอบอาหาร เช่นแกงเลียง ฟักทองนึ่ง ฟักทองผัดไข่ แกงบวดฟักทอง</li>                                        <li><strong>กุยช่าย</strong> ทั้งต้นและใบช่วยบำรุงน้ำนม นำมาประกอบอาหาร เช่น กินแนมกับผัดไทย กุยช่ายทอด ผัดกุยช่ายตับ</li>
                        </ul>
                        <p>อย่าลืมว่า หัวใจสำคัญของแม่หลังคลอด คือกินอาหารให้ครบ 5 หมู่ทุกมื้อในปริมาณ ที่เหมาะสมต่อความต้องการของร่างกายด้วยเพื่อสุขภาพที่ดีและมีน้ำนมให้ลูก เพียงพอ</p>
                    </div>

                    <div class="ss-icon-title" data-aos="fade-up" data-aos-delay="0">
                        <div class="icon bg-color3"><i class="far fa-file-alt"></i></div>
                        <h2>ไฟล์ที่เกี่ยวข้อง</h2>
                    </div>
                    <div class="table-wrapper mt-1" data-simplebar data-aos="fade-up" data-aos-delay="300">
                        <table class="table download-table">
                            <tbody>
                                <?php foreach(['doc', 'docx', 'pdf', 'ppt', 'pptx'] as $f){?>
                                    <tr>
                                        <td><div class="file-icon <?php echo $f; ?>"></div></td>
                                        <td>
                                            การขับเคลื่อนชุมชนเข้มแข็งในการจัดการอนามัยสิ่งแวดล้อมชุมชน
                                        </td>
                                        <td>
                                            <div class="text-xs">ขนาดไปล์ <strong>1.3</strong> MB</div>
                                            <div class="text-xs">ดาวน์โหลด <strong>23</strong> ครั้ง</div>
                                        </td>
                                        <td class="text-left">
                                            <a class="btn btn-icon-download" href="#">
                                                ดาวน์โหลด
                                            </a>
                                            <br>
                                            <a class="btn btn-icon-alert" href="#">
                                                แจ้งไฟล์เสีย
                                            </a>
                                        </td>
                                    </tr>
                                <?php }?>
                            </tbody>
                        </table>
                    </div>

                    <div class="ss-icon-title" data-aos="fade-up" data-aos-delay="0">
                        <div class="icon bg-color3"><i class="far fa-file-alt"></i></div>
                        <h2>Embed</h2>
                    </div>
                    <div class="ss-mp4 mt-1">
                        <div class="wrapper">
                            <video controls>
                                <source src="./assets/video/01.mp4" type="video/mp4">
                                Your browser does not support the video tag.
                            </video>
                        </div>
                    </div>
                    <div class="ss-iframe mt-1">
                        <div class="wrapper">
                            <div class="iframe-container">
                                <iframe src="https://techorigin.co.th/" frameborder="0"></iframe>
                            </div>
                        </div>
                    </div>

                    <div class="ss-icon-title" data-aos="fade-up" data-aos-delay="0">
                        <div class="icon bg-color4"><i class="far fa-images"></i></div>
                        <h2>รูปภาพที่เกี่ยวข้อง</h2>
                    </div>
                    <div class="gallery-grids" data-aos="fade-up" data-aos-delay="300">
                        <?php for($i=0; $i<6; $i++){?>
                            <div class="grid md-25">
                                <a class="ss-img bradius-0" href="./assets/img/banner/<?php echo sprintf('%02d', $i%4+1); ?>.jpg" data-fancybox="gallery">
                                    <div class="img-bg lazy-bg" data-src="./assets/img/content/01.jpg"></div>
                                </a>
                            </div>
                        <?php }?>
                        <div class="grid md-50 mt-0"></div>
                    </div>
                    
                    <div class="ss-icon-title" data-aos="fade-up" data-aos-delay="0">
                        <div class="icon bg-color1"><i class="far fa-images"></i></div>
                        <h2>วิดีโอดาวน์โหลด</h2>
                    </div>
                    <div class="grids ai-center">
                        <div class="grid xl-60 lg-50 xs-100">
                            <div class="ss-mp4 mt-1">
                                <div class="wrapper">
                                    <video controls>
                                        <source src="./assets/video/01.mp4" type="video/mp4">
                                        Your browser does not support the video tag.
                                    </video>
                                </div>
                            </div>
                        </div>
                        <div class="grid xl-40 lg-50 xs-100 xs-mt-0">
                            <h3 class="color4">
                                กรมอนามัย <br> 
                                นำทีมลงห้าง-ศูนย์การค้า <br> 
                                ย้ำศูนย์บริการมือถือเข้มมาตรการ <br>
                                เว้นระยะ Social Distancing
                            </h3>
                        </div>
                    </div>
                    <div class="grids" data-aos="fade-up" data-aos-delay="300">
                        <?php for($i=0; $i<4; $i++){?>
                            <div class="grid md-25 card">
                                <div class="ss-video square">
                                    <div class="img-bg lazy-bg" data-src="./assets/img/content/01.jpg"></div>
                                    <div class="play-container">
                                        <a class="play-icon" href="https://www.youtube.com/watch?v=4NRXx6U8ABQ" data-fancybox>
                                            <i class="fas fa-play"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        <?php }?>
                    </div>
                    
                    <div class="ss-icon-title" data-aos="fade-up" data-aos-delay="0">
                        <div class="icon bg-color1"><i class="far fa-images"></i></div>
                        <h2>ข่าวที่เกี่ยวข้อง</h2>
                    </div>
                    <div class="grids" data-aos="fade-up" data-aos-delay="300">
                        <?php for($i=0; $i<4; $i++){?>
                            <div class="grid md-25 card">
                                <div class="ss-img square">
                                    <div class="img-bg lazy-bg" data-src="./assets/img/content/01.jpg"></div>
                                    <div class="socials">
                                        <ul>
                                            <li><a href="#" class="social social-fw">
                                                <i class="fab fa-facebook f"></i>
                                            </a></li>
                                            <li><a href="#" class="social social-tw">
                                                <i class="fab fa-twitter"></i>
                                            </a></li>
                                            <!-- <li><a href="#" class="social social-ig">
                                                <i class="fab fa-instagram"></i>
                                            </a></li> -->
                                            <li><a href="#" class="social social-ln">
                                                <i class="fab fa-line"></i>
                                            </a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="ss-tags">
                                    <div class="ss-tag type-<?php echo $i+1; ?>"></div>
                                </div>
                                <div class="ss-date">02.04.2564</div>
                                <a href="#" class="ss-h5">
                                    กรมอนามัย เตือน คนติดหวานแม้ดื่มสูตรน้ำตาล 0% เสี่ยงอ้วน
                                </a>
                            </div>
                        <?php }?>
                    </div>
                    
                </div>

                <div class="grid xl-25 lg-30 md-100 sm-100" data-aos="fade-up" data-aos-delay="600">
                    <div class="slots no-mask lazy-bg" data-src="./assets/img/bg/04.jpg">
                        <img class="float-img" src="./assets/img/hero/07.png" alt="Slot Float Image" />
                        <div class="slot-tabs">
                            <h4 class="title color-white">หมวดหมู่</h4>
                            <?php for($i=0; $i<4; $i++){?>
                                <a class="slot-tab" href="#">
                                    <h5 class="mt-0 color-white">
                                        0<?php echo "$i"; ?>. <br>
                                        ข่าวจากหนังสือพิมพ์ <br>
                                        <span class="text-xs">กรมอนามัย</span>
                                    </h5>
                                </a>
                            <?php }?> 
                        </div>
                        <div class="slot mt-2">
                            <h2 class="header-text quote-text">
                                <span class="fw-400">กรมอนามัย</span> <br>
                                เรามีสาระสุขภาพดีๆ <br>
                                <span class="text-xl fw-400 color1">ส่งตรงถึงคุณ</span> <br>
                                <span class="text-xl">ทุกวัน</span>
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
