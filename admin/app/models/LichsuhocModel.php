<?php
    class LichsuhocModel extends DB{
        public function addLichsuhoc($value1,$value2,$value3){
            $sql = "INSERT INTO lich_su_hoc (hoan_thanh,id_nguoidung,id_khoahoc) VALUES ('$value1',$value2,$value3)";
            $this->pdo_execute($sql);
        }
        public function getDanhgiaAll(){
            $sql = "SELECT * FROM danh_gia ORDER BY id_danhgia DESC";
            return $this->pdo_query($sql);
        }
        public function getLichsuhoc($id_nguoidung){
            $sql = "SELECT * FROM lich_su_hoc lsh JOIN khoa_hoc kh ON lsh.id_khoahoc =kh.id_khoahoc WHERE id_nguoidung = $id_nguoidung";
            return $this->pdo_query($sql);
        }
        /* public function EditMon($tenmon,$id){
            $sql = "UPDATE mon_hoc SET ten_mon='$tenmon' WHERE id_mon = $id";
            $this->pdo_execute($sql);
        } */
        public function updateLichsuhoc($id_nguoidung,$hoanthanh){
            $sql= "UPDATE lich_su_hoc SET hoanthanh = '$hoanthanh' WHERE id_nguoidung = $id_nguoidung";
            $this->pdo_execute($sql);
        }
        public function DeleteDanhgia($id){
            $sql ="DELETE FROM danh_gia WHERE id_danhgia = $id";
            $this->pdo_execute($sql);
        }
    }