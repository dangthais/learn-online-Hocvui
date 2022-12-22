<?php
//model
$khoahoc = $this->model('KhoahocModel');
$dskhoahoc = $khoahoc->getkhAll();
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $tenbaigiang = $_POST['baigiang'];
    $idkhoahoc = $_POST['khoahoc'];
    $data['baigiang']->addBaigiang($tenbaigiang,$idkhoahoc);
    echo("<script>location.href = '/DUAN1_NHOM1_QTT/admin/Bai_giang/List';</script>");

}
?>
<p class="class-title">Bài giảng</p>
<hr>
<form action="" method="POST">
    <label for="">Nhập tên bài giảng</label><br>
    <input type="text" name="baigiang" id=""><br>
    <label for="">Khoa học</label><br>
    <select name="khoahoc">
        <option></option>
        <?php foreach($dskhoahoc as $khoahoc):?>
            <option value="<?=$khoahoc['id_khoahoc']?>"><?=$khoahoc['ten_khoahoc']?></option>
        <?php endforeach ?>
    </select><br>
    <button type="submit" id="submit">Thêm</button>
    <button type="reset" id="reset">Nhập lại</button>
    <a href="/DUAN1_NHOM1_QTT/admin/Bai_giang/List" id="list">Danh sách</a>
</form>