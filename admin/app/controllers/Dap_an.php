<?php
class Dap_an extends BaseController{
    private $dapan;
    private $cauhoi;
    public function __construct()
    {
        $this->dapan = $this->model('DapanModel');
        $this->cauhoi = $this->model('CauhoiModel');
    }
    public function Show(){
    $this->view('master1',[
        'page' =>'Dapan',
        'dapan'=>$this->dapan,
        'cauhoi'=>$this->cauhoi
    ]);
    }
    public function Add($idcauhoi){
        $this->view('master1',[
            'page' =>'Dapan',
            'dapan'=>$this->dapan,
            'cauhoi'=>$this->cauhoi,
            'idcauhoi'=>$idcauhoi 
        ]);
    }
    public function List($idcauhoi){
        $this->view('master1',[
            'page' =>'DsDapan',
            'dapan'=>$this->dapan,
            'idcauhoi'=>$idcauhoi 
        ]);
    }
    public function edit($idcauhoi,$iddapan){
        $this->view('master1',[
            'page' =>'EditDapan',
            'dapan'=>$this->dapan,
            'idcauhoi'=>$idcauhoi,
            'iddapan'=>$iddapan
        ]);
        
    }
    public function delete($idcauhoi,$id){
        $this->dapan->deleteDapan($id);
        echo("<script>location.href = '/DUAN1_NHOM1_QTT/admin/Dap_an/List/".$idcauhoi."';</script>");
      
    }

    
}