<?php
include("conn.php");

$id = $_GET['id'];

$query = "DELETE FROM `employee` WHERE id = '$id' ";

$data = mysqli_query($conn , $query);

if($data)
{
    echo "<script>alert('Recorded Deleted')</script>";

    ?>

<meta http-equiv="refresh" content="0; url = http://localhost/Crud-Php/display.php">

    <?php
}
else
{
    echo "ERROR...........";
}

?>