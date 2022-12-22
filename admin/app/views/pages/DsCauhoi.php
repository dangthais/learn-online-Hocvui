<?php
//model
$dskhoahoc = $data['khoahoc']->getkhAll();
if($_SERVER['REQUEST_METHOD'] == "POST"){
    $id_khoahoc = $_POST['selectKH'];
    $dscauhoitong = $data['hoi']-> getCauhoiKH($id_khoahoc);
}else{
    $dscauhoitong = $data['hoi']-> getCauhoiAll();
}
$productPageSum = 20;
$pageSum = ceil(count($dscauhoitong)/$productPageSum);
if(isset($_GET['page'])){
    $page = $_GET['page'];
}else{
    $page = 1;
}
$from = ($page -1)*$productPageSum;
if(isset($id_khoahoc)){
    $dscauhoi = $data['hoi']->getCauhoiFromKH($from, $productPageSum,$id_khoahoc); 
}else{
    $dscauhoi = $data['hoi']->getCauhoiFrom($from, $productPageSum);
} 
?>
<div class="title-list"> 
    <p>Quản lý câu hỏi</p>
</div>
<div class="Loplist">
    <div style="color:#219ebc;font-size:22px; margin-bottom: 10px;">Danh sách câu hỏi hiện có</div>
    <table border="1">
        <tr>
            <th>Mã câu hỏi</th>
            <th>Câu hỏi</th>    
            <th>Khóa học</th>
            <th colspan="3">Lựa chọn</th>
        </tr>
            <?php foreach ($dscauhoi as $ch) : ?>
                <tr>
                    <td><?= $ch['id_cauhoi'] ?></td>
                    </td>
                    <td><?= $ch['ten_cauhoi'] ?></td>
                    <td><?= $ch['ten_khoahoc'] ?></td>
                    <td><a href="/DUAN1_NHOM1_QTT/admin/Dap_an/List/<?=$ch['id_cauhoi']?>" id="detail">Đáp án</a></td>
                    <td><a href="/DUAN1_NHOM1_QTT/admin/Bo_cauhoi/Edit/<?=$ch['id_cauhoi']?>" id="edit">Sửa</a></td>
                    <td><a href="/DUAN1_NHOM1_QTT/admin/Bo_cauhoi/Delete/<?=$ch['id_cauhoi']?>" id="delete">Xóa</a></td>
                </tr>
            <?php endforeach ?>
    </table>
</div>
<div class="option-list">
<div>
    <form action="" method="POST">
        <label for="">Khóa học:</label>
        <select name="selectKH" id="">
            <option></option>
            <?php foreach($dskhoahoc as $khoahoc):?>
            <option value="<?=$khoahoc['id_khoahoc']?>"><?=$khoahoc['ten_khoahoc']?></option>
            <?php endforeach ?>
        </select>
        <button type="submit">Lọc</button>
    </form>
    </div>
    <a href="/DUAN1_NHOM1_QTT/admin/Bo_cauhoi" style="margin-top:0px;">Thêm mới</a>
</div>
<div class="next-page">
    <?php for($i = 1; $i <= $pageSum; $i++) {
    ?>
    <a href="/DUAN1_NHOM1_QTT/admin/Bo_cauhoi/List&page=<?=$i?>"><?=$i?></a>
    <?php }?>
</div>