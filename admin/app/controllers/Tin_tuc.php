<?php
class Tin_tuc extends BaseController
{
    private $tintuc;
    public function __construct()
    {
        $this->tintuc = $this->model('TintucModel');
    }
    public function Show()
    {
        //view
        $this->view('master1', [
            'page' => 'Tintuc',
            'tintuc' =>$this->tintuc
        ]);
    }
    public function List()
    {
        //view
        $this->view('master1', [
            'page' => 'DsTin',
            'tintuc'=>$this->tintuc
        ]);
    }
    public function Delete($id){
        //model
        $this->tintuc->DeleteLop($id);
        header('location:/DUAN1_NHOM1_QTT/admin/Tin_tuc/List');
        
    }
    public function Edit($id){
        //view 
        $this->view('master1', [
            'page' => 'EditTin',
            'tintuc'=>$this->tintuc,
            'id'=>$id
        ]);
        //model
    }
}
