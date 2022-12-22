<?php
//model
$dslop = $data['lop']-> getLopAll();
?>
<div class="title-list">
    <p>Quản lý lớp học</p>
</div>
<div class="Loplist">
    <div style="color:#219ebc;font-size:22px; margin-bottom: 10px;">Danh sách Lớp học</div>
    <table border="1">
        <tr>
            <th>Mã lớp</th>
            <th>Tên Lớp</th>
            <th colspan="2">Lựa chọn</th>
        </tr>
            <?php foreach ($dslop as $lop) : ?>
                <tr>
                    <td><?= $lop['id_lop'] ?></td>
                    </td>
                    <td><?= $lop['ten_lop'] ?></td>
                    <td><a href="/DUAN1_NHOM1_QTT/admin/Lop_hoc/Edit/<?=$lop['id_lop']?>" id="edit">Sửa</a></td>
                    <td><a href="/DUAN1_NHOM1_QTT/admin/Lop_hoc/Delete/<?=$lop['id_lop']?>" id="delete">Xóa</a></td>
                </tr>
            <?php endforeach ?>
    </table>
</div>
<div class="option-list">
    <a href="/DUAN1_NHOM1_QTT/admin/Lop_hoc">Thêm mới</a>
</div>