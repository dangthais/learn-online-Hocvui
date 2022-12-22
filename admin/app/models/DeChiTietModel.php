<?php
    class DeChiTietModel extends DB{
        public function addDeChitiet($value1,$value2){
            $sql = "INSERT INTO de_chitiet (id_de,id_cauhoi) VALUES ($value1,$value2)";
            $this->pdo_execute($sql);
        }
        public function getDeChitietAll(){
            $sql = "SELECT * FROM de_chitiet dect JOIN bo_cauhoi ch ON dect.id_cauhoi = ch.id_cauhoi ORDER BY dect.id_dechitiet DESC";
            return $this->pdo_query($sql);
        }
        public function getDeChitiet($id){
            $sql = "SELECT * FROM de_chitiet dect JOIN bo_cauhoi ch JOIN kho_de kd ON dect.id_cauhoi = ch.id_cauhoi AND dect.id_de = kd.id_de WHERE dect.id_de = $id";
            return $this->pdo_query($sql);
        }
        public function EditDe($id,$idcauhoi){
            $sql = "UPDATE de_chitiet SET id_cauhoi=$idcauhoi WHERE id_chitietde = $id";
            $this->pdo_execute($sql);
        }
        public function DeleteDe($id){
            $sql ="DELETE FROM de_chitiet WHERE id_dechitiet = $id";
            $this->pdo_execute($sql);
        }
    }