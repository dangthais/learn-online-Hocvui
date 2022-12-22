<?php
    class DeTongHopModel extends DB{
        public function addDe($value1,$value2,$value3){
            $sql = "INSERT INTO kho_de_tong_hop (ten_khodetonghop,id_lop,id_mon) VALUES ('$value1',$value2,$value3)";
            $this->pdo_execute($sql);
        }
        public function getDeAll(){
            $sql = "SELECT * FROM kho_de_tong_hop de JOIN lop lh JOIN mon_hoc mh ON de.id_lop = lh.id_lop AND de.id_mon = mh.id_mon ORDER BY de.id_khodetonghop DESC";
            return $this->pdo_query($sql);
        }
        public function getDe($id){
            $sql = "SELECT * FROM kho_de_tong_hop WHERE id_khodetonghop = $id";
            return $this->pdo_query_one($sql);
        }
        //Lấy danh sách đề theo lớp và môn học
        public function getDemonlop($id_lop,$id_mon){
            $sql = "SELECT * FROM kho_de_tong_hop de JOIN lop lh JOIN mon_hoc mh ON de.id_lop = lh.id_lop AND de.id_mon = mh.id_mon WHERE de.id_lop = $id_lop AND de.id_mon = $id_mon ORDER BY de.id_khodetonghop DESC";
            return $this->pdo_query($sql);
        }
        //lấy danh sách đề trong khoảng
        public function getDeFrom($from,$unit){
            $sql = "SELECT * FROM kho_de_tong_hop de JOIN lop lh JOIN mon_hoc mh ON de.id_lop = lh.id_lop AND de.id_mon = mh.id_mon ORDER BY de.id_khodetonghop DESC LIMIT $from,$unit";
            return $this->pdo_query($sql);
        }
/*         //Lấy 5 đề đầu tiên
        public function get5De(){
            $sql = "SELECT * FROM kho_de de JOIN khoa_hoc kh ON de.id_khoahoc = kh.id_khoahoc ORDER BY de.id_de DESC LIMIT 0,5";
            return $this->pdo_query($sql);
        }
        //lấy danh sách đề trong khoảng theo khóa học
        public function getDeFromKH($from,$unit,$id_khoahoc){
            $sql = "SELECT * FROM kho_de de JOIN khoa_hoc kh ON de.id_khoahoc = kh.id_khoahoc WHERE de.id_khoahoc = $id_khoahoc ORDER BY de.id_de DESC LIMIT $from,$unit";
            return $this->pdo_query($sql);
        } */
        //Lấy top 2 đề được làm nhiều nhất theo môn học
        public function getDeTop2($idmon){
            $sql = "SELECT * FROM kho_de_tong_hop WHERE id_mon = $idmon ORDER BY so_luot_xem DESC LIMIT 2";
            return $this->pdo_query($sql);
        }
        public function EditDe($ten,$id){
            $sql = "UPDATE kho_de_tong_hop SET ten_khodetonghop='$ten'  WHERE id_khodetonghop = $id";
            $this->pdo_execute($sql);
        }
        public function DeleteDe($id){
            $sql ="DELETE FROM kho_de_tong_hop WHERE id_khodetonghop = $id";
            $this->pdo_execute($sql);
        }
    }