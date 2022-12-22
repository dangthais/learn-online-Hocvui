<?php
class Thong_ke extends BaseController
{
    private $thongke;
    private $monhoc;
    public function __construct()
    {
        $this->thongke = $this->model('ThongkeModel');
        $this->monhoc = $this-> model('MonModel');
    }
    public function Show()
    {
        //view
        $this->view('master1', [
            'page' => 'Monhoc',
            'mon' =>$this->monhoc
        ]);
    }
    public function Thong_ke_khoa_hoc()
    {
        //view
        $this->view('master1', [
            'page' => 'Thongke',
            'thongke'=>$this->thongke
        ]);
    }
    public function Thong_ke_khoa_hoc_chi_tiet()
    {
        //view
        $this->view('master1', [
            'page' => 'Thongkekhoahocct',
            'thongke'=>$this->thongke
        ]);
    }
    public function Danh_gia(){
        //view
        $this->view('master1', [
            'page' => 'Danhgia',
            'thongke'=>$this->thongke
        ]);
    }
}
