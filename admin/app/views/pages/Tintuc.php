<?php
//model
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $tieude = $_POST['tieu_de'];
    $noidungngan = $_POST['noi_dung_ngan'];
    $noidung = $_POST['noi_dung'];

    $anh = $_FILES['anh']['name'];
    if($_FILES['anh']['size'] >0){
        $anh=$_FILES['anh']['name'];
        move_uploaded_file($_FILES['anh']['tmp_name'],'../admin/public/images/'.$anh );
        
    }

    $luotxem= $_POST['luot_xem'];

    //model
    $data['tintuc']->addTin($tieude,$noidungngan,$noidung,$luotxem,$anh);
    echo("<script>location.href = '/DUAN1_NHOM1_QTT/admin/Tin_tuc/List';</script>");
}


?>

<h1>Thêm bài viết</h1>
<br>
<form action="" method="POST" enctype="multipart/form-data">
    <label for="">Tiêu đề</label><br>
    <input type="text" name="tieu_de" id=""><br>
    <label for="">Nội dung ngắn</label><br>
    <input type="text" name="noi_dung_ngan" id=""><br>
    <label for="">Nội dung</label><br>
    <textarea name="noi_dung" id="editor1" cols="40" rows="10"></textarea><br>
    <label for="">Ảnh bìa</label><br>
    <input type="file" name="anh" id=""><br>
    <label for="">Số Lượt Xem</label><br>
    <input type="number" name="luot_xem" id="" value="0" readonly>
    <br>
    <button type="submit" style="background-color: green;">Thêm</button>  
    <button type="reset" id="reset">Nhập lại</button>
    <a href="/DUAN1_NHOM1_QTT/admin/Khoahoc/List" id="list">Danh sách</a>       


</form>