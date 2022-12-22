<?php
//model
/* $dskhoahoc = $data['khoahoc']->getkhAll();
if($_SERVER['REQUEST_METHOD'] == "POST"){
    $id_khoahoc = $_POST['selectKH'];
    $dsdetong = $data['khode']-> getDeKH($id_khoahoc);
}else{
    $dsdetong = $data['khode']-> getDeAll();
} */
$dsdetong = $data['khode']->getDeAllTH();
$productPageSum = 10;
$pageSum = ceil(count($dsdetong)/$productPageSum);
if(isset($_GET['page'])){
    $page = $_GET['page'];
}else{
    $page = 1;
}
$from = ($page -1)*$productPageSum;
/* if(isset($id_khoahoc)){
    $dsde = $data['khode']->getDeFromKH($from, $productPageSum,$id_khoahoc); 
}else{
    $dsde = $data['khode']->getDeFrom($from, $productPageSum);
}  */
$dsde = $data['khode']->getDeTHFrom($from, $productPageSum);
?>
<div class="title-list"> 
    <p>Quản lý kho đề</p>
</div>
<div class="Loplist">
    <div style="color:#219ebc;font-size:22px; margin-bottom: 10px;">Danh sách đề tổng hợp</div>
    <table border="1">
        <tr>
            <th>Mã đề</th>
            <th>Tên đề</th>    
            <th>Lớp</th>
            <th>Môn</th>
            <th>Loại đề</th>
            <th colspan="3">Lựa chọn</th>
        </tr>
            <?php foreach ($dsde as $de) : ?>
                <tr>
                    <td><?= $de['id_de'] ?></td>
                    </td>
                    <td><?= $de['ten_de'] ?></td>
                    <td><?= $de['ten_lop'] ?></td>
                    <td><?= $de['ten_mon'] ?></td>
                    <td><?= $de['loai_de']?></td>
                    <td><a href="/DUAN1_NHOM1_QTT/admin/De_chitiet/List/<?=$de['id_de']?>" id="detail">Chi tiết</a></td>
                    <td><a href="/DUAN1_NHOM1_QTT/admin/Kho_de_tong_hop/Edit/<?=$de['id_de']?>" id="edit">Sửa</a></td>
                    <td><a href="/DUAN1_NHOM1_QTT/admin/Kho_de/DeleteDeTH/<?=$de['id_de']?>" id="delete">Xóa</a></td>
                </tr>
            <?php endforeach ?>
    </table>
</div>
<div class="option-list">
    <a href="/DUAN1_NHOM1_QTT/admin/Kho_de/DeTongHop" style="margin-top:0px;">Thêm mới</a>
</div>
<div class="next-page">
    <?php for($i = 1; $i <= $pageSum; $i++) {
    ?>
    <a href="/DUAN1_NHOM1_QTT/admin/Kho_de/List&page=<?=$i?>"><?=$i?></a>
    <?php }?>
</div>