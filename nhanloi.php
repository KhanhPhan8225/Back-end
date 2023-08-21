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
    ?>
    <?php
       echo $_SESSION['lop']
    ?>
    <div class="container">
        <form method="POST" action="">
            <div>
                <a href="logout.php" class="btn btn-info" role="button">Logout</a>
            </div>
        </form>
    </div>
</body>
</html>