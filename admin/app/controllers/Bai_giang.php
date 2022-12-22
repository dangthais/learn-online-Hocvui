<?php
class Bai_giang extends BaseController
{
    private $baigiang;
    private $khoahoc;
    public function __construct()
    {
        $this->baigiang = $this->model('BaigiangModel');
        $this->khoahoc = $this->model('KhoahocModel');
    }
    public function Show()
    {
        //view
        $this->view('master1', [
            'page' => 'Baigiang',
            'baigiang' =>$this->baigiang
        ]);
    }
    public function List()
    {
        //view
        $this->view('master1', [
            'page' => 'DsBaigiang',
            'baigiang'=>$this->baigiang,
            'khoahoc'=>$this->khoahoc
        ]);
    }
    public function Delete($id){
        //model
        $this->baigiang->DeleteBaigiang($id);
        echo("<script>location.href = '/DUAN1_NHOM1_QTT/admin/Bai_giang/List';</script>");

        
    }
    public function Edit($id){
        //view 
        $this->view('master1', [
            'page' => 'EditBaigiang',
            'baigiang'=>$this->baigiang,
            'id'=>$id
        ]);
        //model
    }
}
