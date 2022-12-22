<?php
//model
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $tenlop = $_POST['lop'];
    $data['lop']->addLop($tenlop);
    echo("<script>location.href = '/DUAN1_NHOM1_QTT/admin/Lop_hoc/List';</script>");

}
?>
<p class="class-title">Lớp học</p>
<hr>
<form action="" method="POST">
    <label for="">Nhập tên lớp</label><br>
    <input type="text" name="lop" id=""><br>
    <button type="submit" id="submit">Thêm</button>
    <button type="reset" id="reset">Nhập lại</button>
    <a href="/DUAN1_NHOM1_QTT/admin/Lop_hoc/List" id="list">Danh sách</a>
</form>