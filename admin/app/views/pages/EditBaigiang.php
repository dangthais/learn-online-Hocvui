<?php
//model
$idbaigiang = $data['id'];
$baigiang = $data['baigiang']->getBaigiang($idbaigiang);
$idkhoahoc = $baigiang['id_khoahoc'];
$khoahoc = $this->model('KhoahocModel');
$khoahocht = $khoahoc->getkh($idkhoahoc);
$dskhoahoc = $khoahoc->getkhAll();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $tenbaigiang = $_POST['baigiang'];
    $idkhoahoc = $_POST['khoahoc'];
    $data['baigiang']->EditBaigiang($tenbaigiang,$idkhoahoc,$idbaigiang);
    echo("<script>location.href = '/DUAN1_NHOM1_QTT/admin/Bai_giang/List';</script>");

}
?>
<p class="class-title">Bài giảng</p>
<hr>
<h1>Cập nhật bài giảng</h1>
<form action="" method="POST">
    <label for="">Nhập tên bài giảng</label><br>
    <input type="text" name="baigiang" id="" value="<?=$baigiang['ten_baigiang']?>"><br>
    <label for="">Khoa học</label><br>
    <select name="khoahoc">
        <option value="<?=$khoahocht['id_khoahoc']?>"><?=$khoahocht['ten_khoahoc']?></option>
        <?php foreach($dskhoahoc as $khoahoc):?>
            <option value="<?=$khoahoc['id_khoahoc']?>"><?=$khoahoc['ten_khoahoc']?></option>
        <?php endforeach ?>
    </select><br>
    <button type="submit" id="submit">Cập nhật</button>
    <button type="reset" id="reset">Nhập lại</button>
    <a href="/DUAN1_NHOM1_QTT/admin/Bai_giang/List" id="list">Danh sách</a>
</form>