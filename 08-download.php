<!DOCTYPE html>
<html lang="th">
<head>
    <?php include_once('include/header.php'); ?>
    <?php include_once('include/style.php'); ?>
</head>
<body>
    <?php include_once('include/topnav.php'); ?>

    <section class="search-01 section-padding">
        <div class="container">
            <h4 class="text-center color-secondary" data-aos="fade-up" data-aos-delay="0">
                เอกสาร / งานวิจัย
            </h4>
            <img class="sep-01" src="assets/img/hero/03.png" alt="Separation" data-aos="fade-up" data-aos-delay="150" />
            
            <div class="grids mt-2" data-aos="fade-up" data-aos-delay="300">
                <div class="grid sm-100">
                    <div class="ss-box py-2">
                        <?php for($i=0; $i<3; $i++){?>
                            <div class="content-row">
                                <div class="text-container">
                                    <h6 class="fw-300">
                                        พัฒนาตัวชี้วัดและวัดระดับสันติภาพในสังคมไทย พ.ศ. 2563
                                    </h6>
                                </div>
                                <a class="btn btn-primary btn-sm" href="#">
                                    <i class="zmdi zmdi-download mr-1"></i> ดาวน์โหลด
                                </a>
                            </div>
                            <div class="content-row">
                                <div class="text-container">
                                    <h6 class="fw-300">
                                        การวิเคราะห์ร่างพระราชบัญญัติการจดทะเบียนคู่ชีวิต พ.ศ. 2563 
                                    </h6>
                                </div>
                                <a class="btn btn-primary btn-sm" href="#">
                                    <i class="zmdi zmdi-download mr-1"></i> ดาวน์โหลด
                                </a>
                            </div>
                            <div class="content-row">
                                <div class="text-container">
                                    <h6 class="fw-300">
                                        รัฐไทยกับการเมืองของการจัดการทรัพยากรป่าไม้และที่ดิน กรณีแม่แจ่มโมเดล : ความคิด 
                                        การเคลื่อนไหว และ
                                    </h6>
                                </div>
                                <a class="btn btn-primary btn-sm" href="#">
                                    <i class="zmdi zmdi-download mr-1"></i> ดาวน์โหลด
                                </a>
                            </div>
                        <?php }?>
                    </div>
                </div>
            </div>

            <div class="pagination" data-aos="fade-up" data-aos-delay="0">
                <a class="page disabled" href="#"><i class="zmdi zmdi-chevron-left"></i></a>
                <a class="page active" href="#">1</a>
                <a class="page" href="#">2</a>
                <a class="page" href="#">3</a>
                <a class="page decoration" href="#">...</a>
                <a class="page" href="#">14</a>
                <a class="page" href="#"><i class="zmdi zmdi-chevron-right"></i></a>
            </div>

        </div>
    </section>
    
    <?php include_once('include/footer.php'); ?>
    <?php include_once('include/script.php'); ?>
</body>
</html>
