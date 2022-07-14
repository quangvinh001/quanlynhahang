<?php

?>
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
                    <h1>Nhóm Lựa Chọn</h1>
                </div>
                <div class="bottom-body"></div>
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