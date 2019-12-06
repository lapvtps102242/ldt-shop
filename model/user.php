<?php
function getuser($user , $pass){
    $sql= "select * from user where user =? and pass=?";
    $kq=pdo_query_one($sql,$user,$pass);
    return $kq;
}
?>