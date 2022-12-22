<?php
//model
$id = $data['id'];
$de = $data['khode']->getDe($id);
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $tende = $_POST['tende'];
    $data['khode']->EditDe($tende,$id);
    echo("<script>location.href = '/DUAN1_NHOM1_QTT/admin/Kho_de/List';</script>");

}
?>
<p class="class-title">Quản lý kho đề</p>
<hr>
<div style="color:#219ebc;font-size:22px; margin-bottom: 10px;">Cập nhật đề</div>
<form action="" method="POST">
    <label for="">Nhập tên đề</label><br>
    <input type="text" name="tende" id="" value="<?= $de['ten_de'] ?>"><br>
    <button type="submit" id="submit">Cập nhật</button>
    <button type="reset" id="reset">Nhập lại</button>
    <a href="/DUAN1_NHOM1_QTT/admin/Kho_de/List" id="list">Danh sách</a>
</form>