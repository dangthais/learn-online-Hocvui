<?php
class Bo_cauhoi extends BaseController{
    private $cauhoi;
    private $khoahoc;
    public function __construct()
    {
        $this->cauhoi = $this->model('CauhoiModel');
        $this->khoahoc = $this->model('KhoahocModel');

    }
    public function Show(){
    $this->view('master1',[
        'page' =>'Bo_cauhoi',
        'hoi'=>$this->cauhoi
    ]);
    }
    public function List(){
        $this->view('master1',[
            'page' =>'DsCauhoi',
            'hoi'=>$this->cauhoi,
            'khoahoc'=>$this->khoahoc   
        ]);
    }
    public function edit($id){
        $this->view('master1',[
            'page' =>'EditCauhoi',
            'hoi'=>$this->cauhoi,
            'id'=>$id
        ]);
        
    }
    public function delete($id){
        $this->cauhoi->deleteCauhoi($id);
        header('location:/DUAN1_NHOM1_QTT/admin/Bo_cauhoi/List');
      
    }

    
}