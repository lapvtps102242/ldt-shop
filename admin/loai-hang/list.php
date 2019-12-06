<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <script src="<?=$CONTENT_URL?>/js/xshop-list.js"></script>
    </head>
    <body>
        <h3 class="alert alert-success">QUẢN LÝ LOẠI HÀNG</h3>
        <?php
            if(strlen($MESSAGE)){
                echo "<h5 class='alert alert-warning'>$MESSAGE</h5>";
            }
        ?>
        <form action="index.php" method="post">
            <table class="table">
                <thead class="alert-success">
                    <tr>
                        <th></th>
                        <th>MÃ LOẠI</th>
                        <th>TÊN LOẠI</th>
                        <th>Hình loại</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                <?php
                    foreach ($items as $item){
                        extract($item);
                ?>
                    <tr>
                        <th><input type="checkbox" name="id_loai[]" value="<?=$id_loai?>"></th>
                        <td><?=$id_loai?></td>
                        <td><?=$name_loai?></td>
                        <td><?=$img?></td>
                        <td>
                            <a href="index.php?btn_edit&id_loai=<?=$id_loai?>" class="btn btn-default btn-sm">Sửa</a>
                            <a href="index.php?btn_delete&id_loai=<?=$id_loai?>" class="btn btn-default btn-sm">Xóa</a>
                        </td>
                    </tr>
                <?php
                    }
                ?>
                </tbody>
                <tfoot>
                    <tr>
                        <td colspan="4">
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
