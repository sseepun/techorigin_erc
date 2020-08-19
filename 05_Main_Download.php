<!DOCTYPE html>
<html lang="th">
<head>
    <?php include_once('include/header.php'); ?>
    <?php include_once('include/style.php'); ?>
    <style>
        .main-download {padding: 2.5rem 0;}

        /* Table */
        .table-wrapper .table.file-table::before { content:''; position:absolute; top:0.4375rem; left:0; background:var(--color5); width:100%; height:.0625rem;}
        .table-wrapper .table.file-table td {position:relative; border:none;}
        .table-wrapper .table.file-table tr {transform:scale(1);} /* position:relative does not work with tr */
        .table-wrapper .table.file-table tr::after { content:''; position:absolute; bottom:0; left:0; background:var(--color5); width:100%; height:.0625rem;}
        .table-wrapper .table.file-table td:first-child {width:2.5rem;}
        .table-wrapper .table.file-table td:last-child {text-align:left; display:flex; justify-content:flex-end; align-items:center;}
        .table-wrapper .table.file-table .img-icon {height:2.5rem;}
        .table-wrapper .table.file-table a.download-btn { display:block; font-size:70%; text-decoration:none;  padding:.25rem; color:#fff; border-radius: .3125rem;}
        .table-wrapper .table.file-table a.download-btn i {font-size:70%; background-color:#fff; padding:.25rem; border-radius:.25rem;}
        @media screen and (max-width: 576px){
            .table-wrapper .table.file-table a.download-btn {display:flex; background: #fff !important; border-radius:0; border-bottom: .125rem solid var(--color4);}
            .table-wrapper .table.file-table a.download-btn > span{font-size: 0;}
        }
    
    </style>
</head>
<body>
    <?php include_once('include/topnav.php'); ?> 
    <section class="main-download">
        <div class="container">
            <!-- Special Header -->
            <div class="ss-header">
                <div class="ss">ด</div><h1><span class="color2">าวน์โหลดเอกสาร</span> <span class="fw-300">| 07. ทันตสาธารณสุข</span></h1>
                <p><strong>กรมอนามัย</strong> กับคลังความรู้สุขภาพเพื่อทุกคน</p>
            </div>
            <div class="grids">
                <div class="grid sm-100 md-100 lg-75">
                    <!-- Asset Table -->
                    <div class="table-wrapper" data-simplebar>
                        <table class="table file-table">
                            <tbody>
                                <?php for($i=0; $i< 15; $i++){?>
                                    <tr>
                                        <td><img class="img-icon" src="./assets/img/default/pdf.png" alt="PDF" /></td>
                                        <td>อัลบั้มภาพ ชุดที่ 1.Zip <br> ขนาดไฟล์ 30.31 MB   จำนวนดาวน์โหลด 200 ครั้ง</td>
                                        <td>
                                            <a href="#" class="download-btn bg-color4">
                                                <i class="fas fa-arrow-down color4"></i> <span>คลิกเพื่อดาวน์โหลด</span>
                                            </a>
                                        </td>
                                    </tr>
                                <?php }?>
                            </tbody>
                        </table>
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
                <div class="grid sm-100 md-100 lg-25" data-aos="fade-up" data-aos-delay="600">
                    <!-- Slots -->
                    <div class="slots bg-color4">
                        <div class="slot bg-color0">
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
                            <div class="ss-date color-white">02.04.2563</div>
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
                        <div class="slot bg-color4">
                            <div class="ss-header color-white">
                                <div class="ss">อั</div><h1 class="fw-300">ลบั้มภาพ</h1>
                                <p>พร้อมอัพเดท</p>
                            </div>
                            <p class="color-white no-margin">สาระสุขภาพทันสมัยให้คุณเข้าใจง่าย</p>
                            <h2 class="color1 no-margin">ไม่ตกเทรนด์!</h2>
                            <div class="btns">
                                <a class="btn btn-action btn-primary next-icon" href="#">
                                    อัลบั้มภาพทั้งหมด
                                </a>
                            </div>
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