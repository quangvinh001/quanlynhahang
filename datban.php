<?php  
 $connect = mysqli_connect("localhost", "root", "", "quanlynhahang");  
 date_default_timezone_set('Asia/Ho_Chi_Minh');
 $nextyear  = mktime(0, 0, 0, date("m"),   date("d"),   date("Y")+1);


 ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./dist/bootstrap-5.0.2-dist/css/bootstrap.css" />
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" /> -->
    <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
    <link rel="stylesheet" href="http://code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.css">
    <script src="//cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.js"></script>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="./dist/css/layout.css" />
    <title>Document</title>
    <style>
    /* .menu-3 {
        display: none;
    } */

    .abc {

        background: url(./dist/img/goi-nem-nuong-7908.png);
        height: 400px;
        display: flex;
        justify-content: center;
        /* text-align: end; */
        align-items: flex-end;
        /* margin-bottom: -5px; */
        font-size: 35px;
        font-family: monospace;
        color: brown;
        padding-bottom: 50px;

    }

    .row-form {
        display: flex;
        justify-content: space-around;
        align-items: center;
        margin: 10px;
    }

    .menu-3,
    h3 {
        /* margin-left: 10px; */
        padding-top: 13px;
        display: block;
        font-size: 1.2em;
        font-weight: bold;
        font-weight: 700;
        font-family: cursive;
    }

    p {
        margin-left: 8px;
        margin-top: 0;
        margin-bottom: 1rem;
    }

    div#dat-ban {
        margin: 50px;
    }

    p#sm {
        display: flex;
        justify-content: space-around;
    }

    label {
        font-weight: 500;
    }
    </style>
</head>

