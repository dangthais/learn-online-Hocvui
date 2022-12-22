<?php
    $id_nguoidung = $data['id_nguoidung'];
    $nguoidung = $data['nguoidung']->getuser($id_nguoidung);
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $error = '';
        $matkhaucu = $_POST['matkhaucu'];
        $matkhaumoi = $_POST['matkhaumoi'];
        if($matkhaucu != $nguoidung['mat_khau']){
            $error = 'Mật khẩu không đúng , vui lòng nhập lại';
        }else{
            $data['nguoidung']->EditUserPassword($matkhaumoi,$id_nguoidung);
            session_destroy();
            echo("<script>location.href = '/DuAn1_Nhom1_QTT/user/login';</script>");
        }
    }
?>
<div class="row ">
            
                <div class="col l-4 user_infor">
                    <div class="user_detail-avt">
                        <img class="user_img" src="/DuAn1_Nhom1_QTT/public/images/<?=$nguoidung['anh']?>" alt="">
                        <div class="user_avt-text">
                        </div>
                    </div>
                    <div class="user_introduce">
                        <h2><?=$nguoidung['hoten']?></h2>
                    </div>
                </div>
                
                <div class="col l-8 user_courses">
                    <h1>Thay đổi mật khẩu</h1>
                    <form action="" method="POST" enctype="multipart/form-data">
                    <div class="user_infomation">
                        <label for="">Mật khẩu cũ</label>
                        <input type="password"  name="matkhaucu" >
                    </div>
                    <div class="user_infomation">
                        <label for="">Mật khẩu mới</label>
                        <input type="password" name="matkhaumoi">
                    </div>
                    <span style="color: red ;"><?=isset($error)? $error:'';?></span><br>
                    <button type="submit" class="exercise-btn">
                        Cập Nhật
                    </button>
                    </form>
                   
                </div>
                
        </div>