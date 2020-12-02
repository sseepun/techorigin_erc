<!DOCTYPE html>
<html lang="th">
<head>
    <?php include_once('include/header.php'); ?>
    <?php include_once('include/style.php'); ?>
</head>
<body class="loading">
    <?php include_once('include/topnav.php'); ?>

    <!-- Start Here -->
    <style>
        h1, h2, h3, h4, h5, h6 {margin: 0;}
        p{margin:.75rem 0 0 0; font-size: 1.125rem;}
        .container {
            max-width: 1140px; margin: 0 auto;
        }
        /* Color */
        .color-black {color: #000 !important;}
        .color-white {color: #fff !important;}
        .bg-white{background-color:#fff !important;}
        @media screen and (max-width: 1199.98px){
            .container {
                max-width: 960px;
            }
        }
        @media screen and (max-width: 991.98px){
            .container{
                max-width: 720px;
            }            
        }
        @media screen and (max-width: 767.98px){
            .container{
                max-width: 540px;
            }
        }
        @media screen and (max-width: 575.98px){
            .container{
                max-width: 100%;
            }
        }
        /* Layout */
        .pb-0 {padding-bottom:0 !important;}
        .section-padding {padding: 4rem 0;}
        .section-bg {padding:4rem 0; background-size: cover; background-repeat: no-repeat;}
        .header {font-size: 4rem; font-weight: 600;}
        .sub-header {font-size: 1.5rem; font-weight:200; letter-spacing: .1rem;}
        .text-wrapper {max-width:75%; margin: 0 auto;}
        .text-container {color:#fff; padding:4.5rem 0 0 0;}

        /* Tab Container */
        .tab-container {position:relative; display:block; width:100%; margin: 2.5rem 0 0 0;}
        .tab-container .tabs {
            position:relative; width:100%; display:flex; flex-wrap:wrap; margin:0; justify-content: space-between;
        }
        .tab-container .tabs .tab { width: calc(100%/7 - .5rem);}

        /* Stat Container */
        .stat-container  {margin: 1rem 0 0 0;}
        .stat-container h3 {font-weight: 400; font-size: 1.6rem;}
        .stat-container .stat-info { padding:1rem; border-left: 1px solid transparent; border-color:#fff;}
        .stat-container .grids .grid{margin: 1.5rem 0 0 0;}
        .stat-container .grids .grid:first-child .stat-info {border: none;}
        .stat-container .stat-info .name {font-size: 1.75rem; font-weight:200;}
        .stat-container .stat-info .name i {color:#29dfee; font-size:2.5rem;}
        .stat-container .stat-info .num {font-size: 2rem; font-weight:600;}
        .stat-container .stat-info .num > span {font-weight: 200; font-size:1rem; margin-left: 0.375rem;}


        /* Button */
        .btn-container {width:100%; display:flex; justify-content:center; margin: 1.75rem 0 0 0;}
        .btn-round { cursor:pointer; display:block; max-width:10.5rem; font-size:.7rem; color:#fff;  padding: .5rem 1.5rem; border-radius: 99999rem; text-align:center;} 
        .btn-round.btn-primary {
            background-color: #282828;
        }
        .btn-bg {background-image: url('./assets/img/bg/bg-btn.png'); background-position:center; background-size:cover; background-repeat: no-repeat;}
        .btn-round.btn-secondary {
            background-color: #ed8f09; 
        }
    </style>

    <section class="section-padding">
        <div class="container">
            <div class="header text-center">ทันสมัย ทันเหตุการณ์</div>
            <p class="text-center">อัพเดืข่าวสารด้านพลังงาน กิจกรรมต่างๆ พร้อมทั้งแสดงข้อคิดเห็นได้ที่นี่</p>
            <div class="tab-container">
                <div class="tabs">
                    <div class="tab">
                        <div class="btn-round btn-primary">กิจกรรม กกพ.</div>
                    </div>
                    <div class="tab">
                        <div class="btn-round btn-bg btn-secondary">ข่าวประชาสัมพันธ์</div>
                    </div>
                    <div class="tab">
                        <div class="btn-round btn-primary">รับฟังความคิดเห็น</div>
                    </div>
                    <div class="tab">
                        <div class="btn-round btn-primary">ข่าวกิจกรรมทางสังคม</div>
                    </div>
                    <div class="tab">
                        <div class="btn-round btn-primary">ข่าวรับสมัครงาน</div>
                    </div>
                    <div class="tab">
                        <div class="btn-round btn-primary">ประกาศจัดซื้อจัดจ้าง</div>
                    </div>
                    <div class="tab">
                        <div class="btn-round btn-primary">สถิติพลังงาน</div>
                    </div>
                    
                </div>
            <div class="tab-contents">
                <div class="tab-content">


                </div>
            </div>


            </div>
        
        </div>
    </section>
    <!-- เทคโนโลยีพลังงานน้ำ -->
    <section  class="section-bg" style="background-image:url('./assets/img/bg/05.jpg'); background-position:center; height: 36rem;">
        <div class="container">
            <div class="header text-center color-white">เทคโนโลยีพลังงานน้ำ</div>
            <div class="text-wrapper color-white">
                <p class="text-center"> 
                    น้ำจะสามารถนำมาใช้ประโยชน์ได้ต้องมีการกักเก็บน้ำไว้เพื่อเป็นการสะสมกำลัง โดยการก่อสร้างเขื่อนหรือฝายปิดลำน้ำที่มีระดับความสูงเป็นพลังงานศักย์และผันน้ำเข้าท่อไปยังเครื่องกังหันน้ำขับเครื่องกำเนิดไฟฟ้าพลังงานน้ำ
                </p>
            </div>

            <div class="stat-container color-white">
                <h3 class="text-center color-white">กำลังการผลิตรวมไฟฟ้าพลังงานน้ำของประเทศไทย</h3>
                <div class="grids">
                    <div class="grid lg-25 xl-25">
                        <div class="stat-info text-center">
                            <div class="name"><i class="fas fa-industry"></i> IPP</div>
                            <div class="num">14,248,50<span>MW</span></div>
                        </div>
                    </div>
                    <div class="grid lg-25 xl-25">
                        <div class="stat-info text-center">
                            <div class="name"><i class="fas fa-broadcast-tower"></i> Foreign</div>
                            <div class="num">5,720.60<span>MW</span></div>
                        </div>
                    </div>
                    <div class="grid lg-25 xl-25">
                        <div class="stat-info text-center">
                            <div class="name"><i class="fas fa-industry"></i> SSP</div>
                            <div class="num">9,473.94<span>MW</span></div>
                        </div>
                    </div>
                    <div class="grid lg-25 xl-25">
                        <div class="stat-info text-center">
                            <div class="name"><i class="fas fa-broadcast-tower"></i> EGAT</div>
                            <div class="num">16,034.83<span>MW</span></div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="btn-container">
                <div class="btn-round btn-bg btn-primary color-black bg-white">ดูรายละเอียดเพิ่มเติม</div>
            </div>
        </div>
    </section>

    <!-- พลังงานจากขยะ -->
    <section class="section-padding pb-0">
        <div class="container" style="background-image: url('./assets/img/bg/02.jpg'); background-position:bottom center; background-size: cover; background-repeat: no-repeat; height:36rem;">
            <div class="header text-center">พลังงานจากขยะ</div>
            <div class="text-wrapper">
                <h3 class="sub-header text-center">ต้นแบบโรงไฟฟ้าขยะชุมชลไร้มลพิษ แห่งแรกในไทย</h3>
                <p class="text-center"> 
                    ถ้าให้มองสถานการณ์ของการผลิตไฟฟ้าแบบดั้งเดิมโดยใช้ก๊าซธรรมชาติ มันมีความเสี่ยงที่จะทำให้ในอนาคตประเทศไทย
                    จะเสี่ยงต่อการที่ค่าไฟจะขึ้นราคาไปมากกว่านี้ เพราะปริมาณก๊าซในอ่าวไทยที่เราผลิตได้เองก็ลดน้อยลงทุก ๆ ปี
                </p>
            </div>
            
            <div class="btn-container">
                <div class="btn-round btn-bg btn-primary">ดูรายละเอียดเพิ่มเติม</div>
            </div>
        </div>
    </section>

    <!-- ความมั่นคงของพลังงาน -->
    <section class="section-bg" style="background-image:url('./assets/img/bg/03.jpg'); background-position:center; height: 36rem;">
        <div class="container">
            <div class="text-container">
                <div class="header text-center">ความมั่นคงของพลังงาน</div>
                <div class="text-wrapper">
                    <h3 class="sub-header text-center">ทั้งปัจจุบัน และอนาคต คือ หน้าที่ของเรา</h3>
                    <p class="text-center"> 
                    กำกับดูแลประกอบกิจการพลังงานให้มีระบบการบริหารจัดการพลังงานให้มีความมั่นคงและเชื่อถือได้ มีประสิทธิภาพเป็นธรรมต่อผู้ใช้และผู้ประกอบกิจการพลังงาน ตลอดจนเป็นมิตรต่อสิ่งแวดล้อม
                    </p>
                </div>
                
                <div class="btn-container">
                    <div class="btn-round btn-bg btn-secondary color-black">ดูรายละเอียดเพิ่มเติม</div>
                </div>
            </div>
        </div>
    </section>

    <!-- พลังที่ทำให้เราสะดวกสบาย -->
    <section class="section-bg" style="background-image:url('./assets/img/bg/04.jpg'); background-position:center; height: 36rem;">
        <div class="container">
            <div class="text-container">
                <div class="header text-center">พลังที่ทำให้เราสะดวกสบาย</div>
                <div class="text-wrapper">
                    <h3 class="sub-header text-center">มีน้ำไหล ไฟฟ้าสว่าง เพียงพอต่อความต้องการอย่างยั่งยืน</h3>
                    <p class="text-center"> 
                        และมีการจัดสรรปันส่วนให้เราทุกคนได้ใช้พลังงานได้อย่างเท่าเทียม และมาตรฐานความปลอดภัยให้เป็นไปอย่างมีประสิทธิภาพมั่นคงมีปริมาฟรเพียงพอ สามารถตอบสนองความต้องการภายในประเทศ
                    </p>
                </div>
                
                <div class="btn-container">
                    <div class="btn-round btn-bg btn-secondary color-black">ดูรายละเอียดเพิ่มเติม</div>
                </div>
            </div>
                
        </div>
    </section>

    
    <?php include_once('include/footer.php'); ?>
    <?php include_once('include/script.php'); ?>
</body>
</html>
