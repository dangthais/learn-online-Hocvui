<?php
class DB{
    protected $conn;
    protected $servername = "localhost";
    protected $username = "root";
    protected $password = "";
    protected $dbname = "duan1";
    public function __construct()
    {
        try{
            $this->conn = new PDO("mysql:host=$this->servername; charset=utf8; dbname=$this->dbname",$this->username,$this->password);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            return $this->conn;
        } catch(PDOException $e){
            return "Connected failed".$e->getMessage();
        }
    }
    //Hàm thực hiện, thêm mới, và xóa
    function pdo_execute($sql){
        try{
            $conn = $this->conn;;
            $stmt=$conn->prepare($sql);
            $stmt->execute();
        } catch(PDOException $e) {
            throw $e;
        } finally{
            unset($conn);
        }
    }
    //// Hàm lấy nhiều dữ liệu
    function pdo_query($sql){
        try{
            $conn = $this->conn;;
            $stmt=$conn->prepare($sql);
            $stmt->execute();
            $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $rows;
        } catch(PDOException $e){
            throw $e;
        } finally {
            unset($conn);
        }
    }
    //Hàm lấy 1 dữ liệu
    function pdo_query_one($sql){
        try{
            $conn = $this->conn;
            $stmt=$conn->prepare($sql);
            $stmt->execute();
            $row = $stmt->fetch(PDO::FETCH_ASSOC);
            return $row;
        } catch(PDOException $e){
            throw $e;
        } finally{
            unset($conn);
        }
    }
}