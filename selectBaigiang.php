<?php
if (isset($_POST['tenkhoahoc'])) {
    $decision=$_POST['tenkhoahoc'];
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "duan1";
$conn = new PDO("mysql:host=$servername; charset=utf8; dbname=$dbname",$username,$password);
            $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            $sql = "SELECT * FROM bai_giang bg JOIN khoa_hoc kh ON bg.id_khoahoc = kh.id_khoahoc WHERE bg.id_khoahoc = $decision";
            $stmt=$conn->prepare($sql);
            $stmt->execute();
            $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    foreach($rows as $value){
        echo '<option value="'.$value['id_baigiang'].'">'.$value['ten_baigiang'].'</option>';
    }
echo $decision;
}