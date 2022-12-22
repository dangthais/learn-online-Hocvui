<?php
//model
$khoahoccttk = $data['thongke']-> khoahocnoibattk();
$dsnguoidung = $data['nguoidung']->getuserAll();
$tongnguoidung = count($dsnguoidung);
$dskhoahoc = $data['khoahoc']->getkhAll();
$tongkhoahoc = count($dskhoahoc);
$dsbaocao = $data['baocao']->Baocaonc();
$_SESSION['tongbaocao'] = count($dsbaocao);
$danhgiatk = $data['thongke']->Danhgiatk();
?>
<div>
    <p>Welcome !</p>
</div>
<hr>
<div class="user-statistic">
    <div class="user">
        <p class="user-statistic-title">Tổng só khóa học</p>
        <p class="user-statistic-content"><?=$tongkhoahoc?></p>
    </div>
    <div class="user">
        <p class="user-statistic-title">Tổng số người dùng</p>
        <p class="user-statistic-content"><?=$tongnguoidung?></p>
    </div>
    <div>
        <p class="user-statistic-title">Đánh giá</p>
        <p class="star-statistic">
        <?php if($danhgiatk[0]['danhgiatb'] >= 4.5&&$danhgiatk[0]['danhgiatb'] <4.8 ){?>
            <?php echo '<i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star-half-stroke"></i>';?>
            <?php
             }if($danhgiatk[0]['danhgiatb']<4.5 && $danhgiatk[0]['danhgiatb'] >=3.8){
               echo '<i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-regular fa-star"></i>';
             }else if($danhgiatk[0]['danhgiatb']>=3.5 && $danhgiatk[0]['danhgiatb']< 3.8){
                echo '<i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star-half-stroke"></i>';
             }else if($danhgiatk[0]['danhgiatb']<3.5){
                echo '<i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>';
             }else{
                echo '<i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>';
             }
             ?>
        </p>
        <p><?=round($danhgiatk[0]['danhgiatb'],1)?> sao từ <?=$danhgiatk[0]['tongdanhgia']?> đánh giá</p>
    </div>
</div>
<div class="course-statistic">
<p id="course-statistic-title">Thống kê khóa học</p>
<table border="1">
        <tr>
            <th>Mã khóa học</th>
            <th>Tên khoa học</th>
            <th>Số lượt xem</th>
            <th>Đánh giá</th>
            <th>Tổng số đánh giá</th>
        </tr>
            <?php foreach ($khoahoccttk as $khoahoc) : ?>
                <tr>
                    <td><?= $khoahoc['id_khoahoc'] ?></td>
                    </td>
                    <td><?= $khoahoc['ten_khoahoc'] ?></td>
                    <td><?=$khoahoc['so_luot_xem']?></td>
                    <td><?=round($khoahoc['danhgiatb'],1)?> sao</td>
                    <td><?=$khoahoc['tongdanhgia']?></td>
                </tr>
            <?php endforeach ?>
    </table>
</div>