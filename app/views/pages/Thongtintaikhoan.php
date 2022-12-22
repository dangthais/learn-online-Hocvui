<?php
$id_nguoidung = $data['id_nguoidung'];
$nguoidung = $data['nguoidung']->getuser($id_nguoidung);
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $hoten = $_POST['hoten'];
    $lop = $_POST['lop'];
    $email = $_POST['email'];
    $file = $_FILES['hinh'];
    $anh = $file['name'];
    $file_div = './public/images/';
    move_uploaded_file($file['tmp_name'], $file_div . $anh);
    $data['nguoidung']->Edituser($hoten, $lop, $email, $anh, $id_nguoidung);
    echo ("<script>location.href = '/DUAN1_NHOM1_QTT/';</script>");
}
?>
<div class="row ">

    <div class="col l-4 user_infor">
        <div class="user_detail-avt">
            <img class="user_img" src="/DuAn1_Nhom1_QTT/public/images/<?= $nguoidung['anh'] ?>" alt="">
            <div class="user_avt-text">
            </div>
        </div>
        <div class="user_introduce">
            <h2><?= $nguoidung['hoten'] ?></h2>
        </div>
    </div>

    <div class="col l-8 user_courses">
        <h1>Thông tin của người dùng</h1>
        <form action="" method="POST" enctype="multipart/form-data">
            <div>
                <label for="">Ảnh đại diện</label>
                <input type="file" name="hinh" id="">
            </div>
            <div class="user_infomation">
                <label for="">Họ Tên</label>
                <input type="text" placeholder="họ tên" name="hoten" value="<?= $nguoidung['hoten'] ?>">
            </div>
            <div class="user_infomation">
                <label for="">Lớp</label>
                <input type="text" placeholder="Lớp" name="lop" value="<?= $nguoidung['lop'] ?>">
            </div>
            <div class="user_infomation">
                <label for="">Email</label>
                <input type="text" placeholder="Email" name="email" value="<?= $nguoidung['email'] ?>">
            </div>
            <button type="submit" class="exercise-btn">
                Cập Nhật
            </button>
        </form>

    </div>

</div>