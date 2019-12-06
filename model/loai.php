<?php
require_once 'pdo.php';

/**
 * Thêm loại mới
 * @param String $name_loai_loai là tên loại
 * @throws PDOException lỗi thêm mới
 */
function loai_insert($name_loai, $img){
    $sql = "INSERT INTO danhmuc (name_loai, img) VALUES(?,?)";
    pdo_execute($sql, $name_loai, $img);
}
/**
 * Cập nhật tên loại
 * @param int $ma_loai là mã loại cần cập nhật
 * @param String $name_loai_loai là tên loại mới
 * @throws PDOException lỗi cập nhật
 */
function loai_update($id_loai, $name_loai){
    $sql = "UPDATE danhmuc SET name_loai=? WHERE id_loai=?";
    pdo_execute($sql, $name_loai, $id_loai);
}
/**
 * Xóa một hoặc nhiều loại
 * @param mix $ma_loai là mã loại hoặc mảng mã loại
 * @throws PDOException lỗi xóa
 */
function loai_delete($id_loai){
    $sql = "DELETE FROM danhmuc WHERE id_loai=?";
    if(is_array($id_loai)){
        foreach ($id_loai as $ma) {
            pdo_execute($sql, $ma);
        }
    }
    else{
        pdo_execute($sql, $id_loai);
    }
}
/**
 * Truy vấn tất cả các loại
 * @return array mảng loại truy vấn được
 * @throws PDOException lỗi truy vấn
 */
function loai_select_all(){
    $sql = "SELECT * FROM danhmuc";
    return pdo_query($sql);
}
/**
 * Truy vấn một loại theo mã
 * @param int $ma_loai là mã loại cần truy vấn
 * @return array mảng chứa thông tin của một loại
 * @throws PDOException lỗi truy vấn
 */
function loai_select_by_id($id_loai){
    $sql = "SELECT * FROM danhmuc WHERE id_loai=?";
    return pdo_query_one($sql, $id_loai);
}
/**
 * Kiểm tra sự tồn tại của một loại
 * @param int $ma_loai là mã loại cần kiểm tra
 * @return boolean có tồn tại hay không
 * @throws PDOException lỗi truy vấn
 */
function loai_exist($id_loai){
    $sql = "SELECT count(*) FROM danhmuc WHERE id_loai=?";
    return pdo_query_value($sql, $id_loai) > 0;
}