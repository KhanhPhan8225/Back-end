<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang báo nhập sai</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
</head>
<body>
    <?php
        session_start();
        if(empty($_SESSION['id_lop'])){
            header('location:login.php');
        }
    ?>
    <h2>Chi Đoàn <?php echo $_SESSION['id_lop'];?></h2>
    <?php
        if(isset($_POST["add"])){
            $_SESSION['loi']=$_POST['bao_loi'];
            $_SESSION['id_lop']=$_SESSION['lop'];
        }
    ?>
    <div class="container">
        <form method="POST" action="">
            <div class="form-group">
                <label for="bao_loi">Nhập lại lỗi sai</label>
                <input name="bao_loi" class="form-control" placeholder="Ví dụ: Sai giờ tốt, sửa thành 4.">
            </div>
            <button type="button" onclick="alert('Lưu thành công!')" class="btn btn-primary" name="add">Lưu</button>
            <div>
                <a href="logout.php" class="btn btn-info" role="button">Logout</a>
            </div>
        </form>
    </div>
</body>
</html>