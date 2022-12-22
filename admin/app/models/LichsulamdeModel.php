<?php
    class LichsulamdeModel extends DB{
        public function addLichsulamde($value1,$value2){
            $sql = "INSERT INTO lich_su_lam_de (id_nguoidung,id_de) VALUES ($value1,$value2)";
            $this->pdo_execute($sql);
        }
        public function getLichsulamde($id_nguoidung){
            $sql = "SELECT * FROM lich_su_lam_de lsld JOIN kho_de de ON de.id_de = lsld.id_de WHERE lsld.id_nguoidung = $id_nguoidung";
            return $this->pdo_query($sql);
        }
        public function getLichsulamdect($id_de){
            $sql = "SELECT * FROM lich_su_lam_de lsld JOIN kho_de de ON de.id_de = lsld.id_de WHERE lsld.id_de = $id_de";
            return $this->pdo_query($sql);
        }
        /* public function EditMon($tenmon,$id){
            $sql = "UPDATE mon_hoc SET ten_mon='$tenmon' WHERE id_mon = $id";
            $this->pdo_execute($sql);
        } */
        /* public function updateLichsuhoc($id_nguoidung,$hoanthanh){
            $sql= "UPDATE lich_su_hoc SET hoanthanh = '$hoanthanh' WHERE id_nguoidung = $id_nguoidung";
            $this->pdo_execute($sql);
        }
        public function DeleteDanhgia($id){
            $sql ="DELETE FROM danh_gia WHERE id_danhgia = $id";
            $this->pdo_execute($sql);
        } */
    }