<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Dashboard - SB Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
    <link href="../../../dist/css/styles.css" rel="stylesheet" />
    <link href="../../../dist/css/admin.css" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>

</head>

<body class="sb-nav-fixed">
    <!-- nav -->
    <?php require_once "../../layout/header.php"; ?>
    <div id="layoutSidenav">
        <!-- menu -->
        <?php require_once "../../layout/menu.php"; ?>

        <div id="layoutSidenav_content">
            <div class="body-admin">
                <div class="top-body">
                    <h1>Danh Sách Nhân Viên</h1>
                    <a href="#">Thêm Nhân Viên</a>
                </div>
                <div class="bottom-body">
                    <form class="row g-3">
                        <div class="col-md-6">
                            <label for="inputEmail4" class="form-label">Email</label>
                            <input type="email" class="form-control" id="inputEmail4" name="email">
                        </div>
                        <div class="col-md-6">
                            <label for="inputPassword4" class="form-label">Password</label>
                            <input type="password" class="form-control" id="inputPassword4" name="pwd">
                        </div>
                        <div class="col-12">
                            <label for="inputAddress" class="form-label">Full Name</label>
                            <input type="text" class="form-control" id="inputAddress" placeholder="Full Name"
                                name="fullname">
                        </div>
                        <div class="col-12">
                            <label for="inputAddress2" class="form-label">Phone Number</label>
                            <input type="text" class="form-control" id="inputAddress2" placeholder="Phone Number"
                                name="phone">
                        </div>
                        <div class="col-12">
                            <label for="inputAddress2" class="form-label">Address</label>
                            <input type="text" class="form-control" id="inputAddress2" placeholder="Address"
                                name="address">
                        </div>
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary">Register</button>
                        </div>
                    </form>
                </div>
            </div>
            <?php require_once "../../layout/footer.php"; ?>
        </div>
    </div>
    <script src="../../../dist/node_modules/bootstrap/dist/js/bootstrap.bundle.js" crossorigin="anonymous"></script>
    <script src="../../../dist/js/scripts.js"></script>
    <script src="../../../dist/js/Chart.min.js" crossorigin="anonymous"></script>
    <script src="../../../dist/assets/demo/chart-area-demo.js"></script>
    <script src="../../../dist/assets/demo/chart-bar-demo.js"></script>
    <script src="../../../dist/js/simple-databases@latest" crossorigin="anonymous"></script>
    <script src="../../../dist/js/datable-simple-demo.js"></script>
</body>

</html>
<?php
define('DBSERVER', 'localhost'); // Database server
define('DBUSERNAME', 'root'); // Database username
define('DBPASSWORD', ''); // Database password
define('DBNAME', 'quanlynhahang'); // Database name
 
/* connect to MySQL database */
$conn = mysqli_connect(DBSERVER, DBUSERNAME, DBPASSWORD, DBNAME);
 
// Check db connection
if($conn === false){
    die("Error: connection error. " . mysqli_connect_error());
}


?>

<?php

session_start();
date_default_timezone_set('Asia/Ho_Chi_Minh');
       $err = '';
    // Nếu không phải là sự kiện đăng ký thì không xử lý
    if (isset($_POST['sumbit'])){




// kiểm tra Form
$full_name = addslashes($_POST['fullname']);
$email = addslashes($_POST['email']);
$phone_number = addslashes($_POST['phone']);
$pwd = addslashes($_POST['pwd']);
$address = addslashes($_POST['address']);
$timestamp = time();
$created_at = strftime("%Y-%m-%d  %H:%M:%S", $timestamp);

 if (empty($email)) {
        $error .= '<p class="error">Please enter email.</p>';
    }
 
    // validate if password is empty
    if (empty($pwd)) {
        $error .= '<p class="error">Please enter your password.</p>';
    }

     if (empty($phone_number)) {
        $error .= '<p class="error">Please enter your phone number.</p>';
    }
 
if (empty($error)) {
    $pwd_hash = password_hash($pwd, PASSWORD_BCRYPT);



// Kiểm tra username hoặc email có bị trùng hay không
$sql = "SELECT * FROM user WHERE email = '$email' OR phone_number = '$phone_number'";
$result = mysqli_query($conn, $sql);

// // Nếu kết quả trả về lớn hơn 1 thì nghĩa là username hoặc email đã tồn tại trong CSDL
if (mysqli_num_rows($result) > 0)
{
echo '<p class= "p-loi">Bị trùng tên hoặc chưa nhập tên!</p>';

// Dừng chương trình
die ();
}

$sql = "INSERT INTO user VALUES (null,'$full_name', '$email', '$phone_number', '$pwd_hash', '$address', '3', '$created_at', '')";
echo '<script language="javascript">alert("Đăng ký thành công!"); window.location="http://localhost:8080/quanlynhahang/admin/view/nhanvien/nhanvien.php";</script>';
$result = false;
if (mysqli_query($conn, $sql)){
    $result = true;
}
    return json_encode($result);

    if($result == true){
        // echo "<h3>Đăng Ký Thành Công</h3>";
        echo $result;
    }
}
    }
    
// đổi múi giờ

?>