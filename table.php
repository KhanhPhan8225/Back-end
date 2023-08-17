<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
    <title>Bảng Thi Đua</title>
</head>
<body>
    <?php require_once "class.database.php" ?>
    <?php
        if(isset($_POST["add"])){
            $id_lop= $_POST['id_lop'];
            $gio_tot=$_POST['gio_tot'];
            $gio_kha=$_POST['gio_kha'];
            $gio_tb=$_POST['gio_tb'];
            $gio_yeu=$_POST['gio_yeu'];
            $so_diem_gioi=$_POST['so_diem_gioi'];
            $so_diem_yeu_kem=$_POST['so_diem_yeu_kem'];
            $vi_pham_atgt=$_POST['vi_pham_atgt'];

            if($conn -> query("INSERT INTO thiduatuan (id_lop,gio_tot,gio_kha,gio_tb,gio_yeu,so_diem_gioi,so_diem_yeu_kem,vi_pham_atgt) VALUE (N'$id_lop',N'$gio_tot',N'$gio_kha',N'$gio_tb',N'$gio_yeu',N'$so_diem_gioi',N'$so_diem_yeu_kem',N'$vi_pham_atgt')")){
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
                <label for="id_lop">Lớp</label>
                <input name="id_lop" class="form-control" placeholder="Tên Lớp">
            </div>
            <div class="form-group">
                <label for="gio_tot">Giờ tốt</label>
                <input name="gio_tot" class="form-control" placeholder="Nếu 100% giờ tốt nhập 1, không 100% nhập 0.">
            </div>
            <div class="form-group">
                <label for="gio_kha">Số giờ khá</label>
                <input name="gio_kha" class="form-control" placeholder="Nếu không có nhập:0">
            </div>
            <div class="form-group">
                <label for="gio_tb">Số giờ trung bình</label>
                <input name="gio_tb" class="form-control" placeholder="Nếu không có nhập:0">
            </div>
            <div class="form-group">
                <label for="gio_yeu">Số giờ yếu</label>
                <input name="gio_yeu" class="form-control" placeholder="Nếu không có nhập:0">
            </div>
            <div class="form-group">
                <label for="so_diem_gioi">Số điểm giỏi</label>
                <input name="so_diem_gioi" class="form-control" placeholder="Nếu không có nhập:0">
            </div>
            <div class="form-group">
                <label for="so_diem_yeu_kem">Số điểm yếu kém</label>
                <input name="so_diem_yeu_kem" class="form-control" placeholder="Nếu không có nhập:0">
            </div>
            <div class="form-group">
            <label for="vi_pham_atgt">Số lần vi phạm ATGT</label>
            <input name="vi_pham_atgt" class="form-control" placeholder="Nếu không có nhập:0">
        </div>
            <button type="submit" class="btn btn-primary" name="add">Lưu</button>
        </form>
    </div>
</body>
</html>