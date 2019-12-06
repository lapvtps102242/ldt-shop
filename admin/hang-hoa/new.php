<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title></title>
</head>

<body>
    <h3 class="alert alert-success">QUẢN LÝ HÀNG HÓA</h3>
    <?php
    if (strlen($MESSAGE)) {
        echo "<h5 class='alert alert-warning'>$MESSAGE</h5>";
    }
    ?>
    <form action="index.php" method="post" enctype="multipart/form-data">
        <div class="row">
            <div class="form-group col-sm-4">
                <label>MÃ HÀNG HÓA</label>
                <input name="id_sp" class="form-control" readonly value="auto number">
            </div>
            <div class="form-group col-sm-4">
                <label>TÊN HÀNG HÓA</label>
                <input name="ten" class="form-control">
            </div>
        </div>
        <div class="row">
            <div class="form-group col-sm-4">
                <label>GIÁ</label>
                <input name="gia" class="form-control">
            </div>
            <div class="form-group col-sm-4">
                <label>HÌNH ẢNH</label>
                <input name="hinh" type="file" value="<?=$hinh?>" class="form-control">
            </div>
            <div class="form-group col-sm-4">
                <label>LOẠI HÀNG</label>
                <select name="id_loai" class="form-control">
                    <?php
                    foreach ($loai_select_list as $loai) {
                        echo '<option value="' . $loai['id_loai'] . '">' . $loai['name_loai'] . '</option>';
                    }
                    ?>
                </select>
            </div>
        </div>
        <div class="row">
            <!-- <div class="form-group col-sm-4">
                    <label>HÀNG ĐẶC BIỆT?</label>
                    <div class="form-control">
                        <label class="radio-inline"><input name="dac_biet" value="0" type="radio">Đặc biệt</label>hgggg
                        <label class="radio-inline"><input name="dac_biet" value="1" type="radio" checked>Bình thường</label>
                    </div>
                </div> -->
            <div class="form-group col-sm-4">
                <label>NGÀY NHẬP</label>
                <input type="date" name="ngaynhap" value="<?= $ngaynhap ?>" class="form-control datepicker">
            </div>
            <div class="form-group col-sm-4">
                <label>SỐ LƯỢT XEM</label>
                <input name="luotxem" value="0" class="form-control">
            </div>
        </div>
        <div class="row">
            <div class="form-group col-sm-12">
                <label>MÔ TẢ</label>
                <textarea name="mota" class="form-control" rows="4"></textarea>
            </div>
            <div class="form-group col-sm-12">
                <button name="btn_insert" class="btn btn-default">Thêm mới</button>
                <button type="reset" class="btn btn-default">Nhập lại</button>
                <a href="index.php?btn_list" class="btn btn-default">Danh sách</a>
            </div>
        </div>
    </form>
</body>

</html>