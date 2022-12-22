
<?php
class Khoahoc extends BaseController{
    private $khoahoc;
    private $danhgia;
    public function __construct()
    {
        $this->khoahoc = $this->model('KhoahocModel');
        $this->danhgia = $this->model('DanhgiaModel');
    }
    public function Show(){
    $this->view('master1',[
        'page' =>'Khoahoc',
        'khoa'=>$this->khoahoc
    ]);
    }
    public function List(){
        $this->view('master1',[
            'page' =>'Showkh',
            'khoa'=>$this->khoahoc,
            
        ]);
    }
    public function edit($id){
        $this->view('master1',[
            'page' =>'editkh',
            'khoa'=>$this->khoahoc,
            'id'=>$id
        ]);
        
    }
    public function delete($id){
        $this->khoahoc->deletekh($id);
        header('location:/DUAN1_NHOM1_QTT/admin/Khoahoc/List');
      
    }
    public function Danh_gia($id){
        $this->view('master1',[
            'page' =>'ChitietdanhgiaKH',
            'danhgia'=>$this->danhgia,
            'id'=>$id
        ]);
    }
   
    
    
}
