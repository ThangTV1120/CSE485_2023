<?php include 'header_admin.php'?>
<main class="container mt-5 mb-5">
<div class="row">
                <div class="col-sm">
                    <a href="add_article.php" class="btn btn-success">Thêm mới</a>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Tiêu Đề </th>
                                <th scope="col">Tên Bài Hát </th>
                                <th scope="col">Mã Thể Loại </th>
                                <th scope="col">Tóm Tắt </th>
                                <th scope="col">Nội Dung</th>
                                <th scope="col">Mã Tác Giả</th>
                                <th scope="col">Ngày Viết </th>
                                <th scope="col">Hình Ảnh </th>
                                <th>Sửa</th>
                                <th>Xóa</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            // Ket noi db
                            $conn = mysqli_connect('localhost', 'root', '', 'btth01_cse485');
                            if (!$conn) {
                                die('Kết nối tới Server lỗi');
                            }
                            // Truy van
                            $sql = "SELECT * FROM baiviet";
                            $result = mysqli_query($conn, $sql);
                            // Xu li ket qua tra ve
                            if (mysqli_num_rows($result) > 0) {  // tra ve so hang trong tap KQ
                                while ($row = mysqli_fetch_assoc($result)) { //ket qua cua truy van kieu mang
                            ?>
                                    <th scope="row"><?=$row['ma_bviet'] ?></th>
                                    <td><?=$row['tieude'] ?></td>
                                    <td><?=$row['ten_bhat'] ?></td>
                                    <td><?=$row['ma_tloai'] ?></td>
                                    <td><?=$row['tomtat'] ?></td>
                                    <td><?=$row['noidung'] ?></td>
                                    <td><?=$row['ma_tgia'] ?></td>
                                    <td><?=$row['ngayviet'] ?></td>
                                    <td><a href="<?=$row['hinhanh'] ?>"></a></td>
                                    <td>
                                        <a href="edit_article.php?id=<?=$row['ma_bviet'] ?>"><i class="fa-solid fa-pen-to-square"></i></a>
                                    </td>
                                    <td>
                                        <a href=""><i class="fa-solid fa-trash"></i></a>
                                    </td>
                                    </tr>
                            <?php
                                }
                            }
                            ?>

                        </tbody>
                    </table>
                </div>
            </div>
        </main>

<?php include 'footer_admin.php';?>

