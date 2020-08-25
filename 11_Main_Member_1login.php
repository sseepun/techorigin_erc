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
    
    <div class="section-padding bg-gradient-01">
        <div class="container">
            <div class="ss-header color-white">
                <div class="ss">เ</div><h1>ข้าสู่ระบบ</h1>
                <p><strong class="ml-1">กรมอนามัย</strong> ยินดีพร้อมให้บริการประชาชนเพื่อสุขภาพที่ดี</p>
            </div>
        </div>   
    </div>

    <section class="section-padding contact-01">
        <div class="container">
            <div class="grids">

                <div class="grid xl-50 lg-50 sm-100">
                    <div class="contact-box">
                        <form action="./" method="POST">
                            <div class="ss-icon-title mt-0 mb-1">
                                <div class="icon bg-color1"><i class="fas fa-mail-bulk"></i></div>
                                <h2>แบบฟอร์มติดต่อ</h2>
                                <p>
                                    <a class="color-black" href="#">ลืมรหัสผ่าน</a> |
                                    <a class="fw-400 color4" href="#"><u>สมัครสมาชิก</u></a>
                                </p>
                            </div>
                            <div class="grids">
                                <div class="grid sm-100 mt-0">
                                    <div class="field">
                                        <label for="firstname">ชื่อ *</label>
                                        <div class="control">
                                            <input type="text" name="firstname" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="grid sm-100 mt-0">
                                    <div class="field">
                                        <label for="lastname">นามสกุล</label>
                                        <div class="control">
                                            <input type="text" name="lastname">
                                        </div>
                                    </div>
                                </div>
                                <div class="grid sm-100 mt-0">
                                    <div class="field">
                                        <label for="phone">หมายเลขโทรศัพท์ *</label>
                                        <div class="control">
                                            <input type="text" name="phone" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="grid sm-100 mt-0">
                                    <div class="field">
                                        <label for="email">อีเมล</label>
                                        <div class="control">
                                            <input type="email" name="email">
                                        </div>
                                    </div>
                                </div>
                                <div class="grid sm-100 mt-0">
                                    <div class="field">
                                        <label for="message">ข้อความ *</label>
                                        <div class="control">
                                            <textarea name="message" rows="4" required></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="grid sm-100 mt-0">
                                    <div class="field">
                                        <div class="control checkbox-control">
                                            <input type="checkbox" name="agree" id="agree" value="1">
                                            <label for="agree">
                                                คอนโด หม่านโถว ไอติมชิฟฟอนอาข่าแตงกวาเซอร์ 
                                                ม็อบซิ่งกรีนวีเจ เนิร์สเซอรี่เท็กซ์ไพลินไกด์ซะ
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="btns mt-2">
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
