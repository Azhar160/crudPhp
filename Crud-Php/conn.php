<?php
$conn = mysqli_connect("localhost" , "root" , "" , "cyberwarriors");

if($conn)
{
    // echo "Connection Pass";
}else
{
    echo "Connection Failed";
}
?>