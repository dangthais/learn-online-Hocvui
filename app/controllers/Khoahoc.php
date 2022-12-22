<?php
class Khoahoc extends BaseController{
    private $lop;
    private $mon;
    private $khoahoc;
    private $baigiang;
    private $baigiangchitiet;
    private $baitap;
    private $danhgia;
    private $lichsuhoc;
    private $baocao;
    private $nguoidung;
    private $thongke;
    public function __construct()
    {
        $this->lop=$this->model('LopModel');
        $this->mon = $this->model('MonModel');
        $this->khoahoc = $this->model('KhoahocModel');
        $this->baigiang = $this->model('BaigiangModel');
        $this->baigiangchitiet = $this->model('BaigiangctModel');
        $this->baitap = $this->model('KhodeModel');
        $this->danhgia = $this->model('DanhgiaModel');
        $this->lichsuhoc = $this->model('LichsuhocModel');
        $this->baocao = $this->model('BaocaoModel');
        $this->nguoidung = $this->model('NguoidungModel');
        $this->thongke = $this->model('ThongkeModel');
    }
    public function Show(){
        //view
    }
    public function List($idlop,$idmon){
        $this->view("master1",[
            'page'=>'Khoahoc',
            'lop'=>$this->lop,
            'mon'=>$this->mon,
            'khoahoc'=>$this->khoahoc,
            'idlop'=>$idlop,
            'idmon'=>$idmon,
            'nguoidung'=>$this->nguoidung
       ]);
    }
    public function Thong_tin_khoa_hoc($idkhoahoc){
        $this->view("master2",[
            'page'=>'Thong_tin_khoa_hoc',
            'khoahoc'=>$this->khoahoc,
            'idkhoahoc'=>$idkhoahoc,
            'baigiang'=>$this->baigiang,
            'baigiangct'=>$this->baigiangchitiet,
            'nguoidung'=>$this->nguoidung
        ]);
    }
    public function Chi_tiet_khoa_hoc($idkhoahoc){
        $this->view("master2",[
            'page'=>'Chi_tiet_khoa_hoc',
            'khoahoc'=>$this->khoahoc,
            'idkhoahoc'=>$idkhoahoc,
            'baigiang'=>$this->baigiang,
            'baigiangct'=>$this->baigiangchitiet,
            'baitap'=>$this->baitap,
            'lichsuhoc'=>$this->lichsuhoc,
            'baocao'=>$this->baocao,
            'nguoidung'=>$this->nguoidung
        ]);
    }
    public function Danh_gia_khoa_hoc($idkhoahoc){
        $this->view("master2",[
            'page'=>'Danh_gia_khoa_hoc',
            'lop'=>$this->lop,
            'mon'=>$this->mon,
            'khoahoc'=>$this->khoahoc,
            'idkhoahoc'=>$idkhoahoc,
            'danhgia'=>$this->danhgia,
            'lichsuhoc'=>$this->lichsuhoc,
            'nguoidung'=>$this->nguoidung
        ]);
    }
    public function Khoa_hoc_noi_bat(){
        $this->view("master1",[
            'page'=>'Khoa_hoc_noi_bat',
            'lop'=>$this->lop,
            'mon'=>$this->mon,
            'khoahoc'=>$this->khoahoc,
            'danhgia'=>$this->danhgia,
            'lichsuhoc'=>$this->lichsuhoc,
            'nguoidung'=>$this->nguoidung,
            'thongke'=>$this->thongke
        ]);
    }
}