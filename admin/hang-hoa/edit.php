    <body>
        <h3 class="alert alert-success">QUẢN LÝ HÀNG HÓA</h3>
        <?php
            if(strlen($MESSAGE)){
                echo "<h5 class='alert alert-warning'>$MESSAGE</h5>";
            }
        ?>
        <form action="index.php" method="post" enctype="multipart/form-data">
            <div class="row">
                <div class="form-group col-sm-4">
                    <label>MÃ HÀNG HÓA</label>
                    <input name="id_sp" class="form-control" readonly value="<?=$id_sp?>">
                </div>
                <div class="form-group col-sm-4">
                    <label>TÊN HÀNG HÓA </label>
                    <input name="ten" class="form-control" value="<?=$ten?>">
                </div>
                <div class="form-group col-sm-4">
                    <label>GIA</label>
                    <input name="gia"  class="form-control" >
                </div>
            </div>
            <div class="row">
                <div class="form-group col-sm-4">
                    <label>HÌNH ẢNH</label>
                    <input name="up_hinh" type="file" class="form-control">
                    <input name="hinh" type="hidden" value="<?=$hinh?>">
                    (<?=$hinh?>)
                </div>
                <div class="form-group col-sm-4">
                    <label>LOẠI HÀNG</label>
                    <select name="id_loai" class="form-control">
                        <?php
                            foreach ($loai_select_list as $loai) {
                                if($loai['id_loai'] == $id_loai){
                                    echo '<option selected value="'.$loai['id_loai'].'">'.$loai['name_loai'].'</option>';
                                }
                                else{
                                    echo '<option value="'.$loai['id_loai'].'">'.$loai['name_loai'].'</option>';
                                }
                            }
                        ?>
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="form-group col-sm-4">
                    <label>NGÀY NHẬP</label>
                    <input  type="date"name="ngaynhap" class="form-control datepicker" value="<?=$ngaynhap?>">
                </div>
                <div class="form-group col-sm-4">
                    <label>LƯỢT XEM</label>
                    <input name="luotxem" readonly value="0" class="form-control" value="<?=$luotxem?>">
                </div>
            </div>
            <div class="row">
                <div class="form-group col-sm-12">
                    <label>MÔ TẢ</label>
                    <textarea name="mota" class="form-control" rows="4"><?=$mota?></textarea>
                </div>
                <div class="form-group col-sm-12">
                    <button name="btn_update" class="btn btn-default">Cập nhật</button>
                    <button type="reset" class="btn btn-default">Nhập lại</button>
                    <a href="index.php" class="btn btn-default">Thêm mới</a>
                    <a href="index.php?btn_list" class="btn btn-default">Danh sách</a>
                </div>
            </div>
        </form>
    </body>
