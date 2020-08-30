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
            [ 'name' => 'สมัครสมาชิก', 'url' => '#' ]
        ];
        include_once('component/breadcrumb.php');
    ?>
    
    <div class="intro-01 lazy-bg" data-src="./assets/img/bg/17.jpg">
        <div class="container">
            <div class="ss-header color-white">
                <div class="ss">ล</div><h1>งทะเบียนสมัครสมาชิก</h1>
                <p><strong>กรมอนามัย</strong> ยินดีพร้อมให้บริการประชาชนเพื่อสุขภาพที่ดี</p>
            </div>
            <img class="float-img type-2" src="./assets/img/hero/18.png" alt="Hero Float" />
        </div>   
    </div>

    <section class="section-padding contact-01 lazy-bg" data-src="./assets/img/bg/15.jpg">
        <div class="container">
            <div class="grids">

                <div class="grid xl-50 lg-50 sm-100">
                    <div class="contact-box">
                        <form action="./" method="POST">
                            <div class="ss-icon-title mt-0 mb-1">
                                <div class="icon bg-color1"><i class="fas fa-mail-bulk"></i></div>
                                <h2>สมัครสมาชิก</h2>
                                <p>
                                    เป็นสมาชิกแล้ว? 
                                    <a href="#" class="fw-400 color4"><u>เข้าสู่ระบบ</u></a>
                                </p>
                            </div>
                            <div class="grids">
                                <div class="grid sm-100 mt-0">
                                    <div class="field">
                                        <label for="firstname">ชื่อ *</label>
                                        <div class="control">
                                            <input type="text" name="firstname" required />
                                        </div>
                                    </div>
                                </div>
                                <div class="grid sm-100 mt-0">
                                    <div class="field">
                                        <label for="lastname">นามสกุล</label>
                                        <div class="control">
                                            <input type="text" name="lastname" />
                                        </div>
                                    </div>
                                </div>
                                <div class="grid sm-100 mt-0">
                                    <div class="field">
                                        <label for="email">อีเมล *</label>
                                        <div class="control">
                                            <input type="email" name="email" required />
                                        </div>
                                    </div>
                                </div>
                                <div class="grid sm-100 mt-0">
                                    <div class="field">
                                        <label for="email">รหัสผ่าน *</label>
                                        <div class="control">
                                            <input type="password" name="password" required />
                                        </div>
                                        <div class="password-indicator level-3">
                                            <div class="levels">
                                                <div class="level"></div>
                                                <div class="level"></div>
                                                <div class="level"></div>
                                                <div class="level"></div>
                                            </div>
                                            <h5 class="mt-0">
                                                ระดับความยากของรหัสผ่าน : 
                                                <span class="level-text"></span>
                                            </h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="grid sm-100 mt-0">
                                    <div class="field">
                                        <label for="email">ยืนยันรหัสผ่าน *</label>
                                        <div class="control">
                                            <input type="password" name="conf_password" required />
                                        </div>
                                    </div>
                                </div>
                                <div class="grid sm-100 mt-0">
                                    <div class="field">
                                        <div class="control checkbox-control">
                                            <input type="checkbox" name="agree" id="agree" value="1">
                                            <label for="agree">
                                                ข้าพเจ้ายอมรับ และได้อ่านข้อความในข้อตกลงและเงื่อนไขนี้
                                                เข้าใจโดยละเอียดแล้ว
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="captcha-container">
                                <img class="lazy-img" data-src="./assets/img/default/captcha.png" alt="CAPTCHA" />
                            </div>
                            <div class="btns mt-1">
                                <button type="submit" class="btn btn-action btn-secondary next-icon">
                                    ส่องข้อความ
                                </button>
                                <a class="btn btn-action btn-primary" href="#">
                                    ล้างข้อมูล
                                </a>
                            </div>
                        </form>
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
