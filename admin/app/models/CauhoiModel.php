<?php
    class CauhoiModel extends DB{
        public function addCauhoi($cauhoi,$idkh){
            $sql = "INSERT INTO bo_cauhoi(ten_cauhoi,id_khoahoc)  values ('$cauhoi',$idkh)";
            $this->pdo_execute($sql);
        }
        public function getCauhoiAll(){
            $sql = "SELECT * FROM bo_cauhoi ch JOIN khoa_hoc kh ON ch.id_khoahoc = kh.id_khoahoc ORDER BY ch.id_cauhoi DESC";
            return $this->pdo_query($sql);
        }
        public function getCauhoi($id){
            $sql = "SELECT * FROM bo_cauhoi WHERE id_cauhoi= $id";
            return $this->pdo_query_one($sql);
        }
        //Lấy số lượng câu hỏi trong khoảng
        public function getCauhoiFrom($form,$unit){
            $sql = "SELECT * FROM bo_cauhoi ch JOIN khoa_hoc kh ON ch.id_khoahoc = kh.id_khoahoc ORDER BY id_cauhoi DESC LIMIT $form,$unit";
            return $this->pdo_query($sql);
        }
        //Lấy số lượng câu hỏi trong khoảng dựa theo khóa học
        public function getCauhoiFromKH($form,$unit,$id_khoahoc){
            $sql = "SELECT * FROM bo_cauhoi ch JOIN khoa_hoc kh ON ch.id_khoahoc = kh.id_khoahoc WHERE ch.id_khoahoc = $id_khoahoc ORDER BY id_cauhoi DESC LIMIT $form,$unit ";
            return $this->pdo_query($sql);
        }
        //Lấy danh sách câu hỏi theo khóa học
        public function getCauhoiKH($id_khoahoc){
            $sql = "SELECT * FROM bo_cauhoi ch JOIN khoa_hoc kh ON ch.id_khoahoc = kh.id_khoahoc WHERE ch.id_khoahoc = $id_khoahoc";
            return $this->pdo_query($sql);
        }
        //Lấy danh sách câu hỏi theo lớp và môn
        public function getCauhoiLM($idlop,$idmon){
            $sql = "SELECT * FROM bo_cauhoi ch JOIN khoa_hoc kh JOIN lop lh JOIN mon_hoc mh ON ch.id_khoahoc = kh.id_khoahoc AND kh.id_lop = lh.id_lop AND kh.id_mon = mh.id_mon WHERE kh.id_lop = $idlop AND kh.id_mon = $idmon";
            return $this->pdo_query($sql);
        }
        public function EditCauhoi($cauhoi,$idkh,$id){
            $sql ="UPDATE bo_cauhoi set ten_cauhoi='$cauhoi', id_khoahoc=$idkh where id_cauhoi=$id";  
            $this->pdo_execute($sql);
          }
        public function deleteCauhoi($id){
            $sql ="DELETE FROM bo_cauhoi WHERE id_cauhoi=$id";
            $this->pdo_execute($sql);
        }

    }