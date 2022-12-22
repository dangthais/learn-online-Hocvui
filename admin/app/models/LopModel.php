<?php
    class LopModel extends DB{
        public function addLop($value){
            $sql = "INSERT INTO lop (ten_lop) VALUES ('$value')";
            $this->pdo_execute($sql);
        }
        public function getLopAll(){
            $sql = "SELECT * FROM lop ORDER BY id_lop DESC";
            return $this->pdo_query($sql);
        }
        public function getLop($id){
            $sql = "SELECT * FROM lop WHERE id_lop = $id";
            return $this->pdo_query_one($sql);
        }
        public function EditLop($tenlop,$id){
            $sql = "UPDATE lop SET ten_lop='$tenlop' WHERE id_lop = $id";
            $this->pdo_execute($sql);
        }
        public function DeleteLop($id){
            $sql ="DELETE FROM lop WHERE id_lop = $id";
            $this->pdo_execute($sql);
        }
    }