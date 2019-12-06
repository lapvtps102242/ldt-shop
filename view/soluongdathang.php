<?php
    session_start();
    include_once("config.php");
    //nhan tham so
    $hoten=$_POST["hoten"];
    $email=$_POST["email"];
    $diachi=$_POST["diachi"];
    $dienthoai=$_POST["sdt"];
    $ngaymua=date('Y-m-d H:i:s');
    //them thong tin nguoi mua hang
    $DBH =CreatPDO();
    $query= "insert into donhang(tenkhachhang,sdt,email,diachi) value('".$tenkhachhang."','".$sdt."','".$email."','".$diachi."')";
    $sth=$DBH->prepare($query);
    $sth->execute();
    //them chi tiet don hang
    $ma_dh=$DBH->lastInsertid();
?>