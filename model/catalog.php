<?php
    function get_name_cat($id_loai){
        $sql="select ten from danhmuc where id=".$id_loai;
        $kq=pdo_query_one($sql);
        return $kq;
    }
    function loadcatalog(){
        $sql="select * from danhmuc order by id_loai desc limit 4";
        $kq=pdo_query($sql);
        return $kq;
    }
    function loadProductHome () {
        $sql = "select * from sanpham ORDER by id_sp desc limit 9";
        $kq = pdo_query($sql);
        return $kq;
    }
    function loadproducts ($id_loai=0) {
        $sql = " SELECT * FROM sanpham  WHERE 1 ";
        if($id_loai!=0) {
            $sql.= " AND id_loai='".$id_loai."'";
        }
        $sql.= " ORDER BY id_loai desc";
        $kq = pdo_query($sql);
        return $kq;
    }

    function loadctsp($id_sp) {
        $sql = "SELECT * FROM sanpham WHERE 1 ";
        if($id_sp>0) {
            $sql.= " AND id_sp='".$id_sp."'";    
        }
        $kq = pdo_query($sql);
        return $kq;
    }
?>