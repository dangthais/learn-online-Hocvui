<?php
    class App{
        protected $controller = 'Home';
        protected $action = 'Show';
        protected $param = [];
        public function __construct()
        {
            $urlArr = $this->urlProcess();
            //Xử lí controller
            if(isset($urlArr[0])){
                if(file_exists("./app/controllers/$urlArr[0].php")){
                    $this->controller = $urlArr[0];
                    unset($urlArr[0]);
                }
            }
            require_once "./app/controllers/".$this->controller.".php";
            //Xử lí action
            if(isset($urlArr[1])){
                if(method_exists($this->controller, $urlArr[1])){
                    $this->action = $urlArr[1];
                }
                unset($urlArr[1]);
            }
            //Xử lí param
            $this->param = $urlArr?array_values($urlArr):[];
            call_user_func_array([ new $this->controller,$this->action],$this->param);
        }
        public function urlProcess(){
            if(isset($_GET['url'])){
                return explode("/",filter_var(trim($_GET['url'],"/")));
            }
        }
    }
?>