<?php
//model
$dskhoahoc = $data['khoahoc']->getkhAll();
if($_SERVER['REQUEST_METHOD'] == "POST"){
    $id_khoahoc = $_POST['selectKH'];
    $dsdetong = $data['khode']-> getDeKH($id_khoahoc);
}else{
    $dsdetong = $data['khode']-> getDeAll();
}
$productPageSum = 10;
$pageSum = ceil(count($dsdetong)/$productPageSum);
if(isset($_GET['page'])){
    $page = $_GET['page'];
}else{
    $page = 1;
}
$from = ($page -1)*$productPageSum;
if(isset($id_khoahoc)){
    $dsde = $data['khode']->getDeFromKH($from, $productPageSum,$id_khoahoc); 
}else{
    $dsde = $data['khode']->getDeFrom($from, $productPageSum);
} 
?>
<div class="title-list"> 
    <p>Quản lý kho đề</p>
</div>
<div class="Loplist">
    <div style="color:#219ebc;font-size:22px; margin-bottom: 10px;">Danh sách đề</div>
    <table border="1">
        <tr>
            <th>Mã đề</th>
            <th>Tên đề</th>    
            <th>Khóa học</th>
            <th>Loại đề</th>
            <th colspan="3">Lựa chọn</th>
        </tr>
            <?php foreach ($dsde as $de) : ?>
                <tr>
                    <td><?= $de['id_de'] ?></td>
                    </td>
                    <td><?= $de['ten_de'] ?></td>
                    <td><?= $de['ten_khoahoc'] ?></td>
                    <td><?= $de['loai_de']?></td>
                    <td><a href="/DUAN1_NHOM1_QTT/admin/De_chitiet/List/<?=$de['id_de']?>" id="detail">Chi tiết</a></td>
                    <td><a href="/DUAN1_NHOM1_QTT/admin/Kho_de/Edit/<?=$de['id_de']?>" id="edit">Sửa</a></td>
                    <td><a href="/DUAN1_NHOM1_QTT/admin/Kho_de/DeleteDe/<?=$de['id_de']?>" id="delete">Xóa</a></td>
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
            <?php foreach($dskhoahoc as $khoahoc):?>
            <option value="<?=$khoahoc['id_khoahoc']?>"><?=$khoahoc['ten_khoahoc']?></option>
            <?php endforeach ?>
        </select>
        <button type="submit">Lọc</button>
    </form>
    </div>
    <a href="/DUAN1_NHOM1_QTT/admin/Kho_de" style="margin-top:0px;">Thêm mới</a>
</div>
<div class="next-page">
    <?php for($i = 1; $i <= $pageSum; $i++) {
    ?>
    <a href="/DUAN1_NHOM1_QTT/admin/Kho_de/List&page=<?=$i?>"><?=$i?></a>
    <?php }?>
</div>