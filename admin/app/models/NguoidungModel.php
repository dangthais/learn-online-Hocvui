<?php
    class NguoidungModel extends DB{
        public function adduser($hoten,$ten,$mk,$email,$lop){
            $sql = "INSERT INTO nguoi_dung (hoten,ten,mat_khau,email,lop,anh,vaitro) VALUES ('$hoten','$ten','$mk','$email','$lop','user-account-flat-icon-vector-14992789.jpg',0)";
            $this->pdo_execute($sql);
        }
        public function getuserAll(){
            $sql = "SELECT * FROM nguoi_dung ORDER BY id_nguoidung DESC";
            return $this->pdo_query($sql);
        }
        public function getuser($id){
            $sql = "SELECT * FROM nguoi_dung WHERE id_nguoidung = $id";
            return $this->pdo_query_one($sql);
        }
        //Lấy thông tin user thông qua tên đăng nhập
        public function getusername($ten){
            $sql = "SELECT * FROM nguoi_dung WHERE ten= '$ten'";
            return $this->pdo_query_one($sql);
        }
        //Lấy danh sách người dùng trong khoảng
        public function getuserfrom($from,$unit){
            $sql = "SELECT * FROM nguoi_dung ORDER BY id_nguoidung DESC LIMIT $from,$unit";
            return $this->pdo_query($sql);
        }
        public function Edituser($hoten,$lop,$email,$anh,$id){
            $sql = "UPDATE nguoi_dung SET hoten='$hoten',lop='$lop',email='$email',anh='$anh' WHERE id_nguoidung = $id";
            $this->pdo_execute($sql);
        }
        public function EditUserPassword($matkhaumoi,$id){
            $sql = "UPDATE nguoi_dung SET mat_khau='$matkhaumoi' WHERE id_nguoidung = $id";
            $this->pdo_execute($sql);
        }
        public function Deleteuser($id){
            $sql ="DELETE FROM nguoi_dung WHERE id_nguoidung = $id";
            $this->pdo_execute($sql);
        }
    }