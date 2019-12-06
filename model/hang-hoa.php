<?php
require_once 'pdo.php';

function hang_hoa_insert($ten , $gia, $hinh,$ngay_nhap, $luotxem, $id_loai,$mo_ta){
    $sql = "INSERT INTO sanpham(ten,gia,hinh,ngay_nhap,luotxem,id_loai,mo_ta) VALUES (?,?,?,?,?,?,?)";
    pdo_execute($sql,$ten,$gia, $hinh,$ngay_nhap, $luotxem, $id_loai,$mo_ta);
}

function hang_hoa_update($ten , $gia, $hinh,$ngay_nhap, $luotxem, $id_loai,$mo_ta){
    $sql = "UPDATE sanpham SET ten=?,gia=?,hinh=?,ngaynhap=?,luotxem=?,id_loai=?,mo_ta=? WHERE id_sp=?";
    pdo_execute($sql, $ten , $gia, $hinh,$ngay_nhap, $luotxem, $id_loai,$mo_ta);
}

function hang_hoa_delete($id_sp){
    $sql = "DELETE FROM sanpham WHERE  id_sp=?";
    if(is_array($id_sp)){
        foreach ($id_sp as $ma) {
            pdo_execute($sql, $ma);
        }
    }
    else{
        pdo_execute($sql, $id_sp);
    }
}

function hang_hoa_select_all(){
    $sql = "SELECT * FROM sanpham";
    return pdo_query($sql);
}

function hang_hoa_select_by_id($id_sp){
    $sql = "SELECT * FROM sanpham WHERE id_sp=?";
    return pdo_query_one($sql, $id_sp);
}

function hang_hoa_exist($id_sp){
    $sql = "SELECT count(*) FROM sanpham WHERE id_sp=?";
    return pdo_query_value($sql, $id_sp) > 0;
}

function hang_hoa_tang_luotxem($id_sp){
    $sql = "UPDATE sanpham SET luotxem = luotxem + 1 WHERE id_sp=?";
    pdo_execute($sql, $id_sp);
}

function hang_hoa_select_top10(){
    $sql = "SELECT * FROM sanpham WHERE luotxem > 0 ORDER BY luotxem DESC LIMIT 0, 10";
    return pdo_query($sql);
}

function hang_hoa_select_dac_biet(){
    $sql = "SELECT * FROM sanpham WHERE dac_biet=1";
    return pdo_query($sql);
}

function hang_hoa_select_by_loai($id_loai){
    $sql = "SELECT * FROM sanpham WHERE id_loai=?";
    return pdo_query($sql, $id_loai);
}

function hang_hoa_select_keyword($keyword){
    $sql = "SELECT * FROM sanpham hh "
            . " JOIN loai lo ON lo.id_loai=hh.id_loai "
            . " WHERE ten_hh LIKE ? OR ten_loai LIKE ?";
    return pdo_query($sql, '%'.$keyword.'%', '%'.$keyword.'%');
}

function hang_hoa_select_page(){
    if(!isset($_SESSION['page_no'])){
        $_SESSION['page_no'] = 0;
    }
    if(!isset($_SESSION['page_count'])){
        $row_count = pdo_query_value("SELECT count(*) FROM sanpham");
        $_SESSION['page_count'] = ceil($row_count/10.0);
    }
    if(exist_param("page_no")){
        $_SESSION['page_no'] = $_REQUEST['page_no'];
    }
    if($_SESSION['page_no'] < 0){
        $_SESSION['page_no'] = $_SESSION['page_count'] - 1;
    }
    if($_SESSION['page_no'] >= $_SESSION['page_count']){
        $_SESSION['page_no'] = 0;
    }
    $sql = "SELECT * FROM sanpham ORDER BY id_sp LIMIT ".$_SESSION['page_no'].", 10";
    return pdo_query($sql);
}