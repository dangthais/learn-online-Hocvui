<?php
//model
$idkhoahoc = $data['id'];
$dsdanhgia = $data['danhgia']->getDanhgiaKH($idkhoahoc);
?>
<div class="title-list">
    <p>Thống kê </p>
</div>
<div class="Loplist">
    <div style="color:#219ebc;font-size:22px; margin-bottom: 10px;">Thống kê khóa học chi tiết</div>
    <table border="1">
        <tr>
            <th>Mã đánh giá</th>
            <th>Đánh giá chung</th>
            <th>Đánh giá chi tiết</th>
            <th>Số sao</th>
            <th>Người dùng</th>
            <th>Khoa học</th>
        </tr>
            <?php foreach ($dsdanhgia as $danhgia) : ?>
                <tr>
                    <td><?= $danhgia['id_danhgia'] ?></td>
                    </td>
                    <td><?= $danhgia['danh_gia_chung'] ?></td>
                    <td><?=$danhgia['danh_gia_chi_tiet']?></td>
                    <td><?=$danhgia['so_sao']?> sao</td>
                    <td><?=$danhgia['hoten']?></td>
                    <td><?=$danhgia['ten_khoahoc']?></td>
                </tr>
            <?php endforeach ?>
    </table>
</div>
<div class="option-list">
    <a href="/DUAN1_NHOM1_QTT/admin/Thong_ke/Thong_ke_khoa_hoc_chi_tiet" style="margin-top:0px;">Trở về</a>
</div>