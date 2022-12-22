<?php
//model
$dsbaocao = $data['baocao']->Baocao();
if($_SERVER['REQUEST_METHOD'] == "POST"){
    $notify = $_POST['processed'];
    foreach($notify as $noti){
            $data['baocao']->EditBaocao($noti);
    }
    echo("<script>location.href = '/DUAN1_NHOM1_QTT/admin/Bao_cao".$idcauhoi."';</script>");
}
?>
<div class="title-list">
    <p>Báo cáo của người dùng</p>
</div>
<div class="Loplist">
    <div style="color:#219ebc;font-size:22px; margin-bottom: 10px;">Danh sách báo cáo</div>
    <table border="1">
        <tr>
            <th>Mã báo cáo</th>
            <th>Tên người dùng</th>
            <th>Khóa học</th>
            <th>Nội dung báo cáo</th>
            <th>Trạng thái</th>
            <th>Hành động</th>
            <th></th>
        </tr>
            <?php foreach ($dsbaocao as $baocao) : ?>
                <tr>
                    <td><?= $baocao['id_baocao'] ?></td>
                    </td>
                    <td><?= $baocao['hoten'] ?></td>
                    <td><?=$baocao['ten_khoahoc']?></td>
                    <td><?=$baocao['noi_dung']?></td>
                    <td><?=$baocao['trang_thai']?></td>
                    <td><input type="checkbox" name="processed[]" id="" form="mynotify" value="<?=$baocao['id_baocao']?>"></td>
                    <td><?=$baocao['trang_thai']?></td>

                </tr>
            <?php endforeach ?>
    </table>
    <div class="processed">
        <form action="" method="POST" id="mynotify">
            <button type="submit">Xử lý</button>
        </form>
    </div>
</div>