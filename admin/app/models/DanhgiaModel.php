<?php
    class DanhgiaModel extends DB{
        public function addDanhgia($value1,$value2,$value3,$vaule4,$value5){
            $sql = "INSERT INTO danh_gia (danh_gia_chung,danh_gia_chi_tiet,so_sao,id_nguoidung,id_khoahoc) VALUES ('$value1','$value2',$value3,$vaule4,$value5)";
            $this->pdo_execute($sql);
        }
        public function getDanhgiaAll(){
            $sql = "SELECT * FROM danh_gia ORDER BY id_danhgia DESC";
            return $this->pdo_query($sql);
        }
        public function getDanhgia($id){
            $sql = "SELECT * FROM danh_gia WHERE id_danhgia = $id";
            return $this->pdo_query_one($sql);
        }
        /* public function EditMon($tenmon,$id){
            $sql = "UPDATE mon_hoc SET ten_mon='$tenmon' WHERE id_mon = $id";
            $this->pdo_execute($sql);
        } */
        // Lấy danh sách đánh giá theo khóa học
        public function getDanhgiaKH($idkhoahoc){
            $sql = "SELECT * FROM danh_gia dg JOIN nguoi_dung ng JOIN khoa_hoc kh ON dg.id_nguoidung = ng.id_nguoidung AND dg.id_khoahoc = kh.id_khoahoc WHERE dg.id_khoahoc = $idkhoahoc";
            return $this->pdo_query($sql);
        }
        public function DeleteDanhgia($id){
            $sql ="DELETE FROM danh_gia WHERE id_danhgia = $id";
            $this->pdo_execute($sql);
        }

    }