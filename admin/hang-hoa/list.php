<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <script src="<?=$CONTENT_URL?>/js/xshop-list.js"></script>
    </head>
    <body>
        <h3 class="alert alert-success">QUẢN LÝ HÀNG HÓA</h3>
        <?php
            if(strlen($MESSAGE)){
                echo "<h5 class='alert alert-warning'>$MESSAGE</h5>";
            }
        ?>
        <ul class="pager" style="float: left;";>
            <li><a href="?btn_list&page_no=0">|&lt;</a></li>
            <li><a href="?btn_list&page_no=<?=$_SESSION['page_no']-1?>">&lt;&lt;</a></li>
            <li><a href="?btn_list&page_no=<?=$_SESSION['page_no']+1?>">&gt;&gt;</a></li>
            <li><a href="?btn_list&page_no=<?=$_SESSION['page_count']-1?>">&gt;|</a></li>
        </ul>
        <form action="index.php" method="post">
            <table class="table">
                <thead class="alert-success">
                    <tr>
                        <th></th>
                        <th>MÃ HH</th>
                        <th>TÊN HH</th>
                        <th>GIÁ</th>
                        <th>NGÀY NHẬP</th>
                        <th>LƯỢT XEM</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                <?php
                    foreach ($items as $item){
                        extract($item);
                ?>
                    <tr>
                        <th><input type="checkbox" name="id_sp[]" value="<?=$id_sp?>"></th>
                        <td><?=$id_sp?></td>
                        <td><?=$ten?></td>
                        <td><?=$gia?> đồng</td>
                        <td><?=$ngaynhap?></td>
                        <td><?=$luotxem?></td>
                        <td>
                            <a href="index.php?btn_edit&id_sp=<?=$id_sp?>" class="btn btn-default btn-sm">Sửa</a>
                            <a href="index.php?btn_delete&id_sp=<?=$id_sp?>" class="btn btn-default btn-sm">Xóa</a>
                        </td>
                    </tr>
                <?php
                    }
                ?>
                </tbody>
                <tfoot>
                    <tr>
                        <td colspan="7">
                            <button id="check-all" type="button" class="btn btn-default">Chọn tất cả</button>
                            <button id="clear-all" type="button" class="btn btn-default">Bỏ chọn tất cả</button>
                            <button id="btn-delete" name="btn_delete" class="btn btn-default">Xóa các mục chọn</button>
                            <a href="index.php" class="btn btn-default">Nhập thêm</a>
                        </td>
                    </tr>
                </tfoot>
            </table>
        </form>
    </body>
</html>
