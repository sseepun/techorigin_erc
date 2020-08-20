<!DOCTYPE html>
<html lang="th">
<head>
    <?php include_once('include/header.php'); ?>
    <?php include_once('include/style.php'); ?>
    </head>
<body>
    <?php include_once('include/topnav.php'); ?> 
    <section class="main-contact">
        <div class="container">
            <div class="grids">
                <div class="grid lg-50 md-100 sm-100">
                    <form action="">
                        <div class="form-control">
                            <label for="firstname">ชื่อ *</label>
                            <input type="text" name="firstname" required>
                        </div>
                        <div class="form-control">
                            <label for="lastname">นามสกุล</label>
                            <input type="text" name="lastname">
                        </div>
                        <div class="form-control">
                            <label for="phone">หมายเลขโทรศัพท์ *</label>
                            <input type="text" name="phone" required>
                        </div>
                        <div class="form-control">
                            <label for="email">อีเมล</label>
                            <input type="text" name="email">
                        </div>
                        <div class="form-control">
                            <label for="message">ข้อความ</label>
                            <textarea name="message"></textarea>
                        </div>
                    
                    </form>
                </div>
                <div class="grid lg-50 md-100 sm-100"></div>
            </div>
        </div>
    </section>  
    <?php include_once('include/footer.php'); ?>
    <?php include_once('include/script.php'); ?>
</body>
</html>