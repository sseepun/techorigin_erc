<!-- Topnav -->
<div class="topnav-filter"></div>
<nav class="topnav">
    <div class="container">
        <div class="wrapper">
            <a href="./" class="logo">
                <img src="./assets/img/logo.png" alt="Logo" />
                <div class="text">
                    <h1>กรมอนามัย</h1>
                    <p>ส่งเสริมให้คนไทยสุขภาพดี</p>
                </div>
            </a>
            <div class="menu-container">

                <div class="top-menu">
                    <div class="option">
                        <p>ขนาดตัวอักษร</p>
                        <div class="btn font-size-btn" data-size="-1">-</div>
                        <div class="btn font-size-btn" data-size="0">ก</div>
                        <div class="btn font-size-btn" data-size="1">+</div>
                    </div>
                    <div class="option">
                        <p>ความตัดกันของสี</p>
                        <div class="btn theme-btn" data-theme="0">C</div>
                        <div class="btn theme-btn" data-theme="1">C</div>
                        <div class="btn theme-btn" data-theme="2">C</div>
                    </div>
                    <div class="option">
                        <form action="set-language.php" method="POST" class="form-language">
                            <div class="ui fluid selection dropdown">
                                <input type="hidden" name="language" value="th">
                                <i class="dropdown icon"></i>
                                <div class="text">
                                    <div class="flag-avatar" style="background-image:url('./assets/img/default/th_flag.png');"></div>
                                    ภาษาไทย
                                </div>
                                <div class="menu">
                                    <div class="item" data-value="us">
                                        <div class="flag-avatar" style="background-image:url('./assets/img/default/us_flag.png');"></div>
                                        ภาษาอังกฤษ
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <a class="menu-option" href="#">
                        <i class="fas fa-sitemap"></i>
                    </a>
                </div>

                <div class="bottom-menu" id="topnav-menu-container">

                    <div class="menu icon-menu <?php if(!empty($topnavActive) && $topnavActive=='Home')echo 'active'; ?>">
                        <a href="./">
                            <div><i class="fas fa-home"></i></div>
                        </a>
                    </div>

                    <div class="menu has-children <?php if(!empty($topnavActive) && $topnavActive=='About')echo 'active'; ?>">
                        <a href="#"><div>รู้จักกรมอนามัย</div></a>
                        <div class="submenu-container expand-adaptive">
                            <div class="wrapper">
                                <div class="hero">
                                    <div class="wrapper lazy-bg" data-src="./assets/img/hero/bg-01.jpg">
                                        <h2>รู้จักกรมอนามัย</h2>
                                        <p>
                                            ส่งเสริมสุขภาพและระบบอนามัย <br>สิ่งแวดล้อมเพื่อประชาชน
                                        </p>
                                        <img class="lazy-img" data-src="./assets/img/hero/01.png" alt="Hero 01" />
                                        <div class="pagination no-margin pt-0-5 pb-0">
                                            <div class="wrapper">
                                                <a href="#" class="page-btn active" data-submenu="0">01</a>
                                                <a href="#" class="page-btn" data-submenu="1">02</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="submenu-tab active" data-submenu="0">
                                    <div class="submenus">
                                        <div class="submenu">
                                            <a href="#">ข่าวจากส่วนกลาง</a>
                                        </div>
                                        <div class="submenu">
                                            <a href="#">ข่าวจากศูนย์อนามัย</a>
                                        </div>
                                        <div class="submenu">
                                            <a href="#">ข่าวหนังสือพิมพ์</a>
                                        </div>
                                        <div class="submenu">
                                            <a href="#">ข่าวรับสมัครบุคลากร</a>
                                        </div>
                                    </div>
                                    <div class="submenus">
                                        <div class="submenu has-children">
                                            <a href="#">จัดซื้อจัดจ้าง</a>
                                            <div class="child-container">
                                                <div class="childs">
                                                    <div class="child">
                                                        <a href="#">ข่าวการจัดซื้อจัดจ้าง</a>
                                                    </div>
                                                    <div class="child">
                                                        <a href="#">การเปิดเผยราคากลาง</a>
                                                    </div>
                                                    <div class="child">
                                                        <a href="#">แผน-ผลการจัดซื้อจัดจ้าง</a>
                                                    </div>
                                                    <div class="child">
                                                        <a href="#">สรุปผลการดำเนินการจัดซื้อจัดจ้าง (สขร.1)</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="submenu">
                                            <a href="#">ปฏิทินกิจกรรม</a>
                                        </div>
                                        <div class="submenu">
                                            <a href="#">วิดีโอ</a>
                                        </div>
                                        <div class="submenu">
                                            <a href="#">คลังภาพ</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="submenu-tab" data-submenu="1">
                                    <div class="submenus">
                                        <div class="submenu">
                                            <a href="#">ประวัติความเป็นมา</a>
                                        </div>
                                        <div class="submenu">
                                            <a href="#">วิสัยทัศน์ พันธกิจ</a>
                                        </div>
                                        <div class="submenu">
                                            <a href="#">ผู้บริหารกรมอนามัย</a>
                                        </div>
                                        <div class="submenu">
                                            <a href="#">ภารกิจ/หน้าที่รับผิดชอบของหน่วยงาน</a>
                                        </div>
                                        <div class="submenu">
                                            <a href="#">หน่วยงานในสังกัดกรมอนามัย</a>
                                        </div>
                                        <div class="submenu">
                                            <a href="#">แผนยุทธศาสตร์</a>
                                        </div>
                                        <div class="submenu">
                                            <a href="#">แผนงาน โครงการงบประมาณรายจ่ายประจำปี</a>
                                        </div>
                                        <div class="submenu">
                                            <a href="#">กฎ ระเบียบ ข้อบังคับ</a>
                                        </div>
                                    </div>
                                    <div class="submenus">
                                        <div class="submenu has-children">
                                            <a href="#">CIO กรมอนามัย</a>
                                            <div class="child-container">
                                                <div class="childs">
                                                    <div class="child">
                                                        <a href="#">คำรับรองการปฎิบัติราชการ ปีงบประมาณ พ.ศ. 2559</a>
                                                    </div>
                                                    <div class="child">
                                                        <a href="#">คำรับรองการปฎิบัติราชการ ปีงบประมาณ พ.ศ. 2558</a>
                                                    </div>
                                                    <div class="child">
                                                        <a href="#">คำรับรองการปฎิบัติราชการ ปีงบประมาณ พ.ศ. 2557</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="submenu">
                                            <a href="#">โครงสร้างและระบบการกำกับดูแลของกรมอนามัย</a>
                                        </div>
                                        <div class="submenu has-children">
                                            <a href="#">แผนปฎิบัติราชการของหน่วยงาน</a>
                                            <div class="child-container">
                                                <div class="childs">
                                                    <div class="child">
                                                        <a href="#">คำรับรองการปฎิบัติราชการ ปีงบประมาณ พ.ศ. 2559</a>
                                                    </div>
                                                    <div class="child">
                                                        <a href="#">คำรับรองการปฎิบัติราชการ ปีงบประมาณ พ.ศ. 2558</a>
                                                    </div>
                                                    <div class="child">
                                                        <a href="#">คำรับรองการปฎิบัติราชการ ปีงบประมาณ พ.ศ. 2557</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="submenu has-children">
                                            <a href="#">คำรับรองและรายงานผลการปฎิบัติราชการ</a>
                                            <div class="child-container">
                                                <div class="childs">
                                                    <div class="child">
                                                        <a href="#">คำรับรองการปฎิบัติราชการ ปีงบประมาณ พ.ศ. 2559</a>
                                                    </div>
                                                    <div class="child">
                                                        <a href="#">คำรับรองการปฎิบัติราชการ ปีงบประมาณ พ.ศ. 2558</a>
                                                    </div>
                                                    <div class="child">
                                                        <a href="#">คำรับรองการปฎิบัติราชการ ปีงบประมาณ พ.ศ. 2557</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="submenu has-children">
                                            <a href="#">รายงานประจำปีกรมอนามัย</a>
                                            <div class="child-container">
                                                <div class="childs">
                                                    <div class="child">
                                                        <a href="#">คำรับรองการปฎิบัติราชการ ปีงบประมาณ พ.ศ. 2559</a>
                                                    </div>
                                                    <div class="child">
                                                        <a href="#">คำรับรองการปฎิบัติราชการ ปีงบประมาณ พ.ศ. 2558</a>
                                                    </div>
                                                    <div class="child">
                                                        <a href="#">คำรับรองการปฎิบัติราชการ ปีงบประมาณ พ.ศ. 2557</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="submenu">
                                            <a href="#">การกำกับติดตามการดำเนินงานตามแผนปฎิบัติราชการ ประจำปี 2561</a>
                                        </div>
                                        <div class="submenu">
                                            <a href="#">กระบวนการปฎิบัติงานและการให้บริการของกรมอนามัย</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="menu has-children <?php if(!empty($topnavActive) && $topnavActive=='News')echo 'active'; ?>">
                        <a href="#"><div>ข่าวสาร</div></a>
                        <div class="submenu-container expand-left">
                            <div class="wrapper">
                                <div class="hero">
                                    <div class="wrapper lazy-bg" data-src="./assets/img/hero/bg-02.jpg">
                                        <h2 class="color-black">ข่าวสารกรมอนามัย</h2>
                                        <p class="color-black">
                                            ส่งเสริมสุขภาพและระบบอนามัย <br>สิ่งแวดล้อมเพื่อประชาชน
                                        </p>
                                        <img class="lazy-img" data-src="./assets/img/hero/02.png" alt="Hero 02" />
                                    </div>
                                </div>
                                <div class="submenus">
                                    <div class="submenu">
                                        <a href="#">ข่าวจากส่วนกลาง</a>
                                    </div>
                                    <div class="submenu">
                                        <a href="#">ข่าวจากศูนย์อนามัย</a>
                                    </div>
                                    <div class="submenu">
                                        <a href="#">ข่าวหนังสือพิมพ์</a>
                                    </div>
                                    <div class="submenu">
                                        <a href="#">ข่าวรับสมัครบุคลากร</a>
                                    </div>
                                </div>
                                <div class="submenus">
                                    <div class="submenu has-children">
                                        <a href="#">จัดซื้อจัดจ้าง</a>
                                        <div class="child-container">
                                            <div class="childs">
                                                <div class="child">
                                                    <a href="#">ข่าวการจัดซื้อจัดจ้าง</a>
                                                </div>
                                                <div class="child">
                                                    <a href="#">การเปิดเผยราคากลาง</a>
                                                </div>
                                                <div class="child">
                                                    <a href="#">แผน-ผลการจัดซื้อจัดจ้าง</a>
                                                </div>
                                                <div class="child">
                                                    <a href="#">สรุปผลการดำเนินการจัดซื้อจัดจ้าง (สขร.1)</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="submenu">
                                        <a href="#">ปฏิทินกิจกรรม</a>
                                    </div>
                                    <div class="submenu">
                                        <a href="#">วิดีโอ</a>
                                    </div>
                                    <div class="submenu">
                                        <a href="#">คลังภาพ</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="menu has-children <?php if(!empty($topnavActive) && $topnavActive=='Services')echo 'active'; ?>">
                        <a href="#"><div>บริการประชาชน</div></a>
                        <div class="submenu-container">
                            <div class="wrapper">
                                <div class="hero">
                                    <div class="wrapper lazy-bg" data-src="./assets/img/hero/bg-03.jpg">
                                        <h2>บริการประชาชน</h2>
                                        <p>
                                            ส่งเสริมสุขภาพและระบบอนามัย <br>สิ่งแวดล้อมเพื่อประชาชน
                                        </p>
                                        <img class="lazy-img" data-src="./assets/img/hero/03.png" alt="Hero 03" />
                                    </div>
                                </div>
                                <div class="submenus">
                                    <div class="submenu">
                                        <a href="#">แจ้งเรื่องร้องเรียน</a>
                                    </div>
                                    <div class="submenu">
                                        <a href="#">ความรู้สุขภาพ</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="menu <?php if(!empty($topnavActive) && $topnavActive=='Contact')echo 'active'; ?>">
                        <a href="#"><div>ติดต่อกรม</div></a>
                    </div>

                    <div class="menu icon-menu <?php if(!empty($topnavActive) && $topnavActive=='Search')echo 'active'; ?>">
                        <a class="global-search-toggle" href="#">
                            <div><i class="fas fa-search"></i></div>
                        </a>
                    </div>

                </div>

                <div class="mobile-menu">
                    <div class="sidenav-btn">
                        <div class="hamburger">
                            <div></div><div></div><div></div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</nav>
