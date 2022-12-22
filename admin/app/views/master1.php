<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://kit.fontawesome.com/6da5ba8330.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../admin/public/css/master1s.css">
    <link rel="stylesheet" href="../public/css/DsStyles.css">
    <link rel="stylesheet" href="../../public/css/Dapanstyle.css">
    <link rel="stylesheet" href="../../public/css/EditStyles.css">
    <script src="../admin/public/ckeditor/ckeditor.js"></script>
    <script src="../admin/public/ckfinder/ckfinder.js"></script>
    <script src="http://code.jquery.com/jquery-latest.min.js"></script>
</head>

<body>
    <section class="header">
        <?php
        require_once 'blocks/header.php';
        ?>
    </section>
    <section>
        <div class="menu">
            <div class="account-menu">
                <img src="/DUAN1_NHOM1_QTT/admin/public/images/<?=$_SESSION['adminImg']?>" width="40px" height="40px" alt="">
                <p style="padding-top:5px; font-weight:bold; font-size:20px;"><?=$_SESSION['userNameAdmin']?></p>
                <p id="account-status"><span>.</span>Active</p>
            </div>
            <div class="menu-list">
                <ul>
                    <li>
                        <a href="/DUAN1_NHOM1_QTT/admin/Home"><span id="icon-content"><i class="fa-solid fa-house-chimney"></i></span>Trang chủ<span id="icon-show-detail"><i class="fa-solid fa-angle-down"></i></span></a>
                    </li>
                    <li id="show-menu">
                        <a href="/DUAN1_NHOM1_QTT/admin/Mon_hoc"><span id="icon-content"><i class="fa-solid fa-folder-closed"></i></span>Môn học<span id="icon-show-detail"><i class="fa-solid fa-angle-down"></i></span></a>
                        <ul>
                            <li id="small-menu">
                                <a href="/DUAN1_NHOM1_QTT/admin/Mon_hoc"><span><i class="fa-solid fa-angles-right"></i></span>Thêm mới</a>
                                <a href="/DUAN1_NHOM1_QTT/admin/Mon_hoc/List"><span><i class="fa-solid fa-angles-right"></i></span>Danh sách môn học</a>
                            </li>
                        </ul>
                    </li>
                    <li id="show-menu">
                        <a href="/DUAN1_NHOM1_QTT/admin/Lop_hoc"><span id="icon-content"><i class="fa-solid fa-address-card"></i></span>Lớp học<span id="icon-show-detail"><i class="fa-solid fa-angle-down"></i></span></a>
                        <ul>
                            <li id="small-menu">
                                <a href="/DUAN1_NHOM1_QTT/admin/Lop_hoc"><span><i class="fa-solid fa-angles-right"></i></span>Thêm mới</a>
                                <a href="/DUAN1_NHOM1_QTT/admin/Lop_hoc/List"><span><i class="fa-solid fa-angles-right"></i></span>Danh sách lớp học</a>
                            </li>
                        </ul>
                    </li>
                    <li id="show-menu">
                        <a href="/DUAN1_NHOM1_QTT/admin/Khoahoc"><span id="icon-content"><i class="fa-solid fa-address-card"></i></span>Khóa học<span id="icon-show-detail"><i class="fa-solid fa-angle-down"></i></span></a>
                        <ul>
                            <li id="small-menu">
                                <a href="/DUAN1_NHOM1_QTT/admin/Khoahoc"><span><i class="fa-solid fa-angles-right"></i></span>Thêm mới</a>
                                <a href="/DUAN1_NHOM1_QTT/admin/Khoahoc/List"><span><i class="fa-solid fa-angles-right"></i></span>Danh sách khóa học</a>
                            </li>
                        </ul>
                    </li>
                    <li id="show-menu">
                        <a href="/DUAN1_NHOM1_QTT/admin/Bai_giang"><span id="icon-content"><i class="fa-solid fa-table-list"></i></span>Bài giảng<span id="icon-show-detail"><i class="fa-solid fa-angle-down"></i></span></a>
                        <ul>
                            <li id="small-menu">
                                <a href="/DUAN1_NHOM1_QTT/admin/Bai_giang"><span><i class="fa-solid fa-angles-right"></i></span>Bài giảng</a>
                                <a href="/DUAN1_NHOM1_QTT/admin/Bai_giang_chi_tiet"><span><i class="fa-solid fa-angles-right"></i></span>Bài giảng chi tiết</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="/DuAn1_Nhom1_QTT/admin/Nguoi_dung/List"><span id="icon-content"><i class="fa-solid fa-user"></i></span>Người dùng<span id="icon-show-detail"><i class="fa-solid fa-angle-down"></i></span></a>
                    </li>
                    <li id="show-menu">
                        <a href="/DUAN1_NHOM1_QTT/admin/Bo_cauhoi"><span id="icon-content"><i class="fa-regular fa-circle-question"></i></span>Bộ câu hỏi<span id="icon-show-detail"><i class="fa-solid fa-angle-down"></i></span></a>
                        <ul>
                            <li id="small-menu">
                                <a href="/DUAN1_NHOM1_QTT/admin/Bo_cauhoi"><span><i class="fa-solid fa-angles-right"></i></span>Thêm mới</a>
                                <a href="/DUAN1_NHOM1_QTT/admin/Bo_cauhoi/List"><span><i class="fa-solid fa-angles-right"></i></span>Danh sách câu hỏi</a>
                            </li>
                        </ul>
                    </li> 
                    <li id="show-menu">
                        <a href="/DUAN1_NHOM1_QTT/admin/Kho_de"><span id="icon-content"><i class="fa-solid fa-database"></i></span>Kho đề<span id="icon-show-detail"><i class="fa-solid fa-angle-down"></i></span></a>
                        <ul>
                            <li id="small-menu">
                                <a href="/DUAN1_NHOM1_QTT/admin/Kho_de"><span><i class="fa-solid fa-angles-right"></i></span>Thêm mới</a>
                                <a href="/DUAN1_NHOM1_QTT/admin/Kho_de/List"><span><i class="fa-solid fa-angles-right"></i></span>Danh sách kho đề</a>
                                <a href="/DUAN1_NHOM1_QTT/admin/Kho_de/DeTongHop"><span><i class="fa-solid fa-angles-right"></i></span>Kho đề tổng hợp</a>
                                <a href="/DUAN1_NHOM1_QTT/admin/Kho_de/DanhsachDeTH"><span><i class="fa-solid fa-angles-right"></i></span>Danh sách đề tổng hợp</a>
                            </li>
                        </ul>
                    </li>
                    <li id="show-menu">
                        <a href="/DUAN1_NHOM1_QTT/admin/Bo_cauhoi"><span id="icon-content"><i class="fa-regular fa-newspaper"></i></span>Tin tưc<span id="icon-show-detail"><i class="fa-solid fa-angle-down"></i></span></a>
                        <ul>
                            <li id="small-menu">
                                <a href="/DUAN1_NHOM1_QTT/admin/Tin_tuc"><span><i class="fa-solid fa-angles-right"></i></span>Thêm mới</a>
                                <a href="/DUAN1_NHOM1_QTT/admin/Tin_tuc/List"><span><i class="fa-solid fa-angles-right"></i></span>Danh sách tin tức</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="/DUAN1_NHOM1_QTT/admin/Bao_cao" class="notify"><span id="icon-content"><i class="fa-solid fa-bell"></i></span>Báo cáo<span class="notify-number"><?=(isset($_SESSION['tongbaocao']))?$_SESSION['tongbaocao']:'';?></span></a>
                    </li>
                    <li id="show-menu">
                        <a href=""><span id="icon-content"><i class="fa-solid fa-chart-line"></i></span>Thống kê<span id="icon-show-detail"><i class="fa-solid fa-angle-down"></i></span></a>
                        <ul>
                            <li id="small-menu">
                                <a href="/DUAN1_NHOM1_QTT/admin/Thong_ke/Thong_ke_khoa_hoc"><span><i class="fa-solid fa-angles-right"></i></span>Khoa học</a>
                                <a href="/DUAN1_NHOM1_QTT/admin/Thong_ke/Thong_ke_khoa_hoc_chi_tiet"><span><i class="fa-solid fa-angles-right"></i></span>Khóa học chi tiết</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
        <div class="content">
            <?php
            require_once "pages/" . $data['page'] . ".php";
            ?>
        </div>
    </section>
    <script src="/DUAN1_NHOM1_QTT/admin/public/js/master.js"></script>
</body>

</html>