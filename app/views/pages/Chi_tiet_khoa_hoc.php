<?php
$idkhoahoc = $data['idkhoahoc'];
$khoahoc = $data['khoahoc']->getkh($idkhoahoc);
$dsbaigiang = $data['baigiang']->getBaigiangKH($idkhoahoc);
$dsbaitap = $data['baitap']->getDeKH($idkhoahoc);
$soluotxem = $khoahoc['so_luot_xem'] + 1;
$data['khoahoc']->UpdateView($soluotxem, $idkhoahoc);
$lichsuhoc = $data['lichsuhoc']->addLichsuhoc('Chưa hoàn thành', $_SESSION['id_nguoidung'], $idkhoahoc);
if ($_SERVER['REQUEST_METHOD'] == "POST") {
  $id_nguoidung = $_SESSION['id_nguoidung'];
  $noidung = $_POST['bao_cao'];
  $data['baocao']->addBaocao($id_nguoidung, $idkhoahoc, $noidung);
}
?>
<div class="course-main-detail">
  <h2><?= $khoahoc['ten_khoahoc'] ?></h2>
    <div class="row">
      <div class="col">
        <?php foreach ($dsbaigiang as $index1 => $baigiang) :
          $dsbaigiangct = $data['baigiangct']->getBaigiangctBG($baigiang['id_baigiang']);
          foreach ($dsbaigiangct as $index2 => $baigiangct) :
        ?>
            <div class="<?php echo ($index1 == 0 && $index2 == 0) ? 'course-video point' : 'course-video'; ?>">
              <iframe width="100%" height="400" src="<?= $baigiangct['video'] ?>" title="YouTube video player" frameborder="0" allow="accelerometer; clipboard-write; encrypted-media; gyroscope; picture-in-picture"></iframe>
            </div>
          <?php endforeach  ?>
        <?php endforeach  ?>
      </div>
      <div class="col">
        <p class="course-content-title"><i class="fa-solid fa-align-justify"></i><span>Đề cương khóa học</span></p>
        <div class="course-content-detail">
          <?php foreach ($dsbaigiang as $index1 => $baigiang) : ?>
            <div>
              <p class="course-lesson-title  "><?= $baigiang['ten_baigiang'] ?><i class="ti-angle-down"></i></p>
              <div class="course-lesson-detail " id="myLesson1">
                <ul>
                  <?php $dsbaigiangct = $data['baigiangct']->getBaigiangctBG($baigiang['id_baigiang']);
                  foreach ($dsbaigiangct as $index2 => $baigiangct) :
                  ?>
                    <li class="<?php echo ($index1 == 0 && $index2 == 0) ? 'list-lesson point' : 'list-lesson'; ?>">
                      <div class="course-lesson-detail-title "><?= $baigiangct['ten_baigiangchitiet'] ?></div> <i class="fa-solid fa-volume-high icon-volume point" id="playing"></i>
                      <p><span class="course-lesson-time"><i class="fa-solid fa-circle-play"></i>4 phút</span><span class="course-lesson-view"><i class="fa-solid fa-eye"></i><?= $baigiangct['so_luot_xem'] ?></span></p>
                    </li>
                  <?php endforeach ?>
                  <div class="line"></div>
                </ul>
              </div>
            </div>
          <?php endforeach ?>
          <p class="course-lesson-title">4. Bài tập ôn <i class="ti-angle-down"></i></p>
          <div class="course-lesson-detail" id="myLesson4">
            <ul>
              <?php foreach ($dsbaitap as  $baitap) : ?>
                <li><a href="/DuAn1_Nhom1_QTT/Luyende/Chitietde/<?= $baitap['id_de'] ?>"><?= $baitap['ten_de'] ?></a></li>
              <?php endforeach ?>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
<div>
  <p><span style="font-weight:bold;">Lưu ý</span>: Trong trường hợp bạn không mở được video bài giảng này bằng trình duyệt Google Chrome, vui lòng tải trình duyệt Firefox để sử dụng hoặc làm theo hướng dẫn <a href="" style="color:rgb(197 112 128);">tại đây</a>.</p>
  <div class="container">
    <!-- Trigger the modal with a button -->
    <button type="button" class="btn btn-sm" data-toggle="modal" data-target="#myModal" style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;"><i class="ti-flag-alt"></i>Báo cáo</button>

    <!-- Modal -->
    <div class="modal fade" id="myModal" role="dialog">
      <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>
          <div class="modal-body">
            <form action="" method="POST">
              <label for="">Nội dung báo cáo</label><br>
              <textarea name="bao_cao" id="" cols="60" rows="10"></textarea><br>
              <button type="submit" class="btn btn-info btn-sm" data-toggle="modal" data-target="#myModal" style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;">Gửi</button>
            </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          </div>
        </div>

      </div>
    </div>

  </div>

</div>