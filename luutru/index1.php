<?php
    
date_default_timezone_set('Asia/Ho_Chi_Minh');
  $timestamp = time();
  echo(date("F d, Y h:i:s", $timestamp));

//   echo date_default_timezone_get();
?>
<br>
<?php
  echo date("d/m/Y") . "<br>";
  echo date("d-m-Y") . "<br>";
  echo date("Y-m-d") . "<br>";
  echo date("d.m.Y");
?>
<?php
  echo date("h:i:s") . "<br>";
  echo date("F d, Y h:i:s A") . "<br>";
  echo date("h:i a");
?>
<br>
<?php
// $nextyear  = mktime(0, 0, 0, date("m"),   date("d"),   date("Y"));

// echo $date;
// date_modify($date, "+11 days "); // thay đổi ngày bằng phép cộng
// echo date_format($date,"d/m/Y");

$date = strtotime('+365 day',strtotime($timestamp));    //+ tính từ ngày nào đó.
echo date("d/m/Y", $date);
// date_modify($date, "+11 year"); // thay đổi ngày bằng phép cộng
// echo date_format($date,"d/Y/m");  //đổi định dạng
?>

<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <link rel="stylesheet" href="style.css" />
</head>

<body>

    <form method="post" action="index1.php" class="form">

        <h2>Đăng ký thành viên</h2>

        Username: <input type="text" name="username" value="" required>

        Password: <input type="text" name="password" value="" required />

        Email: <input type="text" name="email" value="" required />

        Phone: <input type="text" name="phone" value="" required />

        <input type="submit" name="dangky" value="Đăng Ký" />
        <?php require 'xuly.php';?>
    </form>

</body>

</html>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>

    <div class="container">
        <h2>Modal Example</h2>
        <!-- Trigger the modal with a button -->
        <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Open Modal</button>

        <!-- Modal -->
        <div class="modal fade" id="myModal" role="dialog">
            <div class="modal-dialog">

                <!-- Modal content-->


            </div>
        </div>

    </div>

</body>

</html>



<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title> Hiển Thị Và Ẩn Mật Khẩu</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
</head>

<body>
    <div class="container">
        <input type="password" placeholder="Nhập Mật Khẩu" required>
        <span class="show-btn"><i class="fas fa-eye"></i></span>
    </div>
    <script src="./dist/js/index.js"></script>
</body>


</html>


<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Đăng nhập</title>
    <style type="text/css">
    @import url("https://fonts.googleapis.com/css2?family=Open+Sans&display=swap");

    body {
        background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' version='1.1' xmlns:xlink='http://www.w3.org/1999/xlink' xmlns:svgjs='http://svgjs.com/svgjs' width='1440' height='560' preserveAspectRatio='none' viewBox='0 0 1440 560'%3e%3cg mask='url(%26quot%3b%23SvgjsMask1000%26quot%3b)' fill='none'%3e%3crect width='1440' height='560' x='0' y='0' fill='%230e2a47'%3e%3c/rect%3e%3cpath d='M 0%2c276 C 57.6%2c235.6 172.8%2c99.4 288%2c74 C 403.2%2c48.6 460.8%2c147 576%2c149 C 691.2%2c151 748.8%2c84.4 864%2c84 C 979.2%2c83.6 1036.8%2c143 1152%2c147 C 1267.2%2c151 1382.4%2c112.6 1440%2c104L1440 560L0 560z' fill='%23184a7e'%3e%3c/path%3e%3cpath d='M 0%2c557 C 96%2c505 288%2c307.6 480%2c297 C 672%2c286.4 768%2c503.6 960%2c504 C 1152%2c504.4 1344%2c340 1440%2c299L1440 560L0 560z' fill='%232264ab'%3e%3c/path%3e%3c/g%3e%3cdefs%3e%3cmask id='SvgjsMask1000'%3e%3crect width='1440' height='560' fill='white'%3e%3c/rect%3e%3c/mask%3e%3c/defs%3e%3c/svg%3e");
        background-size: 100vw 100vh;
        margin: 0;
        height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
        font-family: "Open Sans", sans-serif;
    }

    form {
        backdrop-filter: saturate(120%) blur(20px);
        display: block;
        height: fit-content;
        max-width: 93%;
        width: 400px;
        border-radius: 12px;
        margin: auto 0;
        padding: 0 0 25px 0;
        border: 1px solid gray;
    }

    form div {
        padding: 20px 10px;
    }

    form #password {
        padding: 5px 35px 5px 5px;
        width: 190px;
    }

    form #showEye {
        display: block;
        fill: #fff;
        transition: all 0;
    }

    form #hideEye {
        display: none;
        fill: #fff;
        transition: all 0;
    }

    form input {
        outline: none;
        display: block;
        border: 1px solid transparent;
        margin: auto;
        border-radius: 2px;
        background: rgba(255, 255, 255, 0.1);
        padding: 5px;
        color: white;
        width: 220px;
        transition: all 0.2s ease-in-out;
    }

    form input:focus {
        background: white;
        color: black;
    }

    form input:focus::placeholder {
        color: gray;
    }

    form input::placeholder {
        color: white;
    }

    form input[type=submit] {
        color: white;
        background: rgba(255, 255, 255, 0.1);
        margin: 10px auto auto auto;
        cursor: pointer;
        width: 120px;
    }

    form input[type=submit]:hover {
        background: white;
        color: black;
    }

    form input:focus {
        box-shadow: 0 0 0 0.2rem rgba(255, 255, 255, 0.5);
    }

    form svg {
        width: 18px;
        height: 18px;
        cursor: pointer;
        float: right;
        margin-top: -23px;
        margin-right: 80px;
        z-index: 4;
        position: relative;
    }

    form h1 {
        font-size: 2rem;
        color: white;
        text-align: center;
        letter-spacing: 2px;
    }
    </style>
