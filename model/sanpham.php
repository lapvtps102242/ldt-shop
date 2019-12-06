<?php
require_once 'pdo.php';

function sanpham_insert($id_sp, $ten, $hinh, $ngaynhap, $luotxem){
    $sql = "INSERT INTO sanpham(id_sp, ten, hinh, ngaynhap, luotxem ) VALUES (?,?,?,?,?)";
    pdo_execute($sql, $id_sp, $ten, $hinh, $ngaynhap, $luotxem);
}

function sanpham_update($id_sp, $ten_hh, $don_gia, $giam_gia, $hinh, $ma_loai, $dac_biet, $so_luot_xem, $ngay_nhap, $mo_ta){
    $sql = "UPDATE sanpham SET ten_hh=?,don_gia=?,giam_gia=?,hinh=?,ma_loai=?,dac_biet=?,so_luot_xem=?,ngay_nhap=?,mo_ta=? WHERE id=?";
    pdo_execute($sql, $ten_hh, $don_gia, $giam_gia, $hinh, $ma_loai, $dac_biet==1, $so_luot_xem, $ngay_nhap, $mo_ta, $id_sp);
}

function sanpham_delete($id_sp){
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

function sanpham_select_all(){
    $sql = "SELECT * FROM sanpham";
    return pdo_query($sql);
}

function sanpham_select_by_id($id_sp){
    $sql = "SELECT * FROM sanpham WHERE id_sp=?";
    return pdo_query_one($sql, $id_sp);
}

function sanpham_exist($id_sp){
    $sql = "SELECT count(*) FROM sanpham WHERE id_sp=?";
    return pdo_query_value($sql, $id_sp) > 0;
}

function sanpham_tang_so_luot_xem($id_sp){
    $sql = "UPDATE sanpham SET so_luot_xem = so_luot_xem + 1 WHERE id=?";
    pdo_execute($sql, $id_sp);
}

function sanpham_select_top10(){
    $sql = "SELECT * FROM sanpham WHERE luotxem > 0 ORDER BY so_luot_xem DESC LIMIT 0, 10";
    return pdo_query($sql);
}

function sanpham_select_dac_biet(){
    $sql = "SELECT * FROM sanpham WHERE dacbiet=1";
    return pdo_query($sql);
}

function sanpham_select_by_loai($id_sp){
    $sql = "SELECT * FROM sanpham WHERE id_sp=?";
    return pdo_query($sql, $id_sp);
}

function sanpham_select_keyword($keyword){
    $sql = "SELECT * FROM sanpham hh "
            . " JOIN loai lo ON lo.ma_loai=hh.ma_loai "
            . " WHERE ten_hh LIKE ? OR ten_loai LIKE ?";
    return pdo_query($sql, '%'.$keyword.'%', '%'.$keyword.'%');
}

function sanpham_select_page(){
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
    $sql = "SELECT * FROM sanpham ORDER BY id LIMIT ".$_SESSION['page_no'].", 10";
    return pdo_query($sql);
}