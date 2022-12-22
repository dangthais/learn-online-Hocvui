<?php
class Bai_giang_chi_tiet extends BaseController
{
    private $baigiangct;
    private $baigiang;
    private $khoahoc;
    public function __construct()
    {
        $this->baigiangct = $this->model('BaigiangctModel');
        $this->baigiang = $this->model('BaigiangModel');
        $this->khoahoc = $this->model('KhoahocModel');
    }
    public function Show()
    {
        //view
        $this->view('master1', [
            'page' => 'Baigiangchitiet',
            'baigiangct' =>$this->baigiangct,
            'baigiang'=>$this->baigiang,
            'khoahoc'=>$this->khoahoc
        ]);
    }
    public function List()
    {
        //view
        $this->view('master1', [
            'page' => 'DsBaigiangchitiet',
            'baigiangct'=>$this->baigiangct,
            'baigiang'=>$this->baigiang
        ]);
    }
    public function Delete($id){
        //model
        $this->baigiangct->DeleteBaigiangct($id);
        echo("<script>location.href = '/DUAN1_NHOM1_QTT/admin/Bai_giang_chi_tiet/List';</script>");        
    }
    public function Edit($id){
        //view 
        $this->view('master1', [
            'page' => 'EditBaigiangchitiet',
            'baigiangct'=>$this->baigiangct,
            'baigiang'=>$this->baigiang,
            'idct'=>$id
        ]);
        //model
    }
}
