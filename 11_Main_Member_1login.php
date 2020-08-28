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
            [ 'name' => 'เข้าสู่ระบบ', 'url' => '#' ]
        ];
        include_once('component/breadcrumb.php');
    ?>
    
    <div class="intro-01 lazy-bg" data-src="./assets/img/bg/16.jpg">
        <div class="container">
            <div class="ss-header color-white">
                <div class="ss">เ</div><h1>ข้าสู่ระบบ</h1>
                <p><strong class="ml-0-5">กรมอนามัย</strong> ยินดีพร้อมให้บริการประชาชนเพื่อสุขภาพที่ดี</p>
            </div>
            <img class="float-img type-2" src="./assets/img/hero/17.png" alt="Hero Float" />
        </div>   
    </div>

    <section class="section-padding contact-01 lazy-bg" data-src="./assets/img/bg/15.jpg">
        <div class="container">
            <div class="grids">

                <div class="grid xl-50 lg-50 sm-100">
                    <div class="contact-box">
                        <form action="./" method="POST">
                            <div class="ss-icon-title mt-0 mb-1">
                                <div class="icon bg-color4"><i class="fas fa-mail-bulk"></i></div>
                                <h2>เข้าสู่ระบบ</h2>
                                <p>
                                    <a class="color-black" href="#">ลืมรหัสผ่าน</a> |
                                    <a class="fw-400 color4" href="#"><u>สมัครสมาชิก</u></a>
                                </p>
                            </div>
                            <div class="grids">
                                <div class="grid sm-100 mt-0">
                                    <div class="field">
                                        <label for="email">อีเมล</label>
                                        <div class="control">
                                            <input type="email" name="email" required />
                                        </div>
                                    </div>
                                </div>
                                <div class="grid sm-100 mt-0">
                                    <div class="field">
                                        <label for="password">รหัสผ่าน</label>
                                        <div class="control">
                                            <input type="password" name="password" required />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="btns mt-1">
                                <button type="submit" class="btn btn-action btn-secondary next-icon">
                                    เข้าสู่ระบบ
                                </button>
                            </div>
                        </form>
                        <div class="sep">
                            <h4 class="text-center fw-400 no-margin">
                                หรือ
                            </h4>
                        </div>
                        <div class="social-btns">
                            <a class="btn social-btn fb" href="#">
                                <i class="fab fa-facebook-f"></i> 
                                เข้าสู่ระบบด้วย Facebook
                            </a>
                            <a class="btn social-btn gg" href="#">
                                <i class="fab fa-google"></i> 
                                เข้าสู่ระบบด้วย Google
                            </a>
                            <a class="btn social-btn ln" href="#">
                                <i class="fab fa-line"></i> 
                                เข้าสู่ระบบด้วย Line
                            </a>
                            <a class="btn social-btn tw" href="#">
                                <i class="fab fa-twitter"></i> 
                                เข้าสู่ระบบด้วย Twitter
                            </a>
                        </div>
                    </div>
                </div>

                <div class="grid xl-50 lg-50 sm-100">
                    <h2 class="color4 fw-400 mt-2">
                        ประโยชสำหรับการสมัครสมาชิก:
                    </h2>
                    <ul class="ss-list">
                        <li>
                            คอนโด หม่านโถว ไอติมชิฟฟอนอาข่าแตงกวาเซอร์ ม็อบซิ่งกรีนวีเจ 
                            เนิร์สเซอรี่เท็กซ์ไพลินไกด์ซะ อึ๋ม เพนกวินเช็งเม้งฟลุต บัตเตอร์ฮาโลวีนมายองเนสสปอร์ต 
                            เครปโดมิโนฟยอร์ดวิลล์ ชาร์ตเดอะสไตล์ ตาปรือกระดี๊กระด๊าอีสต์
                        </li>
                        <li>
                            คอนโด หม่านโถว ไอติมชิฟฟอนอาข่าแตงกวาเซอร์ ม็อบซิ่งกรีนวีเจ 
                            เนิร์สเซอรี่เท็กซ์ไพลินไกด์ซะ อึ๋ม เพนกวินเช็งเม้งฟลุต บัตเตอร์ฮาโลวีนมายองเนสสปอร์ต 
                            เครปโดมิโนฟยอร์ดวิลล์ ชาร์ตเดอะสไตล์ ตาปรือกระดี๊กระด๊าอีสต์
                        </li>
                        <li>
                            คอนโด หม่านโถว ไอติมชิฟฟอนอาข่าแตงกวาเซอร์ ม็อบซิ่งกรีนวีเจ 
                            เนิร์สเซอรี่เท็กซ์ไพลินไกด์ซะ อึ๋ม เพนกวินเช็งเม้งฟลุต บัตเตอร์ฮาโลวีนมายองเนสสปอร์ต 
                            เครปโดมิโนฟยอร์ดวิลล์ ชาร์ตเดอะสไตล์ ตาปรือกระดี๊กระด๊าอีสต์
                        </li>
                    </ul>
                    
                    <h3 class="color4 fw-400 mt-2">
                        เงื่อนไขการสมัครสมาชิก:
                    </h3>
                    <p>
                        คอนโด หม่านโถว ไอติมชิฟฟอนอาข่าแตงกวาเซอร์ ม็อบซิ่งกรีนวีเจ 
                        เนิร์สเซอรี่เท็กซ์ไพลินไกด์ซะ อึ๋ม เพนกวินเช็งเม้งฟลุต บัตเตอร์ฮาโลวีนมายองเนสสปอร์ต 
                        เครปโดมิโนฟยอร์ดวิลล์ ชาร์ตเดอะสไตล์ ตาปรือกระดี๊กระด๊าอีสต์
                    </p>
                </div>

            </div>
        </div>
    </section>

    <?php include_once('include/footer.php'); ?>
    <?php include_once('include/script.php'); ?>
</body>
</html>
