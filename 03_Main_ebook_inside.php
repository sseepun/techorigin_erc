<!DOCTYPE html>
<html lang="th">
<head>
    <?php include_once('include/header.php'); ?>
    <?php include_once('include/style.php'); ?>
    <link rel="stylesheet" type="text/css" href="./assets/lib/wow_book/wow_book/wow_book.css" />
</head>
<body>
    <?php include_once('include/topnav.php'); ?>
    <?php
        $breadcrumb = [
            [ 'name' => 'หน้าแรก', 'url' => './' ],
            [ 'name' => 'วารสารออนไลน์สุขภาพ', 'url' => '#' ]
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

                <div class="grid xl-75 lg-70 md-100 sm-100">
                    <div data-aos="fade-up" data-aos-delay="300">
                        <?php
                            $contentStat = [
                                'date' => '27.03.2563', 'view_count' => '202'
                            ];
                            include_once('component/content-stat.php');
                        ?>
                    </div>

                    <!-- Banner 02 -->
                    <?php if(0){?>
                        <div class="banner-02">
                            <div class="slide-container">
                                <div class="preview-container">
                                    <div class="slides">
                                        <?php for($i=1; $i<7; $i++){?>
                                            <div class="slide">
                                                <div class="wrapper">
                                                    <div class="ss-img no-hover">
                                                        <div class="img-bg lazy-bg" data-src="./assets/img/banner/0<?php echo ($i%3)+1; ?>.jpg"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php }?>
                                    </div>
                                    <div class="arrows">
                                        <div class="prev"><i class="fas fa-angle-left"></i></div>
                                        <div class="next"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php }?>
                    <div class="book-container">
                        <div class="wow-book" id="wow-book">
                            <?php for($i=1; $i<5; $i++){?>
                                <div><img src="./assets/img/banner/0<?php echo $i; ?>.jpg" alt="Page <?php echo $i; ?>" /></div>
                            <?php }?>
                        </div>
                    </div>
                    
                    <div data-aos="fade-up" data-aos-delay="0">
                        <div class="btns text-right">
                            <a class="btn btn-back" href="#">
                                ย้อนกลับ
                            </a>
                        </div>
                        <div class="ss-tags">
                            <div class="ss-tag type-6"></div>
                        </div>
                        <a class="ss-h2 color3" href="#">
                            กรมอนามัย นำทีมลงห้าง-ศูนย์การค้า ย้ำศูนย์บริการมือถือเข้มมาตรการเว้นระยะ Social Distancing
                        </a>
                        <p>
                            กรมอนามัย กระทรวงสาธารณสุขลงพื้นที่ตรวจเยี่ยมศูนย์การค้าบิ๊กซีสาขาติวานนท์ 
                            และห้างสรรพสินค้าเดอะมอลล์งามวงศ์วาน จังหวัดนนทบุรี ขอความร่วมมือร้านค้า 
                            และศูนย์บริการโทรศัพท์มือถือที่ได้รับบริการผ่อนปรนให้เปิดบริการเข้มในการปฏิบัติตาม 
                            คำแนะนำของกระทรวงสาธารณสุข และยึดหลักมาตรการเว้นระยะห่างทางสังคม Social Distancing 
                            เพื่อลดการแพร่เชื้อโควิด-19
                        </p>
                        <p>
                            นายแพทย์สราวุฒิ บุญสุข รองอธิบดีกรมอนามัย กล่าวว่า ในช่วงสถานการณ์การระบาดของเชื้อโควิด-19 ในขณะนี้ 
                            อธิบดีกรมอนามัย (แพทย์หญิงพรรณพิมล วิปุลากร) มีความห่วงใย โดนเน้นย้ำประชาชนให้ความสำคัญต่อการปฏิบัติตนตามคำแนะนำของกระทรวง 
                            สาธารณสุขอย่างเคร่งครัด โดยเฉพาะมาตรการเว้นระยะห่างทางสังคม Social Distancing จึงมอบหมายให้นำทีมนักวิชาการ 
                            ของกรมอนามัยลงพื้นที่ให้คำแนะนำแนวทางการปฏิบัติด้านสุขอนามัยในศูนย์การค้าบิ๊กซี สาขาติวานนท์ และห้างสรรพสินค้า 
                            เดอะมอลล์งามวงศ์วาน เพื่อป้องกันการระบาดของเชื้อโควิด-19 โดยเฉพาะพื้นที่ที่ได้รับการผ่อนปรนให้เปิดบริการ เช่น 
                            ซูเปอร์มาเก็ต ร้านอาหารที่จำหน่ายแบบนำกลับบ้าน และร้านเบ็ดเตล็ดที่จำเป็นต่อการดำรงชีวิตซึ่งล่าสุดรัฐบาลได้อนุญาตให้ศูนย์บริการโทรศัพท์ 
                            มือถือเปิดบริการได้
                        </p>
                        <p>
                            <span class="color4">
                                ทั้งนี้ ผู้ประกอบการต้องมีมาตราการเข้มเพื่อลดการแพร่กระจายเชื้อโควิด-19 
                                โดยยังคงขอให้ยึดถือและปฏิบัติตามคำแนะนำ
                            </span> 
                            ดังนี้ 1) จัดให้มีจุดคัดกรองผู้รับบริการ ผู้ปฏิบัติงาน โดยจัดระบบคัดกรองและการจัดระบบเว้นระยะห่างระหว่างกันของผู้มารับบริการ 
                            2) จัดให้มีจุดบริการเจลแอลกอฮอล์ไว้ในบริเวณพื้นที่ให้บริการ 
                            3) ดูแลสุขลักษณะอุปกรณ์สิ่งของ เครื่องใช้ ให้สะอาด ไม่เป็นแหล่งแพร่ กระจายเชื้อโรคด้วยการทำความสะอาดพื้นที่โดยรอบอุปกรณ์ 
                            เครื่องใช้ และจุดที่มีการใช้ร่วมกัน จุดชำระเงิน โดยทำความสะอาด ด้วยน้ำยาทำความสะอาดหรือสารฆ่าเชื้อ 
                            เช่นแอลกอฮอล์ 70 เปอร์เซ็นต์ น้ำยาฆ่าเชื้อที่มีส่วนผสมของคลอรีน เป็นต้น 
                            4) ผู้ประกอบการ ของ ห้างสรรพสินค้าควรให้ความร๔้ คำแนะนำ หรือจัดหาสื่อประชาสัมพันธ์การป้องกันและการลดความเสี่ยง 
                            จากการแพร่กระจายเชื้อ COVID-19 ให้กับผู้ปฏิบัติงานและลูกค้าผู้รับบริการ ทั้งนี้ หากพบว่าผู้ปฏิบัติงานมีอาการป่วย มีไข้ ไอ จาม 
                            มีน้ำมูก หรือเหนื่อยหอบ ให้หยุดปฏิบัติงาน แจ้งหัวหน้างานและพบแพทย์ทันที รองอธิบดีกรมอนามัยกล่าว
                        </p>
                    </div>
                    
                    <div class="ss-icon-title" data-aos="fade-up" data-aos-delay="0">
                        <div class="icon bg-color3"><i class="far fa-file-alt"></i></div>
                        <h2>อัลบั้มรูปภาพ</h2>
                    </div>
                    <div class="table-wrapper mt-1" data-simplebar>
                        <table class="table download-table">
                            <tbody>
                                <?php foreach(['doc', 'docx', 'pdf', 'ppt', 'pptx'] as $f){?>
                                    <tr>
                                        <td>
                                            <div class="file-icon <?php echo $f; ?>"></div>
                                        </td>
                                        <td>
                                            การขับเคลื่อนชุมชนเข้มแข็งในการจัดการอนามัยสิ่งแวดล้อมชุมชน
                                        </td>
                                        <td>
                                            <div class="text-xs">ขนาดไปล์ <strong>1.3</strong> MB</div>
                                            <div class="text-xs">ดาวน์โหลด <strong>23</strong> ครั้ง</div>
                                        </td>
                                        <td class="text-left">
                                            <a class="btn btn-action btn-sm btn-icon-alert" href="#">
                                                แจ้งไฟล์เสีย
                                            </a>
                                        </td>
                                    </tr>
                                <?php }?>
                            </tbody>
                        </table>
                    </div>

                    <div class="ss-icon-title" data-aos="fade-up" data-aos-delay="0">
                        <div class="icon bg-color5"><i class="far fa-book"></i></div>
                        <h2>อัลบั้มรูปภาพที่เกี่ยวข้อง</h2>
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
                                            <li><a href="#" class="social social-ig">
                                                <i class="fab fa-instagram"></i>
                                            </a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="ss-tags">
                                    <div class="ss-tag type-6"></div>
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
                    <div class="slots no-mask lazy-bg" data-src="./assets/img/bg/14.jpg">
                        <img class="float-img type-7" src="./assets/img/hero/16.png" alt="Slot Float Image 01" />
                        <div class="slot-tabs mt-0">
                            <h4 class="title color-white">หมวดหมู่</h4>
                            <?php for($i=0; $i<10; $i++){?>
                                <a class="slot-tab" href="#">
                                    <h5 class="mt-0 color-white">
                                        0<?php echo $i; ?>. <br>
                                        ข่าวจากหนังสือพิมพ์
                                    </h5>
                                </a>
                            <?php }?> 
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <?php include_once('include/footer.php'); ?>
    <?php include_once('include/script.php'); ?>
    <script src="./assets/lib/wow_book/wow_book/wow_book.min.js"></script>
    <script>
        $('#wow-book').wowBook({
            height: 500,
            width: 800,
            container: true,
            containerBackground: '#777',
            containerWidth: '100%',
            containerHeight: '100%',
            containerPadding: '20px',
            toolbarPosition: 'bottom',
            thumbnails: true,
            toolbar: 'first, back, next, last, zoomin, zoomout, slideshow, flipsound, fullscreen',
        });
    </script>
</body>
</html>
