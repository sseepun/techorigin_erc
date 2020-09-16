<!DOCTYPE html>
<html lang="th">
<head>
    <?php include_once('include/header.php'); ?>
    <?php include_once('include/style.php'); ?>
    <link rel="stylesheet" type="text/css" href="./assets/lib/treant-js-1.0/Treant.css" />
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
            <div class="tree" id="tree"></div>
        </div>
    </section>
    
    <?php include_once('include/footer.php'); ?>
    <?php include_once('include/script.php'); ?>
    <script src="./assets/lib/treant-js-1.0/vendor/raphael.js"></script>
    <script src="./assets/lib/treant-js-1.0/Treant.js"></script>
    <script>
        var treeConfig = {
            chart: {
                container: '#tree',
                nodeAlign: 'BOTTOM',
                connectors: { type: 'step' },
            },
            nodeStructure: {
                text: { name: 'กรมอนามัย' },
                HTMLclass: 'root',
                children: [

                    {   
                        text:{ name: 'กลุ่มภารกิจ ด้านการส่งเสริมสุขภาพ' },
                        HTMLclass: 'node-1',
                        children: [
                            {
                                text:{ name: 'สำนักส่งเสริมสุขภาพ' },
                                HTMLclass: 'node-2',
                                children: [
                                    {
                                        text:{ name: 'สำนักทันตสาธารณสุข' },
                                        HTMLclass: 'node-2',
                                        children: [
                                            {
                                                text:{ name: 'สำนักโภชนาการ' },
                                                HTMLclass: 'node-2',
                                                children: [
                                                    {
                                                        text:{ name: 'สำนักอนามัยเจริญพันธุ์' },
                                                        HTMLclass: 'node-2',
                                                        children: [
                                                            {
                                                                text:{ name: 'กองกิจกรรมทางกายเพื่อสุขภาพ (กองออกกำลังกายเพื่อสุขภาพ)' },
                                                                HTMLclass: 'node-4',
                                                                children: [
                                                                    {
                                                                        text:{ name: 'สถาบันพัฒนาอนามัยเด็กแห่งชาติ' },
                                                                        HTMLclass: 'node-3',
                                                                        children: [
                                                                            {
                                                                                text:{ name: 'สำนักอนามัยผู้สูงอายุ' },
                                                                                HTMLclass: 'node-3',
                                                                                children: [
                                                                                    {
                                                                                        text:{ name: 'ศูนย์ทันตสาธารณสุขระหว่างประเทศ' },
                                                                                        HTMLclass: 'node-3',
                                                                                        children: [
                                                                                            {
                                                                                                text:{ name: 'ศูนย์อนามัยกลุ่มชาติพันธุ์ ชายขอบและแรงงานข้ามชาติ' },
                                                                                                HTMLclass: 'node-3',
                                                                                            }
                                                                                        ]
                                                                                    }
                                                                                ]
                                                                            }
                                                                        ]
                                                                    }
                                                                ]
                                                            }
                                                        ]
                                                    }
                                                ]
                                            }
                                        ]
                                    }
                                ]
                            }
                        ]
                    },

                    {   
                        text:{ name: 'กลุ่มภารกิจ ด้านอนามัยสิ่งแวดล้อม' },
                        HTMLclass: 'node-1',
                        children: [
                            {
                                text:{ name: 'สำนักอนามัยสิ่งแวดล้อม' },
                                HTMLclass: 'node-2',
                                children: [
                                    {
                                        text:{ name: 'สำนักสุขาภิบาลอาหารและน้ำ' },
                                        HTMLclass: 'node-2',
                                        children: [
                                            {
                                                text:{ name: 'กองประเมินผลกระทบต่อสุขภาพ' },
                                                HTMLclass: 'node-2',
                                                children: [
                                                    {
                                                        text:{ name: 'ศูนย์ห้องปฏิบัติการกรมอนามัย' },
                                                        HTMLclass: 'node-3',
                                                        children: [
                                                            {
                                                                text:{ name: 'ศูนย์บริการกฎหมายสาธารณสุข' },
                                                                HTMLclass: 'node-3',
                                                            }
                                                        ]
                                                    }
                                                ]
                                            }
                                        ]
                                    }
                                ]
                            }
                        ]
                    },

                    {   
                        text:{ name: 'กลุ่มภารกิจ บริหารยุทธศาสตร์ระดับพื้นที่' },
                        HTMLclass: 'node-1',
                        children: [
                            {
                                text:{ name: 'ศูนย์อนามัยที่ 1 - 12' },
                                HTMLclass: 'node-2',
                                children: [
                                    {
                                        text:{ name: 'สถาบันพัฒนาสุขภาวะเขตเมือง' },
                                        HTMLclass: 'node-3',
                                    }
                                ]
                            }
                        ]
                    },

                    {   
                        text:{ name: 'กลุ่มภารกิจอำนวยการ' },
                        HTMLclass: 'node-1',
                        children: [
                            {
                                text:{ name: 'สำนักงานเลขานุการกรม' },
                                HTMLclass: 'node-2',
                                children: [
                                    {
                                        text:{ name: 'กองการเจ้าหน้าที่' },
                                        HTMLclass: 'node-2',
                                        children: [
                                            {
                                                text:{ name: 'กองคลัง' },
                                                HTMLclass: 'node-2',
                                                children: [
                                                    {
                                                        text:{ name: 'กองแผนงาน' },
                                                        HTMLclass: 'node-2',
                                                        children: [
                                                            {
                                                                text:{ name: 'ศูนย์ความร่วมมือระหว่างประเทศ' },
                                                                HTMLclass: 'node-3',
                                                                children: [
                                                                    {
                                                                        text:{ name: 'ศูนย์สื่อสารสาธารณะ' },
                                                                        HTMLclass: 'node-3',
                                                                    }
                                                                ]
                                                            }
                                                        ]
                                                    }
                                                ]
                                            }
                                        ]
                                    }
                                ]
                            }
                        ]
                    },
                    
                    {   
                        text:{ name: 'สำนักคณะกรรมการผู้ทรงคุณวุฒิ' },
                        HTMLclass: 'node-5',
                        children: [
                            {   
                                text:{ name: 'กลุ่มตรวจสอบภายใน' },
                                HTMLclass: 'node-6',
                                children: [
                                    {   
                                        text:{ name: 'กลุ่มพัฒนาระบบริหาร' },
                                        HTMLclass: 'node-7',
                                    },
                                ]
                            },
                        ]
                    },

                ]
            }
        };
        var tree = new Treant(treeConfig);
    </script>
</body>
</html>
