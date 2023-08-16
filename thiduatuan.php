<?php
include "class.database.php";
global $conn;
$result=mysqli_query($conn,"SELECT * FROM thiduatuan");
//var_dump(mysqli_fetch_assoc($result));
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Bảng thi đua</title>

</head>

<body id="page-top">
     <div class="card-body">
		<div class="table-responsive">
			<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
				<thead>
					<tr>
						<th>Lớp</th>
						<th>Số giờ tốt</th>
						<th>Số giờ khá</th>
						<th>Số giờ trung bình</th>                                           
						<th>Số giờ yếu</th>  
						<th>Số điểm giỏi</th>
                        <th>Số điểm kém</th>
                        <th>Số lần vi phạm ATGT</th>    						
					</tr>
				</thead>
			   
				<tbody>
				<?php while($row=mysqli_fetch_assoc($result)):?>
					<tr>
						<td><?=$row['id_lop']?></td>
						<td><?=$row['gio_tot']?></td>
						<td><?=$row['gio_kha']?></td>
						<td><?=$row['gio_tb']?></td>
						<td><?=$row['gio_yeu']?></td>   
						<td><?=$row['so_diem_gioi']?></td>
                        <td><?=$row['so_diem_yeu_kem']?></td>
                        <td><?=$row['vi_pham_atgt']?></td>  						
					</tr>
					<?php endwhile; ?>
				  
				</tbody>
			</table>
		</div>
	</div>

</body>

</html>