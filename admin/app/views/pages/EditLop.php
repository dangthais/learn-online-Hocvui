<?php
//model
$id = $data['id'];
$lop = $data['lop']->getLop($id);
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $tenlop = $_POST['lop'];
    $data['lop']->EditLop($tenlop,$id);
    echo("<script>location.href = '/DUAN1_NHOM1_QTT/admin/Lop_hoc/List';</script>");

}
?>
<p class="class-title">Lớp học</p>
<hr>
<div style="color:#219ebc;font-size:22px; margin-bottom: 10px;">Cập nhật Lớp học</div>
<form action="" method="POST">
    <label for="">Nhập tên lớp</label><br>
    <input type="text" name="lop" id="" value="<?= $lop['ten_lop'] ?>"><br>
    <button type="submit" id="submit">Cập nhật</button>
    <button type="reset" id="reset">Nhập lại</button>
    <a href="/DUAN1_NHOM1_QTT/admin/Lop_hoc/List" id="list">Danh sách</a>
</form>