<!DOCTYPE html>
<html lang="th">
<head>
    <?php include_once('include/header.php'); ?>
    <?php include_once('include/style.php'); ?>
</head>
<body>
    <?php include_once('include/topnav.php'); ?>

    <section class="search-01 section-padding">
        <div class="container">
            <h4 class="text-center color-secondary" data-aos="fade-up" data-aos-delay="0">
                อปท. ที่ได้รางวัล
            </h4>
            <img class="sep-01" src="assets/img/hero/03.png" alt="Separation" data-aos="fade-up" data-aos-delay="150" />
            <form action="" method="GET" data-aos="fade-up" data-aos-delay="300">
                <div class="search-box mt bg-primary">
                    <input type="text" name="keyword" class="lg" placeholder="คำค้นหา..." required />
                </div>
                <div class="search-box bg-primary">
                    <div class="items">
                        <div class="item">
                            <select class="bg-gradient">
                                <option value="">ประเภทรางวัล</option>
                            </select>
                        </div>
                        <div class="item">
                            <select class="bg-gradient">
                                <option value="">รางวัล</option>
                            </select>
                        </div>
                        <div class="item">
                            <select class="bg-gradient">
                                <option value="">จังหวัด</option>
                            </select>
                        </div>
                        <div class="item">
                            <select class="bg-gradient">
                                <option value="">อำเภอ</option>
                            </select>
                        </div>
                        <div class="item">
                            <select class="bg-gradient">
                                <option value="">จากปี พ.ศ.</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="btns">
                    <button type="submit" class="btn btn-secondary">
                        <i class="zmdi zmdi-search mr-1"></i> ค้นหา
                    </button>
                </div>
            </form>
            <div class="thai-map-container" data-aos="fade-up" data-aos-delay="450">
                <div class="option">
                    <h4 class="text-center color-secondary"></h4>
                    <a class="color-black h-color-primary" href="#">
                        <i class="zmdi zmdi-chevron-left mr-1"></i> กลับหน้าหลัก
                    </a>
                </div>
                <div class="thai-map-wrapper">
                    <div class="wrapper">
                        <div class="thai-map" id="thai-map"></div>
                        <div class="region-tags">
                            <img class="region region-1" src="assets/img/hero/region-1.png" alt="Region 1" />
                            <img class="region region-2" src="assets/img/hero/region-2.png" alt="Region 2" />
                            <img class="region region-3" src="assets/img/hero/region-3.png" alt="Region 3" />
                            <img class="region region-4" src="assets/img/hero/region-4.png" alt="Region 4" />
                            <img class="region region-5" src="assets/img/hero/region-5.png" alt="Region 5" />
                            <img class="region region-6" src="assets/img/hero/region-6.png" alt="Region 6" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <?php include_once('include/footer.php'); ?>
    <?php include_once('include/script.php'); ?>

    <script>var focusProvince = false, focusRegion = 5;</script>
    <script src="assets/js/d3.v5.min.js"></script>
    <script src="assets/js/thai-map.js"></script>
    <script src="assets/js/thai-map-process.js"></script>
</body>
</html>
