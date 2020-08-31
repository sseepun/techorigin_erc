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
            [ 'name' => 'คลิปวิดีโอ', 'url' => '#' ]
        ];
        include_once('component/breadcrumb.php');
    ?>
    
    <section class="section-padding">
        <div class="container">
            <div class="ss-header">
                <div class="ss">วิ</div><h1><span class="color2">ดีโอคลิป</span></h1>
                <p><strong>กรมอนามัย</strong> อัพเดท รวบรวมสื่อมัลติมีเดียเพื่อประชาชน</p>
            </div>
            <div class="grids">

                <div class="grid xl-75 lg-70 md-100 sm-100">
                    <div class="ss-mp4">
                        <div class="wrapper">
                            <video controls>
                                <source src="./assets/video/01.mp4" type="video/mp4">
                                Your browser does not support the video tag.
                            </video>
                        </div>
                    </div>
                    
                    <div class="btns text-right">
                        <a class="btn btn-back" href="#">
                            ย้อนกลับ
                        </a>
                    </div>
                    <div class="ss-tags">
                        <div class="ss-tag type-6"></div>
                    </div>
                    <a class="ss-h2 color4">
                        ข้อปฎิบัติช่วงวันหยุดยาว เที่ยวอย่างไรให้ปลอดโรค
                    </a>
                    <p>
                        แฟนตาซี สต๊อคเคลื่อนย้ายแฟร์โปรโมเตอร์บ๋อย เปราะบางปาสเตอร์แครกเกอร์แคนู อ่วมเฟอร์นิเจอร์สแควร์ 
                        ทริปจอหงวน รีเสิร์ชทอล์ค รองรับซูเปอร์โปรโมทโอเปอเรเตอร์ ปาสคาล จิตพิสัย แอปพริคอทนอร์ท 
                        วอเตอร์เกรย์กีวีซูโม่สตาร์ สโลว์ หมวย โจ๋บูมนอร์ท เวณิกา ชะโนดเอ๋ ว้าววอลนัทแอปพริคอท 
                        การันตีพรีเมียร์จอหงวนฟอยล์ สแตนเลสแครอท ยากูซ่าฟินิกซ์สเปคบัตเตอร์จ๊อกกี้ สึนามิ บ๋อยโฮปวิภัชภาค 
                        แซลมอนสุนทรีย์ยังไง คอร์รัปชั่นสตาร์ แอร์มาราธอนเป็นไงตู้เซฟ พีเรียดคีตกวีอินดอร์เฮีย 
                        ตัวตนจิตเภทหมวยผลไม้ โยเกิร์ตมลภาวะเยนคอนโทรล ซาร์ดีน เฮียซานตาคลอสพงษ์ สมาพันธ์ วืด
                    </p>
                    <p>
                        สเปกฟลุกช็อปเปอร์ ดีพาร์ตเมนท์ฟิวเจอร์กับดัก ครัวซอง ยังไงแอปพริคอทซัพพลายเออร์ 
                        รอยัลตี้บลูเบอร์รี่สตูดิโอกีวี หน่อมแน้มมยุราภิรมย์ บริกร อุตสาหการ อพาร์ตเมนต์แชมเปญเอ็นทรานซ์ 
                        เป็นไงดีไซน์วิวซิตี้เรซิ่น ออร์เดอร์เมี่ยงคำฮัลโหลแคมเปญไคลแม็กซ์ แชมปิยองแฟร์สโลว์ บ๋อยเซอร์วิส 
                        แชมปิยอง โดมิโน เกย์คอร์รัปชั่นลีกมอนสเตอร์โก๊ะ อิเหนาตอกย้ำโยเกิร์ตอาว์ สเตริโอนายแบบคอนเฟิร์ม 
                        สต็อคซ้อเวิร์ลด์มหาอุปราชาแทงกั๊ก คาร์คอร์ปอเรชั่นนอมินีสึนามิออร์แกนิก ยิวสแควร์เทควันโดโปรเจ็กต์เวอร์ 
                        เบิร์ดรีสอร์ตหยวน ซัมเมอร์แฮมเบอร์เกอร์เรซิ่น แต๋วแคนยอนฮัลโหล ตังค์มอลล์เสือโคร่งบ็อกซ์โลชั่น 
                        แฮนด์เรซิ่นโครนาสเตเดียมเบญจมบพิตร สารขัณฑ์เคส ดยุค ซังเตรีพอร์ทแซลมอนวันเวย์แอโรบิค 
                        ฮ่องเต้อึมครึมดาวน์เวิร์ลด์สมิติเวช ออดิทอเรียมช็อคอัลตรา ติวเวิร์กสึนามิสแตนเลส
                    </p>

                    <div class="btns d-flex jc-space-between ai-center mt-1-5">
                        <a class="btn btn-action btn-secondary" href="#">
                            ดาวน์โหลดไฟล์วิดีโอ
                        </a>
                        <a class="btn btn-action btn-primary btn-toggle" data-toggle="embed" href="#">
                            Embed &lt;/&gt;
                        </a>
                    </div>
                    <div class="toggle-target" data-toggle="embed">
                        <div class="field">
                            <div class="control">
                                <textarea name="message" rows="3"></textarea>
                            </div>
                        </div>
                        <div class="btns mt-0">
                            <a class="btn btn-action btn-primary mt-0 full-width" href="#">
                                คัดลอกโค้ด
                            </a>
                        </div>
                    </div>
                    
                    <div class="ss-icon-title" data-aos="fade-up" data-aos-delay="0">
                        <div class="icon bg-color5"><i class="far fa-book"></i></div>
                        <h2>วิดิโอคลิปที่เกี่ยวข้อง</h2>
                    </div>
                    <div class="grids">
                        <?php for($i=0; $i<4; $i++){?>
                            <div class="grid md-25 card">
                                <div class="ss-video square">
                                    <div class="img-bg lazy-bg" data-src="./assets/img/default/banner-01.jpg"></div>
                                    <div class="play-container">
                                        <a class="play-icon" href="https://www.youtube.com/watch?v=4NRXx6U8ABQ" data-fancybox>
                                            <i class="fas fa-play"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="ss-tags">
                                    <div class="ss-tag type-<?php echo ($i+1)%6;?>"></div>
                                </div>
                                <div class="ss-date">02.04.2564</div>
                                <a href="#" class="ss-h5">
                                    คู่มือการจัดการอนามัยสิ่งแวดล้อมในชุมชนสำหรับประชาชนปัจจุบันสถาณการณ์ ทางด้านเศรษฐกิจ
                                </a>
                            </div>
                        <?php }?>
                    </div>

                </div>

                <div class="grid xl-25 lg-30 md-100 sm-100" data-aos="fade-up" data-aos-delay="600">
                    <div class="slots no-mask lazy-bg" data-src="./assets/img/bg/05.jpg">
                        <img class="float-img type-4" src="./assets/img/hero/10.png" alt="Slot Float Image 01" />
                        <div class="slot">
                            <h2 class="header-text quote-text mt-0">
                                <span>กรมอนามัย</span> <br>
                                <span class="text-xl fw-400 color1">ห่วงใยสุขภาพ</span> <br>
                                ทุกคนเพื่อ <br>
                                คุณภาพชีวิตที่ดี
                            </h2>
                        </div>
                        <img class="float-img type-3 lazy-img" data-src="./assets/img/hero/11.png" alt="Slot Float Image 02" />
                    </div>
                </div>

            </div>
        </div>
    </section>

    <?php include_once('include/footer.php'); ?>
    <?php include_once('include/script.php'); ?>
</body>
</html>