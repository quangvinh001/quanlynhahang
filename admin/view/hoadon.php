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
    <link href="../../dist/css/styles.css" rel="stylesheet" />
    <link href="../../dist/css/admin.css" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    <style>
    a.btn.btn-primaryy {
        margin-left: 30vh;

    }

    .accordion-item {
        display: flex;
    }

    .accordion-flush .accordion-item:first-child {

        margin-left: 34px;
    }
    </style>
</head>

<body class="sb-nav-fixed">
    <!-- nav -->
    <?php require_once "../layout/header.php"; ?>
    <div id="layoutSidenav">
        <!-- menu -->
        <?php require_once "../layout/menu.php"; ?>

        <div id="layoutSidenav_content">

            <div class="body-admin">
                <div class="top-body">
                    <h1>Hóa Đơn</h1>
                </div>
                <div class="bottom-body">
                    <div class="accordion accordion-flush" id="accordionFlushExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingOne">
                                <button type="button" class="btn btn-outline-secondary collapsed"
                                    data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false"
                                    aria-controls="flush-collapseOne">Tất Cả Hóa Đơn</button>
                            </h2>
                            <h2 class="accordion-header" id="flush-headingTwo">
                                <button class="btn btn-outline-secondary collapsed" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false"
                                    aria-controls="flush-collapseTwo">
                                    Đã Thanh Toán
                                </button>
                            </h2>
                            <h2 class="accordion-header" id="flush-headingThree">
                                <button class="btn btn-outline-secondary collapsed" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#flush-collapseThree"
                                    aria-expanded="false" aria-controls="flush-collapseThree">
                                    Chờ Xác Nhận Thanh Toán
                                </button>
                            </h2>

                            <h2 class="accordion-header" id="flush-headingfour">
                                <button class="btn btn-outline-secondary collapsed" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#flush-collapsefour" aria-expanded="false"
                                    aria-controls="flush-collapsefour">
                                    Đã Hủy
                                </button>
                            </h2>
                            <h2 class="accordion-header" id="flush-headingfive">
                                <button class="btn btn-outline-secondary collapsed" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#flush-collapsefive" aria-expanded="false"
                                    aria-controls="flush-collapsefive">
                                    Hoàn tiền
                                </button>
                            </h2>


                            <a type="button" class="btn btn-primaryy " data-bs-toggle="modal"
                                data-bs-target="#exampleModal">
                                Tùy Chỉ Hiển Thị</a>
                        </div>


                        <div id="flush-collapseOne" class="accordion-collapse collapse"
                            aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                <table border="1" class="table table-bordered table-warning">

                                    <thead>
                                        <tr>
                                            <td width=""> Mã Đơn Hàng</td>
                                            <td width="">Ngày Tạo Đơn</td>
                                            <td width="">Tên Khách Hàng</td>
                                            <td width="">Trang Thái Đơn Hàng</td>
                                            <td width="">Thanh Toán</td>
                                            <td width="">Khách Phải Trả</td>
                                            <td width="">Hoạt Động</td>
                                        </tr>
                                    </thead>
                                    <?php
                   
                                $sql = "SELECT * FROM order";
                                 $result = $conn->query($sql);
                                if ($result->num_rows > 0) {
                                            while($row = $result->fetch_assoc()) {
                                    ?>

                                    <tbody>
                                        <tr role="checkbox">
                                            <td><?php echo $row['id']; ?></td>
                                            <td><?php echo $row['order_date']; ?></td>
                                            <td><?php echo $row['fullname']; ?></td>
                                            <td><?php echo $row['status']; ?></td>
                                            <td> <a href="delete_user.php?id=<?php echo $row['id']; ?>">Chưa Hoàn
                                                    Thành</a></td>
                                            <td><?php echo $row['total_money']; ?></td>
                                            <td><a href="edit_datban.php?id=<?php echo $row['id']; ?>">Edit</a> / <a
                                                    href="delete_datban.php?id=<?php echo $row['id']; ?>">Delete</a>
                                            </td>

                                        </tr>
                                    </tbody>
                                    <?php
                            }}
                                ?>
                                </table>

                            </div>
                        </div>
                        <div id="flush-collapseTwo" class="accordion-collapse collapse"
                            aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">Placeholder content for this accordion, which is intended to
                                demonstrate the <code>.accordion-flush</code> class. This is the second item's
                                accordion body. Let's imagine this being filled with some actual content.</div>
                        </div>
                        <div id="flush-collapseThree" class="accordion-collapse collapse"
                            aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">Placeholder content for this accordion, which is intended to
                                demonstrate the <code>.accordion-flush</code> class. This is the third item's
                                accordion body. Nothing more exciting happening here in terms of content, but just
                                filling up the space to make it look, at least at first glance, a bit more
                                representative of how this would look in a real-world application.</div>
                        </div>
                        <div id="flush-collapsefour" class="accordion-collapse collapse"
                            aria-labelledby="flush-headingfour" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">Placeholder content for this accordion, which is intended to
                                demonstrate the <code>.accordion-flush</code> class. This is the third item's
                                accordion body. </div>
                        </div>
                        <div id="flush-collapsefive" class="accordion-collapse collapse"
                            aria-labelledby="flush-headingfive" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">Placeholder content for this accordion, which is intended to
                                demonstrate the <code>.accordion-flush</code> class. This is the third item's
                                accordion body. Nothing more exciting happening here in terms of content, but just
                                filling up the space to make it look</div>
                        </div>


                    </div>

                    <!-- <button type="button" class="btn btn-outline-secondary" data-bs-toggle="collapse"
                        href="#collapse1">Tất Cả Hóa Đơn</button>

                    <button type="button" class="btn btn-outline-secondary" data-bs-toggle="collapse"
                        href="#collapse2">Đã Thanh Toán</button>
                    <button type="button" class="btn btn-outline-secondary" data-bs-toggle="collapse"
                        href="#collapse3">Chờ Xác Nhận Thanh Toán</button>
                    <button type="button" class="btn btn-outline-secondary" data-bs-toggle="collapse"
                        href="#collapse4">Đã Hủy</button>
                    <button type="button" class="btn btn-outline-secondary" data-bs-toggle="collapse"
                        href="#collapse5">Hoàn Tiền</button> -->


                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Nội Dung Hiển Thị</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form action="/action_page.php">
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="check1" name="option1"
                                                value="something" checked>
                                            <label class="form-check-label" for="check1">Tổng thời gian</label>
                                        </div>
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="check2" name="option2"
                                                value="something">
                                            <label class="form-check-label" for="check2">Loại hình</label>
                                        </div>
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="check2" name="option2"
                                                value="something">
                                            <label class="form-check-label" for="check2">Tên đơn</label>
                                        </div>
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="check2" name="option2"
                                                value="something">
                                            <label class="form-check-label" for="check2">Tổng tiền</label>
                                        </div>
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="check2" name="option2"
                                                value="something">
                                            <label class="form-check-label" for="check2">Thu ngân</label>
                                        </div>
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="check2" name="option2"
                                                value="something">
                                            <label class="form-check-label" for="check2">Loại hình thanh
                                                toán</label>
                                        </div>
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="check2" name="option2"
                                                value="something">
                                            <label class="form-check-label" for="check2">Trạng thái đơn hàng
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="check2" name="option2"
                                                value="something">
                                            <label class="form-check-label" for="check2">Trạng thái thanh toán

                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="check2" name="option2"
                                                value="something">
                                            <label class="form-check-label" for="check2">Thiết bị
                                            </label>
                                        </div>

                                    </form>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary"
                                        data-bs-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary">Save</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <?php require_once "../layout/footer.php"; ?>
        </div>
    </div>
    <script src="../../dist/node_modules/bootstrap/dist/js/bootstrap.bundle.js" crossorigin="anonymous"></script>
    <script src="../../dist/js/scripts.js"></script>
    <script src="../../dist/js/Chart.min.js" crossorigin="anonymous"></script>
    <script src="../../dist/assets/demo/chart-area-demo.js"></script>
    <script src="../../dist/assets/demo/chart-bar-demo.js"></script>
    <script src="../../dist/js/simple-databases@latest" crossorigin="anonymous"></script>
    <script src="../../dist/js/datable-simple-demo.js"></script>
</body>

</html>