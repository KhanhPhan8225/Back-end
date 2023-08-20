
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
    <title>Bảng Thi Đua</title>
</head>
<body>
    <?php require_once "class.database.php"?>
    
    <?php
        session_start();
        echo $_SESSION['id_lop'];
        if(empty($_SESSION['id_lop'])){
            header('location:login.php');
        }
    ?>
    <h2>Chi Đoàn <?php echo $_SESSION['id_lop'];?></h2>
    <?php

        if(isset($_POST["add"])){
            $ten_lop= $_SESSION['id_lop'];
            $gio_tot=$_POST['gio_tot'];
            $gio_tb=$_POST['gio_tb'];
            $gio_yeu=$_POST['gio_yeu'];
            $gio_kem=$_POST['gio_kem'];
            $so_diem_gioi=$_POST['so_diem_gioi'];
            $so_diem_yeu_kem=$_POST['so_diem_yeu_kem'];

            if($conn -> query("INSERT INTO thiduatuan (ten_lop,gio_tot,gio_tb,gio_yeu,gio_kem,so_diem_gioi,so_diem_yeu_kem) VALUE (N'$ten_lop',N'$gio_tot',N'$gio_tb',N'$gio_yeu',N'$gio_kem',N'$so_diem_gioi',N'$so_diem_yeu_kem')")){
                header("Location:nenep.php");
            }else{
                echo "<script>alert('Lưu thất bại!');</script>";
            }

        }

        $conn->close();
    ?>
    <div class="container">
        <form method="POST" action="">

            <div class="form-group">
                <label for="gio_tot">Giờ tốt</label>
                <input name="gio_tot" class="form-control" placeholder="Nếu 100% giờ tốt nhập 1, không 100% nhập 0.">
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
                <label for="gio_kem">Số giờ kém</label>
                <input name="gio_kem" class="form-control" placeholder="Nếu không có nhập:0">
            </div>
            <div class="form-group">
                <label for="so_diem_gioi">Số điểm giỏi</label>
                <input name="so_diem_gioi" class="form-control" placeholder="Nếu không có nhập:0">
            </div>
            <div class="form-group">
                <label for="so_diem_yeu_kem">Số điểm yếu kém</label>
                <input name="so_diem_yeu_kem" class="form-control" placeholder="Nếu không có nhập:0">
            </div>
            <button type="submit" class="btn btn-primary" name="add">Lưu</button>
        </form>
    </div>
</body>
</html>
