<!DOCTYPE html>
<html lang="th">
<head>
    <?php include_once('include/header.php'); ?>
    <?php include_once('include/style.php'); ?>
    <style>
        .text-options {position:relative; display:flex;   width:100%; background: #c1c1c1; padding:.4375rem 1rem; 
            -webkit-box-shadow:inset 0px 1px 3px 1px rgba(0,0,0,.05);
            -moz-box-shadow:inset 0px 1px 3px 1px rgba(0,0,0,.05);
            box-shadow:inset 0px 1px 3px 1px rgba(0,0,0,.05);
            border-radius: .1875rem .1875rem 0 0;
        }
        .text-options ~ textarea {border-radius: 0 0 .1875rem .1875rem;
                                -webkit-box-shadow:inset 0px -1px 3px 1px rgba(0,0,0,.05);
                                -moz-box-shadow:inset 0px -1px 3px 1px rgba(0,0,0,.05);
                                box-shadow:inset 0px -1px 3px 1px rgba(0,0,0,.05);
        }
        .text-options .group {display:inline-block; padding-right: 1rem;}
        .text-options .option {cursor:pointer; font-weight: 600; display:table-cell; padding:.25rem .5rem; border: .0625rem solid #fff; border-right-color:transparent;}
        .text-options .group .option:last-child {border-right-color: #fff;}
        .file-upload {
            display:flex; 
            justify-content: space-between;
            align-items:center;
            width: 100%; 
            height:4rem; 
            -webkit-box-shadow:inset 0px 0px 10px 1px rgba(0,0,0,.2);
            -moz-box-shadow:inset 0px 0px 10px 1px rgba(0,0,0,.2);
            box-shadow:inset 0px 0px 10px 1px rgba(0,0,0,.2);
            border-radius: .1875rem;
            background:#e7e7e7;
            padding: .75rem 2.5rem;
        }
        .file-upload .file-info { display:flex;align-items:center; justify-content: space-between;}
        .file-upload .file-info .text {padding-left: .5rem;}
        .file-upload .file-info .text p {margin:0; font-size: 80%;}
        .file-upload .file-icon {position:relative; display:block; width:2rem; height:2rem;}
        .file-upload .file-icon::before {content: '';position:absolute; top:0;left:0; right:0; bottom:0; background-size:auto 100%; background-repeat: no-repeat; background-position:center; background-image:url('./assets/img/file/doc.png')}
        .file-upload .btns {margin:0; text-align:right;}
        .file-upload .btns .btn.add-file {display:inline-block; padding:.25rem 2rem; }
        
        /* file uploaded table */
        .file-uploaded {padding-top:1.5rem; width:100%; position:relative;}
        .file-uploaded tbody, .file-uploaded tr {width:100%; position:relative;} 
        .file-uploaded .file-icon {position:relative; display:block; width:2.75rem; height:2.75rem;}
        .file-uploaded .file-icon::before {content: '';position:absolute; top:0;left:0; right:0; bottom:0; background-size:auto 100%; background-repeat: no-repeat; background-position:center; background-image:url('./assets/img/file/doc.png')}
        .file-uploaded tr td:first-child {width:3rem;}

        @media screen and (max-width: 576px) {
            .file-upload {padding:.75rem 1.5rem;}
        }
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
            <div class="grids">
                <div class="grid xl-25 lg-30 sm-100">
                    <div class="slots bg-color5">

                        <div class="profile-tab">
                            <div class="icon lazy-bg" data-src="./assets/img/banner/01.jpg"></div>
                            <div class="text-container">
                                <h3 class="fw-400">อนุสรา เสปอร์บันด์</h3>
                                <h5>urrasaya.sp@gmail.com</h5>
                            </div>
                        </div>
                        
                        <div class="slot-tabs">
                            <?php for($i=0; $i<4; $i++){?>
                                <a class="slot-tab <?php if($i==0)echo 'active'; ?>" href="#">
                                    <div class="icon bg-color3 color-white">
                                        <i class="far fa-building"></i>
                                    </div>
                                    <h5 class="mt-0 color-black">
                                        0<?php echo "$i"; ?>. <br>
                                        ข่าวจากหน่วยงานส่วนกลาง
                                    </h5>
                                </a>
                            <?php }?> 
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
                                            <div class="text-options">
                                                <div class="group">
                                                    <div class="option">1</div>
                                                    <div class="option">2</div>
                                                    <div class="option">3</div>
                                                </div>
                                                <div class="group">
                                                    <div class="option">1</div>
                                                </div>
                                                <div class="group">
                                                    <div class="option">1</div>
                                                    <div class="option">2</div>
                                                    <div class="option">3</div>
                                                    <div class="option">4</div>
                                                </div>
                                                <div class="group">
                                                    <div class="option">1</div>
                                                </div>
                                            </div>
                                            <textarea name="message" rows="10" required></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="grid sm-100 mt-0">
                                    <div class="field">
                                        <div class="control">
                                            <div class="file-upload">
                                                <div class="file-info">
                                                    <div class="file-icon"></div>
                                                    <div class="text">
                                                        <p class="fw-600">ลากหรือวางไฟล์ไว้ที่นี่</p>
                                                        <p>ชนิดไฟล์ที่อนุญาติ .jpg .jpeg .png .zip .rar ไฟล์ทั้งหมดรวมกันไม่เกิน 5 MB</p>
                                                    </div>
                                                </div>
                                                <div class="btns">
                                                    <div class="btn add-file bg-color2 color-white">เพิ่มไฟล์</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <table class="file-uploaded">
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <div class="file-icon"></div>
                                                </td>
                                                <td><h4 class="no-margin">ไฟล์ภาพเอกสาร.png</h4>ขนาดไฟล์ 0.5 KB</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="btns mt-2 text-right">
                                <button type="submit" class="btn btn-action btn-secondary next-icon">
                                    ส่งเรื่องร้องเรียน
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