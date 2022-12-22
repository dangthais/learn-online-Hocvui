<?php
//model
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $tenmon = $_POST['mon'];
    $data['mon']->addMon($tenmon);
    echo("<script>location.href = '/DUAN1_NHOM1_QTT/admin/Mon_hoc/List';</script>");

}
?>
<p class="class-title">Môn học</p>
<hr>
<form action="" method="POST">
    <label for="">Nhập tên môn</label><br>
    <input type="text" name="mon" id=""><br>
    <button type="submit" id="submit">Thêm</button>
    <button type="reset" id="reset">Nhập lại</button>
    <a href="/DUAN1_NHOM1_QTT/admin/Mon_hoc/List" id="list">Danh sách</a>
</form>