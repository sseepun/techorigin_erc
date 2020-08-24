<!DOCTYPE html>
<html lang="th">
<head>
    <?php include_once('include/header.php'); ?>
    <?php include_once('include/style.php'); ?>
    <style>
        /* Bullte */
        .bullet{position:relative; padding:1rem 0 1rem 1rem; border-bottom:1px solid #ccc;}
        .bullet::before{
            content:''; position:absolute;margin-top:2rem; top:0.1875rem; left:0; width:.4375rem; height:.4375rem;
            background:#c0ca67;
        }
        .slottab{
            color:white;display:flex;padding:.5rem .625rem .5rem .5rem;border-bottom:1px solid;
        }
        .slottab .icon{
            background-color: #1d684a;width: 2.625rem;height: 2.625rem;border-radius: .25rem;text-align: center;line-height: 2.625rem;
        }
        .slottab .title{
            margin: 0 0 0 .5rem;
        }
    </style>
</head>
<body>
    <?php include_once('include/topnav.php'); ?>
    <?php
        $breadcrumb = [
            [ 'name' => 'หน้าแรก', 'url' => './' ],
            [ 'name' => 'RSS Feed', 'url' => '#' ]
        ];
        include_once('component/breadcrumb.php');
    ?>

    <section class="section-padding">
        <div class="container">
            <!-- Special Header -->
            <div class="ss-header" data-aos="fade-up" data-aos-delay="0">
                <div class="ss">RSS</div><h1 class="color2">Feed</h1>
                <p><strong>กรมอนามัย</strong> พร้อมให้ข้อมูลข่าวสารที่เป็นประโยชน์สำหรับคุณ</p>
            </div>
            <div class="grids">
                <div class="grid sm-100 lg-70 xl-75" data-aos="fade-up" data-aos-delay="300">
                    <?php for($i=0; $i<7; $i++){?>
                        <div class="bullet">
                            <a class="ss-h4" href="#">
                                <strong>ประกาศประกวดราคาจ้างทำชุดของรางวัลก้าวท้าใจ ต้านภัย COVID-19 
                                ด้วยวิธีอิเล็กทรอนิกส์</strong>
                            </a>
                            <div class="ss-date color2">02.04.2563</div>
                            <p>
                                คอนโด หม่านโถว ไอติมชิฟฟอนอาข่าแตงกวาเซอร์ ม็อบซิ่งกรีนวีเจ 
                                เนิร์สเซอรี่เท็กซ์ไพลินไกด์ซะ อึ๋ม เพนกวินเช็งเม้งฟลุต บัตเตอร์ฮาโลวีนมายองเนสสปอร์ต 
                                เครปโดมิโนฟยอร์ดวิลล์ ชาร์ตเดอะสไตล์ ตาปรือกระดี๊กระด๊าอีสต์ เชฟซะมาเฟียโมจิ โฟม 
                                แชมพูแจ็กเก็ตรีเสิร์ชโบว์ลิ่ง...
                            </p>
                        </div>
                    <?php }?>

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
                                หน้าข่าวทั้งหมด
                            </a>
                        </div>
                    </div>
                </div>
                <div class="grid sm-100 lg-30 xl-25" data-aos="fade-up" data-aos-delay="600">
                    <div class="slots bg-color4">
                        <img src="./assets/img/default/banner-01.jpg">
                        <?php for($i=1; $i<=4; $i++){?>
                        <a href="#" style="text-decoration: none">
                            <div class="slottab">
                                <div class="icon">
                                    <i class="far fa-building"></i>
                                </div>
                                <div class="title">
                                    0<?php echo "$i"; ?>.<br>ข่าวจากหน่วยงานส่วนกลาง
                                </div>
                            </div>
                        </a>
                        <?php }?>  
                    </div>
                </div>

            </div>
        </div>
    </section>

    <?php include_once('include/footer.php'); ?>
    <?php include_once('include/script.php'); ?>
</body>
</html>
