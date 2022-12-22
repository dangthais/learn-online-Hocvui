<?php
class Lichsuhoc extends BaseController{
    private $lichsulamde;
    private $lichsuhoc;
    private $khoahoc;
    private $khode;
    private $dechitiet;
    private $dapan;
    private $ketqua;
    private $chitietdapanchon;
    private $nguoidung;
    private $cauhoi;
    public function __construct()
    {
        $this->khoahoc = $this->model('KhoahocModel');
        $this->lichsuhoc = $this->model('LichsuhocModel');
        $this->lichsulamde = $this->model('LichsulamdeModel');
        $this->khode = $this-> model('KhodeModel');
        $this->dapan = $this->model('DapanModel');
        $this->ketqua = $this->model('KetqualamdeModel');
        $this->chitietdapanchon = $this->model('ChitietDapanchonModel');
        $this->nguoidung = $this->model('NguoidungModel');
        $this->dechitiet = $this->model('DeChiTietModel');
        $this-> cauhoi = $this->model('CauhoiModel');
    }
    public function Show(){
        //view
        $this->view("master2",[
            'page'=>'Lichsuhoc',
            'lichsuhoc'=>$this->lichsuhoc,
            'lichsulamde'=>$this->lichsulamde,
            'khoahoc'=>$this->khoahoc,
            'khode'=>$this->khode,
            'ketqua'=>$this->ketqua,
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
    public function Lich_su_lam_de($idde){
        $this->view("master2",[
            'page'=>'Lichsulamde',
            'lichsulamde'=>$this->lichsulamde,
            'dechitiet'=>$this->dechitiet,
            'dapan'=>$this->dapan,
            'idde'=>$idde,
            'ketqua'=>$this->ketqua,
            'chitietdapanchon'=>$this->chitietdapanchon,
            'nguoidung'=>$this->nguoidung,
            'khode'=>$this->khode,
            'nguoidung'=>$this->nguoidung
       ]);
    }
    public function Chi_tiet_lich_su_lam_de($idde,$idketqua){
        $this->view("master2",[
            'page'=>'Chitietlichsulamde',
            'lichsulamde'=>$this->lichsulamde,
            'dechitiet'=>$this->dechitiet,
            'dapan'=>$this->dapan,
            'idde'=>$idde,
            'idketqua'=>$idketqua,
            'ketqua'=>$this->ketqua,
            'chitietdapanchon'=>$this->chitietdapanchon,
            'nguoidung'=>$this->nguoidung,
            'khode'=>$this->khode,
       ]);
    }

}