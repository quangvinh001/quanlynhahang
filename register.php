<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./dist/node_modules/bootstrap/dist/css/bootstrap.css">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"> -->
    <link rel="stylesheet" href="./dist/css/style.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>Document</title>
</head>

<body class="body-bg">
    <div class="container-register">
        <div class="row">
            <div class="col-5 img-register-user"></div>
            <div class="col-7 from-register-user">
                <div class="text-center">
                    <h1 class="text-user mb-4">Đăng Ký</h1>
                </div>
                <form action="" method="post" class="user">
                    <div class="form-group">
                        <input type="text" class="form-control form-control-user" id="" placeholder="Full Name"
                            name="full_name"
                            value='<?php if (isset($_POST['full_name'])){ echo $_POST['full_name']; } ?>'>
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control form-control-user" id="" placeholder="Email Address"
                            name="email" value='<?php if (isset($_POST['email'])){ echo $_POST['email']; } ?>'>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control form-control-user" id="" placeholder="Phone Number"
                            name="phone_number"
                            value='<?php if (isset($_POST['phone_number'])){ echo $_POST['phone_number']; } ?>'>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-6 mb-3 mb-sm-0">
                            <input type="password" class="form-control form-control-user" id="" placeholder="Password"
                                name="pwd" value='<?php if (isset($_POST['pwd'])){ echo $_POST['pwd']; } ?>'>
                        </div>
                        <div class="col-sm-6">
                            <input type="password" class="form-control form-control-user" id=""
                                placeholder="Repeat Password" name="pwd2">
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control form-control-user" id="" placeholder="Address"
                            name="address" value='<?php if (isset($_POST['address'])){ echo $_POST['address']; } ?>'>
                    </div>
                    <button name="dk" type="submit" class="btn btn-primary btn-user btn-block " data-bs-toggle="modal"
                        data-bs-target="#myModal">Register
                        Account</button>
                </form>
                <hr>
                <div class="text-center">
                    <a class="small" href="quenmatkhau">Quên Mật Khẩu ?</a>
                </div>
                <div class="text-center">
                    <a class="small" href="login.php">Bạn Đã Có Tài Khoản ? Đăng Nhập!</a>
                </div>
                <?php include "./model/user.php";
                   ?>


            </div>
        </div>
    </div>
    <script src="./dist/bootstrap-5.0.2-dist/js/bootstrap.js"></script>
</body>

</html>