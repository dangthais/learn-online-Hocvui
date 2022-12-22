<?php
$keyword = $_SESSION['keyword'];
$dskhoahocnoibat = $data['khoahoc']->getkhten($keyword);
?>
<h2>Kết quả tìm kiếm từ khóa <?=$keyword?></h2>
<div class="row">
<?php foreach ($dskhoahocnoibat as $khoahocnoibat) : ?>
    <div class="col l-3 c-6">
        <div class="course">
            <a class="box_course" href="#" title="Môn Toán lớp 1"></a>
            <div class="course_detail">
                <img class="course_detail-img" src="/DUAN1_NHOM1_QTT/admin/public/images/<?=$khoahocnoibat['anh_khoahoc']?>" alt="">
                <div class="course_detail-middle">
                    <a class="course_detail-text" href="/DuAn1_Nhom1_QTT/Khoahoc/Thong_tin_khoa_hoc/<?=$khoahocnoibat['id_khoahoc']?>">Xem môn học</a>
                </div>
            </div>
        </div>
        <h3><?= $khoahocnoibat['ten_khoahoc'] ?></h3>
        <div>
            <i class="ti-user"><?= $khoahocnoibat['so_luot_xem'] ?></i>
            <span style="margin-left: 50px;">Môn: <?= $khoahocnoibat['ten_mon'] ?>,</span>
                <span><?= $khoahocnoibat['ten_lop'] ?></span>
        </div>
    </div>
    <?php endforeach ?>
</div>

<div class="description">
    <div class="description_top">
        <h2 class="description_line">Phương Pháp Học Tập Được Áp Dụng Tại Hocvui</h2>
    </div>
    <div class="row">
        <div class="col l-3 description_main">
            <h3 class="description_main-text3">Tạo môi trường học tập thoải mái</h3>
            <span>Một môi trường học thoái mái là yếu tố cần thiết để bé hứng thu hơn với việc ngồi vào bàn học. Việc này có thể được thực hiện linh hoạt tùy theo sở thích của con, chẳng hạn như những dụng cụ học tập đáng yêu, bàn học nhiều tính năng, đèn học chống mỏi mắt… tạo môi trường học tối ưu cho trẻ.</span>
        </div>
        <div class="col l-3 description_main">
            <h3 class="description_main-text1"> Để bé học các môn mình yêu thích</h3>
            <span>Một số trẻ có thể yêu thích môn Toán nhưng một số còn lại thì không, nhiều khi các em lại thích vẽ hơn. Quan trọng ở đây là đừng ép buộc trẻ. Hãy để học sinh phát triển theo tự nhiên, được học môn học yêu thích. Từ đó giúp trẻ có hứng thú trong việc học các môn học khác.</span>
        </div>
        <div class="col l-3 description_main">
            <h3 class="description_main-text4">Rèn các kỹ năng giúp bé học tốt</h3>
            <span>Bao gồm dạy trẻ kỹ năng ghi chép, kỹ năng lên lịch học, kỹ năng quản lý thời gian, kỹ năng học qua từ điển (đối với việc tự học ngoại ngữ)… cùng với đó là tạo ra một môi trường học tập tích cực, giao bài tập và hướng dẫn trẻ cách học hiệu quả. Ví dụ về kỹ năng quản lý thời gian, phụ huynh và thầy cô giáo hướng dẫn cho trẻ dành thời gian đầu mỗi buổi học để lên danh sách bài tập, các chủ đề kiến thức trẻ cần phải học. Hướng dẫn trẻ đặt ưu tiên cho những việ cần hoàn thành trước và sau, ước lượng thời gian cần để hoàn thành mỗi việc.</span>
        </div>
        <div class="col l-3 description_main">
            <h3 class="description_main-text1">Xây dựng thời gian biểu phù hợp</h3>
            <span>Để trẻ thấy thoải mái với việc học, thời gian biểu phù hợp, linh hoạt là điều cực kỳ quan trọng. Việc không bị gò bó, thời gian học và có những lúc nghỉ ngơi, vui chơi ngoài giờ học sẽ giúp bé thư giãn và tránh được những áp lực về điểm số sinh ra chán ghét việc học.</span>
        </div>

    </div>
</div>