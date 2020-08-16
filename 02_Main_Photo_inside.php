<!DOCTYPE html>
<html lang="th">
<head>
    <?php include_once('include/header.php'); ?>
    <?php include_once('include/style.php'); ?>
    <style>
        .main-photo-inside {padding:7.5rem 0;}

        /* Banner 03 */
        .banner-03 {position:relative; width:100%;}
        .banner-03 > .slide-container {position:relative; width:100%;}
        .banner-03 .slide-container .preview-container {display:block; position:relative; width:100%; overflow:hidden; height:40vh;}
        .banner-03 .slide-container .preview-container .slide {height:40vh;}
        .banner-03 .slide-container .preview-container .slick-list {width:100%; height:100%;}
        .banner-03 .slide-container > .slides {display:block; position:relative; width:100%; overflow:hidden; height:15vh;-webkit-mask-image:linear-gradient(to right, rgba(0,0,0,0), rgba(0,0,0,1), rgba(0,0,0,1), rgba(0,0,0,0));}  
        .banner-03 .slide {background-size:cover; background-position:center; background-repeat:no-repeat; padding: 0 0 15vh 0;display:flex; align-items:center; overflow:hidden;}
    </style>
    </head>
<body>
    <?php include_once('include/topnav.php'); ?> 


    <section class="main-photo-inside">
        <div class="container">
            <!-- Special Header -->
            <div class="ss-header">
                <div class="ss">ค</div><h1>ลังภาพ</h1>
                <p><strong>กรมอนามัย</strong> อัพเดท รวบรวม ภาพกิจกรรมหรือข้อมูลเพื่อประชาชน</p>
            </div>
            <div class="grids">
                <div class="grid lg-75">
                    <!-- Left side -->
                    <!-- Banner 03 -->
                    <div class="banner-03">
                        <div class="slide-container">
                            <div class="preview-container">
                                <?php for($i = 1; $i<5; $i++){?>
                                    <div class="slide" style="background-image:url('./assets/img/banner/0<?php echo $i; ?>.jpg');"></div>
                                <?php }?>
                            </div>
                            <div class="slides">
                                <?php for($i = 1; $i<5; $i++){?>
                                    <div class="slide" style="background-image:url('./assets/img/banner/0<?php echo $i; ?>.jpg');"></div>
                                <?php }?>
                            </div>
                        </div>
                    </div>
                    <div class="ss-tags">
                        <div class="ss-tag type-6"></div>
                    </div>
                    <a class="ss-h2"><span class="color4">กรมอนามัย นำทีมลงห้าง-ศูนย์การค้า ย้ำศูนย์บริการมือถือเข้มมาตรการเว้นระยะ Social Distancing</span></a>
                    <p>กรมอนามัย กระทรวงสาธารณสุขลงพื้นที่ตรวจเยี่ยมศูนย์การค้าบิ๊กซีสาขาติวานนท์ และห้างสรรพสินค้าเดอะมอลล์งามวงศ์วาน จังหวัดนนทบุรี ขอความร่วมมือร้านค้า และศูนย์บริการโทรศัพท์มือถือที่ได้รับบริการผ่อนปรนให้เปิดบริการเข้มในการปฏิบัติตาม คำแนะนำของกระทรวงสาธารณสุข และยึดหลักมาตรการเว้นระยะห่างทางสังคม Social Distancing เพื่อลดการแพร่เชื้อโควิด-19</p>
                    <p>นายแพทย์สราวุฒิ บุญสุข รองอธิบดีกรมอนามัย กล่าวว่า ในช่วงสถานการณ์การระบาดของเชื้อโควิด-19 ในขณะนี้ อธิบดีกรมอนามัย (แพทย์หญิงพรรณพิมล วิปุลากร) มีความห่วงใย โดนเน้นย้ำประชาชนให้ความสำคัญต่อการปฏิบัติตนตามคำแนะนำของกระทรวง สาธารณสุขอย่างเคร่งครัด โดยเฉพาะมาตรการเว้นระยะห่างทางสังคม Social Distancing จึงมอบหมายให้นำทีมนักวิชาการ ของกรมอนามัยลงพื้นที่ให้คำแนะนำแนวทางการปฏิบัติด้านสุขอนามัยในศูนย์การค้าบิ๊กซี สาขาติวานนท์ และห้างสรรพสินค้า เดอะมอลล์งามวงศ์วาน เพื่อป้องกันการระบาดของเชื้อโควิด-19 โดยเฉพาะพื้นที่ที่ได้รับการผ่อนปรนให้เปิดบริการ เช่น ซูเปอร์มาเก็ต ร้านอาหารที่จำหน่ายแบบนำกลับบ้าน และร้านเบ็ดเตล็ดที่จำเป็นต่อการดำรงชีวิตซึ่งล่าสุดรัฐบาลได้อนุญาตให้ศูนย์บริการโทรศัพท์ มือถือเปิดบริการได้</p>
                    <p><span class="color4">ทั้งนี้ ผู้ประกอบการต้องมีมาตราการเข้มเพื่อลดการแพร่กระจายเชื้อโควิด-19 โดยยังคงขอให้ยึดถือและปฏิบัติตามคำแนะนำ</span> ดังนี้ 1) จัดให้มีจุดคัดกรองผู้รับบริการ ผู้ปฏิบัติงาน โดยจัดระบบคัดกรองและการจัดระบบเว้นระยะห่างระหว่างกันของผู้มารับบริการ 2) จัดให้มีจุดบริการเจลแอลกอฮอล์ไว้ในบริเวณพื้นที่ให้บริการ 3) ดูแลสุขลักษณะอุปกรณ์สิ่งของ เครื่องใช้ ให้สะอาด ไม่เป็นแหล่งแพร่ กระจายเชื้อโรคด้วยการทำความสะอาดพื้นที่โดยรอบอุปกรณ์ เครื่องใช้ และจุดที่มีการใช้ร่วมกัน จุดชำระเงิน โดยทำความสะอาด ด้วยน้ำยาทำความสะอาดหรือสารฆ่าเชื้อ เช่นแอลกอฮอล์ 70 เปอร์เซ็นต์ น้ำยาฆ่าเชื้อที่มีส่วนผสมของคลอรีน เป็นต้น 4) ผู้ประกอบการ ของ ห้างสรรพสินค้าควรให้ความร๔้ คำแนะนำ หรือจัดหาสื่อประชาสัมพันธ์การป้องกันและการลดความเสี่ยง จากการแพร่กระจายเชื้อ COVID-19 ให้กับผู้ปฏิบัติงานและลูกค้าผู้รับบริการ ทั้งนี้ หากพบว่าผู้ปฏิบัติงานมีอาการป่วย มีไข้ ไอ จาม มีน้ำมูก หรือเหนื่อยหอบ ให้หยุดปฏิบัติงาน แจ้งหัวหน้างานและพบแพทย์ทันที รองอธิบดีกรมอนามัยกล่าว</p>


                    <!-- Related Albums -->
                     <a href="#" class="ss-h2"><i class="far fa-building"></i> อัลบั้มรูปภาพที่เกี่ยวข้อง</a>
                    <div class="grids">
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
                <div class="grid lg-25">
                    <!-- Right side -->
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
                    console.log(self.find('> .preview-container .arrows'));
                    self.find('> .slides').slick({
                        slidesToShow: 3, centerMode:true, asNavFor: '.preview-container', focusOnSelect:true, arrows:false, dots:false
                    });
                    self.find('> .preview-container').slick({
                        slidesToShow: 1, slidesToScroll: 1, arrows: true, asNavFor: '.slides'
                    });
                });
            }
        });
    </script>
</body>
</html>