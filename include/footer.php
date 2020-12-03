<style>
    .footer .grids h4 {font-size:1.875rem; font-weight:300;}
    /* Color */
    .color-contact-01 {color: #e59d2b !important;}
    .color-contact-02 {color: #e7a439 !important;}

    /* footer-top */
    .footer .footer-top {margin-bottom: 3.5rem;}
    .footer .footer-top h4 {position:relative; font-weight:100; font-size:2rem; letter-spacing: .05rem;}
    .footer .footer-top h2 {position:relative;  font-weight:300;}
    .footer .footer-top h2::before {content: '“'; position:absolute; top:-3.5rem; left:10rem; font-size: 15rem; font-weight:600;}
    .footer .footer-top h4::after {content: '“'; transform: rotate(180deg); position:absolute; bottom:-2rem; right:10rem; font-size:7.5rem; font-weight:600;}
    .footer-list {list-style:none;  padding:0; margin: .5rem 0;}
    .footer-list li {font-size:1.25rem;  font-weight:100; position:relative; padding:.375rem 0 .375rem 1rem;}
    .footer-list li::before {content: ''; position:absolute; top:.875rem; left:0; width:0.375rem; height:0.375rem; background-color:#ebed6c; }
    
    /* footer-bottom */

    /* Socials */
    .footer-bottom{padding: 5.5rem 0 0 0;}
    .footer-bottom .socials {display:flex; justify-content: center; align-items:center; width:100%;}
    .footer-bottom .socials .social {margin: 0 .5rem 0 0; width:2.5rem; height:2.5rem; line-height:3rem; text-align:center; border: .1875rem solid transparent; border-color:#fff;}
    .footer-bottom .address {color:#fff; margin: 1.5rem 0 0 0;}
    .footer-bottom .contact-info {color:#fff; line-height:1.75rem;}
    .footer-bottom .contact-info .contacts  {font-size:1.25rem; width:100%; display:flex; justify-content:center;}
    .footer-bottom .contact-info .contacts .contact {display:flex; align-items: center; margin: 0 1rem 0 0;}
    .footer-bottom .contact-info .contacts .contact img {margin: 0 .375rem 0 0;}
    .footer-bottom .contact-info .contacts .contact span {margin: 0 .5rem 0 0;}



    .footer .blocks {display:flex; justify-content: center; flex-wrap:wrap; margin:1.5rem 0 0 0; }
    .footer .blocks .block {margin: 1rem 1.5rem 0 0;}
    .footer .copy-right {margin: .75rem 0 0 0;}


    /* Responsive */
    @media screen and (max-width:1200px) {
        .footer .footer-top h2::before{left:4.5rem;}
        .footer .footer-top h4::after {right:4.5rem;}
    }
    @media screen and (max-width:991.98px) {
        .footer .footer-top h2::before{left:-1.5rem; font-size:12rem; top:-2rem;}
        .footer .footer-top h4::after {right:-2.5rem;}
    }
    @media screen and (max-width:767.98px) {
        .footer .footer-top h2{ font-size:3.5rem;}
        .footer .footer-top h4 {font-size:1.375rem;}
        .footer .footer-top h2::before{left:-1rem; top:-1rem; font-size:7.5rem;}
        .footer .footer-top h4::after {right:-1rem; bottom: -1.25rem; font-size: 5rem;}
    }
    @media screen and (max-width:575.98px){

    }
</style>
<nav class="footer" style="background-image: url('./assets/img/bg/06.jpg'); background-size:cover; background-repeat:no-repeat; background-position:center; padding: 5rem 0 2rem 0;">
    <div class="container">
        <div class="footer-top color-white text-center">
            <h2>ขอขอบคุณทุกพันธมิตรของพวกเรา</h2>
            <h4>ที่ร่วมสร้างสรรสิ่งดีดี เพื่อสังคมและเพื่อการพัฒนาประเทศของเราให้เติบโตอย่างยั่งยืน</h4>
        </div>

        <div class="grids">
            <div class="grid xl-20 lg-20">
                <h4 class="color-white">Link ภายใน</h4>
                <ul class="footer-list">
                    <?php for($i =0; $i < 7; $i++){?>
                        <li>
                            <a href="#" class="color-white">ช่องทางร้องเรียน</a>
                        </li>
                    <?php }?>
                </ul>
            </div>

            <div class="grid xl-20 lg-20">
                <h4 class="color-white">กระทรวงอุตสาหกรรม</h4>
                <ul class="footer-list">
                    <?php for($i =0; $i < 7; $i++){?>
                        <li>
                            <a href="#" class="color-white">กระทรวงอุตสาหกรรม</a>
                        </li>
                    <?php }?>
                </ul>
            </div>

            <div class="grid xl-20 lg-20">
                <h4 class="color-white">สถาบันเครือข่าย</h4>
                <ul class="footer-list">
                    <?php for($i =0; $i < 11; $i++){?>
                        <li>
                            <a href="#" class="color-white">สถาบันเพิ่มผลผลิตแห่งชาติ (สพช.)</a>
                        </li>
                    <?php }?>
                </ul>
            </div>

            <div class="grid xl-20 lg-20">
                <h4 class="color-white">หน่วยงานที่เกี่ยวข้อง</h4>
                <ul class="footer-list">
                    <?php for($i =0; $i < 16; $i++){?>
                        <li>
                            <a href="#" class="color-white">กรมชลประทาน</a>
                        </li>
                    <?php }?>
                </ul>
            </div>

            <div class="grid xl-20 lg-20">
                <h4 class="color-white">บริษัทร่วมทุน</h4>
                <ul class="footer-list">
                    <?php for($i =0; $i < 9; $i++){?>
                        <li>
                            <a href="#" class="color-white">บริษัท จัดการและพัฒนาทรัพยากรน้ำ</a>
                        </li>
                    <?php }?>
                </ul>
            </div>
        </div>

        <div class="footer-bottom">
            <div class="socials">
                <div class="social">
                    <img src="./assets/img/icon/fb.png" alt="social-icon" />
                </div>
                <div class="social">
                    <img src="./assets/img/icon/ig.png" alt="social-icon" />
                </div>
                <div class="social">
                    <img src="./assets/img/icon/tw.png" alt="social-icon" />
                </div>
            </div>
            <!-- Address -->
            <div class="address text-center">
                <h3 class="color-contact-01">สำนักงานคณะกรรมการกำกับกิจการพลังงาน (สำนักงาน กกพ.)</h3>
                <h6 class="fw-100">319 อาคารจัตุรัสจามจุรี ชั้น 19 ถนนพญาไท แขวงปทุมวัน เขตปทุมวัน กรุงเทพฯ 10330</h6>
            </div>
            <!-- Contact Info -->
            <div class="contact-info text-center">
                <div class="contacts fw-100">
                    <div class="contact">
                        <img src="./assets/img/icon/phone.png" alt="contact-icon">
                        <span class="color-contact-02">Telephone.</span> 0 2207 3599
                    </div>
                    <div class="contact">
                        <img src="./assets/img/icon/fax.png" alt="contact-icon">
                        <span class="color-contact-02">Fax.</span> 0 2207 35066
                    </div>
                    <div class="contact">
                        <img src="./assets/img/icon/callcenter.png" alt="contact-icon">
                        <span class="color-contact-02">Call Center</span> 1204
                    </div>
                </div>
                <p class="fw-100">E-mail: support@erc.or.th</p>
            </div>
           

        </div>
        
        <div class="blocks">
            <div class="block text-center">
                <a class="color-white fw-100" href="#">การปฏิเสธความรับผิดชอบ (Disclaimer)</a>       
            </div>
            <div class="block text-center">
                <a class="color-white fw-100" href="#">นโยบายเว็บไซต์ (Website Policy)</a>       
            </div>
            <div class="block text-center">
                <a class="color-white fw-100" href="#">นโยบายการคุ้มครองข้อมูลส่วนบุคคล (Privacy Policy)</a>       
            </div>
            <div class="block text-center">
                <a class="color-white fw-100" href="#">นโยบายการรักษาความมั่นคงปลอดภัยของเว็บไซต์ (Website Security Policy)</a>       
            </div>
        </div>

        <div class="copy-right color-white text-center fw-100">สงวนสิทธิ์ 2563 &copy; สำนักงานคณะกรรมการกำกับกิจการพลังงาน (สำนักงาน กกพ.)</div>

    </div>
    
</nav>