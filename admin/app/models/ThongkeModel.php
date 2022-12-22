<?php
    class ThongkeModel extends DB{
        //thống kê khóa học nổi bật theo lượt xem tốt và đánh giá trên 4sao
        public function khoahocnoibattk(){
            $sql = "SELECT kh.id_khoahoc,kh.ten_khoahoc,kh.so_luot_xem,kh.anh_khoahoc,lh.ten_lop,mh.ten_mon, AVG(dg.so_sao) danhgiatb,COUNT(dg.so_sao) tongdanhgia  FROM khoa_hoc kh  JOIN danh_gia dg  JOIN lop lh JOIN mon_hoc mh
            ON dg.id_khoahoc = kh.id_khoahoc AND kh.id_lop = lh.id_lop AND kh.id_mon =mh.id_mon GROUP BY kh.id_khoahoc, kh.ten_khoahoc,kh.so_luot_xem,kh.anh_khoahoc,lh.ten_lop,mh.ten_mon HAVING danhgiatb >=4 ORDER BY kh.so_luot_xem DESC LIMIT 0,4";
            return $this->pdo_query($sql);
        }
        public function khoahocnoibattkAll(){
            $sql = "SELECT kh.id_khoahoc,kh.ten_khoahoc,kh.so_luot_xem,kh.anh_khoahoc,lh.ten_lop,mh.ten_mon, AVG(dg.so_sao) danhgiatb,COUNT(dg.so_sao) tongdanhgia  FROM khoa_hoc kh  JOIN danh_gia dg  JOIN lop lh JOIN mon_hoc mh
            ON dg.id_khoahoc = kh.id_khoahoc AND kh.id_lop = lh.id_lop AND kh.id_mon =mh.id_mon GROUP BY kh.id_khoahoc, kh.ten_khoahoc,kh.so_luot_xem,kh.anh_khoahoc,lh.ten_lop,mh.ten_mon HAVING danhgiatb >=4 ORDER BY kh.so_luot_xem DESC LIMIT 0,10";
            return $this->pdo_query($sql);
        }
        //thống kê khóa học nổi bật theo lượt xem tốt và đánh giá trên 4sao và theo lớp 
        public function khoahocnoibattklop($lop){
            $sql = "SELECT kh.id_khoahoc,kh.ten_khoahoc,kh.so_luot_xem,kh.anh_khoahoc,lh.ten_lop,mh.ten_mon, AVG(dg.so_sao) danhgiatb,COUNT(dg.so_sao) tongdanhgia FROM khoa_hoc kh JOIN danh_gia dg JOIN lop lh JOIN mon_hoc mh
            ON kh.id_khoahoc = kh.id_khoahoc AND kh.id_lop = lh.id_lop AND kh.id_mon =mh.id_mon GROUP BY kh.id_khoahoc, kh.ten_khoahoc,kh.so_luot_xem,kh.anh_khoahoc,lh.ten_lop,mh.ten_mon HAVING danhgiatb >= 4 AND lh.ten_lop = '$lop' ORDER BY kh.so_luot_xem DESC LIMIT 0,4";
            return $this->pdo_query($sql);
        }
        public function khoahocnoibattklopAll($lop){
            $sql = "SELECT dg.id_khoahoc,kh.ten_khoahoc,kh.so_luot_xem,lh.ten_lop,mh.ten_mon, AVG(dg.so_sao) danhgiatb,COUNT(dg.so_sao) tongdanhgia FROM khoa_hoc kh JOIN danh_gia dg JOIN lop lh JOIN mon_hoc mh
            ON dg.id_khoahoc = kh.id_khoahoc AND kh.id_lop = lh.id_lop AND kh.id_mon =mh.id_mon GROUP BY dg.id_khoahoc, kh.ten_khoahoc,kh.so_luot_xem,lh.ten_lop,mh.ten_mon HAVING danhgiatb >= 4 AND lh.ten_lop = '$lop' ORDER BY kh.so_luot_xem DESC LIMIT 0,10";
            return $this->pdo_query($sql);
        }
        //Thống kê khóa học
        public function khoahoctk(){
            $sql = "SELECT lh.id_lop, mh.id_mon,lh.ten_lop,mh.ten_mon, COUNT(kh.id_khoahoc) tongkhoahoc FROM khoa_hoc kh JOIN lop lh JOIN mon_hoc mh ON lh.id_lop = kh.id_lop AND kh.id_mon = mh.id_mon
            GROUP BY  lh.id_lop, mh.id_mon,lh.ten_lop,mh.ten_mon";
            return $this->pdo_query($sql);
        }
         //thống kê chi tiết khóa học
        public function khoahoccttk(){
            $sql = "SELECT kh.id_khoahoc,kh.ten_khoahoc,kh.so_luot_xem, AVG(dg.so_sao) danhgiatb ,COUNT(dg.so_sao) tongdanhgia FROM khoa_hoc kh LEFT JOIN danh_gia dg 
            ON dg.id_khoahoc = kh.id_khoahoc GROUP BY kh.id_khoahoc, kh.ten_khoahoc,kh.so_luot_xem ORDER BY kh.so_luot_xem ";
            return $this->pdo_query($sql);
        }
        //thống kê chi tiết khóa học trong khoảng
        public function khoahoccttkfrom($from,$unit){
            $sql = "SELECT kh.id_khoahoc,kh.ten_khoahoc,kh.so_luot_xem, AVG(dg.so_sao) danhgiatb ,COUNT(dg.so_sao) tongdanhgia FROM khoa_hoc kh LEFT JOIN danh_gia dg 
            ON dg.id_khoahoc = kh.id_khoahoc GROUP BY kh.id_khoahoc, kh.ten_khoahoc,kh.so_luot_xem ORDER BY kh.so_luot_xem DESC LIMIT $from,$unit";
            return $this->pdo_query($sql);
        }
        //Thống kê đánh gia
        public function Danhgiatk(){
            $sql = "SELECT *,AVG(so_sao) danhgiatb,COUNT(id_danhgia) tongdanhgia FROM danh_gia ORDER BY id_danhgia DESC";
            return $this->pdo_query($sql);
        }
    }