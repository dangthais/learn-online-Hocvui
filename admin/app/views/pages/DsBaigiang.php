<?php
//model
$dskhoahoc = $data['khoahoc']->getkhAll();
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $id_khoahoc = $_POST['selectKH'];
    $dsbaigiangtong = $data['baigiang']->getBaigiangKH($id_khoahoc);
} else {
    $dsbaigiangtong = $data['baigiang']->getBaigiangAll();
}
$productPageSum = 20;
$pageSum = ceil(count($dsbaigiangtong) / $productPageSum);
if (isset($_GET['page'])) {
    $page = $_GET['page'];
} else {
    $page = 1;
}
$from = ($page - 1) * $productPageSum;
if (isset($id_khoahoc)) {
    $dsbaigiang = $data['baigiang']->getBaigiangFromKH($from, $productPageSum, $id_khoahoc);
} else {
    $dsbaigiang = $data['baigiang']->getBaigiangFrom($from, $productPageSum);
}
?>
<div class="title-list">
    <p>Quản lý bài giảng</p>
</div>
<div class="Loplist">
    <div style="color:#219ebc;font-size:22px; margin-bottom: 10px;">Danh sách bài giảng</div>
    <table border="1">
        <tr>
            <th>Mã bài giảng</th>
            <th>Tên bài giảng</th>
            <th>Khóa học</th>
            <th colspan="3" style="width:20px;">Lựa chọn</th>

        </tr>
        <?php foreach ($dsbaigiang as $baigiang) : ?>
            <tr>
                <td><?= $baigiang['id_baigiang'] ?></td>
                </td>
                <td><?= $baigiang['ten_baigiang'] ?></td>
                <td><?= $baigiang['ten_khoahoc'] ?></td>
                <td><a href="/DUAN1_NHOM1_QTT/admin/Bai_giang/Edit/<?= $baigiang['id_baigiang'] ?>" id="edit">Sửa</a></td>
                <td><a href="/DUAN1_NHOM1_QTT/admin/Bai_giang/Delete/<?= $baigiang['id_baigiang'] ?>" id="delete">Xóa</a></td>
            </tr>
        <?php endforeach ?>
    </table>
</div>
<div class="option-list">
    <div>
        <form action="" method="POST">
            <label for="">Khóa học:</label>
            <select name="selectKH" id="">
                <option></option>
                <?php foreach ($dskhoahoc as $khoahoc) : ?>
                    <option value="<?= $khoahoc['id_khoahoc'] ?>"><?= $khoahoc['ten_khoahoc'] ?></option>
                <?php endforeach ?>
            </select>
            <button style="background-color: rgb(2,62,138);
    color: #fff;" type="submit">Lọc</button>
        </form>
    </div>
    <div class="add">
        <a href="/DUAN1_NHOM1_QTT/admin/Bai_giang">Thêm mới</a>
    </div>
</div>
<div class="next-page">
    <?php for ($i = 1; $i <= $pageSum; $i++) {
    ?>
        <a href="/DUAN1_NHOM1_QTT/admin/Bai_giang/List&page=<?= $i ?>"><?= $i ?></a>
    <?php } ?>
</div>