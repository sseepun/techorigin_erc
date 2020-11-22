<!-- Topnav -->
<nav class="topnav">
    <div class="topnav-wrapper">
        <div class="top-container">
            <div class="container">
                <div class="items">
                    <div class="item">
                        <a class="btn-popup-toggle" data-popup="signin" href="#">
                            <i class="zmdi zmdi-account mr-1"></i> เข้าสู่ระบบ
                        </a>
                    </div>
                    <div class="item">
                        <a href="#" target="_blank">
                            <i class="zmdi zmdi-facebook"></i>
                        </a>
                        <a href="#" target="_blank">
                            <i class="zmdi zmdi-twitter mx-2"></i>
                        </a>
                        <a href="#" target="_blank">
                            <i class="zmdi zmdi-instagram"></i>
                        </a>
                    </div>
                    <div class="item menu-pc">
                        <a class="global-search-toggle" href="05-local-award.php">
                            <i class="zmdi zmdi-search mr-1"></i> ค้นหา
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="bottom-container">
            <div class="container">
                <div class="menu-container menu-pc">
                    <div class="menu <?php if(!empty($pageActive) && $pageActive=='Home')echo 'active'; ?>">
                        <a href="index.php">หน้าแรก</a>
                    </div>
                    <div class="menu has-submenu <?php if(!empty($pageActive) && $pageActive=='About')echo 'active'; ?>">
                        <a href="javascript:">เกี่ยวกับรางวัล</a>
                        <div class="submenu-container">
                            <div class="submenu">
                                <a href="01-about.php">รางวัลพระปกเกล้า</a>
                            </div>
                            <div class="submenu">
                                <a href="02-about.php">รางวัลพระปกเกล้าทองคำ</a>
                            </div>
                        </div>
                    </div>
                    <div class="menu <?php if(!empty($pageActive) && $pageActive=='Criterion')echo 'active'; ?>">
                        <a href="03-criterion.php">เกณฑ์การพิจารณา</a>
                    </div>
                    <div class="menu <?php if(!empty($pageActive) && $pageActive=='Register')echo 'active'; ?>">
                        <a href="04-register-01.php">สมัครรางวัล</a>
                    </div>
                    <div class="menu <?php if(!empty($pageActive) && $pageActive=='Results')echo 'active'; ?>">
                        <a href="05-local-award.php">อปท. ที่ได้รางวัล</a>
                    </div>
                    <div class="menu <?php if(!empty($pageActive) && $pageActive=='Download')echo 'active'; ?>">
                        <a href="08-download.php">เอกสาร / งานวิจัย</a>
                    </div>
                    <div class="menu <?php if(!empty($pageActive) && $pageActive=='Contact')echo 'active'; ?>">
                        <a href="09-contact.php">ติดต่อเรา</a>
                    </div>
                </div>
                <div class="menu-mobile">
                    <a class="search-btn global-search-toggle" href="05-local-award.php">
                        <i class="zmdi zmdi-search"></i>
                    </a>
                    <div class="sidenav-toggle">
                        <div class="hamburger">
                            <div></div><div></div><div></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <a class="logo" href="">
                <img src="assets/img/logo.png" alt="Logo" />
            </a>
        </div>
    </div>
</nav>
<div class="topnav-spacer"></div>

<!-- Sidenav -->
<nav class="sidenav">
    <div class="wrapper">
        <div class="sidenav-toggle">
            <div class="hamburger">
                <div></div><div></div><div></div>
            </div>
        </div>
        <div class="scroll-wrapper">
            <div class="menu-container"></div>
        </div>
    </div>
</nav>
<div class="sidenav-filter"></div>

<!-- Policy -->
<nav class="policy-nav">
    <div class="container">
        <div class="wrapper">
            <div class="text-container">
                <h6>This website uses cookies</h6>
                <p>
                    This website uses cookies to improve user experience. By using our website 
                    you consent to all cookies in accordance with our Cookie Policy.
                </p>
            </div>
            <div class="btns">
                <a class="btn btn-secondary btn-xs" href="#">
                    ยอมรับ
                </a>
                <a class="btn btn-xs" href="#">
                    ปฏิเสธ
                </a>
                <a href="#">
                    <i class="zmdi zmdi-close"></i>
                </a>
            </div>
        </div>
    </div>
</nav>

<!-- Signin Popup -->
<div class="popup-container" data-popup="signin">
    <div class="wrapper">
        <div class="close-filter btn-popup-toggle" data-popup="signin"></div>
        <div class="popup-box">
            <div class="popup-header" style="background-image:url('assets/img/content/02.jpg');">
                <div class="hero-container">
                    <img src="assets/img/hero/07.png" alt="Hero" />
                </div>
            </div>
            <div class="popup-body">
                <h4 class="text-center color-secondary">
                    ลงชื่อเข้าใช้งาน
                </h4>
                <img class="sep-01" src="assets/img/hero/03.png" alt="Separation" />
                <div class="scroll-wrapper">
                    <form action="index.php" method="POST">
                        <div class="gallery-grids">
                            <div class="grid sm-100">
                                <div class="position-relative">
                                    <input type="text" name="username" class="gray" placeholder="เบอร์มือถือ / อีเมล" required />
                                    <div class="input-icon">
                                        <i class="zmdi zmdi-account"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="grid sm-100">
                                <div class="position-relative">
                                    <input type="password" name="password" class="gray" placeholder="รหัสผ่าน" required />
                                    <div class="input-icon">
                                        <i class="zmdi zmdi-lock"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="gallery-grids">
                            <div class="grid sm-50">
                                <button type="submit" class="btn btn-secondary btn-sm w-full">
                                    เข้าสู่ระบบ
                                </button>
                            </div>
                            <div class="grid sm-50">
                                <a class="btn btn-gray bcolor-primary btn-sm w-full" href="11-register.php">
                                    ลงทะเบียน
                                </a>
                            </div>
                        </div>
                        <p class="text-center mt-3">
                            <a class="fw-400 color-black h-color-primary" href="12-forgot.php">
                                ลืมรหัสผ่าน?
                            </a>
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
