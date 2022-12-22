<?php
//model
$idct = $data['idct'];
$dsbaigiang = $data['baigiang']->getBaigiangAll();
$baigiangct = $data['baigiangct']->getBaigiangct($idct);
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $tenbaigiangct = $_POST['baigiangchitiet'];
    $video = $_POST['video'];
    $soluotxem = $_POST['soluotxem'];
    $idbaigiang = $_POST['baigiang'];
    $data['baigiangct']->EditBaigiangct($idct,$tenbaigiangct, $video, $soluotxem, $idbaigiang);
    echo("<script>location.href = '/DUAN1_NHOM1_QTT/admin/Bai_giang_chi_tiet/List';</script>");
}
?>
<p class="class-title"> Bài giảng chi tiết</p>
<hr>
<h1>Cập nhật bài giảng chi tiết</h1>
<form action="" method="POST">
    <label for="">Nhập tên bài giảng chi tiết</label><br>
    <input type="text" name="baigiangchitiet" id="" value="<?=$baigiangct['ten_baigiangchitiet']?>"><br>
    <label for="">Video</label><br>
    <input type="text" name="video" id="" value="<?=$baigiangct['video']?>"><br>
    <label for="">Số lượt xem</label><br>
    <input type="number" name="soluotxem" id="" value="<?=$baigiangct['so_luot_xem']?>"><br>
    <label for="">Bài giảng</label><br>
    <select name="baigiang"  id="baigiang">
        <option value="<?=$baigiangct['id_baigiang']?>"><?=$baigiangct['ten_baigiang']?></option>
        <?php foreach ($dsbaigiang as $baigiangs) : ?>
            <option value="<?= $baigiangs['id_baigiang'] ?>"><?= $baigiangs['ten_baigiang'] ?></option>
        <?php endforeach ?>
    </select><br>
    <button type="submit" id="submit">Cập nhật</button>
    <button type="reset" id="reset">Nhập lại</button>
    <a href="/DUAN1_NHOM1_QTT/admin/Bai_giang_chi_tiet/List" id="list">Danh sách</a>
</form>
