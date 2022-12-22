<?php
    class KetqualamdeModel extends DB{
        public function addKQLD($value1,$value2,$value3){
            $sql = "INSERT INTO ket_qua_lam_de (diem,id_nguoidung,id_de) VALUES ($value1,$value2,$value3)";
            $this->pdo_execute($sql);
        }
/*         public function getDeChitietAll(){
            $sql = "SELECT * FROM de_chitietth dect JOIN bo_cauhoi ch ON dect.id_cauhoi = ch.id_cauhoi ORDER BY dect.id_dechitietTH DESC";
            return $this->pdo_query($sql);
        } */
        public function KQLDchitiet($id_nguoidung){
            $sql = "SELECT * FROM ket_qua_lam_de  WHERE id_nguoidung = $id_nguoidung";
            return $this->pdo_query($sql);
        }
        //Lấy kết quả làm đề của một lần làm
        public function KQLDchitiet1(){
            $sql = "SELECT * FROM ket_qua_lam_de ORDER BY id_ketqua DESC LIMIT 0,1";
            return $this->pdo_query_one($sql);
        }
        //Lấy kết quả làm đề theo đề id đề
        public function KQLDchitietde($id_de){  
            $sql = "SELECT * FROM ket_qua_lam_de WHERE id_de = $id_de";
            return $this->pdo_query($sql);
        }
        //Lấy kết quả làm đề theo đề id ket quả
        public function KQLDchitietdekq($id_ketqua){  
            $sql = "SELECT * FROM ket_qua_lam_de WHERE id_ketqua = $id_ketqua";
            return $this->pdo_query_one($sql);
        }
    }