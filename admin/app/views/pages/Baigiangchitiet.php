<?php
//model
$dskhoahoc = $data['khoahoc']->getkhAll();
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $tenbaigiangct = $_POST['baigiangchitiet'];
    $video = $_POST['video'];
    $soluotxem = $_POST['soluotxem'];
    $idbaigiang = $_POST['baigiang'];
    $data['baigiangct']->addBaigiangct($tenbaigiangct, $video, $soluotxem, $idbaigiang);
    echo("<script>location.href = '/DUAN1_NHOM1_QTT/admin/Bai_giang_chi_tiet/List';</script>");
}
?>
<p class="class-title">Bài giảng chi tiết</p>
<hr>
<!-- Show bài giảng theo khóa học -->
<script src="http://code.jquery.com/jquery-latest.min.js"></script>
<script>
$(document).ready(function(){
$('select#selectkhoahoc').on('change',function () {
        var tenkhoahoc = $(this).val();
        $.ajax({
                 type: "POST",
                 url: "../selectBaigiang.php",
                 data: {tenkhoahoc: tenkhoahoc},
                 success: function(msg) {
                     $('#baigiang').html(msg);
                 }
      })
      console.log(tenkhoahoc);
  });
});
</script>
<form action="" method="POST">
    <label for="">Nhập tên bài giảng chi tiết</label><br>
    <input type="text" name="baigiangchitiet" id=""><br>
    <label for="">Video</label><br>
    <input type="text" name="video" id=""><br>
    <label for="">Số lượt xem</label><br>
    <input type="number" name="soluotxem" id="" value="0" readonly><br>
    <label for="">Khóa học</label><br>
    <select  id="selectkhoahoc">
        <option></option>
        <?php foreach ($dskhoahoc as $khoahoc) : ?>
            <option value="<?= $khoahoc['id_khoahoc'] ?>"><?= $khoahoc['ten_khoahoc'] ?></option>
        <?php endforeach ?>
    </select><br>
    <label for="">Bài giảng</label><br>
    <select name="baigiang"  id="baigiang">
        <option></option>
    </select><br>
    <button type="submit" id="submit">Thêm</button>
    <button type="reset" id="reset">Nhập lại</button>
    <a href="/DUAN1_NHOM1_QTT/admin/Bai_giang_chi_tiet/List" id="list">Danh sách</a>
</form>
