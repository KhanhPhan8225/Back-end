<?php
include "class.database.php";
global $conn;
$result=mysqli_query($conn,"SELECT * FROM baoloi");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang báo nhập sai</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
</head>
<?php
        session_start();
        if(empty($_SESSION['id_lop'])){
            header('location:login.php');
        }
    ?>
<body id="page-top">
     <div class="card-body">
		<div class="table-responsive">
			<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
				<thead>
					<tr>
						<th>Lớp</th>
						<th>Báo lỗi</th>
                        <th>Tuần thi đua</th>   						
					</tr>
				</thead>
			   
				<tbody>
				<?php while($row=mysqli_fetch_assoc($result)):?>
					<tr>
						<td><?=$row['ten_lop']?></td>
						<td><?=$row['bao_loi']?></td>
                        <td><?=$row['tuan']?></td>
					</tr>
					<?php endwhile; ?>
				  
				</tbody>
			</table>
		</div>
	</div>
</body>
</html>
