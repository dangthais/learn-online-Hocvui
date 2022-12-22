<?php
//model
$khoa=$this->model("KhoahocModel");
$dskhoahoc=$khoa->getkhAll();
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $cauhoi = $_POST['tencauhoi'];
    $idkh = $_POST['makhoahoc'];
    //model
    $data['hoi']->addCauhoi($cauhoi,$idkh);
    header('location:/DUAN1_NHOM1_QTT/admin/Bo_cauhoi/List');
}

?>

<h1>Thêm câu hỏi</h1>
<br>
<form action="" method="POST" enctype="multipart/form-data">
    <label for="">Nhập câu hỏi</label><br>
    <textarea name="tencauhoi" id="" cols="80" rows="5"></textarea>
    <br>
    <br>
    <label for="">Khóa Học</label>
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