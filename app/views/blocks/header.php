<header class="header">
            <div class="col l-1">
                <a href="#"><img class="header-img" src="../public/images/logo1.png" alt=""></a>
            </div>
            <div class="col l-4">
                <div class="nav">
                    <ul class="nav_list">
                        <li class="nav_item"><a class="a" href="index.html">Trang chủ</a></li>
                        <li class="nav_item"><a class="a" href="topic.html">Luyện đề</a></li>
                        <li class="nav_item"><a class="a" href="news.html">Tin Tức</a></li>
                        <li class="nav_item"><a class="a" href="">Liên Hệ</a></li>     
                        <div class="line"></div>
                    </ul>
                </div>
            </div>
            <div class="col l-3">
                <div class="header_search">
                    <div class="header-icon">
                        <i class="ti-search"></i>
                    </div>
                    <input type="text" placeholder="Tìm kiếm khóa học, bài viết, lớp học">
                </div>
            </div>
            <div class="col l-3 header-login">
                <?php if(isset($_SESSION['userName'])){
                ?>
            <div class="account" onclick="appear()">
            <a href="#">
                <p id="account-name"><?=$_SESSION['userName']?></p>
                <img src="<?=$CONTENT_URL?>/images/<?=$_SESSION['anhqtv']?>" alt="" width="40px" height="40px">
            </a>
        </div>
        <div class="account-infor">
            <div class="account-infor-img">
                <img src="<?=$CONTENT_URL?>/images/<?=$_SESSION['anhqtv']?>" alt="" width="60px" height="60px">
                <p><?=$_SESSION['userName']?></p>
            </div>
            <ul>
                <li><a href="<?=$ADMIN_URL?>/khach_hang/index.php?btn_edit&makh=<?=$_SESSION['userName'] ?>">Thông tin tài khoản</a></li>
                <li><a href="<?=$ADMIN_URL?>/khach_hang/index.php?btn_editPassword&makh=<?=$_SESSION['userName'] ?>">Thay đổi mật khẩu</a></li>
                <li><a href="<?=$ADMIN_URL?>/logoutadmin.php">Đăng xuất</a></li>
            </ul>
            <?php }else{?>
        </div>
               <a class="header-login--btn" href="login.html">Đăng nhập</a>
               <a class="header-login--btn" href="register.html">Đăng ký</a>
            <?php }?>
               <!-- <a onclick="myFunction(); event.preventDefault();" href=""><img src="./asset/img/alex-suprun-ZHvM3XIOHoE-unsplash.jpg" alt="" class="user_avt">
                <div class="show_menu">
                    <ul class="user_list">
                        <a href="detailUser.html"><li class="user_list-item">Trang Cá Nhân</li></a>
                        <a href=""><li class="user_list-item">Viết Blog</li></a>
                        <a href=""><li class="user_list-item">Đăng Xuất</li></a>
                    </ul>
                </div>
                </a> -->
            </div>
        </header>