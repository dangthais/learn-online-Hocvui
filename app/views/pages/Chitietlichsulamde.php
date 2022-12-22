<?php
$idde = $data['idde'];
$idketqua = $data['idketqua'];
$de = $data['khode']->getDe($idde);
$dechitiet = $data['dechitiet']->getDeChitiet($idde);
$user = $data['nguoidung']->getusername($_SESSION['userName']);
$kqcau = $data['chitietdapanchon']->ChitietKQLD($idketqua);
$kqld = $data['ketqua']->KQLDchitietdekq($idketqua);
$kq = $kqld['diem'];

?>
<h1><?= $dechitiet[1]['ten_de'] ?></h1>
<form action="" method="POST">
    <?php foreach ($dechitiet as $index => $de) : ?>
        <input type="text" name="cau_hoi_<?= $index + 1 ?>" id="" value="<?= $de['id_cauhoi'] ?>" style="display:none;">
        <div class="question">
            <h3>Câu <?= $index + 1 ?>: <?= $de['ten_cauhoi'] ?></h3><br>
            <span><?php $dapanchon = $kqcau[$index];
                    $dapandachon = $data['dapan']->getDapan($dapanchon['dap_an_chon']);
                    if ($dapandachon['dap_an_dung'] == 1) {
                        echo '<i class="fa-solid fa-circle-check" style="color:green;"></i>' . 'Đúng';
                    } else {
                        echo '<i class="fa-solid fa-xmark" style="color:red;"></i>' . 'Sai';
                    }

                    ?></span>
        </div>
        <?php $dsdapan = $data['dapan']->getDapanCH($de['id_cauhoi']);
        foreach ($dsdapan as $dapan) :
        ?>
            <div class="answer">
                <input type="radio" name="cau-<?= $index + 1 ?>" id="" value="<?= $dapan['id_dapan'] ?>" <?= (isset($kqcau)) ? (($dapan['id_dapan'] == $kqcau[$index]['dap_an_chon']) ? "checked" : "") : "" ?>>
                <span><?= $dapan['ten_dapan'] ?></span>
            </div>
        <?php endforeach ?>
    <?php endforeach ?>
    <p style="font-weight:bold; color: rgba(246, 134, 134, 0.9); font-size:20px;"> <?= isset($kq) ? 'Kết quả:' . $kq . '/10' : "" ?></p>
    <a href="/DuAn1_Nhom1_QTT/Lichsuhoc/Lich_su_lam_de/<?= $idde ?>" style="background-color: #0072bc; border-radius: 5px; padding: 5px 10px;color:white;">Trở về</a>
</form>