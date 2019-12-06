<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<script>
    window.onload = function() {
        setTimeout(function() {
            document.getElementById('submitBtn').disabled = false;
        }, 10000);
    }
</script>

<body>
    <h3 class="alert alert-success">QUẢN LÝ LOẠI HÀNG</h3>
    <?php
    if (strlen($MESSAGE)) {
        echo "<h5 class='alert alert-warning'>$MESSAGE</h5>";
    }
    ?>
    <form action="index.php" method="post">
        <div class="form-group">
            <label>Mã loại</label>
            <input name="id_loai" value="<?= $id_loai ?>" class="form-control" readonly>
        </div>
        <div class="form-group">
            <label>Tên loại</label>
            <input type="text" name="name_loai" value="<?= $name_loai ?>" class="form-control" >
        </div>
        <div class="form-group">
            <label>Hình loại</label>
            <input type="file" name="img" value="<?= $img ?>" class="form-control">
        </div>
        <div>
            <button name="btn_update" class="btn btn-default">Cập nhật</button>
            <button type="reset" class="btn btn-default">Nhập lại</button>
            <a href="index.php" class="btn btn-default">Thêm mới</a>
            <a href="index.php?btn_list" class="btn btn-default">Danh sách</a>
        </div>
    </form>
</body>

</html>