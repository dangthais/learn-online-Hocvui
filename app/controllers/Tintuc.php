<?php
class Tintuc extends BaseController{
    private $tintuc;
    private $nguoidung;
    public function __construct()
    {
        $this->nguoidung = $this->model('NguoidungModel');
        $this->tintuc = $this->model('TintucModel');
/*      $this->tintuc = $this->model('TintucModel');
         */
    }
    public function Show(){
        //view
        $this->view("master2",[
             'page'=>'Tintuc',
            'tintuc'=>$this->tintuc,
            'nguoidung'=>$this->nguoidung
        ]);
        
    }
    public function ChitietTin($id){
        //view
        $this->view("master2",[
            'page'=>'Chi_tiet_tin',
            'tintuc'=>$this->tintuc,
            'nguoidung'=>$this->nguoidung,
            'idtin'=>$id
        ]);
        
    }
}