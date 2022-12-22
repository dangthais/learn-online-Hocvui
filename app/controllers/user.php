<?php
class user extends BaseController
{
    private $nguoidung;
    private $lop;
    public function __construct()
    {
        $this->nguoidung = $this->model('NguoidungModel');
        $this->lop = $this->model('LopModel');
    }
    public function Show()
    {
        //view
    }
    public  function login()
    {
        //view
        $this->view("master2", [
            'page' => 'login',
            'nguoidung' => $this->nguoidung,

        ]);
    }
    public function loginKH($idkhoahoc)
    {
        //view
        $this->view("master2", [
            'page' => 'loginKH',
            'nguoidung' => $this->nguoidung,
            'idkhoahoc' => $idkhoahoc
        ]);
    }
    public function register()
    {
        $this->view("master2", [
            'page' => 'register',
            'nguoidung' => $this->nguoidung,
            'lop' => $this->lop
        ]);
    }
    public function Thong_tin_tai_khoan($id_nguoidung)
    {
        $this->view("master2", [
            'page' => 'Thongtintaikhoan',
            'nguoidung' => $this->nguoidung,
            'id_nguoidung' => $id_nguoidung,
        ]);
    }
    public function Thay_doi_mat_khau($id_nguoidung)
    {
        $this->view("master2", [
            'page' => 'Thaydoimatkhau',
            'nguoidung' => $this->nguoidung,
            'id_nguoidung' => $id_nguoidung,
        ]);
    }
    public function Dang_xuat()
    {
        session_destroy();
        header('location:/DUAN1_NHOM1_QTT/');
    }
}
