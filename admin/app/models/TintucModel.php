<?php
    class TintucModel extends DB{
        public function addTin($tieude,$noidungngan,$noidung,$soluotxem,$anh){
            $sql = "INSERT INTO tin_tuc (tieu_de,noi_dung_ngan,noi_dung,so_luot_xem,anh_tintuc) VALUES ('$tieude','$noidungngan','$noidung',$soluotxem,'$anh')";
            $this->pdo_execute($sql);
        }
        public function getTinAll(){
            $sql = "SELECT * FROM tin_tuc ORDER BY id_tintuc DESC";
            return $this->pdo_query($sql);
        }
        public function getTin($id){
            $sql = "SELECT * FROM tin_tuc WHERE id_tintuc = $id";
            return $this->pdo_query_one($sql);
        }
        public function getTinFrom($from,$unit){
            $sql = "SELECT * FROM tin_tuc ORDER BY id_tintuc DESC LIMIT $from,$unit";
            return $this->pdo_query($sql);
        }
        public function get4Tin(){
            $sql = "SELECT * FROM tin_tuc ORDER BY id_tintuc DESC LIMIT 0,4";
            return $this->pdo_query($sql);
        }
        public function getTinXemNhieu(){
            $sql = "SELECT * FROM tin_tuc ORDER BY so_luot_xem DESC LIMIT 0,3";
            return $this->pdo_query($sql);
        }
        public function get4TinXemNhieu(){
            $sql = "SELECT * FROM tin_tuc ORDER BY so_luot_xem DESC LIMIT 0,4";
            return $this->pdo_query($sql);
        }
        public function EditTin($tieude,$noidungngan,$noidung,$anh,$id){
            $sql = "UPDATE tin_tuc SET tieu_de='$tieude',noi_dung_ngan = '$noidungngan',noi_dung = '$noidung',anh_tintuc = '$anh' WHERE id_tintuc = $id";
            $this->pdo_execute($sql);
        }
        public function DeleteLop($id){
            $sql ="DELETE FROM tin_tuc WHERE id_tintuc = $id";
            $this->pdo_execute($sql);
        }
    }