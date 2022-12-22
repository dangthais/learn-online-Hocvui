<?php
    class KhodeModel extends DB{
        public function addDe($value1,$value2,$value3){
            $sql = "INSERT INTO kho_de (ten_de,id_khoahoc,loai_de) VALUES ('$value1',$value2,'$value3')";
            $this->pdo_execute($sql);
        }
        public function addDeTH($value1,$value2,$value3,$value4){
            $sql = "INSERT INTO kho_de (ten_de,id_lop,id_mon,loai_de) VALUES ('$value1',$value2,$value3,'$value4')";
            $this->pdo_execute($sql);
        }
        public function getDeAll(){
            $sql = "SELECT * FROM kho_de de JOIN khoa_hoc kh  ON de.id_khoahoc = kh.id_khoahoc ORDER BY de.id_de DESC";
            return $this->pdo_query($sql);
        }
        //Lấy danh sách đề tổng hợp
        public function getDeAllTH(){
            $sql = "SELECT * FROM kho_de de JOIN  lop lh JOIN mon_hoc mh  ON  de.id_lop = lh.id_lop AND de.id_mon = mh.id_mon HAVING de.loai_de = 'De tong hop' ORDER BY de.id_de DESC";
            return $this->pdo_query($sql);
        }
        public function getDe($id){
            $sql = "SELECT * FROM kho_de WHERE id_de = $id";
            return $this->pdo_query_one($sql);
        }
        //Lấy danh sách đề theo khóa học
        public function getDeKH($id_khoahoc){
            $sql = "SELECT * FROM kho_de de JOIN khoa_hoc kh ON de.id_khoahoc = kh.id_khoahoc WHERE de.id_khoahoc = $id_khoahoc ORDER BY de.id_de DESC";
            return $this->pdo_query($sql);
        }
        //lấy danh sách đề trong khoảng
        public function getDeFrom($from,$unit){
            $sql = "SELECT * FROM kho_de de JOIN khoa_hoc kh ON de.id_khoahoc = kh.id_khoahoc ORDER BY de.id_de DESC LIMIT $from,$unit";
            return $this->pdo_query($sql);
        }
        //Lấy danh sách đề tổng hợp trong khoảng
        public function getDeTHFrom($from,$unit){
            $sql = "SELECT * FROM kho_de de JOIN  lop lh JOIN mon_hoc mh  ON  de.id_lop = lh.id_lop AND de.id_mon = mh.id_mon ORDER BY de.id_de DESC LIMIT $from,$unit";
            return $this->pdo_query($sql);
        }
        //Lấy 5 đề đầu tiên
        public function get5De(){
            $sql = "SELECT * FROM kho_de WHERE loai_de = 'De tong hop' ORDER BY so_luot_xem DESC LIMIT 0,5";
            return $this->pdo_query($sql);
        }
        //lấy danh sách đề trong khoảng theo khóa học
        public function getDeFromKH($from,$unit,$id_khoahoc){
            $sql = "SELECT * FROM kho_de de JOIN khoa_hoc kh ON de.id_khoahoc = kh.id_khoahoc WHERE de.id_khoahoc = $id_khoahoc ORDER BY de.id_de DESC LIMIT $from,$unit";
            return $this->pdo_query($sql);
        }
        //Lấy top 2 đề được làm nhiều nhất theo khóa học
        public function getDeTop2($idkhoahoc){
            $sql = "SELECT TOP 2 FROM kho_de WHERE id_khoahoc = $idkhoahoc ORDER BY so_luot_xem DESC";
            return $this->pdo_query($sql);
        }
        //Lấy top 2 đề được làm nhiều nhất theo môn học
        public function getDeMonTop2($id_mon){
            $sql = "SELECT * FROM kho_de WHERE id_mon = $id_mon ORDER BY so_luot_xem DESC LIMIT 2";
            return $this->pdo_query($sql);
        }
        //Lấy ds đề theo lớp và môn
        public function getDeLopMon($id_lop,$id_mon){
            $sql = "SELECT * FROM kho_de WHERE id_lop = $id_lop AND id_mon = $id_mon";
            return $this->pdo_query($sql);
        }
        public function EditDe($ten,$id){
            $sql = "UPDATE kho_de SET ten_de='$ten'  WHERE id_de = $id";
            $this->pdo_execute($sql);
        }
        public function DeleteDe($id){
            $sql ="DELETE FROM kho_de WHERE id_de = $id";
            $this->pdo_execute($sql);
        }
    }