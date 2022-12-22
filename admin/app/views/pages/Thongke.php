<?php
//model
$khoahoctk = $data['thongke']-> khoahoctk();
?>
<div class="title-list">
    <p>Thống kê </p>
</div>
<div class="Loplist">
    <div style="color:#219ebc;font-size:22px; margin-bottom: 10px;">Thống kê khóa học</div>
    <table border="1">
        <tr>
            <th>Lớp</th>
            <th>Môn</th>
            <th>Tổng số khóa học</th>
        </tr>
            <?php foreach ($khoahoctk as $khoahoc) : ?>
                <tr>
                    <td><?= $khoahoc['ten_lop'] ?></td>
                    </td>
                    <td><?= $khoahoc['ten_mon'] ?></td>
                    <td><?=$khoahoc['tongkhoahoc']?></td>
                </tr>
            <?php endforeach ?>
    </table>
</div>