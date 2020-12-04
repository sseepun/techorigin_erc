<?php if(!empty($breadcrumb)){?>
    <section class="breadcrumb-01" data-aos="fade-up" data-aos-delay="0">
        <div class="container">
            <div class="wrapper">
                <h6><a href="index.php">หน้าแรก</a></h6>
                <?php foreach($breadcrumb as $b){?>
                    <h6>
                        <i class="zmdi zmdi-chevron-right"></i>
                        <a href="<?= $b['url'] ?>"><?= $b['display'] ?></a>
                    </h6> 
                <?php }?>
            </div>
        </div>
    </section>
<?php }?>
