<!DOCTYPE html>
<html lang="th">
<head>
    <?php include_once('include/header.php'); ?>
    <?php include_once('include/style.php'); ?>
</head>
<body class="lang_en">
    <?php include_once('include/topnav.php'); ?>
    <?php
        $breadcrumb = [
            [ 'name' => 'หน้าแรก', 'url' => './' ],
            [ 'name' => 'โครงสร้างและระบบการกำกับดูแลของกรมอนามัย', 'url' => '#' ]
        ];
        include_once('component/breadcrumb.php');
    ?>

    <div class="section-padding section-bg lazy-bg" data-src="./assets/img/bg/30.jpg">
        <div class="container">
            <div class="ss-header color-white">
                <div class="ss">โ</div><h1>โครงสร้างและระบบการกำกับดูแลของกรมอนามัย</h1>
                <p>กรมอนามัย พร้อมพูดคุยและแลกเปลี่ยนความรู้ข่าวสารที่เป็นประโยชน์สำหรับคุณ</p>
            </div>
        </div>   
    </div>

    <section class="section-webboard section-bg lazy-bg" data-src="./assets/img/bg/31.jpg">
        <div class="container">
            <h3 class="text-center mt-0 mb-1">โครงสร้างการแบ่งส่วนราชการกรมอนามัย</h3>
            <img class="webboard lazy-img" data-src="./assets/img/content/webboard.png" alt="Webboard" />
        </div>
    </section>
    
    <?php include_once('include/footer.php'); ?>
    <?php include_once('include/script.php'); ?>
</body>
</html>
