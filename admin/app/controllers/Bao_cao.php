<?php
class Bao_cao extends BaseController
{
    private $baocao;
    public function __construct()
    {
        $this->baocao = $this->model('BaocaoModel');
    
    }
    public function Show()
    {
        //view
        $this->view('master1', [
            'page' => 'Baocao',
            'baocao' =>$this->baocao
        ]);
    }
    
}
