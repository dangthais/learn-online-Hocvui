<?php
//model
$dstintong = $data['tintuc']->getTinAll();
$productPageSum = 10;
$pageSum = ceil(count($dstintong)/$productPageSum);
if(isset($_GET['page'])){
    $page = $_GET['page'];
}else{
    $page = 1;
}
$from = ($page -1)*$productPageSum;
$dstin = $data['tintuc']->getTinFrom($from,$productPageSum);
?>
<div class="title-list">
    <p>Quản lý tin tức</p>
</div>
<div class="Loplist">
    <div style="color:#219ebc;font-size:22px; margin-bottom: 10px;">Danh sách Tin</div>
    <table border="1">
        <tr>
            <th>Mã tin</th>
            <th>Tiêu đề</th>
            <th>Nội dung ngắn</th>
            <th>Số lượt xem</th>
            <th>Ảnh bìa</th>
            <th colspan="2">Lựa chọn</th>
        </tr>
            <?php foreach ($dstin as $tin) : ?>
                <tr>
                    <td><?= $tin['id_tintuc'] ?></td>
                    <td><?= $tin['tieu_de'] ?></td>
                    <td><?= $tin['noi_dung_ngan'] ?></td>
                    <td><?= $tin['so_luot_xem'] ?></td>
                    <td>
                    <img src="/DUAN1_NHOM1_QTT/admin/public/images/<?=$tin['anh_tintuc']?>" width="123" alt="">
                </td>
                    <td><a href="/DUAN1_NHOM1_QTT/admin/Khoahoc/edit/<?=$tin['id_tintuc']?>" id="edit">Sửa</a></td>
                    <td><a href="/DUAN1_NHOM1_QTT/admin/Khoahoc/delete/<?=$tin['id_tintuc']?>" id="delete">Xóa</a></td>
                </tr>
            <?php endforeach ?>
    </table>
</div>
<div class="option-list">
    <a href="/DUAN1_NHOM1_QTT/admin/Tin_tuc">Thêm mới</a>
</div>
<div class="next-page">
    <?php for($i = 1; $i <= $pageSum; $i++) {
    ?>
    <a href="/DUAN1_NHOM1_QTT/admin/Tin_tuc/List&page=<?=$i?>"><?=$i?></a>
    <?php }?>
</div>
