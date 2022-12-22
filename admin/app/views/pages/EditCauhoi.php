<?php
//model
$id = $data['id'];
$hoi = $data['hoi']->getCauhoi($id);
$khoa=$this->model("KhoahocModel");
$dskhoahoc=$khoa->getkhAll();
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $cauhoi = $_POST['tencauhoi'];
    $idkh = $_POST['makhoahoc'];
    //model
    $data['hoi']->EditCauhoi($cauhoi,$idkh,$id);
    echo("<script>location.href = '/DUAN1_NHOM1_QTT/admin/Bo_cauhoi/List';</script>");

}

?>

<h1>Cập nhật câu hỏi</h1>
<br>
<form action="" method="POST" enctype="multipart/form-data">
    <label for="">Nhập tên câu hỏi</label><br>
    <input type="text" name="tencauhoi" id=""><br>
    <br>
    <label for="">Mã Khóa Học</label>
    <select name="makhoahoc" id="">
                    <?php foreach ($dskhoahoc as $m) : ?>
                        <option value="<?=$m['id_khoahoc'] ?>">
                            <?=$m['ten_khoahoc'] ?>
                        </option>
                    <?php endforeach ?>
                </select>
    <br>
    <br>
    <button type="submit" style="background-color: green;">Thêm</button>  
    <button type="reset" id="reset">Nhập lại</button>
    <a href="/DUAN1_NHOM1_QTT/admin/Bo_cauhoi/List" id="list">Danh sách</a>       


</form>