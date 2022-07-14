<?php  
 $connect = mysqli_connect("localhost", "root", "", "quanlynhahang");  
 date_default_timezone_set('Asia/Ho_Chi_Minh');
 


 ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./dist/bootstrap-5.0.2-dist/css/bootstrap.css" />
    <link rel="stylesheet" href="./dist/css/layout.css" />
    <link rel="stylesheet" href="style.css">
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    <title>Liên Hệ</title>
    <style>
    .col-inner {
        position: relative;
        margin-left: auto;
        margin-right: auto;
        width: 100%;
        background-position: 50% 50%;
        background-size: cover;
        background-repeat: no-repeat;
        -ms-flex: 1 0 auto;
        flex: 1 0 auto;
    }

    .alt-font {
        font-size: 30px;
        font-weight: normal;
        letter-spacing: -2px;
        font-family: "Berkshire Swash", sans-serif;
    }

    .section {
        padding: 30px 0;
        position: relative;
        min-height: auto;
        width: 100%;
        display: -ms-flexbox;
        display: flex;
        -ms-flex-flow: row;
        flex-flow: row;
        -ms-flex-align: center;
        align-items: center;
    }

    .button,
    button,
    input,
    textarea,
    select,
    fieldset {
        margin-bottom: 1em;
    }

    input[type='email'],
    input[type='date'],
    input[type='search'],
    input[type='number'],
    input[type='text'],
    input[type='tel'],
    input[type='url'],
    input[type='password'],
    textarea,
    select,
    .select-resize-ghost,
    .select2-container .select2-choice,
    .select2-container .select2-selection {
        box-sizing: border-box;
        border: 1px solid #ddd;
        padding: 0 0.75em;
        height: 2.507em;
        font-size: .97em;
        border-radius: 0;
        max-width: 100%;
        width: 100%;
        vertical-align: middle;
        background-color: #fff;
        color: #333;
        box-shadow: inset 0 1px 2px rgb(0 0 0 / 10%);
        transition: color .3s, border .3s, background .3s, opacity .3s;
    }

    input[type='email'],
    input[type='search'],
    input[type='number'],
    input[type='url'],
    input[type='tel'],
    input[type='text'],
    textarea {
        -webkit-appearance: none;
        -moz-appearance: none;
        appearance: none;
    }


    element.style {}

    input[type='submit']:not(.is-form) {
        color: black;
        border-radius: 5px;
    }

    .scroll-to-bullets a,
    .featured-title,
    .label-new.menu-item>a:after,
    .nav-pagination>li>.current,
    .nav-pagination>li>span:hover,
    .nav-pagination>li>a:hover,
    .has-hover:hover .badge-outline .badge-inner,
    button[type="submit"],
    .button.wc-forward:not(.checkout):not(.checkout-button),
    .button.submit-button,
    .button.primary:not(.is-outline),
    .featured-table .title,
    .is-outline:hover,
    .has-icon:hover .icon-label,
    .nav-dropdown-bold .nav-column li>a:hover,
    .nav-dropdown.nav-dropdown-bold>li>a:hover,
    .nav-dropdown-bold.dark .nav-column li>a:hover,
    .nav-dropdown.nav-dropdown-bold.dark>li>a:hover,
    .is-outline:hover,
    .tagcloud a:hover,
    .grid-tools a,
    input[type='submit']:not(.is-form),
    .box-badge:hover .box-text,
    input.button.alt,
    .nav-box>li>a:hover,
    .nav-box>li.active>a,
    .nav-pills>li.active>a,
    .current-dropdown .cart-icon strong,
    .cart-icon:hover strong,
    .nav-line-bottom>li>a:before,
    .nav-line-grow>li>a:before,
    .nav-line>li>a:before,
    .banner,
    .header-top,
    .slider-nav-circle .flickity-prev-next-button:hover svg,
    .slider-nav-circle .flickity-prev-next-button:hover .arrow,
    .primary.is-outline:hover,
    .button.primary:not(.is-outline),
    input[type='submit'].primary,
    input[type='submit'].primary,
    input[type='reset'].button,
    input[type='button'].primary,
    .badge-inner {
        background-color: #F3E385;
    }

    input[type='submit'],
    input[type='submit'].button,
    input[type='submit'],
    .primary {
        background-color: #446084;
    }

    .button,
    input[type='submit'],
    input[type='submit'].button,
    input[type='reset'].button,
    input[type='button'].button {
        color: #fff;
        background-color: #446084;
        background-color: var(--primary-color);
        border-color: rgba(0, 0, 0, 0.05);
    }

    .button,
    button,
    input[type='submit'],
    input[type='reset'],
    input[type='button'] {
        position: relative;
        display: inline-block;
        background-color: transparent;
        text-transform: uppercase;
        font-size: .97em;
        letter-spacing: .03em;
        -ms-touch-action: none;
        touch-action: none;
        cursor: pointer;
        font-weight: bolder;
        text-align: center;
        color: currentColor;
        text-decoration: none;
        border: 1px solid transparent;
        vertical-align: middle;
        border-radius: 0;
        margin-top: 0;
        margin-right: 1em;
        text-shadow: none;
        line-height: 2.4em;
        min-height: 2.5em;
        padding: 0 1.2em;
        max-width: 100%;
        transition: transform .3s, border .3s, background .3s, box-shadow .3s, opacity .3s, color .3s;
        text-rendering: optimizeLegibility;
        box-sizing: border-box;
    }


    .bg-loaded {
        opacity: 1;
    }

    .bg {
        opacity: 0;
        transition: opacity 1s;
        -webkit-transition: opacity 1s;
    }

    .bg-fill {
        background-size: cover !important;
        background-repeat: no-repeat !important;
        background-position: 50% 50%;
    }

    .fill {
        position: absolute;
        top: 0;
        left: 0;
        height: 100%;
        right: 0;
        bottom: 0;
        padding: 0 !important;
        margin: 0 !important;
    }

    .section-bg,
    .section-content {
        width: 100%;
    }

    .section-bg {
        overflow: hidden;
    }

    .relative {
        position: relative !important;
    }

    .section-content {
        z-index: 1;
    }

    div#row-915961232 {
        margin: 25px 183px;
        gap: 41px;
    }

    textarea.wpcf7-form-control.wpcf7-textarea.wpcf7-validates-as-required {
        height: 8rem;
    }
    </style>
