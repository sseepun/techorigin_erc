<!-- Topnav -->
<nav class="topnav">
    <div class="top-container">

        <div class="menu-toggle">
            <a href="#">
                <div class="hamburger">
                    <div></div><div></div><div></div>
                </div>
                <span>เมนูหลัก</span>
            </a>
            <div class="menu-dropdown">
                <div class="wrapper" style="background-image:url('assets/img/bg/09.jpg');">
                    <div class="container">
                        <h4 class="title color-white text-center">เข้าถึงเรา เข้าใจคุณ</h4>
                        <div class="menu-tab">
                            <div class="tabs">
                                <div class="scroll-wrapper" data-simplebar>
                                    <a class="tab active" data-tab="0" href="#">เกี่ยวกับองค์กร</a>
                                    <a class="tab" data-tab="1" href="#">กฏหมาย</a>
                                    <a class="tab" data-tab="2" href="#">ศูนย์ข้อมูลด้านพลังงาน</a>
                                    <a class="tab" data-tab="3" href="#">เอกสารเผยแพร่</a>
                                    <a class="tab" data-tab="4" href="#">จัดซื้อ/จัดจ้าง</a>
                                    <a class="tab" data-tab="5" href="#">ติดต่อเรา</a>
                                </div>
                            </div>
                            <div class="tab-contents">
                                <?php for($i=0; $i<6; $i++){?>
                                    <div class="tab-content <?php if($i==0)echo 'active'; ?>" data-tab="<?= $i ?>">
                                        <div class="scroll-wrapper" data-simplebar>
                                            <div class="gallery-grids">
                                                <div class="grid md-50 mt-0">
                                                    <ul class="ss-list">
                                                        <li><a href="#"><?= $i+1 ?>. ประวัติความเป็นมา</a></li>
                                                        <li><a href="#">โครงสร้างองค์กร</a></li>
                                                        <li><a href="#">คณะกรรมการกำกับกิจการพลังงาน</a></li>
                                                        <li><a href="#">ทำเนียบคณะกรรมการกำกับกิจการพลังงาน</a>
                                                            <ul class="ss-list-02">
                                                                <li><a href="#">วาระการดำรงตำแหน่ง พ.ศ. 2557- กันยายน 2561</a></li>
                                                                <li><a href="#">วาระการดำรงตำแหน่ง พ.ศ. 2554-2557</a></li>
                                                                <li><a href="#">วาระการดำรงตำแหน่ง พ.ศ. 2551-2554</a></li>
                                                            </ul>
                                                        </li>
                                                        <li><a href="#">วิสัยทัศน์ พันธกิจ และค่านิยมองค์กร</a></li>
                                                        <li><a href="#">วัตถุประสงค์หลักในการกำกับกิจการพลังงาน</a></li>
                                                        <li><a href="#">อำนาจหน้าที่ตาม พ.ร.บ.</a></li>
                                                        <li><a href="#">คณะผู้บริหารสำนักงาน</a></li>
                                                        <li><a href="#">สาร จากประธานกรรมการกำกับกิจการพลังงาน</a></li>
                                                        <li><a href="#">เจตจำนงสุจริตของผู้บริหาร</a></li>
                                                    </ul>
                                                </div>
                                                <div class="grid md-50 mt-0">
                                                    <ul class="ss-list">
                                                        <li><a href="#">วัตถุประสงค์หลักในการกำกับกิจการพลังงาน</a></li>
                                                        <li><a href="#">อำนาจหน้าที่ตาม พ.ร.บ.</a>
                                                            <ul class="ss-list-02">
                                                                <li><a href="#">คณะกรรมการกำกับกิจการพลังงาน</a></li>
                                                                <li><a href="#">สำนักงาน กกพ.</a></li>
                                                            </ul>
                                                        </li>
                                                        <li><a href="#">คณะผู้บริหารสำนักงาน</a>
                                                            <ul class="ss-list-02">
                                                                <li><a href="#">คณะผู้บริหารสำนักงาน</a></li>
                                                                <li><a href="#">ช่องทางการติดต่อของผู้บริหาร</a></li>
                                                            </ul>
                                                        </li>
                                                        <li><a href="#">สารจากประธานกรรมการกำกับกิจการพลังงาน</a></li>
                                                        <li><a href="#">เจตจำนงสุจริตของผู้บริหาร</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php }?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="options">
            <div class="option">
                <a class="link" href="#">
                    <i class="zmdi zmdi-account-circle"></i> 
                    เข้าสู่ระบบ
                </a>
            </div>
            <div class="option">
                <a class="link" href="#">
                    <i class="zmdi zmdi-smartphone-iphone"></i> 
                    บริการออนไลน์                    
                </a>
            </div>
            <div class="option">
                <a class="link" href="#">
                    <i class="zmdi zmdi-laptop-mac"></i> 
                    INTRANET
                </a>
            </div>
        </div>
        <a class="logo" href="#">
            <img src="assets/img/logo.png" alt="Logo" />
            <p>สำนักงานคณะกรรมการกำกับกิจการพลังงาน</p>
        </a>
        <div class="options">
            <div class="option">
                ขนาดตัวอักษร 
                <a class="btn-circle dark" href="#">+</a>
                <a class="btn-circle white" href="#">ก</a>
                <a class="btn-circle dark" href="#">-</a>
            </div>
            <div class="option">
                ความตัดกันของสี 
                <a class="btn-circle" href="#">ก</a>
                <a class="btn-circle btn-theme-1" href="#">ก</a>
                <a class="btn-circle btn-theme-2" href="#">ก</a>
            </div>
            <div class="option">
                ภาษา 
                <a class="btn-circle" href="#">
                    <div class="img-fill" style="background-image:url('assets/img/default/th_flag.png');"></div>
                </a>
                <a class="btn-circle inactive" href="#">
                    <div class="img-fill" style="background-image:url('assets/img/default/us_flag.png');"></div>
                </a>
            </div>
            <div class="option">
                <a class="link" href="#">
                    <img src="assets/img/icon/sitemap.png" alt="Sitemap" />
                    แผนผังเว็บไซต์
                </a>
            </div>
        </div>
    </div>
</nav>
<div class="topnav-spacer"></div>

<!-- Policy -->
<nav class="policy-nav">
    <div class="container">
        <div class="wrapper">
            <div class="text-container">
                <p>
                    Our website uses cookies to enhance our site and your visit satisfaction.
                    By continuing to use our website, you consent <br>
                    to cookies being used. See our <a class="link" href="#">Cookie Policy</a> 
                    to find out more.
                </p>
            </div>
            <div class="btns">
                <a class="link" href="#">Manage Cookies</a>
                <a class="btn btn-round btn-primary btn-sm fw-600" href="#">ACCEPT</a>
            </div>
            <a class="close" href="#">
                <img src="assets/img/icon/close.png" alt="Close Icon" />
            </a>
        </div>
    </div>
</nav>
