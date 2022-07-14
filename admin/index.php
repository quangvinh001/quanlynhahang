<?php 
 session_start();
       if (isset( $_SESSION["userid"]) &&  $_SESSION["user"]){
           echo "Xin Chào ";
       
       } else{
           header("location: http://localhost:8080/quanlynhahang/login.php");
       }

 
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
    <link href="../dist/css/styles.css" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../dist/css/admin.css">
    <style>
    :root {
        --color-primary: #7380ec;
        --color-light: rgba(132, 139, 200, 0.18);
        --color-danger: #ff7782;
        --color--success: #41f1b6;
        --color-white: #fff;
        --color-info-dark: #7d8da1;
        --color-dark: #363949;
        --color-primary-variant: #111e88;
        --color-dark-variant: #677483;
        --color-background: #f6f6f9;

        --card-border-radius: 2rem;
        --border-radius-1: 0.4rem;
        --border-radius-2: 0.8rem;
        --border-radius-3: 1.2rem;

        --card-padding: 1.8rem;
        --padding-1: 1.2rem;

        --box-shadow: 0 2rem 3rem var(--color-light)
    }

    main {
        margin-top: 1.4rem;
    }

    main .date {
        display: inline-block;
        background-color: aliceblue;
        border-radius: 0.4rem;
        margin-top: 1rem;
        padding: 0.5rem 1.6rem;

    }

    main .date input[type="date"] {
        background: transparent;
        color: black;

    }

    main .insights {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 1.6rem;

    }

    main .insights>div {
        background: var(--color-white);
        padding: var(--card-padding);
        border-radius: var(--card-border-radius);
        margin-top: 1rem;
        box-shadow: var(--box-shadow);
    }

    main .insights>div:hover {
        box-shadow: none;
    }

    main .insights>div span {
        background: coral;
        padding: 0.5rem;
        border-radius: 50%;
        color: var(--color-white);
        font-size: 2rem;

    }

    main .insights>div.expenses span {
        background: var(--color-danger);
    }

    main .insights>div.income span {
        background: var(--color--success);
    }

    main .insights>div .middle {
        display: flex;
        align-items: center;
        justify-content: space-between;
    }

    main .insights h3 {
        margin: 1rem 0 0.6rem;
        font-size: 1rem;
    }

    main .insights .progress {
        position: relative;
        width: 92px;
        height: 92px;
        border-radius: 50%;
    }

    main .insights svg {
        width: 7rem;
        height: 7rem;

    }

    main .insights svg circle {
        fill: none;
        stroke: var(--color-primary);
        stroke-width: 14;
        stroke-linecap: round;
        transform: translate(5px, 5px);
        stroke-dasharray: 110;
        stroke-dashoffset: 92;

    }

    main .insights.sales svg circle {
        stroke-dashoffset: -30;
        stroke-dasharray: 200;
    }

    main .insights.expenses svg circle {
        stroke-dashoffset: 20;
        stroke-dasharray: 80;
    }

    main .insights.income svg circle {
        stroke-dashoffset: 110;
        stroke-dasharray: 35;
    }
    </style>
</head>

<body class="sb-nav-fixed">

    <!-- nav -->
    <?php require_once "./layout/header.php"; ?>
    <div id="layoutSidenav">
        <!-- menu -->
        <?php require_once "./layout/menu.php"; ?>

        <div id="layoutSidenav_content">
            <?php require_once "./layout/main.php"; ?>
            <?php require_once "./layout/footer.php"; ?>
        </div>
    </div>
    <script src="../dist/node_modules/bootstrap/dist/js/bootstrap.bundle.js" crossorigin="anonymous"></script>
    <script src="../dist/js/scripts.js"></script>
    <script src="../dist/js/Chart.min.js" crossorigin="anonymous"></script>
    <script src="../dist/assets/demo/chart-area-demo.js"></script>
    <script src="../dist/assets/demo/chart-bar-demo.js"></script>
    <script src="../dist/js/simple-databases@latest" crossorigin="anonymous"></script>
    <script src="../dist/js/datable-simple-demo.js"></script>
</body>

</html>