<?php
//model
$lop =$this->model("LopModel");
$dslop =$lop->getLopAll();
$mon=$this->model("MonModel");
$dsmon=$mon->getMonAll();
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $ten_kh = $_POST['ten_kh'];
    $mo_ta = $_POST['mo_ta'];
    $anh = $_FILES['anh']['name'];
    if($_FILES['anh']['size'] >0){
        $anh=$_FILES['anh']['name'];
        move_uploaded_file($_FILES['anh']['tmp_name'],'../admin/public/images/'.$anh );
        
    }

    $luotxem= $_POST['luot_xem'];
    $malop= $_POST['malop'];
    $mamon= $_POST['mamon'];

    //model
    $data['khoa']->addKh($ten_kh,$mo_ta,$anh,$luotxem,$malop,$mamon);
    echo("<script>location.href = '/DUAN1_NHOM1_QTT/admin/Khoahoc/List';</script>");
}


?>

<h1>Thêm khóa học</h1>
<br>
<form action="" method="POST" enctype="multipart/form-data">
    <label for="">Tên khóa học</label><br>
    <input type="text" name="ten_kh" id=""><br>
    <label for="">Mô tả</label><br>
    <textarea name="mo_ta" id="" cols="40" rows="10"></textarea><br>
    <label for="">Ảnh Khóa Học</label><br>
    <input type="file" name="anh" id=""><br>
    <label for="">Số Lượt Xem</label><br>
    <input type="number" name="luot_xem" id="" value="0" readonly>
    <br>
    <label for="">Lớp</label>
    <select name="malop" id="">
                    <?php foreach ($dslop as $dm) : ?>
                        <option value="<?=$dm['id_lop'] ?>">
                            <?=$dm['ten_lop'] ?>
                        </option>
                    <?php endforeach ?>
                </select>
    <br>
    <br>
    <label for="">Mã Môn</label>
    <select name="mamon" id="">
                    <?php foreach ($dsmon as $dm) : ?>
                        <option value="<?=$dm['id_mon'] ?>">
                            <?=$dm['ten_mon'] ?>
                        </option>
                    <?php endforeach ?>
                </select>
    <br>
    <br>
    <button type="submit" style="background-color: green;">Thêm</button>  
    <button type="reset" id="reset">Nhập lại</button>
    <a href="/DUAN1_NHOM1_QTT/admin/Khoahoc/List" id="list">Danh sách</a>       


</form>