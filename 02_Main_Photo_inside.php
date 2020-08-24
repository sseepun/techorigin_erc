<!DOCTYPE html>
<html lang="th">
<head>
    <?php include_once('include/header.php'); ?>
    <?php include_once('include/style.php'); ?>
    <style>
        /* Banner 03 */
        .banner-03 {position:relative; width:100%;}
        .banner-03 > .slide-container {position:relative; width:100%;}
        .banner-03 .slide-container .preview-container {display:block; position:relative; width:100%; overflow:hidden; height:40vh;}
        .banner-03 .slide-container .preview-container .slide {height:40vh;}
        .banner-03 .slide-container .preview-container .slick-list {width:100%; height:100%;}
        .banner-03 .slide-container .slides-nav {padding-top: 1rem; display:block; position:relative; width:100%; overflow:hidden; height:20vh;-webkit-mask-image:linear-gradient(to right, rgba(0,0,0,0), rgba(0,0,0,1), rgba(0,0,0,1), rgba(0,0,0,0));}  
        .banner-03 .slide {border-radius:1rem; background-size:cover; background-position:center; background-repeat:no-repeat; padding: 0 0 15vh 0;display:flex; align-items:center; overflow:hidden;}
        .banner-03 .slide-container .slides-nav .slide {cursor:pointer; margin: 0 .25rem; position:relative; transition: border .4s;}
        .banner-03 .slide-container > .arrows {display:flex; justify-content: space-between; width:100%; font-size:125%; cursor:pointer;}
        .banner-03 .slide-container .slides-nav .slide::before {content:''; opacity:0; transition: opacity .4s; position:absolute; top:0; left:0; right:0; bottom:0;background:rgba(13, 131, 141, .5);}
        .banner-03 .slide-container .slides-nav .slide.slick-current::before {opacity: 1;}
        .banner-03 .slide-container .slides-nav .slide.slick-current { border: .125rem solid var(--color4); }
        .banner-03 .slide-container .slides-nav .slide:last-child{display:none;}
        .banner-03 .slide-container .preview-container .arrows {position:absolute; padding:0 .5rem; display:flex; width:100%; justify-content: space-between; color:#fff; top:calc(50% - 1.25rem); font-size:125%; }
        .banner-03 .slide-container .preview-container .arrows .prev, .banner-03 .slide-container .preview-container .arrows .next {transition: all .4s; opacity:0; transform: translateY(.625rem); width:2.5rem; height:2.5rem; display:flex; justify-content: center; align-items:center; cursor:pointer; background: var(--color4); padding:.5rem;}
        .banner-03 .slide-container .preview-container:hover .arrows .prev, .banner-03 .slide-container .preview-container:hover .arrows .next {opacity: .8; transform: translateY(0);}
        .banner-03 .slide-container .preview-container .arrows .prev:hover, .banner-03 .slide-container .preview-container .arrows .next:hover {opacity:1;}
    </style>
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
                    <div data-aos="fade-up" data-aos-delay="300">
                        <?php
                            $contentStat = [
                                'date' => '27.03.2563', 'view_count' => '202'
                            ];
                            include_once('component/content-stat.php');
                        ?>
                    </div>

                    <!-- Banner 03 -->
                    <div class="banner-03">
                        <div class="slide-container">
                            <div class="preview-container">
                                <div class="slides">
                                    <?php for($i = 1; $i<5; $i++){?>
                                        <div class="slide" style="background-image:url('./assets/img/banner/0<?php echo $i; ?>.jpg');"></div>
                                    <?php }?>
                                </div>
                                <div class="arrows">
                                    <div class="prev"><i class="fas fa-angle-left"></i></div>
                                    <div class="next"><i class="fas fa-angle-right"></i></div>
                                </div>
                            </div>
                            <div class="slides-nav">
                                <div class="slides">
                                    <?php for($i = 1; $i<5; $i++){?>
                                        <div class="slide" style="background-image:url('./assets/img/banner/0<?php echo $i; ?>.jpg');"></div>
                                    <?php }?>
                                </div>
                            </div>      
                            <div class="arrows">
                                <div class="prev"><i class="fas fa-angle-left"></i></div>
                                <div class="next"><i class="fas fa-angle-right"></i></div>
                            </div>
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
                    <div class="table-wrapper" data-simplebar>
                        <table class="table download-table">
                            <tbody>
                                <?php foreach(['doc', 'docx', 'pdf', 'ppt', 'pptx'] as $f){?>
                                    <tr>
                                        <td><div class="file-icon <?php echo $f; ?>"></div></td>
                                        <td>
                                            <h3 class="no-margin">อัลบั้มภาพ ชุดที่ 1.Zip</h3> 
                                            ขนาดไฟล์ 30.31 MB จำนวนดาวน์โหลด 200 ครั้ง
                                        </td>
                                        <td>
                                            <a href="#" class="btn btn-action btn-primary">
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
                                    <div class="img-bg" style="background-image:url('./assets/img/content/01.jpg');"></div>
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

                <div class="grid sm-100 md-100 lg-25" data-aos="fade-up" data-aos-delay="600">
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
    <script>
        $(function(){ 'use strict';
            // Banner 03
            if($('.banner-03').length){
                $('.banner-03 > .slide-container').each(function(){
                    var self = $(this);
                    self.find('> .slides-nav .slides').slick({
                        draggable: false, slidesToShow: 3, centerMode:true, asNavFor: '.preview-container .slides', focusOnSelect:true, arrows:true,  dots:false, prevArrow: self.find('> .arrows .prev'), nextArrow: self.find('> .arrows .next')
                    });
                    self.find('> .preview-container .slides').slick({
                        slidesToShow: 1, slidesToScroll: 1, arrows: true, asNavFor: '.slides-nav .slides', prevArrow: self.find('> .preview-container .arrows .prev'), nextArrow: self.find('> .preview-container .arrows .next')
                    });
                });
            }
        });
    </script>
</body>
</html>