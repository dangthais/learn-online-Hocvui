<?php
//model
$dsbaigiang = $data['baigiang']->getBaigiangAll();
if($_SERVER['REQUEST_METHOD'] == "POST"){
    $id_baigiang = $_POST['selectBG'];
    $dsbaigiangcttong = $data['baigiangct']-> getBaigiangctBG($id_baigiang);
}else{
    $dsbaigiangcttong = $data['baigiangct']-> getBaigiangctAll();
}
$productPageSum = 20;
$pageSum = ceil(count($dsbaigiangcttong)/$productPageSum);
if(isset($_GET['page'])){
    $page = $_GET['page'];
}else{
    $page = 1;
}
$from = ($page -1)*$productPageSum;
if(isset($id_baigiang)){
    $dsbaigiangct = $data['baigiangct']->getBaigiangctFromBG($from, $productPageSum,$id_baigiang); 
}else{
    $dsbaigiangct= $data['baigiangct']->getBaigiangctFrom($from, $productPageSum);
} 
?>
<div class="title-list">
    <p>Quản lý bài giảng chi tiết</p>
</div>
<div class="Loplist">
    <div style="color:#219ebc;font-size:22px; margin-bottom: 10px;">Danh sách bài giảng chi tiết</div>
    <table border="1">
        <tr>
            <th>Mã bài giảng chi tiết</th>
            <th>Tên bài giảng chi tiết</th>
            <th>Video</th>
            <th>Số lượt xem</th>
            <th>Bài giảng</th>
            <th colspan="3" style="width:20px;">Lựa chọn</th>
    
        </tr>
            <?php foreach ($dsbaigiangct as $baigiangct) : ?>
                <tr>
                    <td><?= $baigiangct['id_baigiangchitiet'] ?></td>
                    </td>
                    <td><?= $baigiangct['ten_baigiangchitiet'] ?></td>
                    <td><?= $baigiangct['video'] ?></td>
                    <td><?= $baigiangct['so_luot_xem'] ?></td>
                    <td><?= $baigiangct['ten_baigiang'] ?></td>
                    <td><a href="/DUAN1_NHOM1_QTT/admin/Bai_giang_chi_tiet/Edit/<?=$baigiangct['id_baigiangchitiet']?>" id="edit">Sửa</a></td>
                    <td><a href="/DUAN1_NHOM1_QTT/admin/Bai_giang_chi_tiet/Delete/<?=$baigiangct['id_baigiangchitiet']?>" id="delete">Xóa</a></td>
                </tr>
            <?php endforeach ?>
    </table>
</div>
<div class="option-list">
    <div>
    <form action="" method="POST">
        <label for="">Bài giảng:</label>
        <select name="selectBG" id="">
            <option></option>
            <?php foreach($dsbaigiang as $baigiang):?>
            <option value="<?=$baigiang['id_baigiang']?>"><?=$baigiang['ten_baigiang']?></option>
            <?php endforeach ?>
        </select>
        <button type="submit" class="btn-bg">Lọc</button>
    </form>
    </div>
    <div class="add">
    <a href="/DUAN1_NHOM1_QTT/admin/Bai_giang_chi_tiet">Thêm mới</a>
    </div>
</div>
<div class="next-page">
    <?php for($i = 1; $i <= $pageSum; $i++) {
    ?>
    <a href="/DUAN1_NHOM1_QTT/admin/Bai_giang_chi_tiet/List&page=<?=$i?>"><?=$i?></a>
    <?php }?>
</div>