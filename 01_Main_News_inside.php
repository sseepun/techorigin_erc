<!DOCTYPE html>
<html lang="en">
<head>
    <?php include_once('include/header.php'); ?>
    <?php include_once('include/style.php'); ?>
    <style>
        /* Banner 02 */
        .banner-02 .container {width: inherit; position:relative;}
        .banner-02 .img-container {position:relative; width:100%; height:100%; padding: 50% 0 0 0;}
        .banner-02 .img-container .img-bg{border-radius: 10px; position:absolute; top:0; bottom:0; left:0; right:0; background-position:center; background-size:cover;}
        .banner-02 .date{background-color: #1e6b65; border-radius:50%;position:absolute;top:10%;
            left: -2.8125rem;
            height:5.625rem;
            width:5.625rem; 
            -webkit-box-shadow: 0.3125rem 0.3125rem 1.1875rem 0rem rgba(156, 156, 156, 1);
            -moz-box-shadow: 0.3125rem 0.3125rem 1.1875rem 0rem rgba(156, 156, 156, 1);
            box-shadow: 0.3125rem 0.3125rem 1.1875rem 0rem rgba(156, 156, 156, 1);}
        .banner-02 .date .inset{
            -webkit-box-shadow:inset 0.3125rem 0.3125rem 1.1875rem 0rem rgba(11, 61, 55, 1);
            -moz-box-shadow: inset 0.3125rem 0.3125rem 1.1875rem 0rem rgba(11, 61, 55, 1);
            box-shadow: inset 0.3125rem 0.3125rem 1.1875rem 0rem rgba(11,61, 55, 1);
            position:absolute; width:100%; height:100%; border-radius:50%; 
        }
        .banner-02 .date .date-display {position:absolute; color:#fff; text-align:center; top: 5%; left:25%;}
        .banner-02 .date .date-display .separator {width: 100%; height: 0.03125rem; background: linear-gradient(to right, rgba(255, 255, 255, 0),rgba(255, 255,255, 0.7),rgba(255, 255,255, 0.7), rgba(255, 255,255, 0.7), rgba(255, 255,255, 0.7),rgba(255, 255,255, 0.7),rgba(255, 255, 255, 0));}
        .banner-02 .date .date-display .day {font-size: 200%; font-weight: bold;}
        .banner-02 .date .date-display .month {padding-top: 0.25rem;}
        .banner-02 .date .date-display .year {font-weight:bold;}
        /* date responsive */
        @media screen and (min-width: 1200px) {
            .banner-02 .date {transform: scale(1);}
        }
        @media screen and (max-width: 1199.98px) and (min-width: 768px) {
            .banner-02 .date {transform: scale(0.75);}
        }
        @media screen and (max-width: 767.98px){
            .banner-02 .date {transform: scale(0.6);}
        }
    </style>
</head>
<body>
    <?php include_once('include/topnav.php'); ?> 
    <section class="main-news-inside">
        <div class="container">
            <div class="grids">
                <section class="grid lg-75">
                    <!-- Banner 02 -->
                    <section class="banner-02">
                        <div class="container">
                            <div class="img-container">
                                <div class="img-bg" style="background-image:url('./assets/img/default/banner-01.jpg');">
                                </div>
                            </div>
                            <div class="date">
                                <div class="inset"></div>
                                <div class="date-display">
                                    <div class="day">8</div>
                                    <div class="separator"></div>
                                    <div class="month">กรกฎาคม</div>
                                    <div class="year">2563</div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section class="content-03">
                        <div class="container">
                            <div class="title">
                                <h3>
                                    รมอนามัย เตือนขับรถทางไกลดื่มกาแฟเกิน <span>4 แก้วต่อวันเสี่ยงหัวใจเต้นเร็ว</span> <br>
                                    มือสั่น ใจสั่นแนะคุมปริมาณแต่พอดี
                                </h3>
                            </div>
                            <div class="text-container">
                                <p>กรมอนามัย กระทรวงสาธารณสุข แนะคนขับรถทางไกลดื่มกาแฟมากไปเกิน 4 แก้วต่อวัน หวั่นคาเฟอีน
                                    เกินปริมาณที่ร่างกายต้องการ เสี่ยงทำให้หัวใจเต้นเร็ว มือสั่น ใจสั่น แนะดื่มปริมาณพอสมควรเพื่อสร้างความตื่นตัว
                                    พร้อมย้ำเครื่องดื่มชูกำลังควรเลี่ยงเช่นกัน เปลี่ยนเป็นดื่มน้ำสะอาดให้เพีนงพอ หรือกินผลไม้หรือดื่มน้ำผลไม้เปรี้ยว
                                    ให้วิตามินซีแทนจะดีกว่า
                                </p>
                                <p>
                                    แพทย์หญิงอัมพร เบญจพลพิทักษ์ รองอธิบดีกรมอนามัยและโฆษกกระทรวงสาธารณสุข เปิดเผยว่า ช่วงเทศกาลสงกรานต์
                                    ประชาชนส่วนใหญ่จะเดินทางกลับภูมิลำเนาหรือท่องเที่ยวต่างจังหวัด ซึ่งระหว่างการเดินทางผู้ขับรถอาจมีอาการง่วงและเหนื่อยล้า
                                    อ่อนเพลียผู้ขับรถบางรายจึงใช้วิธีการดื่มกาแฟซึ่งมีสารคาเฟอีนเพื่อกระตุ้นให้ร่างกายตื่นตัว แต่การดื่มกาแฟหากดื่มมากกว่า
                                    4 แก้วต่อวันจะทำให้ร่างกายได้รับคาเฟอีนมากถึง 500 - 1000 มิลลิกรัม ทั้ง ๆ ที่โดยปกติร่างกายควรได้รับคาเฟอีนไม่เกิน
                                    400 มิลลิกรมต่อวันเท่านั้น จึงอาจส่งผลให้อาการหัวใจเต้นเร็ว มือสั่น ใจสั่น และยังส่งผลต่อระบบทางเดินปัสสาวะด้วย
                                    เพราะเมื่อดื่มกาแฟไปแล้วประมาณ 30 นาทีถึง 1 ชั่วโมง คาเฟอีนจะออกฤทธิ์และภายในระยะเวลา 4 ชั่วโมงสารคาเฟอีนกว่าครึ่ง
                                    จะถูกขับออกมาพร้อมกับปัสสาวะที่เพิ่มมากขึ้น
                                </p>
                            </div>
                        </div>
                    </section>


                </section>
                <section class="grid lg-25">
                </section>
            </div>
        </div>
    
    </section>
    <?php include_once('include/script.php'); ?>
</body>
</html>