</head>

<body>
    <form method="post">
        <h1>Đăng nhập</h1>
        <div>
            <input type="text" placeholder="email"><br>
            <input type="password" id="password" placeholder="Mật khẩu" onfocus="black()" onblur="white()">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 511.999 511.999" xml:space="preserve"
                onclick="passwordShow()" id="showEye">
                <g>
                    <path
                        d="M508.745,246.041c-4.574-6.257-113.557-153.206-252.748-153.206S7.818,239.784,3.249,246.035    c-4.332,5.936-4.332,13.987,0,19.923c4.569,6.257,113.557,153.206,252.748,153.206s248.174-146.95,252.748-153.201    C513.083,260.028,513.083,251.971,508.745,246.041z M255.997,385.406c-102.529,0-191.33-97.533-217.617-129.418    c26.253-31.913,114.868-129.395,217.617-129.395c102.524,0,191.319,97.516,217.617,129.418    C447.361,287.923,358.746,385.406,255.997,385.406z" />
                </g>
                <g>
                    <path
                        d="M255.997,154.725c-55.842,0-101.275,45.433-101.275,101.275s45.433,101.275,101.275,101.275    s101.275-45.433,101.275-101.275S311.839,154.725,255.997,154.725z M255.997,323.516c-37.23,0-67.516-30.287-67.516-67.516    s30.287-67.516,67.516-67.516s67.516,30.287,67.516,67.516S293.227,323.516,255.997,323.516z" />
                </g>
            </svg>
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                viewBox="0 0 59.049 59.049" xml:space="preserve" onclick="passwordHide()" id="hideEye">
                <g>
                    <path
                        d="M11.285,41.39c0.184,0.146,0.404,0.218,0.623,0.218c0.294,0,0.585-0.129,0.783-0.377c0.344-0.432,0.273-1.061-0.159-1.405   c-0.801-0.638-1.577-1.331-2.305-2.06l-7.398-7.398l7.629-7.629c7.334-7.333,18.003-9.836,27.839-6.534   c0.523,0.173,1.09-0.107,1.267-0.63c0.175-0.523-0.106-1.091-0.63-1.267c-10.562-3.545-22.016-0.857-29.89,7.016L0,30.368   l8.812,8.812C9.593,39.962,10.426,40.705,11.285,41.39z" />
                    <path
                        d="M50.237,21.325c-1.348-1.348-2.826-2.564-4.394-3.616c-0.458-0.307-1.081-0.185-1.388,0.273   c-0.308,0.458-0.185,1.08,0.273,1.388c1.46,0.979,2.838,2.113,4.094,3.369l7.398,7.398l-7.629,7.629   c-7.385,7.385-18.513,9.882-28.352,6.356c-0.52-0.187-1.093,0.084-1.279,0.604c-0.186,0.52,0.084,1.092,0.604,1.279   c3.182,1.14,6.49,1.693,9.776,1.693c7.621,0,15.124-2.977,20.665-8.518l9.043-9.043L50.237,21.325z" />
                    <path
                        d="M30.539,41.774c-2.153,0-4.251-0.598-6.07-1.73c-0.467-0.29-1.084-0.148-1.377,0.321c-0.292,0.469-0.148,1.085,0.321,1.377   c2.135,1.33,4.6,2.032,7.126,2.032c7.444,0,13.5-6.056,13.5-13.5c0-2.685-0.787-5.279-2.275-7.502   c-0.308-0.459-0.93-0.582-1.387-0.275c-0.459,0.308-0.582,0.929-0.275,1.387c1.267,1.893,1.937,4.102,1.937,6.39   C42.039,36.616,36.88,41.774,30.539,41.774z" />
                    <path
                        d="M30.539,18.774c2.065,0,4.089,0.553,5.855,1.6c0.474,0.281,1.088,0.125,1.37-0.351c0.281-0.475,0.125-1.088-0.351-1.37   c-2.074-1.229-4.451-1.879-6.875-1.879c-7.444,0-13.5,6.056-13.5,13.5c0,2.084,0.462,4.083,1.374,5.941   c0.174,0.354,0.529,0.56,0.899,0.56c0.147,0,0.298-0.033,0.439-0.102c0.496-0.244,0.701-0.843,0.458-1.338   c-0.776-1.582-1.17-3.284-1.17-5.06C19.039,23.933,24.198,18.774,30.539,18.774z" />
                    <path
                        d="M54.621,5.567c-0.391-0.391-1.023-0.391-1.414,0l-46.5,46.5c-0.391,0.391-0.391,1.023,0,1.414   c0.195,0.195,0.451,0.293,0.707,0.293s0.512-0.098,0.707-0.293l46.5-46.5C55.012,6.591,55.012,5.958,54.621,5.567z" />
                </g>
            </svg>
            <br>

            <input type="submit" name="" value="Đăng nhập">
        </div>
    </form>
    <script type="text/javascript">
    let password = document.getElementById('password');
    let showEye = document.getElementById('showEye');
    let hideEye = document.getElementById('hideEye');

    function black() {
        showEye.style.fill = "#000000";
        hideEye.style.fill = "#000000";
    }

    function white() {
        showEye.style.fill = "#fff";
        hideEye.style.fill = "#fff";
    }

    function passwordShow() {
        password.type = 'text';
        showEye.style.display = "none";
        hideEye.style.display = "inline";
        password.focus();
    }

    function passwordHide() {
        password.type = 'password';
        showEye.style.display = "inline";
        hideEye.style.display = "none";
        password.focus();
    }
    </script>
</body>

</html>