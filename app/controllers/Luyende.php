<?php
class Luyende extends BaseController{
    private $khode;
    private $lop;
    private $mon;
    private $dechitiet;
    private $dapan;
    private $ketqua;
    private $chitietdapanchon;
    private $nguoidung;
    private $lichsulamde;
    private $cauhoi;
    public function __construct()
    {
        $this->lop=$this->model('LopModel');
        $this->mon = $this->model('MonModel');
        $this->khode = $this-> model('KhodeModel');
        $this->dapan = $this->model('DapanModel');
        $this->ketqua = $this->model('KetqualamdeModel');
        $this->chitietdapanchon = $this->model('ChitietDapanchonModel');
        $this->nguoidung = $this->model('NguoidungModel');
        $this->dechitiet = $this->model('DeChiTietModel');
        $this->lichsulamde = $this->model('LichsulamdeModel');
        $this-> cauhoi = $this->model('CauhoiModel');
    }
    public function Show(){
        //view
        $this->view("master1",[
            'page'=>'Luyende',
            'lop'=>$this->lop,
            'mon'=>$this->mon,
            'khode'=>$this->khode,
            'nguoidung'=>$this->nguoidung
       ]);
    }
/*     public function ChitietdeTH($idde){
        $this->view("master2",[
            'page'=>'ChitietdeTH',
            'chitietdeTH'=>$this->chitietdeTH,
            'dapan'=>$this->dapan,
            'idde'=>$idde,
            'ketqua'=>$this->ketqua,
            'chitietketqua'=>$this->chitietketqua,
            'nguoidung'=>$this->nguoidung
       ]);
    } */
    public function Chitietde($idde){
        $this->view("master2",[
            'page'=>'Chitietde',
            'dechitiet'=>$this->dechitiet,
            'dapan'=>$this->dapan,
            'idde'=>$idde,
            'ketqua'=>$this->ketqua,
            'chitietdapanchon'=>$this->chitietdapanchon,
            'nguoidung'=>$this->nguoidung,
            'khode'=>$this->khode,
            'lichsulamde'=>$this->lichsulamde
       ]);
    }
}