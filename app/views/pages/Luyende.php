<?php 
    $dslop = $data['lop']->getLopAll();
    $dsmon = $data['mon']->getMonAll();
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $idlop = $_POST['lop'];
    }
?>
<h1>Luyện Đề</h1>

<div class="topic_header">
    <form action="" method="POST">
    <label for="">Chọn lớp học: </label>
    <select name="lop" id="">
        <option></option>
        <?php foreach($dslop as $lop):?>
            <option value="<?=$lop['id_lop']?>"><?=$lop['ten_lop']?></option>
        <?php endforeach?>
    </select>
    
    <button class="topic_btn" type="submit">Tìm Kiếm</button>
    </form>
</div>
<div class="row topic_container">
    <?php foreach($dsmon as $mon):?>
    <h1><?=$mon['ten_mon']?></h1>

    <div class="col l-12">
        <div class="topic_name">
        <?php  if(!isset($idlop)){
        $dsde = $data['khode']->getDeMonTop2($mon['id_mon']);

    }else{
        $dsde = $data['khode']->getDeLopMon($idlop,$mon['id_mon']);
    }
    foreach($dsde as $de):
    ?>
            <div class="topic_detail">
                <i class="ti-book topic_icon"></i>
                <a href="/DuAn1_Nhom1_QTT/Luyende/Chitietde/<?=$de['id_de']?>"><?=$de['ten_de']?></a>
            </div>
            <?php endforeach ?>
        </div>
    </div>
    <?php endforeach ?>
</div>
<!-- <div class="row topic_container">
    <h1>Tiếng Việt</h1>
    <div class="col l-6">
        <div class="topic_name">
            <i class="ti-alarm-clock">
                <span>Luyện đề tiếng Việt cơ bản</span>

            </i>

            <div class="topic_detail">
                <i class="ti-book topic_icon"></i>
                <a href="finalExercise.html">Đề số 1</a>
            </div>
            <div class="topic_detail topic-color">
                <i class="ti-book topic_icon"></i>
                <a href="finalExercise.html">Đề số 2</a>
            </div>
            <div class="topic_detail">
                <a class="topic_detail-link" href="detailCousre.html">Xem chi tiết <i class="ti-angle-double-right"></i></a>
            </div>
        </div>
    </div>
    <div class="col l-6">
        <div class="topic_name">
            <i class="ti-alarm-clock">
                <span>Luyện đề tiếng Việt nâng cao</span>

            </i>

            <div class="topic_detail">
                <i class="ti-book topic_icon"></i>
                <a href="finalExercise.html">Đề số 1</a>
            </div>
            <div class="topic_detail topic-color">
                <i class="ti-book topic_icon"></i>
                <a href="finalExercise.html">Đề số 2</a>
            </div>
        </div>
        <div class="topic_detail">
            <a class="topic_detail-link" href="detailCousre.html">Xem chi tiết <i class="ti-angle-double-right"></i></a>
        </div>
    </div>

</div> -->