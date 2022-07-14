<?php
require_once "../../model/data.php";
if(isset($_REQUEST['id']) and $_REQUEST['id']!=""){
$id=$_GET['id'];
$sql = "DELETE FROM table_details WHERE id='$id'";

if ($conn->query($sql) === TRUE) {
echo "Xóa Thành Công. <a href='javascript: history.go(-1)'>Trở lại</a>";
} else {
echo "Error updating record: " . $conn->error;
}

$conn->close();
}

?>