<?php
class Thong_tin_khoa_hoc extends BaseController{
    private $khoahoc;
    private $baigiang;
    private $baigiangchitiet;
    private $nguoidung;
    public function __construct()
    {
        $this->khoahoc = $this->model('KhoahocModel');
        $this->baigiang = $this->model('BaigiangModel');
        $this->baigiangchitiet = $this->model('BaigiangctModel');
        $this->nguoidung=$this->model('NguoidungModel');
    }
    public function Show(){
        //view
    }
    public function List($idkhoahoc){
        $this->view("master2",[
            'page'=>'Thong_tin_khoa_hoc',
            'khoahoc'=>$this->khoahoc,
            'baigiang'=>$this->baigiang,
            'baigiangchitiet'=>$this->baigiangchitiet,
            'idkhoahoc'=>$this->$idkhoahoc,
            'nguoidung'=>$this->nguoidung
       ]);
    }
}