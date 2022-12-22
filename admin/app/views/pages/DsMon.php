<?php
//model
$dsmon = $data['mon']-> getMonAll();
?>
<div class="title-list">
    <p>Quản lý môn học</p>
</div>
<div class="Loplist">
    <div style="color:#219ebc;font-size:22px; margin-bottom: 10px;">Danh sách Môn học</div>
    <table border="1">
        <tr>
            <th>Mã môn</th>
            <th>Tên môn</th>
            <th colspan="2">Lựa chọn</th>
        </tr>
            <?php foreach ($dsmon as $mon) : ?>
                <tr>
                    <td><?= $mon['id_mon'] ?></td>
                    </td>
                    <td><?= $mon['ten_mon'] ?></td>
                    <td><a href="/DUAN1_NHOM1_QTT/admin/Mon_hoc/Edit/<?=$mon['id_mon']?>" id="edit">Sửa</a></td>
                    <td><a href="/DUAN1_NHOM1_QTT/admin/Mon_hoc/Delete/<?=$mon['id_mon']?>" id="delete">Xóa</a></td>
                </tr>
            <?php endforeach ?>
    </table>
</div>
<div class="option-list">
    <a href="/DUAN1_NHOM1_QTT/admin/Mon_hoc">Thêm mới</a>
</div>