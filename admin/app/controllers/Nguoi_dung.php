<?php
class Nguoi_dung extends BaseController{
    private $nguoidung;
    public function __construct()
    {
        $this->nguoidung = $this->model('NguoidungModel');;
    }
    public function List(){
        //model
        //view
        $this->view("master1",[
            'page'=>'Nguoidung',
            'nguoidung'=>$this->nguoidung
        ]);

    }
}