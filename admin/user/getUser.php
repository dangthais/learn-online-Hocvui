<?php
function connectDB()
{
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "duan1";
    try {
        $conn = new PDO("mysql:host=$servername; charset=utf8; dbname=$dbname", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $conn;
    } catch (PDOException $e) {
        return "Connected failed" . $e->getMessage();
    }
}
function getUser($ten)
{
    $sql = "SELECT * from nguoi_dung WHERE ten = '$ten'";
    $conn = connectDB();;
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
    return $row;
}
