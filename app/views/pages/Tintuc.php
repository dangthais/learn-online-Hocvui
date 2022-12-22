<?php
$dstin = $data['tintuc']->get4Tin();
$dstinxemnhieu = $data['tintuc']->getTinXemNhieu();
?>
<div class="grid wide">
  <div class="content row">
    <div class="content-main col l-7">
      <?php foreach ($dstin as $tin) : ?>
        <div class="tin1">
          <div>
            <h3 class="title1"><?= $tin['tieu_de'] ?></h3>
          </div>
          <div class="news">
            <img src="/DUAN1_NHOM1_QTT/admin/public/images/<?= $tin['anh_tintuc'] ?>" alt="" width="100px" height="100px">
            <span class="texttin1"><?= $tin['noi_dung_ngan'] ?></span>
          </div>
        </div>
      <?php endforeach ?>
    </div>
    <div class="content-right col l-5">
      <a href="">
        <h2>Xem
          nhiều</h2>
      </a>
      <?php foreach ($dstinxemnhieu as $tinxemnhieu) : ?>
        <div class="text1">
          <img src="/DUAN1_NHOM1_QTT/admin/public/images/<?= $tinxemnhieu['anh_tintuc'] ?>" alt="" width="200px" height="200px">
          <a style="color: black; margin-left: 9px;" href=""><?= $tinxemnhieu['tieu_de'] ?></a>
        </div>
      <?php endforeach ?>
    </div>
  </div>
</div>