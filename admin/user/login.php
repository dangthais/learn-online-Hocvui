<?php
require_once'getUser.php';
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $error = [];
    $userName = trim($_POST['username']);
    $passWord = $_POST['password'];
    $users = getUser($userName);
    if ($users) {
        if ($passWord == $users['mat_khau'] && $users['vaitro'] == 1) {
            $_SESSION['userNameAdmin'] = $users['ten'];
            $_SESSION['adminImg'] = $users['anh'];
            $_SESSION['start'] = time();
            $_SESSION['expire'] = $_SESSION['start'] + (60 * 60);
            header('location:/DUAN1_NHOM1_QTT/admin/Home');
            
        } else {
            $error['loidangnhap'] = "Tên tài khoản hoặc mật khẩu không đúng";
        }
    } else {
        $error['loidangnhap'] = "Tên tài khoản hoặc mật khẩu không đúng";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://kit.fontawesome.com/6da5ba8330.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./public/css/adminLogin.css">
</head>

<body>
    <header>
        <div class="header-2">
            <a href="#" class="logo">
                <img src="/DUAN1_NHOM1_QTT/public/images/logo1.png" alt="" width="150px" height="150px">
            </a>
        </div>
    </header>
    <section class="sign_in">
        <div>
            <p id="question-title">Đăng nhập trang quản trị</p>
            <form action="" method="POST">
                <label for="">Tên đăng nhập</label><br>
                <input type="text" name="username"><br>
                <label for="">Mật khẩu</label><br>
                <input type="password" name="password"><br>
                <input type="submit" value="Đăng nhập" name="sub"><br>
                <span style="color:red;"><?= isset($error['loidangnhap']) ? $error['loidangnhap'] : '' ?></span><br>
            </form>
        </div>
    </section>

</html>