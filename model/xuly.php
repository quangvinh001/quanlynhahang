<?php

echo "xin chao";

require_once "data.php";
require_once "session.php";

$sql = "SELECT * FROM user";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
// Load dữ liệu lên website
while($row = $result->fetch_assoc()) {
echo "id: " . $row["id"]. " - Tên: " . $row["full_name"]." - Email: ". $row["email"]. " - Ngày đăng ký: ". $row["pwd"]."<br>";
}
} else {
echo "0 results";
}

$conn->close();




?>