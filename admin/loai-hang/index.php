<?php
require "../../global.php";
require "../../model/loai.php";
//--------------------------------//

extract($_REQUEST);
if(exist_param("btn_insert")){
    try {
        loai_insert($name_loai , $img);
        unset($name_loai, $id_loai ,$img);
        $MESSAGE = "Thêm mới thành công!";
    } 
    catch (Exception $exc) {
        $MESSAGE = "Thêm mới thất bại!";
    }
    $VIEW_NAME = "loai-hang/new.php";
}
else if(exist_param("btn_update")){
    try {
        loai_update($id_loai, $name_loai,$img);
        $MESSAGE = "Cập nhật thành công!";
    } 
    catch (Exception $exc) {
        $MESSAGE = "Cập nhật thất bại!";
    }
    $VIEW_NAME = "loai-hang/edit.php";
}
else if(exist_param("btn_delete")){
    try {
        loai_delete($id_loai);
        $items = loai_select_all();
        $MESSAGE = "Xóa thành công!";
    } 
    catch (Exception $exc) {
        $MESSAGE = "Xóa thất bại!";
    }
    $VIEW_NAME = "loai-hang/list.php";
}
else if(exist_param("btn_edit")){
    $item = loai_select_by_id($id_loai);
    extract($item);
    $VIEW_NAME = "loai-hang/edit.php";
}
else if(exist_param("btn_list")){
    $items = loai_select_all();
    $VIEW_NAME = "loai-hang/list.php";
}
else{
    $VIEW_NAME = "loai-hang/new.php";
}

require "../admin.php"; 
?>
