<?php
//model
$idcauhoi = $data['idcauhoi'];
$dsdapan = $data['dapan']-> getDapanCH($idcauhoi);
?>
<div class="title-list">
    <p>Quản lý đáp án</p>
</div>
<div class="Loplist">
    <div style="color:#219ebc;font-size:22px; margin-bottom: 10px;">Danh sách đáp án</div>
    <table border="1">
        <tr>
            <th>Mã đáp án</th>
            <th>Tên đáp án</th>
            <th>Câu hỏi</th>
            <th>Đáp án đúng</th>
            <th colspan="2">Lựa chọn</th>
        </tr>
            <?php foreach ($dsdapan as $dapan) : ?>
                <tr>
                    <td><?= $dapan['id_dapan'] ?></td>
                    </td>
                    <td><?= $dapan['ten_dapan'] ?></td>
                    <td><?=$dapan['ten_cauhoi']?></td>
                    <td><?=$dapan['dap_an_dung']?></td>
                    <td><a href="/DUAN1_NHOM1_QTT/admin/Dap_an/Edit/<?=$dapan['id_cauhoi']?>/<?=$dapan['id_dapan']?>" id="edit">Sửa</a></td>
                    <td><a href="/DUAN1_NHOM1_QTT/admin/Dap_an/Delete/<?=$dapan['id_cauhoi']?>/<?=$dapan['id_dapan']?>" id="delete">Xóa</a></td>
                </tr>
            <?php endforeach ?>
    </table>
</div>
<div class="option-list">
    <a href="/DUAN1_NHOM1_QTT/admin/Dap_an/Add/<?=$idcauhoi?>">Thêm mới</a>
</div>