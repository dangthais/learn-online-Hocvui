<?php
    $id_nguoidung = $_SESSION['id_nguoidung'];
    $dskhoahoc = $data['lichsuhoc']->getLichsuhoc($id_nguoidung);
/*     $dsketqua = $data['ketqua']->getKQLDchitiet($id_nguoidung);
 */    $dsdetong = $data['lichsulamde']->getLichsulamde($id_nguoidung);
    $dsde = [];
    if($dsdetong != []){
        array_push($dsde,$dsdetong[0]);
        foreach($dsdetong as $de){
            foreach($dsde as $ds){
                if($de['id_de'] != $ds['id_de']){
                    array_push($dsde,$de);
                }
            }
        }
    }
?>
<p style="font-weight: bold; font-size:30px;margin-top: 50px;">Lịch sử học</p>
<h3>Khóa học</h3>
<div class="row">
<?php foreach ($dskhoahoc as $khoahoc) : ?>
    <div class="col l-3 c-6">
        <div class="course">
            <a class="box_course" href="#" title="Môn Toán lớp 1"></a>
            <div class="course_detail_ls">
                <img class="course_detail-img" src="/DUAN1_NHOM1_QTT/admin/public/images/<?= $khoahoc['anh_khoahoc']?>" alt="">
                <div class="course_detail-middle">
                    <a class="course_detail-text" href="/DuAn1_Nhom1_QTT/Khoahoc/Thong_tin_khoa_hoc/<?=$khoahoc['id_khoahoc']?>">Xem môn học</a>
                </div>
            </div>
        </div>
        <h3><?php $khoahocct = $data['khoahoc']->getkh($khoahoc['id_khoahoc']); echo ($khoahocct['ten_khoahoc']) ;?></h3>
        <div>
            <i class="ti-user"><?php $khoahocct = $data['khoahoc']->getkh($khoahoc['id_khoahoc']); echo ($khoahocct['so_luot_xem']); ?>
        </i><?=$khoahoc['hoan_thanh']?>
        </div>
    </div>
    <?php endforeach ?>
</div>
<h3>Lịch sử làm đề</h3>
<div class="row topic_container">
    <?php foreach($dsde as $de):?>
            <div class="topic_detail">
                <i class="ti-book topic_icon"></i>
                <a href="/DuAn1_Nhom1_QTT/Lichsuhoc/Lich_su_lam_de/<?=$de['id_de']?>"><?=$de['ten_de']?></a>
            </div>
        <?php endforeach?>
</div>
