<?php
//model
$idcauhoi = $data['idcauhoi'];
$cauhoi=$data['cauhoi']->getCauhoi($idcauhoi);
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $dapan = $_POST['tendapan'];
    $dapandung = $_POST['dapandung'];
    //model
    $data['dapan']->addDapan($dapan,$dapandung,$idcauhoi);
    echo("<script>location.href = '/DUAN1_NHOM1_QTT/admin/Dap_an/List/".$idcauhoi."';</script>");
}

?>

<h1>Thêm đáp án</h1>
<br>
<form action="" method="POST" >
    <label for="">Nhập đáp án</label><br>
    <input type="text" name="tendapan">
    <br>
    <label for="">Câu  hỏi</label><br>
    <input type="text" name="macauhoi" value="<?=$cauhoi['ten_cauhoi']?>">
    <br>
    <label for="">Đáp án đúng (0:Sai,1:Đúng)</label><br>
    <input type="number" name="dapandung" id=""><br>
    <button type="submit" style="background-color: green;">Thêm</button>  
    <button type="reset" id="reset">Nhập lại</button>
    <a href="/DUAN1_NHOM1_QTT/admin/Dap_an/List/<?=$idcauhoi?>" id="list">Danh sách</a>       


</form>