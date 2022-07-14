<table border="1">
    <tr>
        <td>ID</td>
        <td>Username</td>
        <td>Email</td>
        <td>Phone</td>
    </tr>
    <?php
require 'ketnoi.php';
$query=mysqli_query($conn,"select * from `member`");
while($row=mysqli_fetch_array($query)){
?>
    <tr>
        <td><?php echo $row['username']; ?></td>
        <td><?php echo $row['username']; ?></td>
        <td><?php echo $row['email']; ?></td>
        <td><?php echo $row['phone']; ?></td>
        <td><a href="edit_user.php?id=<?php echo $row['id']; ?>">Edit</a></td>
        <td><a href="delete_user.php?id=<?php echo $row['id']; ?>">Delete</a></td>
    </tr>
    <?php
}
?>
</table>