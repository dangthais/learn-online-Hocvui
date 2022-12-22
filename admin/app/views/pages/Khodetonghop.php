<?php
//model
$dslop = $data['lop']->getLopAll();
$dsmon = $data['mon']->getMonAll();
$dscauhoi = $data['cauhoi']->getCauhoiAll();
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $tende = $_POST['tende'];
    $idlop = $_POST['lop'];
    $idmon = $_POST['mon'];
    $loaide = $_POST['loai_de'];
    $data['khode']->addDeTH($tende,$idlop,$idmon,$loaide);
    $dsde = $data['khode']->getDeAllTH();
    $idde = $dsde[0]['id_de'];
    $dscauhoi = $data['cauhoi']->getCauhoiLM($idlop,$idmon);
    //random câu hỏi cho đề ( 10cau/de)
    for($i = 0; $i<10; $i++){
        $id_cauhoi = rand($dscauhoi[count($dscauhoi)-1]['id_cauhoi'],$dscauhoi[0]['id_cauhoi']);
        $data['dechitiet']->addDeChiTiet($idde,$id_cauhoi);
    }
    echo("<script>location.href = '/DUAN1_NHOM1_QTT/admin/Kho_de/DanhsachdeTH';</script>");

}
?>
<p class="class-title">Quản lý kho đề</p>
<hr>
<form action="" method="POST">
    <label for="">Nhập tên đề</label><br>
    <input type="text" name="tende" id=""><br>
    <label for="">Lớp học</label><br>
    <select name="lop">
        <option></option>
        <?php foreach($dslop as $lop):?>
            <option value="<?=$lop['id_lop']?>"><?=$lop['ten_lop']?></option>
        <?php endforeach ?>
    </select><br>
    <label for="">Môn học</label><br>
    <select name="mon">
        <option></option>
        <?php foreach($dsmon as $mon):?>
            <option value="<?=$mon['id_mon']?>"><?=$mon['ten_mon']?></option>
        <?php endforeach ?>
    </select><br>
    <label for="">Loại đề</label><br>
    <select name="loai_de">
        <option></option>
        <option value="De tong hop">Đề tổng hợp</option>
        <option value="De khoa hoc">Đề khóa học</option>
    </select><br>
    <button type="submit" id="submit">Tạo đề</button>
    <button type="reset" id="reset">Nhập lại</button>
    <a href="/DUAN1_NHOM1_QTT/admin/Kho_de/DanhsachdeTH" id="list">Danh sách</a>
</form>