<?php
//model
$dskhoahoctong = $data['khoa']->getkhAll();
$productPageSum = 10;
$pageSum = ceil(count($dskhoahoctong)/$productPageSum);
if(isset($_GET['page'])){
    $page = $_GET['page'];
}else{
    $page = 1;
}
$from = ($page -1)*$productPageSum;
$dskhoahoc = $data['khoa']->getkhFrom($from,$productPageSum);
?>
<div class="title-list">
    <p>Quản lý Khóa học</p>
</div>
<div class="Loplist">
    <div style="color:#219ebc;font-size:22px; margin-bottom: 10px;">Danh sách Khóa học đang có</div>
    <table border="1">
        <tr>
            <th>Mã khóa học</th>
            <th>Tên khóa học</th>
            <th>Mô tả</th>
            <th>Ảnh khóa học</th>
            <th>Số lượt xem</th>
            <th>Lớp</th>
            <th>Môn học</th>
            <th colspan="2">Lựa chọn</th>
        </tr>
            <?php foreach ($dskhoahoc as $kh) : ?>
                <tr>
                    <td><?= $kh['id_khoahoc'] ?></td>
                    <td><?= $kh['ten_khoahoc'] ?></td>
                    <td><?= $kh['mo_ta'] ?></td>
                    <td>
                    <img src="/DUAN1_NHOM1_QTT/admin/public/images/<?=$kh['anh_khoahoc']?>" width="123" alt="">
                </td>
                    <td><?= $kh['so_luot_xem'] ?></td>
                    <td><?= $kh['ten_lop'] ?></td>
                    <td><?= $kh['ten_mon'] ?></td>
                    </td>
                    <td><a href="/DUAN1_NHOM1_QTT/admin/Khoahoc/edit/<?=$kh['id_khoahoc']?>" id="edit">Sửa</a></td>
                    <td><a href="/DUAN1_NHOM1_QTT/admin/Khoahoc/delete/<?=$kh['id_khoahoc']?>" id="delete">Xóa</a></td>
                </tr>
            <?php endforeach ?>
    </table>
</div>
<div class="option-list">
    <a href="/DUAN1_NHOM1_QTT/admin/Khoahoc">Thêm mới</a>
</div>
<div class="next-page">
    <?php for($i = 1; $i <= $pageSum; $i++) {
    ?>
    <a href="/DUAN1_NHOM1_QTT/admin/Khoahoc/List&page=<?=$i?>"><?=$i?></a>
    <?php }?>
</div>
