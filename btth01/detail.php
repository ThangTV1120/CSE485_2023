<?php include 'header.php'; ?>

<main class="container mt-5">
    <!-- <h3 class="text-center text-uppercase mb-3 text-primary">CẢM NHẬN VỀ BÀI HÁT</h3> -->
    <?php
    // Bước 01: Kết nối tới DB Server
    $conn = mysqli_connect('localhost', 'root', '', 'btth01_cse485');
    $id=$_GET['id'];
    if (!$conn) {
        die('Kết nối tới Server lỗi');
    }
    // Bước 02: Thực hiện truy vấn
    $sql = "SELECT * FROM baiviet WHERE ma_bviet=$id ";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result)
    // Bước 03: Xử lý kết quả trả về
    // if (mysqli_num_rows($result) > 0) {
    //     while ($row = mysqli_fetch_assoc($result)) {
    ?>
            <div class="row mb-5">
                <div class="col-sm-4">
                    <img src="<?php echo $row['hinhanh'] ?>" class="img-fluid" alt="...">
                </div>
                <div class="col-sm-8">
                    <h5 class="card-title mb-2">
                        <a href="" class="text-decoration-none"><?php echo $row['tieude'] ?></a>
                    </h5>
                    <p class="card-text"><span class=" fw-bold">Bài hát: </span><?php echo $row['ten_bhat'] ?></p>
                    <p class="card-text"><span class=" fw-bold">Thể loại: </span><?php echo $row['tieude'] ?></p>
                    <p class="card-text"><span class=" fw-bold">Tóm tắt: </span><?php echo $row['tomtat'] ?></p>
                    <p class="card-text"><span class=" fw-bold">Nội dung: </span> <?php echo $row['noidung'] ?></p>
                    <p class="card-text"><span class=" fw-bold">Tác giả: </span><?php echo $row['tieude'] ?></p>

                </div>
            </div>
    <?php
    //     }
    // }
    ?>

</main>
<?php include 'footer.php'; ?>