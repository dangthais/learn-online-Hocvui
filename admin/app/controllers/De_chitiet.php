<?php
class De_chitiet extends BaseController
{
    private $khode;
    private $khoahoc;
    private $dechitiet;
    public function __construct()
    {
        $this->khode = $this->model('KhodeModel');
        $this->khoahoc = $this->model('KhoahocModel');
        $this->dechitiet = $this->model('DeChiTietModel');
    }
/*     public function Show()
    {
        //view
        $this->view('master1', [
            'page' => 'De_chitiet',
            'dechitiet' =>$this->dechitiet
        ]);
    } */
    public function List($id)
    {
        //view
        $this->view('master1', [
            'page' => 'DsDeChiTiet',
            'dechitiet'=>$this->dechitiet,
            'khode'=>$this->khode,
            'idde'=>$id
        ]);
    }
/*     public function Delete($id){
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
    } */
}
