<?php
    if(isset($_SESSION['userName'])){
        $lop = $_SESSION['lop'];
        $dskhoahoc= $data['thongke']->khoahocnoibattklopAll($lop);
    }else{
        $dskhoahoc = $data['thongke']->khoahocnoibattkAll();
    }
?>
<h1>Khóa học nổi bật </h1>
<div class="row">
    <?php foreach ($dskhoahoc as $khoahoc):?>
        <div class="col l-3 c-6">
                <div class="course">
                    <a class="box_course" href="#" title="Môn Toán lớp 1"></a>                    
                        <div class="course_detail">
                            <img class="course_detail-img" src="/DUAN1_NHOM1_QTT/admin/public/images/<?=$khoahoc['anh_khoahoc']?>" alt="">
                            <div class="course_detail-middle">
                                <a class="course_detail-text" href="/DUAN1_NHOM1_QTT/Khoahoc/Thong_tin_khoa_hoc/<?=$khoahoc['id_khoahoc']?>">Xem môn học</a>
                            </div>
                        </div>               
                </div>
                <h3><?=$khoahoc['ten_khoahoc']?></h3>
                <div>
                    <i class="ti-user"><?=$khoahoc['so_luot_xem']?></i>
                </div>
            </div>
    <?php endforeach?>
</div>