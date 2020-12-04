<!DOCTYPE html>
<html lang="th">
<head>
    <?php include_once('include/header.php'); ?>
    <?php include_once('include/style.php'); ?>
</head>
<body class="loading">
    <?php include_once('include/topnav.php'); ?>

    <?php
        $breadcrumb = [
            [ 'display' => 'เกี่ยวกับองค์กร', 'url' => '#' ],
            [ 'display' => 'คณะผู้บริหารสำนักงาน', 'url' => '#' ],
        ];
        include('component/breadcrumb-01.php');
    ?>

    <section class="committee-01 section-padding" style="background-image:url('assets/img/bg/10.jpg');">
        <div class="container">
            <h2 class="text-center" data-aos="fade-up" data-aos-delay="150">
                <span class="text-xs fw-500">คณะผู้บริหารสำนักงาน</span>
            </h2>
            <div data-aos="fade-up" data-aos-delay="300">
                <img class="img-committee" src="assets/img/hero/committee.png" alt="Committee" />
            </div>
        </div>
    </section>
    
    <?php include_once('include/footer.php'); ?>
    <?php include_once('include/script.php'); ?>
</body>
</html>
