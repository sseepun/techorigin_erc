<!DOCTYPE html>
<html lang="en">
<head>
    <?php include_once('include/header.php'); ?>
    <?php include_once('include/style.php'); ?>
<style>
/* Slot */
.slot{
    position:relative; width:100%; padding:1.5rem 1.5rem 5rem 1.5rem; overflow:visible;
    border-radius:.625rem .625rem 0 0; transform:translateY(-.625rem);
}
.slot:first-child{transform:translateY(0);}
.slot:last-child{
    padding:1.5rem 1.5rem 10rem 1.5rem;
    -webkit-mask-image:linear-gradient(to bottom, #000, #000, #000, #000, #000, #000, #000, #000,
        rgba(0,0,0,.5), rgba(0,0,0,0));
}
</style>
</head>
<body>
    <?php include_once('include/topnav.php'); ?>

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

                <div class="grid sm-100 lg-30 xl-25">
                    <!-- Slot -->
                    <div class="slot" style="background:#272c30;">
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
                        <div class="ss-date">02.04.2563</div>
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
                    <div class="slot" style="background:#1d5c7d; height:600px;">

                    </div>
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
                        <div class="ss-header color-white">
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

                    <div class="ss-side-menu">
                        <a class="menu" href="#">
                            <div class="img-bg" style="background-image:url('./assets/img/default/banner-01.jpg');"></div>
                            <div class="text-container">
                                <h3>ข่าวสาร</h3>
                                <p>การจัดซื้อจัดจ้าง</p>
                            </div>
                        </a>
                        <a class="menu" href="#">
                            <div class="img-bg" style="background-image:url('./assets/img/content/01.jpg');"></div>
                            <div class="text-container text-right">
                                <p>การเปิดเผย</p>
                                <h3>ราคากลาง</h3>
                            </div>
                        </a>
                        <a class="menu" href="#">
                            <div class="img-bg" style="background-image:url('./assets/img/default/banner-01.jpg');"></div>
                            <div class="text-container">
                                <h3>แผน-ผล</h3>
                                <p>การจัดซื้อจัดจ้าง</p>
                            </div>
                        </a>
                        <a class="menu menu-lg" href="#">
                            <div class="img-bg" style="background-image:url('./assets/img/default/banner-01.jpg');"></div>
                            <div class="text-container text-right color-white">
                                <h3>ผลสรุป</h3>
                                <p>การดำเนินงานจัดซื้อจัดจ้าง</p>
                            </div>
                        </a>
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
    
    <section class="call-01" style="background-image:url('./assets/img/default/banner-01.jpg');">
        <div class="container">
            <div class="contents">
                <div class="text-container">
                    <h3 class="fw-400">ลงทะเบียนรับข้อมูลเพื่อสุขภาพ</h3>
                    <p>
                        ลงทะเบียนสำหรับบันทึกข้อมูลสุขภาพของคุณ <br>
                        <span class="text-lg fw-500">(Your Health Record)</span> 
                        แบบออนไลน์ได้ใน
                    </p>
                    <div class="ss-header ss-header-lg color-white-info">
                        <div class="ss"><i>3</i></div> 
                        <h1 class="fw-300">ขั้นตอน</h1>
                        <div class="btns">
                            <a class="btn btn-action btn-sm btn-secondary" href="#">
                                ลงทะเบียน
                            </a>
                        </div>
                    </div>
                </div>
                <img class="hero" src="./assets/img/hero/04.png" alt="Call 01 Hero" />
            </div>
        </div>
    </section>

    <section class="call-02">
        <div class="container">
            <div class="contents">
                <div class="content">
                    <a class="ss-h5 fw-400" href="#">
                        ลิงค์หน่วยงานภายในกระทรวงสาธารณสุข
                    </a>
                </div>
                <div class="content">
                    <div class="menu">
                        <div class="hamburger">
                            <div></div><div></div><div></div>
                        </div>
                        <h5 class="fw-400">
                            ลิงค์หน่วยงานภายนอกกระทรวงสาธารณสุข
                        </h5>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="client-01">
        <div class="container">
            <div class="clients">
                <?php for($i=0; $i<6; $i++){?>
                    <a class="client" href="#">
                        <img src="./assets/img/default/client-01.jpg" alt="Client 01 <?php echo $i; ?>" />
                        <div class="name">
                            ศาลปกครอง <br>
                            สาระดีดีจากศาลปกครอง
                        </div>
                    </a>
                <?php }?>
            </div>
        </div>
    </section>
    
    <?php include_once('include/footer.php'); ?>
    <?php include_once('include/script.php'); ?>
</body>
</html>
