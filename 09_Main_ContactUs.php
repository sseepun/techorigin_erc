<!DOCTYPE html>
<html lang="th">
<head>
    <?php include_once('include/header.php'); ?>
    <?php include_once('include/style.php'); ?>
    <style>
        .banner-06 {padding: 2rem 0; background: linear-gradient(to right, rgba(152,146,52,1) 0%, rgba(33,77,54,1) 35%, rgba(33,78,84,1) 100%);}
        .main-contact .separator {width:100%; height:.0625rem; background:#e7e7e7; margin:.75rem 0;}
        /* Table */
        .main-contact table{font-size:120%;}
        .main-contact td:first-child {vertical-align:top; font-weight: 600; min-width:5rem;}
        .main-contact td {font-weight:400;}
        /* contact tabs */
        .contact-tabs .wrapper {display:flex; flex-wrap:wrap;}
        .contact-tabs .icon {width:2.5rem; justify-content:center; align-items:center; display:flex;}
        .contact-tabs .icon i { padding:.5rem; border-radius:50%; }
        .contact-tabs .text-container {padding-left:.5rem;}
        .contact-tabs .text-container .title{font-size:120%;}
        .contact-tabs .text-container .desc{font-size:150%; font-weight:600;}
        @media screen and (max-width:576px){
            .contact-tabs .grids > .grid {margin-top:0;}
        }
        .main-contact .map-container {padding-top:2rem;}
        .main-contact .map-container > .img-bg{padding:60% 0 0 0; border-radius: .625rem;}
        .form-01 .wrapper {padding: 1.5rem; background: linear-gradient(to bottom, rgba(255, 255, 255, 1), rgba(255, 255, 255, 1), rgba(255, 255, 255, 1), rgba(255, 255, 255, 0));
            -webkit-box-shadow: 0px 5px 20px 0px rgba(0,0,0,0.4);
            -moz-box-shadow: 0px 5px 20px 0px rgba(0,0,0,0.4);
            box-shadow: 0px 5px 20px 0px rgba(0,0,0,0.4);}
        .form-01 .text-container {display:flex; flex-wrap:wrap;}
        .form-01 .text-container .icon {width:2.5rem; height:2.5rem; display:flex; justify-content: center; align-items:center; font-size:1.5rem; padding: .5rem; color:#fff; border-radius: .3125rem;}
        .form-01 .text-container .title{font-size: 2.25rem; padding-left: 1rem;}
        .form-01 .form-control{display:flex; flex-wrap:wrap; padding-top:.5rem;}
        .form-01 .form-control label { width:100%; font-size:120%;}
        .form-01 .form-control input {width:100%; border:none; background:#e7e7e7; min-height:2rem; padding: .25rem 0 .25rem .25rem; margin-top:.25rem;-webkit-box-shadow: inset 0px 0px 3px 1px rgba(0,0,0,0.1);
            -moz-box-shadow: inset 0px 0px 3px 1px rgba(0,0,0,0.1);
            box-shadow: inset 0px 0px 3px 1px rgba(0,0,0,0.1);}
        .form-01 .form-control input:focus, .form-01 .form-control textarea:focus{ border: .0625rem solid #0d838d;}
        .form-01 .form-control textarea{min-height:5rem; border:none; width:100%; background:#e7e7e7;-webkit-box-shadow: inset 0px 0px 3px 1px rgba(0,0,0,0.1);
            -moz-box-shadow: inset 0px 0px 3px 1px rgba(0,0,0,0.1);
            box-shadow: inset 0px 0px 3px 1px rgba(0,0,0,0.1);resize:none;}
</style>
</head>
<body>
    <?php include_once('include/topnav.php'); ?> 
    <section class="main-contact">
        <div class="banner-06">
            <div class="container">
                 <!-- Special Header -->
                 <div class="ss-header color-white">
                    <div class="ss">ติ</div><h1>ดต่อกรม</h1>
                    <p><strong>กรมอนามัย</strong> ยินดีพร้อมให้บริการประชาชนเพื่อสุขภาพที่ดี</p>
                </div>
            </div>   
        </div>
        <div class="container">
            <div class="grids">
                <div class="grid lg-50 md-100 sm-100">
                    <h2 class="color3">กรมอนามัย กระทรวงสาธารณสุข</h2>
                    <table>
                        <tr>
                            <td>ที่อยู่</td>
                            <td>88/22 ม.44 ต.ตลาดขวัญ ถ.ติวานนท์ อ.เมือง จ.นนทบุรี 11000</td>
                        </tr>
                        <tr>
                            <td>เวลาทำการ</td>
                            <td>วันจันทร์ - วันศุกร์ เวลา 8:30 - 16:30 <br>ปิดทำการ เสาร์-อาทิตย์ และวันหยุดนักขัตฤกษ์</td>
                        </tr>
                    </table>
                    <div class="separator"></div>
                    <div class="contact-tabs">
                        <div class="grids">
                            <div class="grid lg-50 sm-50 mt-0">
                                <div class="wrapper">
                                    <div class="icon"><i class="fas fa-phone-alt color1 bg-color0"></i></div>
                                    <div class="text-container">
                                        <div class="title">โทรศัพท์</div>
                                        <div class="desc color4">0-2590-4000</div>
                                    </div>
                                </div>
                            </div>
                            <div class="grid lg-50 sm-50 mt-0">
                                <div class="wrapper">
                                    <div class="icon"><i class="fas fa-fax color1 bg-color0"></i></div>
                                    <div class="text-container">
                                        <div class="title">โทรสาร</div>
                                        <div class="desc color4">0-2590-4094</div>
                                    </div>
                                </div>
                            </div>
                            <div class="grid lg-100 sm-100">
                                <div class="wrapper">
                                    <div class="icon"><i class="far fa-envelope color1 bg-color0"></i></div>
                                    <div class="text-container">
                                        <div class="title">อีเมล์</div>
                                        <div class="desc color4">mailmaster@anamai.mail.go.th</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="map-container">
                        <div class="img-bg" style="background-image:url('./assets/img/default/banner-01.jpg');"></div>
                    </div>
                </div>
                <div class="grid lg-50 md-100 sm-100 mt-0">
                    <div class="form-01">
                        <div class="wrapper">
                            <div class="text-container">
                                <div class="icon bg-color1"><i class="fas fa-mail-bulk"></i></div>
                                <div class="title">แบบฟอร์มติดต่อ</div>
                            </div>
                            <form action="">
                                <div class="form-control">
                                    <label for="firstname">ชื่อ *</label>
                                    <input type="text" name="firstname" required>
                                </div>
                                <div class="form-control">
                                    <label for="lastname">นามสกุล</label>
                                    <input type="text" name="lastname">
                                </div>
                                <div class="form-control">
                                    <label for="phone">หมายเลขโทรศัพท์ *</label>
                                    <input type="text" name="phone" required>
                                </div>
                                <div class="form-control">
                                    <label for="email">อีเมล</label>
                                    <input type="text" name="email">
                                </div>
                                <div class="form-control">
                                    <label for="message">ข้อความ</label>
                                    <textarea name="message"></textarea>
                                </div>
                                <div class="btns">
                                <a class="btn btn-action btn-sm btn-secondary next-icon color-white" href="#">
                                    ส่องข้อความ
                                </a>
                                <a class="btn btn-action btn-sm btn-primary" href="#">
                                    ล้างข้อมูล
                                </a>
                            </div>
                            </form>
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