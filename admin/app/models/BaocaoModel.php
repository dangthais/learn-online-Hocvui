<?php
    class BaocaoModel extends DB{
        public function addBaocao($value1,$value2,$value3){
            $sql = "INSERT INTO bao_cao (id_nguoidung,id_khoahoc,noi_dung,trang_thai) VALUES ($value1,$value2,'$value3','Chờ xử lý')";
            $this->pdo_execute($sql);
        }
/*         public function getDeChitietAll(){
            $sql = "SELECT * FROM de_chitietth dect JOIN bo_cauhoi ch ON dect.id_cauhoi = ch.id_cauhoi ORDER BY dect.id_dechitietTH DESC";
            return $this->pdo_query($sql);
        } */
        public function Baocao(){
            $sql = "SELECT * FROM bao_cao bc JOIN nguoi_dung ng JOIN khoa_hoc kh ON bc.id_nguoidung = ng.id_nguoidung AND kh.id_khoahoc = bc.id_khoahoc";
            return $this->pdo_query($sql);
        }
        //Lấy danh sách báo cáo chưa xư lý
        public function Baocaonc(){
            $sql = "SELECT * FROM bao_cao bc JOIN nguoi_dung ng JOIN khoa_hoc kh ON bc.id_nguoidung = ng.id_nguoidung AND kh.id_khoahoc = bc.id_khoahoc WHERE bc.trang_thai = 'Chờ xử lý'";
            return $this->pdo_query($sql);
        }
        public function EditBaocao($id_baocao){
            $sql = "UPDATE bao_cao SET trang_thai = 'Đã xử lý' WHERE id_baocao = $id_baocao";
            $this->pdo_execute($sql);
        }
    }