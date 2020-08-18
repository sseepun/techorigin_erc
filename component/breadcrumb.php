<?php if(!empty($breadcrumb)){?>
    <section class="breadcrumb">
        <div class="container">
            <div class="wrapper">
                <div class="breadcrumb-container">
                    <?php foreach($breadcrumb as $b){?>
                        <a href="<?php echo $b['url']; ?>">
                            <?php echo $b['name']; ?>
                        </a>
                    <?php }?>
                </div>
            </div>
        </div>
    </section>
<?php }?>
