<?php
require_once "../../../model/data.php";
if(isset($_REQUEST['id']) and $_REQUEST['id']!=""){
$id=$_GET['id'];
$sql = "DELETE FROM category WHERE id='$id'";

if ($conn->query($sql) === TRUE) {
echo '<script language="javascript">alert("Xóa Thành Công !"); window.location="http://localhost:8080/quanlynhahang/admin/view/mathang/danhmuc.php";</script>';

} else {
echo "Error updating record: " . $conn->error;
}

$conn->close();
}

?>