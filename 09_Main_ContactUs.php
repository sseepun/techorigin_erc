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
            [ 'name' => 'ติดต่อกรม', 'url' => '#' ]
        ];
        include_once('component/breadcrumb.php');
    ?>
    
    <div class="section-padding bg-gradient-01">
        <div class="container">
            <div class="ss-header color-white">
                <div class="ss">ติ</div><h1>ดต่อกรม</h1>
                <p><strong>กรมอนามัย</strong> ยินดีพร้อมให้บริการประชาชนเพื่อสุขภาพที่ดี</p>
            </div>
        </div>   
    </div>

    <section class="section-padding contact-01">
        <div class="container">
            <div class="grids">

                <div class="grid xl-50 lg-60 sm-100">
                    <h2 class="color4 fw-400">
                        กรมอนามัย กระทรวงสาธารณสุข
                    </h2>
                    <table>
                        <tr>
                            <td>ที่อยู่</td>
                            <td>88/22 ม.44 ต.ตลาดขวัญ ถ.ติวานนท์ อ.เมือง จ.นนทบุรี 11000</td>
                        </tr>
                        <tr>
                            <td>เวลาทำการ</td>
                            <td>
                                วันจันทร์ - วันศุกร์ เวลา 8:30 - 16:30 <br>
                                ปิดทำการ เสาร์-อาทิตย์ และวันหยุดนักขัตฤกษ์
                            </td>
                        </tr>
                    </table>
                    <div class="contact-tabs">
                        <div class="contact-tab">
                            <div class="icon bg-color0"><i class="fas fa-phone-alt color1"></i></div>
                            <div class="text-container">
                                <h5 class="no-margin">โทรศัพท์</h5>
                                <h5 class="color4 fw-600 no-margin">0-2590-4000</h5>
                            </div>
                        </div>
                        <div class="contact-tab">
                            <div class="icon bg-color0"><i class="fas fa-fax color1"></i></div>
                            <div class="text-container">
                                <h5 class="no-margin">โทรสาร</h5>
                                <h5 class="color4 fw-600 no-margin">0-2590-4094</h5>
                            </div>
                        </div>
                        <div class="contact-tab">
                            <div class="icon bg-color0"><i class="far fa-envelope color1"></i></div>
                            <div class="text-container">
                                <h5 class="no-margin">อีเมล์</h5>
                                <h5 class="color4 fw-600 no-margin">
                                    mailmaster@ <br>
                                    anamai.mail.go.th
                                </h5>
                            </div>
                        </div>
                    </div>
                    <div class="map-container">
                        <div class="map-wrapper">
                            <img class="lazy-img" data-src="./assets/img/default/banner-01.jpg" alt="Contact 01 Map" />
                        </div>
                    </div>
                </div>

                <div class="grid xl-50 lg-40 sm-100">
                    <div class="contact-box">
                        <form action="./" method="POST">
                            <div class="ss-icon-title mt-0 mb-1">
                                <div class="icon bg-color1"><i class="fas fa-mail-bulk"></i></div>
                                <h2>แบบฟอร์มติดต่อ</h2>
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
                            </div>
                            <div class="btns">
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

            </div>
        </div>
    </section>

    <?php include_once('include/footer.php'); ?>
    <?php include_once('include/script.php'); ?>
</body>
</html>
