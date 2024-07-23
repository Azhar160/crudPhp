<?php
include ("conn.php");

$query = "SELECT * FROM employee";

$result = mysqli_query($conn, $query);


 
// if($total = mysqli_num_rows($result) > 0){


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<table border="2px solid black">
    <tr>
        <th>ID</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Gender</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Address</th>
        <th colspan="2">Operation</th>
    </tr>
    
    <tr>
    <?php while($data = mysqli_fetch_assoc($result)) {?>
        <td><?php echo $data['id']; ?></td>
        <td><?php echo $data['fname']; ?></td>
        <td><?php echo $data['lname']; ?></td>
        <td><?php echo $data['gender']; ?></td>
        <td><?php echo $data['email']; ?></td>
        <td><?php echo $data['phone']; ?></td>
        <td><?php echo $data['address']; ?></td>
        <?php echo "<td><a href='update.php?id=$data[id]'>Update</a></td>"?>
        <?php echo "<td><a href='delete.php?id=$data[id]'>Delete</a></td>"?>
       
    </tr>
    <?php } ?>
</table>



</body>
</html>