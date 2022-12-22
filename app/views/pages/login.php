<?php
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $error = [];
    $userName = trim($_POST['ten']);
    $passWord = $_POST['mk'];
    $users = $data['nguoidung']->getusername($userName);
    if ($users) {
        if ($passWord == $users['mat_khau'] && $users['vaitro'] == 0) {
            $_SESSION['userName'] = $users['ten'];
            $_SESSION['id_nguoidung'] = $users['id_nguoidung'];
            $_SESSION['userImg'] = $users['anh'];
            $_SESSION['lop'] = $users['lop'];
            $_SESSION['start'] = time();
            $_SESSION['expire'] = $_SESSION['start'] + (60 * 60);
            header('location:/DUAN1_NHOM1_QTT/');
        } else {
            $error['loidangnhap'] = "Tên tài khoản hoặc mật khẩu không đúng";
        }
    } else {
        $error['loidangnhap'] = "Tên tài khoản hoặc mật khẩu không đúng";
    }
}
?>
<form class="auth-form_login" id="login-form" action="" method="POST">
    <div class="auth-form__container">
        <div class="auth-form__header">
            <h3 class="auth-form__heading">Đăng Nhập Vào Tài Khoản Của bạn</h3>
        </div>
        <form class="auth-form_form">
            <div class="auth-form__group">
                <input type="text" name="ten" autofocus id="input-email" class="auth-form_input" placeholder="Username của bạn">
            </div>
            <div class="auth-form__group">
                <input type="password" name="mk" id="input-pass" class="auth-form_input" placeholder="Mật khẩu của bạn">
            </div>
        </form>

        <div class="auth-form_controls">
            <div class="forgot_password">
                <a href="fogotPass.html">Quên mật khẩu</a>
            </div>
            <button type="submit" class="btn btn--primary">Đăng nhập</button>
            <button class="btn"><a href="/DuAn1_Nhom1_QTT/user/register" class="btn btn--primary">Đăng Ký</a></button>
            <button class="btn btn--primary">Cancel</button><br>
            <span style="color:red;"><?= isset($error['loidangnhap']) ? $error['loidangnhap'] : '' ?></span><br>

        </div>
    </div>
</form>