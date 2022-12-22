<?php
if (isset($_SESSION['userName'])) {
    $nguoidung = $data['nguoidung']->getuser($_SESSION['id_nguoidung']);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/DUAN1_NHOM1_QTT/public/themify-icons/themify-icons.css">
    <link rel="stylesheet" href="/DUAN1_NHOM1_QTT/public/css/stylett.css">
    <link rel="stylesheet" href="/DUAN1_NHOM1_QTT/public/css/styleQ.css">
    <link rel="stylesheet" href="/DUAN1_NHOM1_QTT/public/css/basess.css">
    <link rel="icon" href="/DUAN1_NHOM1_QTT/public/images/logo.ico">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/6da5ba8330.js" crossorigin="anonymous"></script>
    <title>Hocvui</title>
</head>

<body>

    <div class="grid wide">
        <!-- header -->
        <header class="header">
            <div class="col l-1">
                <a href="#"><img class="header-img" src="/DUAN1_NHOM1_QTT/public/images/logo1.png" alt=""></a>
            </div>
            <div class="col l-5">
                <div class="nav">
                    <ul class="nav_list">
                        <li class="nav_item"><a class="a" href="/DuAn1_Nhom1_QTT/">Trang chủ</a></li>
                        <li class="nav_item"><a class="a" href="/DuAn1_Nhom1_QTT/Luyende">Luyện đề</a></li>
                        <li class="nav_item"><a class="a" href="/DuAn1_Nhom1_QTT/Tintuc">Tin Tức</a></li>
                        <?php if (isset($_SESSION['userName'])) {
                            echo '<li class="nav_item"><a class="a" href="/DuAn1_Nhom1_QTT/Lichsuhoc">Lịch sủ học</a></li>';
                        }
                        ?>
                        <li class="nav_item"><a class="a" href="">Liên Hệ</a></li>
                        <div class="line"></div>
                    </ul>
                </div>
            </div>
            <div class="col l-1">
                <div class="header_search">
                    <form action="/DuAn1_Nhom1_QTT/" method="GET">
                        <input class="header_search-input" type="text" name="kw" placeholder="Tìm kiếm ">
                    </form>
                    <button type="submit"><i class="ti-search"></i></button>

                </div>
            </div>
            <div class="col l-4 header-login">
                <?php if (isset($_SESSION['userName'])) {
                ?>
                    <a onclick="myFunction(); event.preventDefault();" href=""><img src="/DuAn1_Nhom1_QTT/public/images/<?= $nguoidung['anh'] ?>" alt="" class="user_avt">
                        <div class="show_menu">
                            <ul class="user_list">
                                <a href="/DuAn1_Nhom1_QTT/user/Thong_tin_tai_khoan/<?= $_SESSION['id_nguoidung'] ?>">
                                    <li class="user_list-item">Trang Cá Nhân</li>
                                </a>
                                <a href="/DuAn1_Nhom1_QTT/user/Thay_doi_mat_khau/<?= $_SESSION['id_nguoidung'] ?>">
                                    <li class="user_list-item">Đổi mật khẩu</li>
                                </a>
                                <a href="/DuAn1_Nhom1_QTT/user/Dang_xuat">
                                    <li class="user_list-item">Đăng Xuất</li>
                                </a>
                            </ul>
                        </div>
                    </a>
                <?php } else { ?>
                    <a class="header-login--btn" href="/DuAn1_Nhom1_QTT/user/login">Đăng nhập</a>
                    <a class="header-login--btn" href="/DuAn1_Nhom1_QTT/user/register">Đăng ký</a>
                <?php } ?>
            </div>
        </header>
        
        

        <div>
            <?php
            require_once "pages/" . $data['page'] . ".php";
            ?>
        </div>

        <div class="grid wide">

            <footer class="footer">
                <div class="row">
                    <div class="col l-3">
                        <div class="footer_info">
                            <img class="header-img" src="/DUAN1_NHOM1_QTT/public/images/logo1.png" alt="">
                            <span><strong>Biến học tập thành niềm vui</strong></span>
                        </div>
                        <div class="footer_info-detail">
                            Điện thoại: 01234567
                        </div>
                        <div class="footer_info-detail">
                            Email : abc@gmail.Com
                        </div>
                        <div class="footer_info-detail">
                            Địa chỉ: Hà Nội - Việt Nam
                        </div>
                    </div>
                    <div class="col l-3 footer_contact">
                        <div class="footer_contact-detail">
                            <h4>Về chúng tôi</h4>
                            <div class="footer_info-detail">
                                Giới Thiệu
                            </div>
                            <div class="footer_info-detail">
                                Đối tác
                            </div>
                            <div class="footer_info-detail">
                                Liên Hệ
                            </div>
                        </div>
                    </div>
                    <div class="col l-3 footer-support">
                        <div class="footer_contact-detail">
                            <h4>Hỗ Trợ Tư vấn</h4>
                            <div class="footer_info-detail">
                                Liên hệ
                            </div>
                            <div class="footer_info-detail">
                                Bảo mật
                            </div>
                            <div class="footer_info-detail">
                                Tài khoản
                            </div>
                        </div>
                    </div>
                    <div class="col l-3">
                        <div class="footer-social">
                            <i class="ti-facebook footer_icon"></i>
                            <i class="ti-instagram footer_icon"></i>
                            <i class="ti-twitter footer_icon"></i>
                        </div>
                    </div>
                </div>
                <span>© 2022 - 2025 Hocvui. Nền tảng học online mới nhất</span>
            </footer>
        </div>

        
    </div>
    <script src="/DUAN1_NHOM1_QTT/public/JS/khoahocss.js"></script>
</body>

</html>