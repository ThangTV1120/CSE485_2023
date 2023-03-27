<?php include 'header_admin.php';?>
    <main class="container mt-5 mb-5">
        <!-- <h3 class="text-center text-uppercase mb-3 text-primary">CẢM NHẬN VỀ BÀI HÁT</h3> -->
        <div class="row">
            <div class="col-sm">
                <h3 class="text-center text-uppercase fw-bold">Sửa thông tin bài viết</h3>
                <form action="process_add_article.php" method="post">
                    <?php
                    // Bước 01: Kết nối tới DB Server
                    $conn = mysqli_connect('localhost', 'root', '', 'btth01_cse485');
                    $id = $_GET['id'];
                    if (!$conn) {
                        die('Kết nối tới Server lỗi');
                    }
                    // Bước 02: Thực hiện truy vấn
                    $sql = "SELECT * FROM baiviet WHERE ma_bviet=$id ";
                    $result = mysqli_query($conn, $sql);
                    $row = mysqli_fetch_assoc($result)

                    ?>
                    <div class="input-group mt-3 mb-3">
                        <span class="input-group-text" id="lblCatId">Mã bài viết</span>
                        <input type="text" class="form-control" name="txtCatId" readonly value="<?=$row['ma_bviet']?>">
                    </div>

                    <div class="input-group mt-3 mb-3">
                        <span class="input-group-text" id="lblCatName">Tên bài viết</span>
                        <input type="text" class="form-control" name="txtCatName" value="<?=$row['tieude']?>" >
                    </div>

                    <div class="input-group mt-3 mb-3">
                        <span class="input-group-text" id="lblCatId">Mã bài viế<table></table></span>
                        <input type="text" class="form-control" name="txtCatId" readonly value="<?=$row['ma_bviet']?>">
                    </div>

                    
                    <div class="input-group mt-3 mb-3">
                        <span class="input-group-text" id="lblCatId">Tóm Tắt<table></table></span>
                        <input type="text" class="form-control" name="txtCatId" readonly value="<?=$row['tomtat']?>">
                    </div>

                    
                    <div class="input-group mt-3 mb-3">
                        <span class="input-group-text" id="lblCatId">Nội dung<table></table></span>
                        <input type="text" class="form-control" name="txtCatId" readonly value="<?=$row['noidung']?>">
                    </div>

                    <div class="input-group mt-3 mb-3">
                        <span class="input-group-text" id="lblCatId">Mã tác giả<table></table></span>
                        <input type="text" class="form-control" name="txtCatId" readonly value="<?=$row['ma_tgia']?>">
                    </div>

                    <div class="input-group mt-3 mb-3">
                        <span class="input-group-text" id="lblCatId">Ngày viết<table></table></span>
                        <input type="text" class="form-control" name="txtCatId" readonly value="<?=$row['ngayviet']?>">
                    </div>

                    <div class="form-group  float-end ">
                        <input type="submit" value="Lưu lại" name="btt_update" class="btn btn-success">
                        <a href="article.php" class="btn btn-warning ">Quay lại</a>
                    </div>
                </form>
            </div>
        </div>
    </main>
    <?php include 'footer_admin.php';?>