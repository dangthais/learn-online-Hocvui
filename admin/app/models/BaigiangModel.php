<?php
    class BaigiangModel extends DB{
        public function addBaigiang($value1,$value2){
            $sql = "INSERT INTO bai_giang (ten_baigiang,id_khoahoc) VALUES ('$value1',$value2)";
            $this->pdo_execute($sql);
        }
        public function getBaigiangAll(){
            $sql = "SELECT * FROM bai_giang bg JOIN khoa_hoc kh ON bg.id_khoahoc = kh.id_khoahoc ORDER BY bg.id_baigiang DESC";
            return $this->pdo_query($sql);
        }
        public function getBaigiang($id){
            $sql = "SELECT * FROM bai_giang WHERE id_baigiang = $id";
            return $this->pdo_query_one($sql);
        }
        //Lấy danh sách bài giảng theo khóa học
        public function getBaigiangKH($id_khoahoc){
            $sql = "SELECT * FROM bai_giang bg JOIN khoa_hoc kh ON bg.id_khoahoc = kh.id_khoahoc WHERE bg.id_khoahoc = $id_khoahoc";
            return $this->pdo_query($sql);
        }
        //lấy danh sách bài giảng trong khoảng
        public function getBaigiangFrom($from,$unit){
            $sql = "SELECT * FROM bai_giang bg JOIN khoa_hoc kh ON bg.id_khoahoc = kh.id_khoahoc ORDER BY bg.id_baigiang DESC LIMIT $from,$unit";
            return $this->pdo_query($sql);
        }
        //lấy danh sách bài giảng trong khoảng theo khóa học
        public function getBaigiangFromKH($from,$unit,$id_khoahoc){
            $sql = "SELECT * FROM bai_giang bg JOIN khoa_hoc kh ON bg.id_khoahoc = kh.id_khoahoc WHERE bg.id_khoahoc = $id_khoahoc ORDER BY bg.id_baigiang DESC LIMIT $from,$unit";
            return $this->pdo_query($sql);
        }
        public function EditBaigiang($ten,$khoahoc,$id){
            $sql = "UPDATE bai_giang SET ten_baigiang='$ten',id_khoahoc =$khoahoc  WHERE id_baigiang = $id";
            $this->pdo_execute($sql);
        }
        public function DeleteBaigiang($id){
            $sql ="DELETE FROM bai_giang WHERE id_baigiang = $id";
            $this->pdo_execute($sql);
        }
    }