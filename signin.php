<!DOCTYPE html>
<html lang="th">
<head>
    <?php include_once('include/header.php'); ?>
    <?php include_once('include/style.php'); ?>
</head>
<body class="loading">
    <?php include_once('include/page-loader.php'); ?>

    <section class="auth-01" style="background-image:url('assets/img/bg/01.jpg');">
        <div class="auth-container">
            <div class="logo-container">
                <img src="assets/img/logo-white.png" alt="Logo" />
            </div>
            <div class="auth-wrapper">
                <h2 class="title text-center">
                    เข้าสู่ระบบโคปลายน้ำ
                </h2>
                <form action="" method="POST">
                    <div class="form-group-icon">
                        <input type="text" name="username" required />
                        <div class="icon-prefix">
                            <i class="zmdi zmdi-account-o"></i>
                        </div>
                    </div>
                    <div class="form-group-icon">
                        <input type="password" name="username" required />
                        <div class="icon-prefix">
                            <i class="zmdi zmdi-lock-outline"></i>
                        </div>
                    </div>
                    <div class="btns">
                        <button type="submit" class="btn btn-white">
                            เข้าสู้ระบบ
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </section>
    
    <?php include_once('include/script.php'); ?>
</body>
</html>
