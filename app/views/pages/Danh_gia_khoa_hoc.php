<?php
   $idkhoahoc = $data['idkhoahoc'];
   $data['lichsuhoc']->updateLichsuhoc($idkhoahoc,'Hoàn thành');
   if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $sao = $_POST['rate'];
    $dgchung = $_POST['danh_gia_chung'];
    $dgchitiet = $_POST['danh_gia_chi_tiet'];
    $data['danhgia']->addDanhgia($dgchung,$dgchitiet,$sao,$_SESSION['id_nguoidung'],$idkhoahoc);
   }
?>
<div class="review">
    <h1 class="review-title">Đánh giá khóa học</h1>

    <div class="container">
      <div class="star-widget">
        <input type="radio" name="rate" id="rate-5" value="5" form="review-form">
        <label for="rate-5" class="fas fa-star"></label>
        <input type="radio" name="rate" id="rate-4" value="4" form="review-form">
        <label for="rate-4" class="fas fa-star"></label>
        <input type="radio" name="rate" id="rate-3" value="3" form="review-form">
        <label for="rate-3" class="fas fa-star"></label>
        <input type="radio" name="rate" id="rate-2" value="2" form="review-form">
        <label for="rate-2" class="fas fa-star"></label>
        <input type="radio" name="rate" id="rate-1" value="1" form="review-form">
        <label for="rate-1" class="fas fa-star"></label>
      </div>
    </div>
    <h3 style="margin-left:90px;">Đánh giá của bạn:</h3>
    <form action="" id="review-form" method="POST">
        <input type="radio" name="danh_gia_chung" id="" value="Tốt">
        <label for="">Rất tốt</label><br>
        <input type="radio" name="danh_gia_chung" id="" value="Tốt">
        <label for="">Tốt</label><br>
        <input type="radio" name="danh_gia_chung" id="" value="Tốt">
        <label for="">Bình thường</label><br>
        <input type="radio" name="danh_gia_chung" id="" value="Tốt">
        <label for="">Tệ</label><br>
        <label for="" style="font-size: 18px;">Nội dung đánh giá : </label><br>
        <textarea name="danh_gia_chi_tiet" id="" cols="60" rows="7"></textarea><br>
        <button type="submit">Gửi đánh giá</button>

    </form>
</div>
<script>
      const btn = document.querySelector("button");
      const post = document.querySelector(".post");
      const widget = document.querySelector(".star-widget");
      const editBtn = document.querySelector(".edit");
      btn.onclick = ()=>{
        widget.style.display = "none";
        post.style.display = "block";
        editBtn.onclick = ()=>{
          widget.style.display = "block";
          post.style.display = "none";
        }
        return false;
      }
    </script>