<?php
class Lop_hoc extends BaseController
{
    private $lophoc;
    public function __construct()
    {
        $this->lophoc = $this->model('LopModel');
    }
    public function Show()
    {
        //view
        $this->view('master1', [
            'page' => 'Lophoc',
            'lop' =>$this->lophoc
        ]);
    }
    public function List()
    {
        //view
        $this->view('master1', [
            'page' => 'DsLop',
            'lop'=>$this->lophoc
        ]);
    }
    public function Delete($id){
        //model
        $this->lophoc->DeleteLop($id);
        header('location:/DUAN1_NHOM1_QTT/admin/Lop_hoc/List');
        
    }
    public function Edit($id){
        //view 
        $this->view('master1', [
            'page' => 'EditLop',
            'lop'=>$this->lophoc,
            'id'=>$id
        ]);
        //model
    }
}
