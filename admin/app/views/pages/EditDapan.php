<?php
//model
$iddapan = $data['iddapan'];
$idcauhoi = $data['idcauhoi'];
$dapan = $data['dapan']->getDapan($iddapan);
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $dapan = $_POST['tendapan'];
    $dapandung = $_POST['dapandung'];
    //model
    $data['dapan']->EditDapan($dapan,$dapandung,$iddapan);
    echo("<script>location.href = '/DUAN1_NHOM1_QTT/admin/Dap_an/List/".$idcauhoi."';</script>");

}

?>

<h1>Cập nhật đáp án</h1>
<br>
<form action="" method="POST" >
    <label for="">Nhập đáp án</label><br>
    <input type="text" name="tendapan" value="<?=$dapan['ten_dapan']?>">
    <br>
    <label for="">Đáp án đúng (0:Sai,1:Đúng)</label><br>
    <input type="number" name="dapandung" id="" value="<?=$dapan['dap_an_dung']?>"><br>
    <button type="submit" style="background-color: green;">Cập nhật</button>  
    <button type="reset" id="reset">Nhập lại</button>
    <a href="/DUAN1_NHOM1_QTT/admin/Dap_an/List/<?=$idcauhoi?>" id="list">Danh sách</a>       


</form>