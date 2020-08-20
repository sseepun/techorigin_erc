<!DOCTYPE html>
<html lang="th">
<head>
    <?php include_once('include/header.php'); ?>
    <?php include_once('include/style.php'); ?>
    <style>

/* Special Icon Text */
.ss-icon-title{width:100%; display:flex; align-items:center; margin:2rem 0 0 0;}
.ss-icon-title > .icon{
    display:block; width:2.5rem; height:2.5rem; line-height:3rem; text-align:center; 
    font-size:1.375rem; border-radius:.3125rem; margin:0 .625rem 0 0;
}
.ss-icon-title > h2{margin:0;}

/* Special Icon Text */
.ss-icon-title .icon{color:#fff;}

        /* content-04 */
        /* Table */
        .content-04 .table-wrapper .table.file-table::before { content:''; position:absolute; top:0.4375rem; left:0; background:var(--color5); width:100%; height:.0625rem;}
        .content-04 .table-wrapper .table.file-table td {position:relative; border:none;}
        .content-04 .table-wrapper .table.file-table tr {transform:scale(1);} /* position:relative does not work with tr */
        .content-04 .table-wrapper .table.file-table tr::after { content:''; position:absolute; bottom:0; left:0; background:var(--color5); width:100%; height:.0625rem;}
        .content-04 .table-wrapper .table.file-table td:first-child {width:2.5rem;}
        .content-04 .table-wrapper .table.file-table td:last-child {text-align:left; display:flex; justify-content:flex-end; align-items:center;}
        .content-04 .table-wrapper .table.file-table .img-icon {height:2.5rem;}
        .content-04 .table-wrapper .table.file-table a.download-btn { font-size:70%; text-decoration:none; padding:.25rem; color:#fff; border-radius: .3125rem;}
        .content-04 .table-wrapper .table.file-table a.download-btn i {font-size:70%;  background-color:#fff; padding:.25rem; border-radius:.25rem;}
        
        /* gallery-01 */
        .gallery-01 {padding-top:2rem;}
        .gallery-01 .grids {justify-content: flex-start;}
        .gallery-01 .grid{width:25%;}
        /* Reverse icon direction */
        .gallery-01 .text-container .icon .far.fa-images {transform: rotateY(180deg);}
        .gallery-01 .text-container .title{font-size: 2.25rem; padding-left: 1rem; }
        .gallery-01 .img-container {position:relative; padding: 60% 0 0 0; margin-right: .25rem; cursor:pointer; overflow:hidden;}
        .gallery-01 .img-container::before { content: ''; position:absolute; top:0; bottom:0; left:0; right:0; background: transparent; transition: background .4s;}
        .gallery-01 .grid:nth-child(4n) .img-container{margin-right:0;}
        .gallery-01 .img-bg {position:absolute; top:0; left:0; right:0; bottom:0; background-position:center; background-size:cover; transition: transform .4s;}
        .gallery-01 .img-container:hover::before { background:rgba(0,0,0,0.5); z-index:1;}
        .gallery-01 .img-container:hover .img-bg {transform: scale(1.1);}
        /* gallery-01 responsive */
        @media screen and (min-width: 576px) and (max-width: 767.98px){
            .gallery-01 .grid {width: 50%;}
            .gallery-01 .grid:nth-child(2n) .img-container{margin-right:0;}
        }

        /* Right banner */
        .banner-top{height:50%; }
        .banner-top .img-container {height:100%; position:relative; overflow:visible;} 
        /* light green filter */
        .banner-top .img-container .filter {position:absolute; width:100%; top:40%; height:100%; background:linear-gradient(to bottom, rgba(255, 255, 255, 0), rgba(133, 185, 147, 1), rgba(133, 185, 147, 1), rgba(133, 185, 147, 1));}
        .banner-top .img-container img {position:absolute; z-index:1; left:calc(50% - 9.375rem); top:-3rem; width:110%;}
        .banner-top .img-container .img-bg{position:absolute; top:0; left:0; right:0; bottom:0; background-position:top center; background-size:cover; background-image:url('./assets/img/default/banner-02.jpg');}
        .banner-top .img-container > .grids {position:absolute; bottom: 0; opacity:0;  transition: all ease .5s; z-index:2;}
        .banner-top .img-container:hover > .grids {opacity:1; }
        .banner-top .img-container > .grids .grid > .grids {padding: 0.25rem 0.5rem;}
        .banner-top .img-container > .grids .grid > .grids:first-child {background: #659e75; transition: transform .5s; transform:translateY(10px);}
        .banner-top .img-container > .grids .grid > .grids:nth-child(2) {background: #537d55;transition: transform .5s; transform:translateY(20px);}
        .banner-top .img-container > .grids .grid > .grids:last-child {background: #535d38;transition: transform .5s; transform:translateY(30px);}
        .banner-top .img-container:hover > .grids .grid > .grids:first-child,  .banner-top .img-container:hover > .grids .grid > .grids:nth-child(2), .banner-top .img-container:hover > .grids .grid > .grids:last-child{transform: translateY(0);}
        .banner-top .img-container .grids .icon-wrapper {position:relative; width:100%; height:100%;}
        .banner-top .img-container .grids .icon-wrapper .icon {position:absolute; top:0; bottom:0; left:0; right:0; background-position:center; background-size:cover;}
        .banner-top .img-container > .grids .grid > .grids .grid .info {color:#fff;}
        .banner-top .img-container > .grids .grid > .grids .grid .info .order, .banner-top .img-container > .grids .grid > .grids .grid .info .category{font-size:100%;}
        .banner-top .img-container > .grids .grid > .grids .grid .info .title {font-size:120%;}
        .banner-bottom{position:relative; height:50%; background: linear-gradient(to bottom, rgba(44, 133, 79, 1), rgba(32, 111, 66, 1), rgba(36, 82, 69, 1),  rgba(36, 82, 69, 1), rgba(255, 255, 255, 0));}
        .banner-bottom .text-container {position:absolute; top:calc(50% - 5.625rem); text-align:center; display:flex; flex-wrap:wrap;}
        .banner-bottom .text-container::before{
            content: '\201C'; color:var(--color2); position:absolute; font-family:sans-serif; font-size:300%; top: calc(0% - 2rem); left: calc(50% - .5rem);
        }
        .banner-bottom .text-container::after{
            content: '\201D'; color:var(--color2); position:absolute; font-family:sans-serif; font-size:300%; bottom: calc(0% - 4rem); right: calc(50% - .5rem);
        }
        .banner-bottom .text-container > span {width:100%; color:#fff;}
        .banner-bottom .text-container > span:first-child, .banner-bottom .text-container > span:last-child {font-size: 250%;}
        .banner-bottom .text-container > span:nth-child(2) {font-size:180%;}
        .banner-bottom .text-container > span:nth-child(3) {font-size:300%; color:#b2c43a;}
    </style>
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
                <div class="grid lg-75 md-100 sm-100">

                    <div data-aos="fade-up" data-aos-delay="300">
                        <a class="ss-img" href="#">
                            <div class="img-bg" style="background-image:url('./assets/img/banner/01.jpg');"></div>
                            <div class="tag">
                                <div class="date">28</div>
                                <div class="text-container">
                                    <div class="month">กรกฎาคม</div>
                                    <div class="year">2563</div>
                                </div>
                            </div>
                        </a>
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

                    <div class="ss-icon-title">
                        <div class="icon bg-color3"><i class="far fa-file-alt"></i></div>
                        <h2>ไฟล์ที่เกี่ยวข้อง</h2>
                    </div>
                    <div class="content-04">
                        <!-- Asset Table -->
                        <div class="table-wrapper" data-simplebar>
                            <table class="table file-table">
                                <tbody>
                                    <tr>
                                        <td><img class="img-icon" src="./assets/img/default/pdf.png" alt="PDF" /></td>
                                        <td>ดาวน์โหลดอินโฟกราฟฟิกนี้ <br> ขนาดไฟล์ 30.31 MB   จำนวนดาวน์โหลด 200 ครั้ง</td>
                                        <td>
                                            <a href="#" class="download-btn bg-color4">
                                                <i class="fas fa-arrow-down color4"></i> คลิกเพื่อดาวน์โหลด
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><img class="img-icon" src="./assets/img/default/pdf.png" alt="PDF" /></td>
                                        <td>ดาวน์โหลดอินโฟกราฟฟิกนี้ <br> ขนาดไฟล์ 30.31 MB   จำนวนดาวน์โหลด 200 ครั้ง</td>
                                        <td>
                                            <a href="#" class="download-btn bg-color4">
                                                <i class="fas fa-arrow-down color4"></i> คลิกเพื่อดาวน์โหลด
                                            </a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="ss-icon-title">
                        <div class="icon bg-color4"><i class="far fa-images"></i></div>
                        <h2>รูปภาพที่เกี่ยวข้อง</h2>
                    </div>
                    <div class="gallery-01">
                        <div class="grids">
                            <?php for($i=0; $i<6; $i++){?>
                                <div class="grid">
                                    <div class="img-container">
                                        <div class="img-bg" style="background-image:url('./assets/img/content/01.jpg');"></div>
                                    </div>
                                </div>
                            <?php }?>
                        </div>
                    </div>
                    
                    <div class="ss-icon-title">
                        <div class="icon bg-color5"><i class="far fa-images"></i></div>
                        <h2>ข่าวที่เกี่ยวข้อง</h2>
                    </div>
                    <div class="content-04">
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
                    
                </div>
                
                <div class="grid sm-100 md-100 lg-25" data-aos="fade-up" data-aos-delay="600">
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
</body>
</html>
