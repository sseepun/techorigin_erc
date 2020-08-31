<!DOCTYPE html>
<html lang="th">
<head>
    <?php include_once('include/header.php'); ?>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/suneditor@latest/dist/css/suneditor.min.css" />
    <?php include_once('include/style.php'); ?>
<style>
</style>
</head>
<body>
    <?php include_once('include/topnav.php'); ?>
    <?php
        $breadcrumb = [
            [ 'name' => 'หน้าแรก', 'url' => './' ],
            [ 'name' => 'ร้องเรียน', 'url' => '#' ]
        ];
        include_once('component/breadcrumb.php');
    ?>
    <section class="section-padding">
        <div class="container">
            <div class="ss-header" data-aos="fade-up" data-aos-delay="0">
                <div class="ss">ข้</div><h1 class="color2">อมูลของฉัน</h1>
                <p><strong>ระบบจัดการ</strong> เกี่ยวกับการใช้งาน จัดการเนื้อหา และข้อมูล</p>
            </div>
            <div class="grids md-fw-wrap-r sm-fw-wrap-r xs-fw-wrap-r">

                <div class="grid xl-25 lg-30 md-100 sm-100" data-aos="fade-up" data-aos-delay="600">
                    <div class="slots no-mask lazy-bg" data-src="./assets/img/bg/25.jpg">
                        <img class="float-img type-12" src="./assets/img/hero/26.png" alt="Slot Float Image 01" />
                        <div class="slot-tabs">
                            <?php for($i=0; $i<2; $i++){?>
                                <a class="slot-tab" href="#">
                                    <h5 class="mt-0 color-white">
                                        0<?php echo "$i"; ?>. <br>
                                        ข่าวจากหน่วยงานส่วนกลาง
                                    </h5>
                                </a>
                            <?php }?>
                        </div>
                        <div class="slot">
                            <h2 class="header-text quote-text">
                                <span class="text-sm">สายด่วนกรมอนามัย</span> <br>
                                <span class="text-xl fw-400 color1">0-2590-4000</span>
                            </h2>
                        </div>
                    </div>
                </div>

                <div class="grid xl-75 lg-70 sm-100">
                    <div class="contact-box">
                        <form action="./" method="POST">
                            <div class="ss-icon-title mt-0 mb-1">
                                <div class="icon bg-color1"><i class="fas fa-mail-bulk"></i></div>
                                <h2>แบบฟอร์มแจ้งปัญหา</h2>
                            </div>
                            <div class="grids">
                                <div class="grid md-50 sm-100 mt-0">
                                    <div class="field">
                                        <label for="firstname">ชื่อ *</label>
                                        <div class="control">
                                            <input type="text" name="firstname" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="grid md-50 sm-100 mt-0">
                                    <div class="field">
                                        <label for="lastname">นามสกุล *</label>
                                        <div class="control">
                                            <input type="text" name="lastname">
                                        </div>
                                    </div>
                                </div>
                                <div class="grid md-50 sm-100 mt-0">
                                    <div class="field">
                                        <label for="phone">หมายเลขโทรศัพท์</label>
                                        <div class="control">
                                            <input type="text" name="phone" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="grid md-50 sm-100 mt-0">
                                    <div class="field">
                                        <label for="email">อีเมล *</label>
                                        <div class="control">
                                            <input type="email" name="email">
                                        </div>
                                    </div>
                                </div>
                                <div class="grid sm-100 mt-0">
                                    <div class="field">
                                        <label for="topic">หัวข้อเรื่อง *</label>
                                        <div class="control">
                                            <input type="text" name="topic">
                                        </div>
                                    </div>
                                </div>
                                <div class="grid sm-100 mt-0">
                                    <div class="field">
                                        <label for="message">ข้อความ</label>
                                        <div class="control">
                                            <textarea name="content" id="content" rows="10"></textarea>
                                        </div>
                                    </div>
                                </div>

                                <div class="grid sm-100 mt-0">
                                    <div class="field">
                                        <div class="control file-control">
                                            <div class="file-upload d-flex ai-center jc-space-evenly fw-wrap">
                                                <div class="upload-info">
                                                    <h4 class="no-margin">ลากหรือวางไฟล์ไว้ที่นี่</h4>
                                                    <p class="no-margin">
                                                        ชนิดไฟล์ที่อนุญาติ .jpg .jpeg .png .zip .rar 
                                                        ไฟล์ทั้งหมดรวมกันไม่เกิน 5 MB
                                                    </p>
                                                </div>
                                                <div class="btns width-auto">
                                                    <div class="btn btn-action btn-success">
                                                        เพิ่มไฟล์
                                                    </div>
                                                </div>
                                            </div>
                                            <input type="file" name="file" />
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="table-wrapper" data-simplebar>
                                    <table class="table download-table">
                                        <tbody>
                                            <tr>
                                                <td class="no-margin pl-0" style="width:4rem;">
                                                    <div class="file-icon pdf"></div>
                                                </td>
                                                <td class="text-left">
                                                    <h4 class="no-margin">ไฟล์ภาพเอกสาร.png</h4>
                                                    <span class="text-sm">ขนาดไฟล์ 0.5 KB</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="no-margin pl-0" style="width:4rem;">
                                                    <div class="file-icon docx"></div>
                                                </td>
                                                <td class="text-left">
                                                    <h4 class="no-margin">ไฟล์ภาพเอกสาร.png</h4>
                                                    <span class="text-sm">ขนาดไฟล์ 0.5 KB</span>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>

                            </div>

                            <div class="d-flex ai-center jc-space-between fw-wrap mb-1">
                                <div class="captcha-container">
                                    <img class="lazy-img" data-src="./assets/img/default/captcha.png" alt="CAPTCHA" />
                                </div>
                                <div class="btns width-auto">
                                    <button type="submit" class="btn btn-action btn-secondary next-icon">
                                        ส่งเรื่องร้องเรียน
                                    </button>
                                    <a class="btn btn-action btn-primary" href="#">
                                        ล้างข้อมูล
                                    </a>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>

            </div>
        </div>
    </section>
       
    <?php include_once('include/footer.php'); ?>
    <?php include_once('include/script.php'); ?>
    <script src="https://cdn.jsdelivr.net/npm/suneditor@latest/dist/suneditor.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/suneditor@latest/src/lang/ko.js"></script>
    <script>
        var editor = SUNEDITOR.create(document.getElementById('content'), {});
    </script>
</body>
</html>
