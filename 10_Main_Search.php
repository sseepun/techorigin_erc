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
            [ 'name' => 'ผลการค้นหา', 'url' => '#' ]
        ];
        include_once('component/breadcrumb.php');
    ?>

    <section class="section-padding">
        <div class="container">
            <div class="ss-header">
                <div class="ss">ผ</div><h1 class="color2">ลการค้นหา</h1>
                <p><strong>กรมอนามัย</strong> พร้อมให้ข้อมูลข่าวสารที่เป็นประโยชน์สำหรับคุณ</p>
            </div>
            <div class="grids">

                <div class="grid xl-75 lg-70 md-100 sm-100">
                    <h3 class="mt-0">
                        <span class="text-xl fw-400 color4">
                            “สุขภาพดี”
                        </span>
                        ผลลัพธ์การค้นหา 
                        <span class="fw-400 color4">28</span> 
                        รายการ
                    </h3>

                    <form action="./" method="GET">
                        <div class="field">
                            <div class="control search-control">
                                <input type="text" required />
                                <div class="btns">
                                    <div class="btn-clear">
                                        <i class="fas fa-times"></i>
                                    </div>
                                    <input type="submit" class="btn btn-action btn-secondary" value="ค้นหา" />
                                </div>
                            </div>
                            <div class="ss-tags">
                                <div class="ss-tag type-1 closable"></div>
                                <div class="ss-tag type-2 closable"></div>
                                <div class="ss-tag type-3 closable"></div>
                                <div class="ss-tag type-4 closable"></div>
                            </div>
                        </div>
                        <div class="toggle-box mt-1-5">
                            <div class="toggle-title">
                                <h2 class="fw-400 color4">ค้นหาขั้นสูง</h2>
                            </div>
                            <div class="toggle-content">
                                <div class="list-header">
                                    <div class="block">
                                        <div class="text-wrapper">
                                            ช่วงเวลา 
                                            <input type="text" name="start_date" class="date-picker" 
                                            autocomplete="off" style="width:6rem;" /> 
                                            - 
                                            <input type="text" name="end_date" class="date-picker" 
                                            autocomplete="off" style="width:6rem;" />
                                        </div>
                                    </div>
                                    <div class="block">
                                        <div class="text-wrapper">
                                            เรียงลำดับข้อมูล 
                                            <select class="order">
                                                <option value="newest">ที่มาใหม่</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="field">
                                    <label for="">ประเภทข้อมูล</label>
                                    <div class="control-flex">
                                        <?php for($i=0; $i<9; $i++){?>
                                            <div class="control checkbox-control">
                                                <input type="checkbox" name="types[]" id="type_<?php echo $i; ?>" value="<?php echo $i; ?>">
                                                <label for="type_<?php echo $i; ?>">ข่าวประชาสัมพันธ์</label>
                                            </div>
                                        <?php }?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>

                    <?php for($i=0; $i<10; $i++){?>
                        <div class="ss-card pt-1-5 pb-1-5 border-bottom">
                            <div class="grids">
                                <div class="grid sm-40 md-30 lg-20 mt-0">
                                    <div class="ss-img square">
                                        <div class="img-bg lazy-bg" data-src="./assets/img/content/01.jpg"></div>
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
                                </div>
                                <div class="grid sm-60 md-50 lg-60 sm-mt-0 md-mt-0 lg-mt-0 xl-mt-0">
                                    <a class="mt-0 ss-h4 fw-400" href="#">
                                        7 สัปดาห์ สุขภาพดี หุ่นดี ที่บ้าน
                                    </a>
                                    <p class="mt-0-5">
                                        คอนโด หม่านโถว ไอติมชิฟฟอนอาข่าแตงกวาเซอร์ ม็อบซิ่งกรีนวีเจ 
                                        เนิร์สเซอรี่เท็กซ์ไพลินไกด์ซะ อึ๋ม เพนกวินเช็งเม้งฟลุต บัตเตอร์ฮาโลวีนมายองเนสสปอร์ต 
                                        เครปโดมิโนฟยอร์ดวิลล์ ชาร์ตเดอะสไตล์ ตาปรือกระดี๊กระด๊าอีสต์
                                    </p>
                                    <div class="btns">
                                        <a class="btn btn-action btn-sm btn-primary next-icon" href="#">
                                            รายละเอียด
                                        </a>
                                    </div>
                                </div>
                                <div class="grid sm-100 md-20 lg-20 md-mt-0 lg-mt-0 xl-mt-0">
                                    <div class="info-block">
                                        <p class="mt-0"><strong>ประเภท</strong></p>
                                        <div class="ss-tags">
                                            <div class="ss-tag type-<?php echo $i+1; ?>"></div>
                                        </div>
                                        <div class="content-stat content-stat-side">
                                            <div class="block">
                                                <div class="stat">
                                                    <div class="icon"><i class="fas fa-clock"></i></div>
                                                    27.03.2563
                                                </div>
                                                <div class="stat">
                                                    <div class="icon"><i class="fas fa-eye"></i></div>
                                                    202
                                                </div>
                                            </div>
                                        </div>
                                    </div>  
                                </div>
                            </div>
                        </div>
                    <?php }?>
                    <?php $listFooterNoBorder = true; include_once('component/list-footer.php'); ?>
                </div>

                <div class="grid xl-25 lg-30 md-100 sm-100" data-aos="fade-up" data-aos-delay="600">
                    <div class="slots no-mask lazy-bg" data-src="./assets/img/bg/09.jpg">
                        <img class="float-img type-5" src="./assets/img/hero/13.png" alt="Slot Float Image 01" />
                        <div class="slot">
                            <h2 class="header-text quote-text">
                                <span class="text-lg fw-400">สุขภาพดี</span> <br>
                                ส่งเสริม <br>
                                <span class="text-lg fw-400 color2">สถาบันครอบครัว</span> <br>
                                <span class="text-xl">แข็งแรง</span>
                            </h2>
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