<?php
//model
$id = $data['id'];
$mon = $data['mon']->getMon($id);
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $tenmon = $_POST['mon'];
    $data['mon']->EditMon($tenmon,$id);
    echo("<script>location.href = '/DUAN1_NHOM1_QTT/admin/Mon_hoc/List';</script>");
}
?>
<p class="class-title">Môn học</p>
<hr>
<div style="color:#219ebc;font-size:22px; margin-bottom: 10px;">Cập nhật Môn học</div>
<form action="" method="POST">
    <label for="">Nhập tên môn</label><br>
    <input type="text" name="mon" id="" value="<?= $mon['ten_mon'] ?>"><br>
    <button type="submit" id="submit">Cập nhật</button>
    <button type="reset" id="reset">Nhập lại</button>
    <a href="/DUAN1_NHOM1_QTT/admin/Mon_hoc/List" id="list">Danh sách</a>
</form>