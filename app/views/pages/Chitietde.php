<?php
$idde = $data['idde'];
$de = $data['khode']->getDe($idde);
$dechitiet = $data['dechitiet']->getDeChitiet($idde);
$user = $data['nguoidung']->getusername($_SESSION['userName']);
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $error = [];
    $tb = [];
    $k = 0;
    for ($i = 1; $i <= 10; $i++) {
        if (!isset($_POST['cau-' . $i])) {
            $error['loichon'] = "Bạn chưa hoàn thành hết câu hỏi, làm ơn hãy làm lại";
        }
    }
    if (empty($error)) {
        for ($i = 1; $i <= 10; $i++) {
                $dapan = $data['dapan']->getDapan($_POST['cau-'.$i]);
                if ($dapan['dap_an_dung'] == 1) {
                    $k++;
                    $tb[$i] = "Đúng";
                } else {
                    $tb[$i] = "Sai";
                }
        }
        $kq = $k . '/' . '10';
        $data['ketqua']->addKQLD($k,$user['id_nguoidung'],$idde);
        $ketqualamde = $data['ketqua']->KQLDchitiet1();
        for ($i = 1; $i <= 10; $i++) {
            $data['chitietdapanchon']->addChitietKQLD($_POST['cau_hoi_'.$i],$_POST['cau-'.$i],$ketqualamde['id_ketqua']);
    }
    $data['lichsulamde']->addLichsulamde($user['id_nguoidung'],$idde);
    $kqcau = $data['chitietdapanchon']-> ChitietKQLD($ketqualamde['id_ketqua']);
    }
}

?>
<h1><?= $dechitiet[1]['ten_de'] ?></h1>
<form action="" method="POST">
    <?php foreach ($dechitiet as $index => $de) : ?>
        <input type="text" name="cau_hoi_<?=$index+1?>" id="" value="<?=$de['id_cauhoi']?>" style = "display:none;">
        <div class="question">
            <h3>Câu <?= $index + 1 ?>: <?= $de['ten_cauhoi'] ?></h3>
            <span><?= isset($tb[$index + 1]) ?
                        (($tb[$index + 1] == "Đúng") ? '<i class="fa-solid fa-circle-check" style="color:green;"></i>' . $tb[$index + 1]
                            : '<i class="fa-solid fa-xmark" style="color:red;"></i>' . $tb[$index + 1])
                        : "" ?></span>
        </div>
        <?php $dsdapan = $data['dapan']->getDapanCH($de['id_cauhoi']);
        foreach ($dsdapan as $dapan) :
        ?>
            <div class="answer">
                <input type="radio" name="cau-<?= $index + 1 ?>" id="" value="<?= $dapan['id_dapan'] ?>" <?=(isset($kqcau))?(($dapan['id_dapan']==$kqcau[$index]['dap_an_chon'])? "checked":""):""?>>
                <span><?= $dapan['ten_dapan'] ?></span>
            </div>
        <?php endforeach ?>
    <?php endforeach ?>
    <p style="color:red;"><?=isset($error['loichon'])? $error['loichon']:""?></p>
    <input type="submit" name="submit" value="Gửi" class="exercise-btn">
    <p style="font-weight:bold; color: rgba(246, 134, 134, 0.9); font-size:20px;"> <?= isset($kq) ? 'Kết quả:' . $kq : "" ?></p>
    <?php if (isset($kq)) {
        if ($k >= 5) {
            echo '<a href="/DUAN1_NHOM1_QTT/Luyende/Chitietde/' . $idde . '"' . 'class = "topic-again">Làm lại</a> ';
            if($de['loai_de'] =='De tong hop'){
                echo '<a href="/DUAN1_NHOM1_QTT/Luyende" class="topic-continue">Tiếp tục</a>';
            }else{
                echo '<a href="/DUAN1_NHOM1_QTT/Khoahoc/Danh_gia_khoa_hoc/'.$de['id_khoahoc'].'"'.' class="topic-continue">Tiếp tục</a>';
            }
        } else {
            echo '<p style = "color:red;">Bạn chưa đạt đủ số điểm yêu cầu, hãy kiểm tra và chọn lại những câu bạn đã làm sai</p>';
        }
    }
    ?>
</form>