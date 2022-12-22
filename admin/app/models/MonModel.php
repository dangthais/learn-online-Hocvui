<?php
    class MonModel extends DB{
        public function addMon($value){
            $sql = "INSERT INTO mon_hoc (ten_mon) VALUES ('$value')";
            $this->pdo_execute($sql);
        }
        public function getMonAll(){
            $sql = "SELECT * FROM mon_hoc ORDER BY id_mon DESC";
            return $this->pdo_query($sql);
        }
        public function getMon($id){
            $sql = "SELECT * FROM mon_hoc WHERE id_mon = $id";
            return $this->pdo_query_one($sql);
        }
        public function EditMon($tenmon,$id){
            $sql = "UPDATE mon_hoc SET ten_mon='$tenmon' WHERE id_mon = $id";
            $this->pdo_execute($sql);
        }
        public function DeleteMon($id){
            $sql ="DELETE FROM mon_hoc WHERE id_mon = $id";
            $this->pdo_execute($sql);
        }
    }