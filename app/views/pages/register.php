<?php
    $dslop = $data['lop']->getLopAll();
    if($_SERVER['REQUEST_METHOD'] == "POST"){
        $hoten = $_POST['hoten'];
        $email = $_POST['email'];
        $lop = $_POST['lop'];
        $ten = $_POST['ten'];
        $makhau = $_POST['mk'];
        $data['nguoidung']->adduser($hoten,$ten,$makhau,$email,$lop);
        $_SESSION['userName'] = $ten;
        $_SESSION['lop'] = $lop;
        echo("<script>location.href = '/DUAN1_NHOM1_QTT/';</script>");

    }
?>
<form class="auth-form__regis" id="register-form" method="POST" action="" enctype="multipart/form-data">
            <div class="auth-form__container">                          
                <div class="auth-form__header">
                    <h3 class="auth-form__heading">Đăng Ký Tài Khoản</h3>
                </div>
                <div class="auth-form_form" >
                    <div class="auth-form__group">
                        <input type="text" class="auth-form_input" autofocus id="regis-username" name="hoten" placeholder="Ho và ten">
                        <small></small>
                    </div>
                    <div class="auth-form__group">
                        <input type="email" class="auth-form_input" id="regis-email" name="email" placeholder="Email của bạn">
                        <small></small>
                    </div>
    <select name="lop" id="" class="auth-form_input">
                    <?php foreach ($dslop as $dm) : ?>
                        <option value="<?=$dm['ten_lop'] ?>">
                            <?=$dm['ten_lop'] ?>
                        </option>
                    <?php endforeach ?>
                </select>
    <br>
                    <div class="auth-form__group">
                        <input type="text" class="auth-form_input" autofocus id="regis-username" name="ten" placeholder="Username">
                        <small></small>
                    </div>
                    <div class="auth-form__group">
                        <input type="password" class="auth-form_input" id="regis-pass" name="mk" placeholder="Mật khẩu của bạn">
                        <small></small>
                    </div>
                    <div class="auth-form__group">
                        <input type="password" class="auth-form_input" id="retype-pass" name="mk" placeholder="Nhập lại mật khẩu">
                        <small></small>
                    </div>

                </div>
                <div class="auth-form_controls">
                    <button type="submit" class="btn btn--primary">Đăng Ký</button>
                </div>
            </div>
        </form>   