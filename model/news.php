<?php
// function loadcatalog(){
//     $sql="select * from danhmuc order by id desc";
//     $kq=pdo_query($sql);
//     return $kq; 
// }
function showsp(){
    $sql="select * from sanpham order by id desc";
    $kq=pdo_query($sql);
    return $kq;
}
// function loadblog(){
//     $sql="select * from blog order by id desc";
//     $kq=pdo_query($sql);
//     return $kq;
// }
function showcat($idcat){
    $sql="select * from danhmuc where 1 by id desc";
    if($idcat>0){
        $sql.=" AND id='".$idcat."'";
    }
    $sql.=" order by id desc ";
    $kq=pdo_query($sql);
    return $kq;
}

?>