<?php
    include "class.database.php";
    global $conn;
    session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Login</title>
</head>

<body>
    <div class="container">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="p-5">
								<?php

								if($_SERVER["REQUEST_METHOD"]=="POST")
                                {
	
									$user_name=$_POST['user_name'];
									$user_pass=$_POST['user_pass'];
									$result=mysqli_query($conn,"SELECT * from db_users where username='$user_name' and pass='$user_pass'");
									$row=mysqli_fetch_assoc($result);
									if($row){
                                        if($row["role"]=="1"){
                                            header("Location:nhanloi.php");    
                                        }else{
                                            $_SESSION['id_lop']=$row['id_lop'];
                                            $_SESSION['pass']=$row['pass'];
                                            #CN=0 T2=1 ...
                                            if($_SESSION['thu']==3){
                                                if($_SESSION['gio']>9){
                                                    if($_SESSION['gio']<15){
                                                        header('location:index.php');
                                                    }
                                                    elseif($_SESSION['gio']==15){
                                                        if($_SESSION['phut']==0){
                                                            header('location:index.php');
                                                        }
                                                        else{
                                                            header('location:time.php');
                                                        }
                                                    }
                                                    else{
                                                        header('location:time.php');
                                                    }
                                                }
                                                else{
                                                    header('location:time.php');
                                                }

									        }
                                            else{
                                                header('location:time.php');
                                            }
									    }
                                    }
                                    else{
                                        echo '<script>alert("Tên đăng nhập hoặc mật khẩu không đúng!")</script>';
                                    }
                                }
									?>							
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Đăng nhập</h1>
                                    </div>
                                    <form class="user" action="login.php" method="post">
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-user"
                                                placeholder="Enter Email Address..." name="user_name">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-user"
                                                id="exampleInputPassword" placeholder="Password"  name="user_pass">
                                        </div>
                                        <div class="form-group">
                                            <div class="custom-control custom-checkbox small">
                                                <input type="checkbox" class="custom-control-input" id="customCheck">
                                                <label class="custom-control-label" for="customCheck">Remember
                                                    Me</label>
                                            </div>
                                        </div>
                                        <button type="submit"class="btn btn-primary btn-user btn-block">
                                            Login
                                        </button>
                                    </form>
                                    <hr>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>
</body>

</html>
