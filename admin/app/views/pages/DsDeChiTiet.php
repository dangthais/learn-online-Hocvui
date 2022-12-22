<?php
//model
$idde = $data['idde'];
$dechitiet = $data['dechitiet']->getDeChitiet($idde);
$de = $data['khode']->getDe($idde);
?>
<div class="title-list"> 
    <p>Quản lý đề chi tiết</p>
</div>
<div class="Loplist">
    <div style="color:#219ebc;font-size:22px; margin-bottom: 10px;">Danh sách câu hỏi hiện có</div>
    <table border="1">
        <tr>
            <th>Mã đề chi tiết</th>
            <th>Câu hỏi</th>    
            <th>Đề</th>
            <th>Lựa chọn</th>
        </tr>
            <?php foreach ($dechitiet as $chitiet) : ?>
                <tr>
                    <td><?= $chitiet['id_chitietde'] ?></td>
                    </td>
                    <td><?= $chitiet['ten_cauhoi'] ?></td>
                    <td><?= $chitiet['ten_de'] ?></td>
                    <td><a href="/DUAN1_NHOM1_QTT/admin/Dap_an/List/<?=$ch['id_cauhoi']?>" id="detail">Đáp án</a></td>
                </tr>
            <?php endforeach ?>
    </table>
</div>
<div class="option-list">
    <?php 
    if($de['loai_de'] != 'De tong hop'){
        echo '<a href="/DUAN1_NHOM1_QTT/admin/Kho_de/List" style="margin-top:0px;">Trở về kho đề</a>';
    }
    echo '<a href="/DUAN1_NHOM1_QTT/admin/Kho_de/DanhsachdeTH" style="margin-top:0px;">Trở về kho đề</a>';
    ?>
</div>