</head>

<body>
    <?php require_once "./layout/menu.php"; ?>

    <div class="section-content relative">

        <div class="row row-small" id="row-915961232">
            <div class="col medium-6 small-12 large-6">
                <div class="col-inner">
                    <h3 class="alt-font"><span style="color: #000000; font-size: 130%;">Contact</span></h3>
                    <p><span style="font-size: 95%;">Chúng tôi luôn trân trọng mọi ý kiến của quý khách, ý kiến từ quý
                            khách sẽ giúp chúng tôi nâng cao về chất lượng phục vụ chính quý khách cũng góp phần vào sự
                            thành công và phát triển thương hiệu Ẩm Thực Xèo của chúng tôi:</span></p>
                    <p><span style="font-size: 95%;">Webdesign rất hoan nghênh độc giả gửi thông tin và góp ý cho chúng
                            tôi!</span></p>
                    <p><span style="font-size: 95%;"><strong>Địa chỉ:</strong> Lô 19 Võ Văn Kiệt, TP. Đà
                            Nẵng</span><br><span style="font-size: 95%;"><strong>Email:
                            </strong>amthucxeo.vvk@amomi.vn<br><strong>SĐT:</strong>
                            07 8656 8656<br><strong>Website:</strong> https://amthucxeo.com/</span></p>
                </div>
            </div>
            <div class="col medium-6 small-12 large-6">
                <div class="col-inner">
                    <div role="form" class="wpcf7" id="wpcf7-f307-p6-o1" lang="vi" dir="ltr">
                        <div class="screen-reader-response"></div>
                        <form action="" method="post" class="wpcf7-form" novalidate="novalidate">
                            <div style="display: none;">
                                <input type="hidden" name="_wpcf7" value="307">
                                <input type="hidden" name="_wpcf7_version" value="5.0">
                                <input type="hidden" name="_wpcf7_locale" value="vi">
                                <input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f307-p6-o1">
                                <input type="hidden" name="_wpcf7_container_post" value="6">
                            </div>
                            <p><span class="wpcf7-form-control-wrap text-458"><input type="text" name="full_name"
                                        value="" size="40"
                                        class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required"
                                        aria-required="true" aria-invalid="false"
                                        placeholder="Tên của bạn..."></span><br>
                                <span class="wpcf7-form-control-wrap email-157"><input type="email" name="email"
                                        value="" size="40"
                                        class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email"
                                        aria-required="true" aria-invalid="false"
                                        placeholder="Địa chỉ email..."></span><br>
                                <span class="wpcf7-form-control-wrap tel-825"><input type="tel" name="phone_number"
                                        value="" size="40"
                                        class="wpcf7-form-control wpcf7-text wpcf7-tel wpcf7-validates-as-required wpcf7-validates-as-tel"
                                        aria-required="true" aria-invalid="false"
                                        placeholder="Số điện thoại..."></span><br>
                                <span class="wpcf7-form-control-wrap text-457"><input type="text" name="status" value=""
                                        size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required"
                                        aria-required="true" aria-invalid="false"
                                        placeholder="Mục đích liên hệ..."></span><br>
                                <span class="wpcf7-form-control-wrap textarea-476"><textarea name="note" cols="40"
                                        rows="10" class="wpcf7-form-control wpcf7-textarea wpcf7-validates-as-required"
                                        aria-required="true" aria-invalid="false"
                                        placeholder="Nội dung chi tiết..."></textarea></span><br>
                                <input name="submit-lienhe" type="submit" value="Gửi liên hệ"
                                    class="wpcf7-form-control ">
                            </p>
                            <div class="wpcf7-response-output wpcf7-display-none"></div>
                            <?php 
                    $error = '';
                if(isset($_POST['submit-lienhe'])){
                    $full_name = $_POST['full_name'];
                    $email = $_POST['email'];
                    $phone_number= $_POST['phone_number'];
                    $status = $_POST['status'];
                    $note= $_POST['note'];
                    $timestamp = time();
                    $created_at = strftime("%Y-%m-%d  %H:%M:%S", $timestamp);

                    // echo "<h1>$date_815</h1>";
                    if (empty($full_name)) {
                    $error .= '<p class="error">Please enter Name.</p>';
                }
                if (empty($phone_number)) {
                    $error .= '<p class="error">Please enter Phone Number.</p>';
                }

                if (empty($email)) {
                    $error .= '<p class="error">Please enter Email.</p>';
                }
                if (empty($note)) {
                    $error .= '<p class="error">Please enter Note.</p>';
                }
                if (empty($error)) {
                    // $query = "SELECT * FROM table_details WHERE phone_number = '$phone_number'";  
                    // $result = mysqli_query($connect, $query);  

                    // if (mysqli_num_rows($result) > 0)
                    // {
                    // echo '<p class= "p-loi">Trùng Phone_number!! Vui Lòng Nhập Lại</p>';

                    // // Dừng chương trình
                    // die ();
                    // }


                    $sql = "INSERT INTO feedback VALUES (null,'$full_name', '$email', '$phone_number', '$note', '$status', '$created_at', '')";
                    echo "Cảm Ơn Đã Liên Hệ Với Chúng Tôi. Chúng Tôi Sẽ Trả Lời Tin Nhắn Sớm Nhất !!!";
                    $error .= '<p class="error">Xin Cảm Ơn Quý Khách Đã Liên Hệ Với Chúng Tôi. Chúng Tôi Sẽ Trả Lời Sớm Nhất !!!</p>';
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

            <style scope="scope">

            </style>
        </div>
    </div>

    <?php require_once "./layout/footer.php"; ?>
    </div>
    </div>
</body>
<script src="./dist/bootstrap-5.0.2-dist/js/bootstrap.js"></script>

</html>