<div class="topnav-spacer"></div>

<!-- Sidenav -->
<nav class="sidenav">
    <div class="wrapper">
        <div class="sidenav-btn">
            <div class="hamburger">
                <div></div><div></div><div></div>
            </div>
        </div>
        <div class="options">
            <div class="option">
                <div class="icon">ก</div>
                <div class="dropdown">
                    <div class="btn font-size-btn" data-size="-1">-</div>
                    <div class="btn font-size-btn" data-size="0">ก</div>
                    <div class="btn font-size-btn" data-size="1">+</div>
                </div>
            </div>
            <div class="option">
                <div class="icon">C</div>
                <div class="dropdown">
                    <div class="btn theme-btn" data-theme="0">C</div>
                    <div class="btn theme-btn" data-theme="1">C</div>
                    <div class="btn theme-btn" data-theme="2">C</div>
                </div>
            </div>
            <div class="option">
                <div class="flag" style="background-image:url('./assets/img/default/th_flag.png');"></div>
                <div class="dropdown">
                    <a href="#">
                        <div class="flag" style="background-image:url('./assets/img/default/us_flag.png');"></div>
                    </a>
                </div>
            </div>
            <div class="option">
                <a class="icon" href="#">
                    <i class="fas fa-sitemap"></i>
                </a>
            </div>
            <div class="option global-search-toggle">
                <div class="icon"><i class="fas fa-search"></i></div>
            </div>
        </div>
        <div class="scroll-wrapper" data-simplebar>
            <div class="menu-container"></div>
        </div>
    </div>
</nav>
<div class="sidenav-filter"></div>

<!-- Search Container -->
<div class="global-search-container use-gsap">
    <div class="wrapper">
        <div class="hamburger active global-search-toggle">
            <div></div><div></div><div></div>
        </div>
        <div class="container">
            <form action="./" method="GET">
                <h1 class="color-white text-center mt-0 mb-0-5">
                    คุณกำลังมองหาอะไร?
                </h1>
                <div class="input-container">
                    <input type="text" name="keywords" placeholder="ค้นหา" required>
                    <button type="submit">
                        <i class="fas fa-search"></i>
                    </button>
                </div>
                <div class="ss-tags mt-1 text-center">
                    <div class="ss-tag type-1"></div>
                    <div class="ss-tag type-2"></div>
                    <div class="ss-tag type-3"></div>
                    <div class="ss-tag type-4"></div>
                    <div class="ss-tag type-5"></div>
                </div>
            </form>
        </div>
    </div>
</div>
