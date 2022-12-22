<?php
//model
$khoahoccttktong = $data['thongke']-> khoahoccttk();
$productPageSum = 10;
$pageSum = ceil(count($khoahoccttktong)/$productPageSum);
if(isset($_GET['page'])){
    $page = $_GET['page'];
}else{
    $page = 1;
}
$from = ($page -1)*$productPageSum;
$khoahoccttk = $data['thongke']->khoahoccttkfrom($from,$productPageSum)
?>
<div class="title-list">
    <p>Thống kê </p>
</div>
<div class="Loplist">
    <div style="color:#219ebc;font-size:22px; margin-bottom: 10px;">Thống kê khóa học chi tiết</div>
    <table border="1">
        <tr>
            <th>Mã khóa học</th>
            <th>Tên khoa học</th>
            <th>Số lượt xem</th>
            <th>Đánh giá</th>
            <th>Tổng số đánh giá</th>
            <th>Đánh giá chi tiết</th>
        </tr>
            <?php foreach ($khoahoccttk as $khoahoc) : ?>
                <tr>
                    <td><?= $khoahoc['id_khoahoc'] ?></td>
                    </td>
                    <td><?= $khoahoc['ten_khoahoc'] ?></td>
                    <td><?=$khoahoc['so_luot_xem']?></td>
                    <td><?=round($khoahoc['danhgiatb'],1)?> sao</td>
                    <td><?=$khoahoc['tongdanhgia']?></td>
                    <td><a href="/DuAn1_Nhom1_QTT/admin/Khoahoc/Danh_gia/<?=$khoahoc['id_khoahoc']?>" style="color:blue;">Chi tiết</a></td>
                </tr>
            <?php endforeach ?>
    </table>
</div>
<div class="next-page">
    <?php for($i = 1; $i <= $pageSum; $i++) {
    ?>
    <a href="/DUAN1_NHOM1_QTT/admin/Thong_ke/Thong_ke_khoa_hoc_chi_tiet&page=<?=$i?>"><?=$i?></a>
    <?php }?>
</div>