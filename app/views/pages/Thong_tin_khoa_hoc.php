<?php
$idkhoahoc = $data['idkhoahoc'];
$khoahoc = $data['khoahoc']->getkh($idkhoahoc);
$dsbaigiang = $data['baigiang']->getBaigiangKH($idkhoahoc);
?>
<div class="main">
    <div class="review">
        <p>
            <?php if ($khoahoc['danhgiatb'] >= 4.5 && $khoahoc['danhgiatb'] < 4.8) { ?>
                <?php echo '<i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star-half-stroke"></i>'; ?>
            <?php
            }
            if ($khoahoc['danhgiatb'] < 4.5 && $khoahoc['danhgiatb'] >= 3.8) {
                echo '<i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-regular fa-star"></i>';
            } else if ($khoahoc['danhgiatb'] >= 3.5 && $khoahoc['danhgiatb'] < 3.8) {
                echo '<i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star-half-stroke"></i>';
            } else if ($khoahoc['danhgiatb'] < 3.5 && $khoahoc['danhgiatb'] > 0) {
                echo '<i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>';
            } else if ($khoahoc['danhgiatb'] >= 4.8) {
                echo '<i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>';
            } else {
                echo '<i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>';
            }
            ?>
            <span><?= $khoahoc['soluongdg'] ?> đánh giá</span>
        </p>
    </div>
    <h2><?= $khoahoc['ten_khoahoc']; ?></h2>
    <h3>Bạn sẽ học được gì?</h3>
    <div class="row">
        <div class="col l-9">
            <div>
                <?= $khoahoc['mo_ta']; ?>
            </div>
        </div>
        <div class="col l-2">
            <div class="btn-learning">
                <p>Miễn phí</p>
                <?php if (!isset($_SESSION['userName'])) { ?>
                    <?php echo '<a href="/DuAn1_Nhom1_QTT/user/loginKH/' . "$idkhoahoc" . '">Đăng Ký Hoc</a>'; ?>
                <?php
                } else {
                    echo '<a href="/DuAn1_Nhom1_QTT/Khoahoc/Chi_tiet_khoa_hoc/' . "$idkhoahoc" . '">Bắt đầu học</a>';
                }
                ?>
            </div>
        </div>
    </div>
</div>
<h3>Nội dung khóa học</h3>
<div class="course-content">
    <?php foreach ($dsbaigiang as $index => $baigiang) : ?>
        <div>
            <p class="lesson-title" onclick="showLesson(myLesson<?= $index ?>)"><?= $baigiang['ten_baigiang'] ?> <i class="ti-angle-down"></i></p>
            <div class="lesson-detail" id="myLesson<?= $index ?>">
                <ul>
                    <?php
                    $dsbaigiangct = $data['baigiangct']->getBaigiangctBG($baigiang['id_baigiang']);
                    foreach ($dsbaigiangct as $baigiangct) :
                    ?>
                        <li><a href=""><?= $baigiangct['ten_baigiangchitiet'] ?></a></li>
                    <?php endforeach ?>
                </ul>
            </div>
        </div>
    <?php endforeach ?>
</div>
<h3>Yêu cầu</h3>
<div>
    <ul>
        <li><i class="ti-check"></i>Máy vi tính kết nối internet (Window, Ubuntu hoặc MacOS)</li>
        <li><i class="ti-check"></i>ý thức tự học cao, ý thức trách nhiệm cao, kiên trì bền bỉ không ngại khó</li>
        <li><i class="ti-check"></i>Không nóng vội, bình tĩnh học đầy đủ các bài</li>
    </ul>
</div>
</div>