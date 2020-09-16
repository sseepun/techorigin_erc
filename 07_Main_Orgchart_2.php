<!DOCTYPE html>
<html lang="th">
<head>
    <?php include_once('include/header.php'); ?>
    <?php include_once('include/style.php'); ?>
    <link rel="stylesheet" type="text/css" href="./assets/css/orgchart.css" />
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
            <div class="tree-container">
                <div class="content">
                    <figure class="org-chart cf">
                        <ul class="administration">
                            <li>					
                                <ul class="director">
                                    <li>
                                        <div class="node root">
                                            <span>กรมอนามัย</span>
                                        </div>
                                        <ul class="subdirector">
                                            <li><div class="node"><span>Assistante Director</span></div></li>
                                        </ul>
                                        <ul class="departments cf">								
                                            <li><div class="node"><span>Administration</span></div></li>
                                            <li class="department dep-a">
                                                <div class="node"><span>Department A</span></div>
                                                <ul class="sections">
                                                    <li class="section"><div class="node"><span>Section A1</span></div></li>
                                                    <li class="section"><div class="node"><span>Section A2</span></div></li>
                                                    <li class="section"><div class="node"><span>Section A3</span></div></li>
                                                    <li class="section"><div class="node"><span>Section A4</span></div></li>
                                                    <li class="section"><div class="node"><span>Section A5</span></div></li>
                                                </ul>
                                            </li>
                                            <li class="department dep-b">
                                                <div class="node"><span>Department B</span></div>
                                                <ul class="sections">
                                                    <li class="section"><div class="node"><span>Section B1</span></div></li>
                                                    <li class="section"><div class="node"><span>Section B2</span></div></li>
                                                    <li class="section"><div class="node"><span>Section B3</span></div></li>
                                                    <li class="section"><div class="node"><span>Section B4</span></div></li>
                                                </ul>
                                            </li>
                                            <li class="department dep-c">
                                                <div class="node"><span>Department C</span></div>
                                                <ul class="sections">
                                                    <li class="section"><div class="node"><span>Section C1</span></div></li>
                                                    <li class="section"><div class="node"><span>Section C2</span></div></li>
                                                    <li class="section"><div class="node"><span>Section C3</span></div></li>
                                                    <li class="section"><div class="node"><span>Section C4</span></div></li>
                                                </ul>
                                            </li>
                                            <li class="department dep-d">
                                                <div class="node"><span>Department D</span></div>
                                                <ul class="sections">
                                                    <li class="section"><div class="node"><span>Section D1</span></div></li>
                                                    <li class="section"><div class="node"><span>Section D2</span></div></li>
                                                    <li class="section"><div class="node"><span>Section D3</span></div></li>
                                                    <li class="section"><div class="node"><span>Section D4</span></div></li>
                                                    <li class="section"><div class="node"><span>Section D5</span></div></li>
                                                    <li class="section"><div class="node"><span>Section D6</span></div></li>
                                                </ul>
                                            </li>
                                            <li class="department dep-e">
                                                <div class="node"><span>Department E</span></div>
                                                <ul class="sections">
                                                    <li class="section"><div class="node"><span>Section E1</span></div></li>
                                                    <li class="section"><div class="node"><span>Section E2</span></div></li>
                                                    <li class="section"><div class="node"><span>Section E3</span></div></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>	
                            </li>
                        </ul>
                    </figure>
                </div>
            </div>
        </div>
    </section>
    
    <?php include_once('include/footer.php'); ?>
    <?php include_once('include/script.php'); ?>
</body>
</html>
