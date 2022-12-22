<?php
class Search extends BaseController{
    private $lop;
    private $mon;
    private $de;
    private $thongke;
    private $tintuc;
    private $nguoidung;
    private $khoahoc;
    public function __construct()
    {
        $this->lop=$this->model('LopModel');
        $this->mon = $this->model('MonModel');
        $this->de = $this->model('KhodeModel');
        $this->thongke = $this->model('ThongkeModel');
        $this->nguoidung = $this->model('NguoidungModel');
        $this->khoahoc = $this->model('KhoahocModel');
/*      $this->tintuc = $this->model('TintucModel');
         */
    }
    public function Show(){
        //view
        $this->view("master1",[
             'page'=>'Search',
            'lop'=>$this->lop,
            'mon'=>$this->mon,
             'thongke'=>$this->thongke,
            'de'=>$this->de,
            'tintuc'=>$this->tintuc,
            'nguoidung'=>$this->nguoidung,
            'khoahoc'=>$this->khoahoc
        ]);
        
    }
}