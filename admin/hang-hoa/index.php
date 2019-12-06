<?php
require "../../global.php";
require "../../model/hang-hoa.php";
//--------------------------------//
require "../../model/loai.php";

extract($_REQUEST);

if(exist_param("btn_insert")){
    $up_hinh = save_file("hinh", "$IMAGE_DIR/sanpham/");
    $hinh = strlen($up_hinh) > 0 ? $up_hinh :'product.png';
    try {
        hang_hoa_insert($ten, $gia, $hinh, $ngaynhap, $luotxem, $id_loai, $mota);
        unset($ten, $gia, $hinh, $ngaynhap, $luotxem, $id_loai, $mota);
        $MESSAGE = "Thêm mới thành công!";
    } 
    catch (Exception $exc) {
        $MESSAGE = "Thêm mới thất bại!";
    }
    $VIEW_NAME = "hang-hoa/new.php";
}
else if(exist_param("btn_update")){
    $up_hinh = save_file("up_hinh", "$IMAGE_DIR/sanpham/");
    $hinh = strlen($up_hinh) > 0 ? $up_hinh : $hinh;
    try {
        hang_hoa_update($id_sp ,$ten, $gia, $hinh, $ngaynhap, $luotxem, $id_loai, $mota);
        $MESSAGE = "Cập nhật thành công!";
    } 
    catch (Exception $exc) {
        echo $exc->getMessage();
        $MESSAGE = "Cập nhật thất bại!";
    }
    $VIEW_NAME = "hang-hoa/edit.php";
}
else if(exist_param("btn_delete")){
    try {
        hang_hoa_delete($id_sp);
        $items = hang_hoa_select_page();
        $MESSAGE = "Xóa thành công!";
    } 
    catch (Exception $exc) {
        $MESSAGE = "Xóa thất bại!";
    }
    $VIEW_NAME = "hang-hoa/list.php";
}
else if(exist_param("btn_edit")){
    $item = hang_hoa_select_by_id($id_sp);
    extract($item);
    $VIEW_NAME = "hang-hoa/edit.php";
}
else if(exist_param("btn_list")){
    $items = hang_hoa_select_page();
    $VIEW_NAME = "hang-hoa/list.php";
}
else{
    $VIEW_NAME = "hang-hoa/new.php";
}

if($VIEW_NAME == "hang-hoa/new.php" || $VIEW_NAME == "hang-hoa/edit.php"){
    $loai_select_list = loai_select_all();
}

require "../admin.php";
?>

<