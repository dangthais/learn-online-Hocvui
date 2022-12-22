<?php
class Kho_de extends BaseController
{
    private $khode;
    private $dechitiet;
    private $khoahoc;
    private $cauhoi;
    private $lop;
    private $mon;
    public function __construct()
    {
        $this->khode = $this->model('KhodeModel');
        $this->khoahoc = $this->model('KhoahocModel');
        $this->cauhoi = $this->model('CauhoiModel');
        $this->dechitiet = $this->model('DeChiTietModel');
        $this->khodetonghop = $this->model('DeTongHopModel');
        $this->lop = $this->model('LopModel');
        $this->mon = $this->model('MonModel');
    }
    public function Show()
    {
        //view
        $this->view('master1', [
            'page' => 'Khode',
            'khode'=>$this->khode,
            'khoahoc' =>$this->khoahoc,
            'cauhoi'=>$this->cauhoi,
            'dechitiet'=>$this->dechitiet
        ]);
    }
    public function List()
    {
        //view
        $this->view('master1', [
            'page' => 'DsKhode',
            'khode'=>$this->khode,
            'khoahoc'=>$this->khoahoc
        ]);
    }
    public function DeleteDe($id){
        //model
        $this->khode->DeleteDe($id);
            echo("<script>location.href = '/DUAN1_NHOM1_QTT/admin/Kho_de/List';</script>");
        
    }
    public function DeleteDeTH($id){
        //model
        $this->khode->DeleteDe($id);
            echo("<script>location.href = '/DUAN1_NHOM1_QTT/admin/Kho_de/DanhsachDeTH';</script>");

        
    }
    public function Edit($id){
        //view 
        $this->view('master1', [
            'page' => 'EditKhode',
            'khode'=>$this->khode,
            'id'=>$id
        ]);
        //model
    }
    public function DeTongHop(){
        $this->view('master1', [
            'page' => 'Khodetonghop',
            'khode'=>$this->khode,
            'dechitiet'=>$this->dechitiet,
            'cauhoi'=>$this->cauhoi,
            'lop'=>$this->lop,
            'mon'=>$this->mon
        ]);
    }
    public function DanhsachDeTH(){
        $this->view('master1', [
            'page' => 'DsKhodetonghop',
            'khode'=>$this->khode,
            'lop'=>$this->lop,
            'mon'=>$this->mon
        ]);
    }
}
