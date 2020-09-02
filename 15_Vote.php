<!DOCTYPE html>
<html lang="th">
<head>
    <?php include_once('include/header.php'); ?>
    <?php include_once('include/style.php'); ?>
    <style>
        .question-container .answers-wrapper {position:relative; display:flex; justify-content:space-between; flex-wrap:wrap-reverse;}
        .question-container .answers-wrapper > .chart-container img {width:100%;}
    </style>
</head>
<body>
    <?php include_once('include/topnav.php'); ?>
    <?php
        $breadcrumb = [
            [ 'name' => 'หน้าแรก', 'url' => './' ],
            [ 'name' => 'ข้อมูลของฉัน', 'url' => '#' ]
        ];
        include_once('component/breadcrumb.php');
    ?>
    <section class="section-padding">
        <div class="container">
            <div class="ss-header" data-aos="fade-up" data-aos-delay="0">
                <div class="ss">แ</div><h1 class="color2">บบสำรวจความคิดเห็น</h1>
                <p><strong>กรมอนามัย</strong> เชิญชวนทุกท่านร่วมตอบแบบสอบถาม</p>
            </div>
            <div class="grids">
            
            <div class="grid xl-70 lg-70 nd-100 sm-100">
                <form action="./" method="POST">
                    <div class="question-container mt-1-5 pt-0 pl-0 pr-0 pb-2 border-bottom">
                        <div class="question">
                            <div class="ss-icon-title mt-0">
                                <div class="icon bg-color4"><i class="fas fa-exclamation-triangle"></i></div>
                                <h2>คุณคิดว่า <span class="color4">"www.anamai.moph.go.th"</span> ปรับโฉมใหม่ ควรปรับปรุงอะไรเป็นลำดับแรกๆ</h2>
                            </div>
                        </div>
                        <div class="answers-wrapper">
                            <div class="answers">
                                <div class="field">
                                    <div class="control radio-control">
                                        <input type="radio" name="q_1" id="q_1_1">
                                        <label for="q_1_1">ขนาดเว็บไซต์ไม่พอดีกับหน้าจอ</label>
                                    </div>
                                </div>
                                <div class="field">
                                    <div class="control radio-control">
                                        <input type="radio" name="q_1" id="q_1_2">
                                        <label for="q_1_2">เว็บไซต์รกเกินไป</label>
                                    </div>
                                </div>
                                <div class="field">
                                    <div class="control radio-control">
                                        <input type="radio" name="q_1" id="q_1_3">
                                        <label for="q_1_3">หาข้อมูลไม่พบหรือพบยาก</label>
                                    </div>
                                </div>
                                <div class="field">
                                    <div class="control radio-control">
                                        <input type="radio" name="q_1" id="q_1_4">
                                        <label for="q_1_4">เว็บไซต์ทำงานไม่สมบูรณ์</label>
                                    </div>
                                </div>
                                <div class="field">
                                    <div class="control radio-control">
                                        <input type="radio" name="q_1" id="q_1_5">
                                        <label for="q_1_5">เว็บไซต์ทำงานช้า</label>
                                    </div>
                                </div>
                                <div class="btns mt-1">
                                    <button type="submit" class="btn btn-action btn-secondary next-icon">
                                        โหวต
                                    </button>
                                </div>
                                
                            </div>
                            <div class="chart-container">
                                <img src="./assets/img/default/pie_chart.png" alt="pie-chart">
                            </div>
                        </div>
                        
                    </div> 
                </form>
                <form action="./" method="POST">
                    <div class="question-container mt-1-5 pt-0 pl-0 pr-0 pb-2 border-bottom">
                        <div class="question">
                            <div class="ss-icon-title mt-0">
                                <div class="icon bg-color1"><i class="fas fa-exclamation-triangle"></i></div>
                                <h2>คุณคิดว่า <span class="color4">"www.anamai.moph.go.th"</span> ปรับโฉมใหม่ ควรปรับปรุงอะไรเป็นลำดับแรกๆ</h2>
                            </div>
                        </div>
                        <div class="answers-wrapper">
                            <div class="answers">
                                <div class="field">
                                    <div class="control radio-control">
                                        <input type="radio" name="q_1" id="q_1_1">
                                        <label for="q_1_1">ขนาดเว็บไซต์ไม่พอดีกับหน้าจอ</label>
                                    </div>
                                </div>
                                <div class="field">
                                    <div class="control radio-control">
                                        <input type="radio" name="q_1" id="q_1_2">
                                        <label for="q_1_2">เว็บไซต์รกเกินไป</label>
                                    </div>
                                </div>
                                <div class="field">
                                    <div class="control radio-control">
                                        <input type="radio" name="q_1" id="q_1_3">
                                        <label for="q_1_3">หาข้อมูลไม่พบหรือพบยาก</label>
                                    </div>
                                </div>
                                <div class="field">
                                    <div class="control radio-control">
                                        <input type="radio" name="q_1" id="q_1_4">
                                        <label for="q_1_4">เว็บไซต์ทำงานไม่สมบูรณ์</label>
                                    </div>
                                </div>
                                <div class="field">
                                    <div class="control radio-control">
                                        <input type="radio" name="q_1" id="q_1_5">
                                        <label for="q_1_5">เว็บไซต์ทำงานช้า</label>
                                    </div>
                                </div>
                                <div class="btns mt-1">
                                    <button type="submit" class="btn btn-action btn-secondary next-icon">
                                        โหวต
                                    </button>
                                </div>
                                
                            </div>
                            <div class="chart-container">
                                <img src="./assets/img/default/pie_chart.png" alt="pie-chart">
                            </div>
                        </div>
                        
                    </div> 
                </form>
                <div class="pagination no-margin">
                    <div class="wrapper">
                        <a href="#" class="page-btn page-first disabled"></a>
                        <a href="#" class="page-btn page-prev disabled"></a>
                        <a href="#" class="page-btn active">01</a>
                        <a href="#" class="page-btn">02</a>
                        <a href="#" class="page-btn">03</a>
                        <a href="#" class="page-btn">04</a>
                        <a href="#" class="page-btn">05</a>
                        <a href="#" class="page-btn page-next"></a>
                        <a href="#" class="page-btn page-last"></a>
                        <a class="btn btn-action btn-sm btn-primary next-icon" href="#">
                            ดูแบบสำรวจทั้งหมด
                        </a>
                    </div>
                </div>
            </div>
            
            <div class="grid xl-25 lg-30 md-100 sm-100" data-aos="fade-up" data-aos-delay="600">
                    <div class="slots no-mask lazy-bg" data-src="./assets/img/bg/26.jpg">
                        <img class="float-img type-13" src="./assets/img/hero/27.png" alt="Slot Float Image 01" />
                        <div class="slot mt-2">
                            <h2 class="header-text quote-text">
                                <span class="text-xl fw-400">สุขภาพดี</span> <br>
                                ส่งเสริม <br>
                                <span class="text-lg fw-400 color1">สถาบันครอบครัว</span> <br>
                                <span class="text-xl fw-400">แข็งแรง</span>
                            </h2>
                        </div>
                        <img class="float-img type-14 lazy-img" data-src="./assets/img/hero/28.png" alt="Slot Float Image 02" />
                    </div>
                </div>
            
            </div>
        </div>
    
    
    </section>


    <?php include_once('include/footer.php'); ?>
    <?php include_once('include/script.php'); ?>
    <script></script>
    
</body>
</html>