<?php
//model
$id = $data['id'];
$khoa = $data['khoa']->getkh($id);
$lophoc = $this->model("LopModel");
$dslophoc = $lophoc->getLopAll();
$mon = $this->model("MonModel");
$dsmonhoc = $mon->getMonAll();
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $ten_kh = $_POST['ten_kh'];
    $mo_ta = $_POST['mo_ta'];
    $file = $_FILES['anh'];
    $file_div = '../admin/public/images/';
    $anh = $_POST['anh'];
    if ($file['name'] != '') {
        $anh = $file['name'];
        move_uploaded_file($file['tmp_name'], $file_div . $anh);
    }
    $luotxem = $_POST['luot_xem'];
    $malop = $_POST['malop'];
    $mamon = $_POST['mamon'];

    //model
    $data['khoa']->Editkh($ten_kh, $mo_ta, $anh, $luotxem, $malop, $mamon, $id);
    echo("<script>location.href = '/DUAN1_NHOM1_QTT/admin/Khoahoc/List';</script>");
}
?>
<div class="edit">
    <div class="title">
        <h1>Sửa Khóa học</h1>
    </div>
    <div class="form">
        <form action="" method="POST" enctype="multipart/form-data">
            <div class="product_id">
                <input type="hidden" name="ma_kh" value="<?= $khoa['id_khoahoc']  ?>">
            </div>
            <div class="product_name">
                <label for="">Tên Khóa học</label>
                <input type="text" name="ten_kh" placeholder="Tên sản phẩm" value="<?= $khoa['ten_khoahoc'] ?>">
            </div>
            <div class="images">
                <label for="">Mô Tả</label>
                <textarea name="mo_ta" id="" cols="80%" rows="10"><?= $khoa['mo_ta'] ?> </textarea>
                <br>
            </div>
            <div class="images">
                <label for="">Ảnh khóa học</label>
                <input id="image" type="file" name="anh" id="">
                <br>
                <img src="/DUAN1_NHOM1_QTT/admin/public/images/<?= $khoa['anh_khoahoc'] ?>" width="120" height="60px" alt="">
                <input type="hidden" name="anh" value="<?= $khoa['anh_khoahoc'] ?>">
            </div>
            <br>
            <div class="hi1">
                <label for="">Số lượt xem</label>
                <input type="number" name="luot_xem" value="<?= $khoa['so_luot_xem'] ?>">
            </div>
            <label for="">Lớp</label>
            <select name="malop" id="">
                <option value="<?= $khoa['id_lop'] ?>"><?= $khoa['ten_lop'] ?></option>
                <?php foreach ($dslophoc as $dm) : ?>
                    <option value="<?= $dm['id_lop'] ?>">
                        <?= $dm['ten_lop'] ?>
                    </option>
                <?php endforeach ?>
            </select>
            <br>
            <br>
            <label for="">Môn</label>
            <select name="mamon" id="">
                <option value="<?= $khoa['id_mon'] ?>"><?= $khoa['ten_mon'] ?></option>
                <?php foreach ($dsmonhoc as $dm) : ?>
                    <option value="<?= $dm['id_mon'] ?>">
                        <?= $dm['ten_mon'] ?>
                    </option>
                <?php endforeach ?>
            </select>
            <br>
            <br>
            <button type="submit" style="background-color: #FB8500;">Cập nhật</button>
            <button type="reset" id="reset">Nhập lại</button>
            <a href="/DUAN1_NHOM1_QTT/admin/Khoahoc/List" id="list">Danh sách</a>
    </div>
    </form>
</div>
</div>