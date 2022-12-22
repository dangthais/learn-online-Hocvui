<?php
class Home extends BaseController{
    private $thongke;
    private $baocao;
    private $nguoidung;
    private $khoahoc;
    public function __construct()
    {
        $this->thongke = $this->model('ThongkeModel');
        $this->baocao = $this->model('BaocaoModel');
        $this->nguoidung = $this->model('NguoidungModel');
        $this->khoahoc = $this->model('KhoahocModel');
    }
    public function Show(){
        //model
        //view
        $this->view("master1",[
            'page'=>'Home',
            'thongke'=>$this->thongke,
            'baocao'=>$this->baocao,
            'nguoidung'=>$this->nguoidung,
            'khoahoc'=>$this->khoahoc
        ]);

    }
}