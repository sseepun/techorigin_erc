<!DOCTYPE html>
<html lang="en">
<head>
    <?php include_once('include/header.php'); ?>
    <?php include_once('include/style.php'); ?>
<style>
/* Content 02 */
.content-02 .contents{width:100%; display:flex; flex-wrap:wrap;}
.content-02 .content{width:calc(100% / 3); display:block; position:relative;}
.content-02 .content:nth-child(2){border-left:1px solid transparent; border-right:1px solid transparent;}
.content-02 .question-container .ss-header{
    padding:1rem 1.5rem 2rem 1.5rem; margin:.875rem 0 0 0; border-bottom:1px solid transparent;
}
.content-02 .question-body{padding:1rem 1.5rem 2rem 1.5rem;}
.content-02 .question{font-size:1.4375rem; font-weight:300;}
.content-02 .answers{padding:.5rem 0;}
.content-02 .info-card{padding:1rem 1.5rem 0 1.5rem; border-bottom:1px solid transparent;}
.content-02 .info-card + .btns{border-bottom:1px solid transparent; margin:0; padding:.875rem 0;}
@media screen and (max-width:991.98px){
    .content-02 .content{width:50%;}
    .content-02 .content:nth-child(2){border-right:0; border-bottom:1px solid transparent;}
    .content-02 .content:nth-child(3){width:100%;}
}
@media screen and (max-width:575.98px){
    .content-02 .content{width:100%;}
    .content-02 .content:nth-child(2){border-left:0;}
}


