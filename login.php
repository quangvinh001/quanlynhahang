<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./dist/node_modules/bootstrap/dist/css/bootstrap.min.css">
    <!-- <link rel="stylesheet" href="./node_modules/bootstrap/dist/css/sb-admin.css"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./dist/css/style.css">
    <title>Document</title>
</head>

<body class="body-bg">
    <div class="container-login-user">
        <div class="row">
            <div class="col-6 img-login-user"></div>
            <div class="col-6 from-login-user">
                <div class="text-center">
                    <h1 class="text-user mb-4">Đăng Nhập</h1>
                </div>
                <form action="" method="post">
                    <div class=" form-floating mb-3">
                        <input class="form-control" id="inputEmail" type="text" placeholder="name@example.com"
                            name="email" value='<?php if (isset($_POST['email'])){ echo $_POST['email']; } ?>' />
                        <label class="label-text" for="inputEmail">Email Or Phone Number </label>
                    </div>
                    <div class="form-floating mb-3">
                        <input class="form-control" id="inputPassword" type="password" placeholder="Password"
                            name="pwd" />
                        <label class="label-text" for="inputPassword">Password </label>
                    </div>
                    <div class="form-group">
                        <div class="custom-control custom-checkbox small">
                            <input type="checkbox" class="custom-control-input" id="customCheck">
                            <label class="custom-control-label" for="customCheck">Remember
                                Me</label>
                        </div>
                    </div>
                    <button name="submit" type="submit" class="btn btn-primary btn-user btn-block "
                        data-bs-toggle="modal" data-bs-target="#myModal">Login</button>
                    </a>
                    <hr>
                    <div class="text-center">
                        <a class="small" href="">Forgot Password?</a>
                    </div>
                    <div class="text-center">
                        <a class="small" href="register.php">Create an Account!</a>
                    </div>
                    <?php 

require_once "./model/data.php";
$error = '';

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {
 
    $email = trim($_POST['email']);
    $pwd = trim($_POST['pwd']);
 

    // validate if email is empty
    if (empty($email)) {
        $error .= '<p class="error">Please enter email.</p>';
    }
 
    // validate if password is empty
    if (empty($pwd)) {
        $error .= '<p class="error">Please enter your password.</p>';
    }
 
    if (empty($error)) {
        if($query = $conn->prepare("SELECT * FROM user WHERE email = ? OR phone_number = ? ")) {
            $query->bind_param('ss', $email, $email);
            $query->execute();
            $result = $query->get_result();
            $row = $result->fetch_assoc();
            
            // var_dump($row);
            // echo password_hash('123456', PASSWORD_BCRYPT);
            $hash = password_hash($pwd, PASSWORD_DEFAULT);
            // $row = $result->fetch_assoc()
            if ($row) {
                // echo $row['id'];
                if (password_verify($_POST['pwd'], $hash)) {
                    $_SESSION["userid"] = $row['id'];
                    $_SESSION["user"] = $row;
                    // var_dump($_SESSION["userid"]); 
                    // var_dump($_SESSION["user"]);
                    // Redirect the user to welcome page
                    // header("location: index.php");
                    if ($row['role_id'] >= 2) {
                       header("location: http://localhost:8080/quanlynhahang/");
                    }else{
                        header("location: http://localhost:8080/quanlynhahang/admin/index.php");
                    }
                    exit;
                } else {
                    $error .= '<p class="error">The password is not valid.</p>';
                }
            } else {
                $error .= '<p class="error">No User exist with that phone number or email address.</p>';
            }        

        }
        $query->close();
    }
    // Close connection
    mysqli_close($conn);
}
?>
                </form>
                <?php echo $error; ?>
            </div>
        </div>
    </div>

</body>
<script src=".dist/js/index.js"></script>

</html>