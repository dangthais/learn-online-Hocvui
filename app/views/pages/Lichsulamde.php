<?php
    $idde = $data['idde'];
    $dschitietlamde = $data['lichsulamde']->getLichsulamdect($idde);
    $ketqua = $data['ketqua']->KQLDchitietde($idde);
?>
<h3 style="margin-left: 60px;font-weight:bold;">Tổng hợp lịch sử làm đề</h3>
<div class="topic-save">
    <?php foreach($dschitietlamde as $index=>$chitietlamde):?>
    <div class="topic-save-detail">
        <p id="topic-save-title"><?=$chitietlamde['ten_de']?></p>
        <p>Kết quả: <span><?=$ketqua[$index]['diem'].'/10'?></span></p>
        <p>Lần:<?=$index + 1?></p>
        <a href="/DuAn1_Nhom1_QTT/Lichsuhoc/Chi_tiet_lich_su_lam_de/<?=$chitietlamde['id_de']?>/<?=$ketqua[$index]['id_ketqua']?>">Xem chi tiết</a>
    </div>
    <?php endforeach?>
</div>