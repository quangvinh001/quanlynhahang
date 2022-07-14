<!-- XỬ LÝ FROM ĐĂNG KÝ -->

<?php

session_start();

require_once "data.php";

    // Nếu không phải là sự kiện đăng ký thì không xử lý
    if (!isset($_POST['dk'])){
        die();
    }
    
// đổi múi giờ
$err = '';

date_default_timezone_set('Asia/Ho_Chi_Minh');

// kiểm tra Form
$full_name = addslashes($_POST['full_name']);
$email = addslashes($_POST['email']);
$phone_number = addslashes($_POST['phone_number']);
$pwd = addslashes($_POST['pwd']);
$pwd2 = addslashes($_POST['pwd2']);
$address = addslashes($_POST['address']);
$timestamp = time();
$created_at = strftime("%Y-%m-%d  %H:%M:%S", $timestamp);



// echo $full_name;
if($pwd != $pwd2){
    echo "<h3>Mật Khẩu Không Khớp</h3>" ;
    die();
} else{
    $pwd_hash = password_hash($pwd, PASSWORD_BCRYPT);
}


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

$sql = "INSERT INTO user VALUES (null,'$full_name', '$email', '$phone_number', '$pwd_hash', '$address', '2', '$created_at', '')";
echo '<script language="javascript">alert("Đăng ký thành công!"); window.location="register.php";</script>';
$result = false;
if (mysqli_query($conn, $sql)){
    $result = true;
}
    return json_encode($result);

    if($result == true){
        // echo "<h3>Đăng Ký Thành Công</h3>";
        echo $result;
    }

?>