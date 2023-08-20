
<?php require_once "class.database.php"?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
    <title>Bảng Nề Nếp</title>
</head>
<body>
    <?php require_once "class.database.php"?>
    
    <?php
        session_start();
        if(isset($_POST["add"])){
            $ten_lop= $_SESSION['id_lop'];
            $loi_2diem=$_POST['loi_2diem'];
            $loi_5diem=$_POST['loi_5diem'];
            $loi_10diem=$_POST['loi_10diem'];
            $loi_20diem=$_POST['loi_20diem'];

            if($conn -> query("INSERT INTO nenep (ten_lop,loi_2diem,loi_5diem,loi_10diem,loi_20diem) VALUE (N'$ten_lop',N'$loi_2diem',N'$loi_5diem',N'$loi_10diem',N'$loi_20diem')")){
                echo "<script>alert('Lưu thành công!');</script>";
            }else{
                echo "<script>alert('Lưu thất bại!');</script>";
            }

        }

        $conn->close();
    ?>
    <div class="container">
        <form method="POST" action="">

            <div class="form-group">
                <label for="loi_2diem">Lỗi trừ 2 điểm/lỗi</label>
                <input name="loi_2diem" class="form-control" placeholder="Lỗi trang phục, lỗi trong giờ học(mất trật tự, không học bài...), đi học muộn/nghỉ học có phép,...">
            </div>
            <div class="form-group">
                <label for="loi_5diem">Lỗi trừ 5 điểm/lỗi</label>
                <input name="loi_5diem" class="form-control" placeholder="HS nói tục chửi bậy, trèo tường vượt rào, bỏ giờ, trốn tiết, nghỉ học không phép, dùng ĐT trong giờ,...">
            </div>
            <div class="form-group">
                <label for="loi_10diem">Lỗi trừ 10 điểm/lỗi</label>
                <input name="loi_10diem" class="form-control" placeholder="Lỗi tập thể: MTT, VS bẩn, không trực ban/trực ban muộn, không tham gia văn nghệ,....">
            </div>
            <div class="form-group">
                <label for="loi_20diem">Lỗi trừ 20 điểm/lỗi</label>
                <input name="loi_20diem" class="form-control" placeholder="Gian lận, đánh nhau, hút thuốc, trộm cắp, phá hoại tài sản chung, vi phạm ATGT, gửi xe ngoài,...">
            </div>
            <button type="submit" class="btn btn-primary" name="add">Lưu</button>
        </form>
    </div>
</body>
</html>
