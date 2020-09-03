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
            [ 'name' => 'ดาวน์โหลดเอกสาร', 'url' => '#' ]
        ];
        include_once('component/breadcrumb.php');
    ?>

    <section class="section-padding">
        <div class="container">
            <div class="ss-header">
                <div class="ss">ด</div><h1><span class="color2">าวน์โหลดเอกสาร</span> <span class="fw-300">| 07. ทันตสาธารณสุข</span></h1>
                <p><strong>กรมอนามัย</strong> กับคลังความรู้สุขภาพเพื่อทุกคน</p>
            </div>
            <div class="grids">

                <div class="grid xl-75 lg-70 sm-100 md-100">
                    
                    <div class="table-wrapper" data-simplebar>
                        <table class="table download-table">
                            <tbody>
                                <?php for($i=0; $i<2; $i++){?>
                                    <tr>
                                        <td class="pl-1-5">
                                            <div class="file-icon pdf"></div>
                                        </td>
                                        <td>
                                            การขับเคลื่อนชุมชนเข้มแข็งในการจัดการอนามัยสิ่งแวดล้อมชุมชน
                                        </td>
                                        <td>
                                            <div class="text-xs">ขนาดไปล์ <strong>1.3</strong> MB</div>
                                            <div class="text-xs">ดาวน์โหลด <strong>23</strong> ครั้ง</div>
                                        </td>
                                        <td class="text-left">
                                            <a class="btn btn-icon-download" href="#">
                                                ดาวน์โหลด
                                            </a>
                                            <br>
                                            <a class="btn btn-icon-alert" href="#">
                                                แจ้งไฟล์เสีย
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="pl-1-5">
                                            <div class="file-icon docx"></div>
                                        </td>
                                        <td>
                                            การขับเคลื่อนชุมชนเข้มแข็งในการจัดการอนามัยสิ่งแวดล้อมชุมชน
                                        </td>
                                        <td>
                                            <div class="text-xs">ขนาดไปล์ <strong>1.3</strong> MB</div>
                                            <div class="text-xs">ดาวน์โหลด <strong>23</strong> ครั้ง</div>
                                        </td>
                                        <td class="text-left">
                                            <a class="btn btn-icon-download" href="#">
                                                ดาวน์โหลด
                                            </a>
                                            <br>
                                            <a class="btn btn-icon-alert" href="#">
                                                แจ้งไฟล์เสีย
                                            </a>
                                        </td>
                                    </tr>
                                    <tr class="topic <?php if($i%2==0)echo 'selected'; ?>">
                                        <td colspan="4" class="text-left pl-1">
                                            <h3 class="no-margin fw-400">
                                                นโยบายการจัดการและบริหารสิ่งแวดล้อม ประจำปี 2563
                                            </h3>
                                        </td>
                                    </tr>
                                    <?php foreach(['doc', 'docx', 'pdf', 'ppt', 'pptx'] as $f){?>
                                        <tr class="<?php if($i%2==0)echo 'selected'; ?>">
                                            <td class="pl-1-5">
                                                <div class="file-icon <?php echo $f; ?>"></div>
                                            </td>
                                            <td>
                                                การขับเคลื่อนชุมชนเข้มแข็งในการจัดการอนามัยสิ่งแวดล้อมชุมชน
                                            </td>
                                            <td>
                                                <div class="text-xs">ขนาดไปล์ <strong>1.3</strong> MB</div>
                                                <div class="text-xs">ดาวน์โหลด <strong>23</strong> ครั้ง</div>
                                            </td>
                                            <td class="text-left">
                                                <a class="btn btn-icon-download" href="#">
                                                    ดาวน์โหลด
                                                </a>
                                                <br>
                                                <a class="btn btn-icon-alert" href="#">
                                                    แจ้งไฟล์เสีย
                                                </a>
                                            </td>
                                        </tr>
                                    <?php }?>
                                <?php }?>
                            </tbody>
                        </table>
                    </div>

                    <?php $listFooterNoBorder = true; include_once('component/list-footer.php'); ?>
                </div>

                <div class="grid xl-25 lg-30 md-100 sm-100" data-aos="fade-up" data-aos-delay="600">
                    <div class="slots no-mask lazy-bg" data-src="./assets/img/bg/06.jpg">
                        <img class="float-img type-5" src="./assets/img/hero/12.png" alt="Slot Float Image 01" />
                        <div class="slot-tabs mt-0">
                            <h4 class="title color-white">หมวดหมู่</h4>
                            <?php for($i=0; $i<10; $i++){?>
                                <a class="slot-tab" href="#">
                                    <h5 class="mt-0 color-white">
                                        0<?php echo "$i"; ?>. <br>
                                        ข่าวจากหนังสือพิมพ์
                                    </h5>
                                </a>
                            <?php }?> 
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