.content-02{
    background-image:linear-gradient(to bottom, rgba(0,0,0,0), #f1f3f2, #a8b7ba);
}
.content-02 .content{background:#fff;}
.content-02 .content:nth-child(2){border-color:#cecece;}

.content-02 .question-container{background:#1d6358;}
.content-02 .question-container .ss-header{border-color:rgba(255,255,255,.4);}
.content-02 .question-body{color:#fff;}
.content-02 .question-body .field label{color:#fff;}
.content-02 .question-body .field > .control.radio-control > label::before{border-color:#fff;}
.content-02 .question-body .field > .control.radio-control > input[type=radio]:checked + label::before{
    border-color:#c0ca67; border-color:var(--color1);
}
.content-02 .question-body .field > .control.radio-control > label::after{background:#fff;}
.content-02 .question-body .field > .control.radio-control > input[type=radio]:checked + label::after{
    background:#c0ca67; background:var(--color1);
}

.content-02 .info-card, .content-02 .info-card + .btns{border-color:#cecece;}


/* Table */
.table-wrapper{width:100%; overflow-x:auto; overflow-y:hidden; padding:.875rem 0;}
table.table{width:100%;}
table.table td{
    padding:.375rem .625rem .375rem 0; font-size:1.3125rem; font-weight:300;
    border-bottom:1px solid transparent;
}
table.table td:last-child{padding:.375rem 0 .375rem 0; text-align:right;}
table.table tbody > tr:last-child > td{border-color:transparent;}
table.table .icon{
    display:inline-block; width:1.75rem; height:1.75rem; border-radius:.25rem;
    font-size:.875rem; text-align:center; line-height:1.75rem;
}
table.table .icon::before{font-family:'Font Awesome 5 Free'; font-weight:900;}
table.table .icon.icon-download::before{content:'\f019';}
table.table .icon.icon-dot{width:.5rem; height:.5rem; border-radius:0;}
table.table .img-icon{display:inline-block; height:1.25rem; width:auto;}

table.table.asset-table td:nth-child(2){min-width:8rem;}
table.table.asset-table td:nth-child(3){min-width:3.5rem;}

@media screen and (max-width:991.98px){
    table.table td{font-size:1.25rem;}
}


table.table td{color:#000; border-color:#dddddd;}
table.table .icon.icon-download, table.table .icon.icon-dot{
    color:#fff; background:#0d838d; background:var(--color4);
}
</style>
</head>
<body>
    <?php include_once('include/topnav.php'); ?>

    <!-- Banner 01 -->
    <section class="banner-01">
        <div class="slide-container">
            <div class="slides">
                <?php for($i=0; $i<8; $i++){?>
                    <div class="slide" style="background-image:url('./assets/img/banner/01.jpg');">
                        <div class="container">
                            <h2 class="animate" style="--delay:.6s;">
                                new gen
                            </h2>
                            <h1 class="animate" style="--delay:.75s;">
                                NEW NORMAL
                            </h1>
                            <h3 class="animate" style="--delay:.9s;">
                                ปลอดภัยห่างไกล <span class="line"></span> COVID-19
                            </h3>
                        </div>
                    </div>
                <?php }?>
            </div>
            <div class="dots"></div>
        </div>
    </section>

    <!-- Content 01 -->
    <!-- <section class="content-01">
        <div class="container">
            <div class="contents">
                <?php for($i=0; $i<8; $i++){?>
                    <a class="content" href="#">
                        <div class="wrapper">
                            <div class="banner">
                                <i class="icon far fa-chart-bar"></i>
                                <div class="order"><?php echo sprintf('%02d', $i+1); ?></div>
                            </div>
                            <div class="text-container">
                                <h1>ระเบียงคุณธรรม</h1>
                            </div>
                        </div>
                    </a>
                <?php }?>
            </div>
        </div>
    </section> -->

    <section class="section-padding">
        <div class="container">

            <!-- Special Header -->
            <div class="ss-header">
                <div class="ss">ข่</div><h1>าวประชาสัมพันธ์</h1>
                <p>อัพเดททุกสาระ ข่าวสารเพื่อสุขภาพ มั่นใจไม่ตกเทรนด์</p>
            </div>

            <div class="grids">
                <div class="grid sm-100 lg-70 xl-75">

                    <!-- Tab -->
                    <div class="tab-container">
                        <div class="tabs">
                            <div class="tab active" data-tab="1">
                                <div class="icon"><i class="far fa-building"></i></div>
                                <div class="text-container">
                                    <div class="title">
                                        <span>01.</span> ข่าวจากหน่วยงานส่วนกลาง
                                    </div>
                                    <div class="desc">กรมอนามัย</div>
                                </div>
                            </div>
                            <div class="tab" data-tab="2">
                                <div class="icon"><i class="far fa-building"></i></div>
                                <div class="text-container">
                                    <div class="title">
                                        <span>02.</span> ข่าวจากหน่วยงานส่วนกลาง
                                    </div>
                                    <div class="desc">กรมอนามัย</div>
                                </div>
                            </div>
                            <div class="tab" data-tab="3">
                                <div class="icon"><i class="far fa-building"></i></div>
                                <div class="text-container">
                                    <div class="title">
                                        <span>03.</span> ข่าวจากหน่วยงานส่วนกลาง
                                    </div>
                                    <div class="desc">กรมอนามัย</div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-contents">

                            <div class="tab-content active" data-tab="1">
                                <div class="card card-lg">
                                    <a class="ss-img" href="#">
                                        <div class="img-bg" style="background-image:url('./assets/img/content/01.jpg');"></div>
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
                                        <div class="ss-tag type-2"></div>
                                    </div>
                                    <div class="ss-date">02.04.2563</div>
                                    <a class="ss-h2" href="#">
                                        กรมอนามัย แนะ <span class="color1">10 วิธีกินแบบพอเพียงช่วงโควิด 19</span>
                                        สร้างร่างกายแข็งแรง ไร้พุง
                                    </a>
                                    <p>
                                        คอนโด หม่านโถว ไอติมชิฟฟอนอาข่าแตงกวาเซอร์ ม็อบซิ่งกรีนวีเจ 
                                        เนิร์สเซอรี่เท็กซ์ไพลินไกด์ซะ อึ๋ม เพนกวินเช็งเม้งฟลุต บัตเตอร์ฮาโลวีนมายองเนสสปอร์ต 
                                        เครปโดมิโนฟยอร์ดวิลล์ ชาร์ตเดอะสไตล์ ตาปรือกระดี๊กระด๊าอีสต์ เชฟซะมาเฟียโมจิ โฟม 
                                        แชมพูแจ็กเก็ตรีเสิร์ชโบว์ลิ่ง...
                                    </p>
                                    <div class="btns">
                                        <a class="btn btn-action btn-primary next-icon" href="#">
                                            อ่านรายละเอียด
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-content" data-tab="2">
                                <div class="card card-lg">
                                    <a class="ss-img" href="#">
                                        <div class="img-bg" style="background-image:url('./assets/img/default/banner-01.jpg');"></div>
                                        <div class="tag">
                                            <div class="date">29</div>
                                            <div class="text-container">
                                                <div class="month">กรกฎาคม</div>
                                                <div class="year">2563</div>
                                            </div>
                                        </div>
                                    </a>
                                    <div class="ss-tags">
                                        <div class="ss-tag type-3"></div>
                                        <div class="ss-tag type-4"></div>
                                        <div class="ss-tag type-5"></div>
                                    </div>
                                    <div class="ss-date">02.04.2563</div>
                                    <a class="ss-h2" href="#">
                                        กรมอนามัย แนะ <span class="color1">10 วิธีกินแบบพอเพียงช่วงโควิด 19</span>
                                        สร้างร่างกายแข็งแรง ไร้พุง
                                    </a>
                                    <p>
                                        คอนโด หม่านโถว ไอติมชิฟฟอนอาข่าแตงกวาเซอร์ ม็อบซิ่งกรีนวีเจ 
                                        เนิร์สเซอรี่เท็กซ์ไพลินไกด์ซะ อึ๋ม เพนกวินเช็งเม้งฟลุต บัตเตอร์ฮาโลวีนมายองเนสสปอร์ต 
                                        เครปโดมิโนฟยอร์ดวิลล์ ชาร์ตเดอะสไตล์ ตาปรือกระดี๊กระด๊าอีสต์ เชฟซะมาเฟียโมจิ โฟม 
                                        แชมพูแจ็กเก็ตรีเสิร์ชโบว์ลิ่ง...
                                    </p>
                                    <div class="btns">
                                        <a class="btn btn-action btn-primary next-icon" href="#">
                                            อ่านรายละเอียด
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-content" data-tab="3">
                                <div class="card card-lg">
                                    <a class="ss-img" href="#">
                                        <div class="img-bg" style="background-image:url('./assets/img/default/banner-01.jpg');"></div>
                                        <div class="tag">
                                            <div class="date">30</div>
                                            <div class="text-container">
                                                <div class="month">กรกฎาคม</div>
                                                <div class="year">2563</div>
                                            </div>
                                        </div>
                                    </a>
                                    <div class="ss-tags">
                                        <div class="ss-tag type-6"></div>
                                        <div class="ss-tag type-7"></div>
                                        <div class="ss-tag type-8"></div>
                                        <div class="ss-tag type-9"></div>
                                    </div>
                                    <div class="ss-date">02.04.2563</div>
                                    <a class="ss-h2" href="#">
                                        กรมอนามัย แนะ <span class="color1">10 วิธีกินแบบพอเพียงช่วงโควิด 19</span>
                                        สร้างร่างกายแข็งแรง ไร้พุง
                                    </a>
                                    <p>
                                        คอนโด หม่านโถว ไอติมชิฟฟอนอาข่าแตงกวาเซอร์ ม็อบซิ่งกรีนวีเจ 
                                        เนิร์สเซอรี่เท็กซ์ไพลินไกด์ซะ อึ๋ม เพนกวินเช็งเม้งฟลุต บัตเตอร์ฮาโลวีนมายองเนสสปอร์ต 
                                        เครปโดมิโนฟยอร์ดวิลล์ ชาร์ตเดอะสไตล์ ตาปรือกระดี๊กระด๊าอีสต์ เชฟซะมาเฟียโมจิ โฟม 
                                        แชมพูแจ็กเก็ตรีเสิร์ชโบว์ลิ่ง...
                                    </p>
                                    <div class="btns">
                                        <a class="btn btn-action btn-primary next-icon" href="#">
                                            อ่านรายละเอียด
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Special Header -->
                    <div class="ss-header">
                        <div class="ss">อั</div><h1>พเดทข่าวสารอื่นๆ</h1>
                        <p>อัพเดททุกสาระ ข่าวสารเพื่อสุขภาพ มั่นใจไม่ตกเทรนด์</p>
                    </div>
                    
                    <!-- Cards -->
                    <div class="grids">
                        <?php for($i=0; $i<4; $i++){?>
                            <div class="grid md-25 card">
                                <div class="ss-img square">
                                    <div class="img-bg" style="background-image:url('./assets/img/content/01.jpg');"></div>
                                    <div class="socials">
                                        <ul>
                                            <li><a class="social social-fw" href="#">
                                                <i class="fab fa-facebook-f"></i>
                                            </a></li>
                                            <li><a class="social social-tw" href="#">
                                                <i class="fab fa-twitter"></i>
                                            </a></li>
                                            <li><a class="social social-ig" href="#">
                                                <i class="fab fa-instagram"></i>
                                            </a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="ss-tags">
                                    <div class="ss-tag type-6"></div>
                                </div>
                                <div class="ss-date">02.04.2563</div>
                                <a class="ss-h5" href="#">
                                    กรมอนามัย แนะ 10 วิธีกินแบบพอเพียงช่วงโควิด 19
                                    สร้างร่างกายแข็งแรง ไร้พุง
                                </a>
                                <div class="btns">
                                    <a class="btn btn-action btn-sm btn-primary next-icon" href="#">
                                        อ่านรายละเอียด
                                    </a>
                                </div>
                            </div>
                        <?php }?>
                    </div>

                    <!-- Pagination -->
                    <div class="pagination border-top border-bottom">
                        <div class="wrapper">
                            <a href="#" class="page-btn page-first disabled"></a>
                            <a href="#" class="page-btn page-prev disabled"></a>
                            <a href="#" class="page-btn active">01</a>
                            <a href="#" class="page-btn">02</a>
                            <a href="#" class="page-btn">03</a>
                            <a href="#" class="page-btn">04</a>
                            <a href="#" class="page-btn">05</a>
                            <a href="#" class="page-btn page-next"></a>
                            <a href="#" class="page-btn page-last"></a>
                            <a class="btn btn-action btn-sm btn-primary next-icon" href="#">
                                หน้าข่าวทั้งหมด
                            </a>
                        </div>
                    </div>

                </div>

                <div class="grid sm-100 lg-30 xl-25" style="background:orange;">

                </div>
            </div>

        </div>
    </section>

    <section class="content-02">
        <div class="container">
            <div class="contents">

                <div class="content">
                    <div class="ss-img square bradius-0">
                        <div class="img-bg" style="background-image:url('./assets/img/default/banner-01.jpg');"></div>
                    </div>

                    <!-- Calendar -->
                    <div class="calendar-container border-bottom">
                        <div class="calendar-wrapper"></div>
                    </div>
                    <div class="btns text-center">
                        <a class="btn btn-action btn-primary next-icon" href="#">
                            หน้าปฏิทินทั้งหมด
                        </a>
                    </div>

                    <div class="question-container">
                        <div class="ss-header white">
                            <div class="ss">ร่</div><h1>วมแสดงความคิดเห็น</h1>
                        </div>
                        <div class="question-body">
                            <div class="question">
                                แบบสำรวจความพึงพอใจต่อเว็บไซต์กรมอนามัยในรูปแบบใหม่ ปี 2563
                            </div>
                            <div class="answers">
                                <div class="field">
                                    <div class="control radio-control">
                                        <input type="radio" name="q_1" id="q_1_1">
                                        <label for="q_1_1">มากที่สุด</label>
                                    </div>
                                </div>
                                <div class="field">
                                    <div class="control radio-control">
                                        <input type="radio" name="q_1" id="q_1_2">
                                        <label for="q_1_2">มาก</label>
                                    </div>
                                </div>
                                <div class="field">
                                    <div class="control radio-control">
                                        <input type="radio" name="q_1" id="q_1_3">
                                        <label for="q_1_3">ปานกลาง</label>
                                    </div>
                                </div>
                                <div class="field">
                                    <div class="control radio-control">
                                        <input type="radio" name="q_1" id="q_1_4">
                                        <label for="q_1_4">น้อย</label>
                                    </div>
                                </div>
                            </div>
                            <div class="btns text-center">
                                <a class="btn btn-action btn-sm btn-primary next-icon" href="#">
                                    ส่งผลโหวต
                                </a>
                                <a class="btn btn-action btn-sm btn-secondary next-icon" href="#">
                                    ดูผลโหวต
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="content">
                    <div class="ss-img vertical bradius-0">
                        <div class="img-bg" style="background-image:url('./assets/img/default/banner-01.jpg');"></div>
                    </div>
                    <div class="info-card">
                        <div class="ss-tags">
                            <div class="ss-tag type-1"></div>
                        </div>
                        <div class="ss-date">02.04.2563</div>
                        <a class="ss-h3" href="#">
                            เปิดกระเป๋านักเรียนหนูๆ ควรมีอะไรบ้าง
                        </a>
                        <p>
                            คอนโด หม่านโถว ไอติมชิฟฟอนอาข่าแตงกวาเซอร์ ม็อบซิ่งกรีนวีเจ 
                            เนิร์สเซอรี่เท็กซ์ไพลินไกด์ซะ อึ๋ม เพนกวินเช็งเม้งฟลุต บัตเตอร์ฮาโลวีนมายองเนสสปอร์ต 
                            เครปโดมิโนฟยอร์ดวิลล์ ชาร์ตเดอะสไตล์ ตาปรือกระดี๊กระด๊าอีสต์ เชฟซะมาเฟียโมจิ โฟม 
                            แชมพูแจ็กเก็ตรีเสิร์ชโบว์ลิ่ง...
                        </p>

                        <!-- Asset Table -->
                        <div class="table-wrapper" data-simplebar>
                            <table class="table asset-table">
                                <tbody>
                                    <tr>
                                        <td><div class="icon icon-download"></div></td>
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
                    <div class="btns text-center">
                        <a class="btn btn-action btn-primary next-icon" href="#">
                            อ่านรายละเอียด
                        </a>
                    </div>
                </div>

                <div class="content">
                    <div class="info-card">
                        <div class="ss-date">02.04.2563</div>
                        <a class="ss-h4" href="#">
                            ประกาศประกวดราคาจ้างทำชุดของรางวัลก้าวท้าใจ ต้านภัย COVID-19 
                            ด้วยวิธีอิเล็กทรอนิกส์ <strong>(e-bidding)</strong>
                        </a>
                        <div class="table-wrapper" data-simplebar>
                            <table class="table asset-table">
                                <tbody>
                                    <?php for($i=0; $i<3; $i++){?>
                                        <tr>
                                            <td><div class="icon icon-dot"></div></td>
                                            <td>ดาวน์โหลดอินโฟกราฟฟิกนี้</td>
                                            <td>15 MB</td>
                                            <td>
                                                <a href="#">
                                                    <img class="img-icon" src="./assets/img/default/pdf.png" alt="PDF" />
                                                </a>
                                            </td>
                                        </tr>
                                    <?php }?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="info-card">
                        <div class="ss-date">02.04.2563</div>
                        <a class="ss-h4" href="#">
                            ประกาศประกวดราคาจ้างทำชุดของรางวัลก้าวท้าใจ ต้านภัย COVID-19 
                            ด้วยวิธีอิเล็กทรอนิกส์ <strong>(e-bidding)</strong>
                        </a>
                        <div class="table-wrapper" data-simplebar>
                            <table class="table asset-table">
                                <tbody>
                                    <?php for($i=0; $i<3; $i++){?>
                                        <tr>
                                            <td><div class="icon icon-dot"></div></td>
                                            <td>ดาวน์โหลดอินโฟกราฟฟิกนี้</td>
                                            <td>15 MB</td>
                                            <td>
                                                <a href="#">
                                                    <img class="img-icon" src="./assets/img/default/pdf.png" alt="PDF" />
                                                </a>
                                            </td>
                                        </tr>
                                    <?php }?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="btns text-center">
                        <a class="btn btn-action btn-primary next-icon" href="#">
                            ผลสรุปการดำเนินการจัดซื้อจัดจ้างทั้งหมด
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </section>
    
    <?php include_once('include/footer.php'); ?>
    <?php include_once('include/script.php'); ?>
</body>
</html>
