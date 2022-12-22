<?php
    class ChitietDapanchonModel extends DB{
        public function addChitietKQLD($value1,$value2,$value3){
            $sql = "INSERT INTO dap_an_chon (id_cauhoi,dap_an_chon,id_ketqua) VALUES ($value1,$value2,$value3)";
            $this->pdo_execute($sql);
        }
/*         public function getDeChitietAll(){
            $sql = "SELECT * FROM de_chitietth dect JOIN bo_cauhoi ch ON dect.id_cauhoi = ch.id_cauhoi ORDER BY dect.id_dechitietTH DESC";
            return $this->pdo_query($sql);
        } */
        public function ChitietKQLD($id_ketqua){
            $sql = "SELECT * FROM dap_an_chon WHERE id_ketqua = $id_ketqua";
            return $this->pdo_query($sql);
        }
        public function ChitietKQLD1($id){
            $sql = "SELECT * FROM dap_an_chon  WHERE id_chitietdapan = $id";
            return $this->pdo_query_one($sql);
        }
        //Lấy danh sách chi tiết đáp án chọn theo câu hỏi
        public function ChitietKQLDCH($id_cauhoi){
            $sql = "SELECT * FROM dap_an_chon  WHERE id_cauhoi = $id_cauhoi";
            return $this->pdo_query_one($sql);
        }
    }