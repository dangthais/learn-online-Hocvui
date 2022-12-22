<?php
    class BaigiangctModel extends DB{
        public function addBaigiangct($value1,$value2,$value3,$value4){
            $sql = "INSERT INTO bai_giang_chitiet (ten_baigiangchitiet,video,so_luot_xem,id_baigiang) VALUES ('$value1','$value2',$value3,$value4)";
            $this->pdo_execute($sql);
        }
        public function getBaigiangctAll(){
            $sql = "SELECT * FROM bai_giang_chitiet bgct JOIN bai_giang bg ON bg.id_baigiang = bgct.id_baigiang ORDER BY bgct.id_baigiangchitiet DESC";
            return $this->pdo_query($sql);
        }
        public function getBaigiangct($id){
            $sql = "SELECT * FROM bai_giang_chitiet bgct JOIN bai_giang bg ON bg.id_baigiang = bgct.id_baigiang WHERE id_baigiangchitiet = $id";
            return $this->pdo_query_one($sql);
        }
        //Lấy danh sách bài giảng chi tiết theo bai giảng
        public function getBaigiangctBG($id_baigiang){
            $sql = "SELECT * FROM bai_giang_chitiet bgct JOIN bai_giang bg ON bgct.id_baigiang = bg.id_baigiang WHERE bgct.id_baigiang = $id_baigiang ORDER BY bgct.id_baigiangchitiet DESC";
            return $this->pdo_query($sql);
        }
        //Lấy danh sách bài giảng chi tiết trong khoảng theo bai giảng
        public function getBaigiangctFromBG($from,$unit,$id_baigiang){
            $sql = "SELECT * FROM bai_giang_chitiet bgct JOIN bai_giang bg ON bgct.id_baigiang = bg.id_baigiang WHERE bgct.id_baigiang = $id_baigiang ORDER BY bgct.id_baigiangchitiet DESC LIMIT $from,$unit";
            return $this->pdo_query($sql);
        }
        //Lấy danh sách bài giảng chi tiết trong khoảng 
        public function getBaigiangctFrom($from,$unit){
            $sql = "SELECT * FROM bai_giang_chitiet bgct JOIN bai_giang bg ON bgct.id_baigiang = bg.id_baigiang ORDER BY bgct.id_baigiangchitiet DESC LIMIT $from,$unit";
            return $this->pdo_query($sql);
        }
        public function EditBaigiangct($id,$ten,$video,$soluotxem,$id_baigiang){
            $sql = "UPDATE bai_giang_chitiet SET ten_baigiangchitiet='$ten',video= '$video', so_luot_xem = $soluotxem, id_baigiang = $id_baigiang WHERE id_baigiangchitiet = $id";
            $this->pdo_execute($sql);
        }
        public function DeleteBaigiangct($id){
            $sql ="DELETE FROM bai_giang_chitiet WHERE id_baigiangchitiet = $id";
            $this->pdo_execute($sql);
        }
    }