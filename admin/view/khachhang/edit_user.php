<?php


require 'libs/members.php';  //get_user_by_id($user_id)
// Lấy thông tin hiển thị lên để người dùng sửa
$user_id = isset($_GET['id']) ? (int)$_GET['id'] : '';
$data=array();
$errors=array();
if ($user_id){
    $data = get_user_by_id($user_id);       
}
//nếu nhấn nút Cập nhật
if (!empty($_POST['btnCapNhat'])){
   
    //Lấy dữ liệu từ form
    $username   = isset($_POST['username'])?addslashes($_POST['username']):'';   
    $password   = isset($_POST['password'])?addslashes(md5($_POST['password'])):'';
    $email   = isset($_POST['email'])?addslashes($_POST['email']):'';
    $fullname  = isset($_POST['fullname'])?addslashes($_POST['fullname']):'';
    $birthday  = isset($_POST['birthday'])?addslashes($_POST['birthday']):'';
    $sex  = isset($_POST['sex'])?addslashes($_POST['sex']):'';
    $level  = isset($_POST['level'])?addslashes($_POST['level']):'';
   
    $data['username'] = $username;
    $data['password'] = md5($password);
    $data['email'] = $email;
    $data['fullname'] =  $fullname;
    $data['birthday'] = $birthday;
    $data['sex'] = $sex;
    $data['level'] =  $level;
    // Validate
    if (empty($data['username'])){
        $errors['username'] = 'Bạn chưa nhập username';
    }     
    
    if (empty($data['password'])){
        $errors['password'] = 'Bạn chưa nhập mật khẩu';
    }
    if (empty($data['email'])){
        $errors['email'] = 'Bạn chưa nhập email';
    }
    if (empty($data['fullname'])){
        $errors['fullname'] = 'Bạn chưa nhập họ tên đầy đủ';
    }
    
    if (empty($data['birthday'])){
        $errors['birthday'] = 'Bạn chưa nhập họ tên đầy đủ';
    }
    
    if (empty($data['sex'])){
        $errors['sex'] = 'Bạn chưa nhập họ tên đầy đủ';
    }

    if (empty($data['level'])){
        $errors['level'] = 'Bạn chưa chọn loại người dùng';
    }
    
    // Neu ko co loi thi insert
    if (!$errors){
        edit_user($user_id,$data['username'],$data['password'],$data['email'], $data['fullname'],$data['birthday'],$data['sex'], $data['level']);
        echo "Sửa thành công";
        header("location:dangnhap.php");
    }
}
?>
<?php require 'layout/header.php'; ?>
<div class="container">
    <h1>Trang sửa người dùng</h1>
    <div class="form-group">
        <form method="POST" action="">
            <div class="form-group">
                <label for="">Username</label>
                <input type="text" value="<?php echo !empty($data['username']) ? $data['username'] : ''; ?>"
                    class="form-control" name="username" id="" aria-describedby="helpId" placeholder="">
            </div>
            <div class="form-group">
                <label for="">Password</label>
                <input type="text" value="<?php echo !empty($data['password']) ? $data['password'] : ''; ?>"
                    class="form-control" name="password" id="" aria-describedby="helpId" placeholder="">
            </div>
            <div class="form-group">
                <label for="">Email</label>
                <input type="email" value="<?php echo !empty($data['email']) ? $data['email'] : ''; ?>"
                    class="form-control" name="email" id="" aria-describedby="helpId" placeholder="">
            </div>
            <div class="form-group">
                <label for="">Họ tên</label>
                <input type="text" value="<?php echo !empty($data['fullname']) ? $data['fullname'] : ''; ?>"
                    class="form-control" name="fullname" id="" aria-describedby="helpId" placeholder="">
            </div>
            <div class="form-group">
                <label for="">Ngày sinh</label>
                <input type="date" value="<?php echo !empty($data['birthday']) ? $data['birthday'] : ''; ?>"
                    class="form-control" name="birthday" id="" aria-describedby="helpId" placeholder="">
            </div>
            <div class="form-group">
                <label for="">Giới tính</label>
                <select class="custom-select" name="sex" id="">
                    <option selected>Chọn giới tính</option>
                    <option value="Nam" <?php if ("Nam"== $data['sex']) echo 'selected'; ?>>Nam</option>
                    <option value="Nữ" <?php if ("Nữ"== $data['sex']) echo 'selected'; ?>>Nữ</option>
                </select>
            </div>
            <input type="submit" name="btnCapNhat" value="Cập nhật" class="btn btn-primary" />
            <button type="button" class="btn btn-primary">Nhập lại</button>

        </form>
    </div>
</div>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
</script>
</body>

</html>