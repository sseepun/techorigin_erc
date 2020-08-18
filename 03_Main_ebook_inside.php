<!DOCTYPE html>
<html lang="th">
<head>
    <?php include_once('include/header.php'); ?>
    <?php include_once('include/style.php'); ?>
    <style>
        .main-ebook-inside {padding: 2.5rem 0;}

        /* Banner 04 */
        .banner-04 {position:relative; width:100%; height:50vh;}
        .banner-04 .slide-container, .banner-04 .slide-container .slides, .banner-04 .slide-container .slides .slick-list, .banner-04 .slide-container .slides .slick-list .slick-track, .banner-04 .slide-container .slides .slick-list .slick-track .slide{
            position:relative; width:inherit; height:inherit;
        }
        .banner-04 .slide-container .arrows {position:absolute; padding: 0 1rem; display:flex; width:100%; justify-content:space-between; color:#fff; top:calc(50% - 1.5rem); font-size:125%; }
        .banner-04 .slide-container .arrows .prev, .banner-04 .slide-container .arrows .next {
            opacity:0; transition: all .4s; transform: translateY(.625rem); width:3rem; height:3rem; display:flex; justify-content:center; align-items:center; cursor:pointer; background:var(--color4); padding:.75rem; border-radius:10%;
        }
        .banner-04 .slide-container:hover .arrows .prev, .banner-04 .slide-container:hover .arrows .next { opacity:.8; transform: translateY(0);}
        .banner-04 .slide-container .arrows .prev:hover, .banner-04 .slide-container .arrows .next:hover {opacity:1;}
        /* content-04 */
        .content-04 {padding-top:2rem;}
        .content-04 .text-container {display:flex; flex-wrap:wrap;}
        .content-04 .text-container .icon {width:2.5rem; height:2.5rem; display:flex; justify-content: center; align-items:center; font-size:1.5rem; padding: .5rem; color:#fff; border-radius: .3125rem;}
        .content-04 .text-container .title{font-size: 2.25rem; padding-left: 1rem;}
         /* Table */
         .content-04 .table-wrapper .table.file-table::before { content:''; position:absolute; top:0.4375rem; left:0; background:var(--color5); width:100%; height:.0625rem;}
        .content-04 .table-wrapper .table.file-table td {position:relative; border:none;}
        .content-04 .table-wrapper .table.file-table tr {transform:scale(1);} /* position:relative does not work with tr */
        .content-04 .table-wrapper .table.file-table tr::after { content:''; position:absolute; bottom:0; left:0; background:var(--color5); width:100%; height:.0625rem;}
        .content-04 .table-wrapper .table.file-table td:first-child {width:2.5rem;}
        .content-04 .table-wrapper .table.file-table td:last-child {text-align:left; display:flex; justify-content:flex-end; align-items:center;}
        .content-04 .table-wrapper .table.file-table .img-icon {height:2.5rem;}
        .content-04 .table-wrapper .table.file-table a.download-btn { font-size:70%; text-decoration:none;  padding:.25rem; color:#fff; border-radius: .3125rem;}
        .content-04 .table-wrapper .table.file-table a.download-btn i {font-size:70%; background-color:#fff; padding:.25rem; border-radius:.25rem;}
    </style>
</head>
<body>
    <?php include_once('include/topnav.php'); ?> 

    <section class="main-ebook-inside">
        <div class="container">
            <!-- Special Header -->
            <div class="ss-header">
                <div class="ss">ว</div><h1><span class="color2">ารสารออนไลน์สุขภาพ</span> <span class="fw-300">| 04. แม่และเด็ก</span></h1>
                <p><strong>กรมอนามัย</strong> ส่งมอบความรู้ที่ถูกต้อง เหมาะสมในวิถีชีวิตสู่การสุขภาพดี</p>
            </div>
            <div class="grids">
                <div class="grid lg-75 md-100 sm-100">
                    <!-- Banner 04 -->
                    <div class="banner-04">
                        <div class="slide-container">
                            <div class="slides">
                                <?php for($i = 1; $i < 5; $i++){?>
                                    <div class="slide" style="background-image:url('./assets/img/banner/0<?php echo $i; ?>.jpg'); background-size:cover; background-position:center;"></div>
                                <?php }?> 
                            </div>
                            <div class="arrows">
                                <div class="prev"><i class="fas fa-angle-left"></i></div>
                                <div class="next"><i class="fas fa-angle-right"></i></div>
                            </div>
                        </div>
                    </div>
                    <div class="ss-tags">
                        <div class="ss-tag type-6"></div>
                    </div>
                    <a class="ss-h2"><span class="color3">“7 สัปดาห์รอบรู้สู่สุขภาพดี”</span></a>
                    <p>แฟนตาซี สต๊อคเคลื่อนย้ายแฟร์โปรโมเตอร์บ๋อย เปราะบางปาสเตอร์แครกเกอร์แคนู อ่วมเฟอร์นิเจอร์สแควร์ ทริปจอหงวน รีเสิร์ชทอล์ค รองรับซูเปอร์โปรโมทโอเปอเรเตอร์ ปาสคาล จิตพิสัย แอปพริคอทนอร์ท วอเตอร์เกรย์กีวีซูโม่สตาร์ สโลว์ หมวย โจ๋บูมนอร์ท เวณิกา ชะโนดเอ๋ ว้าววอลนัทแอปพริคอท การันตีพรีเมียร์จอหงวนฟอยล์ สแตนเลสแครอท ยากูซ่าฟินิกซ์สเปคบัตเตอร์จ๊อกกี้ สึนามิ บ๋อยโฮปวิภัชภาค แซลมอนสุนทรีย์ยังไง คอร์รัปชั่นสตาร์ แอร์มาราธอนเป็นไงตู้เซฟ พีเรียดคีตกวีอินดอร์เฮีย ตัวตนจิตเภทหมวยผลไม้ โยเกิร์ตมลภาวะเยนคอนโทรล ซาร์ดีน เฮียซานตาคลอสพงษ์ สมาพันธ์ วืด</p>
                    <p>สเปกฟลุกช็อปเปอร์ ดีพาร์ตเมนท์ฟิวเจอร์กับดัก ครัวซอง ยังไงแอปพริคอทซัพพลายเออร์ รอยัลตี้บลูเบอร์รี่สตูดิโอกีวี หน่อมแน้มมยุราภิรมย์ บริกร อุตสาหการ อพาร์ตเมนต์แชมเปญเอ็นทรานซ์ เป็นไงดีไซน์วิวซิตี้เรซิ่น ออร์เดอร์เมี่ยงคำฮัลโหลแคมเปญไคลแม็กซ์ แชมปิยองแฟร์สโลว์ บ๋อยเซอร์วิส แชมปิยอง โดมิโน เกย์คอร์รัปชั่นลีกมอนสเตอร์โก๊ะ อิเหนาตอกย้ำโยเกิร์ตอาว์ สเตริโอนายแบบคอนเฟิร์ม สต็อคซ้อเวิร์ลด์มหาอุปราชาแทงกั๊ก คาร์คอร์ปอเรชั่นนอมินีสึนามิออร์แกนิก ยิวสแควร์เทควันโดโปรเจ็กต์เวอร์ เบิร์ดรีสอร์ตหยวน ซัมเมอร์แฮมเบอร์เกอร์เรซิ่น แต๋วแคนยอนฮัลโหล ตังค์มอลล์เสือโคร่งบ็อกซ์โลชั่น แฮนด์เรซิ่นโครนาสเตเดียมเบญจมบพิตร สารขัณฑ์เคส ดยุค ซังเตรีพอร์ทแซลมอนวันเวย์แอโรบิค ฮ่องเต้อึมครึมดาวน์เวิร์ลด์สมิติเวช ออดิทอเรียมช็อคอัลตรา ติวเวิร์กสึนามิสแตนเลส</p>

                    <!-- Related files -->
                    <div class="content-04">
                        <div class="text-container">
                            <div class="icon bg-color3"><i class="far fa-file-alt"></i></div>
                            <div class="title">อัลบั้มรูปภาพ</div>
                        </div>
                        <!-- Asset Table -->
                        <div class="table-wrapper" data-simplebar>
                            <table class="table file-table">
                                <tbody>
                                    <tr>
                                        <td><img class="img-icon" src="./assets/img/default/pdf.png" alt="PDF" /></td>
                                        <td>อัลบั้มภาพ ชุดที่ 1.Zip <br> ขนาดไฟล์ 30.31 MB   จำนวนดาวน์โหลด 200 ครั้ง</td>
                                        <td>
                                            <a href="#" class="download-btn bg-color4">
                                                <i class="fas fa-arrow-down color4"></i> คลิกเพื่อดาวน์โหลด
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><img class="img-icon" src="./assets/img/default/pdf.png" alt="PDF" /></td>
                                        <td>อัลบั้มภาพ ชุดที่ 2.Zip <br> ขนาดไฟล์ 30.31 MB   จำนวนดาวน์โหลด 200 ครั้ง</td>
                                        <td>
                                            <a href="#" class="download-btn bg-color4">
                                                <i class="fas fa-arrow-down co lor4"></i> คลิกเพื่อดาวน์โหลด
                                            </a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <!-- Related photo album -->
                    <div class="content-04">
                        <div class="text-container">
                            <div class="icon bg-color5"><i class="fas fa-book"></i></div>
                            <div class="title">ไฟล์วารสารออนไลน์</div>
                        </div>
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
                </div>
                <div class="grid sm-100 md-100 lg-25" data-aos="fade-up" data-aos-delay="600">
                    <!-- Slots -->
                    <div class="slots bg-color4">
                        <div class="slot bg-color0">
                            <div class="ss-header color-white-info">
                                <div class="ss">วี</div><h1 class="fw-300">ดิโอ</h1>
                                <p>& สื่อมัลติมีเดีย</p>
                            </div>
                            <div class="ss-video bradius-0">
                                <div class="img-bg" style="background-image:url('./assets/img/default/banner-01.jpg');"></div>
                                <div class="play-container">
                                    <a class="play-icon" href="https://www.youtube.com/watch?v=4NRXx6U8ABQ" data-fancybox>
                                        <i class="fas fa-play"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="ss-tags">
                                <div class="ss-tag type-3"></div>
                                <div class="ss-tag type-4"></div>
                            </div>
                            <div class="ss-date color-white">02.04.2563</div>
                            <a class="ss-h3 color-white" href="#">
                                การปฏิบัติด้านสุขอนามัยในห้างสรรพสินค้าและศูนย์การค้า
                            </a>
                            <p class="color-white">
                                ห้างสรรพสินค้าและศูนย์การค้าเป็นแหล่งนัดพบที่มีคนมาใช้บริการมากมาย...
                            </p>
                            <div class="btns">
                                <a class="btn btn-action btn-secondary next-icon" href="#">
                                    ดูวิดีโอทั้งหมด
                                </a>
                            </div>
                        </div>
                        <div class="slot bg-color4">
                            <div class="ss-header color-white">
                                <div class="ss">อั</div><h1 class="fw-300">ลบั้มภาพ</h1>
                                <p>พร้อมอัพเดท</p>
                            </div>
                            <p class="color-white no-margin">สาระสุขภาพทันสมัยให้คุณเข้าใจง่าย</p>
                            <h2 class="color1 no-margin">ไม่ตกเทรนด์!</h2>
                            <div class="btns">
                                <a class="btn btn-action btn-primary next-icon" href="#">
                                    อัลบั้มภาพทั้งหมด
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php include_once('include/footer.php'); ?>
    <?php include_once('include/script.php'); ?>
    <script>
        if($('.banner-04').length){
            $('.banner-04 > .slide-container').each(function(){
                var self = $(this);
                self.find('> .slides').slick({
                    slidesToShow: 1, slidesToScroll: 1, arrows: true, draggable: false, prevArrow: self.find('> .arrows .prev'), nextArrow: self.find('> .arrows .next')
                });
            });
        }
        
    </script>
</body>
</html>