<?php
    session_start();
    date_default_timezone_set('Asia/Bangkok');
    #$list= timezone_identifiers_list();
    #print_r(getdate());
    $_SESSION['thu']=date('w');
    $_SESSION['gio']=date('G');
    $_SESSION['phut']=date('i')
    #print_r($list);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>404-NOT FOUND</title>
</head>
<body>
    <h2>Chưa đến thời gian đăng nhập, vui lòng chờ.</h2>
</body>
</html>
