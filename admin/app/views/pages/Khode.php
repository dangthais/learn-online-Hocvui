<?php
//model
$dskhoahoc = $data['khoahoc']->getkhAll();
$dscauhoi = $data['cauhoi']->getCauhoiAll();
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $tende = $_POST['tende'];
    $idkhoahoc = $_POST['khoahoc'];
    $loaide = $_POST['loai_de'];
    $data['khode']->addDe($tende,$idkhoahoc,$loaide);
    $dsde = $data['khode']->getDeAll();
    $idde = $dsde[0]['id_de'];
    $dscauhoi = $data['cauhoi']->getCauhoiKH($idkhoahoc);
    //random câu hỏi cho đề ( 10cau/de)
    for($i = 0; $i<10; $i++){
        $id_cauhoi = rand($dscauhoi[count($dscauhoi)-1]['id_cauhoi'],$dscauhoi[0]['id_cauhoi']);
        $data['dechitiet']->addDeChiTiet($idde,$id_cauhoi);
    }
    echo("<script>location.href = '/DUAN1_NHOM1_QTT/admin/Kho_de/List';</script>");

}
?>
<p class="class-title">Quản lý kho đề</p>
<hr>
<form action="" method="POST">
    <label for="">Nhập tên đề</label><br>
    <input type="text" name="tende" id=""><br>
    <label for="">Khoa học</label><br>
    <select name="khoahoc">
        <option></option>
        <?php foreach($dskhoahoc as $khoahoc):?>
            <option value="<?=$khoahoc['id_khoahoc']?>"><?=$khoahoc['ten_khoahoc']?></option>
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
    <a href="/DUAN1_NHOM1_QTT/admin/Kho_de/List" id="list">Danh sách</a>
</form>