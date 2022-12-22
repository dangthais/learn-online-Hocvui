<?php
    class DapanModel extends DB{
        public function addDapan($dapan,$dapandung,$idch){
            $sql = "INSERT INTO bo_dapan(ten_dapan,dap_an_dung,id_cauhoi)  values ('$dapan',$dapandung,$idch)";
            $this->pdo_execute($sql);
        }
        public function getDapanAll(){
            $sql = "SELECT * FROM bo_dapan ORDER BY id_dapan DESC";
            return $this->pdo_query($sql);
        }
        public function getDapan($id){
            $sql = "SELECT * FROM bo_dapan WHERE id_dapan= $id";
            return $this->pdo_query_one($sql);
        }
        //Lấy danh sách đáp án theo id câu hỏi
        public function getDapanCH($idcauhoi){
            $sql = "SELECT * FROM bo_dapan da JOIN bo_cauhoi ch ON da.id_cauhoi = ch.id_cauhoi  WHERE da.id_cauhoi = $idcauhoi";
            return $this->pdo_query($sql);
        }
        public function EditDapan($dapan,$dapandung,$iddapan){
            $sql ="UPDATE bo_dapan set ten_dapan='$dapan', dap_an_dung=$dapandung where id_dapan=$iddapan";  
            $this->pdo_execute($sql);
          }
        public function deleteDapan($id){
            $sql ="DELETE FROM bo_dapan WHERE id_dapan=$id";
            $this->pdo_execute($sql);
        }

    }