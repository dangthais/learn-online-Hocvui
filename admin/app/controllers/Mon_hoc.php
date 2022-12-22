<?php
class Mon_hoc extends BaseController
{
    private $monhoc;
    public function __construct()
    {
        $this->monhoc = $this->model('MonModel');
    }
    public function Show()
    {
        //view
        $this->view('master1', [
            'page' => 'Monhoc',
            'mon' =>$this->monhoc
        ]);
    }
    public function List()
    {
        //view
        $this->view('master1', [
            'page' => 'DsMon',
            'mon'=>$this->monhoc
        ]);
    }
    public function Delete($id){
        //model
        $this->monhoc->DeleteMon($id);
        header('location:/DUAN1_NHOM1_QTT/admin/Mon_hoc/List');
        
    }
    public function Edit($id){
        //view 
        $this->view('master1', [
            'page' => 'EditMon',
            'mon'=>$this->monhoc,
            'id'=>$id
        ]);
        //model
    }
}