<body>
    <?php require_once "./layout/menu.php"; ?>
    <div class="abc">
        <h3>Đặt Bàn</h3>
    </div>

    <div class="table-db">
        <div class="table-left">
            <h3>Set Table</h3>
            <p>
                <span>Quý khách vui lòng đặt bàn trước để có trải nghiệm thưởng thức ẩm thực tốt nhất tại Ẩm Thực
                    Xèo
                </span>
            </p>

            <p><span style="font-size: 95%;"><strong><span style="color: #000000;">Gợi ý đặt bàn:</span></strong></span>
            </p>

            <ul>
                <li class="bullet-arrow"><span style="font-size: 95%;">Đi 1 người: đặt bàn đơn</span></li>
                <li class="bullet-arrow"><span style="font-size: 95%;">Đi 2 người: đặt bàn đôi</span></li>
                <li class="bullet-arrow"><span style="font-size: 95%;">Đi nhóm 4-6 người: đặt bàn 6 người.</span></li>
                <li class="bullet-arrow"><span style="font-size: 95%;">Đi nhóm 6-12 người: đặt bàn dài</span></li>
                <li class="bullet-arrow"><span style="font-size: 95%;">Đi nhóm &gt;12 người: gọi trực tiếp Hotline:
                        0333.4138.17</span></li>
            </ul>
        </div>
        <div class="table-right">
            <div class="form-dat-ban" id="dat-ban">
                <h3>Liên hệ đặt bàn</h3>
                <p class="des">Quý khách vui lòng đặt bàn trước để chúng tôi sắp xếp cho quý khách chỗ ngồi tốt nhất!
                </p>
                <form action="" method="post">
                    <div class="row-form">
                        <div class="left"> <label>Tên của bạn:</label><br> <span
                                class="wpcf7-form-control-wrap text-657"><input type="text" name="full_name" value=""
                                    size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required"
                                    aria-required="true" aria-invalid="false" placeholder="Tên của bạn..."></span><br>
                            <label>Số điện thoại của
                                bạn:</label><br> <span class="wpcf7-form-control-wrap tel-466"><input type="tel"
                                    name="phone_number" value="" size="40"
                                    class="wpcf7-form-control wpcf7-text wpcf7-tel wpcf7-validates-as-required wpcf7-validates-as-tel"
                                    aria-required="true" aria-invalid="false" placeholder="Số điện thoại..."></span><br>
                            <label>Email của bạn (nếu có):</label><br> <span
                                class="wpcf7-form-control-wrap email-715"><input type="email" name="email" value=""
                                    size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-email"
                                    aria-invalid="false" placeholder="Email của bạn..."></span>
                        </div>
                        <div class="right"> <label>Số người:</label><br> <span
                                class="wpcf7-form-control-wrap number-620"><input type="number" name="number_user"
                                    value=""
                                    class="wpcf7-form-control wpcf7-number wpcf7-validates-as-required wpcf7-validates-as-number"
                                    min="1" max="10" aria-required="true" aria-invalid="false"
                                    placeholder="Số người"></span><br> <label>Bạn có thể tới dùng bữa ngày
                                nào?</label><br>
                            <span class="wpcf7-form-control-wrap date-815"><input type="date" name="date-815" value=""
                                    class="wpcf7-form-control wpcf7-date wpcf7-validates-as-required wpcf7-validates-as-date"
                                    min="<?php echo date("Y-m-d") ?>" max='<?php echo date('Y/m/d', $nextyear);
                            ?>' aria-required="true" aria-invalid="false" placeholder="Thời gian bạn tới"></span><br>
                            <label>Thời gian:</label><br> <span class="wpcf7-form-control-wrap menu-54"><select
                                    name="menu-54" class="wpcf7-form-control wpcf7-select" aria-invalid="false">
                                    <option value="Thời gian">Thời gian</option>
                                    <option value="Buổi sáng">Buổi sáng</option>
                                    <option value="Buổi trưa">Buổi trưa</option>
                                    <option value="Buổi chiều">Buổi chiều</option>
                                    <option value="Buổi tối">Buổi tối</option>
                                </select></span>
                        </div>
                    </div>

                    <p id="sm">
                        <input name="submit-datban" type="submit" value="Đặt bàn ngay"
                            class="wpcf7-form-control has-spinner wpcf7-submit"><span class="wpcf7-spinner"></span>
                    </p>
                    <?php 
                    $error = '';
                if(isset($_POST['submit-datban'])){
                    $full_name = $_POST['full_name'];
                    $email = $_POST['email'];
                    $phone_number = $_POST['phone_number'];
                    $number_user= $_POST['number_user'];
                    $date_815 = $_POST['date-815'];
                    $time = $_POST['menu-54'];

                    // echo "<h1>$date_815</h1>";
                    if (empty($full_name)) {
                    $error .= '<p class="error">Please enter Name.</p>';
                }
                if (empty($phone_number)) {
                    $error .= '<p class="error">Please enter Phone Number.</p>';
                }

                if (empty($date_815)) {
                    $error .= '<p class="error">Please enter Date.</p>';
                }
                if (empty($time)) {
                    $error .= '<p class="error">Please enter Time.</p>';
                }
                if (empty($error)) {
                    $query = "SELECT * FROM table_details WHERE phone_number = '$phone_number'";  
                    $result = mysqli_query($connect, $query);  

                    if (mysqli_num_rows($result) > 0)
                    {
                    echo '<p class= "p-loi">Trùng Phone_number!! Vui Lòng Nhập Lại</p>';

                    // Dừng chương trình
                    die ();
                    }


                    $sql = "INSERT INTO table_details VALUES (null,'$full_name', '$email', '$phone_number', '$number_user', '$date_815', '$time', '')";
                    // echo "Đặt Bàn Thành Công";
                        $intable = mysqli_query($connect, $sql);
                        $result = false;
                        if ($intable){
                            $result = true;
                        }
                            return json_encode($result);
                            $query->close();
                }
            mysqli_close($connect);
                

                            // if($result == true){
                            //     // echo "<h3>Đăng Ký Thành Công</h3>";
                            //     echo $result;
                            // }
                            // echo $result;
                }
   
?>

                    <?php echo $error; ?>

                </form>
            </div>
        </div>
    </div>
    <?php require_once "./layout/footer.php"; ?>
    </div>
    </div>
</body>
<script src="./dist/bootstrap-5.0.2-dist/js/bootstrap.js"></script>

</html>