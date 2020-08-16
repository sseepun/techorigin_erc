<!DOCTYPE html>
<html lang="th">
<head>
    <?php include_once('include/header.php'); ?>
    <?php include_once('include/style.php'); ?>
    <style>
        .main-news-inside {padding:2rem 0;}
        /* Banner 02 */
        .banner-02 .container {width: inherit; position:relative;}
        .banner-02 .img-container {position:relative; width:100%; height:100%; padding: 50% 0 0 0;}
        .banner-02 .img-container .img-bg{border-radius: 10px; position:absolute; top:0; bottom:0; left:0; right:0; background-position:center; background-size:cover;}
        /* date display */
        .date-display {transform: scale(0.8); transform-origin:bottom left;  position:absolute; bottom:2rem; width:40%; height: 15%; color:#fff; background: linear-gradient(to right, rgba(13, 147, 123, 1), rgba(255, 255, 255, 0)); 
        }
        /* Effect borders */
        .date-display::before {content: ''; position:absolute; border-top: 0.0625rem solid; border-image-source:linear-gradient(to right, rgba(233, 248, 45, 1), rgba(9, 145, 123, 1),  rgba(255, 255, 255, 0)); border-image-slice:1; width:100%; top:-0.125rem;}
        .date-display::after {content: ''; position:absolute; border-top: 0.0625rem solid; border-image-source:linear-gradient(to right, rgba(233, 248, 45, 1), rgba(9, 145, 123, 1),  rgba(255, 255, 255, 0)); border-image-slice:1; width:100%; bottom:-0.125rem;}
        .date-display .wrapper::before {content: ''; position:absolute; border-top: 0.0625rem solid; border-image-source:linear-gradient(to right, rgba(9, 145, 123, 1), rgba(255, 255, 255, 0)); border-image-slice:1; width:100%; top:-0.0625rem;}
        .date-display .wrapper::after {content: ''; position:absolute; border-top: 0.0625rem solid; border-image-source:linear-gradient(to right, rgba(9, 145, 123, 1), rgba(255, 255, 255, 0)); border-image-slice:1; width:100%; bottom:-0.0625rem;}
        .date-display .wrapper {position:relative; width:100%; height:100%; display:flex; flex-wrap:wrap;}
        .date-display .day-container{width: 20%; height: inherit;}
        .date-display .day-container .day {font-size:400%; height:inherit; display:flex; align-items:center; justify-content:flex-end;}
        .date-display .month-year-container {width:80%; position:relative; padding-left:0.5rem;}
        .date-display .month-year-container .month { width:100%; font-size:150%; position:absolute; top:calc(50% - 1.4rem);}
        .date-display .month-year-container .year { width:100%; font-size:150%; position:absolute; top: calc(50% - 0.3rem);}
        /* date responsive */
        @media screen and (max-width: 991.98px) and (min-width: 768px) {
            .date-display .day-container .day {font-size:200%;}
            .date-display .month-year-container .month, .date-display .month-year-container .year   {font-size:100%; }
            .date-display .month-year-container .month  {top:calc(50% - 0.9rem);}
        }
        @media screen and (max-width: 767.98px){
            .date-display .day-container .day {font-size:150%;}
            .date-display .month-year-container .month, .date-display .month-year-container .year  {font-size:80%;}
            .date-display .month-year-container .month {top: calc(50% - 0.8rem);}
            .date-display .month-year-container .year {top: calc(50% - 0.2rem);}
        }
        @media screen and (max-width: 576px) {
            .date-display {width:25%;}
        }

        /* content-03 */
        .content-03 {padding-top:1rem;}
        .content-03 > .container {width:inherit;}
        .content-03 .container  p {margin:0;}
        .content-03 .container ul {font-size:125%;}
        .content-03 .container .content ul{list-style:none;}

        /* content-04 */
        .content-04 .text-container {display:flex; flex-wrap:wrap;}
        .content-04 .text-container .icon {width:2.5rem; height:2.5rem; display:flex; justify-content: center; align-items:center; font-size:1.5rem; padding: .5rem; color:#fff; background-color: var(--color4); border-radius: .3125rem;}
        /* Reverse icon direction */
        .content-04 .text-container .icon .far.fa-images {transform: rotateY(180deg);}
        .content-04 .text-container .title{font-size: 2.25rem; padding-left: 1rem;}

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
    <section class="main-news-inside">
        <div class="container">
            <!-- Special Header -->
            <div class="ss-header">
                <div class="ss">ข่</div><h1>าวประชาสัมพันธ์</h1>
                <p><strong>กรมอนามัย</strong> พร้อมให้ข้อมูลข่าวสารที่มีประโยชน์สำหรับคุณ</p>
            </div>
            <div class="grids">
                <div class="grid lg-75 md-100 sm-100">
                    <!-- Banner 02 -->
                    <div class="banner-02">
                        <div class="container">
                            <div class="img-container">
                                <div class="img-bg" style="background-image:url('./assets/img/default/banner-01.jpg');">
                                </div>
                            </div>
                            <div class="date-display">
                                <div class="wrapper">
                                    <div class="day-container">
                                        <div class="day">28</div>
                                    </div>
                                    <div class="month-year-container">
                                        <div class="month">กรกฎาคม</div>
                                        <div class="year">2563</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="content-03">
                        <div class="container">
                            <div class="ss-tags">
                                <div class="ss-tag type-1"></div>
                            </div>
                                <a class="ss-h2"><span class="color4">5 ผัก ตัวช่วยสร้างนมแม่</span></a>
                                <p>เพราะมีสารอาหารมากกว่า 200 ชนิด มีสารช่วยสร้างเซลล์สมอง เส้นใยประสาทสมอง และจอประสาทตา มีภูมิต้านทานโรค ทำให้ลูกน้อยแข็งแรง สุขภาพดี ไม่เจ็บป่วยง่าย คุณแม่ที่ให้นมลูกจึงควรกินอาหารที่มี ส่วนประกอบของผักชนิดต่างๆ ที่ช่วยเพิ่มปริมาณ น้ำนม ดังนี้</p>
                                <ul>
                                    <li><strong>หัวปลี</strong> มีธาตุเหล็กมาก ช่วยบำรุงน้ำนมได้ดี นำมาประกอบอาหาร เช่น แกงเลียง ยำหัวปลี ทอดมันหัวปลี ต้มข่าไก่ใส่หัวปลี หัวปลีชุบแป้งทอด ต้มหัวปลีจิ้มน้ำพริก</li>
                                    <li><strong>ขิง</strong> ช่วยขับเหงื่อ ขับลบ ไล่ความเย็น แก้ท้องอืด ท้องเฟ้อ ช่วยให้เจริญอาหาร ช่วยให้ร่างกายอบอุ่น นำมาประกอบอาหาร เช่น มันต้มขิง ปลาผัดขิง กระเพาะหมูผัดขิง</li>
                                    <li><strong>ใบกะเพรา</strong> มีแคลเซียมและฟอสฟอรัสสูง แก้ท้องอืด ท้องเฟ้อ ขับลบ บำรุงธาตุ เพิ่มน้ำนม นำมาประกอบอาหาร เช่น ผัดกะเพราหมู ไก่ หรือปลา ต้มจืดใบกะเพราหมูสับ</li>
                                    <li><strong>ฟักทอง</strong> อุดมไปด้วยวิตามินเอ ฟอสฟอรัส และเบต้าแคโรทีน นำมาประกอบอาหาร เช่นแกงเลียง ฟักทองนึ่ง ฟักทองผัดไข่ แกงบวดฟักทอง</li>                                        <li><strong>กุยช่าย</strong> ทั้งต้นและใบช่วยบำรุงน้ำนม นำมาประกอบอาหาร เช่น กินแนมกับผัดไทย กุยช่ายทอด ผัดกุยช่ายตับ</li>
                                </ul>
                                <p>อย่าลืมว่า หัวใจสำคัญของแม่หลังคลอด คือกินอาหารให้ครบ 5 หมู่ทุกมื้อในปริมาณ ที่เหมาะสมต่อความต้องการของร่างกายด้วยเพื่อสุขภาพที่ดีและมีน้ำนมให้ลูก เพียงพอ</p>
                        </div>
                    </div>

                    <!-- Related files -->
                    <div class="content-04">
                        <div class="text-container">
                            <div class="icon"><i class="far fa-building"></i></div>
                            <div class="title">ไฟล์ที่เกี่ยวข้อง</div>
                        </div>
                        <!-- Asset Table -->
                        <div class="table-wrapper" data-simplebar>
                            <table class="table asset-table">
                                <tbody>
                                    <tr>
                                        <td><img class="img-icon" src="./assets/img/default/pdf.png" alt="PDF" /></td>
                                        <td>ดาวน์โหลดอินโฟกราฟฟิกนี้</td>
                                        <td>15 MB</td>
                                        <td>
                                            <a href="#">
                                                <img class="img-icon" src="./assets/img/default/pdf.png" alt="PDF" />
                                            </a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    
                    <!-- Related News -->
                    <div class="content-04">
                        <div class="text-container">
                            <div class="icon"><i class="far fa-images"></i></div>
                            <div class="title">ข่าวที่เกี่ยวข้อง</div>
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
                <!-- Right banner -->
                <div class="grid lg-25 md-100 sm-100 right-banner">
                    <div class="banner-top">
                        <div class="img-container">
                            <img src="./assets/img/default/kid.png" alt="kid">
                            <div class="img-bg"></div>
                            <div class="grids">
                                <div class="grid all-100">
                                    <div class="grids">
                                        <div class="grid all-20 mt-0">
                                            <div class="icon-wrapper">
                                                <div class="icon" style="background-image:url('./assets/img/default/icon-01.jpg');"></div>
                                            </div>
                                        </div>
                                        <div class="grid all-80 mt-0">
                                            <div class="info">
                                                <div class="order">01.</div>
                                                <div class="title">ข่าวจากหน่วยงานส่วนกลาง</div>
                                                <div class="category">กรมอนามัย</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="grids">
                                        <div class="grid all-20 mt-0">
                                            <div class="icon-wrapper">
                                                <div class="icon" style="background-image:url('./assets/img/default/icon-01.jpg');"></div>
                                            </div>
                                        </div>
                                        <div class="grid all-80 mt-0">
                                            <div class="info">
                                                <div class="order">01.</div>
                                                <div class="title">ข่าวจากหน่วยงานส่วนกลาง</div>
                                                <div class="category">กรมอนามัย</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="grids">
                                        <div class="grid all-20 mt-0">
                                            <div class="icon-wrapper">
                                                <div class="icon" style="background-image:url('./assets/img/default/icon-01.jpg');"></div>
                                            </div>
                                        </div>
                                        <div class="grid all-80 mt-0">
                                            <div class="info">
                                                <div class="order">01.</div>
                                                <div class="title">ข่าวจากหน่วยงานส่วนกลาง</div>
                                                <div class="category">กรมอนามัย</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="filter"></div>
                        </div>
                    </div>
                    <div class="banner-bottom">
                        <div class="text-container">
                            <span>กรมอนามัย</span>
                            <span>เรามีสาระสุขภาพดีๆ</span>
                            <span>ส่งตรงถึงคุณ</span>
                            <span>ทุกวัน</span>
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
