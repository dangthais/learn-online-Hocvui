<?php
    class KhoahocModel extends DB{
        public function addKh($ten_kh,$mo_ta,$anh,$luotxem,$malop,$mamon){
            $sql = "INSERT INTO khoa_hoc(ten_khoahoc,mo_ta,anh_khoahoc,so_luot_xem,id_lop,id_mon) values ('$ten_kh','$mo_ta','$anh',$luotxem,$malop,$mamon)";
            $this->pdo_execute($sql);
        }
        public function getkhAll(){
            $sql = "SELECT * FROM khoa_hoc kh JOIN mon_hoc mh JOIN lop lp ON
            kh.id_lop = lp.id_lop AND kh.id_mon = mh.id_mon ORDER BY kh.id_khoahoc DESC";
            return $this->pdo_query($sql);
        }
        public function getkh($id){
            $sql = "SELECT kh.id_khoahoc,kh.ten_khoahoc,kh.mo_ta,kh.anh_khoahoc,kh.so_luot_xem,kh.id_lop,kh.id_mon, lh.ten_lop,mh.ten_mon, COUNT(dg.id_danhgia) soluongdg,AVG(dg.so_sao) danhgiatb FROM khoa_hoc kh JOIN lop lh JOIN mon_hoc mh JOIN danh_gia dg ON kh.id_khoahoc = dg.id_khoahoc AND kh.id_lop = lh.id_lop AND kh.id_mon = mh.id_mon WHERE kh.id_khoahoc = $id";
            return $this->pdo_query_one($sql);
        }
        //Lấy số lượng khóa học trong khoảng
        public function getkhFrom($form,$unit){
            $sql = "SELECT * FROM khoa_hoc kh JOIN mon_hoc mh JOIN lop lp ON
            kh.id_lop = lp.id_lop AND kh.id_mon = mh.id_mon ORDER BY kh.id_khoahoc DESC LIMIT $form,$unit";
            return $this->pdo_query($sql);
        }
        //Lấy số lượng khóa học theo môn và lớp
        public function getkhmonlop($idlop,$idmon){
            $sql = "SELECT * FROM khoa_hoc kh JOIN mon_hoc mh JOIN lop lp ON
            kh.id_lop = lp.id_lop AND kh.id_mon = mh.id_mon WHERE kh.id_lop = $idlop AND kh.id_mon = $idmon ORDER BY kh.id_khoahoc DESC ";
            return $this->pdo_query($sql);
        }
        //Lây danh sách khóa học theo môn
        public function getkhmon($idmon){
            $sql = "SELECT * FROM khoa_hoc kh JOIN mon_hoc mh ON
            kh.id_mon = mh.id_mon WHERE kh.id_mon = $idmon ORDER BY kh.id_khoahoc DESC ";
            return $this->pdo_query($sql);
        }
        //lấy danh sách khóa học theo tên
        public function getkhten($ten){
            $sql = "SELECT * FROM khoa_hoc kh JOIN mon_hoc mh JOIN lop lp ON
            kh.id_lop = lp.id_lop AND kh.id_mon = mh.id_mon WHERE kh.ten_khoahoc LIKE '%$ten%'";
            return $this->pdo_query($sql);
        }
        public function Editkh($ten_kh,$mo_ta,$anh,$luotxem,$malop,$mamon,$id){
            $sql ="UPDATE khoa_hoc set ten_khoahoc ='$ten_kh',mo_ta ='$mo_ta',anh_khoahoc ='$anh',so_luot_xem=$luotxem, id_lop=$malop,id_mon=$mamon where id_khoahoc =$id";  
            $this->pdo_execute($sql);
          }
        //Cập nhật số lượt xem
        public function UpdateView($soluotxem,$id){
            $sql ="UPDATE khoa_hoc set so_luot_xem=$soluotxem where id_khoahoc =$id";  
            $this->pdo_execute($sql);
        }
        public function deletekh($id){
            $sql ="DELETE FROM khoa_hoc WHERE id_khoahoc = $id";
            $this->pdo_execute($sql);
        }

    }
