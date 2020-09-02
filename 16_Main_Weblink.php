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
            [ 'name' => 'รวมลิงค์และเว็ปไซต์หน่วยงานที่เกี่ยวข้อง', 'url' => '#' ]
        ];
        include_once('component/breadcrumb.php');
    ?>

    <div class="section-padding section-bg lazy-bg" data-src="./assets/img/bg/32.jpg">
        <div class="container">
            <div class="ss-header color-white">
                <div class="ss">ร</div><h1>วมลิงค์และเว็ปไซต์หน่วยงานที่เกี่ยวข้อง</h1>
                <p>กรมอนามัย พร้อมพูดคุยและแลกเปลี่ยนความรู้ข่าวสารที่เป็นประโยชน์สำหรับคุณ</p>
            </div>
        </div>   
    </div>
    
    <section class="section-padding">
        <div class="container">
            <h2 class="mt-0 color4">หน่วยงานส่วนกลาง</h2>

            

            <ul class="ss-list">
                <li>ศูนย์สื่อสารสาธารณะ</li>	
                <li>สำนักงานเลขานุการกรม</li>	
                <li>สำนักส่งเสริมสุขภาพ</li>	
                <li>สำนักทันตสาธารณสุข</li>
                <li>สำนักโภชนาการ</li>	
                <li>สำนักอนามัยการเจริญพันธุ์ สำนักอนามัยสิ่งแวดล้อม</li>	
                <li>สำนักสุขาภิบาลอาหารและน้ำ</li>	
                <li>ศูนย์ความร่วมมือระหว่างประเทศ</li>
                <li>กองคลัง</li>	
                <li>กองการเจ้าหน้าที่</li>
            </ul>
            <ul class="ss-list">
                <li>กองแผนงาน</li>	
                <li>กองออกกำลังกายเพื่อสุขภาพ</li>	
                <li>กองประเมินผลกระทบต่อสุขภาพ</li>
                <li>กลุ่มตรวจสอบภายใน</li>	
                <li>กลุ่มพัฒนาระบบบริหาร</li>	
                <li>ศูนย์บริหารกฎหมายสาธารณสุข</li>	
                <li>ศูนย์ห้องปฏิบัติการกรมอนามัย</li>	
                <li>สถาบันพัฒนาอนามัยเด็กแห่งชาติ</li>
                <li>สำนักอนามัยผู้สูงอายุ</li>	
                <li>สขรส.</li>		 
            </ul>

            <h2 class="mt-0 color4">หน่วยงานส่วนภูมิภาค</h2>
            <ul class="ss-list">
                <li>ศูนย์อนามัยที่ 1</li>
                <li>ศูนย์อนามัยที่ 2</li>	
                <li>ศูนย์อนามัยที่ 3</li>	
                <li>ศูนย์อนามัยที่ 4</li>	
                <li>ศูนย์อนามัยที่ 5</li>	
                <li>ศูนย์อนามัยที่ 6</li>
            </ul>
            <ul class="ss-list">
                <li>ศูนย์อนามัยที่ 7</li>	
                <li>ศูนย์อนามัยที่ 8</li>	
                <li>ศูนย์อนามัยที่ 9</li>	
                <li>ศูนย์อนามัยที่ 10</li>
                <li>ศูนย์อนามัยที่ 11</li>	
                <li>ศูนย์อนามัยที่ 12</li>
            </ul>
            <ul class="ss-list">
                <li>สถาบันพัฒนาสุขภาวะเขตเมือง</li>
                <li>ศูนย์อนามัยกลุ่มชาติพันธุ์ ชายขอบ และแรงงานข้ามชาติ</li>
                <li>กลุ่มพัฒนาความร่วมมือทันตสาธารณสุขระหว่างประเทศ</li>
            </ul>

        </div>
    </section>

    <?php include_once('include/footer.php'); ?>
    <?php include_once('include/script.php'); ?>
</body>
</html>
