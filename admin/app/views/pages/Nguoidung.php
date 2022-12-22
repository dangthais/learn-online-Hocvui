<?php
//model
$dsnguoidungtong = $data['nguoidung']-> getuserAll();
$productPageSum = 10;
$pageSum = ceil(count($dsnguoidungtong)/$productPageSum);
if(isset($_GET['page'])){
    $page = $_GET['page'];
}else{
    $page = 1;
}
$from = ($page -1)*$productPageSum;
$dsnguoidung = $data['nguoidung']->getuserfrom($from,$productPageSum);
?>
<div class="title-list">
    <p>Quản lý người dùng</p>
</div>
<div class="Loplist">
    <div style="color:#219ebc;font-size:22px; margin-bottom: 10px;">Danh sách người dùng</div>
    <table border="1">
        <tr>
            <th>Mã </th>
            <th>Họ và tên</th>
            <th>Tên đăng nhập</th>
            <th>Email</th>
            <th>Lớp</th>
            <th>Ảnh</th>
            <th>Vai trò</th>
        </tr>
            <?php foreach ($dsnguoidung as $nguoidung) : ?>
                <tr>
                    <td><?= $nguoidung['id_nguoidung'] ?></td>
                    </td>
                    <td><?= $nguoidung['hoten'] ?></td>
                    <td><?=$nguoidung['ten']?></td>
                    <td><?=$nguoidung['email']?></td>
                    <td><?=$nguoidung['lop']?></td>
                    <td><img src="/DuAn1_Nhom1_QTT/public/images/<?=$nguoidung['anh']?>" width="50px" height="30px" alt=""></td>
                    <td><?=($nguoidung['vaitro'] ==1)? "Admin" :"Người dung";?></td>
                </tr>
            <?php endforeach ?>
    </table>
</div>
<div class="next-page">
    <?php for($i = 1; $i <= $pageSum; $i++) {
    ?>
    <a href="/DUAN1_NHOM1_QTT/admin/Nguoi_dung/List&page=<?=$i?>"><?=$i?></a>
    <?php }?>
</div>
