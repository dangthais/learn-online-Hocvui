<?php
session_start();
if(isset($_SESSION['userNameAdmin'])){
    require_once 'app/Bridge.php';
    $myApp = new App();
}else{
    require_once 'user/login.php';
}
?>
