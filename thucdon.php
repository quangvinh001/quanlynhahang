<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./dist/bootstrap-5.0.2-dist/css/bootstrap.css" />
    <link rel="stylesheet" href="./dist/css/layout.css" />
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
    <title>Thực Đơn</title>
    <style>
    .thucdon .top-thucdon {
        background: url(./dist/img/banner.jpg) center center no-repeat;
        background-size: cover;
        justify-content: center;
        align-items: center;
        height: 400px;
        display: flex;
    }

    .thucdon .text-top {
        font-family: cursive;
        font-size: 67px;
        text-align: center;
        color: #ff0000;
    }

    .bottom-thudon {
        display: grid;
        grid-template-columns: 1fr 1fr 1fr 1fr 1fr;
        grid-template-rows: 400px 400px 400px 400px 400px 400px 400px 400px 400px;
        grid-column-gap: 20px;
        margin: 30px;
        grid-row-gap: 20px;
    }

    .bottom-img {
        background-size: contain;
        background-repeat: no-repeat;
    }

    .bottom-img:first-child {
        background-image: url(./dist/img/product1.jpg);
        grid-column: 2/6;
        grid-row: 1/4;
    }

    .bottom-img:nth-child(2) {
        background-image: url(./dist/img/product2.jpg);
        grid-column: 3/6;
        grid-row: 4/7;
        margin-left: -147px;
    }

    .bottom-img:nth-child(3) {
        background-image: url(./dist/img/product3.jpg);
        grid-column: 1/7;
        grid-row: 7/10;
        margin-left: 62px;
    }

    .bottom-img:nth-child(4) {
        background-image: url(./dist/img/product4.jpg);
        grid-column: 4/6;
        grid-row: 7/9;
        padding-top: -35px;
        margin-top: 3px;
    }
    </style>
</head>

<body>
    <?php require_once "./layout/menu.php"; ?>
    <div class="thucdon">
        <div class="top-thucdon">
            <h1 class="text-top">Thực Đơn</h1>
        </div>
        <div class="bottom-thudon">
            <div class="bottom-img"></div>
            <div class="bottom-img"></div>
            <div class="bottom-img"></div>
            <div class="bottom-img"></div>
            <div class="bottom-img"></div>
        </div>
    </div>
    <?php require_once "./layout/footer.php"; ?>
    </div>
    </div>
</body>
<script src="./dist/bootstrap-5.0.2-dist/js/bootstrap.js"></script>

</html>