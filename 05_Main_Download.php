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

                <div class="grid sm-100 md-100 lg-75">
                    
                    <div class="table-wrapper" data-simplebar>
                        <table class="table download-table">
                            <tbody>
                                <?php for($i=0; $i<3; $i++){?>
                                    <?php foreach(['doc', 'docx', 'pdf', 'ppt', 'pptx'] as $f){?>
                                        <tr>
                                            <td class="pl-0">
                                                <div class="file-icon <?php echo $f; ?>"></div>
                                            </td>
                                            <td>
                                                การขับเคลื่อนชุมชนเข้มแข็งในการจัดการอนามัยสิ่งแวดล้อมชุมชน
                                            </td>
                                            <td>
                                                <div class="text-xs">ขนาดไปล์ <strong>1.3</strong> MB</div>
                                                <div class="text-xs">ดาวน์โหลด <strong>23</strong> ครั้ง</div>
                                            </td>
                                            <td>
                                                <a class="btn btn-action btn-primary btn-sm" href="#">
                                                    แจ้งไฟล์เสีย
                                                </a>
                                            </td>
                                        </tr>
                                    <?php }?>
                                <?php }?>
                            </tbody>
                        </table>
                    </div>

                    <?php include_once('component/list-footer.php'); ?>
                </div>

                <div class="grid sm-100 md-100 lg-25" data-aos="fade-up" data-aos-delay="600">
                    <div class="slots bg-color4">
                        <div class="slot">

                            <h2 class="header-text quote-text">
                                คนไทย <br>
                                <span class="text-xl fw-400 color1">ร่วมใจสู้ภัย</span> <br>
                                <span class="text-xl">โควิด-19</span>
                            </h2>

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
